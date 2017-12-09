<?php

class Company extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
		 $this->data = array(
            'title' => 'company',
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
			'companylist' => 'active',
			'serviceslist' => '',
			'accounts' => '',
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Company Profile") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		$data['profile_list'] = $this->company_model->getcompany();
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('UserPage/company/company_view',$data);
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