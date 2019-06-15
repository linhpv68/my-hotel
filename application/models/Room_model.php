<?php
/**
 * Created by PhpStorm.
 * User: phung
 * Date: 4/18/2019
 * Time: 5:26 PM
 */

class Room_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function add($input)
	{
		var_dump($input);
		unset($input['id_hotel']);
		//Kiểm tra xem đã có trùng username không.
		$this->db->select('id_type');
		$array = array('id_type' => $input['id_type']);
		$this->db->where($array);
		$result = $this->db->get('troom')->num_rows();
		if ($result == 1) {
			$result = false;
			return $result;
		} elseif ($result == 0) {
			$result = $this->db->insert('troom', $input);
			return $result;
		}

	}

	public function edit($input){
		unset($input['id_hotel']);
		$array = array('id_room' => $input['id_room']);
		$this->db->where($array);
		$query = $this->db->update('troom',$input);

		return $query;
	}

	public function delete($id){

		$array = array('id_room' => $id);
		$this->db->where($array);
		$query = $this->db->delete('troom');

		return $query;

	}

	public function view($id)
	{
		if ($id == ''){
			$this->db->select('*');
			$this->db->from('troom_category');
			$this->db->join('troom', 'troom.id_type = troom_category.id_type');
			$result = $this->db->get()->result_array();

		}else{
			$this->db->select('*');
			$this->db->from('troom_category');
			$this->db->join('troom', 'troom.id_type = troom_category.id_type');
			$array = array('troom_category.id_hotel' => $id);
			$this->db->where($array);
			$result = $this->db->get()->result_array();
		}


		return $result;
	}

	public function getRoom($id){
		$this->db->select('*');
		$this->db->from('troom');
		$array = array('id_room' => $id);
		$this->db->where($array);

		$result = $this->db->get()->row_array();

		return $result;


	}

	public function getRoomType($id)
	{

		$this->db->select('*');

		$array = array('id_hotel' => $id);
		$this->db->where($array);
		$result = $this->db->get('troom_category')->result_array();

		return $result;


	}

	public function search($id){
		$this->db->select('*');
		$array = array('id_hotel' => $id);
		$this->db->where($array);
		$this->db->from('troom');
		$this->db->join('troom_category', 'troom_category.id_type = troom.id_type');
		$result = $this->db->get()->result_array();
		return $result;

	}

	public function deal($id)
	{
		//Join 3 table : troom + troomcategory + thotel

		$this->db->select('*');
		$array = array('id_room' => $id);
		$this->db->where($array);
		$this->db->from('troom_category');
		$this->db->join('troom', 'troom.id_type = troom_category.id_type');
		$this->db->join('thotel', 'thotel.id_hotel = troom_category.id_hotel');

		$query = $this->db->get()->row_array();
		return $query;
	}

}
