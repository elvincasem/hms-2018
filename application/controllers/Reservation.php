<?php

class Reservation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservation_model');
		
		 $this->data = array(
           'title' => 'Reservations',
			'reservation' => 'active',
			'billing' => '',
			'reports' => '',
			'settings' => '',
			'reservationlist' => 'active',
			'reservedlist' => '',
			'quotelist' => '',
			'checkedlist' => '',
			'confirmlist' => '',
			'arrivallist' => '',
			'cancellationlist' => '',
			'managebookinglist' => '',
			'shiftlist' => '',
			'receivablelist' => '',
			'saleslist' => '',
			'debitlist' => '',
			'banklist' => '',
			'collectionlist' => '',
			'statuslist' => '',
			'duelist' => '',
			'customerslist' => '',
			'guestlist' => '',
			'profilelist' => '',
			'roomlist' => '',
			'companylist' => '',
			'serviceslist' => '',
			'accounts' => '',
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Reservations") ;
		//$data['heidirectory'] = $this->reservation_model->getbookings();
		//print_r($data['details']);
		$data['reservation_list'] = $this->reservation_model->getbooking_main();
		
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('reservation/reservation_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	
	public function details($bookingid)
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['bookingid'] = $bookingid;
		$data['details'] =array('instname'=>"Reservation Details") ;
		//$data['heidirectory'] = $this->reservation_model->getbookings();
		//print_r($data['details']);
		$data['reservation_main'] = $this->reservation_model->getbooking_main_details($bookingid)->row();
		$data['reservation_list'] = $this->reservation_model->getbooking_details($bookingid);
		$data['voucher_list'] = $this->reservation_model->getroom_rates();
		$data['guest_list'] = $this->reservation_model->getguest();
		$data['services_list'] = $this->reservation_model->getother_charges($bookingid);
		$data['charges_list'] = $this->reservation_model->getbooking_charges($bookingid);
		$data['payment_list'] = $this->reservation_model->getbill_payment($bookingid);
		$data['discount_list'] = $this->reservation_model->getbilling_discount($bookingid); 
		$data['total_discount'] = $this->reservation_model->gettotal_discount($bookingid)->row();
		$data['total_charges'] = $this->reservation_model->gettotal_charges($bookingid)->row();
		$data['total_bill'] = $this->reservation_model->gettotal_bill($bookingid)->row();
		$data['total_payment'] = $this->reservation_model->gettotal_payment($bookingid)->row();
		//$data['total_balance'] = $this->reservation_model->gettotal_balance($bookingid)->row();
		//$data['total_amount'] = $this->reservation_model->gettotal_amount($bookingid)->row();
		//$data['current_balance'] = $this->reservation_model->getcurrent_balance($bookingid)->row();
		
		$total_bill = $data['total_bill']->total_bill;
		//$totalpayment = $data['total_payment']->total_payment;
		$data['totalcharges'] = $data['total_charges']->total_charges + $data['total_bill']->total_bill;
		//$totalcharges = $data['total_charges']->total_charges + $data['total_bill']->total_bill;
		//echo $totalcharges;
		$data['current_balance'] = $data['totalcharges'] - $data['total_discount']->total_discount - $data['total_payment']->total_payment;
		
		
		$this->load->view('inc/header_view');
		$this->load->view('reservation/reservationdetails_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	

	
	
}
?>