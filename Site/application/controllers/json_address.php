<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JSON_Address extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('customer_model');
		$this->load->model('book_model');
		$this->load->model('json_model');
	}

	public function index()
	{
		$address = json_encode($this->json_model->get_address());
		echo $address;
	}
}