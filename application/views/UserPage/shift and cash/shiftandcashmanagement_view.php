<!--Add Reservation-->
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
	
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('staff_leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('staff_subheader_view'); ?>

		<!-- Page content -->
		<div id="page-content">
			<?php $this->load->view('heidirectory/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
            
	<div class="block full">
        <div class="block-title">
          <div class="form-group">
                                            
                                            <div class="col-md-6">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" name="from_date" id="from_date" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" name="to_date" id="to_date" name="example-daterange2" class="form-control" placeholder="To">
													
                                                </div>
												
                                            </div>
                                        </div>
										 <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" onclick="filter();"/>  </button>
										<p>
			
                    <h2 class="page-header" style="color:#000; font-size: 20px;"><i class="fa fa-book fa-1x"></i>Shift and Cash Management</h2>
				 <a href="#modal-regular" class="btn btn-effect-ripple btn-danger" data-toggle="modal">Print Details</a>
			
			<?php //print_r($heidirectory);?>
			
						
			
        <div class="table-responsive" id="order_tabless">
            <table id="example-datatable" name="filter" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Card Type</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($billing_list as $bill_payment):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td><a href='".base_url()."Staff/reservation/details/".$bill_payment['bookingid']."'>".$bill_payment['bookingid']."</a></td>";
				echo "<td>".$bill_payment['datepaid']."</td>";
				echo "<td>".$bill_payment['name']."</td>";
				echo "<td>".$bill_payment['bank']."</td>";
				echo "<td>".$bill_payment['cardtype']."</td>";
				echo "<td>".$bill_payment['refno']."</td>";
				echo "<td>".$bill_payment['amountpaid']."</td>";
				echo "<td>".$bill_payment['note']."</td>";
				echo "<td>".$bill_payment['modeofpayment']."</td>";
				
				
				echo "<td><a href='#modal-large' data-toggle='modal' onclick='management(".$bill_payment['bookingid'].");' type='button' class='btn btn-effect-ripple btn-info'><i class='fa fa-print'></i></a></td></tr>";
				
				endforeach;
				
				?>
				
				
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->





 <!-- Regular Modal -->
                                    <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                   
													<button onclick="printContents('order_tables')" class='btn btn-effect-ripple btn-danger'><i class='fa fa-print '>Print Record</i>
						</div>
						<script>function printContents()
{
	var DocumentContainer = document.getElementById('order_tables');
	var WindowObject = window.open("", "PrintWindow",
	"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	setTimeout(function(){
		WindowObject.focus();
		WindowObject.print();
		WindowObject.close();
	},50);
}</script>
							
						
                                                 <center><h3 class="modal-title"><strong>Shift and Cash Management Report</strong></h3></center>
                                                <div class="modal-body" id="order_tables">
												<center> <img src="<?=base_url()?>public/img/logo.jpg" alt="image" height="100px" width="300px"></center><br>
                                                   <div class="table-responsive" id="order_table">
            <table id="example-datatable" name="filter" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						 <th>Booking ID</th>
                        <th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Card Type</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($billing_list as $bill_payment):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$bill_payment['bookingid']."</td>";
				echo "<td>".$bill_payment['datepaid']."</td>";
				echo "<td>".$bill_payment['name']."</td>";
				echo "<td>".$bill_payment['bank']."</td>";
				echo "<td>".$bill_payment['cardtype']."</td>";
				echo "<td>".$bill_payment['refno']."</td>";
				echo "<td>".$bill_payment['amountpaid']."</td>";
				echo "<td>".$bill_payment['note']."</td>";
				echo "<td>".$bill_payment['modeofpayment']."</td>";
				
				
				
				
				endforeach;
				
				?>
				
				
                </tbody>
            </table>
        </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular Modal -->
















		<!-- Regular Modal -->
			<div id="modal-large" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
							<button onclick="printContent('div1')" class='btn btn-effect-ripple btn-danger'><i class='fa fa-print '>Print Record</i>
						</div>
						<script>function printContent()
{
	var DocumentContainer = document.getElementById('div1');
	var WindowObject = window.open("", "PrintWindow",
	"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	setTimeout(function(){
		WindowObject.focus();
		WindowObject.print();
		WindowObject.close();
	},50);
}</script>
							<div class="modal-body"  id="div1">
						<center> <img src="<?=base_url()?>public/img/logo.jpg" alt="image" height="100px" width="300px"></center><br>
						
						 
							<div class="table-responsive">
							
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
					
						<th style="width: 20px;">Booking ID</th>
						<th>Date Paid</th>
						<th>Name</th>
						<th>Bank</th>
						<th>Card Type</th>
						<th>Reference No.</th>
						<th>Amount</th>
						<th>Note</th>
						<th>Mode of Payment</th>
						
						
                    </tr>
                </thead>
                <tbody>
				
				<tr>
					<td id ="bookingid"></td>
					<td id ="date"></td>
					<td id ="name"></td>
					<td id ="bank"></td>
					<td id ="cardt"></td>
					<td id ="refno"></td>
					<td id ="amountpaid"></td>
					<td id ="note"></td>
					<td id ="modeofp"></td>
				</tr>
				
                </tbody>
            </table>
                            
						
						</div>
					
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->			
				
			
			
			
<!-- Regular Modal -->
			<div id="addReservation" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Bills</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Bill Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="datepaid" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                            </div>
                                           
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee Title</label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" class="form-control" name="bookingID"value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bank" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee type</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cardtype" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <input type="text" id="refno" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="amount" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fee type</label>
                                            <div class="col-md-6">
                                                <input type="text" id="note" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <input type="text" id="modeofpayment" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveaddbills();">Save</button>
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
