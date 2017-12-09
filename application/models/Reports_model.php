<?php


class reports_model extends CI_Model
{
	
	public function getbankreport()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("select * from bill_payment where modeofpayment ='Bank Deposit'");
		return $account->result_array();
		
		
	}
	public function getcashreport()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("select * from bill_payment where modeofpayment='cash'");
		return $account->result_array();
		
		
	}
	public function getcardreport()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("select * from bill_payment where modeofpayment='Credit/Debit Card'");
		return $account->result_array();
		
		
	}
	
	public function getreceivablereport()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("select * from bill_payment,booking_details where bill_payment.bookingid=booking_details.bookingid and  datepaid > checkin");
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