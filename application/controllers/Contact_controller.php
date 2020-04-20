<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('contact_model');
		if (!$this->session->userdata('id'))
		{
			redirect('login');
		}

	}
	function index()
	{
	
		$data['contacts'] = $this->contact_model->getAllContacts();
		
		$data['view_page']='admin/contact_list';
		$this->load->view('admin/dashboard_site',$data);

	}
	function contact_manage()
	{
		$data['view_page']='admin/contact_page';
		$this->load->view('admin/dashboard_site',$data);
		
	}
	function validation()
	{
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('contact_name', 'Contact Name', 'required|max_length[40]');
		$this->form_validation->set_rules('contact_address', 'Contact Address', 'required|max_length[200]');
		$this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email');
		// $this->form_validation->set_rules('phone', 'phone Number ', 'required|regex_match[/^[0-9]$/]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('phone2', 'Phone2', 'required|numeric');

	
		if ($this->form_validation->run()) 
		{
								
			$data = array(
				'contact_name' =>$this->input->post('contact_name'),
				'contact_address'=>$this->input->post('contact_address'),
				'contact_email' =>$this->input->post('email_address'),
				'contact_phone' =>$this->input->post('phone'),
				'contact_phone2' =>$this->input->post('phone2'),
											
						);
			$id= $this->contact_model->insert($data);
			if ($id>0) 
			{
				redirect('Contact_controller');
			}
			else 
			{
				$this->session->set_flashdata('message',$result); 
				redirect('contact_manage');
			}

		}
		else
		{
			$this->contact_manage();
		}
	}

	public function edit($id)
	{
		$data['contact'] = $this->contact_model->getContact($id);
		$data['view_page']='admin/editcontacts';
		$this->load->view('admin/dashboard_site',$data);

		
	}
	public function update_contact($id)
	{

		$user['contact_name'] = $this->input->post('contact_name');
		$user['contact_address'] = $this->input->post('contact_address');
		$user['contact_email'] = $this->input->post('email_address');
		$user['contact_phone'] = $this->input->post('phone');
		$user['contact_phone2'] = $this->input->post('phone2');
		

		$query = $this->contact_model->updatecontact($user, $id);
		

		if($query)
		{
			
			redirect('Contact_controller/index');

		}
	}
	public function delete($id)
	{
		$query = $this->contact_model->deletecontact($id);

		if($query)
		{
			redirect('Contact_controller/index');
		}
	}

	public function user_registration_list()
	{ 
	
		$data['users'] = $this->contact_model->getAllUserRegistrations();
		
		$data['view_page']='admin/user_register_list';
		$this->load->view('admin/dashboard_site',$data);

	}
	public function donors_details_list()
	{ 
	
		$data['users'] = $this->contact_model->getAlldonors();
		
		$data['view_page']='admin/donors_list';
		$this->load->view('admin/dashboard_site',$data);

	}
}