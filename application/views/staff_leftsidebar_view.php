<!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="<?=base_url()?>Staff/home" class="sidebar-title">
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
                                    <a href="<?=base_url()?>Staff/home" class=""><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>
                                <li class="<?php echo $reservation;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-book fa"></i>&nbsp &nbsp <span class="sidebar-nav-mini-hide">Reservation</span></a>
                                    <ul>
										<li >
                                            <a href="<?=base_url()?>Staff/quote" class="<?php echo $quotelist;?>"></i> <span class="fa fa-bookmark fa"></span>Quote Module</a>
                                        </li>
										<li >
                                            <a href="<?=base_url()?>Staff/reservation" class="<?php echo $reservationlist;?>"></i> <span class="fa fa-bookmark fa"></span> Reservation List</a>
                                        </li>
										<a href="<?=base_url()?>Staff/reserved" class="<?php echo $reservedlist;?>"></i><i class="fa fa-group fa"></i> &nbsp <span class="sidebar-nav-mini-hide">Reserved Rooms</span></a>
								</li>		
								
										<li >
                                            <a href="<?=base_url()?>Staff/check" class="<?php echo $checkedlist;?>"></i> <span class="fa fa-bookmark fa"></span> Checked In</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>Staff/confirm" class="<?php echo $confirmlist;?>"></i> <span class="fa fa-bookmark fa"></span> Confirmed Reservation</a>
                                        </li>
										
								
								<li>
								<a href="<?=base_url()?>Staff/arrival" class="<?php echo $arrivallist;?>"></i><i class="fa fa-group fa"></i> &nbsp <span class="sidebar-nav-mini-hide">Arrival</span></a>
								</li>	
										
									</ul>
								</li>

								<li class="<?php echo $billing;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp &nbsp <span class="sidebar-nav-mini-hide">Billing</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>Staff/shift" class="<?php echo $shiftlist;?>"></i> <span class="fa fa-group fa"></span> Shift and Cash Management</a>
                                        </li>
										
										
										
									</ul>
								</li>			
								

								
								<li class="<?php echo $reports;?>">
								 <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp &nbsp <span class="sidebar-nav-mini-hide">Reports</span></a>
                                  <ul>
								  <li>
                                            <a href="<?=base_url()?>Staff/cash" class="<?php echo $saleslist;?>"></i> <span class="fa fa-group fa"></span>Cash Sales Report</a>
											
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>Staff/card" class="<?php echo $debitlist;?>"></i> <span class="fa fa-key fa"></span> Debit/Credit Sales Report</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>Staff/bank" class="<?php echo $banklist;?>"></i> <span class="fa fa-key fa"></span> Bank Sales Report</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>Staff/receivable" class="<?php echo $collectionlist;?>"></i> <span class="fa fa-key fa"></span> Collection of Accounts Receivable</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>Staff/status" class="<?php echo $statuslist;?>"></i> <span class="fa fa-money fa"></span> Room Status</a>
                                        </li>
										<li>
                                            <a href="<?=base_url()?>Staff/due" class="<?php echo $duelist;?>"></i> <span class="fa fa-key fa"></span> Check-Out Due</a>
                                        </li>
									<li >
                                            <a href="<?=base_url()?>Staff/customers" class="<?php echo $customerslist;?>"></i> <span class="fa fa-money fa"></span> List of Top Customers</a>
                                        </li>
										
										
										
										
									</ul>
								</li>						
								
									<li class="<?php echo $settings;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class=" fa fa-user"></i> &nbsp &nbsp <span class="sidebar-nav-mini-hide">Settings</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>Staff/guest" class="<?php echo $guestlist;?>"></i> <span class="fa fa-group fa"></span> Guest Profile</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>Staff/roomprofile" class="<?php echo $profilelist;?>"></i> <span class="fa fa-key fa"></span> Room Profile</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>Staff/rooms" class="<?php echo $roomlist;?>"></i> <span class="fa fa-money fa"></span> Rooms Rates</a>
                                        </li>
										<li>
                                            <a href="<?=base_url()?>Staff/company" class="<?php echo $companylist;?>"></i> <span class="fa fa-key fa"></span> Company Profile</a>
                                        </li>
										
										<li >
                                            <a href="<?=base_url()?>Staff/services" class="<?php echo $serviceslist;?>"></i> <span class="fa fa-money fa"></span> Extra Services/Charges</a>
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