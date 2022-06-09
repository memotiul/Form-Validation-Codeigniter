<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	 $this->load->model("main_model");
    $data['records'] = $this->main_model->getAllRecords();
 
      $this->load->view('home',$data);

	}
	public function create()
   {
   		
      $this->load->view('create');
   }
     
   public function __construct()
	{

	parent::__construct();
	
	$this->load->database();
	
	$this->load->model('main_model');
	}
	public function savedata()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('img', 'Imag', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run())
		{

		$data=array(
		'name'=>$this->input->post('name'),
		'address'=>$this->input->post('address'),
		'city'=>$this->input->post('city'),
		'state'=>$this->input->post('state'),
		'contact'=>$this->input->post('contact'),
		'img'=>$this->input->post('img'),
		'email'=>$this->input->post('email')
		);
		$this->main_model->saverecords($data);
		$this->load->view('create');
		}
		else{
			echo "Insert error !";
		}
	}
	
}