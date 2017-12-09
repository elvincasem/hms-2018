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
										 <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" onclick="cashfilters();"/></button>
										<p>
		  
                    <h2 class="page-header" style="color:#000; font-size: 20px;"><i class="fa fa-book fa-2x"></i>Cash Sales Report</h2>
					<a href='#modal-large' data-toggle='modal' onclick='print' type='button' class='btn btn-effect-ripple btn-info'><i class='fa fa-print'></i></a>
						</div>
						
					
                          
               
			<?php //print_r($heidirectory);?>
        <div class="table-responsive" id="cash_tables">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						<th>Booking ID</th>
                        <th>Date Paid</th>
                        <th>Name</th> 
                        <th>Amount</th>
                        <th>Note</th>
						<th>Mode of Payment</th>
						
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($cash_list as $bill_payment):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$bill_payment['bookingid']."</td>";
				echo "<td>".$bill_payment['datepaid']."</td>";
				echo "<td>".$bill_payment['name']."</td>";
				//echo "<td>".$bill_payment['bank']."</td>";
				//echo "<td>".$bill_payment['cardtype']."</td>";
				//echo "<td>".$bill_payment['refno']."</td>";
				echo "<td>".$bill_payment['amountpaid']."</td>";
				echo "<td>".$bill_payment['note']."</td>";
				echo "<td>".$bill_payment['modeofpayment']."</td>";
				
				
				//echo "<td><button onclick='deletepayment(".$bill_payment['paymentid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
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
<center><h1>Cash Sales Report</h1></center>
						<center> <img src="<?=base_url()?>public/img/logo.jpg" alt="image" height="120px" width="190px"></center>
						
						<style>span.tab{padding: 0 150px;}</style>
						
						<div class="table-responsive" id="cash_table">
		
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						<th>Booking ID</th>
                        <th>Date Paid</th>
                        <th>Name</th> 
                        <th>Amount</th>
                        <th>Note</th>
						<th>Mode of Payment</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($cash_list as $bill_payment):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$bill_payment['bookingid']."</td>";
				echo "<td>".$bill_payment['datepaid']."</td>";
				echo "<td>".$bill_payment['name']."</td>";
				//echo "<td>".$bill_payment['bank']."</td>";
				//echo "<td>".$bill_payment['cardtype']."</td>";
				//echo "<td>".$bill_payment['refno']."</td>";
				echo "<td>".$bill_payment['amountpaid']."</td>";
				echo "<td>".$bill_payment['note']."</td>";
				echo "<td>".$bill_payment['modeofpayment']."</td>";
				
				
				//echo "<td><button onclick='deletepayment(".$bill_payment['paymentid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
                </tbody>
            </table>  
						
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