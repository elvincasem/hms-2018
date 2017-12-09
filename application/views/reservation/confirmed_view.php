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
          
                    <h2 class="page-header" style="color:#000; font-size: 20px;"><i class="fa fa-book fa-2x"></i>Confirmed Reservation</h2>
					
					
                          
               
			<?php //print_r($heidirectory);?>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover" style="color: black;">
                <thead>
                    <tr>
						<th>Status</th>
						<th>Packs</th>
						<th>Room Name</th>
						<th>Guest</th>
						<th>Check-In</th>
						<th>Check-Out</th>
						<th>Payment</th>
						<th>Action</th>
						
                    </tr>
                </thead>
                <tbody>
				
				<?php
				
				foreach ($confirm_list as $booking_details):
				
				
				//echo $studentname;
				
				echo "<tr>";
				//echo "<td><a href='".base_url()."scholar/profile/".$booking_main['transID']."'>".$booking_main['guestName']."</td>";
				echo "<td>".$booking_details['status']."</td>";
				echo "<td>".$booking_details['pax']."</td>";
				echo "<td>".$booking_details['roomNames']."</td>";
				echo "<td>".$booking_details['guests']."</td>";
				echo "<td>".$booking_details['checkin']."</td>";
				echo "<td>".$booking_details['checkout']."</td>";
				echo "<td>".$booking_details['amountpaid']."</td>";
				
				echo "<td><button onclick='deletecheck(".$booking_details['bdid'].");' type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></td></tr>";
				
				endforeach;
				
				?>
				
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