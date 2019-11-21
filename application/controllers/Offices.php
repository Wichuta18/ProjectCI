<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offices extends CI_Controller {

	function __constuct(){
		parent::__constuct();
	}

	function index()
	{
		$this->load->helper("form");
		$this->load->view("tab");
		$this->load->model('offices_model');
		$result =$this->offices_model->index();
		$data=array('officelist'=>$result);
		$this->load->view("offices",$data);
	}

	function addOff(){
		$this->load->view('head');
		$this->load->view('officesLink/insertOff');
		
}
 	function saveOff(){
        
		$data = array( 
			'officeCode' => $this->input->post('officeCode'), 
			'city' => $this->input->post('city') ,
			'phone' => $this->input->post('phone') ,
			'addressLine1' => $this->input->post('addressLine1'),
			'addressLine2' => $this->input->post('addressLine2') ,
			'state' => $this->input->post('state') ,
			'country' => $this->input->post('country') ,
			'postalCode' => $this->input->post('postalCode'),
			'territory' => $this->input->post('territory') 

		); 
		$this->load->model('Employee_model');
		$this->Offices_model->insert_Off($data); 
		
		redirect('offices/index');
	}
	
	function edit_form_Off(){
			
		$officeCode = $this->uri->segment('3'); 
		$this->load->model('offices_model');
		$data['result'] = $this->offices_model->selectOne_Off($officeCode);

		$this->load->view('head');
		
		$this->load->view('officesLink/EditOff',$data);
		

	
	}

	function save_edit_Off(){
	
	$data = array( 
		'officeCode' => $this->input->post('officeCode'), 
		'city' => $this->input->post('city') ,
		'phone' => $this->input->post('phone') ,
		'addressLine1' => $this->input->post('addressLine1'),
		'addressLine2' => $this->input->post('addressLine2') ,
		'state' => $this->input->post('state') ,
		'country' => $this->input->post('country') ,
		'postalCode' => $this->input->post('postalCode'),
		'territory' => $this->input->post('territory') 

	); 
		
		$officeCode = $this->input->post('officeCode');
		$this->load->model('offices_model');
		$this->offices_model->update_Off($data,$officeCode); 
	
		redirect('offices/index');

	}
	function deleter_Off(){
		
		$officeCode= $this->uri->segment('3'); 
		$this->load->model('offices_model');
		$this->offices_model->delete_Off($officeCode); 

		redirect('offices/index');
		}

	}