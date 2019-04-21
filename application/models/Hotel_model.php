<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/18/2019
     * Time: 5:26 PM
     */

    class Hotel_model extends CI_Model
    {
        public function __construct()
        {
//            parent::__construct();
            $this->load->database();
        }

        public function add($input){
            //Kiểm tra xem đã có trùng username không.
            $this->db->select('hotel_name');
            $array = array('hotel_name' => $input['hotel_name']);
            $this->db->where($array);
            $result = $this->db->get('thotel')->num_rows();
            if ($result == 1) {
                $result = false;
                return $result;
            } elseif ($result == 0) {
                $result = $this->db->insert('thotel', $input);
                return $result;
            }

        }
        public function edit(){}
        public function delete($id){
            $array = array('id_hotel' => $id);
            $this->db->where($array);
            $query = $this->db->delete('thotel');

            return $query;

        }
        public function get($data){
            if ($data === 'all'){
                $this->db->select('*');
                return $this->db->get('thotel')->result_array();
                echo 'lỗi tại model';
                exit;
            }else{
                $this->db->select('images');
                $array = array('id_hotel'=>$data);
                $this->db->where($array);
                $result = $this->db->get('thotel')->row_array();

                return $result['images'];
            }


        }


    }