<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Home_model');
		$this->load->model('private_model');
		

	}

	public function index()
	{
		$this->load->model('Private_home_model');
		$this->load->model('Private_gallery_model');
		$data['title']='Home| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/main_styles.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/responsive.css">';
		$data['view_page']='frontend_final/homepage';
		$data['fetch_data']= $this->Private_home_model->select_home();
		$data['fetch_gallery']= $this->Private_gallery_model->select_gallery();
		
		$data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}
	public function about()
	{
		$this->load->model('Home_model');
		$data['title']='About| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/sermons.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/sermons_responsive.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/sermon_single.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/sermon_single_responsive.css">
			
			';
			
		
		$data['fetch_data']= $this->Home_model->select_about();
		$data['view_page']='frontend_final/about';
		$data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}
	public function contact()
	{
		$data['title']='Contacts| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/contact.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/contact_responsive.css">
			
			';

		$data['fetch_data']= $this->Home_model->select_contact();
		$data['view_page']='frontend_final/contact';
		$data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}

	public function register_events()
	{

		$data = array(
				'user_name'=>$this->input->post('user_name'),
				'user_address' =>$this->input->post('user_address'),
				'user_phone' =>$this->input->post('user_phone'),
				'date' => date("Y-m-d H:i:s"),
				'user_email'=>$this->input->post('user_email'),
				'event_id'=>$this->input->post('event')					
						);
			$id= $this->Home_model->insert_registration($data);
			if ($id>0) 
			{
				redirect('home/contact');
			}
	}

	public function events()
	{
		$this->load->model('Home_model');
		$data['title']='Events| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog_responsive.css">';
		$data['fetch_data']= $this->Home_model->select_event();
		$data['view_page']='frontend_final/events';
		$data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}
	public function calendar_events()
	{

		$data['title']='Events| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog_responsive.css">';

		$data['view_page']='frontend_final/calendar_events';
		$data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}
	public function donation()
	{

		$data['title']='Donation| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/ministries.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/ministries_responsive.css">
		<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/style_donation.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';

		
		 $data['view_page']='frontend_final/donation';
		 $data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);
	}
	public function charge()
	{
		

require FCPATH . 'vendor/autoload.php';
require 'lib/pdo_db.php';
// $this->load->database();
// $this->load->model('Customer', '', TRUE);
$this->load->model('customer');
$this->load->model('transaction');
require_once('application/libraries/stripe-php/init.php');

Stripe\Stripe::setApiKey('sk_test_w5wcmgzNMyt4qYCZ2tOS70Ot00FHi4BXul');

 // Sanitize POST ArrayY
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];
 $amount=$POST['amount'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amount*100,
  "currency" => "nzd",
  "description" => "Avalon AoG",
  "customer" => $customer->id
));

// Customer Data
$customerData = array(
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
);

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = array(
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
);

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);
$charge->id;
$product=$charge->description;

// Redirect to success

header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


	}

	


	public function search_event()
	{

        $search_term = $this->input->post('search');
        $data['title']='Events| Avalon Assembly of God';
		$data['script']='<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog.css">
			<link rel="stylesheet" type="text/css" href="'. base_url().'resources_final/styles/blog_responsive.css">';
        $data['fetch_data'] = $this->Home_model->get_results_event($search_term);
        $data['view_page']='frontend_final/events';
        $data['big_event']= $this->Home_model->select_bigevent();
		$this->load->view('frontend_final/site',$data);

        
	}

	public function sendemail(){
		 $name = $this->input->post('visitor_name');
		 // echo $name; echo'<br>';
		 $message = $this->input->post('message');
		 // echo $message; echo '<br>';
		 $email = $this->input->post('email');
		 // echo $email; echo '<br>';
		$subject = "checking email";
		

	   	
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
	    $this->email->subject('Online Enquiry from: '.$name);
	    $this->email->message($message);
	    
	    $this->email->send();

	 
	    	$this->session->set_flashdata('message', 'Email successfully sent');
	    	
	   
return redirect('Home/contact');
	    // redirect('/');

	}


	// public function sendemail(){
	// 	 $name = $this->input->post('visitor_name');
	// 	 // echo $name; echo'<br>';
	// 	 $message = $this->input->post('message');
	// 	 // echo $message; echo '<br>';
	// 	 $email = $this->input->post('email');
	// 	 // echo $email; echo '<br>';
	// 	$subject = "checking email";
		

	// 	$this->load->library('email');

	// 	$config['mailtype']= 'html';
	// 	$this->email->initialize($config);
	// 	$this->email->to('annugreemajibin123@gmail.com');// change it to yours
	//     $this->email->from($email); // change it to yours
	    
	//     $this->email->subject($name);
	//     $this->email->message($message);
	    
	//     $this->email->send();

	 
	//     	$this->session->set_flashdata('message', 'Email successfully sent');
	//     	echo $this->email->print_debugger();
	   
	// 		return redirect('Home/contact');
	//     // redirect('/');

	// }




}
