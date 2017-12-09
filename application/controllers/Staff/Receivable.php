<?php

class Receivable extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reports_model');
		 $this->data = array(
            'title' => 'Collection of Accounts Receivable',
			'reservation' => '',
			'billing' => '',
			'reports' => 'active',
			'settings' => '',
			'reservationlist' => '',
			'reservedlist' => '',
			'quotelist' => '',
			'checkedlist' => '',
			'confirmlist' => '',
			'arrivallist' => '',
			'shiftlist' => '',
			'receivablelist' => '',
			'saleslist' => '',
			'debitlist' => '',
			'banklist' => '',
			'collectionlist' => 'active',
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
		$data['details'] =array('instname'=>"Receivable List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		$data['receivable_list'] = $this->reports_model->getreceivablereport();
		
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('UserPage/reports/receivable_view',$data);
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
		//$data['receivable_list'] = $this->reports_model->getbooking_main();

		
		$this->load->view('inc/header_view');
		$this->load->view('UserPage/reservation/reservationdetails_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	

	
	
}