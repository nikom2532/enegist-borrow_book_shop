<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Borrow_Book extends CI_Controller {
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
		$this->load->view('borrow_book', $data);
	}
	
	public function insert()
	{
		$data["borrow_success"] = $this->book_model->insert_borrow(
			$this->input->post("customer_id"),
			$this->input->post("book_id")
		);
		
		echo json_encode($data);
	}
}