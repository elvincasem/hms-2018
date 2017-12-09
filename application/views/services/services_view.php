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
           <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-user fa-2x"></i> &nbsp Extra Charges</h1>
						<div class="pull-right">
								<button id="#modal-otherc" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addOtherc" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add Other Charges
								</button>
                            </div>
                
        </div>
        <div class="table-responsive">
           <!-- Gallery -->
                                       
                                                <div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom">
                                                        <thead>
                                                            <tr>
                                                                <th>Charge Name</th>
                                                                <th>Amount</th>
																<th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($services_list as $other_charges):
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$other_charges['namecharge']."</td>";
				echo "<td>".$other_charges['charge']."</td>";
				
				
				echo "<td><button onclick='deletecharges(".$other_charges['chargeID'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button><a href='#modal-regular' data-toggle='modal' onclick='updatecharges(".$other_charges['chargeID'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
				<!--  Other Charges Modal -->
                                    <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Add Charges</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                     <!-- Input States Content -->
													  <input type="hidden" id="chargeID" name="state-normal" class="form-control" value="">
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									<input type="hidden" id="chargeID" name="state-normal" class="form-control" value="">
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Charge Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="namecharge" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="charge" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
									
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="updateothercharges();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Other Charges Modal -->
				
                </tbody>
            </table>
			</table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
               
                                        <!-- END Gallery -->

													<!-- Regular Modal -->
			<div id="addOtherc" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Other Charge</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										

										<input type="hidden" id="chargeID" name="state-normal" class="form-control" value="">
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Charge Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="namecharges" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="charged" name="state-normal" class="form-control" >
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveothercharge();">Save</button>
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