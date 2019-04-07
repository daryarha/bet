<form method="post" action="<?php echo base_url('user/adding/'.true);?>">
		Choose your field:<br><br>
		<select id="category" name="category">
			<?php foreach ($category as $cat_item): ?>
				<?php ?>
			<option value="<?php echo $cat_item['id']; ?>"><?php echo $cat_item['nama']; ?><br><br>
				<?php endforeach; ?>
			</select>
			<br><br>
			<div id="debate">
				<br><br>
				<br><br>
				First Member<br>
				<input type="text" name="nama1" placeholder="Name"><br><br>
				<input type="email" name="email1" placeholder="E-mail"><br><br>
				<input type="text" name="no_telp1" placeholder="Phone"><br><br>
				<input type="text" name="alergi1" placeholder="Allergy"><br><br>
				Second Member<br>
				<input type="text" name="nama2" placeholder="Name"><br><br>
				<input type="email" name="email2" placeholder="E-mail"><br><br>
				<input type="text" name="no_telp2" placeholder="Phone"><br><br>
				<input type="text" name="alergi2" placeholder="Allergy"><br><br>
				Third Member<br>
				<input type="text" name="nama3" placeholder="Name"><br><br>
				<input type="email" name="email3" placeholder="E-mail"><br><br>
				<input type="text" name="no_telp3" placeholder="Phone"><br><br>
				<input type="text" name="alergi3" placeholder="Allergy"><br><br>
				<input type="submit" value="Submit biodata">
			</div>
			<div id="sns">
				<br><br>
				<br><br>
				<input type="text" name="nama" placeholder="Nama peserta"><br><br>
				<input type="email" name="email" placeholder="E-mail"><br><br>
				<input type="text" name="no_telp" placeholder="No. telepon"><br><br>
				<input type="text" name="alergi" placeholder="Alergi"><br><br>
				<input type="submit" value="Submit biodata">
			</div>
		</form>
		