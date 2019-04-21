<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
            $input = $this->input->post();
            $id = $this->input->get('id');

            if (isset($input) && $input != NULL){
                /*var_dump($input);
                exit;*/
                // 1. Add image
                /*$input['image'] = '';*/
                $this->load->helper('form');
                $files = $_FILES['files'];

                if (isset($files) && $files['name'] != NULL){
                    $this->load->helper('upload_image_helper');
                    $results = add_images($files);

                    if (isset($results['upload_data'])) {
                        $input['image'] = $results['upload_data']['file_name'];
                    } else {
                        $user_info = $this->User_model->view($input['id_user']);
                        $erro = 'Hình ảnh tải lên bị lỗi';
                        $this->load->view('backend/edit-profile', array(
                            'notify' => $erro,
                            'user' => $user_info
                        ));
                    }
                }

                //2. edit user
                $user_info = $this->User_model->view($input['id_user']);
                /*var_dump($user_info);
                echo '<pre>';
                print_r($input);
                echo '</pre>';
                exit;*/

                if ($input['username'] == $user_info['username']){

                    $erro = 'Tên tài khoản đã được sửa dụng.';

                    //Xóa ảnh trên sourec vừa up lên vì lỗi tạo tài khoản
                    if (isset($files) && $files['name'] != NULL){
                        delete_image($input['image']);
                    }
                    //$user_info = $this->User_model->view($input['id_user']);
                    $this->load->view('backend/edit-profile', array(
                        'notify' => $erro,
                        'user' => $user_info
                    ));

                }else{
                    if ($input['password'] == $input['re-password']) {
                        unset($input['re-password']);
                        $user = $this->User_model->edit($input);

                        if ($user == false) {
                            $erro = 'Sửa tài khoản đã không thành công';
                            //Xóa ảnh trên sourec vừa up lên
                            if (isset($input['image']) && $input['image'] != NULL){
                                delete_image($input['image']);
                            }
                            $user_info = $this->User_model->view($input['id_user']);
                            $this->load->view('backend/edit-profile', array(
                                'notify' => $erro,
                                'user' => $user_info
                            ));
                        } elseif ($user == true) {
                            $user_info = $this->User_model->view($input['id_user']);
                            $notify = 'Sửa tài khoản thành công.';
                            $this->load->view('backend/edit-profile', array(
                                'notify' => $notify,
                                'user' => $user_info
                            ));
                        }
                    } else {
                        $erro = 'Mật Khẩu không khớp! Mời nhập lại mật khẩu.';
                        //Xóa ảnh trên sourec vừa up lên vì lỗi tạo tài khoản
                        if (isset($files) && $files['name'] != NULL){
                            delete_image($input['image']);
                        }
                        $user_info = $this->User_model->view($input['id_user']);
                        $this->load->view('backend/edit-profile', array(
                            'notify' => $erro,
                            'user' => $user_info
                        ));
                    }
                }


            }else{
                if (isset($id)&&$id != NULL){

                    $user = $this->User_model->view($id);

                    $this->load->view('backend/edit-profile', array(
                        'user' => $user
                    ));
                }else{
                    $this->load->helper('url');
                    redirect('http://localhost/quanlykhachsan/admin');
                }
            }


        }

        public function delete($id)
        {
            $image = $this->User_model->view($id);

            if (isset($image)) {
                $this->load->helper('upload_image_helper');

                if ($image['image'] != NUll) {
                    echo $image['image'];
                    //xóa ảnh
                    delete_image($image['image']);
                }
                //xóa user
                $query = $this->User_model->delete($id);

                if ($query == true) {
                    $this->load->helper('url');
                    redirect('http://localhost/quanlykhachsan/view-users');

                } elseif ($query == false) {
                    $this->load->helper('url');
                    redirect('http://localhost/quanlykhachsan/view-users');
                }

            }
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
                $list_users = $this->User_model->view("all");

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