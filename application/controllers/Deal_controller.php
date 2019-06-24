<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deal_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Deal_model');
		$this->load->helper(array('form', 'url'));
	}

	public function add()
	{
		$input = $this->input->post();

		$add = $this->Deal_model->add($input);
		if ($add == TRUE) {
			echo 'success';

			// trừ số lượng phòng.
			$this->edit_number_room($input['id_room']);


			$ss_name = $this->session->userdata('userInfo');

			if ($ss_name['username'] != NULL) {
				$this->load->helper('url');
				redirect(base_url() . 'user/history');
			} else {
				$this->load->helper('url');
				redirect(base_url());
			}

		} else {
			echo 'erro';

		}


	}

	public function edit()
	{
		$input = $this->input->get();
		$post = $this->input->post();
		if (!empty($post)) {
			$result = $this->Deal_model->edit($post);
			if ($result == true) {
				echo json_encode(true);
			} else {
				echo json_encode(false);
			}
		}
		if (!empty($input) && $input['id'] != '') {

			$result = $this->Deal_model->edit($input);
			if ($result == true) {
				$this->view();
			} else {
				echo 'lỗi không thể sửa trạng thái phòng';
				exit;
			}

		}
	}

	public function edit_history()
	{
		$input = $this->input->get();
		if (!empty($input) && $input['id'] != '') {
			$result = $this->Deal_model->edit($input);
			if ($result == true) {
				$this->load->helper('url');
				redirect(base_url() . 'user/history');
			} else {
				echo 'lỗi không thể sửa trạng thái phòng';
				exit;
			}


		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$result = $this->Deal_model->delete($id);
		if ($result == true) {
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}
	}

	public function view()
	{
		$data = $this->session->userdata('userInfoAdmin');

		if ($data['role'] != null && $data['role'] == 2) {
			$listDeals = $this->Deal_model->getData('');
			$this->load->view('backend/deal', array('listDeals' => $listDeals));
		} else {
			$this->load->helper('url');
			redirect(base_url() . 'admin/login');
		}
//		exit;
	}

	public function delete_history()
	{
		$id = $this->input->get('id');
		$result = $this->Deal_model->delete($id);
		if ($result == true) {
			$this->load->helper('url');
			redirect(base_url() . 'user/history');
		} else {
			echo 'lỗi không thể xóa.';
			exit;
		}
	}

	public function view_api()
	{
		$listDeals = $this->Deal_model->getData('');
		echo json_encode($listDeals);
	}

	public function edit_number_room($id_room)
	{

		//lấy số phòng hiện tại

		$this->load->model('Room_model');
		$view = $this->Room_model->getRoom($id_room);
		$amount = $view['status'];
		$amount = $amount - 1;
		//tiến hành trừ
		$data = array(
			'id_room' => $id_room,
			'status' => $amount
		);
		$result = $this->Room_model->edit($data);


		return $result;

	}

	public function edit_number_room_api()
	{
		$id = $this->input->post('id');
		if (isset($id) && $id != null) {
			//lấy số phòng hiện tại

			$this->load->model('Room_model');
			$view = $this->Room_model->getRoom($id);
			$amount = $view['status'];
			$amount = $amount + 1;
			//tiến hành cộng
			$data = array(
				'id_room' => $id,
				'status' => $amount
			);
			$result = $this->Room_model->edit($data);
			return $result;
		}

		return false;


	}


	/*public function edit_api()
	{

	}*/

}
