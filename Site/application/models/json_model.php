<?php
class json_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_book()
	{
		return $this->db->get('book')->result();
	}
	
	public function get_address()
	{
		return $this->db->
			select('address1, address2, city, country, zip_code')->
			get('address')->result();
	}
	
	
	
	
	public function get_customer_all()
	{
		return $this->db->get('profile')->result();
	}
	
	public function get_address_each(
		$profile_id = '',
		$address_type_id = ''
	)
	{
		return $this->db->
			select('address1, address2, city, country, zip_code')->
			where('profile_id', $profile_id)->
			where('address_type_id', $address_type_id)->
			get('address')->
			result();
	}
	
	public function get_borrow_each(
		$profile_id = ''
	)
	{
		$sql_str = "
			SELECT 
				book.id, book.title, book.author, borrow.check_out_date, borrow.due_date, borrow.return_date
			FROM 
				book
			LEFT JOIN 
				borrow
				ON 
					borrow.book_id = book.id
			WHERE 
				profile_id = '".$profile_id."'
		";
		return $this->db->query($sql_str)->result();
	}
}
?>