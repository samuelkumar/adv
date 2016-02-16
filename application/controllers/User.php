<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

/* 	
 * 	@author : Rajapandi
 * 	11th Nov, 2015
 * 	Azure Car Management System
 * 	www.azureinfo.in
 * 	http://www.azureinfo.in
 */
function __construct() {
        parent::__construct();
		
		
        $this->load->database();
		
		
        /* cache control */
         $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
       
     
    }

	
	public function index()
	{
	
	
	$data['page_title'] = 'DashBoard';
	$data['page_name'] = 'dashboard';
	$this->load->view('index', $data);

	}
	
	public function canned_msg_form()
        {
            $data['page_title'] = 'Msg form';
	$data['page_name'] = 'canned_msg_form';
	$this->load->view('index', $data);
        }

                public function setting(){
	$data['page_title'] = 'Settings';
	$data['page_name'] = 'sys_settings';
	$this->load->view('index', $data);
	}
	
	
}
