<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function index(){
		$data['str'] = "hello";

		$this->load->model('User');
		$data['result'] = $this->User->select();

		$this->load->view('index', $data);
	}

	function create(){
		$this->load->helper('form');
		// echo "hello";
		// $this->load->view('index');
		$this->load->library('form_validation');    
		/* Set validation rule for name field in the form */  
	   	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]'); 
	   	// $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]'); 
	   	// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]'); 
	   	// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');  
			
		if ($this->form_validation->run() == FALSE) {  
		   $this->load->view('Myform'); 
		}else{
			$data['username'] = $this->input->post('username');
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT); 
			$data['email'] = $this->input->post('email'); 
			
			$this->load->model('User');
			$result = $this->User->create($data);

			if($result){
				$this->session->set_flashdata('item','บันทึกสำเร็จ');
			}else{
				$this->session->set_flashdata('item','บันทึกไม่สำเร็จ');
			}
			
			redirect('form');
			
		}  
	}

	public function methodpost() {  
		$name = $this->input->post('name'); 
		echo "hello".$name;  
		
		$this->session->set_flashdata('item','บนัทึกสำเร็จ');  
	   	redirect('form');  
	} 
}
