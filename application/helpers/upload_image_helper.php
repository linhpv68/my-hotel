<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/8/2019
     * Time: 10:46 AM
     */
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    if (!function_exists('add_images')) {
        function add_images($files)
        {
            $config['upload_path'] = FCPATH . '/assets/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $CI =& get_instance();
            $CI->load->library('upload', $config);

            //$this->load->library('upload', $config);

            /*echo $config['upload_path'];
            exit;*/

            if (!$CI->upload->do_upload('files')) {
                $error = array('error' => $CI->upload->display_errors());
                return $error;
                //$this->load->view('upload', $error);
            } else {
                $data = array('upload_data' => $CI->upload->data());
                return $data;
                //$this->load->view('upload_success', $data);
            }
        }


    }

    if (!function_exists('delete_image')) {
        function delete_image($file_name)
        {
            if (isset($file_name)) {
                $file = FCPATH . '/assets/images/'. $file_name;
                if (file_exists($file)) {
                    //Xóa File tại src
                    unlink($file);
                }
            }
        }
    }