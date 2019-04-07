<br><br>
<div class="container">


<?php echo validation_errors(); ?>

<?php echo form_open_multipart('user/addwl/'.$category['id'].'/'.true); ?>
	<center><p class="judul"><?php echo $category['nama'];?> competition waiting list registration</p></center><br>
		<input type="text" name="category" id="category" value="<?php echo $category['id']?>" style="display:none;">
		<?php if($category['id']==1){ ?>
		<div id="debate">
			<p class="sub-judul">First Member</p><br>
			
				<input type="text" name="nama1" placeholder="Full Name">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp1" placeholder="Phone"></div>
				<div class="col-md-6"><input type="text" name="alergi1" placeholder="Food Allergy"></div>
			</div>
			<p class="sub-judul">Second Member</p><br>
			<input type="text" name="nama2" placeholder="Full Name">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp2" placeholder="Phone"></div>
				<div class="col-md-6"><input type="text" name="alergi2" placeholder="Food Allergy"></div>
			</div>
			<p class="sub-judul">Third Member</p><br>
			<input type="text" name="nama3" placeholder="Full Name">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp3" placeholder="Phone"></div>
				<div class="col-md-6"><input type="text" name="alergi3" placeholder="Food Allergy"></div>
			</div>

				<center><input type="file" name="foto3"/>Upload your team student card photo.</center><br><br><br>
				*Take photo of the three student card member in one photo.
			<center><button type="submit" class="btn btn-lg btn-blue">Register</button></center>
		</div>
		<?php }else{ ?>
		<div id="sns">
			<div class="row">
				<div class="col-md-6"><input type="text" name="nama" placeholder="Full Name"></div>
				<div class="col-md-6"><input type="file" name="foto"/>Upload your student card photo.</div>
			</div>
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp" placeholder="Phone"></div>
				<div class="col-md-6"><input type="text" name="alergi" placeholder="Food Allergy"></div>
			</div>
			<center><button type="submit" class="btn btn-lg btn-blue">Register</button></center>
		</div>
		<?php } ?>
	</form>
	<br><br>
	</div>
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
	</script>