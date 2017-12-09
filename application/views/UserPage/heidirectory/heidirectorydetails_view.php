
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
<div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form Block -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="#" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Edit Details" onclick="editinstitution();">Edit</a>
						 <a href="#" class="btn btn-effect-ripple btn-primary toggle-bordered enable-tooltip" data-toggle="button" title="Save Details" onclick="saveheiinformation('<?php echo $institutioncode;?>');">Save</a>
						
                    </div>
                    <h2>Institutional Profile</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form action="page_forms_components.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="example-hf-email">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="instname" class="form-control" value="<?php echo $details->instname;?>" disabled>
                            
                        </div>
						
						
                            
                       
                    </div>
                     <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="example-select2">Form of Ownership</label>
                        <div class="col-md-4">
                            <select id="example-select2" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
								<?php
								echo "<option value='".$details->instformownership."' selected>".$details->instformownership."</option>";
								?>
                                <option value="CSCU-MAIN">CSCU-MAIN</option>
                                <option value="CSCU-SAT">CSCU-SAT</option>
                                <option value="CSI">CSI</option>
                                <option value="LGCU">LGCU</option>
                                <option value="PSS">PSS</option>
								<option value="PSN">PSN</option>
								<option value="PNS">PNS</option>
								<option value="PNN">PNN</option>
								<option value="PSF">PSF</option>
								<option value="PNF">PNF</option>
								<option value="OT">OT</option>
                            </select>
                        </div>
						<div><br></div>
					
						
						
                    </div>
					
					<div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="example-hf-email">Address</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">Street</span>
                                <input type="text" id="astreet" value="<?php echo $details->street; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
						<div class="col-md-9 col-md-offset-3">
                            <div class="input-group">
                                <span class="input-group-addon">Municipality/City</span>
                                <input type="text" id="amunicipality" value="<?php echo $details->municipality; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
						<div class="col-md-9 col-md-offset-3">
                            <div class="input-group">
                                <span class="input-group-addon">Province</span>
                                <input type="text" id="aprovince" value="<?php echo $details->province1; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
						<div class="col-md-9 col-md-offset-3">
                            <div class="input-group">
                                <span class="input-group-addon">Province 2</span>
                                <input type="text" id="aprovince2" value="<?php echo $details->province2; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
						<div class="col-md-9 col-md-offset-3">
                            <div class="input-group">
                                <span class="input-group-addon">Region</span>
                                <input type="text" id="aregion" value="<?php echo $details->region; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
						<div class="col-md-9 col-md-offset-3">
                            <div class="input-group">
                                <span class="input-group-addon">Zip Code</span>
                                <input type="text" id="azip" value="<?php echo $details->postalcode; ?>" name="example-input1-group1" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                        <label class="col-md-3 control-label" for="example-hf-email">HEI Type</label>
                       
						 <div class="col-md-4">
                            <select id="heitype" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
								<?php
								echo "<option value='".$details->heitype."' selected>".$details->heitype."</option>";
								?>
                                <option value="SUC">SUC</option>
                                <option value="LUC">LUC</option>
                                <option value="Private">Private</option>
                                
                            </select>
							
                        </div>
                    </div>
					
					
					
					 <div class="form-group col-md-6">
						<label class="col-md-3 control-label" for="example-hf-email">Intitution Head</label>
                        <div class="col-md-9">
                            <input type="text" id="atel" value="<?php echo $details->insthead; ?>" name="example-hf-email" class="form-control" disabled>
                            
                        </div>
						<div class="row"></div>
                        <label class="col-md-3 control-label" for="example-hf-email">Telephone</label>
                        <div class="col-md-9">
                            <input type="text" id="atel" value="<?php echo $details->insttel; ?>" name="example-hf-email" class="form-control" disabled>
                            
                        </div>
						<label class="col-md-3 control-label" for="example-hf-email">Fax</label>
                        <div class="col-md-9">
                            <input type="text" id="afax" name="example-hf-email" class="form-control" value="<?php echo $details->instfax; ?>" disabled>
                            
                        </div>
						<label class="col-md-3 control-label" for="example-hf-email">Head Telephone</label>
                        <div class="col-md-9">
                            <input type="text" id="ainsttelhead" name="example-hf-email" class="form-control" value="<?php echo $details->insttelhead; ?>" disabled>
                            
                        </div>
						<div class="row"></div>
						<label class="col-md-3 control-label" for="example-hf-email">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" name="example-hf-email" id="aemail" class="form-control" value="<?php echo $details->email; ?>" disabled>
                            
                        </div>
						<div class="row"></div>
						<label class="col-md-3 control-label" for="example-hf-email">Website</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->website; ?>" disabled>
                            
                        </div>
						<label class="col-md-3 control-label" for="example-hf-email">Established</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->established; ?>" disabled>
                            
                        </div>
						<label class="col-md-3 control-label" for="example-hf-email">SEC</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->sec; ?>" disabled>
                            
                        </div>
						
						<label class="col-md-3 control-label" for="example-hf-email">Year Approved</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->yearapproved; ?>" disabled>
                            
                        </div>
						<div class="row"></div>
						<label class="col-md-3 control-label" for="example-hf-email">College</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->tocollege; ?>" disabled>
                            
                        </div>
						<label class="col-md-3 control-label" for="example-hf-email">University</label>
                        <div class="col-md-9">
                            <input type="text" id="awebsite" name="example-hf-email" class="form-control" value="<?php echo $details->touniversity; ?>" disabled>
                            
                        </div>
						
						
						<!--<div class="col-md-12 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Save</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div> -->
                    </div>
					
					<div class="form-group col-md-10">
					<button type="submit" class="btn btn-effect-ripple btn-primary" onclick="editcoordinates();">Edit</button>
					<button type="submit" class="btn btn-effect-ripple btn-primary" onclick="savecoordinates('<?php echo $institutioncode;?>');">Save</button>
					
                        <label class="col-md-3 control-label" for="example-hf-email">X-Coordinates (Latitude)</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="latitude" value="<?php echo $details->latitude;?>" disabled>
                            
                        </div>
						<div class="row"></div>
						<label class="col-md-3 control-label" for="example-hf-email">Y-Coordinate (Longtitude)</label>
                        <div class="col-md-5">
                            <input type="text"  class="form-control" id="longtitude" value="<?php echo $details->longtitude;?>" disabled>
                            
                        </div>
                    </div>
					
					<div class="form-group col-md-12">
                        <label  class="col-md-3 control-label" for="example-hf-email">Map</label>
                        <div class="col-md-12">
                            <div id="map_div" style="width:100%;height: 400px"></div>
                            
                        </div>
                    </div>
					
					
					
					
                    <div class="form-group form-actions">
                        
                    </div>
                </form>
                <!-- END Horizontal Form Content -->
            </div>
            <!-- END Horizontal Form Block -->
		</div>
		
		
		
		
