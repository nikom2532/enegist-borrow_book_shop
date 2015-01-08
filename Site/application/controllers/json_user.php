<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JSON_User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('customer_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('add_customer');
	}
}