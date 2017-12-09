<!--Add Reservation-->
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
<input type="hidden" id="bookingid" value="<?php echo $bookingid;?>">	
	
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
												  <td><?php echo $bookingid;?>
												  <input type="hidden" id="bookingid" value="<?php echo $bookingid;?>">
												  </td>
                                            <tr>
                                               <td>
                                                    <strong>Guest Name</strong>
													
                                                </td>
                                                <td><?php echo $reservation_main->guests;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Reservation Source</strong>
                                                </td>
                                                <td><?php echo $reservation_main->reservationsource;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Receptionist</strong>
                                                </td>
                                                <td><?php echo $reservation_main->receptionist;?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Booking Date</strong>
                                                </td>
                                                <td><?php echo $reservation_main->bookingdate;?></td>
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
                                            <li><a href="#profile-followers">Billing</a></li>
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
                                                    <input type="text" id="checkin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="checkout" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="pax" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="gfor" class="form-control" onchange="fetch_select(this.value);">
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
								 <select id="roomNames" class="form-control">
											<option>Select Rooms</option>
												<?php foreach ($voucher_list as $room_rates):
														echo "<option value='".$room_rates['roomName']."'>".$room_rates['roomName']."</option>";
														endforeach;
														
												?>
											
 </select>
	  </div>
	  </div>
											<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Current Season</label>
                                            <div class="col-md-6">
												<select id="season" class="form-control">
												<option value="super peak">Super Peak</option>
												<option value="peak">Peak</option>
												<option value="low">Low</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Rate</label>
                                            <div class="col-md-6">
                                                <input type="text" id="rate" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
									
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savereservationdetails();">Save</button>
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
									<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Charge Name</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="chargenames" class="form-control" onchange="selectcharge(this.value);">
  <option>Charge Name</option>
  <?php
 $host = 'localhost';
  $user = 'hms_hoteldb';
  $pass = ',;8tiBD9^46_';
  mysql_connect($host, $user, $pass);
  mysql_select_db('hms_hotelmanagementdb');

 $select=mysql_query("select namecharge from other_charges group by namecharge");
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
								 <input type="text" id="amounts" name="state-normal" class="form-control" value="" type="text" list="camount">
								<datalist id="camount">
											
</datalist>		
	  </div>
	  </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Quantity Of Charge</label>
                                            <div class="col-md-6">
                                                <input type="text" id="qtys" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
	                     
                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savebookingcharges();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Other Charges Modal -->
									
									
									
<!-- Cash Modal -->
                                    <div id="modal-cash" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Cash</strong></h3>
                                                </div>
							  <input type="hidden" id="bookingid" name="state-normal" class="form-control" value="">					 
                                                <input type="hidden" id="cmodeofpayment" name="state-normal" class="form-control" value="cash">
												<div class="form-group">
                                            <label class="col-md-2 control-label" for="example-datepicker"> Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cdatepaid" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d');?>">
                                            </div>
                                           
                                        </div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cashamount" name="state-normal" class="form-control" value="">
                                            
											</div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Note</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cnote" name="state-normal" class="form-control" value="">
                                            
											</div>
											
                                        </div>
										
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savecash();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Cash Modal -->
									
									<!-- Card Modal -->
                                    <div id="modal-card" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Debit/Credit Card</strong></h3>
                                                </div>
												
                                            
                                                <input type="hidden" id="modeofpayment" name="state-normal" class="form-control" value="Credit/Debit Card">
                                            
											<div class="row"></div>
											<div class="modal-body">
											<div class="form-group">
                                         
                                            <label class="col-md-2 control-label" for="example-datepicker"> Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="datepaid" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd"  value="<?php echo date('Y-m-d');?>">
                                            </div>
                                           
                                        </div>
										<div class="row"></div>
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" name="state-normal" class="form-control" value="">
                                            </div>
											
                                        </div>
											
											<div class="row"></div>
											 <label class="col-md-2 control-label" for="state-normal">Card Type</label>
                                            <div class="col-md-6">
												<select id="cardtype" class="form-control">
												
												<option value="debit">Debit</option>
												<option value="credit">Credit</option>
											
												
												</select>
                                            </div>
											<div class="row"></div>
											 <label class="col-md-2 control-label" for="state-normal">Bank</label>
                                            <div class="col-md-6">
												<select id="bank" class="form-control">
												<option value="BDO">BDO</option>
												<option value="RCBC">RCBC</option>
												<option value="May Bank">May Bank</option>
												<option value="Union Bank">Union Bank</option>
												<option value="Land Bank">Land Bank</option>
												<option value="China Bank">China Bank</option>
												<option value="Postal Bank">Postal Bank</option>
												<option value="BPI">Bank of the Philippine Islands</option>
												<option value="DBP">Developmental Bank of the Philippines</option>
											
												
												</select>
                                            </div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Reference No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="refno" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="cardamount" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Note</label>
                                            <div class="col-md-6">
                                                <input type="text" id="note" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											
                                        </div>
										
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="addcard();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Card Modal -->
									
									<!-- Bank Modal -->
                                    <div id="modal-bank" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Bank Deposit</strong></h3>
                                                </div>
												<input type="hidden" id="bankmodeofpayment" name="state-normal" class="form-control" value="Bank Deposit">
												<div class="modal-body">
												<div class="form-group">
                                            <label class="col-md-2 control-label" for="example-datepicker"> Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bankdatepaid" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd"  value="<?php echo date('Y-m-d');?>">
                                            </div>
                                           
                                        </div>
										<div class="row"></div>
                                                
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bankname" name="state-normal" class="form-control" value="">
                                            </div>
											
										 <div class="row"></div>
											 <label class="col-md-2 control-label" for="state-normal">Bank</label>
                                            <div class="col-md-6">
												<select id="bankbank" class="form-control">
												<option value="BDO">BDO</option>
												<option value="RCBC">RCBC</option>
												<option value="May Bank">May Bank</option>
												<option value="Union Bank">Union Bank</option>
												<option value="Land Bank">Land Bank</option>
												<option value="China Bank">China Bank</option>
												<option value="Postal Bank">Postal Bank</option>
												<option value="BPI">Bank of the Philippine Islands</option>
												<option value="DBP">Developmental Bank of the Philippines</option>
											
												
												</select>
                                            </div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Reference No.</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bankrefno" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bankamount" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											<div class="row"></div>
											<div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Note</label>
                                            <div class="col-md-6">
                                                <input type="text" id="banknote" name="state-normal" class="form-control" value="">
                                            </div>
											</div>
											
											
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary" onclick="addbank();">Save</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Bank Modal -->
									
									<!-- Discount Modal -->
                                    <div id="modal-discount" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title"><strong>Discount</strong></h3>
                                                </div>
												
