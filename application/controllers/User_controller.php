<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/5/2019
     * Time: 12:49 AM
     */

    class User_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->helper(array('form', 'url'));
        }


        public function login()
        {
            $ss_name = $this->session->userdata('userInfo');
            $input = $this->input->post();

            if ($ss_name['username'] != NULL) {
                $this->load->helper('url');
                redirect('http://localhost/quanlykhachsan/home');
            } else {
                if (isset($input['username'])) {
                    $user = $this->User_model->login($input);
                    if ($user == NULL) {
                        $erro = 'Tên tài khoản hoặc mật khẩu sai.';
                        $this->load->view('fontend/login.php', array(
                            'erro' => $erro
                        ));
                    } else {
                        /*Lưu thông tin user vào session khi đăng nhập thành công*/
                        $userdata = $user;
                        $this->session->set_userdata('userInfo', $userdata);
                        $this->load->helper('url');
                        redirect('http://localhost/quanlykhachsan');
                    }
                } else {
                    $this->load->view('fontend/login.php');
                }
            }
        }

        public function logout()
        {
            /*Delete session*/
            $this->session->unset_userdata('userInfo');
            //chuyển trang và controller
            $this->load->helper('url');
            redirect('http://localhost/quanlykhachsan');
        }

        public function register()
        {
            $input = $this->input->post();

            if (isset($input['username'])) {
                //1. add image
                $input['image'] = '';
                $this->load->helper('form');
                $files = $_FILES['files'];
                $this->load->helper('upload_image_helper');
                $results = add_images($files);

                if (isset($results['upload_data'])) {
                    $input['image'] = $results['upload_data']['file_name'];
                } else {
                    $erro = 'Hình ảnh tải lên bị lỗi';
                    $this->load->view('fontend/register.php', array(
                        'erro' => $erro
                    ));
                }

                //2. add user

                if ($input['password'] == $input['re-password']) {
                    unset($input['re-password']);
                    $input['role'] = '0';
                    $user = $this->User_model->register($input);
                    if ($user == false) {
                        $erro = 'Tên tài khoản đã được sửa dụng';

                        //Xóa ảnh trên sourec vừa up lên
                        delete_image($input['image']);

                        $this->load->view('fontend/register.php', array(
                            'erro' => $erro
                        ));
                    } elseif ($user == true) {
                        $erro = 'Đã thêm tài khoản thành công.';
                        $this->load->view('fontend/register.php', array(
                            'erro' => $erro
                        ));
                    }
                } else {
                    $erro = 'Mời nhập lại mật khẩu.';

                    //Xóa ảnh trên sourec vừa up lên vì lỗi tạo tài khoản
                    delete_image($input['image']);

                    $this->load->view('fontend/register.php', array(
                        'erro' => $erro
                    ));
                }

            } else {
                $this->load->view('fontend/register.php');
            }
        }

        public function add()
        {
            $input = $this->input->post();

            if (isset($input['username'])) {
                //1. add image
                $input['image'] = '';
                $this->load->helper('form');
                $files = $_FILES['files'];
                $this->load->helper('upload_image_helper');
                $results = add_images($files);

                if (isset($results['upload_data'])) {
                    $input['image'] = $results['upload_data']['file_name'];
                } else {
                    $erro = 'Hình ảnh tải lên bị lỗi';
                    $this->load->view('backend/users', array(
                        'erro' => $erro
                    ));
                }

                //2. add user

                if ($input['password'] == $input['re-password']) {
                    unset($input['re-password']);
                    $user = $this->User_model->add($input);
                    if ($user == false) {
                        $erro = 'Tên tài khoản đã được sửa dụng';

                        //Xóa ảnh trên sourec vừa up lên
                        delete_image($input['image']);

                        $this->load->view('backend/users', array(
                            'erro' => $erro,
                            'list_users' => $this->get_user()
                        ));
                    } elseif ($user == true) {
                        $this->get_user();
                        $erro = 'Đã thêm tài khoản thành công.';
                        $this->load->view('backend/users', array(
                            'erro' => $erro,
                            'list_users' => $this->get_user()
                        ));
                    }
                } else {
                    $erro = 'Mời nhập lại mật khẩu.';
                    //Xóa ảnh trên sourec vừa up lên vì lỗi tạo tài khoản
                    delete_image($input['image']);
                    $this->get_user();
                    $this->load->view('backend/users', array(
                        'erro' => $erro,
                        'list_users' => $this->get_user()
                    ));
                }

            } else {
               /* $this->get_user();*/
                $this->load->view('backend/users', array(
                    'list_users' => $this->get_user()
                ));
            }
        }

        public function edit()
        {
        }

        public function delete($id)
        {
            //$input = $this->input->get();
            var_dump($id) ;
            echo 'xóa';
            exit;
        }

        public function view()
        {
            $list_users = $this->get_user();
                $this->load->view('backend/users', array(
                    'list_users' => $list_users
                ));
        }

        public function get_user()
        {
            $user = $this->session->userdata('userInfoAdmin');

            if ($user['role'] == 2 or $user['role'] == 1) {
                $list_users = $this->User_model->view();

                for ($i = 0; $i < count($list_users); $i++) {
                    if ($list_users[$i]['image'] == NULL) {
                        $list_users[$i]['image'] = 'admin.jpg';
                    }

                    switch ($list_users[$i]['role']) {
                        case 0:
                            $list_users[$i]['role'] = 'user';
                            break;
                        case 1:
                            $list_users[$i]['role'] = 'admin user';
                            break;
                        case 2:
                            $list_users[$i]['role'] = 'admin';
                            break;
                    }

                    switch ($list_users[$i]['gender']) {
                        case 0:
                            $list_users[$i]['gender'] = 'nam';
                            break;
                        case 1:
                            $list_users[$i]['gender'] = 'nữ';
                            break;
                    }

                }
                /*$this->load->view('backend/users', array(
                    'list_users' => $list_users
                ));*/
                return $list_users;
            }

        }

    }