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
		$cus_surname = ''
	)
	{
		
	}
	
	public function insert_address(
		$profile_id = '',
		$cus_name = '',
		$cus_surname = '',
		$address_type_id = '',
		$address_1 = '',
		$address_2 = '',
		$city = '',
		$country = '',
		$code = ''
	)
	{
		if($address_type_id == 1){
			$data = array(
				"cus_name" => $cus_name,
				"cus_surname" => $cus_surname,
				"address_type_id" => $address_type_id,
				"home_address_1" => $address_1,
				"home_address_2" => $address_2,
				"home_city" => $city,
				"home_country" => $country,
				"home_code" => $code,
			);
		}
		elseif ($address_type_id == 2) {
			$data = array(
				"cus_name" => $cus_name,
				"cus_surname" => $cus_surname,
				"address_type_id" => $address_type_id,
				"work_address_1" => $address_1,
				"work_address_2" => $address_2,
				"work_ciuntry" => $country,
				"work_cty" => $city,
				"work_coode" => $code
			);
		}
			
		
		if($this->db->insert("News", $data) == TRUE){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
?>