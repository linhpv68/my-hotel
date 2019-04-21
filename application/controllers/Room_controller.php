<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/18/2019
     * Time: 5:15 PM
     */

    class Room_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Room_model');
            $this->load->helper(array('form', 'url'));
        }

        public function add(){
        }
        public function edit(){
        }
        public function delete(){
        }
        public function view(){

            $this->load->view('backend/view-room');
        }

    }