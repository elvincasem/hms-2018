
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
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th>Students Name</th>
						<th>Type</th>
						<th>Award</th>
						<th>Gender</th>
                      <!--  <th>Contact No.</th> -->
						<th>Province</th>
                        <th class="text-center">Status</th>
						<th class="text-center">Course</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($scholars_list as $scholar):
				$studentname = strtoupper($scholar['firstname']." ".$scholar['middlename']." ".$scholar['lastname']." ".$scholar['extension']);
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$scholar['scholarid']."</td>";
				echo "<td><a href='".base_url()."scholar/profile/".$scholar['scholarid']."'>".$studentname."</td>";
				echo "<td>".$scholar['typedescription']."</td>";
				echo "<td>".$scholar['awardnumber']."</td>";
				echo "<td>".$scholar['gender']."</td>";
				//echo "<td>".$hei['instformownership']."</td>";
				//echo "<td>".$scholar['contactno']."</td>";
				echo "<td>".$scholar['province']."</td>";
				echo "<td>".$scholar['status2']."</td>";
				echo "<td>".$scholar['course']."</td></tr>";
				//echo "<td><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#editprogram' data-toggle='modal' onclick='editprogram(".$scholar['scholarid'].");'><i class='fa fa-pencil-square'></i></button></td></tr>";
				
				endforeach;
				
				?>
				
				
				<div class="modal fade" id="addGuest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Add User</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="guestid" value="">
								<label>Guest Type</label>
								<select name="guest_type" id="guest_type" class="form-control" style="margin-bottom: 10px;">
									<option value="INDIVIDUAL">INDIVIDUAL</option>
									<option value="COMPANY">COMPANY</option>
									
								</select>
								<label>Guest Name</label>
								<input id="guest_name" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Address</label>
								<textarea id="address" class="form-control" rows="3" style="margin-bottom: 10px;" tabindex="2"></textarea>
								<label>Contact No.</label>
								<input id="contact_no" class="form-control" value="" tabindex="3" style="margin-bottom: 10px;">
								<label>Email</label>
								<input id="email" class="form-control" value="" tabindex="4" style="margin-bottom: 10px;">
								<label>Nationality</label>
								<input id="nationality" class="form-control" value="" tabindex="5" style="margin-bottom: 10px;">
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveguest" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updateguest" type="button" class="btn btn-primary" disabled="">Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				
                    
                </tbody>
            </table>
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


