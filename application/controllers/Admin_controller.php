<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/8/2019
     * Time: 12:45 AM
     */

    class Admin_controller extends CI_Controller
    {
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('Admin_model');
        }

        public function index()
        {
            $ss_name = $this->session->userdata('userInfoAdmin');
            if ($ss_name['username'] != NULL) {
                $this->load->view('backend/home');
            } else {
                $this->load->helper('url');
                redirect('http://localhost/quanlykhachsan/admin/login');
            }
        }

        public function login()
        {
            $input = $this->input->post();
            if (isset($input['username'])) {
                $user = $this->Admin_model->login($input);

                if ($user == NULL) {
                    $erro = 'Tên tài khoản hoặc mật khẩu sai.';
                    $this->load->view('backend/login.php', array(
                        'erro' => $erro
                    ));
                } elseif ($user['role'] == '1' or $user['role'] == '2') {
                    /*Lưu thông tin user vào session khi đăng nhập thành công*/
                    $userdata = $user;
                    $this->session->set_userdata('userInfoAdmin', $userdata);
                    $this->load->helper('url');
                    redirect('http://localhost/quanlykhachsan/admin');
                } else {
                    $erro = 'Tài khoản này không được phép truy cập. vui lòng liên hệ Hotline 039.569.9029';
                    $this->load->view('backend/login.php', array(
                        'erro' => $erro
                    ));
                }
            } else {
                $this->load->view('backend/login.php');
            }
        }

        public function logout()
        {
            /*Delete session*/
            $this->session->unset_userdata('userInfoAdmin');
            //chuyển trang và controller
            $this->load->helper('url');
            redirect('http://localhost/quanlykhachsan/admin');
        }
    }