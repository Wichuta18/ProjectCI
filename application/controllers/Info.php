<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

        function index(){
            $this->load->helper("form");
            $this->load->view("layout/head");
            $this->load->view("layout/menu");
            $this->load->view("layout/header");
            $this->load->view("layout/content");
            // $this->load->view("layout/right-menu");
           // $this->load->view("layout/footer");
            $this->load->view("layout/foot");
            $this->load->view("layout/style");
           
        }

        function login(){
            $username= $this->input->post('username');
            $password = $this->input->post('password');
           
            $this->load->model("User");
            $result= $this->User->login($username,$password);
            if($result != false){
                redirect('user/index');
                $this->load->library('session');
                echo "login";
            }else{
                redirect('loginDB/index');
                echo "unlogin";
            }

        }
}