<?php


class Programlist_model extends CI_Model
{
	
	public function get()
	{
		//$result = $this->db->get('b_program');
		$result = $this->db->query("SELECT * FROM b_program LEFT JOIN a_institution_profile ON b_program.instcode = a_institution_profile.instcode");
		return $result->result_array();
	}
	
	public function getinstname($icode)
	{
			/*get institution name
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
			*/
		
	}
	public function getprograms($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get();
			$progs = $this->db->query("SELECT mainprogram,supervisor,major,pstatuscode,authcat,authserial,authyear,(newstudm+oldstudm+secondm+thirdm+fourthm+fifthm+sixthm+seventhm) AS totalmale,(newstudf+oldstudf+secondf+thirdf+fourthf+fifthf+sixthf+seventhf) AS totalfemale FROM b_program where instcode='$icode'");
			return $progs->result_array();
		 */
	}
	public function getdeans($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get();
			$deans = $this->db->query("SELECT * FROM a_deans where instcode='$icode'");
			return $deans->result_array();
		 */
	}
	
	public function getformernames($icode)
	{
			/*
			$this->db->select('*');
			$this->db->from('b_program');
			$this->db->where('instcode',$icode);
			$progs = $this->db->get(); 
			$formernames = $this->db->query("SELECT * FROM a_formernames where instcode='$icode'");
			return $formernames->result_array();
		*/
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