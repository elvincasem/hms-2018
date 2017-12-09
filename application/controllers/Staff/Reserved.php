<?php

class Reserved extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reserved_model');
		
		 $this->data = array(
            'title' => 'Reserved Rooms',
			'reservation' => 'active',
			'billing' => '',
			'reports' => '',
			'settings' => '',
			'reservationlist' => '',
			'reservedlist' => 'active',
			'quotelist' => '',
			'checkedlist' => '',
			'confirmlist' => '',
			'arrivallist' => '',
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
		$data['details'] =array('instname'=>"Reserved Rooms") ;
		//$data['heidirectory'] = $this->reservation_model->getbookings();
		//print_r($data['details']);
		$data['reserved_list'] = $this->reserved_model->getbooking_details();
		
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('UserPage/reservation/reserved_view',$data);
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
		//$data['reservation_main'] = $this->reservation_model->getbooking_main_details($bookingid)->row();
		//$data['reservation_list'] = $this->reservation_model->getbooking_details();
		//$data['othercharges_list'] = $this->reservation_model->getother_charges();
	

		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('UserPage/reservation/reservationdetails_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	

	
	
}
?>