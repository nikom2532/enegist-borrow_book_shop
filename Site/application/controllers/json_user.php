<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JSON_User extends CI_Controller {
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
		$customer = $this->json_model->get_customer_all();
		
		foreach ($customer as $value) {
			
			$home_address = $this->json_model->get_address_each(
				$value->id,
				1
			);
			
			$work_address = $this->json_model->get_address_each(
				$value->id,
				2
			);
			
			$borrow = $this->json_model->get_borrow_each(
				$value->id
			);
			
			$data[] = array(
				"first_name" => $value->first_name,
				"last_name" => $value->last_name,
				"home_address" => $home_address,
				"work_address" => $work_address,
				"books" => $borrow
			);
		}
		
		echo(json_encode($data));
		
	}
}