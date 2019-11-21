<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
	}
    public function index()
	{
		return $this->db->get('employees');
		
	}
	public function selectOne_Emp($employeeNumber){
          
		$query = $this->db->get_where("employees",array("employeeNumber"=>$employeeNumber));
		
		$data = $query->result(); 
		
		return $data;
	 }

	public function insert_emp($data) { 
		if ($this->db->insert("employees", $data)) { 
		   return true; 
		} 
		else Echo "error";
	 } 
  
	//  public function edit(){
	// 	echo "hello";
		
	// }
	 public function delete_Emp($employeerNumber) { 
		if ($this->db->delete("employees", "employeeNumber = ".$employeeNumber)) { 
		   return true; 
		} 
	 } 
  
	 public function update_Emp($data,$employeeNumber) { 
		$this->db->set($data); 
		$this->db->where("employeeNumber", $employeeNumber); 
		$this->db->update("employees", $data); 
	 } 
    

}