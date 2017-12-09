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
            
			 <h1 class="page-header" style=" font-size: 26px; color: black;"><i class="fa fa-user fa-2x"></i> &nbsp Guests </h1>
						<div class="pull-right">
								<button id="addguestbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addGuest" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add Guest
								</button>
                            </div>
							
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive" style="color: black;">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						 <th>ID</th>
                        <th>Guest Name</th>
                        <th>Guest Name</th>
						<th>Contact No</th>
						<th>Email</th>
						<th>Nationality</th>
						<th>Action</th>
						
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($guest_list as $guest):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$guest['guestID']."</td>";
				echo "<td>".$guest['guestType']."</td>";
				echo "<td>".$guest['guestName']."</td>";
				echo "<td>".$guest['contactNo']."</td>";
				echo "<td>".$guest['eMail']."</td>";
				echo "<td>".$guest['nationality']."</td>";
				
			
				echo "<td> <a href='#modal-regular' data-toggle='modal' onclick='updateguestprofile(".$guest['guestID'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a><button onclick='deleteguest(".$guest['guestID'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Update Guest Profile</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									<div class="form-group">
                                           
                                            <div class="col-md-6">
                                                <input type="hidden" id="guestID" name="state-normal" class="form-control">
												
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Type</label>
                                            <div class="col-md-6">
												<select id="guestType" class="form-control">
												
												<option value="INDIVIDUAL">INDIVIDUAL</option>
												<option value="COMPANY">COMPANY</option>
												<option value="AGENCY">AGENCY</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="guestName" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="contactNo" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" id="eMail" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Nationality</label>
                                            <div class="col-md-6">
                                                <input type="text" id="nationality" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div><br><br><br>
									
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="guestupdate();">Save</button>
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
			<div id="addGuest" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Guest</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Type</label>
                                            <div class="col-md-6">
												<select id="guestTypes" class="form-control">
												
												<option value="individual">INDIVIDUAL</option>
												<option value="company">COMPANY</option>
												<option value="agency">AGENCY</option>
												
												</select>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="guestsNames" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="contactNos" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" id="eMails" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Nationality</label>
                                            <div class="col-md-6">
                                                <input type="text" id="nationalitys" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveaddguest();">Save</button>
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
