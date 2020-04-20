<?php
/**
 * 
 */
class Contact_model extends CI_Model
{
	function insert($data)
	{
		
		$this->db->insert('table_contactpage',$data);
		return $this->db->insert_id();
	}

	public function getAllContacts()
	{
			$query = $this->db->get('table_contactpage');
			return $query->result(); 
	}
	public function getContact($id)
	{
			$query = $this->db->get_where('table_contactpage',array('contact_id'=>$id));
			return $query->row_array();
	}
	public function updatecontact($user, $id)
	{
			$this->db->where('table_contactpage.contact_id', $id);
			return $this->db->update('table_contactpage', $user);
	}
	public function deletecontact($id)
	{
			$this->db->where('table_contactpage.contact_id', $id);
			return $this->db->delete('table_contactpage');
	}

	public function getAllUserRegistrations()
	{

		$this->db->select('table_user_registration.*, table_eventpage.*');
		$this->db->from('table_user_registration');
		$this->db->join('table_eventpage', 'table_eventpage.id = table_user_registration.event_id', 'left');
		$query = $this->db->get();
		
			// $query = $this->db->get('table_user_registration');
			return $query->result(); 
	}
	public function getAlldonors()
	{

		$query = $this->db->get('customers');
			return $query->result();
	}
}