<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Event_model');
		if (!$this->session->userdata('id')) 
		{  
			redirect('login');
		}

	}
	function index()
	{
		// echo "Welcome Admin";
		// echo '<p align="center"><a href="'.base_url().'Private_area/logout">Logout</a></p>';
		$data['events'] = $this->Event_model->getAllEvents();

		$data['view_page']='admin/event_list';
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
	function event_manage()
	{
		$data['view_page']='admin/event_page';
		$this->load->view('admin/dashboard_site',$data);

	}
	function validation()
	{
		$image_path1='';
		//$image_path2='';

		$config['upload_path']="./assets/images/";
		$config['allowed_types']='jpg|jpeg|gif|png|jxr';
		$config['max_size'] = '2048000'; // max size in KB
		$config['max_width'] = '20000'; //max resolution width
		$config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);

		$this->upload->do_upload('image');
		$post=$this->input->post();
		$data1= $this->upload->data();
		$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		$post['image_path']=$image_path1;

		//$this->upload->do_upload('mission_image');
		///$data2= $this->upload->data();
		//$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);


		$this->load->library('form_validation');
		$this->form_validation->set_rules('event_title', 'Event Title', 'required|max_length[40]');
		// $this->form_validation->set_rules('event_description', 'Event Description', 'required|max_length[100]');


		if (empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules('image', 'Event Image', 'required');
		}


		if ($this->form_validation->run())
		{


			$data = array(
				'event_title' =>$this->input->post('event_title'),
				'event_description'=>$this->input->post('event_description'),
				'image'=> $image_path1,

				'date' => date("Y-m-d H:i:s"),
				//'message'=>$this->input->post('message'),
				//'history'=>$this->input->post('history')
				//'author'=> 'Greema'
                 'delete_status' => '1'
			);
			$id= $this->Event_model->insert($data);
			if ($id>0)
			{
				redirect('Event_controller');
			}
			else
			{
				$this->session->set_flashdata('message',$result);
				redirect('event_page');
			}

		}
		else
		{
			$this->event_manage();
		}
	}


	public function edit($id)
	{
		$data['event'] = $this->Event_model->getEvent($id);
		$data['view_page']='admin/editevents';
		$this->load->view('admin/dashboard_site',$data);


	}

	public function update_event($id)
	{

		$image_path1='';
		//$image_path2='';

		$config['upload_path']="./assets/images/";
		$config['allowed_types']='jpg|jpeg|gif|png|jxr';
		$config['max_size'] = '2048000'; // max size in KB
		$config['max_width'] = '20000'; //max resolution width
		$config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);

		if (!empty($_FILES['image']['name']))
		{

			$this->upload->do_upload('image');
			$data1= $this->upload->data();
			$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		}
		else
		{
			$image_path1=$this->input->post('event_image_old');
		}



		$this->load->library('form_validation');
		$this->form_validation->set_rules('event_title', 'Event Title', 'required|max_length[60]');
		// $this->form_validation->set_rules('event_description', 'Event Description', 'required|max_length[300]');


		if ($this->form_validation->run())
		{

			$user['event_title'] = $this->input->post('event_title');
			$user['event_description'] = $this->input->post('event_description');
			$user['image'] = $image_path1;
			$user['date'] = date("Y-m-d H:i:s");


			$query = $this->Event_model->updateevent($user, $id);
			if($query)
			{
				redirect('Event_controller/index');
			}
		}
		else
		{
			$this->edit($id);
		}
	}
	public function delete($id)
	{
		$query = $this->Event_model->deleteevent($id);

		if($query)
		{
			redirect('Event_controller/index');
		}
	}

	public function image_view()
	{

		$this->load->view('admin/image_view');
	}
}
?>
