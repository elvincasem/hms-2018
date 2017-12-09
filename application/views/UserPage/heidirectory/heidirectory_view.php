<!--Add Reservation-->
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
	
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('subheader_view'); ?>

		<!-- Page content -->
		<div id="page-content">
			<?php $this->load->view('heidirectory/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
          
                    <h2 class="page-header" style="color:#000; font-size: 25px;"><i class="fa fa-book fa-2x"></i>Reservations</h2>
					
					<div class="pull-right">
									<button id="addreservationbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addReservation" style="margin-top: 12px;margin-right: 15px;"><i class="fa fa-plus-circle"></i> Reservation
								</button>
                                </div> 
                          
               
			<?php //print_r($heidirectory);?>
        </div>
		
        <div class="table-responsive">
           
				
				
				
				<div class="modal fade" id="addReservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Add Reservations</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="guestid" value="">
								<label>Guest Type</label>
								<select name="guest_type" id="guest_type" class="form-control" style="margin-bottom: 10px;">
									<option value="INDIVIDUAL">INDIVIDUAL</option>
									<option value="COMPANY">COMPANY</option>
									<option value="COMPANY">AGENCY</option>
									
								</select>
								<label>Guest Name</label>
								<input id="guest_name" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Reservation Source</label>
								<select name="reservation_source" id="source" class="form-control" style="margin-bottom: 10px;">
									<option value="INDIVIDUAL"></option>
									<option value="INDIVIDUAL">Call</option>
									<option value="COMPANY">Walk-In</option>
									<option value="COMPANY">Internet</option>
									<option value="COMPANY">Referral</option>
									<option value="COMPANY">Travel Agency</option>
									<option value="COMPANY">Email</option>
									<option value="COMPANY">Others</option>
									
								</select>
								<label>Receptionist</label>
								<input id="receptionist" class="form-control" value="" tabindex="3" style="margin-bottom: 10px;">
								<label>Current Season</label>
								<select name="guest_type" id="guest_type" class="form-control" style="margin-bottom: 10px;">
									<option value="INDIVIDUAL"></option>
									<option value="INDIVIDUAL">Super Peak</option>
									<option value="COMPANY">Peak</option>
									<option value="COMPANY">Low</option>
									
								</select>
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveguest" type="button" class="btn btn-primary">Save and Close</button>
								
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				
             </div>     

        </div>
    
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


