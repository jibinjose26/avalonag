<?php
/**
 *
 */
class Event_model extends CI_Model
{


	function select_event()
	{

		//$query=$this->db->get_where('table_eventpage',array('id' => '3'));

		//return $query;
		$query = $this->db->query("SELECT * FROM table_eventpage ORDER BY date DESC LIMIT 3");
		$result = $query->result_array();
		return $result;
	}



	function insert($data)
	{

		$this->db->insert('table_eventpage',$data);
		return $this->db->insert_id();
	}


	public function getAllEvents()
	{
			$query = $this->db->get('table_eventpage');
			return $query->result(); 
	}
	public function getEvent($id)
	{
			$query = $this->db->get_where('table_eventpage',array('id'=>$id));
			return $query->row_array();
	}
	public function updateevent($user, $id)
	{
			$this->db->where('table_eventpage.id', $id);
			return $this->db->update('table_eventpage', $user);
	}
	public function deleteevent($id)
	{
			$this->db->where('table_eventpage.id', $id);
			return $this->db->delete('table_eventpage');
	}
	function insert_customerdata($data)
	{

		$this->db->insert('customers',$data);
		return $this->db->insert_id();
	}




}
?>