&emsp;&emsp;<label><b>Current Balance :&emsp;<?php echo $current_balance;?></label>
                                                <div class="row"></div>
											
<input type="hidden" id="bookingid" value="<?php echo $bookingid;?>">
											<div class="row"></div>	
										<div class="form-group">
                                            <label class="col-md-2 control-label" for="example-datepicker"> Date</label>
                                            <div class="col-md-6">
                                                <input type="text" id="date" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd"  value="<?php echo date('Y-m-d');?>">
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
										
										<div class="row"></div>
												
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">No. of Senior Citizen/PWDs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="noofseniorcitizen" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                                
												
												<div class="row"></div>
												
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Note</label>
                                            <div class="col-md-6">
                                                <input type="text" id="disnote" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
                                               
										
											<div class="row"></div>
												
                                                   <div class="form-group">
                                            <label class="col-md-2 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" id="billamount" name="state-normal" class="form-control" value="">
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
																<th>Status</th>
																<th>Action</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($reservation_list as $booking_details):
				//echo $studentname;
				
				echo "<tr>";
				echo "<td>".$booking_details['bookingid']."</td>";
				echo "<td>".$booking_details['checkin']."</td>";
				echo "<td>".$booking_details['checkout']."</td>";
				echo "<td>".$booking_details['pax']."</td>";
				echo "<td>".$booking_details['roomNames']."</td>";
				echo "<td>".$booking_details['good_for']."</td>";
				echo "<td>".$booking_details['rate']."</td>";
				echo "<td>".$booking_details['season']."</td>";
				echo "<td><button id='booking' onclick='updatebooking (".$booking_details['bdid'].");' type='button' class='btn btn-success'>Check In</td>";
				//echo "<td>".$booking_details['status']."</td>";
				
				
				echo "<td><a href='#modal-regular' data-toggle='modal' onclick='updatebookingd(".$booking_details['bdid'].");' type='reset' class='btn btn-effect-ripple btn-success'><i class='fa fa-pencil'></i></a><button onclick='deleteaddbooking(".$booking_details['bdid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
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
									<input type="hidden" id="bdid" name="state-normal" class="form-control" value="">
										<div class="form-group">
                                             <label class="col-md-3 control-label" for="example-daterange1">Check In/Out</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="checkedin" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="checkedout" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
                                            </div>
                                           
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Packs</label>
                                            <div class="col-md-6">
                                                <input type="text" id="paxs" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="row"></div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Good For</label>
                                            <div class="col-md-6">
												<div id="select_box">
 <select id="goodfor" class="form-control" onchange="fetch_select(this.value);">
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
								 <select id="roomNamess" class="form-control">
										<option></option>
												<?php foreach ($voucher_list as $room_rates):
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
												<select id="seasons" class="form-control">
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
                                                <input type="text" id="rates" name="state-normal" class="form-control" value="">
                                            </div>
                                        </div>
										
									

                                    </form>
                                    <!-- END Input States Content -->
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-effect-ripple btn-primary" onclick="savebookingdet();">Save</button>
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
				
				foreach ($charges_list as $booking_charges):
				//echo $studentname;
				
				echo "<tr>";
				//echo "<td>".$booking_charges['bookingid']."</td>";
				echo "<td><a href='".base_url()."scholar/profile/".$booking_charges['bookingid']."'>".$booking_charges['bookingid']."</td>";
				echo "<td>".$booking_charges['chargename']."</td>";
				echo "<td>".$booking_charges['amount']."</td>";
				echo "<td>".$booking_charges['qty']."</td>";
				
				
				echo "<td><button onclick='deleteaddcharges(".$booking_charges['bcid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
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
                                        
										<!-- Gallery -->
                                        <div class="tab-pane" id="profile-followers">
                                            <div class="block-content-full">
											
                                                <div class="table-responsive remove-margin-bottom">
												
												<div class="panel-body">
                            
									<div class="col-md-5">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Summary</h4></div>
											<div class="panel-body">
												
												<table class="table table-hover">
														<tbody>
															<tr>
																<td><label>Total Rates</label></td>
																<td><?php echo $total_bill->total_bill;?></td>
															</tr>
															<tr>
																<td><label>Other Charges</label></td>
																<td><?php echo $total_charges->total_charges;?></td>
															</tr>
															<tr>
																<td><label>Total Bill</label></td>
																<td><b><?php echo $totalcharges;?></td>
															</tr>
															
															<tr>
																<td><strong>Discount</strong></td>
															 <td> <?php echo $total_discount->total_discount;?>
														<br><a href="#modal-large" data-toggle="modal"> View More Details</a></li></td>
																  
															</tr>
															
															<tr>
																<td><label>Amount Paid</label></td>
																<td><?php echo $total_payment->total_payment;?></td>
															</tr>
															
															<tr>
																<td><label>Current Balance</label></td>
																
																<td><?php echo $current_balance;?></td>
</tr>
														</tbody>
												</table>
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Payment Type</h4></div>
											<div class="panel-body">
												<a href="#modal-cash" class="btn btn-info btn-block" data-toggle="modal"><i class="fa fa-money"></i> Cash</a>
												
												<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-card"><i class="fa fa-credit-card fa-fw"></i> Credit/Debit Card</button>
												
												<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-bank"><i class="fa fa-bank fa-fw"></i> Bank Deposit</button>
												
												<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal-discount"><i class="fa fa-minus-circle"></i> Discount</button>
												
												<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modal-print" onclick="payment" ><i class="fa fa-print"></i> Print Details</button>
												<br>
											</div>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom">
                                                        <thead>
                                                            <tr>
																<th>Booking ID</th>
                                                                <th>Date Paid</th>
                                                                <th>Name</th>
                                                                <th>Bank</th>
																<th>Card Type</th>
																 <th>Ref. No.</th>
                                                                <th>Amount</th>
                                                                <th>Note</th>
																<th>Mode of Payment</th>
																<th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
				
				foreach ($payment_list as $bill_payment):
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
				
				
				echo "<td><button onclick='deletepayment(".$bill_payment['paymentid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				echo "</tr>";
                    endforeach;
				
				?>
				
                </tbody>
            </table>
			</table>
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
							<p class="split-para"><b>Resevation No. :&emsp;  <?php echo $bookingid;?><span class="tab" id="bookid"></b><span><b>Guest Name: &emsp; <b>Guest Name: &emsp; <?php echo $reservation_main->guests;?></b></span></p>
							
							<p class="split-para"><b>Arrival: &emsp; <?php echo $booking_details['checkin'];?></b><span><b>Address: &emsp; </span></p>
							
							<p class="split-para"><b>Departure: &emsp; <?php echo $booking_details['checkout'];?></b><span><b>Receptionist: &emsp; <?php echo $reservation_main->receptionist;?></b></span></p>
							
							<p class="split-para"><b>Reservation Source: &emsp; <?php echo $reservation_main->reservationsource;?></b><span><b>Booking Date: &emsp; <?php echo $reservation_main->bookingdate;?> </span></p> 






							
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black; width: 100%;">
                <thead>
                    <tr>
					
						<th style="width: 15px;">Reservation ID</th>
						<th>Booking Date</th>
						<th>Room Names</th>
						<th>Description</th>
						<th>Charges</th>
						<th>Payments</th>
						<th>Balance</th>
				
                    </tr>
                </thead>
                <tbody>
				
				<tr>
					<td><?php echo $bookingid;?></td>
					<td><?php echo $reservation_main->bookingdate;?></td>
					<td><?php echo $booking_details['roomNames'];?></td>
					<td></td>
					<td><?php echo $booking_charges['amount'];?></td>
					<td><?php echo $bill_payment['amountpaid'];?></td>
					<td><?php echo $current_balance;?></td>
					
				</tr>
				
                </tbody>
            </table>
                       <b style="float: right;">Sub Total:	1026658<br>     
						
						</div>
					
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->	
        </div>				<!-- Discount Modal -->
													
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