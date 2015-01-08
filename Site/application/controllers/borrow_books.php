<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Borrow_Books extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('book_model');
	}

	public function index()
	{
		$data["customer"] = $this->book_model->get_customer();
		$data["book"] = $this->book_model->get_book();
		
		$this->load->view('header');
		$this->load->view('borrow_books', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */