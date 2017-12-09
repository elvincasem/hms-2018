<!--Add Reservation-->
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
<input type="hidden" id="bookingids" value="<?php echo $bookingids;?>">	
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('subheader_view'); ?>

		
		<!-- Page content -->
                    <div id="page-content">
                        <!-- Tickets Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Booking Details</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Extra Pages</li>
                                            <li><a href="">Tickets</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Tickets Header -->

                        <!-- Tickets Content -->
                        <div class="row">
                            <div class="col-md-4 col-lg-3">
                                

                                <!-- Quick Month Stats Block -->
                                <div class="block">
                                    <!-- Quick Month Stats Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            
                                        </div>
                                       <center> <h2><b>New Reservation</h2></center>
                                    </div>
                                    <!-- END Quick Month Stats Title -->

                                    <!-- Quick Month Stats Content -->
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <tbody>
                                             <tr>
                                                <td style="width: 60%;">
                                                    <strong>Booking ID</strong>
                                                </td>
												  <td><?php echo $bookingids;?>
												  <input type="hidden" id="bookingids" value="<?php echo $bookingids;?>">
												  </td>
                                            <tr>
                                               <td>
                                                    <strong>Guest Name</strong>
													
                                                </td>
                                                <td><?php echo $quote_main->gname;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Reservation Source</strong>
                                                </td>
                                                <td><?php echo $quote_main->ressource;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Receptionist</strong>
                                                </td>
                                                <td><?php echo $quote_main->receptionists;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Booking Date</strong>
                                                </td>
                                                <td><?php echo $quote_main->bookingdate;?></td>
                                            </tr>
                                      		
                                        </tbody>
                                    </table>
                                    <!-- END Quick Month Stats Content -->
                                </div>
                                <!-- END Quick Month Stats Block -->
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <!-- Tickets Block -->
                                <div class="block">
                                    <!-- Tickets Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#tickets-list">Booking</a></li>
                                           <li><a href="#profile-gallery">Other Charges</a></li>
<p align="right">
										   <button type="button" class="btn btn-effect-ripple btn-primary" data-toggle="modal" data-target="#modal-print"><i class="fa fa-print"></i> Print Details</button>
											</p>
                                         
                                    </div>
                                    <!-- END Tickets Title -->
<div class="container">
									<!-- Regular Modal -->
                                    <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Update Booking Details</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                     <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									
										<div class="form-group">
                                             <label class="col-md-3 control-label" for="example-daterange1">Check In/Out</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="quotecheckin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="quotecheckout" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="quotepax" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="quotegood_for" class="form-control" onchange="select(this.value);">
  <option>Good For</option>
  <?php
 $host = 'localhost';
  $user = 'hms_hoteldb';
  $pass = ',;8tiBD9^46_';
  mysql_connect($host, $user, $pass);
  mysql_select_db('hms_hotelmanagementdb');

 $select=mysql_query("select goodfor from room_rates group by goodfor");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['goodfor']."</option>";
  }
 ?>
 </select>
 </div>
 </div>
 </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rooms</label>
                                            <div class="col-md-6">
								 <select id="quoteroomNames" class="form-control">
											<option>Select Rooms</option>
												<?php foreach ($quote_list as $room_rates):
														echo "<option value='".$room_rates['roomName']."'>".$room_rates['roomName']."</option>";
														endforeach;
														
												?>
											
 </select>
	  </div>
	  </div>
											<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Current Season</label>
                                            <div class="col-md-6">
												<select id="quoteseason" class="form-control">
												<option value="super peak">Super Peak</option>
												<option value="peak">Peak</option>
												<option value="low">Low</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rate</label>
                                            <div class="col-md-6">
                                                <input type="text" id="quoterate" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
									
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatequotedetails();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular Modal -->

<!--  Other Charges Modal -->
                                    <div id="modal-charges" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Add Other Charges</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                     <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									<div class="row"></div>
									<div class="form-group">
                                           <label class="col-md-3 control-label" for="state-normal">Charge Name</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="quotechargename" class="form-control" onchange="chargeselect(this.value);">
  <option>Charge Name</option>
  <?php
  $host = 'localhost';
  $user = 'hms_hoteldb';
  $pass = ',;8tiBD9^46_';
  mysql_connect($host, $user, $pass);
  mysql_select_db('hms_hotelmanagementdb');

 $select=mysql_query("select namecharge from other_charges");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['namecharge']."</option>";
  }
 ?>
 </select>
 
                                            </div>
                                        </div>
									</div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Charge</label>
                                            <div class="col-md-6">
					<input id="quoteamounts" class="form-control" type="text" list="quoteamount">
<datalist id="quoteamount">
											
</datalist>			
							
	  </div>
	  </div>							
	
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Quantity Of Charge</label>
                                            <div class="col-md-6">
                                                <input type="text" id="quoteqty" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savequotecharges();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Other Charges Modal -->
									
								
									
									<!-- Discount Modal -->
                                    <div id="modal-discount" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Discount</strong></h3>
                                                </div>
												

                                                <div class="row"></div>
												<div class="modal-body">
												 <input type="hidden" id="bookingid" value="<?php echo $bookingid;?>">
												 <div class="modal-body">
										<div class="form-group">
                                            <label class="col-md-2 control-label" for="example-datepicker"> Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="date" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d');?>">
                                            </div>
                                           
                                        </div>
											<div class="row"></div>
                                                   <div class="form-group">
											 <label class="col-md-2 control-label" for="state-normal">Discount Type</label>
                                            <div class="col-md-6">
												<select id="discounttype" class="form-control">
												<option value="senior">Senior Citizen</option>
												<option value="pwds">PWDs</option>
												<option value="discount card">Discount Card</option>
												<option value="discount card">Special</option>
											
												</select>
                                            </div>
											</div>
										</div>
										
									</div>
										<div class="row"></div>
												<div class="modal-body">
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">No. of Senior Citizen/PWDs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="noofseniorcitizen" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                                </div>
												
												<div class="row"></div>
												<div class="modal-body">
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Note</label>
                                            <div class="col-md-6">
                                                <input type="text" id="disnote" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                                </div>
										
											<div class="row"></div>
												<div class="modal-body">
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="billamount" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                                </div>
												
										
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="adddiscount();">Apply Discount</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Discount Modal -->
									
									
                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <!-- Tickets List -->
										
                                        <div class="tab-pane active" id="tickets-list">
                                            <div class="block-content-full">
											<a href="#modal-regular1" class="btn btn-effect-ripple btn-info"  data-toggle="modal"><span class="fa fa-plus"></span>Add Booking Details</a>
                                                <div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom">
                                                        <thead>
                                                            <tr>
															 <th>Booking ID</th>
                                                                <th>Check In</th>
                                                               <th>Check Out</th>
																<th>Packs</th>
                                                                <th>Room</th>
																<th>Good For</th>
                                                                <th>Rate</th>
																<th>Season</th>
																
																<th>Action</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($reservation_list as $quotebooking_details):
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$quotebooking_details['bookingids']."</td>";
				echo "<td>".$quotebooking_details['quotecheckin']."</td>";
				echo "<td>".$quotebooking_details['quotecheckout']."</td>";
				echo "<td>".$quotebooking_details['quotepax']."</td>";
				echo "<td>".$quotebooking_details['quoteroomNames']."</td>";
				echo "<td>".$quotebooking_details['quotegood_for']."</td>";
				echo "<td>".$quotebooking_details['quoterate']."</td>";
				echo "<td>".$quotebooking_details['quoteseason']."</td>";
				//echo "<td><button id='booking' onclick='updatebooking (".$quotebooking_details['bdids'].");' type='button' class='btn btn-success'>Checked In</td>";
				//echo "<td>".$booking_details['status']."</td>";
				
				
				echo "<td><a href='#modal-regular' data-toggle='modal' onclick='updatebookingdet(".$quotebooking_details['bdids'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a><button onclick='deletequotebooking(".$quotebooking_details['bdids'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
				
				
				
				endforeach;
				?>
				<!-- Regular Modal -->
                                    <div id="modal-regular1" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Add Booking Details</strong></h3>
                                                </div>
                                                <div class="modal-body">
                                                       <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
									<input type="hidden" id="bdids" name="state-normal" class="form-control" value="">
										<div class="form-group">
                                             <label class="col-md-3 control-label" for="example-daterange1">Check In/Out</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="cin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="out" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="paks" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="good" class="form-control" onchange="select(this.value);">
  <option>Good For</option>
  <?php
  $host = 'localhost';
 $user = 'hms_hoteldb';
 $pass = ',;8tiBD9^46_';
 mysql_connect($host, $user, $pass);
 mysql_select_db('hms_hotelmanagementdb');

 $select=mysql_query("select goodfor from room_rates group by goodfor");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['goodfor']."</option>";
  }
 ?>
 </select>
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rooms</label>
                                            <div class="col-md-6">
								 <select id="roomss" class="form-control">
										<option></option>
												<?php foreach ($quote_list as $room_rates):
														echo "<option value='".$room_rates['roomName']."'>".$room_rates['roomName']."</option>";
														endforeach;
														
												?>
											
 </select>
	  </div>
	  </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Current Season</label>
                                            <div class="col-md-6">
												<select id="season1" class="form-control">
												<option value="super peak">Super Peak</option>
												<option value="peak">Peak</option>
												<option value="low">Low</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rate</label>
                                            <div class="col-md-6">
                                                <input type="text" id="rate1" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
									

                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savequotedet();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular Modal -->
				
               
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- END Tickets List -->
 <!-- Gallery -->
                                        <div class="tab-pane" id="profile-gallery">
                                            <div class="block-content-full">
											<a href="#modal-charges" class="btn btn-effect-ripple btn-info" data-toggle="modal"><span class="fa fa-plus"></span>Add Other Charges</a>
                                                <div class="table-responsive remove-margin-bottom">
                                                 <table class="table table-striped table-borderless table-hover table-vcenter">
                                                        <thead>
                                                            <tr>
															  <th>Booking ID</th>
                                                                <th>Charges</th>
                                                                <th>Amount</th>
                                                                <th>Quantity Of Charge</th>
																<th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($charge_list as $quotebooking_charges):
				//echo $studentname;
				
				echo "<tr>";
				//echo "<td>".$booking_charges['bookingid']."</td>";
				echo "<td>".$quotebooking_charges['bookingids']."</td>";
				echo "<td>".$quotebooking_charges['quotechargename']."</td>";
				echo "<td>".$quotebooking_charges['quoteamount']."</td>";
				echo "<td>".$quotebooking_charges['quoteqty']."</td>";
				
				
				echo "<td><button onclick='deletequotecharges(".$quotebooking_charges['bcids'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
				
				
				
				
                </tbody>
            </table>
			</table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
               
                                        <!-- END Gallery -->
                                        
										
			
        </div>
                                               

<!-- Regular Modal -->
			<div id="modal-print" class="modal" role="dialog" aria-hidden="true">
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
							<p class="split-para"><b>Quote No. : &emsp; <?php echo $bookingids;?></b><span><b>Guest Name: &emsp; <?php echo $quote_main->gname;?></b></span></p>
							
							<p class="split-para"><b>Arrival: &emsp;<?php echo $quotebooking_details['quotecheckin'];?></b><span><b>Address: &emsp; </span></p>
							
							<p class="split-para"><b>Departure: &emsp; <?php echo $quotebooking_details['quotecheckout'];?></b><span><b>Receptionist: &emsp; <?php echo $quote_main->receptionists;?></b></span></p>
							
							<p class="split-para"><b>Reservation Source: &emsp; <?php echo $quote_main->ressource;?></b><span><b>Booking Date: &emsp; <?php echo $quote_main->bookingdate;?></b> </span></p>
							
							
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black; width:100%;">
                <thead>
                    <tr>
					
						<th style="width: 15px;">Reservation ID</th>
						<th>Quote Date</th>
						<th>Room Names</th>
						<th>Description</th>
						<th>Charges</th>
				
                    </tr>
                </thead>
                <tbody>
				
				<tr>
					<td><?php echo $bookingids;?></td>
					<td><?php echo $quote_main->bookingdate;?></td>
					<td><?php echo $quotebooking_details['quoteroomNames'];?></td>
					<td></td>
					<td><?php echo $quotebooking_charges['quoteamount'];?></td>

					
				</tr>
				
                </tbody>
            </table>
                       <b style="float: right;">Sub Total:	<br>     
						
						</div>
					
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->			





													<!-- Discount Modal -->
													
                                    <div id="modal-large" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Discount Details</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
										<div class="col-lg-12">
										<div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom">
                                                        <thead>
                                                            <tr>
																
																<th>Booking ID</th>
                                                                <th>Date</th>
                                                                <th>Discount Type</th>
                                                                <th>No. of Senior Citizen/PWDs</th>
																<th>Note</th>
																 <th>Amount</th>
																 <th>Action</th>
                                                             
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
				
				foreach ($discount_list as $billing_discount):
				//echo $studentname;
				
				echo "<tr>";
				
				echo "<td>".$billing_discount['bookingid']."</td>";
				echo "<td>".$billing_discount['date']."</td>";
				echo "<td>".$billing_discount['discounttype']."</td>";
				echo "<td>".$billing_discount['noofseniorcitizen']."</td>";
				echo "<td>".$billing_discount['note']."</td>";
				echo "<td>".$billing_discount['billamount']."</td>";
				
				echo "<td><button onclick='deletediscount(".$billing_discount['disid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
                </tbody>
            </table>
			</table>
								
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->				
						
                                                </div>
											</div>
                                        </div>
                                        <!-- END Gallery -->
										
                                    </div>
                                    <!-- END Tabs Content -->
                                </div>
                                <!-- END Tickets Block -->
                            </div>
                        </div>
                        <!-- END Tickets Content -->
                    </div>
                    <!-- END Page Content -->
                </div>
		</div><!--end container-->
		
		
		
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->