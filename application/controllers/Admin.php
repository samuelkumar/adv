<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

/* 	
 * 	@author : Rajapandi
 * 	11th Nov, 2015
 * 	Azure Car Management System
 * 	www.azureinfo.in
 * 	http://www.azureinfo.in
 */
function __construct() {
        parent::__construct();
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->Model('User_Model');
     //$this->User_Model->method();
    }

	
	public function index()
	{
	

$page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = 'Dashboard';
$this->load->view('index', $page_data);
	}
	
	function add_user($param='')
	{
	
	if($param =='view')
	{
		$page_data['page_name'] = 'add_user';
        $page_data['page_title'] = 'Add New User';
		$this->load->view('index', $page_data);
	}
	if($param =='newuser')
	{
	 extract($_POST);
	$result = $this->User_Model->insert_user($username, $pwd, $fname, $lname, $mobile, $mail, $cpwd, $usertype);
	if($result)
	{
		echo 'sucess';
		
	}
	else
	{
		echo 'failure';
	}
	}
	}
	function view_user()
	{
$page_data['page_name'] = 'view_user';
        $page_data['page_title'] = 'Available Users';
$this->load->view('index', $page_data);
	}
	
	function edit_user()
	{
$page_data['page_name'] = 'edit_user';
        $page_data['page_title'] = 'Customize User';
$this->load->view('index', $page_data);
	}

function set_prefix()
	{
$page_data['page_name'] = 'set_prefix';
        $page_data['page_title'] = 'Set Prefix';
$this->load->view('index', $page_data);
	}
	
function billing()
	{
$page_data['page_name'] = 'do_billing';
        $page_data['page_title'] = 'Billing';
$this->load->view('index', $page_data);
	}	
function jobcard ()
    {
$page_data['page_name'] = 'jobcard';
        $page_data['page_title'] = 'Job Card';
$this->load->view('index', $page_data);
    }
function cashier_current_payment()
    {
		$page_data['page_name'] = 'cashier_current_payment';
        $page_data['page_title'] = 'current payment';
		$this->load->view('index', $page_data);
    }
	function cashier_billing_payment()
    {
		$page_data['page_name'] = 'cashier_billing_payment';
        $page_data['page_title'] = 'Billing payment';
		$this->load->view('index', $page_data);
    }
	function cashier_advance_payment()
    {
		$page_data['page_name'] = 'cashier_advance_payment';
        $page_data['page_title'] = 'Advance payment';
		$this->load->view('index', $page_data);
    }
	
	function customers()
    {
		$page_data['page_name'] = 'customers';
        $page_data['page_title'] = 'customers';
		$this->load->view('index', $page_data);
    }
	function vehicles()
    {
		$page_data['page_name'] = 'vehicles';
        $page_data['page_title'] = 'vehicles';
		$this->load->view('index', $page_data);
    }
	function vechicles_arrivals()
    {
		$page_data['page_name'] = 'vechicles_arrivals';
        $page_data['page_title'] = 'vechicles arrivals';
		$this->load->view('index', $page_data);
    }
	function product_return_product()
    {
		$page_data['page_name'] = 'product_return_product';
        $page_data['page_title'] = 'product return product';
		$this->load->view('index', $page_data);
    }
	function products()
    {
		$page_data['page_name'] = 'products';
        $page_data['page_title'] = 'product view';
		$this->load->view('index', $page_data);
    }
	function supplier()
    {
		$page_data['page_name'] = 'supplier';
        $page_data['page_title'] = 'supplier view';
		$this->load->view('index', $page_data);
    }
	function Stock_table()
    {
		$page_data['page_name'] = 'Stock_table';
        $page_data['page_title'] = 'Stock table view';
		$this->load->view('index', $page_data);
    }
	function mechanics()
    {
		$page_data['page_name'] = 'mechanics';
        $page_data['page_title'] = 'mechanics view';
		$this->load->view('index', $page_data);
    }
	function bussiness_report()
    {
		$page_data['page_name'] = 'report_bussiness_report ';
        $page_data['page_title'] = ' bussiness report view';
		$this->load->view('index', $page_data);
    }
	function accounts_report()
    {
		$page_data['page_name'] = 'report_accounts_report';
        $page_data['page_title'] = ' account report view';
		$this->load->view('index', $page_data);
    }
	function expense_report()
    {
		$page_data['page_name'] = 'report_expense_report';
        $page_data['page_title'] = ' expense report view';
		$this->load->view('index', $page_data);
    }
}
