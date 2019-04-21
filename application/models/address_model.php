<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/19/2019
     * Time: 12:55 AM
     */

    class address_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function thanhpho()
        {

            $this->db->select("*");
            return $this->db->get('tthanhpho')->result_array();

        }

        public function quanhuyen($id)
        {

            $this->db->select("*");
            $array = array('matp' => $id);
            $this->db->where($array);
            return $this->db->get('tquanhuyen')->result_array();
        }

        public function xaphuong($id)
        {
            $this->db->select("*");
            $array = array('maqh' => $id);
            $this->db->where($array);
            return $this->db->get('txaphuongthitran')->result_array();
        }

        public function get_name($id_xaphuong, $id_quanhuyen, $id_thanhpho)
        {
            $this->db->select('tthanhpho.name_tp,tquanhuyen.name_qh');
            $this->db->from('tthanhpho');
            $this->db->join('tquanhuyen', 'tquanhuyen.matp = tthanhpho.matp');
            $array = array(
                'tthanhpho.matp' => $id_thanhpho,
                'tquanhuyen.maqh' => $id_quanhuyen);
            $this->db->where($array);
            $result = $this->db->get()->row_array();

            $this->db->select('txaphuongthitran.name_xaphuong');
            $this->db->from('txaphuongthitran');
            $array = array(
                'txaphuongthitran.xaid' => $id_xaphuong);
            $this->db->where($array);
            $xaphuong = $this->db->get()->row();
            $result['name_xaphuong'] = $xaphuong->name_xaphuong;

            return $result;

        }

    }