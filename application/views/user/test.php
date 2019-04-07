<?php print_r(array_values($debate))?>

  				<table class="table table-responsive table-hover">
				<thead>
					<tr>
						<th>Name Team</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Food Allergy</th>
						<th>Function</th>
					</tr>
				</thead>
				<tbody>
<?php foreach ($debate as $deb): ?>
				
					<tr>
						<td><?php echo $deb['nama_team']; ?></td>
						<td><?php echo $deb['nama_peserta1']; ?></td>
						<td><?php echo $deb['phone_peserta1']; ?></td>
						<td><?php echo $deb['alergi_peserta1']; ?> </td>
						<td><i class="fa fa-edit"></i> <a href="<?php echo base_url()."user/delete/".$deb['nama_peserta1']; ?>"><i class="fa fa-trash"></i></a></td>
					</tr><br>
					<tr>
						<td><?php echo $deb['nama_team']; ?></td>
						<td><?php echo $deb['nama_peserta1']; ?></td>
						<td><?php echo $deb['phone_peserta2']; ?></td>
						<td><?php echo $deb['alergi_peserta2']; ?> </td>
						<td><i class="fa fa-edit"></i> <a href="<?php echo base_url()."user/delete/".$deb['nama_peserta1']; ?>"><i class="fa fa-trash"></i></a></td>
					</tr><br>
					<tr>
						<td><?php echo $deb['nama_team']; ?></td>
						<td><?php echo $deb['nama_peserta3']; ?></td>
						<td><?php echo $deb['phone_peserta3']; ?></td>
						<td><?php echo $deb['alergi_peserta3']; ?> </td>
						<td><i class="fa fa-edit"></i> <a href="<?php echo base_url()."user/delete/".$deb['nama_peserta1']; ?>"><i class="fa fa-trash"></i></a></td>
					</tr><br>
					<?php endforeach; ?>
				</tbody>