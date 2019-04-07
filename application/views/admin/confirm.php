<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-responsive table-hover table-aneh" id="data">
							<thead>
								<tr>
									<th>No.</th>
									<th>Username</th>
									<th>Institution</th>
									<th>Email</th>
									<th>Advisor's Name</th>
									<th>Phone</th>
									<th>Status Upload Receipt</th>
									<th>Receipt</th>
									<th>Status Confirmation</th>
									<th>Register Date</th>
									<th>Function</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;?>
							<?php foreach ($confirm as $cn): ?>
								<tr>
									<td><?php echo $n?></td>
									<td><?php echo $cn['username']?></td>
									<td><?php echo $cn['nama_institusi']?></td>
									<td><?php echo $cn['email']?></td>
									<td><?php echo $cn['nama_pendamping']?></td>
									<td><?php echo $cn['phone']?></td>
									<td><?php if($cn['upload']==0){?>
										 <span class="text-red">Not yet</span>
									<?php }else{ ?>
										<span class="text-green">Uploaded</span>
									<?php } ?></td>
									<td><img src="<?php echo base_url()?>uploads/receipt/<?php echo $cn['url_foto']?>" class="img-sc"></td>
									<td><?php if($cn['konfirmasi']==0){?>
										 <span class="text-red">Not yet</span>
									<?php }else{ ?>
										<span class="text-green">Confirmed</span>
									<?php } ?></td>
									<td><?php echo $cn['tgl_daftar'];?></td>
									<td><a data-toggle="modal" data-target="#modals<?php echo $cn['id'];?>">Confirm</a></td>

							<div class="modal fade" id="modals<?php echo $cn['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $cn['id']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header modal-header2">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title modal-title2" id="modalName<?php echo $cn['id']; ?>">Confirming this username.</h4>
										</div>
										<div class="modal-body modal-body2">
											Are you sure want to confirm this username?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."admin/confirming/".$cn['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-primary">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
								</tr>
								<?php $n++;?>
							<?php endforeach;?>
							</tbody>
						</table>
	
	</div> <!-- end col -->
	
	</div> <!-- end row -->
	
</div>