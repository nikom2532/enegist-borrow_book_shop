<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Borrow_Books extends CI_Controller {
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
		$this->load->view('borrow_book');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */