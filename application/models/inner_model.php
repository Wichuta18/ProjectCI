<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inner_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
	}
  
		public function join(){
            $this->db->select('*');
            $this->db->from('employees');
            $this->db->join('offices', 'employees.officeCode = offices.officeCode');
            $query = $this->db->get();
            $data['result']=$query->result();
            return $data;

        }
		
	}
