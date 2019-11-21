<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __constuct(){
		parent::__constuct();
	}

	function index()
	{
		$this->load->helper("form");
		$this->load->view("tab");
		$this->load->model('user_model');
		$result =$this->user_model->index();
		$data=array('userlist'=>$result);
		$this->load->view("user",$data);
	}
	

	

}