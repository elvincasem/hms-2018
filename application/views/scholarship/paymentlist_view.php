
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
           <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-money fa-2x"></i> &nbsp Other Charges</h1>
						<div class="pull-right">
								<button id="addchargesbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addcharges" style="margin-top: 15px;margin-right: 15px;">
									<i class="fa fa-plus-circle"></i> Add Other Charges
								</button>
                            </div>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th>Name</th>
						<th>Semester</th>
						<th class="text-center" style="width: 80px;">SY</th>
						<th>Check #</th>
                      <!--  <th>Contact No.</th> -->
						<th>Amount</th>
                        <th class="text-center">Remarks</th>
						<th class="text-center" style="width: 20px;">CY</th>
						<th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($payment_list as $payment):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$payment['scholarid']."</td>";
				echo "<td><a href='".base_url()."scholar/profile/".$payment['scholarid']."'>".$payment['scholarname']."</a></td>";
				echo "<td>".$payment['semester']."</td>";
				echo "<td>".$payment['schoolyear']."</td>";
				echo "<td>".$payment['checkno']."</td>";
				//echo "<td>".$hei['instformownership']."</td>";
				//echo "<td>".$scholar['contactno']."</td>";
				echo "<td>".$payment['amount']."</td>";
				echo "<td>".$payment['remarks']."</td>";
				echo "<td>".$payment['cy']."</td>";
				//echo "<tr>";
				if($payment['status']=="Available"){
							echo "<td><a href='#' class='label label-success'>".$payment['status']."</a></td>";
								
						}
						if($payment['status']=="Cancelled"){
							echo "<td><a href='#' class='label label-danger'>".$payment['status']."</a></td>";
								
						}
						if($payment['status']=="Received"){
							echo "<td><a href='#' class='label label-info'>".$payment['status']."</a></td>";
								
						}
						if($payment['status']=="Stale"){
							echo "<td><a href='#' class='label label-warning'>".$payment['status']."</a></td>";
								
						}
				//echo "<td></td></tr>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				<div class="modal fade" id="addcharges" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
				<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Add Charge</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="chargeid" value="">
								<label>Charge Title</label>
								<input id="charge_title" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Description</label>
								<textarea id="description" class="form-control" rows="3" style="margin-bottom: 10px;"></textarea>
								<label>Amount</label>
								<input id="amount" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="savecharge" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updatecharge" type="button" class="btn btn-primary" disabled="">Update</button>
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


