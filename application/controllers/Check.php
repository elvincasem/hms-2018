<?php

class Check extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('checkedin_model');
		 $this->data = array(
           'title' => 'Check',
			'reservation' => 'active',
			'billing' => '',
			'reports' => '',
			'settings' => '',
			'reservationlist' => '',
			'reservedlist' => '',
			'quotelist' => '',
			'checkedlist' => 'active',
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
		$data['details'] =array('instname'=>"Checked In List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		$data['check_list'] = $this->checkedin_model->getbooking_details();
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('reservation/checkedin_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	
	public function profile($scholarid){
		$data = $this->data;
		$data['page'] = "institution";
		$data['scholar_profile'] = $this->scholarship_model->getscholar($scholarid)->row();
		$data['scholar_payment'] = $this->scholarship_model->getscholarpayment($scholarid);
		
		//if($data['details']->result=='0'){
			//echo 'none';
		//}else{
			//$data['programs'] = $this->heidirectory_model->getprograms($instcode);
			//$data['deans'] = $this->heidirectory_model->getdeans($instcode);
			//$data['formernames'] = $this->heidirectory_model->getformernames($instcode);
			
			
			//$data['subnavtitle'] = $data['instname'];
			//$data['heidirectory'] = $result->result();
			
			$this->load->view('inc/header_view');
			$this->load->view('scholarship/scholar_view',$data);
			$this->load->view('inc/footer_view');
			//print_r($data);
		//}
		
	}
	

	
	
}