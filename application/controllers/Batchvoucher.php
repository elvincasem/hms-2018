<?php

class Batchvoucher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('scholarship_model');
		 $this->data = array(
            'title' => 'Voucher List',
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
			'paymentlist' => '',
			'voucherlist' => 'active'
			);
	}
	
	public function index()
	{

		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Voucher List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		//$data['voucher_list'] = $this->scholarship_model->getvoucherlist();
		$data['scholarship_type'] = $this->scholarship_model->getscholarshiptype();
		$lastnumber = $this->scholarship_model->getlastvoucherbatch()->row();
		
		$data['maxbatchid'] = $lastnumber->maxnum+1;
		//print_r($data['details']);
		$data['voucher_list'] = array("");
		
		$data['voucher_batch'] = $this->scholarship_model->getvoucherbatch();
		
		//$data['typcode'] = "";
		$this->load->view('inc/header_view');
		$this->load->view('scholarship/batchvoucher_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	public function batch($batchid)
	{

		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Voucher List") ;
		
		$data['scholarship_type'] = $this->scholarship_model->getscholarshiptype();
		$data['maxbatchid'] = $batchid;
		$data['voucher_list'] = array("");
		
		$this->load->view('inc/header_view');
		$this->load->view('scholarship/batchvoucher_view',$data);
		$this->load->view('inc/footer_view');
		
	}
	
	public function filter($typecode){
		$data = $this->data;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Voucher List") ;
		//$data['contact_list'] = $this->contacts_model->get();
		//$data['hei_list'] = $this->contacts_model->gethei();
		//$data['voucher_list'] = $this->scholarship_model->getvoucherlist();
		$data['scholarship_type'] = $this->scholarship_model->getscholarshiptype();
		//print_r($data['details']);
		$data['scholartypcode'] = $typecode;
		
		
		//$sdescription = $this->db->query("SELECT typedescription FROM scholarship_type where typecode='$typecode'");
		//$sdescript = $sdescription->result_array();
		//echo intval($permitarray[0]['permitno']);
		//$data['scholardescription'] = $sdescript[0]['typedescription'];
		
		
		$this->load->view('inc/header_view');
		$this->load->view('scholarship/batchvoucher_view',$data);
		$this->load->view('inc/footer_view');
	}
	
	
	
	public function printvoucher($voucherid){
		$data = $this->data;
		$data['page'] = "institution";
		$data['voucher_details'] = $this->scholarship_model->getvoucherdetails($voucherid)->row();
		$data['accounting_entry'] = $this->scholarship_model->getaccountingentry($voucherid);
		
		//if($data['details']->result=='0'){
			//echo 'none';
		//}else{
			//$data['programs'] = $this->heidirectory_model->getprograms($instcode);
			//$data['deans'] = $this->heidirectory_model->getdeans($instcode);
			//$data['formernames'] = $this->heidirectory_model->getformernames($instcode);
			
			
			//$data['subnavtitle'] = $data['instname'];
			//$data['heidirectory'] = $result->result();
			
			//$this->load->view('inc/header_view');
			$this->load->view('scholarship/printvoucher_view',$data);
			//$this->load->view('inc/footer_view');
			//print_r($data);
		//}
		
	}
	

	
	
}