
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
            <a href="#modal-regular" class="btn btn-effect-ripple btn-primary" data-toggle="modal">Add Applicant</a>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="applicantlist-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th>Students Name</th>
						<th>Gender</th>
                        <th>Contact No.</th>
						<th>Province</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($applicants_list as $scholar):
				//$studentname = strtoupper($scholar['firstname']." ".$scholar['middlename']." ".$scholar['lastname']." ".$scholar['extension']);
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$scholar['applicantid']."</td>";
				echo "<td>".$scholar['firstname']." ".$scholar['middlename']." ".$scholar['lastname']." ".$scholar['extension']."</td>";
				echo "<td>".$scholar['gender']."</td>";
				//echo "<td>".$hei['instformownership']."</td>";
				echo "<td>".$scholar['contactno']."</td>";
				echo "<td>".$scholar['province']."</td>";
				echo "<td><button  onclick='deleteapplicant(".$scholar['applicantid'].");' type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
   
   
   
   
   
</div> <!-- end row -->
<!-- First Row -->
                        <div class="row">
                            <!-- Simple Stats Widgets -->
                            
	<?php
				//print_r($user_count);
				foreach ($user_count as $usercountlist):
				$uname =  $usercountlist['username'];
				$totalcount = $usercountlist['totalcount'];
				echo "<div class='col-sm-6 col-lg-3'>
                                <a href='javascript:void(0)' class='widget'>
                                    <div class='widget-content widget-content-mini text-right clearfix'>
                                        <div class='widget-icon pull-left themed-background-success'>
                                            <i class='gi gi-user text-light-op'></i>
                                        </div>
                                        <h2 class='widget-heading h3 text-success'>
                                            <strong><span data-toggle='counter' data-to='".$totalcount."'></span></strong>
                                        </h2>
                                        <span class='text-muted'>$uname</span>
                                    </div>
                                </a>
                            </div>";
				endforeach;
				
				?>
										
				
                            
                            
                            <!-- END Simple Stats Widgets -->
                        </div>
                        <!-- END First Row -->		

<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Contact Details</strong></h3>
						</div>
						<div class="modal-body">
							
							
						
						
<!-- Block Tabs -->
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#block-tabs-home">Personal Information</a></li>
                                            <li><a href="#block-tabs-profile">Family Background</a></li>
											<li><a href="#block-tabs-others">Others</a></li>
                                            
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
	<div class="tab-content">
						<div class="tab-pane active" id="block-tabs-home">
										<!-- content here -->
								<div class="row">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact Name *</label>
							<div class="col-md-6">
								<input type="text" id="lastname" class="form-control" placeholder="Lastname" >
								<input type="text" id="firstname" class="form-control" placeholder="Firstname">
								<input type="text" id="middlename" class="form-control" placeholder="Middlename">
								<input type="text" id="extension" class="form-control" placeholder="Extension">
							</div>
                                        </div>
								<div class="row"></div>		
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Date of Birth</label>
							<div class="col-md-8">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Place of Birth</label>
							<div class="col-md-8">
								<input type="text" id="placeofbirth" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Sex</label>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="gender" name="example-inline-radios" value="Male"> Male
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="gender" name="example-inline-radios" value="Female"> Female
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Civil Status</label>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="civilstatus" name="example-inline-radios2" value="Single"> Single
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="civilstatus" name="example-inline-radios2" value="Married"> Married
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						 <div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Citizenship</label>
							<div class="col-md-8">
								<input type="text" id="citizenship" class="form-control" placeholder="">
								
							</div>
						</div> 
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Mobile Number</label>
							<div class="col-md-8">
								<input type="text" id="contactno" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Email</label>
							<div class="col-md-8">
								<input type="text" id="email" class="form-control" placeholder="">
								
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Barangay</label>
							<div class="col-md-8">
								<input type="text" id="barangay" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Town/City</label>
							<div class="col-md-8">
								<input type="text" id="towncity" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Province</label>
							<div class="col-md-8">
								<input type="text" id="province" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Congressional District</label>
							<div class="col-md-8">
								<input type="text" id="congressionaldistrict" class="form-control" placeholder="">
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Zip Code</label>
							<div class="col-md-8">
								<input type="text" id="zipcode" class="form-control" placeholder="">
								
							</div>
						</div>
						
						<div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select2">School Name</label>
                                            <div class="col-md-6">
                                                <select id="heicode" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
						<?php
						foreach ($hei_list as $heis):
						$heiname = strtoupper($heis['heiname']);
						
						echo "<option value='".$heis['heicode']."'>$heiname</option>";
						
						endforeach;
						?>
													
													
                                                </select>
                                            </div>
                                        </div>
										<div class="row"></div>
							<div class="form-group">			
										<label class="col-md-3 control-label" for="state-normal">Course</label>
							<div class="col-md-8">
								<input type="text" id="course" class="form-control" placeholder="">
								
							</div>
							</div>
						
								</div>
								<!-- end tab content -->
						</div>
			<div class="tab-pane" id="block-tabs-profile">
			<!-- start content -->
			<div class="row">
			<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Father's Name</label>
							<div class="col-md-8">
								<input type="text" id="father" class="form-control" placeholder="">
								
							</div>
							<label class="col-md-3 control-label" for="state-normal">Occupation</label>
							<div class="col-md-8">
								<input type="text" id="foccupation" class="form-control" placeholder="">
								
							</div>
							<label class="col-md-3 control-label" for="state-normal">Mother's Name</label>
							<div class="col-md-8">
								<input type="text" id="mother" class="form-control" placeholder="">
								
							</div>
							<label class="col-md-3 control-label" for="state-normal">Occupation</label>
							<div class="col-md-8">
								<input type="text" id="moccupation" class="form-control" placeholder="">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Number of Siblings</label>
							<div class="col-md-3">
								<input type="text" id="siblingno" class="form-control" placeholder="">
								
							</div>
							<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Disability</label>
							<div class="col-md-8">
								<input type="text" id="disability" class="form-control" placeholder="">
								
							</div>
			</div>
						
			</div>
			
			
			
			<!-- end content -->
			</div>
			
			<div class="tab-pane" id="block-tabs-others">
			
			<div class="row">
				<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Year of Application</label>
							<div class="col-md-4">
								<select id="yearofapplication" class="form-control">
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								</select>
								
							</div>
				</div>
			</div>
			
			</div>
			
                                        
	</div>
                                    <!-- END Tabs Content -->
                                </div>
                                <!-- END Block Tabs -->
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savesingleapplicant();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->				
			

			
			
			
			
			
			
			
			
			
			
			
		</div>
		<!-- END Page Content -->

			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


