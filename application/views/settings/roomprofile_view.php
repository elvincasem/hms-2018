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
            <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-key fa-2x"></i>Room Profile</h1>
						<div class="pull-right">
								<button id="addroombutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addRooms" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add Room
								</button>
                            </div>
                            
			<?php //print_r($heidirectory);?>
       
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th>Room Name</th>
						<th>Building</th>
						<th>Action</th>
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($voucher_list as $room):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$room['roomID']."</td>";
				echo "<td>".$room['roomName']."</td>";
				echo "<td>".$room['building']."</td>";
				echo "<td><button onclick='deleteroom(".$room['roomID'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
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
			<div id="addRooms" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Rooms</strong></h3>
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
                                                <input type="text" id="roomName" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Building</label>
                                            <div class="col-md-6">
                                                <input type="text" id="building" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveaddroom();">Save</button>
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