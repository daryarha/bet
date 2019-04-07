<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-responsive table-hover table-aneh" id="data">
							<thead>
								<tr>
									<th>No.</th>
									<th>Username</th>
									<th>Participant Name</th>
									<th>Institution</th>
									<th>Competition Field</th>
									<th>Food Allergy</th>
									<th>Student Card</th>
									<th>Paid Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;?>
							<?php foreach ($studentcard as $sc): ?>
								<tr>
									<td><?php echo $n?></td>
									<td><?php echo $sc['username']?></td>
									<td><?php echo $sc['nama_peserta']?></td>
									<td><?php echo $sc['nama_institusi']?></td>
									<td><?php echo $sc['nama']?></td>
									<td><?php echo $sc['alergi']?></td>
									<td><img src="<?php echo base_url()?>uploads/sc/<?php echo $sc['url_sc']?>" class="img-sc"></td>
									<td><?php if($sc['upload']==0){?>
										 <span class="text-red">Not yet</span>
									<?php }else{ ?>
										<span class="text-green">Paid</span>
									<?php } ?></td>
								</tr>
								<?php $n++;?>
							<?php endforeach;?>
							</tbody>
						</table>
	
	</div> <!-- end col -->
	
	</div> <!-- end row -->
	
</div>