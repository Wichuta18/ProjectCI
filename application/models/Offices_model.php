<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offices_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
	}
    function index()
	{
		return $this->db->get('offices');
		
	}

	function selectOne_Off($officeCode){
          
		$query = $this->db->get_where("offices",array("OfficeCode"=>$officeCode));
		
		$data = $query->result(); 
		
		return $data;
	 }

	function insert_Office($data) { 
		if ($this->db->insert("offices", $data)) { 
		   return true; 
		} 
		else Echo "error";
	 } 
  
	function delete_Off($officeCode) { 
		if ($this->db->delete("offices", "officeCode = ".$officeCode)) { 
		   return true; 
		} 
	 } 
  
	function update_off($data,$officeCode) { 
		$this->db->set($data); 
		$this->db->where("officeCode", $officeCode); 
		$this->db->update("offices", $data); 
	 } 


}