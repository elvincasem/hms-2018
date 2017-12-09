<div id="page-wrapper" style="min-height: 562px;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-book fa-1x"></i> New Reservation
                </h3></div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                
				<div class="col-lg-2  form-group center">
				<label>Reservation Source:</label>
                    <select class="form-control" id="reservation_source">
						<option value="CALL">CALL</option>
						<option value="WALK-IN">WALK-IN</option>
						<option value="INTERNET">INTERNET</option>
						<option value="REFERRAL">REFERRAL</option>
						<option value="TRAVEL AGENCY">TRAVEL AGENCY</option>
						<option value="OTHERS">OTHERS</option>
					</select>
				</div>
				
				<div class="col-lg-3  form-group center">
				<label>Receptionist</label>
                    <select class="form-control" id="receptionist">
					
					<option value=""></option>						<option value="6">Administrator</option><option value="7">Jhovelyn M. Malamion</option><option value="8">Wendy B. Sung-ag</option><option value="9">Rey A. Baytista</option><option value="10">Joseph S. Abellera</option><option value="11">Ivan Alicante</option><option value="13">Raissa Yabes</option>					</select>
				</div>
				<div class="col-lg-3  form-group center">
				
										<label>Current Season</label>
										<select class="form-control" id="current_season" onchange="nextsummary();">
										<option selected="selected" value="SUPER PEAK">SUPER PEAK</option>										
											
											<option value="SUPER PEAK">SUPER PEAK</option>
											<option value="PEAK">PEAK</option>
											<option value="LOW">LOW</option>
										</select>
								
				</div>
								
			</div>
			<div class="row"><input type="hidden" id="reservation">
                <div class="col-lg-2">
				
				</div>
			</div>
			
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Date</a>
                                </li>
                                <li id="detailtab" class="hidden"><a href="#detail" data-toggle="tab">Detail</a>
                                </li>
                                <li id="summarytab" class="hidden"><a href="#summary" data-toggle="tab">Summary</a>
                                </li>
                                <li id="paymenttab" class="hidden"><a href="#payment" data-toggle="tab">Payment</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
							<!-- Date tab-->
                                <div class="tab-pane fade in active" id="home">
                                    <br>
									
								 <div class="col-lg-12">
										
									<input type="hidden" id="number_of_rooms" value="1">
									<div class="panel-body">
										<div class="col-lg-12">
											<table id="reservation_date" class="table table-responsive table-hover">
												<thead>
													<tr>
														<th>Check In</th>
														<th>Check Out</th>
														<th>Good For</th>
														<th>Room</th>
													</tr>
												</thead>
												<tbody><tr>
												<td><input id="ci1" type="date" class="form-control"></td>
												<td><input id="co1" type="date" class="form-control"></td>
												<td>
												<select id="goodfor1" class="form-control" onchange="onchange_goodfor(this.value,1);">
									<option value=""></option>
						<option value="10">10</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>													</select></td>
												<td>
													<select class="form-control" id="room_selected1">
														
													</select>
												
												</td>
												
												</tr>
											</tbody></table>
											
											
											
										</div>
									</div>
											
								</div>
									

									<div class="col-lg-12">
										<center>
										<button type="button" class="btn btn-success btn-lg" onclick="addroom()"><i class="fa fa-plus fa-fw"></i>Add</button>
										<button type="button" class="btn btn-primary btn-lg" onclick="nextdetail()"><i class="fa fa-arrow-right fa-fw"></i>Next</button>
										
										</center>
									</div>
                                </div>