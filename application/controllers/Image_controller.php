<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Images_model');
	}

	public function getName()
	{

	}

	public function setName()
	{

		$input = $this->input->post();
		if ($input['method'] == 0) {
			//Event delete image
			$input['image'] = '';
			if (isset($input['id_hotel']) && $input['id_hotel'] != ''){
				$result = $this->Images_model->setName($input, 'thotel');
			}else{
				$result = $this->Images_model->setName($input, 'tuser');

			}

			//$result = 'ok';
		} else {
			$result = 'rong';
		}
		echo json_encode($result);

	}

	public function deleteImage()
	{

		if (isset($_POST['file'])) {
			$this->load->helper('upload_image_helper');
			//xóa ảnh
			delete_image($_POST['file']);
			echo json_encode($_POST['file']);
		}
	}

	public function upload()
	{
		if (isset($_POST) && !empty($_FILES['files'])) {
			$duoi = explode('.', $_FILES['files']['name']); // tách chuỗi khi gặp dấu .
			$duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
			// Kiểm tra xem có phải file ảnh không
			if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif') {
				// tiến hành upload
				$input = $this->input->post();
				$this->load->helper('upload_image_helper');
				$files = $_FILES['files'];

				$results = add_images($files);
				if (isset($results['upload_data'])) {
					if (!empty($input['id_user']) && $input['id_user'] != ''){
						$data = array(
							'image' => $results['upload_data']['file_name'],
							'id_user' => $input['id_user']
						);
						$result = $this->Images_model->setName($data, 'tuser');
					}elseif (!empty($input['id_hotel']) && $input['id_hotel'] != ''){
						$data = array(
							'image' => $results['upload_data']['file_name'],
							'id_hotel' => $input['id_hotel']
						);
						$result = $this->Images_model->setName($data, 'thotel');

					}
					if ($result ==  true){
						$array = array(
							'msg' => 'upload ảnh thành công',
							'image_name' => $results['upload_data']['file_name']
						);
					}else{
						$array = array(
							'msg' => 'upload ảnh không thành công',
							//'image_name' => $results['upload_data']['file_name']
						);
					}
					echo json_encode($array);

				} else {
					$array = array(
						'msg' => 'upload ảnh không thành công'
					);
					echo json_encode($array);
				}
			} else { // nếu không phải file ảnh
				die('Chỉ được upload ảnh định dạng jpg,png,gif'); // in ra thông báo
			}
		} else {
			die('Lock'); // nếu không phải post method
		}
	}
}