</div><!-- end row -->
			
<!-- Block Tabs -->
	<div class="block full">
		<!-- Block Tabs Title -->
		<div class="block-title">
			<div class="block-options pull-right">
				<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
			</div>
			<ul class="nav nav-tabs" data-toggle="tabs">
				<li class="active"><a href="#contacts" data-toggle="tooltip" title="Other Contact Details">Contacts</a></li>
				<li><a href="#programapplication" data-toggle="tooltip" title="Program Application List">Program Application</a></li>
				<li><a href="#deansprofile" data-toggle="tooltip" title="Deans Profile">Deans Profile</a></li>
				<li><a href="#curriculum" data-toggle="tooltip" title="Curriculum Program List">Curriculum Program Profile</a></li>
				<li><a href="#formernames" data-toggle="tooltip" title="Former Names">Former Names</a></li>
				<li><a href="#faculty" data-toggle="tooltip" title="Faculty Profile">Permits & Recognition</a></li>
				<li><a href="#block-tabs-settings" ><i class="gi gi-settings"></i></a></li>
			</ul>
		</div>
		<!-- END Block Tabs Title -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<div class="tab-pane active" id="contacts">
			
			
			<!-- Contacts profile -->
<div class="row">






   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
            <h2>Contacts</h2>
			<?php //print_r($heidirectory);?>
        </div>
        <!-- <button type="submit" class="btn btn-effect-ripple btn-primary">Add Contact</button> -->
		<a href="#modal-regular" data-toggle="modal" class="btn btn-effect-ripple btn-primary" >Add Contact</a>
		<br/>
		<div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
						<th>Contact No.</th>
                        <th>Fax</th>
						<th>Email</th>
						<th>Address</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				foreach ($contacts_list as $contactlist):
				//$heiname = strtoupper($prog['mainprogram']);
				echo "<tr>";
				echo "<td>".$contactlist['contactname']."</td>";
				echo "<td>".$contactlist['position']."</td>";
				echo "<td>".$contactlist['telno']."</td>";
				echo "<td>".$contactlist['fax']."</td>";
				echo "<td>".$contactlist['email']."</td>";
				echo "<td>".$contactlist['address']."</td><td> <button type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				
				endforeach;
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
		
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			</div>
			<div class="tab-pane" id="programapplication">
			
			<!-- Program Application-->
