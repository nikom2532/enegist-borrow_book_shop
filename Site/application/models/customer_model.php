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
		$data = array(
			"first_name" => $cus_name,
			"last_name" => $cus_surname,
		);
		$this->db->insert("profile", $data);
		return $this->db->insert_id();
	}
	
	public function get_address()
	{
		return $this->db->
			select('address1, address2, city, country, zip_code')->
			get('address')->result();
	}
	
	public function insert_address(
		$profile_id = '',
		$address_type_id = '',
		$address_1 = '',
		$address_2 = '',
		$city = '',
		$country = '',
		$code = ''
	)
	{
		$data = array(
			"address_type_id" => $address_type_id,
			"profile_id" => $profile_id,
			"address1" => $address_1,
			"address2" => $address_2,
			"city" => $city,
			"country" => $country,
			"zip_code" => $code
		);
		
		if($this->db->insert("address", $data) == TRUE){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
?>