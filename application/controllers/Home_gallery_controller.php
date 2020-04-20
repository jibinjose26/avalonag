<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_gallery_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Private_gallery_model');
		if (!$this->session->userdata('id')) {
			redirect('login');
		}

	}

	function index()
	{

		$data['gallerys'] = $this->Private_gallery_model->getAllgallery();

		$data['view_page']='admin/gallery_list';
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

	function gallery_manage()
	{
		$data['view_page'] = 'admin/home_gallery_page';
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

		$this->upload->do_upload('home_gallery_image1');
		// $post=$this->input->post();
		$data1= $this->upload->data();
		$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		// $post['image_path']=$image_path;

		$this->upload->do_upload('home_gallery_image2');
		$data2= $this->upload->data();
		$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);
		$this->upload->do_upload('home_gallery_image3');
		$data3= $this->upload->data();
		$image_path3=base_url("assets/images/".$data3['raw_name'].$data3['file_ext']);
		$this->upload->do_upload('home_gallery_image4');
		$data4= $this->upload->data();
		$image_path4=base_url("assets/images/".$data4['raw_name'].$data4['file_ext']);

		$data = array(

			'home_gallery_image1'=> $image_path1,
			'home_gallery_image2'=> $image_path2,
			'home_gallery_image3'=> $image_path3,
			'home_gallery_image4'=> $image_path4,
			

		);
		$id= $this->Private_gallery_model->insert($data);

		if ($id>0)
		{
			redirect('home_gallery_controller');
		}


	}
	public function edit($id)
	{
		$data['galleryhome'] = $this->Private_gallery_model->getgallery($id);
		$data['view_page']='admin/edit_gallery';
		$this->load->view('admin/dashboard_site',$data);


	}

	public function updategallery($id)
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

		if (!empty($_FILES['home_gallery_image1']['name']))
		{

			$this->upload->do_upload('home_gallery_image1');
			$data1= $this->upload->data();
			$image_path1=base_url("assets/images/".$data1['raw_name'].$data1['file_ext']);
		}
		else
		{
			$image_path1=$this->input->post('home_gallery_image1_old');
		}

		if (!empty($_FILES['home_gallery_image2']['name']))
		{

			$this->upload->do_upload('home_gallery_image2');
			$data2= $this->upload->data();
			$image_path2=base_url("assets/images/".$data2['raw_name'].$data2['file_ext']);
		}
		else
		{
			$image_path2=$this->input->post('home_gallery_image2_old');
		}
		if (!empty($_FILES['home_gallery_image3']['name']))
		{

			$this->upload->do_upload('home_gallery_image3');
			$data3= $this->upload->data();
			$image_path3=base_url("assets/images/".$data3['raw_name'].$data3['file_ext']);
		}
		else
		{
			$image_path3=$this->input->post('home_gallery_image3_old');
		}
		if (!empty($_FILES['home_gallery_image4']['name']))
		{

			$this->upload->do_upload('home_gallery_image4');
			$data4= $this->upload->data();
			$image_path4=base_url("assets/images/".$data4['raw_name'].$data4['file_ext']);
		}
		else
		{
			$image_path4=$this->input->post('home_gallery_image4_old');
		}

			$user['home_gallery_image1'] = $image_path1;
			$user['home_gallery_image2'] = $image_path2;
			$user['home_gallery_image3'] = $image_path3;
			$user['home_gallery_image4'] = $image_path4;


			$query = $this->Private_gallery_model->updategallery($user, $id);
			if($query)
			{
				redirect('Home_gallery_controller/index');
			}
		
	}

	public function delete($id)
	{
		$query = $this->Private_gallery_model->deletegallery($id);

		if($query)
		{
			redirect('Home_gallery_controller/index');
		}
	}

	public function image_view()
	{

		$this->load->view('admin/image_view');
	}
}
?>
<?php
