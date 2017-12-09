<!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="<?=base_url()?>home" class="sidebar-title">
                            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">HOTEL<strong>R</strong></span>
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->

                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?=base_url()?>home" class=""><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>
                                <li class="<?php echo $reservation;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-book fa"></i>&nbsp <span class="sidebar-nav-mini-hide">Booking</span></a>
                                    <ul>
										<li >
                                            <a href="<?=base_url()?>quote" class="<?php echo $quotelist;?>"><span class="fa fa-bookmark fa"></span>&nbsp; Quote Module</a>
                                        </li>
										<li>
                                            <a href="<?=base_url()?>reservation" class="<?php echo $reservationlist;?>"><span class="fa fa-bookmark fa"></span>&nbsp;  Reservation List</a>
                                        </li>
										<li>
										<a href="<?=base_url()?>reserved" class="<?php echo $reservedlist;?>"><i class="fa fa-group fa"></i>  <span class="sidebar-nav-mini-hide"></span>Reserved Rooms</a>
										</li>
									
								
										<li >
                                            <a href="<?=base_url()?>check" class="<?php echo $checkedlist;?>"><span class="fa fa-bookmark fa"></span>&nbsp; Checked In</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>confirm" class="<?php echo $confirmlist;?>"><span class="fa fa-bookmark fa"></span>&nbsp; Confirmed Reservation</a>
                                        </li>
								</li>
								
								<li>
								<a href="<?=base_url()?>arrival" class="<?php echo $arrivallist;?>"><i class="fa fa-group fa"></i> <span class="sidebar-nav-mini-hide"></span>&nbsp; Arrival</a>
								</li>

								<li>
								<a href="<?=base_url()?>cancellation" class="<?php echo $cancellationlist;?>"><i class="gi gi-circle_remove"></i> <span class="sidebar-nav-mini-hide"></span>&nbsp; Cancellation</a>
								</li>

								<li>
								<a href="<?=base_url()?>managebooking" class="<?php echo $managebookinglist;?>"><i class="fa fa-book"></i> <span class="sidebar-nav-mini-hide"></span>&nbsp; Manage Booking</a>
								</li>
										
									</ul>
								</li>

								<li class="<?php echo $billing;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp;<span class="sidebar-nav-mini-hide">Billing</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>shift" class="<?php echo $shiftlist;?>"></i> <span class="fa fa-group fa"></span> Shift and Cash Management</a>
                                        </li>
										
										
										
									</ul>
								</li>			
								

								
								<li class="<?php echo $reports;?>">
								 <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp;<span class="sidebar-nav-mini-hide">Reports</span></a>
                                  <ul>
								  <li>
                                            <a href="<?=base_url()?>cash" class="<?php echo $saleslist;?>"></i> <span class="fa fa-group fa"></span>&nbsp; Cash Sales Report</a>
											
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>card" class="<?php echo $debitlist;?>"></i> <span class="fa fa-key fa"></span>&nbsp; Debit/Credit Sales Report</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>bank" class="<?php echo $banklist;?>"></i> <span class="fa fa-key fa"></span>&nbsp; Bank Sales Report</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>receivable" class="<?php echo $collectionlist;?>"></i> <span class="fa fa-key fa"></span> &nbsp; Collection of Accounts Receivable</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>status" class="<?php echo $statuslist;?>"></i> <span class="fa fa-money fa"></span>&nbsp; Room Status</a>
                                        </li>
										<li>
                                            <a href="<?=base_url()?>due" class="<?php echo $duelist;?>"></i> <span class="fa fa-key fa"></span>&nbsp; Check-Out Due</a>
                                        </li>
									<li >
                                            <a href="<?=base_url()?>customers" class="<?php echo $customerslist;?>"></i> <span class="fa fa-money fa"></span>&nbsp; List of Top Customers</a>
                                        </li>
										
										
										
										
									</ul>
								</li>						
								
									<li class="<?php echo $settings;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp; <span class="sidebar-nav-mini-hide">Settings</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>guest" class="<?php echo $guestlist;?>"></i> <span class="fa fa-group fa"></span>&nbsp; Guest Profile</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>roomprofile" class="<?php echo $profilelist;?>"></i> <span class="fa fa-key fa"></span>&nbsp; Room Profile</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>rooms" class="<?php echo $roomlist;?>"></i> <span class="fa fa-money fa"></span>&nbsp; Rooms Rates</a>
                                        </li>
										<!--<li>
                                            <a href="<?//=base_url()?>company" class="<?php //echo $companylist;?>"></i> <span class="fa fa-key fa"></span> Company Profile</a>
                                        </li>-->
										
										<li >
                                            <a href="<?=base_url()?>services" class="<?php echo $serviceslist;?>"></i> <span class="fa fa-money fa"></span>&nbsp; Extra Services/Charges</a>
                                        </li>
										<li >
                                            <a href="<?=base_url()?>user" class="<?php echo $accounts;?>"></i> <span class="fa fa-group fa"></span>&nbsp; User Accounts </a>
                                        </li>
										
										
										
									</ul>
								</li>								
							
                            </ul>
							
							
							
                            <!-- END Sidebar Navigation -->

                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        
                        <div class="text-center">
                            
                            <small>&copy; HOTEL RESERVATION</small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->