<?php


class reservation_model extends CI_Model
{
	
	public function getbooking_main()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_main ");
		return $account->result_array();
		
		
	}
	public function getbooking_details($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_details where bookingid=$bookingid");
		return $account->result_array();
		
		
	}
	
	public function getother_charges($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM other_charges");
		return $account->result_array();
		
		
	}
	
	
	public function getbilling_discount($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM billing_discount where bookingid=$bookingid");
		return $account->result_array();
		
		
	}
	//discount
	public function gettotal_discount($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT SUM(billamount) as total_discount FROM billing_discount where bookingid=$bookingid");
		return $account;
		
		
	}
	//amount
	public function gettotal_payment($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT SUM(amountpaid) as total_payment FROM bill_payment where bookingid=$bookingid");
		return $account;
		
		
	}
	//other charges
	public function gettotal_charges($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT SUM(amount) as total_charges FROM booking_charges where bookingid=$bookingid");
		return $account;
		
		
	}
	//total bill
	public function gettotal_bill($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT SUM(rate) as total_bill FROM booking_details where bookingid=$bookingid");
		return $account;
		
		
	}
	
	public function getroom_rates()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM room_rates");
		return $account->result_array();
	
		
		
	}
	public function getguest()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT guestName FROM guest");
		return $account->result_array();
		
	
	}
	
	
	
	
	
	
//total of total_charge and total_bill//
	
	//total of amount + rate - discount//
	
	
	
	
	public function getbooking_charges($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_charges where bookingid=$bookingid");
		return $account->result_array();
		
		
	}

	
	
	public function getbill_payment($bookingid)
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM bill_payment where bookingid=$bookingid");
		return $account->result_array();
		
		
	}
	
	
	public function getbooking_main_details($bookingid)
	{
		//$result = $this->db->get('contacts');
		$bookingmain = $this->db->query("SELECT * FROM booking_main where bookingid=$bookingid");
		return $bookingmain;
		
		
	}
	public function get()
	{
		//$result = $this->db->get('contacts');
		$permits = $this->db->query("SELECT bookingdate,rate FROM booking_details LEFT JOIN booking_main ON booking_main.bookingid = booking_details.bookingid");
		return $permits->result_array();
		
		
	}
	
	
	
	public function getinstname($icode)
	{
			//get institution name
			$this->db->select('*');
			$this->db->from('a_institution_profile');
			$this->db->where('instcode',$icode);
			//$query = $this->db->get();
			//if ($query->num_rows() > 0) {
			// query returned results
			return $this->db->get();
			//} else {
			// query returned no results
			//	$returnzero = array(array('result'=>'0'));
			//	return $returnzero;
			//}
			
		
	}
	public function getcontacts($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get(); */
			$contacts = $this->db->query("SELECT * FROM contacts WHERE instcode='$icode'");
			return $contacts->result_array();
		
	}
	public function getprograms($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get(); */
			$progs = $this->db->query("SELECT programlevel,programid, mainprogram,supervisor,major,pstatuscode,authcat,authserial,authyear,discipline,discipline2,(newstudm+oldstudm+secondm+thirdm+fourthm+fifthm+sixthm+seventhm) AS totalmale,(newstudf+oldstudf+secondf+thirdf+fourthf+fifthf+sixthf+seventhf) AS totalfemale FROM b_program where instcode='$icode'");
			return $progs->result_array();
		
	}
	public function getdeans($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get(); */
			$deans = $this->db->query("SELECT * FROM a_deans where instcode='$icode'");
			return $deans->result_array();
		
	}
	
	public function getformernames($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get(); */
			$formernames = $this->db->query("SELECT * FROM a_formernames where instcode='$icode'");
			return $formernames->result_array();
		
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