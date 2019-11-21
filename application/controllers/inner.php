<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inner extends CI_Controller {

	function __constuct(){
		
		parent::__constuct();
		$this->load->model('inner_model');
		$this->load->helper('form');
		$this->load->database();
	}

	function index(){
		$this->load->model('inner_model');
		$data=$this->inner_model->join();
		$this->load->view('tab');
		$this->load->view('inner',$data);
	}

}