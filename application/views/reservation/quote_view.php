<!--Add Reservation-->
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
          
                    <h2 class="page-header" style="color:#000; font-size: 25px;"><i class="fa fa-book fa-2x"></i>Qoute</h2>
					
					<div class="pull-right">
									<button id="addquotemodule" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addquote" style="margin-top: 12px;margin-right: 15px;"><i class="fa fa-plus-circle"></i> Add Quote
								</button>
                                </div> 
                          
               
			<?php //print_r($heidirectory);?>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						<th style="width: 20px;">Reservation ID</th>
						<th>Booking Date</th>
						<th>Guest</th>
						<th>Reservation Source</th>
						<th>Receptionist</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($quote_list as $quote_module):
				
				
				//echo $studentname;
				
				echo "<tr>";
				echo "<td><a href='".base_url()."Quote/quotedetails/".$quote_module['bookingids']."'>".$quote_module['bookingids']."</a></td>";
				echo "<td>".$quote_module['bookingdate']."</td>";
				echo "<td>".$quote_module['gname']."</td>";
				echo "<td>".$quote_module['ressource']."</td>";
				echo "<td>".$quote_module['receptionists']."</td>";
				
				echo "<td><a href='#modal-large' data-toggle='modal' onclick='modulequote(".$quote_module['bookingids'].");' type='button' class='btn btn-effect-ripple btn-info'><i class='fa fa-print'></i></a><button onclick='quote(".$quote_module['bookingids'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
                </tbody>
            </table>
			
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
						<center> <img src="<?=base_url()?>public/img/logo.jpg" alt="image" height="120px" width="120px"></center>
						
						<style>span.tab{padding: 0 150px;}</style>
						
							<div class="table-responsive">
							 
							<style>.split-para      { display:block;margin:10px;}
.split-para span { display:block;float:right;width:50%;margin-left:10px;}</style>
						
						
							<p class="split-para"><b>Quote No. : &emsp; <b  style="color: black;"  id="bokids"></b><span><b>Guest Name: &emsp; <b  style="color: black;" id="gnames"></b></span></p>
							
							<p class="split-para"><b>Arrival: &emsp;<b  style="color: black;" id="inquote"></b><span><b>Address: &emsp; </span></p>
							
							<p class="split-para"><b>Departure: &emsp; <b  style="color: black;" id="outquote"></b><span><b>Receptionist: &emsp; <b  style="color: black" id="receps"></b></span></p>
							
							<p class="split-para"><b>Reservation Source: &emsp; <b  style="color: black;" id="qsource"></b><span><b>Booking Date: &emsp; <b  style="color: black;" id="bd"></b> </span></p>
							
							 <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black; width: 100%;">
                <thead>
                    <tr>
					
						<th style="width: 15px;">Reservation ID</th>
						<th>Booking Date</th>
						<th>Room Names</th>
						<th>Description</th>
						<th>Charges</th>

				
                    </tr>
                </thead>
                <tbody>
				
				<tr>
					<td id ="bids"></td>
					<td id ="bds"></td>
					<td id ="rom"></td>
					<td id ="qcheck"></td>
					<td id ="qrate"></td>

					
				</tr>
				
                </tbody>
            </table>
                       <b style="float: right;">Sub Total:	1026658<br>     
						
						</div>
					
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->	
        </div>
		
    </div>
  
			
<!-- Regular Modal -->
			<div id="addquote" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Quote</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
								  
										
                                                <input type="hidden" id="boids" name="state-normal" class="form-control" value="">
                                          
						
                                              <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Guest Name</label>
                                            <div class="col-md-6">
                                                <select id="gname" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
												 <?php
  $host = 'localhost';
  $user = 'hms_hoteldb';
  $pass = ',;8tiBD9^46_';
  mysql_connect($host, $user, $pass);
  mysql_select_db('hms_hotelmanagementdb');

 $select=mysql_query("select GuestName from guest");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['GuestName']."</option>";
  }
 ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
										<div class="row"></div>
									<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Reservation Source</label>
                                            <div class="col-md-6">
												<select id="ressource" class="form-control">
												
												<option value="call">Call</option>
												<option value="walk in">Walk In</option>
												<option value="internet">Internet</option>
												<option value="referral">Referral</option>
												<option value="travel agency">Travel Agency</option>
												<option value="email">Email</option>
												<option value="others">Others</option>
												
												</select>
                                            </div>
                                        </div>
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Receptionist</label>
                                            <div class="col-md-6">
                                                <input type="text" id="rec" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Booking Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="booking" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d');?>">
                                            </div>
                                           
                                        </div>
										
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="addquote();">Save</button>
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