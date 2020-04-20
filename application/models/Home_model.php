<?php

class Home_model extends CI_Model
{
	
	function select_about()
	{
		
		$query=$this->db->get_where('table_aboutpage',array('delete_status' => 'no'));
		return $query;
	}
	function select_contact()
	{
		
		$query=$this->db->get_where('table_contactpage',array('delete_status' => 'no'));
		return $query;
	}
	function insert_registration($data)
	{
		
		$this->db->insert('table_user_registration',$data);
		return $this->db->insert_id();
	}
	function select_home()
	{
		$query=$this->db->get('table_home');
		return $query;
	}
	function select_gallery()
	{
		$query=$this->db->get('home_gallery');
		return $query;
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
	function select_event()
	{

//		$query=$this->db->get_where('table_eventpage',array('id' => '5'));
//
//		return $query;
		$query = $this->db->query("select * from table_eventpage order by date DESC limit 3 ");
		return $query;

	}
	public function get_results_event($search_term='default')
    {
       
        $this->db->select('*');
        $this->db->from('table_eventpage');
        $this->db->like('event_title',$search_term);
	    $this->db->or_like('event_description',$search_term);
	    $this->db->or_like('date',$search_term);

        $query = $this->db->get();
        return $query;
    }

    public function select_bigevent()
    {
    	$query = $this->db->query("select * from table_eventpage order by date DESC limit 1");
		return $query->row_array();;

    }

	
}
?>