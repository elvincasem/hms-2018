<?php

class Others extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('scholarship_model');
		 $this->data = array(
            'title' => 'Other Charges',
			'heiclass' => '',
			'heilist' => '',
			'programlist' => '',
			'deanslist' => '',
			'programapplication' => '',
			'accounts' => '',
			'contacts' => '',
			'permits' => '',
			'scholarship' => 'active',
			'scholarslist' => '',
			'accreditedhei' => '',
			'scholarshipapplicant' => '',
			'paymentlist' => 'active',
			'voucherlist' => ''
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		$data['payment_list'] = $this->scholarship_model->getpayment();
		//print_r($data['details']);
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('scholarship/paymentlist_view',$data);
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