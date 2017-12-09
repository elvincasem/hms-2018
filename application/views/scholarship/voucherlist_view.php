
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
            <h1 class="page-header" style="font-size: 25px; color: black;"><i class="fa fa-key fa-2x"></i>Rooms</h1>
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
                        <th>Student</th>
						<th>Date</th>
						<th>DV No</th>
						<th>ORS/BURS No</th>
                      <!--  <th>Contact No.</th> -->
						<th>Mode of Payment</th>
                        <th class="text-center">District</th>
						<th class="text-center">Amount</th>
						<th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($voucher_list as $voucher):
				$studentname = strtoupper($voucher['firstname']." ".$voucher['middlename']." ".$voucher['lastname']." ".$voucher['extension']);
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$voucher['scholarid']."</td>";
				echo "<td><a href='".base_url()."scholar/profile/".$voucher['scholarid']."'>".$studentname."</td>";
				echo "<td>".$voucher['voucherdate']."</td>";
				echo "<td>".$voucher['dvno']."</td>";
				echo "<td>".$voucher['orsno']."</td>";
				//echo "<td>".$hei['instformownership']."</td>";
				//echo "<td>".$scholar['contactno']."</td>";
				echo "<td>".$voucher['modeofpayment']."</td>";
				echo "<td>".$voucher['congressionaldistrict']."</td>";
				echo "<td>".$voucher['amount']."</td>";
				echo "<td><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#editprogram' data-toggle='modal' onclick='editprogram(".$voucher['scholarid'].");'><i class='fa fa-print'></i></button></td></tr>";
				
				endforeach;
				
				?>
				
				<div class="modal fade" id="addRooms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
				<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Add Room</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="roomid" value="">
								<label>Room Name</label>
								<input id="roomname" class="form-control" value="" tabindex="1">
								<label>Building</label>
								<input id="building" class="form-control" value="" tabindex="2"> 
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveroom" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updateroom" type="button" class="btn btn-primary" disabled="">Update</button>
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


