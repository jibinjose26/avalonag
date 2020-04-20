<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripeController extends CI_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {
        $this->load->view('my_stripe');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripePost()
    {
        $data = array(
                'name' =>$this->input->post('cardname'),
                'email'=>$this->input->post('donor_email'),
                'amount'=> $this->input->post('amount')
            );
        $this->load->model('Event_model');
        $id=$this->Event_model->insert_customerdata($data);


        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
        \Stripe\Charge::create ([
                "amount" => $this->input->post('amount') * 100,
                "currency" => "nzd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Assembly of God" 
        ]);
            
        $this->session->set_flashdata('success', 'Payment made successfully.');
             
        redirect('/my-stripe', 'refresh');
    }

}