<div class="row">




   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
      
	

      
	<div class="block full">
        <div class="block-title">
            <h2>Program Application</h2>
			<?php //print_r($heidirectory);?>
        </div>
        <a href="#modal-programapplication" data-toggle="modal" class="btn btn-effect-ripple btn-primary hidden" >Add Application</a>
		<br/>
		<br/>
		<div class="table-responsive">
            <table id="example-datatable3" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>Program Name</th>
                        <th>Year Level</th>
						<th>Permit No</th>
                        <th>In Charge</th>
						<th>Date Submitted</th>
                        <th>Status</th>
						<th>Remarks</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				/*
				foreach ($programs as $prog):
				//$heiname = strtoupper($prog['mainprogram']);
				echo "<tr>";
				echo "<td>".$prog['mainprogram']."</td>";
				echo "<td>".$prog['supervisor']."</td>";
				echo "<td>".$prog['major']."</td>";
				echo "<td>".$prog['pstatuscode']."</td>";
				echo "<td>".$prog['authcat']." No.  ".$prog['authserial'].", s. ".$prog['authyear']."</td>";
				echo "<td>".$prog['authcat']."</td>";
				echo "<td>".$prog['authserial']."</td><td> <button type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				
				endforeach;
				
				*/
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
		
    </div>
   </div> <!-- end column -->
   
   
</div> <!-- end row -->
			
			
			</div>
			<div class="tab-pane" id="deansprofile">
			
			<!-- Deans profile -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
		<div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Add Dean">Add</a>
						
						
                    </div>
            <h2>Deans Profile</h2>
        </div>
		<button type="submit" class="btn btn-effect-ripple btn-primary hidden">Add Dean Profile</button>
		<br/>
		<div class="table-responsive">
            <table id="example-datatable4" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>Deans Name</th>
                        <th>Designation</th>
						<th>Assignment</th>
						<th></th>
                        
                    </tr>
                </thead>
                <tbody>
				
				<?php
				foreach ($deans as $deanlist):
				//$heiname = strtoupper($prog['mainprogram']);
				echo "<tr>";
				echo "<td>".$deanlist['deansname']."</td>";
				echo "<td>".$deanlist['designation']."</td>";
				
				echo "<td>".$deanlist['assignment']."</td><td> <button type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				
				endforeach;
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
        
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			</div>
			<div class="tab-pane" id="curriculum">
			
			<!-- Curriculum profile -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
            <h2>Curriculum Program Profile</h2>
			<?php //print_r($heidirectory);?>
        </div>
    <!--    <button type="submit" class="btn btn-effect-ripple btn-primary hidden">Add Program</button>
		<br/> -->
		<div class="table-responsive">
            <table id="example-datatable5" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						<th>ID</th>
						<th>Program Level</th>
                        <th>Program Name</th>
                        <th>Supervisor</th>
						<th>Major</th>
                        <th>Status</th>
						<th>Authority</th>
                        <th>Total Male</th>
						<th>Total Female</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				
				
				
				<?php
				foreach ($programs as $prog):
				//$heiname = strtoupper($prog['mainprogram']);
				if($prog['supervisor']=='NONE'){
					//$displaysupervisor = "<button type='submit' class='btn btn-effect-ripple btn-primary'  href='#addsupervisor' data-toggle='modal' onclick='assignsupervisor(".$prog['programid'].");'><i class='fa fa-user-plus'></i></button>";
					$displaysupervisor = "NONE";
				}else{
					//$displaysupervisor=$prog['supervisor']."<br><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#addsupervisor' data-toggle='modal' onclick='assignsupervisor(".$prog['programid'].");'><i class='fa fa-user-plus'></i></button>";
					$displaysupervisor = $prog['supervisor'];
				}
				
				echo "<tr>";
				echo "<td>".$prog['programid']."</td>";
				echo "<td>".$prog['programlevel']."</td>";
				echo "<td>".$prog['mainprogram']."</td>";
				
				echo "<td class='text-center' id='supervisorcolumn".$prog['programid']."'>".$displaysupervisor."</td>";
				echo "<td>".$prog['major']."</td>";
				echo "<td>".$prog['pstatuscode']."</td>";
				echo "<td>".$prog['authcat']." No.  ".$prog['authserial'].", s. ".$prog['authyear']."</td>";
				echo "<td>".$prog['totalmale']."</td>";
				echo "<td>".$prog['totalfemale']."</td><td> <button type='submit' class='btn btn-effect-ripple btn-primary'  href='#editprogram' data-toggle='modal' onclick='editprogram(".$prog['programid'].");'><i class='fa fa-pencil-square'></i></button> <button type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				
				endforeach;
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
		
    </div>
   </div> <!-- end column -->
   
   <!-- modal -->
   
