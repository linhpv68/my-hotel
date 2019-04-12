<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/8/2019
     * Time: 1:09 AM
     */

    class Admin_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function login($data){
            /*role
            0 - user
            1 - Admin user
            2 - Admin
            */
            $this->db->select('*');
            $array = array('username' => $data['username'], 'password' => md5($data['password']));
            $this->db->where($array);
            return $this->db->get('tuser') -> row_array();
        }

    }