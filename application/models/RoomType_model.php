<?php


class RoomType_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();

	}

	public function add($input)
	{
		//Kiểm tra xem đã có trùng username không.
		$this->db->select('room_name');
		$array = array('room_name' => $input['room_name']);
		$this->db->where($array);
		$result = $this->db->get('troom_category')->num_rows();
		if ($result == 1) {
			$result = false;
			return $result;
		} elseif ($result == 0) {
			$result = $this->db->insert('troom_category', $input);
			return $result;
		}
	}

	public function edit($input){
		$array = array('id_type' => $input['id_type']);
		$this->db->where($array);
		unset($input['id_type']);
		$query = $this->db->update('troom_category',$input);

		return $query;

	}

	public function delete($id)
	{
		$array = array('id_type' => $id);
		$this->db->where($array);
		$query = $this->db->delete('troom_category');
		return $query;
	}

	public function getroomtype($id)
	{

		if ($id == ''){
			$this->db->select('id_type, thotel.id_hotel, room_name, hotel_name');
			$this->db->from('troom_category');
			$this->db->join('thotel', 'thotel.id_hotel = troom_category.id_hotel');
			$result = $this->db->get()->result_array();
		}else{
			$this->db->select('*');
			$array = array('id_type' => $id);
			$this->db->where($array);
			$this->db->from('troom_category');
			$this->db->join('thotel', 'thotel.id_hotel = troom_category.id_hotel');

			$result = $this->db->get()->row_array();
		}

		return $result;
	}

	public function gethotel()
	{

		$this->db->select('id_hotel,hotel_name');
		$result = $this->db->get('thotel')->result_array();
		return $result;
	}

}