<!-- Small Modal -->
	<div id="addsupervisor" class="modal" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title"><strong>Assign Supervisor</strong></h3>
				</div>
				<div class="modal-body">
				<input type="hidden" id="programid">
					<select id="selectsupervisor" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option value="NONE"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
								<?php
								//echo "<option value='".$details->heitype."' selected>".$details->heitype."</option>";
								?>
                                <option value="Angelica Dolores">Angelica Dolores</option>
								<option value="Arnold Ancheta">Arnold Ancheta</option>
								<option value="Danilo Bose">Danilo Bose</option>
								<option value="Lynnette Cabanban">Lynnette Cabanban</option>
								<option value="Mayrose Quezon">Mayrose Quezon</option>
								<option value="Myrelle Mina">Myrelle Mina</option>
								<option value="Reynaldo Agcaoili">Reynaldo Agcaoili</option>
								<option value="Rogelio Galera">Rogelio Galera</option>
                                
                            </select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savesupervisorprogram();">Save</button>
					<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Small Modal -->
	
	<!-- Regular Modal -->
	<div id="editprogram" class="modal" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title"><strong>Edit Program Details</strong></h3>
				</div>
				<div class="modal-body">
				
					<div>
						<!-- Input States Block -->
						<div class="block">
							

			<!-- Input States Content -->
			<form action="page_forms_components.html" method="post" class="form-horizontal" onsubmit="return false;">
			<input type="hidden" id="editprogramid">
				<div class="form-group">
					<label class="col-md-3 control-label" for="state-normal">Program Name</label>
					<div class="col-md-6">
						<input type="text" id="editprogramname" name="state-normal" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="state-normal">Major</label>
					<div class="col-md-6">
						<input type="text" id="editmajor" name="state-normal" class="form-control" disabled>
					</div>
				</div>
			<div class="form-group">
				<label class="col-md-3 control-label" for="state-normal">Supervisor</label>
				<div class="col-md-6">
					<select id="editselectsupervisor" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
					<option value="NONE">NONE</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
					<?php
					//echo "<option value='".$details->heitype."' selected>".$details->heitype."</option>";
					?>
					<option value="Angelica Dolores">Angelica Dolores</option>
					<option value="Arnold Ancheta">Arnold Ancheta</option>
					<option value="Danilo Bose">Danilo Bose</option>
					<option value="Lynette Cabanban">Lynette Cabanban</option>
					<option value="Mayrose Quezon">Mayrose Quezon</option>
					<option value="Myrelle Mina">Myrelle Mina</option>
					<option value="Reynaldo Agcaoili">Reynaldo Agcaoili</option>
					<option value="Rogelio Galera">Rogelio Galera</option>
					
				</select>
				</div>
			</div>
<div class="form-group">
				<label class="col-md-3 control-label" for="state-normal">Discipline</label>
				<div class="col-md-6">
					<select id="editselectdiscipline" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
					<option value="NONE">NONE</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
					<?php
					//echo "<option value='".$details->heitype."' selected>".$details->heitype."</option>";
					?>
					<option value="Agriculture, Forestry and Fisheries">Agriculture, Forestry and Fisheries</option>
					<option value="Architecture and Town Planning">Architecture and Town Planning</option>
					<option value="Business Administration and related">Business Administration and related</option>
					<option value="Education Science and Teacher Training">Education Science and Teacher Training</option>
					<option value="Engineering  and Technology">Engineering  and Technology</option>
					<option value="Fine and Applied Arts">Fine and Applied Arts</option>
					<option value="General">General</option>
					<option value="Home Economics">Home Economics</option>
					<option value="Humanities">Humanities</option>
					<option value="IT and Related">IT and Related</option>
					<option value="Law, Justice and Jurisrprudence">Law, Justice and Jurisrprudence</option>
					<option value="Maritime Education">Maritime Education</option>
					<option value="Mass Communication and Documentation">Mass Communication and Documentation</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Medical and Allied">Medical and Allied</option>
					<option value="Natural Science">Natural Science</option>
					<option value="Other Disciplines">Other Disciplines</option>
					<option value="Religion and Theology">Religion and Theology</option>
					<option value="Service Trades">Service Trades</option>
					<option value="Social and Behavioral Sciences">Social and Behavioral Sciences</option>
					<option value="Trade, Craft and Industrial">Trade, Craft and Industrial</option>
					
				</select>
			</div>	
</div>		

