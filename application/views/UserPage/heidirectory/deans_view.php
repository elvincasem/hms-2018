
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
           <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-user fa-2x"></i> &nbsp Users</h1>
						<div class="pull-right">
								<button id="adduser" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addUser" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add User Accounts
								</button>
                            </div>
                                
                            
                
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Username</th>
						<th>Name</th>
                        <th>User Type</th>
						<th>Action</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($deans_list as $dean):
				echo "<tr>";
				echo "<td class='text-center'>".$dean['deansname']."</td>";
				echo "<td>".$dean['designation']."</td>";
				echo "<td>".$dean['assignment']."</td>";
				echo "<td>".$dean['instname']."</td>";
				
				
				echo "<td><button onclick='deletecontact(".$dean['deanid'].");' type='reset' class='btn btn-effect-ripple btn-danger' disabled><i class='fa fa-times'></i></button></td></tr>";
				
				endforeach;
				?>
				
				<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
				<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Add User</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<input type="hidden" id="unamevalidity" value="invalid">
								<label>Name</label>
								<input id="user_name" class="form-control" value="" tabindex="1">
								<label>Username</label>
								<input id="userusername" onkeyup="verifyusername();" class="form-control" value="" tabindex="2">
								<label>Password</label>
								<input type="password" id="userpassword" class="form-control" value="" tabindex="3">
								<label>User Type</label>
								<select name="user_type" id="user_type" class="form-control" style="margin-bottom: 10px;">
									<option value="staff">Staff</option>
									<option value="admin">Admin</option>
									
								</select>
								
								                                            
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled="">Update</button>
							</div>
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


