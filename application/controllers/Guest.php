<?php

class Guest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
		 $this->data = array(
           'title' => 'Guests',
			'reservation' => '',
			'billing' => '',
			'reports' => '',
			'settings' => 'active',
			'reservationlist' => '',
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
			'guestlist' => 'active',
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
		$data['details'] =array('instname'=>"Guests List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		//$data['scholars_list'] = $this->scholarship_model->get();
		//print_r($data['details']);
		$data['guest_list'] = $this->settings_model->getguest();
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('settings/guestlist_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	
	public function institution($instcode){
		$data = $this->data;
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
		
	}
	

	
	
}