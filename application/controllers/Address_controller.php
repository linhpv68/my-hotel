<?php
    /**
     * Created by PhpStorm.
     * User: phung
     * Date: 4/19/2019
     * Time: 1:43 AM
     */

    class Address_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Address_model');
        }

		public function thanhpho(){
			$id = $this->input->post('id');

			if ($id){
				$data= $this->Address_model->thanhpho();
				echo json_encode($data);
			}

		}

        public function quanhuyen(){
            $id = $this->input->post('id');
            if ($id){
                $data= $this->Address_model->quanhuyen($id);
                echo json_encode($data);
            }


        }

        public function xaphuong(){
            $id = $this->input->post('id');
            if ($id){
                $data= $this->Address_model->xaphuong($id);
                echo json_encode($data);
            }


        }

    }
