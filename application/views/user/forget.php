<br><br>
<div class="container">
<?php echo validation_errors(); ?>

<?php echo form_open('/forget/'); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-4"><input type="text" name="username" placeholder="Username"></div>
</div>

<center><button type="submit" class="btn btn-lg btn-blue">Forget</button></center><br>
Note: Fill your registered username.<br>
</form>
</div>


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