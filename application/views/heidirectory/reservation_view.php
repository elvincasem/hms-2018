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
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						<th style="width: 20px;">Reservation ID</th>
						<th>Booking Date</th>
						<th>Reservation Source</th>
						<th>Receptionist</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($reservation_list as $booking_details):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td><a href='".base_url()."reservation/details/".$booking_details['bookingid']."'>".$booking_details['bookingid']."</a></td>";
				echo "<td>".$booking_details['bookingdate']."</td>";
				echo "<td>".$booking_details['reservationsource']."</td>";
				echo "<td>".$booking_details['receptionist']."</td>";
				
				echo "<td><a href='#modal-large' data-toggle='modal' onclick='printreservation(".$booking_details['bookingid'].");' type='reset' class='btn btn-effect-ripple btn-info'><i class='fa fa-print'></i></a><button onclick='deletereservation(".$booking_details['bookingid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			<!-- Regular Modal -->
			<div id="modal-large" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
							<button onclick="printContent('div1')" class='btn btn-effect-ripple btn-danger'><i class='fa fa-print '>Print Record</i>
						</div>
						<script>function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;}</script>

						<div class="modal-body"  id="div1">
							
                             <tr>
                                               <td>
                                                    <strong>Guest ID</strong>
													
                                                </td>
                                                <td><b><?php echo $bookingid;?></td>
                                            </tr>
						
						</div>
					
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->				
			
<!-- Regular Modal -->
			<div id="addReservation" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Reservation</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
								  
										
                                                <input type="hidden" id="bookingid" name="state-normal" class="form-control" value="">
                                          
						
                                              <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Name</label>
                                            <div class="col-md-6">
                                                <select id="guestid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="73">ivan</option>
                                                    <option value="74">ryan</option>
                                                    <option value="75">lucy</option>
                                                    <option value="76">sandy</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
										<div class="row"></div>
									<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Reservation Source</label>
                                            <div class="col-md-6">
												<select id="reservationsource" class="form-control">
												
												<option value="call">Call</option>
												<option value="walk in">Walk In</option>
												<option value="internet">Internet</option>
												<option value="referral">Referral</option>
												<option value="travel agency">Travel Agency</option>
												<option value="email">Email</option>
												<option value="others">Others</option>
												
												</select>
                                            </div>
                                        </div>
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Receptionist</label>
                                            <div class="col-md-6">
                                                <input type="text" id="receptionist" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Booking Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bookingdate" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                            </div>
                                           
                                        </div>
										
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savereservation();">Save</button>
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