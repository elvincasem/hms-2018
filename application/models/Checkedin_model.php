<?php


class checkedin_model extends CI_Model
{
	
	public function getbooking_details()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_details,bill_payment,booking_main where booking_details.bookingid=bill_payment.bookingid and booking_details.bookingid=booking_main.bookingid and status = 'Checked In'");
		return $account->result_array();
		
		
	}
	
	
	public function get()
	{
		//$result = $this->db->get('contacts');
		$deans = $this->db->query("SELECT a_deans.deanid,a_deans.deansname,a_deans.designation,a_deans.assignment,a_deans.instcode,a_institution_profile.instname FROM a_deans LEFT JOIN a_institution_profile ON a_deans.instcode = a_institution_profile.instcode");
		return $deans->result_array();
		
		
	}
	
	public function gethei()
	{
		//$result = $this->db->get('contacts');
		$heilist = $this->db->query("SELECT * FROM a_institution_profile");
		return $heilist->result_array();
		
		
	}
	
	public function getaccount()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM accounts");
		return $account->result_array();
		
		
	}
	

	public function insert()
	{
			
	}
	
	public function update()
	{
		
	}
	
	public function delete()
	{
		
	}
}

?>