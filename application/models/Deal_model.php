<?php

class Deal_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function add($data)
	{
		$result = $this->db->insert('tdeal', $data);
		return $result;
	}

	public function edit($input)
	{
		$array = array('id' => $input['id']);
		$this->db->where($array);
		$query = $this->db->update('tdeal',$input);

		return $query;

	}

	public function delete($id)
	{
		$array = array('id' => $id);
		$this->db->where($array);
		$query = $this->db->delete('tdeal');
		return $query;

	}

	public function getData($id)
	{
		if ($id == ''){
			$this->db->select('*');
			$this->db->from('tdeal');
			$this->db->join('troom', 'troom.id_room = tdeal.id_room');
			$this->db->join('troom_category', 'troom_category.id_type = troom.id_type');
			$this->db->join('thotel', 'thotel.id_hotel = troom_category.id_hotel');

			$query = $this->db->get()->result_array();

			return $query;
		}
		else{
			$this->db->select('*');
			$array = array('tdeal.id_user_deal'=>$id);
			$this->db->where($array);
			$this->db->from('tdeal');
			$this->db->join('troom', 'troom.id_room = tdeal.id_room');
			$this->db->join('troom_category', 'troom_category.id_type = troom.id_type');
			$this->db->join('thotel', 'thotel.id_hotel = troom_category.id_hotel');

			$query = $this->db->get()->result_array();

			return $query;
		}


	}

	public function getDeal($type){
		if ($type == 'all'){
			$this->db->select('status_deal');
			$this->db->from('tdeal');
			$query = $this->db->get()->result_array();
			return $query;
		}
		elseif($type =='0'){
			$this->db->select('status_deal');
			$this->db->from('tdeal');
			$array = array('status_deal'=> 0);
			$this->db->where($array);
			$query = $this->db->get()->result_array();
			return $query;
		}


	}

}
