<?php
class customer_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function insert_customer(
		$cus_name = '',
		$cus_surname = '',
		$home_address_1 = '',
		$home_address_2 = '',
		$home_city = '',
		$home_country = '',
		$home_code = '',
		$work_address_1 = '',
		$work_address_2 = '',
		$work_city = '',
		$work_country = '',
		$work_code = ''
	)
	{
		$data = array(
			"cus_name" => $cus_name,
			"cus_surname" => $cus_surname,
			"home_address_1" => $home_address_1,
			"home_address_2" => $home_address_2,
			"home_city" => $home_city,
			"home_country" => $home_country,
			"home_code" => $home_code,
			"work_address_1" => $work_address_1,
			"work_address_2" => $work_address_2,
			"work_city" => $work_city,
			"work_country" => $work_country,
			"work_code" => $work_code
		);
		if($this->db->insert("News", $data) == TRUE){
			return TRUE;
		}
		else{
			return FALSE;
		}
		
	}
}
?>