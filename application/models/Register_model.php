<?php
/**
 * 
 */
class Register_model extends CI_Model
{
	
	function insert($data)
	{
		
		$this->db->insert('table_admin',$data);
		return $this->db->insert_id();
	}
	function verify_email($key)
	{
		// echo "m verify_email";
		$this->db->where('verification_key',$key);
		$this->db->where('is_email_verified','no');
		$query=$this->db->get('table_admin');

		if ($query->num_rows()>0)
		{

			$data=  array(
				'is_email_verified' =>'yes' ,
				 );
			$this->db->where('verification_key',$key);
			$this->db->update('table_admin',$data);
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
