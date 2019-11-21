<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public $dbname = "user";

    function select(){
        $result = $this->db->get($this->dbname);
        return $result;
    }

  

    function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));

        $result=$this->db->get("user");
        $result = $result->num_rows();

        // echo $this->db->last_query();
        // exit();
     
        if($result>0){
            return true;
        }else{
            return false;
        }
    }
    
    function verify_password($password,$hash){
        return password_verify($password,$hash);
    }
}