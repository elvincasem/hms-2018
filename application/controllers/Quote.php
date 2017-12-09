<?php

class Quote extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('quote_model');
		
		 $this->data = array(
            'title' => 'Quote',
			'reservation' => 'active',
			'billing' => '',
			'reports' => '',
			'settings' => '',
			'reservationlist' => '',
			'quotelist' => 'active',
			'reservedlist' => '',
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
		$data['quotedetails'] =array('instname'=>"Quote Module") ;
		//$data['heidirectory'] = $this->reservation_model->getbookings();
		//print_r($data['details']);
		$data['quote_list'] = $this->quote_model->getbookings_main();
		
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('reservation/quote_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	
	public function quotedetails($bookingids)
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['bookingids'] = $bookingids;
		$data['quotedetails'] =array('instname'=>"Quote Details") ;
		//$data['heidirectory'] = $this->reservation_model->getbookings();
		//print_r($data['details']);
		$data['quote_main'] = $this->quote_model->getbooking_main_details($bookingids)->row();
		$data['reservation_list'] = $this->quote_model->getbooking_details($bookingids);
		$data['quote_list'] = $this->quote_model->getroom_rates();
		$data['guest_list'] = $this->quote_model->getguest();
		$data['othercharge_list'] = $this->quote_model->getother_charges();
		$data['charge_list'] = $this->quote_model->getquote_charges($bookingids);
		$data['chargeamount_list'] = $this->quote_model->getroomcharge();
		//$data['discount_list'] = $this->quote_model->getbilling_discount($bookingids); 
		//$data['total_discount'] = $this->quote_model->gettotal_discount($bookingids)->row();
		//$data['total_charges'] = $this->quote_model->gettotal_charges($bookingids)->row();
		//$data['total_bill'] = $this->quote_model->gettotal_bill($bookingids)->row();
		//$data['total_payment'] = $this->quote_model->gettotal_payment($bookingids)->row();
		//$data['total_balance'] = $this->reservation_model->gettotal_balance($bookingid)->row();
		//$data['total_amount'] = $this->reservation_model->gettotal_amount($bookingid)->row();
		//$data['current_balance'] = $this->reservation_model->getcurrent_balance($bookingid)->row();
		
		//$total_bill = $data['total_bill']->total_bill;
		//$totalpayment = $data['total_payment']->total_payment;
		//$data['totalcharges'] = $data['total_charges']->total_charges + $data['total_bill']->total_bill;
		//$totalcharges = $data['total_charges']->total_charges + $data['total_bill']->total_bill;
		//echo $totalcharges;
		//$data['current_balance'] = $data['totalcharges'] - $data['total_discount']->total_discount - $data['total_payment']->total_payment;
		
		
		$this->load->view('inc/header_view');
		$this->load->view('reservation/quotedetails_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	

	
	
}
?>