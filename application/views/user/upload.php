<br>
<div class="container">
<center>
	<p class="sub-judul">Choose your receipt photo.</p><br>
	<?php echo $error;?>

<?php echo form_open_multipart('user/do_upload');?>

<input type="file" name="foto" id="foto"/>

<br /><br />
NB: Please make sure your team biodata is right before uploading, <br>
because you cannot add, edit, delete biodata after upload receipt.<br>
    <br>
    <button type="submit" class="btn btn-sm btn-blue">Upload</button>
</form>
</center>
</div>