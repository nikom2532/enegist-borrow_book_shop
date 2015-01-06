<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_customer extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('add_customer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */