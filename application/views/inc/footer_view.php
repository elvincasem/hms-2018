        </div>
        <!-- END Page Wrapper -->
		
	  <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="<?=base_url()?>/public/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="<?=base_url()?>/public/js/vendor/bootstrap.min.js"></script>
		
		<!-- Load and execute javascript code used only in this page -->
		<script src="<?=base_url()?>public/js/pages/uiTables.js"></script>
		<script>$(function(){ UiTables.init(); });</script>
		

		
        <script src="<?=base_url()?>/public/js/plugins.js"></script>
        <script src="<?=base_url()?>/public/js/app.js"></script>

		<!-- Load and execute javascript code used only in this page -->
        <script src="<?=base_url()?>/public/js/pages/readyDashboard.js"></script>
       
		
		<script src="<?=base_url()?>/public/js/custom.js"></script>
		
		<script src="<?=base_url()?>/public/js/pages/uiWidgets.js"></script>
		
		<!-- Load and execute javascript code used only in this page -->
        <script src="<?=base_url()?>/public/js/pages/uiWidgets.js"></script>
        <script>$(function () {
			UiWidgets.init();
		});</script>
		
		
		
 
       <?php
		if($title=='Welcome'){
			echo "<script>startwidget();</script>";
			echo " <script>$(function(){ ReadyDashboard.init(); });</script>";
		}
		?>
    </body>
</html>