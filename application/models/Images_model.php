<?php


class Images_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getName()
	{

	}

	public function setName($input, $table)
	{
		if (isset($input['id_user']) && $input['id_user'] != null)
		{
			$array = array('id_user' => $input['id_user']);
		}
		elseif (isset($input['id_hotel']) && $input['id_hotel'] != null)
		{
			$array = array('id_hotel' => $input['id_hotel']);
		}

		$data = array(
			'image' => $input['image'],
		);
		$this->db->where($array);
		$query = $this->db->update($table, $data);

		return $query;

	}

}
