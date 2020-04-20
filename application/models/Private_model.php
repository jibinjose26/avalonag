<?php
/**
 * 
 */
class Private_model extends CI_Model
{
	
	function insert($data)
	{
		
		$this->db->insert('table_aboutpage',$data);
		return $this->db->insert_id();
	}
	public function getAllAbouts()
	{
			$query = $this->db->get('table_aboutpage');
			return $query->result(); 
	}
	public function getAbout($id)
	{
			$query = $this->db->get_where('table_aboutpage',array('about_id'=>$id));
			return $query->row_array();
	}
	public function updateabout($user, $id)
	{
			$this->db->where('table_aboutpage.about_id', $id);
			return $this->db->update('table_aboutpage', $user);
	}
	public function deleteabout($id)
	{
			$this->db->where('table_aboutpage.about_id', $id);
			return $this->db->delete('table_aboutpage');
	}

	public function get_results_about($search_term='default')
    {
        // Use the Active Record class for safer queries.
       
        $this->db->select('*');
        $this->db->from('table_aboutpage');
        $this->db->like('vision_title',$search_term);
        $this->db->or_like('mission_title',$search_term);
	    $this->db->or_like('vision_description',$search_term);
	    $this->db->or_like('mission_description',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result();
    }

    public function get_results_event($search_term='default')
    {
       
        $this->db->select('*');
        $this->db->from('table_eventpage');
        $this->db->like('event_title',$search_term);
	    $this->db->or_like('event_description',$search_term);
	    $this->db->or_like('date',$search_term);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_results_contact($search_term='default')
    {
       
        $this->db->select('*');
        $this->db->from('table_contactpage');
        $this->db->like('contact_name',$search_term);
	    $this->db->or_like('contact_address',$search_term);
	    $this->db->or_like('contact_phone',$search_term);
	    $this->db->or_like('contact_email',$search_term);
	    $this->db->or_like('contact_phone2',$search_term);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_results_userRegister($search_term='default')
    {


		$this->db->select('table_user_registration.*, table_eventpage.*');
		$this->db->from('table_user_registration');
		$this->db->like('user_name',$search_term);
	    $this->db->or_like('user_address',$search_term);
	    $this->db->or_like('user_email',$search_term);
	    $this->db->or_like('user_phone',$search_term);
	    $this->db->or_like('event_title',$search_term);
		$this->db->join('table_eventpage', 'table_eventpage.id = table_user_registration.event_id', 'left');
   

        $query = $this->db->get();
        return $query->result();
    }

    public function get_results_donors($search_term='default')
    {
       
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->like('name',$search_term);
	    $this->db->or_like('email',$search_term);
	    $this->db->or_like('amount',$search_term);
	    

        $query = $this->db->get();
        return $query->result();
    }
}
?>