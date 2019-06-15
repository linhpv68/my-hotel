<?php


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

	/*public function edit_api()
	{

	}*/

	/*public function sendEmail($email)
	{
		$this->load->library('email');
		// Cấu hình
		$config['protocol'] = 'sendmail';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);

		//cau hinh email va ten nguoi gui
		$this->email->from('linh.pv68@gmail.com', 'Phùng Văn Linh');
		//cau hinh nguoi nhan
		$this->email->to($email);

		$this->email->subject('Successful transaction.');
		$this->email->message('Your transaction has been successful. Thank you for using our service.');

		//dinh kem file
//		$this->email->attach('/path/to/photo1.jpg');
		//thuc hien gui
		if (!$this->email->send()) {
			// Generate error
			echo $this->email->print_debugger();
			exit;
		} else {
			//echo 'Gửi email thành công';
		}


	}*/

}
