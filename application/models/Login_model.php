<?php
/**
 * 
 */
class Login_model extends CI_Model
{
	private $rotations = 0 ;

function can_login($email,$password)
{

	$this->db->where('email',$email);
	$query=$this->db->get('table_admin');
	if ($query->num_rows()>0) 
	{
		foreach ($query->result() as  $row) 
		{
			if($row->is_email_verified=='yes')
			{
				$store_password=$row->password;
				/* password decryption */

$salt = substr($store_password, 0, 64);

		$hash = $salt . $password;

		for ( $i = 0; $i < $this->rotations; $i ++ ) {
				$hash = hash('sha256', $hash);
		}

		//Sleep a bit to prevent brute force
		time_nanosleep(0, 400000000);
		// return $salt ;
		// $hash = $salt . $hash;


		// return $hash ;


				/* password decryption */


				if ($password==$store_password)
				{
					$this->session->set_userdata('id',$row->id);
					
				}
				else
				{
					return "Wrong Password";
				}

			}
			else
			{
				return "Please get your email verified first";
			}
		}
	}
	else
	{
		return "Wrong Email Address";
	}

}

function can_user_exist($email)
{
	$this->db->where('email',$email);
	$query=$this->db->get('table_admin');
	if ($query->num_rows()>0) 
	{
		foreach ($query->result() as  $row) 
		{
			if($row->is_email_verified==yes)
			{
				//$store_password=$this->encrypt->decode($row->password);
				$store_password=$row->password;




		 $message = "Try this Password: ".$store_password;
		$subject = "Forgot your Password";
		

	   	
	  		$config['protocol'] = 'smtp';
	  		$config['smtp_host'] = 'ssl://smtp.gmail.com';
	  		$config['smtp_port'] = '465';
	  		$config['smtp_timeout'] = '60';
	  		$config['smtp_user'] = 'avalonassemblyofgod@gmail.com'; // change it to yours
	  		$config['smtp_pass'] = 'avalon@123';// change it to yours
	  		$config['mailtype'] = 'html';
	  		$config['newline'] = "\r\n";
	  		$config['charset'] = 'utf-8';
	  		$config['validation'] = TRUE;
	

		$this->email->initialize($config);
		$this->email->set_mailtype("html");

	    $this->email->from('avalonassemblyofgod@gmail.com'); // change it to yours
	    $this->email->to($email);// change it to yours
	    $this->email->subject($subject);
	    $this->email->message($message);
	    
	    $this->email->send();

	 
	    	// $this->session->set_flashdata('message', 'Email successfully sent');
	    	



				return "A password has sent to your email ";

			}
			else
			{
				return "Please get your email verified first";
			}
		}
	}
	else
	{
		return "Wrong Email Address";
	}

}


}