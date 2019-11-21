<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function index(){
        $password = "Wichuta";
        $hash1 = md5($password);
       
   
        echo "<br>";
        echo $hash1;
        
    }

}