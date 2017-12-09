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
          
                    <h2 class="page-header" style="color:#000; font-size: 25px;"><i class="fa fa-book fa-2x"></i>Reserved Rooms</h2>
					
					<div class="pull-right">
									
                                </div> 
                          
               
			<?php //print_r($heidirectory);?>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                   <tr>
								<th style="width: 20px;">Reservation ID</th>
								 <th>Guest Name</th>
                                                                <th>Check In</th>
                                                               <th>Check Out</th>
								<th>Packs</th>
                                                                <th>Room</th>
							
								
																
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($reserved_list as $booking_details):
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$booking_details['bookingid']."</td>";
				echo "<td><a href='".base_url()."Staff/reservation/details/".$booking_details['bookingid']."'>".$booking_details['guests']."</a></td>";
				echo "<td>".$booking_details['checkin']."</td>";
				echo "<td>".$booking_details['checkout']."</td>";
				echo "<td>".$booking_details['pax']."</td>";
				echo "<td>".$booking_details['roomNames']."</td>";
				//echo "<td>".$booking_details['rate']."</td>";
				//echo "<td>".$booking_details['season']."</td>";
				//echo "<td>".$booking_details['status']."</td>";
				//echo "<td><a href='#modal-regular' data-toggle='modal' onclick='updatebookingd(".$booking_details['bdid'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a> <button onclick='deleteaddbooking(".$booking_details['bdid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				//echo "<td>".$booking_details['status']."</td>";
				
				
				
				echo "</tr>";
				
				
				
				endforeach;
				?>
				
						<!-- Regular Modal -->
                                    <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Update Booking Details</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                     <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									 <input type="hidden" id="bdid" style="display: none;" name="state-normal" class="form-control" >
										<div class="form-group">
                                             <label class="col-md-3 control-label" for="example-daterange1">Check In/Out</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="checkin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="checkout" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="pax" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Room</label>
                                            <div class="col-md-6">
                                                <input type="text" id="roomNames" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rate</label>
                                            <div class="col-md-6">
                                                <input type="text" id="rate" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Current Season</label>
                                            <div class="col-md-6">
												<select id="season" class="form-control">
												<option value="super peak">Super Peak</option>
												<option value="peak">Peak</option>
												<option value="low">Low</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <input type="text" id="status" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savebookingdetails();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular Modal -->
				
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
<!-- Regular Modal -->
                                    <div id="addReservation" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Add Booking Details</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                     <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                             <label class="col-md-3 control-label" for="example-daterange1">Check In/Out</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="checkin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="checkout" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="pax" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Room ID</label>
                                            <div class="col-md-6">
                                                <input type="text" id="roomid" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rate</label>
                                            <div class="col-md-6">
                                                <input type="text" id="rate" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Current Season</label>
                                            <div class="col-md-6">
												<select id="season" class="form-control">
												<option value="super peak">Super Peak</option>
												<option value="peak">Peak</option>
												<option value="low">Low</option>
												
												</select>
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savedetails();">Save</button>
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