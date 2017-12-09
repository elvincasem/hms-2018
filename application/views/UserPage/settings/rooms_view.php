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
            <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-key fa-2x"></i>Rooms Rates</h1>
						<div class="pull-right">
								<button id="addroombutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addRoomsRates" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add Room Rates
								</button>
                            </div>
                            
			<?php //print_r($heidirectory);?>
       
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
                                                <th>Room Name</th>
						<th>Good For</th>
						<th>Peak</th>
						<th>Super Peak</th>
						<th>Low Season</th>
						<th>Building</th>
						<th>Action</th>
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($voucher_list as $room_rates):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$room_rates['roomName']."</td>";
				//echo "<td><a href='".base_url()."scholar/profile/".$room_rates['roomID']."'>".$room_rates['roomName']."</td>";
				echo "<td>".$room_rates['goodFor']."</td>";
				echo "<td>".$room_rates['peak']."</td>";
				echo "<td>".$room_rates['superPeak']."</td>";
				echo "<td>".$room_rates['lowSeason']."</td>";
				echo "<td>".$room_rates['building']."</td>";
				echo "<td><button onclick='deleteroomrates(".$room_rates['rateID'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button><a href='#modal-regular' data-toggle='modal' onclick='updateroomrates(".$room_rates['rateID'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a></td></tr>";
				echo "</tr>";
				
				//echo "<td><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#editprogram' data-toggle='modal' onclick='editprogram(".$room['roomID'].");'><i class='fa fa-print'></i></button></td></tr>";
				
				endforeach;
				
				?>
                
				<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Update Room Rates</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                     
                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Room Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="roomName" name="state-normal" class="form-control" >
												 <input type="text" id="rateID" style="display: none;" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
                                                <input type="text" id="goodFor" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Peak</label>
                                            <div class="col-md-6">
                                                <input type="text" id="peak" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Super Peak</label>
                                            <div class="col-md-6">
                                                <input type="text" id="superPeak" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Low Season</label>
                                            <div class="col-md-6">
                                                <input type="text" id="lowSeason" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Building</label>
                                            <div class="col-md-6">
                                                <input type="text" id="building" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="row"></div>
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="rateupdate();">Save</button>
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
			<div id="addRoomsRates" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Room Rates</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                     
                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Room Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="roomName" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
                                                <input type="text" id="goodFor" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Peak</label>
                                            <div class="col-md-6">
                                                <input type="text" id="peak" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Super Peak</label>
                                            <div class="col-md-6">
                                                <input type="text" id="superPeak" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Low Season</label>
                                            <div class="col-md-6">
                                                <input type="text" id="lowSeason" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Building</label>
                                            <div class="col-md-6">
                                                <input type="text" id="building" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveaddrate();">Save</button>
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
			
		