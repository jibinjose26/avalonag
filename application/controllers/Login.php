<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation'); 
		$this->load->library('encrypt');
		$this->load->model('login_model');

	}
	

	 function index()
	{

		$this->load->view('admin/login');
	}
	function validation()
	{
		$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email');
		$this->form_validation->set_rules('user_password','Password','required');
		if ($this->form_validation->run()) 
		{
			
			$result= $this->login_model->can_login($this->input->post('user_email'),$this->input->post('user_password'));
			

			if ($result=='')
			{
				redirect('private_area/dashboardpage');
			}
			else
			{
				$this->session->set_flashdata('message',$result); 
				redirect('login');
			}
		}
		else
		{
			$this->index();
		}
	}


function forgot_pass()
	{
		$this->load->view('admin/forgot_password');
	}

	function check_user_forgot_pass()
	{
		$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email');
		
		if ($this->form_validation->run()) 
		{
			
			$result= $this->login_model->can_user_exist($this->input->post('user_email'));
			if ($result!='')
			{
				$this->session->set_flashdata('message',$result); 
				redirect('login/forgot_pass');
			}
			
		}
		else
		{
			$this->forgot_pass();
		}
	}

	
	



}
