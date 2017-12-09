<?php


class Settings_model extends CI_Model
{
	
	public function getguest()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("select * from guest");
		return $account->result_array();
		
		
	}
	
	public function getroom()
	{
		//$result = $this->db->get('contacts');
		$heilist = $this->db->query("SELECT * FROM room");
		return $heilist->result_array();
		
		
	}
	
	public function getroom_rates()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM room_rates");
		return $account->result_array();
		
		
	}
	
	public function getusers()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM users");
		return $account->result_array();
		
		
	}
	
	public function getusercount()
	{
		//$result = $this->db->get('contacts');
		$usercount = $this->db->query("SELECT COUNT(*) as totalcount,users.name as username FROM scholarship_applicant LEFT JOIN users ON scholarship_applicant.addedbyuid = users.uid GROUP BY addedbyuid");
		return $usercount->result_array();
		
		
	}
	

	
}

?>