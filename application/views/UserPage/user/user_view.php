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
						
                    </tr>
                </thead>
                <tbody>
				
				
				<?php
				
				foreach ($user_list as $users):
				//echo $studentname;
				
				echo "<tr>";
				echo "<td><a href='".base_url()."scholar/profile/".$users['uid']."'>".$users['username']."</td>";
				echo "<td>".$users['name']."</td>";
				echo "<td>".$users['usertype']."</td>";
				
				
				//echo "<td> <a href='#updateaccount' data-toggle='modal' onclick='updateaccount(".$users['uid'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a></td>&nbsp &nbsp<button onclick='deleteuser(".$users['uid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "<td><button onclick='deleteuser(".$users['uid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button> <a href='#modal-regular' data-toggle='modal' onclick='updateuseraccount(".$users['uid'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a></td></tr>";
				
				
				
				
				endforeach;
				?>
				
				<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Update User Account</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">User Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="username" name="state-normal" class="form-control">
												 <input type="text" id="uid" style="display: none;" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="password" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">User Type</label>
                                            <div class="col-md-6">
												<select id="usertype" class="form-control">
												
												<option value="staff">Staff</option>
												<option value="admin">Admin</option>
												
												
												</select>
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updateuser();" id="updatebtn">Save</button>
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
			<div id="addUser" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add User Account</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">User Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="user" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="passwd" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="names" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">User Type</label>
                                            <div class="col-md-6">
												<select id="usertypes" class="form-control">
												
												<option value="staff">Staff</option>
												<option value="admin">Admin</option>
												
												
												</select>
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveuseraccount();">Save</button>
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