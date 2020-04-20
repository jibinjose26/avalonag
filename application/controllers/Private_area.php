<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('private_model');
		if (!$this->session->userdata('id'))
		{
			redirect('login');
		}

	}
	function index()
	{
		// echo "Welcome Admin";
		// echo '<p align="center"><a href="'.base_url().'Private_area/logout">Logout</a></p>';
		$data['abouts'] = $this->private_model->getAllAbouts();
		
		$data['view_page']='admin/about_list';
		$this->load->view('admin/dashboard_site',$data);

	}
	function dashboardpage()
	{
		$data['view_page']='admin/dashboard';
		$this->load->view('admin/dashboard_site',$data);
	}
	function logout()
	{
		$data=$this->session->all_userdata();
		foreach ($data as $row => $rows_value) 
		{
			$this->session->unset_userdata($row);

		}
		redirect('login');
		
	}
	function dashboard()
	{
		$data['view_page']='admin/dashboard';
		$this->load->view('admin/dashboard_site',$data);
		
	}
	function about_manage()
	{
		$data['view_page']='admin/about_page';
		$this->load->view('admin/dashboard_site',$data);
		
	}
	function validation()
	{
	$image_path1='';
	$image_path2='';

		   $config['upload_path']="./assets/images/";
		   $config['allowed_types']='jpg|jpeg|gif|png|jxr';
		   $config['max_size'] = '2048000'; // max size in KB
		   $config['max_width'] = '20000'; //max resolution width
		   $config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);
		
 		$this->upload->do_upload('vision_image');
    	// $post=$this->input->post();
    	$data1= $this->upload->data();
    	$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
    	// $post['image_path']=$image_path;

    	$this->upload->do_upload('mission_image');
    	$data2= $this->upload->data();
    	$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);

    
		$this->load->library('form_validation');
		$this->form_validation->set_rules('vision_title', 'Vision Title', 'required|max_length[40]');
		// $this->form_validation->set_rules('vision_description', 'Vision Description', 'required|max_length[100]');
		$this->form_validation->set_rules('mission_title', 'Mission Title', 'required|max_length[40]');
		// $this->form_validation->set_rules('mission_description', 'Mission Description', 'required|max_length[100]');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('history', 'history', 'required');

		if (empty($_FILES['vision_image']['name']))
		{
		    $this->form_validation->set_rules('vision_image', 'Vision Image', 'required');
		}
		if (empty($_FILES['mission_image']['name']))
		{
		    $this->form_validation->set_rules('mission_image', 'Mission Image', 'required');
		}

		if ($this->form_validation->run()) 
		{
								
			$data = array(
				'vision_title' =>$this->input->post('vision_title'),
				'vision_description'=>$this->input->post('vision_description'),
				'vision_image'=> $image_path1,
				'mission_title' =>$this->input->post('mission_title'),
				'mission_description' =>$this->input->post('mission_description'),
				'mission_image'=> $image_path2,
				'date' => date("Y-m-d H:i:s"),
				'message'=>$this->input->post('message'),
				'history'=>$this->input->post('history')
				//'author'=> 'Greema'
									
						);
			$id= $this->private_model->insert($data);
			if ($id>0) 
			{
				redirect('private_area');
			}
			else 
			{
				$this->session->set_flashdata('message',$result); 
				redirect('about_page');
			}

		}
		else
		{
			$this->about_manage();
		}
	}


	public function edit($id)
	{
		$data['about'] = $this->private_model->getAbout($id);
		$data['view_page']='admin/editabouts';
		$this->load->view('admin/dashboard_site',$data);

		
	}

		public function update_about($id)
	{
		
		$image_path1='';
		$image_path2='';

		   $config['upload_path']="./assets/images/";
		   $config['allowed_types']='jpg|jpeg|gif|png|jxr';
		   $config['max_size'] = '2048000'; // max size in KB
		   $config['max_width'] = '20000'; //max resolution width
		   $config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);

		if (!empty($_FILES['vision_image']['name']))
		{
		
 		$this->upload->do_upload('vision_image');
    	$data1= $this->upload->data();
    	$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
    	}
    	else
    	{
    		$image_path1=$this->input->post('vision_image_old');
    	}

    	if (!empty($_FILES['mission_image']['name']))
		{

    	$this->upload->do_upload('mission_image');
    	$data2= $this->upload->data();
    	$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);
    	}
    	else
    	{
    		$image_path2=$this->input->post('mission_image_old');
    	}

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('vision_title', 'Vision Title', 'required|max_length[40]');
		$this->form_validation->set_rules('mission_title', 'Mission Title', 'required|max_length[40]');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('history', 'history', 'required');


		if ($this->form_validation->run()) 
		{

		$user['vision_title'] = $this->input->post('vision_title');
		$user['vision_description'] = $this->input->post('vision_description');
		$user['vision_image'] = $image_path1;
		$user['mission_title'] = $this->input->post('mission_title');
		$user['mission_description'] = $this->input->post('mission_description');
		$user['mission_image'] = $image_path2;
		$user['message'] = $this->input->post('message');
		$user['history'] = $this->input->post('history');
		$user['date'] = date("Y-m-d H:i:s");

		$query = $this->private_model->updateabout($user, $id);
		if($query)
		{
		redirect('Private_area/index');
		}
		}
		else
		{
			$this->edit($id);
		}
	}
	public function delete($id)
	{
		$query = $this->private_model->deleteabout($id);

		if($query)
		{
			redirect('Private_area/index');
		}
	}

	public function image_view()
	{
		
		$this->load->view('admin/image_view');
	}

	public function search_about()
	{

        $search_term = $this->input->post('search');
        $data['abouts'] = $this->private_model->get_results_about($search_term);

       $data['view_page']='admin/about_list';
		$this->load->view('admin/dashboard_site',$data);
        
	}
	public function search_event()
	{

        $search_term = $this->input->post('search');
        $data['events'] = $this->private_model->get_results_event($search_term);

       $data['view_page']='admin/event_list';
		$this->load->view('admin/dashboard_site',$data);
        
	}
	public function search_contact()
	{

        $search_term = $this->input->post('search');
        $data['contacts'] = $this->private_model->get_results_contact($search_term);

       $data['view_page']='admin/contact_list';
		$this->load->view('admin/dashboard_site',$data);
        
	}
	public function search_userRegister()
	{

        $search_term = $this->input->post('search');
        $data['users'] = $this->private_model->get_results_userRegister($search_term);

       $data['view_page']='admin/user_register_list';
		$this->load->view('admin/dashboard_site',$data);
        
	}

		public function search_donors()
	{

        $search_term = $this->input->post('search');
        $data['users'] = $this->private_model->get_results_donors($search_term);

       $data['view_page']='admin/donors_list';
		$this->load->view('admin/dashboard_site',$data);
        
	}
}
?>