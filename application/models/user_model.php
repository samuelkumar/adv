<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		
    $this->load->database();
	}
	
	public function insert_user($username, $pwd, $fname, $lname, $mobile, $mail, $cpwd, $usertype){
		
		$page_data['username'] = $username;
	$page_data['password'] = $pwd;
	$page_data['first_name'] = $fname;	
	$page_data['last_name'] = $lname;
	$page_data['mobile'] = $mobile;
	$page_data['mail'] = $mail;
	$page_data['confirm_password'] = $cpwd;
    $page_data['user_type'] = $usertype;	
	$query = $this->db->insert('users', $page_data);
		return $query;
		
	}
	
	




	
	
	
}


