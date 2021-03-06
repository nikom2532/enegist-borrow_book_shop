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
	
	public function get_book_except_borrow()
	{
		$str_sql = "
			SELECT 
				*
			FROM
				book
			WHERE
				`id` NOT IN (
					SELECT 
						book_id
					FROM
						borrow
					where 
						return_date > CURDATE()
						OR
						return_date IS NULL
				)
		";
		$query = $this->db->query($str_sql);
		return $query->result();
	}
	
	private function _get_count_borrow(
		$profile_id = ''
	)
	{
		$sql_str = "
			SELECT 
				count(book_id) AS count_book
			FROM 
				borrow
			WHERE
				profile_id = '".$profile_id."'
			GROUP BY 
				`profile_id`
		";
		$query = $this->db->query($sql_str);
		
		return $query->result();
	}
	
	private function _isConcurrency($concurrency = '')
	{
		if($concurrency == null){
			$isConcurrency = TRUE;
		}
		else{
			foreach ($concurrency as $key => $value) {
				if($value->count_book < 3){
					$isConcurrency = TRUE;
				}
				else{
					$isConcurrency = FALSE;
				}
			}
		}
		return $isConcurrency;
	}
	
	public function insert_borrow(
		$customer_id = '',
		$book_id = ''
	)
	{
		$isConcurrency = $this->_isConcurrency($this->_get_count_borrow($customer_id));
		if($isConcurrency){
			
			$today = date("Y-m-d");
			$due_date = date('Y-m-d', strtotime($today. ' + 14 days'));
			
			$data = array(
				"profile_id" => $customer_id,
				"book_id" => $book_id,
				"check_out_date" => $today,
				"due_date" => $due_date
			);
			
			if($this->db->insert("borrow", $data) == TRUE){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else {
			return "Concurrency";
		}
	}
	
}
?>