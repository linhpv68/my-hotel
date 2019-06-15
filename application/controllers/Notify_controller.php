<?php


class Notify_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}

	public function user(){
		$this->load->model('User_model');
		$result = $this->User_model->view('all');
		//var_dump($result);
		echo json_encode(sizeof($result));


	}

	public function deal(){
		$type = $this->input->post();
		$this->load->model('Deal_model');
		$result = $this->Deal_model->getDeal('all');
//		if ($type === 'all'){
//			$result = $this->Deal_model->getDeal('all');
//		}else{
//			$result = $this->Deal_model->getDeal('0');
//		}



		echo json_encode($result);
//		echo json_encode(123);
	}


}
