<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __constuct(){
		parent::__constuct();
	}

	function index()
	{
		$this->load->helper("form");
		$this->load->view("tab");
		$this->load->model('Employee_model');
		$result =$this->Employee_model->index();
		$data=array('emplist'=>$result);
		$this->load->view("Employee",$data);
	}

	public function saveEmp(){
        
        $data = array( 
            'employeeNumber' => $this->input->post('employeeNumber'), 
            'lastName' => $this->input->post('lastName') ,
            'firstName' => $this->input->post('firstName') ,
            'extension' => $this->input->post('extension'),
            'email' => $this->input->post('email') ,
            'officeCode' => $this->input->post('officeCode') ,
            'reportsTo' => $this->input->post('reportsTo') ,
            'jobTitle' => $this->input->post('jobTitle') 

         ); 
         $this->load->model('Employee_model');
         $this->load->Employee_model->insert_emp($data); 
        
         redirect('employee/index');
    }

	public function addEmp(){
		$this->load->view('head');
		$this->load->view('EmpLink/InsertEmp');
		
		}

	public function edit_form_Emp(){
        
		$employeeNumber = $this->uri->segment('3'); 
		$this->load->model('Employee_model');
			
		$data['result'] = $this->Employee_model->selectOne_Emp($employeeNumber);
			
		$this->load->view('head');
			
		$this->load->view('EmpLink/EditEmp',$data);	
		   
	   }
//  public function Emp(){
// 	$this->load->Employee_model->edit();
//  }
	  
	   
	   public function save_edit_Emp(){
		   
			$data = array( 
				'employeeNumber' => $this->input->post('employeeNumber'), 
				'lastName' => $this->input->post('lastName') ,
				'firstName' => $this->input->post('firstName') ,
				'extension' => $this->input->post('extension'),
				'email' => $this->input->post('email') ,
				'officeCode' => $this->input->post('officeCode') ,
				'reportsTo' => $this->input->post('reportsTo') ,
				'jobTitle' => $this->input->post('jobTitle') 
			); 
			
			$employeeNumber = $this->input->post('employeeNumber');
			$this->load->model('employee_model');  
			$this->employee_model->update_Emp($data,$employeeNumber); 
		   
			redirect('Employee/index');
	
	   }

	   public function deleter_Emp(){
       
			$employeeNumber= $this->uri->segment('3'); 
			$this->load->model('Employee_model');
        
        	$this->Employee_model->delete_Emp($employeeNumber); 
        
        	redirect('employee/index');
   }
}