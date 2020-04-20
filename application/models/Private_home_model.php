<?php

/**
 *
 */
class Private_home_model extends CI_Model
{

	function insert($data)
	{

		$this->db->insert('table_home', $data);
		return $this->db->insert_id();

	}
	function select_home()
	{
		$query=$this->db->get('table_home');
		return $query;
	}
//home function
	function insert_home($data)
	{

		$this->db->insert('table_home', $data);
		return $this->db->insert_id();

	}
	public function getAllhomes()
	{
		$query = $this->db->get('table_home');
		return $query->result();
	}
	public function getHome($id)
	{
		$query = $this->db->get_where('table_home',array('home_id'=>$id));
		return $query->row_array();
	}
	public function updatehome($user, $id)
	{
		$this->db->where('table_home.home_id', $id);
		return $this->db->update('table_home', $user);
	}
	public function deletehome($id)
	{
		$this->db->where('table_home.home_id', $id);
		return $this->db->delete('table_home');
	}
}



