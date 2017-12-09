<!--Add Reservation-->
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
	
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('staff_leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('staff_subheader_view'); ?>

		<!-- Page content -->
		<div id="page-content">
			<?php $this->load->view('heidirectory/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
          
                    <h2 class="page-header" style="color:#000; font-size: 25px;"><i class="fa fa-book fa-2x"></i>Company Profile</h2>
					
					<div class="pull-right">
									<button id="profile" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-regular" style="margin-top: 12px;margin-right: 15px;"><i class="fa fa-plus-circle"></i> Add Profile
								</button>
                                </div> 
                          
               
			<?php //print_r($heidirectory);?>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
                        <th>Company Name</th>
						<th>Address</th>
						<th>Contact Number</th>
						<th>Email</th>
						
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($profile_list as $company):
				
				
				// $studentname;
				
				echo "<tr>";
				echo "<td>".$company['companyname']."</td>";
				echo "<td>".$company['address']."</td>";
				echo "<td>".$company['contactnumber']."</td>";
				echo "<td>".$company['email']."</td>";
				//echo "<td>".$bill_payment['refno']."</td>";
				//echo "<td>".$bill_payment['amount']."</td>";
				//echo "<td>".$bill_payment['note']."</td>";
				//echo "<td>".$bill_payment['modeofpayment']."</td>";
				
				
				//echo "<td><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#editprogram' data-toggle='modal' onclick='editprogram(".$voucher['scholarid'].");'><i class='fa fa-print'></i></button></td></tr>";
				
				endforeach;
				
				?>
				
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Company Profile</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Company Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="companyname" class="form-control" name="bookingID"value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Address</label>
                                            <div class="col-md-6">
                                                <input type="text" id="address" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact Number</label>
                                            <div class="col-md-6">
                                                <input type="text" id="contactnumber" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" id="email" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="addprofile();">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->				
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->