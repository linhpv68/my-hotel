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
		$this->load->model('Hotel_model');
		$this->load->helper(array('form', 'url'));
	}

	public function add()
	{
		$input = $this->input->post();

		$result = $this->Room_model->add($input);
		if($result == TRUE){
			$this->load->helper('url');
			redirect(base_url().'admin/room?id='.$input['id_hotel']);
		}else{
			$listRoom = $this->Room_model->view($input['id_hotel']);
			$this->load->view('backend/view-room', array(
				'idHotel' => $input['id_hotel'],
				'erro' => 'lỗi không tạo được phòng.',
				'listRoom' => $listRoom
			));

		}
	}

	public function edit()
	{
		$id = $this->input->get();
		$input = $this->input->post();
		if (!empty($id)){
			$roomType = $this->Room_model->getRoomType($id['idhotel']);
			$roomDetail = $this->Room_model->getRoom($id['idroom']);

			$this->load->view('backend/edit-room', array(
				'roomType' => $roomType,
				'roomDetail'=> $roomDetail,
				'idHotel' => $id['idhotel'],
			));
		}
		if (!empty($input)){
			$result = $this->Room_model->edit($input);
			if ($result == TRUE){
				$this->load->helper('url');
				redirect(base_url().'admin/room?id='.$input['id_hotel']);

			}else{
				$roomType = $this->Room_model->getRoomType($input['id_hotel']);
				$roomDetail = $this->Room_model->getRoom($input['id_room']);

				$this->load->view('backend/edit-room', array(
					'roomType' => $roomType,
					'roomDetail'=> $roomDetail,
					'idHotel' => $id['idhotel'],
					'erro' => 'lỗi không thể sửa được phòng.'
				));

			}

			var_dump($input);
			exit;
		}






	}

	public function delete()
	{
		$input = $this->input->get();

		$query =  $this->Room_model->delete($input['idRoom']);
		if ($query == TRUE){
			$this->load->helper('url');
			redirect(base_url().'admin/room?id='.$input['idHotel']);

		}else{
			$listRoom = $this->Room_model->view($input['idHotel']);
			$this->load->view('backend/add-room', array(
				'idHotel' => $input['idHotel'],
				'erro' => 'lỗi không xóa được phòng.',
				'listRoom' => $listRoom
			));
		}

	}

	public function view()
	{
		$id = $this->input->get('id');
		$listRoom = $this->Room_model->view($id);

		$this->load->view('backend/view-room', array(
			'idHotel' => $id,
			'listRoom' => $listRoom
		));
	}

	public function search()
	{
		$id = $this->input->get('id');
		$hotelInfo = $this->Hotel_model->get($id,'edit');
		$listRoom = $this->Room_model->search($id);


		$this->load->view('frontend/search-results-room', array(
			'listRoom' => $listRoom,
			'hotelInfo' => $hotelInfo
		));
	}

	public function deal()
	{
		$input = $this->input->post();

		if (empty($input)){
			$id = $this->input->get('id');
			$input = $this->input->get();
			$roomInfo = $this->Room_model->deal($id);
			$roomInfo['checkin'] = $input['check-in'];
			$roomInfo['checkout'] = $input['check-out'];


			$this->load->view('frontend/payment', array(
				'roomInfo' => $roomInfo
			));
		}else{
			var_dump($input);
			exit;
		}

	}

	public function getRoomType(){
		$idHotel = $this->input->post('id');
		$result = $this->Room_model->getroomtype($idHotel);
		echo  json_encode($result);

	}

	public function getRoom()
	{
		$id = $this->input->get('id');
		$listRoom = $this->Room_model->view($id);

		echo json_encode($listRoom);
	}
}
