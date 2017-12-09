<?php

class Functions extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('functions_model');
		 
	}
	
	public function savereservation(){
		
		//$instcode = $this->input->post('instcode');
		
		$bookingid = $this->input->post('bookingid');
		$guests = $this->input->post('guests');
		$reservationsource = $this->input->post('reservationsource');
		$receptionist = $this->input->post('receptionist');
		$bookingdate = $this->input->post('bookingdate');
		
		
		$sql = "INSERT INTO booking_main (bookingid,guests,reservationsource,receptionist,bookingDate) VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($guests).", ".$this->db->escape($reservationsource).", ".$this->db->escape($receptionist).", ".$this->db->escape($bookingdate).")";
		//echo $sql;
		$this->db->query($sql);
		//echo $this->db->affected_rows();
		
		$reservationinfo = $this->db->query("SELECT MAX(bookingid) as lastid FROM booking_main");
		$reservationinfoarray = $reservationinfo->result_array();
		echo json_encode($reservationinfoarray[0]);
		
	}
	
	public function updatequotedetails(){
		
		//$instcode = $this->input->post('instcode');
		$bdids = $this->input->post('bdids');
		$bookingids = $this->input->post('bookingids');
		$quotecheckin = $this->input->post('quotecheckin');
		$quotecheckout = $this->input->post('quotecheckout');
		$quotepax = $this->input->post('quotepax');
		$quoteroomNames = $this->input->post('quoteroomNames');
		$quotegood_for = $this->input->post('quotegood_for');
		$quoterate = $this->input->post('quoterate');
		$quoteseason = $this->input->post('quoteseason');
		//$status = $this->input->post('status');
		
		
		$sql = "UPDATE quotebooking_details SET bookingids=".$this->db->escape($bookingids)." ,quotecheckin=".$this->db->escape($quotecheckin)." ,quotecheckout=".$this->db->escape($quotecheckout)." ,quotepax=".$this->db->escape($quotepax).", quoteroomNames=".$this->db->escape($quoteroomNames).", quotegood_for=".$this->db->escape($quotegood_for).", quoterate=".$this->db->escape($quoterate).", quoteseason=".$this->db->escape($quoteseason)."  where bdids=".$this->db->escape($bdids)."";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		//echo $this->db->affected_rows();
		
		
		
	}
	
public function  selectcharge(){
if(isset($_POST['get_option']))
{
  $host = 'localhost';
  $user = 'hms_hoteldb';
  $pass = ',;8tiBD9^46_';
  mysql_connect($host, $user, $pass);
  mysql_select_db('hms_hotelmanagementdb');
 
 $namecharge = $_POST['get_option'];
$result = mysql_query("SELECT charge FROM other_charges WHERE namecharge='$namecharge'");
 while($row=mysql_fetch_array($result)){
 echo "<option>".$row['charge']."</option>";
//echo json_encode($find[0]);
}
}
}


