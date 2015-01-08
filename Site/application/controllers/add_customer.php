<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_customer extends CI_Controller {
	public function __construct()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('customer_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('add_customer');
	}
	public function insert($value='')
	{
		$this->load->helper('url');
		
		$profile_id = $this->customer_model->insert_customer(
			$this->input->post("cus_name"),
			$this->input->post("cus_surname")
		);
		
		$data["home_success"] = $this->customer_model->insert_address(
			$profile_id,
			"1",
			$this->input->post("home_address_1"),
			$this->input->post("home_address_2"),
			$this->input->post("home_city"),
			$this->input->post("home_country"),
			$this->input->post("home_code")
		);
		
		$data["work_success"] = $this->customer_model->insert_address(
			$profile_id,
			"2",
			$this->input->post("work_address_1"),
			$this->input->post("work_address_2"),
			$this->input->post("work_city"),
			$this->input->post("work_country"),
			$this->input->post("work_code")
		);
		
		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */