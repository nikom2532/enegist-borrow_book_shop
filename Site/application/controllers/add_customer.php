<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_customer extends CI_Controller {

	public function index()
	{
		// echo base_url();
		// echo "asdf";
		// exit;
		
		$this->load->helper('url');
		
		$this->load->view('header');
		$this->load->view('add_customer');
	}
	public function insert($value='')
	{
		echo $_POST["cus_name"];
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */