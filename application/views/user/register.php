<br><br>
<div class="container">

<?php echo validation_errors(); ?>

<?php echo form_open('registration/'); ?>
<p class="sub-judul">User</p>
<div class="row">
	<div class="col-md-6"><input type="text" name="username" placeholder="Username"></div>
	<div class="col-md-6"><input type="password" name="password" placeholder="Password"></div>
</div>
<div class="row">
	<div class="col-md-6"><input type="email" name="email" placeholder="Email"></div>
	<div class="col-md-6"><input type="text" name="phone" placeholder="Representative's contact"></div>
</div>
<p class="sub-judul">School/Institution</p>
<div class="row">
	<div class="col-md-6"><input type="text" name="nama_institusi" placeholder="School/Institution"></div>
	<div class="col-md-6"><input type="text" name="alamat_institusi" placeholder="School/Institution address"></div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<?php foreach ($level as $level_item): ?>
<div class="col-md-2"><input type="radio" name="id_lvl" value="<?php echo $level_item['id']; ?>">   <?php echo $level_item['nama']; ?></div>
<?php endforeach; ?>
</div>
<br>
<p class="sub-judul">Advisor</p>
If there is no advisor to accompany at D-Day, please kindly skip the next three columns.<br><br>
<input type="text" name="pendamping" placeholder="Total number of advisor">

<div class="row">
	<div class="col-md-6">
<input type="text" name="nama_pendamping" placeholder="Advisor's name"></div>
	<div class="col-md-6"><input type="text" name="kontak_pendamping" placeholder="Advisor's contact"></div>
</div>
If there are more than 1 advisor, please separate it with comma(,)<br><br>

            <center><button type="submit" class="btn btn-lg btn-blue">Register</button></center><br>
Note: One account school/institution can be used to register for more than one competition. 
</form>
</div>
<br><br>

<script type="text/javascript">
	// 	tambah();
	// 	function tambah(){
	// 		var x  = $("#kategori").val();
	// 		var i=0
 //        	document.getElementById("peserta").innerHTML = "";
	// if(x=="1"){
	//      for (i=0;i<3;i++)
 //        {
 //            document.getElementById("peserta").innerHTML += 
 //            "<input type=text name=nama placeholder=Nama><br><br><input type=email name=email placeholder=E-mail><br><br><input type=text name=no_telp placeholder=Telepon><br><br>"
 //        }
	// }else{
 //            document.getElementById("peserta").innerHTML += 
 //            "<input type=text name=nama placeholder=Nama><br><br><input type=email name=email placeholder=E-mail><br><br><input type=text name=no_telp placeholder=Telepon><br><br>"
        
	// 	};
	// }
</script>