<?php


class reserved_model extends CI_Model
{
	public function getbooking_details()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_main,booking_details where booking_main.bookingid=booking_details.bookingid");
		return $account->result_array();
		
		
	}
	
	public function getbooking_main()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM booking_main");
		return $account->result_array();
		
		
	}
	
	public function getother_charges()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM other_charges");
		return $account->result_array();
		
		
	}
	
	public function getbill_payment()
	{
		//$result = $this->db->get('contacts');
		$account = $this->db->query("SELECT * FROM bill_payment");
		return $account->result_array();
		
		
	}
	

	
	public function get()
	{
		$result = $this->db->get('a_institution_profile');
		
		return $result->result_array();
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