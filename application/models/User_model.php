<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __constuct(){
		parent::__constuct();
	}
    public function index()
	{
		return $this->db->get('user');
		
	}

	//function create($data){
    //    return $this->db->insert($this->dbname, $data); 
    //}

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