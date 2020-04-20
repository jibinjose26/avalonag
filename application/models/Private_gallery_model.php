<?php


/**
 *
 */
class Private_gallery_model extends CI_Model
{

	function insert($data)
	{

		$this->db->insert('home_gallery', $data);
		return $this->db->insert_id();

	}

	function select_gallery()
	{
		$query = $this->db->get('home_gallery');
		return $query;
	}

//home function
	function insert_home_gallery($data)
	{

		$this->db->insert('home_gallery', $data);
		return $this->db->insert_id();

	}

	public function getAllgallery()
	{
		$query = $this->db->get('home_gallery');
		return $query->result();
	}

	public function getgallery($id)
	{
		$query = $this->db->get_where('home_gallery', array('home_gallery_id' => $id));
		return $query->row_array();
	}

	public function updategallery($user, $id)
	{
		$this->db->where('home_gallery.home_gallery_id', $id);
		return $this->db->update('home_gallery', $user);
	}

	public function deletegallery($id)
	{
		$this->db->where('home_gallery.home_gallery_id', $id);
		return $this->db->delete('home_gallery');
	}
}



