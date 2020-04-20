<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Private_home_model');
		if (!$this->session->userdata('id')) {
			redirect('login');
		}

	}

	function index()
	{

		$data['homes'] = $this->Private_home_model->getAllhomes();

		$data['view_page']='admin/home_list';
		$this->load->view('admin/dashboard_site',$data);


	}

	function dashboardpage()
	{
		$data['view_page'] = 'admin/dashboard';
		$this->load->view('admin/dashboard_site', $data);
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach ($data as $row => $rows_value) {
			$this->session->unset_userdata($row);

		}
		redirect('login');

	}

	function dashboard()
	{
		$data['view_page'] = 'admin/dashboard';
		$this->load->view('admin/dashboard_site', $data);

	}

	function home_manage()
	{
		$data['view_page'] = 'admin/home_page';
		$this->load->view('admin/dashboard_site', $data);

	}


	function validation()
	{
		$image_path1='';
		$image_path2='';
		$image_path3='';
		$image_path4='';
		$config['upload_path']="./assets/images/";
		$config['allowed_types']='jpg|jpeg|gif|png|jxr';
		$config['max_size'] = '2048000'; // max size in KB
		$config['max_width'] = '20000'; //max resolution width
		$config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);

		$this->upload->do_upload('home_image_s1');
		// $post=$this->input->post();
		$data1= $this->upload->data();
		$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		// $post['image_path']=$image_path;

		$this->upload->do_upload('home_image_s2');
		$data2= $this->upload->data();
		$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);
		$this->upload->do_upload('home_image_s3');
		$data3= $this->upload->data();
		$image_path3=base_url("assets/images/".$data3['raw_name'].$data2['file_ext']);
		$this->upload->do_upload('home_wel_image');
		$data4= $this->upload->data();
		$image_path4=base_url("assets/images/".$data4['raw_name'].$data2['file_ext']);

		$data = array(
			'home_title' =>$this->input->post('home_title'),
			'home_description'=>$this->input->post('home_description'),
			'home_image_s1'=> $image_path1,
			'home_image_s2'=> $image_path2,
			'home_image_s3'=> $image_path3,
			'home_wel_image'=> $image_path4,

			'date' => date("Y-m-d H:i:s"),
		);
		$id= $this->Private_home_model->insert($data);

		if ($id>0)
		{
			redirect('home_controller');
		}


	}
	public function edit($id)
	{
		$data['homepage'] = $this->Private_home_model->getHome($id);
		$data['view_page']='admin/edit_Home';
		$this->load->view('admin/dashboard_site',$data);


	}
	public function updatehome($id){

		$image_path1='';
		$image_path2='';
		$image_path3='';
		$image_path4='';

		$config['upload_path']="./assets/images/";
		$config['allowed_types']='jpg|jpeg|gif|png|jxr';
		$config['max_size'] = '2048000'; // max size in KB
		$config['max_width'] = '20000'; //max resolution width
		$config['max_height'] = '20000';  //max resolution height

		$this->load->library('upload',$config);

		if (!empty($_FILES['home_image_s1']['name']))
		{

			$this->upload->do_upload('home_image_s1');
			$data1= $this->upload->data();
			$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		}
		else
		{
			$image_path1=$this->input->post('home_image_s1_old');
		}

		if (!empty($_FILES['home_image_s2']['name']))
		{

			$this->upload->do_upload('home_image_s2');
			$data2= $this->upload->data();
			$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);
		}
		else
		{
			$image_path2=$this->input->post('home_image_s2_old');
		}
		if (!empty($_FILES['home_image_s3']['name']))
		{

			$this->upload->do_upload('home_image_s3');
			$data3= $this->upload->data();
			$image_path3=base_url("assets/images/".$data3['raw_name'].$data3['file_ext']);
		}
		else
		{
			$image_path3=$this->input->post('home_image_s3_old');
		}
		if (!empty($_FILES['home_wel_image']['name']))
		{

			$this->upload->do_upload('home_wel_image');
			$data4= $this->upload->data();
			$image_path4=base_url("assets/images/".$data4['raw_name'].$data4['file_ext']);
		}
		else
		{
			$image_path4=$this->input->post('home_wel_image_old');
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('home_title', 'Home Title', 'required|max_length[400]');
		// $this->form_validation->set_rules('home_description', 'Home Description', 'required|max_length[400]');
	

		if ($this->form_validation->run())
		{

			$user['home_title'] = $this->input->post('home_title');
			$user['home_description'] = $this->input->post('home_description');
			$user['home_image_s1'] = $image_path1;
			$user['home_image_s2'] = $image_path2;
			$user['home_image_s3'] = $image_path3;
			$user['home_wel_image'] = $image_path4;
			$user['date'] = date("Y-m-d H:i:s");
		

			$query = $this->Private_home_model->updatehome($user, $id);
			if($query)
			{
				redirect('Home_controller/index');
			}
		}
		else
		{
			$this->edit($id);
		}

	}

	public function delete($id)
	{
		$query = $this->Private_home_model->deletehome($id);

		if($query)
		{
			redirect('Home_controller/index');
		}
	}

	public function image_view()
	{

		$this->load->view('admin/image_view');
	}
}
?>
