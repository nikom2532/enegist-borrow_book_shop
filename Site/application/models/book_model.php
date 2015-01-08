<?php
class Book_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function insert_customer(
		$cus_name = '',
		$cus_surname = ''
	)
	{
		$data = array(
			"first_name" => $cus_name,
			"last_name" => $cus_surname,
		);
		$this->db->insert("profile", $data);
		return $this->db->insert_id();
	}
	
}
?>