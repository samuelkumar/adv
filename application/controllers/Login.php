<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

/* 	
 * 	@author : Rajapandi
 * 	11th Nov, 2015
 * 	Raja adv management
 * 	rajapandi.nr@gmail.com
 * 	http://www.facebook.com/rajapandics
 */
function __construct() {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->Model('Authorize_model');
        $this->load->database();
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
        $this->load->library('session');
    }

	
	public function index()
	{
	
	$data['page_title'] = 'Login';
	$this->load->view('admin/login_view',$data);

	}
	

	/******* LOGIN FUNCTION *******/
	
	 public function validate_login(){
	 extract($_POST);
	 
            $username =  $this->input->post('username');
            $password =  $this->input->post('password');
            
			
			
            //call the model for auth
	
            if($this->Authorize_model->login($username, $password)){
            }
            else{
                echo'something went wrong';
            }
			
			
        }
	
	
	
	 /*     * *RESET AND SEND PASSWORD TO REQUESTED EMAIL*** */

    function reset_password() {
        $account_type = $this->input->post('account_type');
        if ($account_type == "") {
            redirect(base_url(), 'refresh');
        }
        $email = $this->input->post('email');
        $result = $this->email_model->password_reset_email($account_type, $email); //SEND EMAIL ACCOUNT OPENING EMAIL
        if ($result == true) {
            $this->session->set_flashdata('flash_message', get_phrase('password_sent'));
        } else if ($result == false) {
            $this->session->set_flashdata('flash_message', get_phrase('account_not_found'));
        }

        redirect(base_url(), 'refresh');
    }

	/******* LOGOUT FUNCTION *******/
	 function logout() {
        session_destroy();
        redirect(base_url(), 'refresh');
    }
	
}