public function modulequote($bookingids){

		$result = $this->db->query("SELECT * FROM quote_module, quotebooking_details, quotebooking_charges WHERE quote_module.bookingids = quotebooking_details.bookingids and quotebooking_charges.bookingids = quote_module.bookingids AND quote_module.bookingids = $bookingids");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
		
	}


	public function deletequotecharges($bcids){

		$sql = "DELETE from quotebooking_charges where bcids='".$bcids."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
		public function deletequotebooking($bdids){

		$sql = "DELETE from quotebooking_details where bdids='".$bdids."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function updatebookingdet($bdids)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("select * from quotebooking_details where bdids= $bdids");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	
	public function savequotecharges(){
		
		
		$bookingids = $this->input->post('bookingids');
		$quotechargename = $this->input->post('quotechargename');
		$quoteamount = $this->input->post('quoteamount');
		$quoteqty = $this->input->post('quoteqty');
		
		
		$sql = "INSERT INTO quotebooking_charges (bookingids,quotechargename,quoteamount,quoteqty) VALUES (".$this->db->escape($bookingids).", ".$this->db->escape($quotechargename).", ".$this->db->escape($quoteamount).", ".$this->db->escape($quoteqty).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
	
	}
	
	public function savequotedet(){
		
		$bdids = $this->input->post('bdids');
		$bookingids = $this->input->post('bookingids');
		$quotecheckin = $this->input->post('quotecheckin');
		$quotecheckout = $this->input->post('quotecheckout');
		$quotepax = $this->input->post('quotepax');
		$quoteroomNames = $this->input->post('quoteroomNames');
		$quotegood_for = $this->input->post('quotegood_for');
		$quoterate = $this->input->post('quoterate');
		$quoteseason = $this->input->post('quoteseason');
		
		
		$sql = "INSERT INTO quotebooking_details (bdids,bookingids,quotecheckin,quotecheckout,quotepax,quoteroomNames,quotegood_for,quoterate,quoteseason) VALUES (".$this->db->escape($bdids).", ".$this->db->escape($bookingids).", ".$this->db->escape($quotecheckin).", ".$this->db->escape($quotecheckout).", ".$this->db->escape($quotepax).", ".$this->db->escape($quoteroomNames).", ".$this->db->escape($quotegood_for).", ".$this->db->escape($quoterate).", ".$this->db->escape($quoteseason).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	
	public function addquote(){
		
		//$instcode = $this->input->post('instcode');
		
		$bookingids = $this->input->post('bookingids');
		$gname = $this->input->post('gname');
		$ressource = $this->input->post('ressource');
		$receptionists = $this->input->post('receptionists');
		$bookingdate = $this->input->post('bookingdate');
		
		
		$sql = "INSERT INTO quote_module (bookingids,gname,ressource,receptionists,bookingdate) VALUES (".$this->db->escape($bookingids).", ".$this->db->escape($gname).", ".$this->db->escape($ressource).", ".$this->db->escape($receptionists).", ".$this->db->escape($bookingdate).")";
		$this->db->query($sql);
		//echo $sql;
		$reservationinfo = $this->db->query("SELECT MAX(bookingids) as lastid FROM quote_module");
		$reservationinfoarray = $reservationinfo->result_array();
		echo json_encode($reservationinfoarray[0]);
		
	}
	
public function quote($bookingids){

		$sql = "DELETE from quote_module where bookingids='".$bookingids."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}

	
	public function savebookingdet(){
		
		$bookingid = $this->input->post('bookingid');
		$checkin = $this->input->post('checkin');
		$checkout = $this->input->post('checkout');
		$pax = $this->input->post('pax');
		$roomNames = $this->input->post('roomNames');
		$good_for = $this->input->post('good_for');
		$rate = $this->input->post('rate');
		$season = $this->input->post('season');
		
		
		$sql = "INSERT INTO booking_details (bookingid,checkin,checkout,pax,roomNames,good_for,rate,season) VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($checkin).", ".$this->db->escape($checkout).", ".$this->db->escape($pax).", ".$this->db->escape($roomNames).", ".$this->db->escape($good_for).", ".$this->db->escape($rate).", ".$this->db->escape($season).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	public function savebookingcharges(){
		
		
		$bookingid = $this->input->post('bookingid');
		$chargename = $this->input->post('chargename');
		$amount = $this->input->post('amount');
		$qty = $this->input->post('qty');
		
		
		$sql = "INSERT INTO booking_charges (bookingid,chargename,amount,qty) VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($chargename).", ".$this->db->escape($amount).", ".$this->db->escape($qty).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
		
	}
	
	
	public function saveaddbills(){
		
		//$instcode = $this->input->post('instcode');
		$datepaid = $this->input->post('datepaid');
		$name = $this->input->post('name');
		$bank= $this->input->post('bank');
		$cardtype = $this->input->post('cardtype');
		$refno = $this->input->post('refno');
		$amount = $this->input->post('amount');
		$note = $this->input->post('note');
		$modeofpayment = $this->input->post('modeofpayment');
		
		
		$sql = "INSERT INTO bill_payment (datepaid,name,bank,cardtype,refno,amount,note,modeofpayment) VALUES (".$this->db->escape($datepaid).", ".$this->db->escape($name).", ".$this->db->escape($bank).", ".$this->db->escape($cardtype).", ".$this->db->escape($refno).",".$this->db->escape($amount).", ".$this->db->escape($note).", ".$this->db->escape($modeofpayment).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	

	
	public function saveaddguest(){
		
		//$instcode = $this->input->post('instcode');
		$guestType = $this->input->post('guestType');
		$guestName = $this->input->post('guestName');
		$contactNo = $this->input->post('contactNo');
		$eMail = $this->input->post('eMail');
		$nationality = $this->input->post('nationality');
		
		
		$sql = "INSERT INTO guest (guestType,guestName,contactNo,eMail,nationality) VALUES (".$this->db->escape($guestType).", ".$this->db->escape($guestName).",".$this->db->escape($contactNo).", ".$this->db->escape($eMail).", ".$this->db->escape($nationality).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	
	public function saveaddroom(){
		
		//$instcode = $this->input->post('instcode');
		$roomName = $this->input->post('roomName');
		$building = $this->input->post('building');
		
		
		
		$sql = "INSERT INTO room (roomName,building) VALUES (".$this->db->escape($roomName).", ".$this->db->escape($building).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	
	public function saveaddrate(){
		
		//$instcode = $this->input->post('instcode');
		$roomName = $this->input->post('roomName');
		$goodFor = $this->input->post('goodFor');
		$peak = $this->input->post('peak');
		$superPeak = $this->input->post('superPeak');
		$lowSeason = $this->input->post('lowSeason');
		$building = $this->input->post('building');
		
		$sql = "INSERT INTO room_rates (roomName,goodFor,peak,superPeak,lowSeason,building) VALUES (".$this->db->escape($roomName).", ".$this->db->escape($goodFor).", ".$this->db->escape($peak).", ".$this->db->escape($superPeak).", ".$this->db->escape($lowSeason).", ".$this->db->escape($building).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	
	
	public function saveuseraccount(){
		
		//$instcode = $this->input->post('instcode');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$usertype = $this->input->post('usertype');
		
		$sql = "INSERT INTO users (username,password,name,usertype) VALUES (".$this->db->escape($username).", ".$this->db->escape($password).", ".$this->db->escape($name).", ".$this->db->escape($usertype).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
	}
	public function reservation($bookingid){

		$result = $this->db->query("SELECT * FROM booking_main, booking_details, bill_payment, booking_charges WHERE booking_main.bookingid = booking_details.bookingid and bill_payment.bookingid = booking_main.bookingid and booking_charges.bookingid = booking_main.bookingid AND booking_main.bookingid = $bookingid");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
		
	}
	public function payment($bookingid){

		$result = $this->db->query("SELECT * FROM booking_details, bill_payment, booking_charges, billing_discount  WHERE booking_details.bookingid = bill_payment.bookingid and booking_charges.bookingid = booking_details.bookingid and billing_discount.bookingid = booking_details.bookingid AND booking_details.bookingid = $bookingid");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
		
	}
	public function management($bookingid){

		$result = $this->db->query("SELECT * FROM bill_payment WHERE bookingid= $bookingid");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
		
	}
	
	//public function filter(){
		//$result = $this->db->query("SELECT * FROM bill_payment where  datepaid BETWEEN  'from_date' AND 'to_date'");
		//$resultarray = $result->result_array();
		//echo json_encode($resultarray[0]);
	//}
	
 //filter.php  
 public function filter(){
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
     $connect = mysqli_connect("localhost", "hms_hoteldb", ",;8tiBD9^46_", "hms_hotelmanagementdb"); 
      $output = '';  
      $query = "  
           SELECT * FROM bill_payment  
           WHERE datepaid BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
	  
            <table id="example-datatable" name="filter" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Card Type</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bookingid"] .'</td>  
                          <td>'. $row["datepaid"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                          <td>'. $row["bank"] .'</td>  
                          <td>'. $row["cardtype"] .'</td> 
						  <td>'. $row["refno"] .'</td>  
                          <td>'. $row["amountpaid"] .'</td>  
                          <td>'. $row["note"] .'</td> 
						  <td>'. $row["modeofpayment"] .'</td> 
						 <td><a href="#modal-large" data-toggle="modal" onclick="management('.$row['bookingid'].');" type="button" class="btn btn-effect-ripple btn-info"><i class="fa fa-print"></i></a></td>
				
                     </tr>  
					 </thead>
                <tbody>
			
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 }
	public function deleteuser($userid){

		$sql = "DELETE from users where uid='".$userid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function deletecheck($bdid){

		$sql = "DELETE from booking_details where bdid='".$bdid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	
	
	public function deleteguest($guestID){

		$sql = "UPDATE guest set status=".$this->db->escape("DELETED")." where guestID=".$this->db->escape($guestID)."";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function deleteroom($roomID){

		$sql = "DELETE from room where roomID='".$roomID."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function deleteroomrates($rateID){

		$sql = "DELETE from room_rates where rateID='".$rateID."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function deletereservation($bookingid){

		$sql = "DELETE from booking_main where bookingid='".$bookingid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	public function deleteaddbooking($bdid){

		$sql = "DELETE from booking_details where bdid='".$bdid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
		public function deleteaddcharges($bcid){

		$sql = "DELETE from booking_charges where bcid='".$bcid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	public function deletecharges($chargeID){

		$sql = "DELETE from other_charges where chargeID='".$chargeID."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function deletepayment($paymentid){

		$sql = "DELETE from bill_payment where paymentid='".$paymentid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	public function deletediscount($disid){

		$sql = "DELETE from billing_discount where disid='".$disid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function updatebooking($bdid){

		$sql = "UPDATE booking_details set status=".$this->db->escape("Checked In")." where bdid=".$this->db->escape($bdid)."";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	
	public function updateuseraccount($uid)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("SELECT * FROM users WHERE uid= $uid");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	public function updateuser(){
		
		$uid = $this->input->post('uid');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$usertype = $this->input->post('usertype');
		
		$sql = "UPDATE users SET username=".$this->db->escape($username)." ,password=".$this->db->escape($password)." ,name=".$this->db->escape($name)." ,usertype=".$this->db->escape($usertype)." where uid=".$this->db->escape($uid)."";

		$this->db->query($sql);
		echo $sql;
		
	}
	public function updateguestprofile($guestID)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("SELECT * FROM guest WHERE guestID= $guestID");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	public function guestupdate(){
		
		$guestID = $this->input->post('guestID');
		$guestType = $this->input->post('guestType');
		$guestName = $this->input->post('guestName');
		$contactNo = $this->input->post('contactNo');
		$eMail = $this->input->post('eMail');
		$nationality = $this->input->post('nationality');
		
		$sql = "UPDATE guest SET guestType=".$this->db->escape($guestType)." ,guestName=".$this->db->escape($guestName)." ,contactNo=".$this->db->escape($contactNo).", eMail=".$this->db->escape($eMail)." ,nationality=".$this->db->escape($nationality)." where guestID=".$this->db->escape($guestID)."";

		$this->db->query($sql);
		echo $sql;
		
	}
	public function updateroomrates($rateID)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("SELECT * FROM room_rates WHERE rateID= $rateID");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	public function rateupdate(){
		
		//$instcode = $this->input->post('instcode');
		$rateID = $this->input->post('rateID');
		$roomName = $this->input->post('roomName');
		$goodFor = $this->input->post('goodFor');
		$peak = $this->input->post('peak');
		$superPeak = $this->input->post('superPeak');
		$lowSeason = $this->input->post('lowSeason');
		$building = $this->input->post('building');
		
		$sql = "UPDATE room_rates SET roomName=".$this->db->escape($roomName)." ,goodFor=".$this->db->escape($goodFor)." ,peak=".$this->db->escape($peak).", superPeak=".$this->db->escape($superPeak).", lowSeason=".$this->db->escape($lowSeason)." ,building=".$this->db->escape($building)." where rateID=".$this->db->escape($rateID)."";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
		
		
	}
	
	public function addprofile(){
		
		//$instcode = $this->input->post('instcode');
		$companyname = $this->input->post('companyname');
		$address = $this->input->post('address');
		$contactnumber = $this->input->post('contactnumber');
		$email = $this->input->post('email');
		
		$sql = "INSERT INTO company (companyname,address,contactnumber,email) VALUES (".$this->db->escape($companyname).", ".$this->db->escape($address).", ".$this->db->escape($contactnumber).", ".$this->db->escape($email).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
		
		
	}
	public function savecash(){
		
		$bookingid = $this->input->post('bookingid');
		$modeofpayment = $this->input->post('modeofpayment');
		$amountpaid = $this->input->post('amountpaid');
		$note = $this->input->post('note');
		$datepaid = $this->input->post('datepaid');
		
		$sql = "INSERT INTO bill_payment (bookingid,modeofpayment,amountpaid,note,datepaid) VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($modeofpayment).", ".$this->db->escape($amountpaid).", ".$this->db->escape($note).", ".$this->db->escape($datepaid).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
		
		
	}
	public function addcard(){
		
		//$instcode = $this->input->post('instcode');
		$bookingid = $this->input->post('bookingid');
		$datepaid = $this->input->post('datepaid');
		$name = $this->input->post('name');
		$bank = $this->input->post('bank');
		$cardtype = $this->input->post('cardtype');
		$refno = $this->input->post('refno');
		$amountpaid = $this->input->post('amountpaid');
		$note = $this->input->post('note');
		$modeofpayment = $this->input->post('modeofpayment');
		
		$sql = "INSERT INTO bill_payment (bookingid,datepaid,name,bank,cardtype,refno,amountpaid,note,modeofpayment)VALUES (".$this->db->escape($bookingid).",".$this->db->escape($datepaid).", ".$this->db->escape($name).", ".$this->db->escape($bank).", ".$this->db->escape($cardtype).", ".$this->db->escape($refno).", ".$this->db->escape($amountpaid).", ".$this->db->escape($note).", ".$this->db->escape($modeofpayment).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
		
		
	}
	
	public function addbank(){
		
		//$instcode = $this->input->post('instcode');
		$bookingid = $this->input->post('bookingid');
		$datepaid = $this->input->post('datepaid');
		$name = $this->input->post('name');
		$bank = $this->input->post('bank');
		$refno = $this->input->post('refno');
		$amountpaid = $this->input->post('amountpaid');
		$note = $this->input->post('note');
		$modeofpayment = $this->input->post('modeofpayment');
		
		$sql = "INSERT INTO bill_payment (bookingid,datepaid,name,bank,refno,amountpaid,note,modeofpayment)VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($datepaid).", ".$this->db->escape($name).", ".$this->db->escape($bank).", ".$this->db->escape($refno).", ".$this->db->escape($amountpaid).", ".$this->db->escape($note).", ".$this->db->escape($modeofpayment).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
		
		
	}
	
	public function adddiscount(){
		
		//$instcode = $this->input->post('instcode');
		$bookingid = $this->input->post('bookingid');
		$discounttype = $this->input->post('discounttype');
		$date = $this->input->post('date');
		$noofseniorcitizen = $this->input->post('noofseniorcitizen');
		$note = $this->input->post('note');
		$billamount = $this->input->post('billamount');
		
		
		$sql = "INSERT INTO billing_discount(bookingid,discounttype,date,noofseniorcitizen,note,billamount)VALUES (".$this->db->escape($bookingid).", ".$this->db->escape($discounttype).", ".$this->db->escape($date).", ".$this->db->escape($noofseniorcitizen).", ".$this->db->escape($note).", ".$this->db->escape($billamount).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
		$reservationinfo = $this->db->query("SELECT MAX(bookingid) as lastid FROM billing_discount");
		$reservationinfoarray = $reservationinfo->result_array();
		echo json_encode($reservationinfoarray[0]);
		
		
	}
	
	public function updatecharges($chargeID)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("SELECT * FROM other_charges WHERE chargeID= $chargeID");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	public function updateothercharges(){
		
		$chargeID = $this->input->post('chargeID');
		$namecharge = $this->input->post('namecharge');
		$charge = $this->input->post('charge');
		
		
		$sql = "UPDATE other_charges SET namecharge=".$this->db->escape($namecharge)." ,charge=".$this->db->escape($charge)." where chargeID=".$this->db->escape($chargeID)."";

		$this->db->query($sql);
		echo $sql;
		
	}
	
	
	public function updatebookingd($bdid)
	{
		//$result = $this->db->get('contacts');
		$result = $this->db->query("select * from booking_details where bdid= $bdid");
		$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	}
	public function savereservationdetails(){
		
		//$instcode = $this->input->post('instcode');
		$bdid = $this->input->post('bdid');
		$bookingid = $this->input->post('bookingid');
		$checkin = $this->input->post('checkin');
		$checkout = $this->input->post('checkout');
		$pax = $this->input->post('pax');
		$roomNames = $this->input->post('roomNames');
		$good_for = $this->input->post('good_for');
		$rate = $this->input->post('rate');
		$season = $this->input->post('season');
		//$status = $this->input->post('status');
		
		
		$sql = "UPDATE booking_details SET bookingid=".$this->db->escape($bookingid)." ,checkin=".$this->db->escape($checkin)." ,checkout=".$this->db->escape($checkout)." ,pax=".$this->db->escape($pax).", roomNames=".$this->db->escape($roomNames).", good_for=".$this->db->escape($good_for).", rate=".$this->db->escape($rate).", season=".$this->db->escape($season)."  where bdid=".$this->db->escape($bdid)."";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		//echo $this->db->affected_rows();
		
		
		
	}
	
	
	
	
	public function saveothercharge(){
		
		$chargeID = $this->input->post('chargeID');
		$namecharge = $this->input->post('namecharge');
		$charge = $this->input->post('charge');
		
		
		$sql = "INSERT INTO other_charges (chargeID,namecharge,charge) VALUES (".$this->db->escape($chargeID).", ".$this->db->escape($namecharge).", ".$this->db->escape($charge).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
	}
	
	public function good_for(){
		$result = $this->db->query("select roomName from room_rates where goodfor like goodfor");
	$resultarray = $result->result_array();
		echo json_encode($resultarray[0]);
	
	}
	public function  fetch_select(){
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'hms_hoteldb';
 $pass = ',;8tiBD9^46_';
 mysql_connect($host, $user, $pass);
 mysql_select_db('hms_hotelmanagementdb');

 $goodfor = $_POST['get_option'];
 $find=mysql_query("select roomName from room_rates where goodfor=$goodfor");
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['roomName']."</option>";
 }
 exit;
}
}


public function  select(){
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'hms_hoteldb';
 $pass = ',;8tiBD9^46_';
 mysql_connect($host, $user, $pass);
 mysql_select_db('hms_hotelmanagementdb');
 
 $goodfor = $_POST['get_option'];
 $find=mysql_query("select roomName from room_rates where goodfor=$goodfor");
 while($row=mysql_fetch_array($find)){
  echo "<option>".$row['roomName']."</option>";
//echo json_encode($find[0]);
}
}
}

public function  chargeselect(){
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'hms_hoteldb';
 $pass = ',;8tiBD9^46_';
 mysql_connect($host, $user, $pass);
 mysql_select_db('hms_hotelmanagementdb');
 
 $namecharge = $_POST['get_option'];
$result = mysql_query("SELECT charge FROM other_charges WHERE namecharge='$namecharge'");
 while($row=mysql_fetch_array($result)){
  echo "<option>".$row['charge']."</option>";
//echo json_encode($find[0]);
}
}
}

	 public function bankfilters(){
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
       $connect = mysqli_connect("localhost", "hms_hoteldb", ",;8tiBD9^46_", "hms_hotelmanagementdb"); 
      $output = '';  
      $query = "  
           SELECT * FROM bill_payment  
           WHERE datepaid BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  and modeofpayment='Bank Deposit'
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
	  
            <table id="example-datatable" name="filter" class="table table-striped table-bordered" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						
                    </tr>
                </thead>
                <tbody>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bookingid"] .'</td>  
                          <td>'. $row["datepaid"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                          <td>'. $row["bank"] .'</td>  
						  <td>'. $row["refno"] .'</td>  
                          <td>'. $row["amountpaid"] .'</td>  
                          <td>'. $row["note"] .'</td> 
						  <td>'. $row["modeofpayment"] .'</td> 
						
				
                     </tr>  
					 </thead>
                <tbody>
			
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 }
 
 public function cashfilters(){
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "hms_hoteldb", ",;8tiBD9^46_", "hms_hotelmanagementdb"); 
      $output = '';  
      $query = "  
           SELECT * FROM bill_payment  
           WHERE datepaid BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  and modeofpayment='Cash'
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
	  
            <table id="example-datatable" name="filter" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						
                    </tr>
                </thead>
                <tbody>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bookingid"] .'</td>  
                          <td>'. $row["datepaid"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                          <td>'. $row["amountpaid"] .'</td>  
                          <td>'. $row["note"] .'</td> 
						  <td>'. $row["modeofpayment"] .'</td> 
						 
				
                     </tr>  
					 </thead>
                <tbody>
			
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 }
 
  public function cardfilters(){
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "hms_hoteldb", ",;8tiBD9^46_", "hms_hotelmanagementdb");  
      $output = '';  
      $query = "  
           SELECT * FROM bill_payment  
           WHERE datepaid BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  and modeofpayment='Credit/Debit Card'
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
	  
            <table id="example-datatable" name="filter" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Card Type</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						
                    </tr>
                </thead>
                <tbody>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bookingid"] .'</td>  
                          <td>'. $row["datepaid"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                          <td>'. $row["bank"] .'</td>  
                          <td>'. $row["cardtype"] .'</td> 
						  <td>'. $row["refno"] .'</td>  
                          <td>'. $row["amountpaid"] .'</td>  
                          <td>'. $row["note"] .'</td> 
						  <td>'. $row["modeofpayment"] .'</td> 
						 
				
                     </tr>  
					 </thead>
                <tbody>
			
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
               
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 }
	
	
	
	
	
	
	//end code hotel manangement system//
	
	
	
	//save contact from hei details
	
		
	
	
	
	public function savecontact(){
		
		$instcode = $this->input->post('instcode');
		$contactname = $this->input->post('contactname');
		$position = $this->input->post('position');
		$email = $this->input->post('email');
		$telno = $this->input->post('telno');
		$address = $this->input->post('address');
		
		$sql = "INSERT INTO contacts (contactname,telno,position,address,email,instcode) VALUES (".$this->db->escape($contactname).", ".$this->db->escape($telno).", ".$this->db->escape($position).", ".$this->db->escape($address).", ".$this->db->escape($email).", ".$this->db->escape($instcode).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
	}
	
	public function saveaccount(){
		
		//$instcode = $this->input->post('instcode');
		$accountname = $this->input->post('accountname');
		$email = $this->input->post('email');
		$telno = $this->input->post('telno');
		$address = $this->input->post('address');
		
		$sql = "INSERT INTO accounts (accountname,address,telno,email) VALUES (".$this->db->escape($accountname).", ".$this->db->escape($address).", ".$this->db->escape($telno).", ".$this->db->escape($email).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
	}
	
	public function deleteaccount($accountid){

		$sql = "DELETE from accounts where accountid='".$accountid."'";
		$this->db->query($sql);
		
	}
	
	//save contact from Contacts Menu
	public function savesinglecontact(){
		
		$instcode = $this->input->post('instcode');
		$accountid = $this->input->post('accountid');
		$contactname = $this->input->post('contactname');
		$email = $this->input->post('email');
		$telno = $this->input->post('telno');
		$address = $this->input->post('address');
		$position = $this->input->post('position');
		$fax = $this->input->post('fax');
		$website = $this->input->post('website');
		
		$sql = "INSERT INTO contacts (contactname,telno,address,email,instcode,accountid,position,fax,website) VALUES (".$this->db->escape($contactname).", ".$this->db->escape($telno).", ".$this->db->escape($address).", ".$this->db->escape($email).", ".$this->db->escape($instcode).", ".$this->db->escape($accountid).", ".$this->db->escape($position).", ".$this->db->escape($fax).", ".$this->db->escape($website).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	
	public function deletecontact($contactid){

		$sql = "DELETE from contacts where contactid='".$contactid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function generatepermitno(){

		$spcode = $this->input->post('specialpermit');	
		//$result = $this->db->get('contacts');
		$lastpermitno = $this->db->query("SELECT * FROM permits_recognition where specialpermit='$spcode' order by permitno desc");
		$permitarray = $lastpermitno->result_array();
		echo intval($permitarray[0]['permitno']);
		
		
	
	}
	
	public function savepermits(){
		
		$instcode = $this->input->post('instcode');
		$permitdate = $this->input->post('permitdate');
		$programname = $this->input->post('programname');
		$specialpermit = $this->input->post('specialpermit');
		$permitno = $this->input->post('permitno');
		$seriesyear = $this->input->post('seriesyear');
		$effectivitydate = $this->input->post('effectivitydate');
		$programlevel = $this->input->post('programlevel');
		
		
		$sql = "INSERT INTO permits_recognition (instcode,permitdate,programname,specialpermit,permitno,seriesyear,effectivitydate,programlevel) VALUES (".$this->db->escape($instcode).", ".$this->db->escape($permitdate).", ".$this->db->escape($programname).", ".$this->db->escape($specialpermit).", ".$this->db->escape($permitno).", ".$this->db->escape($seriesyear).", ".$this->db->escape($effectivitydate).", ".$this->db->escape($programlevel).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		
	}
	
	public function savecoordinates($instcode){
		
		//$instcode = $this->input->post('instcode');
		$latitude = $this->input->post('latitude');
		$longtitude = $this->input->post('longtitude');
		//$instcode =$this->input->post('instcode');
		
		$sql = "update a_institution_profile set latitude=".$this->db->escape($latitude)." ,longtitude=".$this->db->escape($longtitude)." where instcode=".$this->db->escape($instcode)."";

		$this->db->query($sql);
		
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	
	public function saveheiinfo($instcode){
		
		//$instcode = $this->input->post('instcode');
		//$latitude = $this->input->post('latitude');
		//$longtitude = $this->input->post('longtitude');
		$heitype =$this->input->post('heitype');
		$province2 =$this->input->post('province2');
		
		$sql = "update a_institution_profile set heitype=".$this->db->escape($heitype).", province2=".$this->db->escape($province2)." where instcode=".$this->db->escape($instcode)."";

		$this->db->query($sql);
		
		//echo $sql;
		//echo $this->db->affected_rows();
		
	}
	public function savesupervisorprogram($programid){
		
		
		$supervisor =$this->input->post('supervisor');
		
		$sql = "update b_program set supervisor=".$this->db->escape($supervisor)." where programid=".$this->db->escape($programid)."";

		$this->db->query($sql);
		
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	
	public function getprograminfo($programid){

		//$spcode = $this->input->post('specialpermit');	
		//$result = $this->db->get('contacts');
		$programinfo = $this->db->query("SELECT * FROM b_program where programid='$programid'");
		$programinfoarray = $programinfo->result_array();
		echo json_encode($programinfoarray[0]);
		//echo intval($permitarray[0]['permitno']);
	
	

	}
	
	public function updateprogram($programid){
		
		
		$supervisor =$this->input->post('supervisor');
		$discipline =$this->input->post('discipline');
		$discipline2 =$this->input->post('discipline2');
		
		$sql = "update b_program set supervisor=".$this->db->escape($supervisor).", discipline=".$this->db->escape($discipline).",discipline2=".$this->db->escape($discipline2)." where programid=".$this->db->escape($programid)."";

		$this->db->query($sql);
		
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	
	
	public function savesingleapplicant(){
		
		
		$this->load->library('session');
		$this->session;
		$uid = $this->session->userdata('uid');
		$lastname = $this->input->post('lastname');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$dateofbirth = $this->input->post('dateofbirth');
		$placeofbirth = $this->input->post('placeofbirth');
		$gender = $this->input->post('gender');
		$civilstatus = $this->input->post('civilstatus');
		$citizenship = $this->input->post('citizenship');
		$contactno = $this->input->post('contactno');
		$email = $this->input->post('email');
		$extension = $this->input->post('extension');
		$barangay = $this->input->post('barangay');
		$towncity = $this->input->post('towncity');
		$province = $this->input->post('province');
		$zipcode = $this->input->post('zipcode');
		$congressionaldistrict = $this->input->post('congressionaldistrict');
		$heicode = $this->input->post('heicode');
		$course = $this->input->post('course');
		$father = $this->input->post('father');
		$foccupation = $this->input->post('foccupation');
		$mother = $this->input->post('mother');
		$moccupation = $this->input->post('moccupation');
		$siblingno = $this->input->post('siblingno');
		$disability = $this->input->post('disability');
		$yearofapplication = $this->input->post('yearofapplication');
		
		$sql = "INSERT INTO scholarship_applicant(lastname,firstname,middlename,extension,gender,barangay,towncity,province,zipcode,dateofbirth,placeofbirth,civilstatus,citizenship,congressionaldistrict,hei,course,contactno,email,father,foccupation,mother,moccupation,siblingno,disability,yearapplied,addedbyuid) VALUES (".$this->db->escape($lastname).", ".$this->db->escape($firstname).", ".$this->db->escape($middlename).", ".$this->db->escape($extension).", ".$this->db->escape($gender).", ".$this->db->escape($barangay).", ".$this->db->escape($towncity).", ".$this->db->escape($province).", ".$this->db->escape($zipcode).", ".$this->db->escape($dateofbirth).", ".$this->db->escape($placeofbirth).", ".$this->db->escape($civilstatus).", ".$this->db->escape($citizenship).", ".$this->db->escape($congressionaldistrict).", ".$this->db->escape($heicode).", ".$this->db->escape($course).", ".$this->db->escape($contactno).", ".$this->db->escape($email).", ".$this->db->escape($father).", ".$this->db->escape($foccupation).", ".$this->db->escape($mother).", ".$this->db->escape($moccupation).", ".$this->db->escape($siblingno).", ".$this->db->escape($disability).", ".$this->db->escape($yearofapplication).", ".$this->db->escape($uid).")";
		$this->db->query($sql);
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	public function deleteapplicant($applicantid){

		$sql = "DELETE from scholarship_applicant where applicantid='".$applicantid."'";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function savepayment($scholarid){
		
		
		$semester =$this->input->post('semester');
		$schoolyear =$this->input->post('schoolyear');
		$checkno =$this->input->post('checkno');
		$paymentdate =$this->input->post('paymentdate');
		$fundcluster =$this->input->post('fundcluster');
		$amount =$this->input->post('amount');
		$remarks =$this->input->post('remarks');
		$cy =$this->input->post('cy');
		$status =$this->input->post('status');
		
		$sql = "INSERT INTO scholarship_payment (scholarid,semester,schoolyear,paymentdate,fundcluster,checkno,amount,remarks,cy,status) VALUES (".$this->db->escape($scholarid).", ".$this->db->escape($semester).", ".$this->db->escape($schoolyear).", ".$this->db->escape($paymentdate).", ".$this->db->escape($fundcluster).", ".$this->db->escape($checkno).", ".$this->db->escape($amount).", ".$this->db->escape($remarks).", ".$this->db->escape($cy).", ".$this->db->escape($status).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
		//echo $this->db->affected_rows();
		
	}
	
	public function getpaymentinfo($spaymentid){

		//$spcode = $this->input->post('specialpermit');	
		//$result = $this->db->get('contacts');
		$paymentinfo = $this->db->query("SELECT * FROM scholarship_payment where spaymentid='$spaymentid'");
		$paymentinfoarray = $paymentinfo->result_array();
		echo json_encode($paymentinfoarray[0]);
		//echo intval($permitarray[0]['permitno']);
	
	

	}
	
	public function updatepayment($spaymentid){
		
		
		$semester =$this->input->post('semester');
		$schoolyear =$this->input->post('schoolyear');
		$checkno =$this->input->post('checkno');
		$amount =$this->input->post('amount');
		$remarks =$this->input->post('remarks');
		$cy =$this->input->post('cy');
		$status =$this->input->post('status');
		
		$details="Updated Status to ".$status;
		//$details+="Updated Schoolyear to $semester";
		//$details+="Updated Checkno to $semester";
		//$details+="Updated amount to $semester";
		//$details+="Updated remarks to $semester";
		
		
		//updatelog
		$sql2 = "INSERT INTO scholarship_payment_log (uid,spaymentid,details) VALUES ('1', ".$this->db->escape($spaymentid).", '$details')";

		$this->db->query($sql2);
		
		
		$sql = "update scholarship_payment set semester=".$this->db->escape($semester).", schoolyear=".$this->db->escape($schoolyear).",checkno=".$this->db->escape($checkno).", amount=".$this->db->escape($amount).", remarks=".$this->db->escape($remarks).", cy=".$this->db->escape($cy).", status=".$this->db->escape($status)." where spaymentid=".$this->db->escape($spaymentid)."";

		$this->db->query($sql);
		
		echo $sql;
		//echo $this->db->affected_rows();
		
	}
	
	public function permitsxls(){
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle('Permit List');
		$this->load->model('permitsrecognition_model');
		$permit_list = $this->permitsrecognition_model->getxls();
		
		$this->excel->getActiveSheet()->fromArray($permit_list);
		$filename='permit_list.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		 $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5'); 
		 $objWriter->save('php://output');
		
	

	}
	
	public function savevoucher($scholarid){
		
		
		
		$fundcluster =$this->input->post('fundcluster');
		$voucherdate =$this->input->post('voucherdate');
		$dvno =$this->input->post('dvno');
		$modeofpayment =$this->input->post('modeofpayment');
		$orsno =$this->input->post('orsno');
		$vouchersemester =$this->input->post('vouchersemester');
		$voucherschoolyear =$this->input->post('voucherschoolyear');
		//$particulars =$this->input->post('particulars');
		$responsibility =$this->input->post('responsibility');
		$mfopap =$this->input->post('mfopap');
		$voucheramount =$this->input->post('voucheramount');
		$certifiedcash =$this->input->post('certifiedcash');
		$certifiedsubject =$this->input->post('certifiedsubject');
		$certifiedsupporting =$this->input->post('certifiedsupporting');
		$currentbatch =$this->input->post('currentbatch');
		
		
		$sql = "INSERT INTO scholarship_voucher (fundcluster,voucherdate,dvno,modeofpayment,scholarid,orsno,vouchersemester,vouchersy,responsibility,mfopap,amount,certifiedcash,certifiedsubject,certifiedsupporting,batch) VALUES (".$this->db->escape($fundcluster).", ".$this->db->escape($voucherdate).", ".$this->db->escape($dvno).", ".$this->db->escape($modeofpayment).", ".$this->db->escape($scholarid).", ".$this->db->escape($orsno).", ".$this->db->escape($vouchersemester).", ".$this->db->escape($voucherschoolyear).", ".$this->db->escape($responsibility).", ".$this->db->escape($mfopap).", ".$this->db->escape($voucheramount).", ".$this->db->escape($certifiedcash).", ".$this->db->escape($certifiedsubject).", ".$this->db->escape($certifiedsupporting).", ".$this->db->escape($currentbatch).")";
		$this->db->query($sql);
		//echo $sql;
		//echo $this->db->affected_rows();
		//echo $this->db->affected_rows();
		
		$voucherinfo = $this->db->query("SELECT MAX(voucherid) as lastid FROM scholarship_voucher where dvno='$dvno'");
		$voucherinfoarray = $voucherinfo->result_array();
		echo json_encode($voucherinfoarray[0]);
		
	}
	
	public function saveentry($dvno){
		
		
		
		
		$accounttitle2 =$this->input->post('accounttitle');
		if($accounttitle2 == "regular"){
			$accounttitle = "Cash - MDS, Regular Account";
			$uacscode = "1010404000";
		}if($accounttitle2 == "special"){
			$accounttitle = "Cash - MDS, Special Account";
			$uacscode = "1010405000";
		}if($accounttitle2 == "lcca"){
			$accounttitle = "Cash in Bank - LCCA - LBP";
			$uacscode = "1010202024";
		}
		//$uacscode =$this->input->post('uacscode');
		$columnentry =$this->input->post('columnentry');
		$accountentryamount =$this->input->post('accountentryamount');
		$voucherid =$this->input->post('voucherid');
		
		$sql2 = "INSERT INTO scholarship_voucher_b (voucherid,dvno,accounttitle,uacscode,columnentry,amount) VALUES (".$this->db->escape($voucherid).", ".$this->db->escape($dvno).", ".$this->db->escape("Donations").", ".$this->db->escape("5029908000").", ".$this->db->escape("Debit").", ".$this->db->escape($accountentryamount).")";
		$this->db->query($sql2);
		
		$sql = "INSERT INTO scholarship_voucher_b (voucherid,dvno,accounttitle,uacscode,columnentry,amount) VALUES (".$this->db->escape($voucherid).", ".$this->db->escape($dvno).", ".$this->db->escape($accounttitle).", ".$this->db->escape($uacscode).", ".$this->db->escape($columnentry).", ".$this->db->escape($accountentryamount).")";
		$this->db->query($sql);
		
		
		
		//echo $sql;
		//echo $this->db->affected_rows();
		//echo $this->db->affected_rows();
		//$voucherinfo = $this->db->query("SELECT MAX(voucherid) as lastid FROM scholarship_voucher");
		//$voucherinfoarray = $voucherinfo->result_array();
		//echo json_encode($voucherinfoarray[0]);
		
	}
	
	public function getentrydetails($dvno){

		//$spcode = $this->input->post('specialpermit');	
		//$result = $this->db->get('contacts');
		$entrycount = $this->db->query("SELECT count(*) as numberofentry FROM scholarship_voucher_b where dvno='$dvno'");
		$entrycountarray = $entrycount->result_array();
		echo json_encode($entrycountarray[0]);
		//echo intval($permitarray[0]['permitno']);
	
	

	}
	
	
	public function getscholarfiltered($typecode){

		$studentfiltered = $this->db->query("SELECT scholarship_studentprofile.scholarid,CONCAT(firstname,' ',lastname) AS fullname FROM scholarship_studentprofile LEFT JOIN scholarship_award_student ON scholarship_studentprofile.scholarid = scholarship_award_student.scholarid WHERE typecode='$typecode'");
		//return $studentfiltered->result_array();
		
		echo json_encode($studentfiltered->result_array());
		//echo intval($permitarray[0]['permitno']);
	
	

	}
	
		public function getscholarfullname($scholarid)
	{
		//$result = $this->db->get('contacts');
		$scholarfullname = $this->db->query("SELECT CONCAT(firstname,' ',lastname) AS fullname FROM scholarship_studentprofile where scholarid='$scholarid'");
		echo json_encode($scholarfullname->result_array());
		//print_r($scholarfullname);
		
		
		
	}
	
	
	
	
	public function index()
	{
		/*$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Higher Education Institution Directory") ;
		$data['heidirectory'] = $this->heidirectory_model->get();
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('heidirectory/heidirectory_view',$data);
		$this->load->view('inc/footer_view');
		*/
	}
	
	
	public function institution($instcode){
		/*$data = $this->data;
		$data['page'] = "institution";
		$data['details'] = $this->heidirectory_model->getinstname($instcode)->row();
		
		//if($data['details']->result=='0'){
			//echo 'none';
		//}else{
			$data['programs'] = $this->heidirectory_model->getprograms($instcode);
			$data['deans'] = $this->heidirectory_model->getdeans($instcode);
			$data['formernames'] = $this->heidirectory_model->getformernames($instcode);
			
			
			//$data['subnavtitle'] = $data['instname'];
			//$data['heidirectory'] = $result->result();
			
			$this->load->view('inc/header_view');
			$this->load->view('heidirectory/heidirectorydetails_view',$data);
			$this->load->view('heidirectory/mapheader_view');
			$this->load->view('inc/footer_view');
			//print_r($data);
		//}
		*/
	}
	

	
	
}