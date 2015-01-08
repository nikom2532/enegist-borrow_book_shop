<?php
class Book_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_customer()
	{
		return $this->db->get('profile')->result();
	}
	
	public function get_book()
	{
		return $this->db->get('book')->result();
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