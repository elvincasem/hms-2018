<?php

class Scholar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('scholarship_model');
		 $this->data = array(
            'title' => 'Scholars List',
			'heiclass' => '',
			'heilist' => '',
			'programlist' => '',
			'deanslist' => '',
			'programapplication' => '',
			'accounts' => '',
			'contacts' => '',
			'permits' => '',
			'scholarship' => 'active',
			'scholarslist' => 'active',
			'accreditedhei' => '',
			'scholarshipapplicant' => '',
			'paymentlist' => '',
			'voucherlist' => ''
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Students List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		$data['scholars_list'] = $this->scholarship_model->get();
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('scholarship/scholarslist_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	
	public function profile($scholarid){
		$data = $this->data;
		$data['page'] = "institution";
		$data['scholar_profile'] = $this->scholarship_model->getscholar($scholarid)->row();
		$data['scholar_payment'] = $this->scholarship_model->getscholarpayment($scholarid);
		$data['scholar_voucher'] = $this->scholarship_model->getvoucherspecific($scholarid);
		
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