
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
<!--  Row -->
	
	<div class="row">
                            
                                <!-- END Menu Block -->

                                
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <!-- Tickets Block -->
                                <div class="block">
                                    <!-- Tickets Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#tickets-list">Voucher List</a></li>
                                           
                                        </ul>
                                    </div>
                                    <!-- END Tickets Title -->

                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <!-- Tickets List -->
                                        <div class="tab-pane active" id="tickets-list">
                                            <div class="block-content-full">
                                                <div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom" id="batchvouchertable">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">DV No.</th>
                                                                <th>Name</th>
                                                                <th>Semester</th>
                                                                <th>SY</th>
                                                                <th class="text-center">Amount</th>
                                                                <th class="text-center"><i class="fa fa-flash"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                          <?php
						foreach ($voucher_list as $vlist):
						
						
						//echo "<option value='".$stype['typecode']."'>".$stype['typedescription']."</option>";
						
						endforeach;
					?>                                       
                                                           
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- END Tickets List -->
					<!-- start batch list -->
					<div class="tab-pane" id="batch-list">
                                            <div class="block-content-full">
                                                <div class="table-responsive remove-margin-bottom">
                                                    <table class="table table-striped table-vcenter remove-margin-bottom" id="batchvouchertable">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Batch #</th>
                                                                <th  class="text-center">Date</th>
                                                                <th class="text-center">Count</th>
                                                                <th class="text-center"><i class="fa fa-flash"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                        <?php
						foreach ($voucher_batch as $vblist):
						
						echo "<tr>";
						echo "<td class='text-center'>".$vblist['batch']."</td>";
						echo "<td class='text-center'>".$vblist['voucherdate']."</td>";
						echo "<td class='text-center'>".$vblist['batchcount']."</td>";
						echo "<td class='text-center'><a href='batchvoucher/batch/".$vblist['batch']."' data-toggle='tooltip' title='View Voucher' class='btn btn-effect-ripple btn-sm btn-primary' ><i class='fa fa-eye'></i></a></td>";
						echo "</tr>";
						
						endforeach;
					?>                                           
                                                           
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
					<!-- end batch list -->
                                    </div>
                                    <!-- END Tabs Content -->
                                </div>
                                <!-- END Tickets Block -->
                            </div>
                        </div>
                        <!-- END Tickets Content -->		

			
<!-- end row-->

		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->
<input type="hidden" id="lastvoucherid">

