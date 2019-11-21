<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office_model extends CI_Model {

    function index()
	{
		return $this->db->get('offices');
		
    }
    
}