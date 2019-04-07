    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/rev-slider.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>



  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
<script type="text/javascript" language="javascript" src="
https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
		//opsi 1
			$cat= $('#category').val();
			if ($cat==1) {
		$("#debate").css("display", "block");
		$("#sns").css("display", "none");
			}else{
		$("#debate").css("display", "none");
		$("#sns").css("display", "block");
			}
		$('#category').on("change", function(){
			$cat= $('#category').val();
			if ($cat==1) {
		$("#debate").css("display", "block");
		$("#sns").css("display", "none");
			}else{
		$("#debate").css("display", "none");
		$("#sns").css("display", "block");
			}
		});

		
    $('#data').DataTable();
		</script>
</body>
</html>