<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	private $rotations = 0 ;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('register_model');

	}

	 function index()
	{

		//$this->load->library('encryption');
		$this->load->view('admin/register_admin');
	}
	function validation()
	{
				// $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		// $this->form_validation->set_rules('user_name', 'User name', 'required|trim');
		$this->form_validation->set_rules('user_email', 'Email','required|trim|valid_email|is_unique[table_admin.email]');
		$this->form_validation->set_rules('user_password','Password','required');

		if ($this->form_validation->run()) 
		{
			$admin_name=$this->input->post('name');
/* Password encryption  */
$username=$this->input->post('user_email');
$password=$this->input->post('user_password');

$salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($username));

		$hash = $salt . $password;


		for ( $i = 0; $i < $this->rotations; $i ++ ) {
		  $hash = hash('sha256', $hash);
		}


		$encrypted_password= $salt . $hash;
		





/* Password encryption  */
			
			$verification_key= md5(rand());
			// $this->load->library('encryption');
			// $encrypted_password= $this->encrypt->encode($this->input->post('user_password'));
			$data = array(
				'name' =>$this->input->post('name'),
				'email'=>$this->input->post('user_email'),
				// 'username' =>$this->input->post('user_name'),
				'password' =>$this->input->post('user_password'),
				'encrypted_pass'=>$encrypted_password,
				'verification_key'=>$verification_key,
				'is_email_verified'=>'no',
				'created_date' => date("Y-m-d H:i:s")

			);
			$id= $this->register_model->insert($data);


			if ($id>0) 
			{
			$this->send_email($verification_key,$username,$admin_name);
			}
		}
		else
		{
			$this->index();
		}
	}
	function send_email($verification_key,$email,$name)
	{
		
		
			$subject=" verification email for Registration completion";
				$message="
				<p>Hi Admin, </p>
				<p>This is email verification from ".$this->input->post('name')." for admin Registration Login system of Avalon Assembly of God.</p>
				<p> ".$this->input->post('name')." is trying to login to Avalon Assebly of God Admin panel. If it is with your knowledge, for their complete registration please verify their email by clicking this <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>, else, Ignore the message </p>
				<p>once you clicked this link his email is verified and he can login into the system.</p>
				<p>Thanks</p>
				 ";
				 	   	
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

	    $this->email->from($email); // change it to yours
	    $this->email->to('avalonassemblyofgod@gmail.com');// change it to yours
	    $this->email->subject('Registration from: '.$name);
	    $this->email->message($message);
	    
	    $this->email->send();

	 
	    	$this->session->set_flashdata('message', 'A verification Message has been sent to your Main administrator Email. Please get verify your login first');
	    	
	   
return redirect('Login/index');
				 

		
			
			
	}



	function verify_email()
	{
		// echo" verify_email";
		if ($this->uri->segment(3))
		 {
			$verification_key=$this->uri->segment(3);

			if ($this->register_model->verify_email($verification_key)==TRUE)
			{
				$data['message']='<h1 align="center"> Admin Registration has been successfully verified. Now He can Login </h1>';
				// $data['message']='<h1 align="center"> Admin Registration email has been successfully verified. Now He can Login from <a href="'.base_url().'Login">here</a> </h1>';
			}
			else
			{
				$data['message']='<h1 align="center"> Invalid link </h1>';
			}
			$this->load->view('admin/email_verification', $data);

		}
	}



	

}
?>