<div class="form-group">
				<label class="col-md-3 control-label" for="state-normal">Discipline 2</label>
				<div class="col-md-6">
					<select id="editselectdiscipline2" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
					<option value="NONE">NONE</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
					<?php
					//echo "<option value='".$details->heitype."' selected>".$details->heitype."</option>";
					?>
					<option value="Agriculture, Forestry and Fisheries">Agriculture, Forestry and Fisheries</option>
					<option value="Architecture and Town Planning">Architecture and Town Planning</option>
					<option value="Business Administration and related">Business Administration and related</option>
					<option value="Education Science and Teacher Training">Education Science and Teacher Training</option>
					<option value="Engineering  and Technology">Engineering  and Technology</option>
					<option value="General">General</option>
					<option value="IT and Related">IT and Related</option>
					<option value="Law, Justice and Jurisrprudence">Law, Justice and Jurisrprudence</option>
					<option value="Maritime Education">Maritime Education</option>
					<option value="Mass Communication and Documentation">Mass Communication and Documentation</option>
					<option value="Medical and Allied">Medical and Allied</option>
					<option value="Natural Science">Natural Science</option>
					<option value="Other Disciplines">Other Disciplines</option>
					<option value="Religion and Theology">Religion and Theology</option>
					<option value="Service Trades">Service Trades</option>
					<option value="Social and Behavioral Sciences">Social and Behavioral Sciences</option>

					
				</select>
			</div>	
</div>		
	
			
				
				
			</form>
			<!-- END Input States Content -->
	</div>
<!-- END Input States Block -->
					
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updateprogram();">Save</button>
					<button type="button" id="closesupervisor" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Regular Modal -->		
   
   
	</div> <!-- end row -->
			
</div>
</div>
			<div class="tab-pane" id="formernames">
			
			<!-- Former Names profile -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
            <h2>Former Names</h2>
			<?php //print_r($heidirectory);?>
        </div>
        <button type="submit" class="btn btn-effect-ripple btn-primary hidden">Add Former Names</button>
		<br/>
		<div class="table-responsive">
            <table id="example-datatable6" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>Former Name</th>
                        <th>Year</th>
						<th></th>
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				foreach ($formernames as $names):
				//$heiname = strtoupper($prog['mainprogram']);
				echo "<tr>";
				echo "<td>".$names['formername']."</td>";
				echo "<td>".$names['year']."</td><td> <button type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				
				endforeach;
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
		
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			</div>
			
			
			<div class="tab-pane" id="faculty">
			
			<!-- Former Names profile -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
            <h2>Permits & Recognition</h2>
			<?php //print_r($heidirectory);?>
        </div>
        <button type="submit" class="btn btn-effect-ripple btn-primary hidden">Add Former Names</button>
		<br/>
		<div class="table-responsive">
            <table id="example-datatable7" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
						<th>Program</th>
                        <th>Authority</th>
						<th>Effectivity</th>
					
                    </tr>
                </thead>
                <tbody>
				
				<?php
				foreach ($permits_list as $permitslist):
				//$heiname = strtoupper($prog['mainprogram']);
				echo "<tr>";
				echo "<td>".$permitslist['permitdate']."</td>";
				echo "<td>".$permitslist['programname']."</td>";
				echo "<td>".$permitslist['specialpermit']." No. ".$permitslist['permitno'].", s. ".$permitslist['seriesyear']."</td>";
				echo "<td>".$permitslist['effectivitydate']."</td>";
				echo "</tr>";
				
				
				endforeach;
				?>
				
				
                    
                </tbody>
            </table>
        </div>
		
		
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			</div>
			
			
		</div>
		<!-- END Tabs Content -->
	</div>
	<!-- END Block Tabs -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Contact Details</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal" onsubmit="return false;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="contactname" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Position</label>
                                            <div class="col-md-6">
                                                <input type="text" id="position" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Tel No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="telno" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" id="email" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Address</label>
                                            <div class="col-md-6">
                                                <input type="text" id="address" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savecontact(<?php echo $details->instcode;?>);">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->		


			


			
		</div>
		<!-- END Page Content -->
		
		
		
		<!-- modal start-->
		
		<div id="modal-programapplication" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Program Application Details</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal" onsubmit="return false;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Program Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="contactname" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Position</label>
                                            <div class="col-md-6">
                                                <input type="text" id="position" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Tel No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="telno" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" id="email" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Address</label>
                                            <div class="col-md-6">
                                                <input type="text" id="address" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
										
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savecontact(<?php echo $details->instcode;?>);">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->		


			


			
		</div>
		
		<!--modal end -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->

<script>


</script>

