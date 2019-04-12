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
            $data = array();
            $data['title'] = 'Multiple file upload';

            // retrieve the number of images uploaded;
            $number_of_files = sizeof($files['tmp_name']);
            // considering that do_upload() accepts single files, we will have to do a small hack so that we can upload multiple files. For this we will have to keep the data of uploaded files in a variable, and redo the $_FILE.
            $errors = array();

            // first make sure that there is no error in uploading the files
            for ($i = 0; $i < $number_of_files; $i++) {
                if ($files['error'][$i] != 0) $errors[$i][] = 'Không thể upload' . $files['name'][$i];
            }
            if (sizeof($errors) == 0) {
                //for each file we will have to do the upload
                //the first load the upload library
                $CI =& get_instance();
                $CI->load->library('upload');
                // next pass the upload path for the images
                $config['upload_path'] = FCPATH . '/uploads/';
                //the make sure we allow only certain type of images
                $config['allowed_types'] = 'gif|jpg|png';
                for ($i = 0; $i < $number_of_files; $i++) {

                    $_FILES['files']['name'] = $files['name'][$i];
                    $_FILES['files']['type'] = $files['type'][$i];
                    $_FILES['files']['tmp_name'] = $files['tmp_name'][$i];
                    $_FILES['files']['error'] = $files['error'][$i];
                    $_FILES['files']['size'] = $files['size'][$i];
                    //initialize the upload library
                    $CI->upload->initialize($config);
                    // the retrieve the number of files that were uploaded
                    if ($CI->upload->do_upload('files')) {
                        $data['uploads'][$i] = $CI->upload->data();
                    } else {
                        $data['upload_errors'][$i] = $CI->upload->display_errors();
                    }
                }
            } else {
                return $errors;
            }
            return $data;

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