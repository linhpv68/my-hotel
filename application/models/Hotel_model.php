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
		$this->load->database();
	}

	public function add($input)
	{
		//Kiểm tra xem đã có trùng name không.
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

	public function edit($input)
	{
		$array = array('id_hotel' => $input['id_hotel']);
		$this->db->where($array);
		$query = $this->db->update('thotel',$input);

		return $query;
	}

	public function delete($id)
	{

		$array = array('id_hotel' => $id);
		$this->db->where($array);
		$query = $this->db->delete('thotel');
		return $query;

	}

	public function get($id, $method)
	{
		switch ($method) {
			case 'all':
				//code
				$this->db->select('*');
				return $this->db->get('thotel')->result_array();

				break;
			case 'image':
				//code
				$this->db->select('images');
				$array = array('id_hotel' => $id);
				$this->db->where($array);
				$result = $this->db->get('thotel')->row_array();

				return $result['images'];
				break;
			case 'edit':

				$this->db->select('*');
				$array = array('id_hotel' => $id);
				$this->db->where($array);
				$result = $this->db->get('thotel')->row_array();

				return $result;
				break;
		}
	}

	public function search($key, $method, $sort)
	{
		if ($sort != '') {

			switch ($method) {
				case '0':
					$this->db->select('*');
					$this->db->like('name_tp', $key);
					$this->db->from('thotel');
					$this->db->order_by("prices", "asc");
					$this->db->join('tthanhpho', 'tthanhpho.matp = thotel.matp');
					break;
				case '1':
					$this->db->select('*');
					$this->db->like('hotel_name', $key);
					$this->db->from('thotel');
					$this->db->order_by("prices", "asc");
					break;
			}
			$query = $this->db->get()->result_array();
			return $query;

		} else {
			switch ($method) {
				case '0':
					$this->db->select('*');
					$this->db->like('name_tp', $key);
					$this->db->from('thotel');
					$this->db->join('tthanhpho', 'tthanhpho.matp = thotel.matp');
					break;
				case '1':
					$this->db->select('*');
					$this->db->like('hotel_name', $key);
					$this->db->from('thotel');
					break;
			}
			$query = $this->db->get()->result_array();
			return $query;
		}


	}


}
