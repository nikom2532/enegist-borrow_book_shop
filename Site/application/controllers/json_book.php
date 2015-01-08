<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JSON_Book extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('book_model');
		$this->load->model('json_model');
	}

	public function index()
	{
		$book = json_encode($this->json_model->get_book());
		echo $book;
	}
}