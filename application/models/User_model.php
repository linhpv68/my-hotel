<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/7/2019
     * Time: 3:34 PM
     */

    class User_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function login($data)
        {
            $this->db->select('*');
            $array = array('username' => $data['username'], 'password' => md5($data['password']));
            $this->db->where($array);
            return $this->db->get('tuser')->row_array();
        }

        public function register($data)
        {
            //Kiểm tra xem đã có trùng username không.
            $this->db->select('username');
            $array = array('username' => $data['username']);
            $this->db->where($array);
            $result = $this->db->get('tuser')->num_rows();
            if ($result == 1) {
                $result = false;
                return $result;
            } elseif ($result == 0) {
                $data['password'] = md5($data['password']);
                $result = $this->db->insert('tuser', $data);
                return $result;
            }


        }

        public function add($data)
        {
            //Kiểm tra xem đã có trùng username không.
            $this->db->select('username');
            $array = array('username' => $data['username']);
            $this->db->where($array);
            $result = $this->db->get('tuser')->num_rows();
            if ($result == 1) {
                $result = false;
                return $result;
            } elseif ($result == 0) {
                $data['password'] = md5($data['password']);
                $result = $this->db->insert('tuser', $data);
                return $result;
            }
        }

        public function edit($input)
        {
            $array = array('id_user' => $input['id_user']);
            $input['password'] = md5($input['password']);
            $this->db->where($array);
            $query = $this->db->update('tuser',$input);

            return $query;
        }

        public function delete($id)
        {
            $array = array('id_user' => $id);
            $this->db->where($array);
            $query = $this->db->delete('tuser');

            return $query;
        }

        public function view($data)
        {
            if ($data === "all") {
                //lấy tất cả
                $this->db->select('*');
                return $this->db->get('tuser')->result_array();
            } else {
                //lấy 1 user
                $this->db->select('*');
                $array = array('id_user' => $data);
                $this->db->where($array);
                $user = $this->db->get('tuser')->row_array();

                return $user;
            }


        }




    }