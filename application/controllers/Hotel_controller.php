<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: phung
 * Date: 4/5/2019
 * Time: 12:47 AM
 */
class Hotel_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel_model');
		$this->load->helper(array('form', 'url'));
	}

	public function add()
	{
		$input = $this->input->post();

		//Thêm hình ảnh vào source code
		$this->load->helper('form');
		$files = $_FILES['files'];
		$this->load->helper('upload_image_helper');
		$results = add_images($files);
		if (isset($results['upload_data'])) {
			$input['images'] = $results['upload_data']['file_name'];
		} else {
			$erro = 'Hình ảnh tải lên bị lỗi';
			$this->load->view('backend/view-hotel.php', array(
				'erro' => $erro
			));
		}

		//Xử lý input['address']
		$this->load->model('Address_model');
		$result = $this->Address_model->get_name($input['xaphuong'], $input['quanhuyen'], $input['thanhpho']);
		$input['address'] = $input['address'] . ', ' . $result['name_xaphuong'] . ', ' . $result['name_qh'] . ', ' . $result['name_tp'];
		$input['matp'] = $input['thanhpho'];
		unset($input['thanhpho']);
		unset($input['quanhuyen']);
		unset($input['xaphuong']);

		//Insert vào database
		$query = $this->Hotel_model->add($input);
		if ($query == false) {
			$notify = 'Tên Khách sạn đã được sửa dụng';
			//Xóa ảnh trên source vừa up lên
			delete_image($input['images']);

			$result = $this->get_hotel();
			$this->load->view('backend/view-hotel.php', array(
				'notify' => $notify,
				'list_hotels' => $result['list_hotels'],
				//'citys' => $result['citys']
			));
		} elseif ($query == true) {
			$notify = 'Đã thêm Khách sạn thành công.';
			$result = $this->get_hotel();
			$this->load->view('backend/view-hotel.php', array(
				'notify' => $notify,
				'list_hotels' => $result['list_hotels'],
				//'citys' => $result['citys']
			));
		}

	}

	public function edit()
	{
		$id = $this->input->get('id');
		$input = $this->input->post();

		if (!empty($input)) {

			//Xử lý input['address']
			$this->load->model('Address_model');
			$result = $this->Address_model->get_name($input['xaphuong'], $input['quanhuyen'], $input['thanhpho']);
			$input['address'] = $input['address'] . ', ' . $result['name_xaphuong'] . ', ' . $result['name_qh'] . ', ' . $result['name_tp'];
			$input['matp'] = $input['thanhpho'];
			unset($input['thanhpho']);
			unset($input['quanhuyen']);
			unset($input['xaphuong']);

			//Insert vào database
			$query = $this->Hotel_model->edit($input);
			if ($query == false) {
				$notify = 'Sửa không thành công';
				$result = $this->get_hotel();
				$this->load->view('backend/view-hotel.php', array(
					'notify' => $notify,
					'list_hotels' => $result['list_hotels'],
				));
			} elseif ($query == true) {
				$notify = 'Đã sửa Thành công.';
				$result = $this->get_hotel();
				$this->load->view('backend/view-hotel.php', array(
					'notify' => $notify,
					'list_hotels' => $result['list_hotels'],
				));

			}
		}


		$detail = $this->Hotel_model->get($id, 'edit');

		$this->load->view('backend/edit-hotel.php', array(
			'hotel' => $detail
		));

	}

	public function delete()
	{
		$id = $this->input->get('id');
		if (!empty($id)) {
			//Lấy tên ảnh
			$image = $this->Hotel_model->get($id, 'image');
			$this->load->helper('upload_image_helper');

			//Xóa khách sạn
			$query = $this->Hotel_model->delete($id);
			if ($query == true) {
				$notify = 'Đã xóa khách sạn thành công';
				//Xóa ảnh
				delete_image($image);

				$result = $this->get_hotel();
				$this->load->view('backend/view-hotel.php', array(
					'notify' => $notify,
					'list_hotels' => $result['list_hotels'],
					//'citys' => $result['citys']
				));

			} elseif ($query == false) {
				$notify = 'Xóa khách sạn không thành công';
				$result = $this->get_hotel();
				$this->load->view('backend/view-hotel.php', array(
					'notify' => $notify,
					'list_hotels' => $result['list_hotels'],
					//'citys' => $result['citys']
				));

			}


		} else {
			$this->load->helper(url);
			redirect(FCPATH . '/admin/view-hotel');
		}

	}

	public function view()
	{
		$result = $this->get_hotel();
		$this->load->view('backend/view-hotel', array(
			'list_hotels' => $result['list_hotels'],
			//'citys' => $result['citys']
		));
	}

	public function get_hotel()
	{

		$list_hotels = $this->Hotel_model->get('', 'all');

		$array = array(
			'list_hotels' => $list_hotels
		);

		return $array;

	}

	public function search()
	{
		$input = $this->input->get();
		if (isset($input['sort'])) {
			$result = $this->Hotel_model->search($input['key'], '0', $input['sort']);

			if ($result == NULL) {
				$result = $this->Hotel_model->search($input['key'], '1', $input['sort']);
			}
			$this->load->view('frontend/main', array(
				'title' => 'kết quả tìm kiếm',
				'subview' => 'frontend/search-results',
				'result' => $result,
				'input' => $input,

			));
		} else {
			//tìm khách sạn theo địa điểm 'thành phố'
			//*với 0 :  tìm theo thành phố, 1 : tìm theo khách sạn*/

			$result = $this->Hotel_model->search($input['key'], '0', '');

			if ($result == NULL) {
				$result = $this->Hotel_model->search($input['key'], '1', '');
			}
			$this->load->view('frontend/main', array(
				'title' => 'kết quả tìm kiếm',
				'subview' => 'frontend/search-results',
				'result' => $result,
				'input' => $input,

			));
		}


	}

}
