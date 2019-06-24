<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoomType_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('RoomType_model');
	}

	public function add()
	{
		$input = $this->input->post();
		$request = $this->RoomType_model->add($input);
		if ($request == true){
			$this->load->helper('url');
			redirect(base_url().'admin/room-type');
		}
		if($request == false){

			$result =  $this->RoomType_model->gethotel();
			$listRoomType = $this->RoomType_model->getroomtype('');
			$erro = "Lỗi không thể tạo mới";

			$this->load->view('backend/view-room-type', array(
				'listHotel' => $result,
				'listRoomType' => $listRoomType,
				'erro' => $erro
			));
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$request = $this->RoomType_model->delete($id);

		if ($request == true){
			$this->load->helper('url');
			redirect(base_url().'admin/room-type');
		}
		if ($request == false){
			$result =  $this->RoomType_model->gethotel();
			$listRoomType = $this->RoomType_model->getroomtype('');
			$erro = "Lỗi không thể xóa";

			$this->load->view('backend/view-room-type', array(
				'listHotel' => $result,
				'listRoomType' => $listRoomType,
				'erro' => $erro
			));
		}


	}

	public function edit()
	{
		$input = $this->input->post();


		$request = $this->RoomType_model->edit($input);
		if ($request == true){
			$this->load->helper('url');
			redirect(base_url().'admin/room-type');
		}
		if ($request == false){
			$result =  $this->RoomType_model->gethotel();
			$listRoomType = $this->RoomType_model->getroomtype('');
			$erro = "Lỗi không thể sửa";

			$this->load->view('backend/view-room-type', array(
				'listHotel' => $result,
				'listRoomType' => $listRoomType,
				'erro' => $erro
			));
		}
	}

	public function view()
	{

		$result =  $this->RoomType_model->gethotel();
		$listRoomType = $this->RoomType_model->getroomtype('');

		$this->load->view('backend/view-room-type', array(
			'listHotel' => $result,
			'listRoomType' => $listRoomType
		));
	}


	public function getdata(){
		$id = $this->input->post('id');
		$result =  $this->RoomType_model->gethotel();
		$listRoomType = $this->RoomType_model->getroomtype($id);
		$data = array(
			'listHotel' => $result,
			'listRoomType' => $listRoomType
		);

		echo json_encode($data);
	}

}
