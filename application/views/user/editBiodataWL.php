<br><br>
<div class="container">
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('user/edit/'.$peserta2.'/'.$category['id']); ?>
	<center><p class="judul"><?php echo $category['nama'];?> Waiting List Delegation<br> Edit Biodata</p></center><br>
		<input type="text" name="category" id="category" value="<?php echo $category['id']?>" style="display:none;">

		<div id="debate">
				<input type="text" name="id1" placeholder="Id" value="<?php echo $peserta['id_peserta1'];?>" style="display: none;">
				<input type="text" name="id2" placeholder="Id" value="<?php echo $peserta['id_peserta2'];?>" style="display: none;">
				<input type="text" name="id3" placeholder="Id" value="<?php echo $peserta['id_peserta3'];?>" style="display: none;">
			<p class="sub-judul">First Member</p><br>
			
				<input type="text" name="nama1" placeholder="Full Name" value="<?php echo $peserta['nama_peserta1'];?>">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp1" placeholder="Phone" value="<?php echo $peserta['phone_peserta1'];?>"></div>
				<div class="col-md-6"><input type="text" name="alergi1" placeholder="Food Allergy" value="<?php echo $peserta['alergi_peserta1'];?>"></div>
			</div>
			<p class="sub-judul">Second Member</p><br>
			<input type="text" name="nama2" placeholder="Full Name" value="<?php echo $peserta['nama_peserta2'];?>">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp2" placeholder="Phone" value="<?php echo $peserta['phone_peserta2'];?>"></div>
				<div class="col-md-6"><input type="text" name="alergi2" placeholder="Food Allergy" value="<?php echo $peserta['alergi_peserta2'];?>"></div>
			</div>
			<p class="sub-judul">Third Member</p><br>
			<input type="text" name="nama3" placeholder="Full Name" value="<?php echo $peserta['nama_peserta3'];?>">
			<div class="row">
				<div class="col-md-6"><input type="text" name="no_telp3" placeholder="Phone" value="<?php echo $peserta['phone_peserta3'];?>"></div>
				<div class="col-md-6"><input type="text" name="alergi3" placeholder="Food Allergy" value="<?php echo $peserta['alergi_peserta3'];?>"></div>
			</div>

				<center><input type="file" name="foto3"/>Upload your team student card photo.<br>If you are not changing student card photo please do not upload twice.</center><br><br><br>
				*Take photo of the three student card member in one photo.
			<center><button type="submit" class="btn btn-lg btn-blue">Save Changes</button></center>
		</div>
	</form>
	<br><br>
	</div>