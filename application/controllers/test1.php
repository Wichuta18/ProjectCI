<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test1 extends CI_Controller {

	function __constuct(){
        parent::__constuct();
        $this->load->helper("form");
		$this->load->model('test');
	}

	function index()
	{
		
	    $this->load->test->;
		
	}

	
}