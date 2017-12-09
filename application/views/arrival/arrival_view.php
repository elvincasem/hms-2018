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
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            

        <div class="block-title">
					<div class="row">
                    <div class="col-lg-4"><h2 class="page-header" style="color:#000; font-size: 25px;"><i class="fa fa-book fa-2x"></i>Arrival</h2></div>
					
					<div class="col-lg-6">
					<br>
					<div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
						<input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
						<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
						<input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
					</div>
					</div>
								
								
					<div class="col-lg-2">
					<br>
					<a href="javascript:void(0)" class="btn btn-effect-ripple btn-info active">SEARCH</a>
					</div>
					</div>
					
                          
               
			<?php //print_r($heidirectory);?>

    </div>

   
   
   
   <div class="block full">
		<div class="block-title">
			<h2>Arriving Today</h2>
		</div>
		<div class="table-responsive">
			<table id="example-datatable" class="table table-striped table-borderless table-condensed table-vcenter">
				<thead>
					<tr>
						<th>Reservation No.</th>
						<th>Name</th>
						<th>Arrival Date</th>
						<th>Arrival Time</th>
						<th>Nights</th>
						<th>No. of Rooms</th>
						<th>Room type/Beds</th>
						<th>Persons Adult/Child</th>
						<th>Total Price</th>
						<th>Deposit Amount</th>
						<th>Status</th>
						<th>Commision</th>
					</tr>
				</thead>
				<tbody>
				
				
				
				</tbody>
			</table>
		</div>
	</div>
	
	
	<div class="block full">
		<div class="block-title">
			<h2>Arriving Tomorrow</h2>
		</div>
		<div class="table-responsive">
			<table id="example-datatable" class="table table-striped table-borderless table-condensed table-vcenter">
				<thead>
					<tr>
						<th>Reservation No.</th>
						<th>Name</th>
						<th>Arrival Date</th>
						<th>Arrival Time</th>
						<th>Nights</th>
						<th>No. of Rooms</th>
						<th>Room type/Beds</th>
						<th>Persons Adult/Child</th>
						<th>Total Price</th>
						<th>Deposit Amount</th>
						<th>Status</th>
						<th>Commision</th>
					</tr>
				</thead>
				<tbody>
				
				
				
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="block full">
		<div class="block-title">
			<h2>ORIGINAL</h2>
		</div>
		<div class="table-responsive">
			<table id="example-datatable" class="table table-striped table-bordered table-vcenter">
				<thead>
					<tr>
						<th>Date Arrived</th>
						<th>Guest Name</th>
						<th>Room</th>
						<th>Check Out</th>
						
						
					</tr>
				</thead>
				<tbody>
				
				<?php
				
				foreach ($arrival_list as $booking_main):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$booking_main['checkin']."</td>";
				echo "<td>".$booking_main['guests']."</td>";
				echo "<td>".$booking_main['roomNames']."</td>";
				echo "<td>".$booking_main['checkout']."</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				</tbody>
			</table>
		</div>
	</div>
	
	
</div> <!-- end row -->
			
			
<!-- Regular Modal -->
			<div id="addReservation" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Bills</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Bill Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="datepaid" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                            </div>
                                           
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee Title</label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" class="form-control" name="bookingID"value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bank" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee type</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cardtype" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <input type="text" id="refno" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="amount" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee type</label>
                                            <div class="col-md-6">
                                                <input type="text" id="note" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <input type="text" id="modeofpayment" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="save();">Save</button>
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