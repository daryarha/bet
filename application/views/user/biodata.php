<section class="section-wrap">
	<div class="container">		
		<div class="row">

			<div class="col-md-12">
				<div class="panel-group accordion" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseRNR" class="minus">RULES AND REGULATION<span>&nbsp;</span>
					</a>
				</div>
				<div id="collapseRNR" class="panel-collapse collapse in">
					<center><div class="panel-body sub-judul2">
						Debate:<br>
						<a href="http://bet.ub.ac.id/download/DEBATE-RNR.pdf">bet.ub.ac.id/download/DEBATE-RNR.pdf</a><br>
						Speech:<br>
						<a href="http://bet.ub.ac.id/download/SPEECH-RNR.pdf">bet.ub.ac.id/download/SPEECH-RNR.pdf</a><br>
						Newscasting:<br>
						<a href="http://bet.ub.ac.id/download/NEWSCASTING-RNR.pdf">bet.ub.ac.id/download/NEWSCASTING-RNR.pdf</a><br>
						Storytelling:<br>
						<a href="http://bet.ub.ac.id/download/STORYTELLING-RNR.pdf">bet.ub.ac.id/download/STORYTELLING-RNR.pdf</a><br>
					</div></center>
				</div>
			</div>
		</div>
	</div>

			<div class="col-md-12">
				<div class="panel-group accordion" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapsePrepared" class="minus">PREPARED MOTION/TOPICS/SCRIPTS<span>&nbsp;</span>
					</a>
				</div>
				<div id="collapsePrepared" class="panel-collapse collapse in">
					<center><div class="panel-body sub-judul2">
						Debate:<br>
						<a href="http://bet.ub.ac.id/download/Debate-Prepared-Motion.pdf">bet.ub.ac.id/download/Debate-Prepared-Motion.pdf</a><br>
						Speech:<br>
						<a href="http://bet.ub.ac.id/download/Speech-Prepared-Topics.pdf">bet.ub.ac.id/download/Speech-Prepared-Topics.pdf</a><br>
						Storytelling:<br>
						<a href="http://bet.ub.ac.id/download/Storytelling-Preparation-Guide-Highschool.pdf">bet.ub.ac.id/download/Storytelling-Preparation-Guide-Highschool.pdf</a><br>
						<a href="http://bet.ub.ac.id/download/Storytelling-Preparation-Guide-Varsity.pdf">bet.ub.ac.id/download/Storytelling-Preparation-Guide-Varsity.pdf</a><br>
						Newscasting:<br>
						<a href="http://bet.ub.ac.id/download/Newscasting-Prepared-News-Script-Highschool.pdf">bet.ub.ac.id/download/Newscasting-Prepared-News-Script-Highschool.pdf</a><br>
						<a href="http://bet.ub.ac.id/download/Newscasting-Prepared-News-Script-And-Weather-Forecast-Varsity.pdf">bet.ub.ac.id/download/Newscasting-Prepared-News-Script-And-Weather-Forecast-Varsity.pdf</a><br>
					</div></center>
				</div>
			</div>
		</div>
	</div>
		<?php
		if($upload[0]['upload']==1){?>
				<?php
				if($upload[0]['konfirmasi']==1){?>
			<div class="col-md-12">
				<div class="panel-group accordion" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseCongrats" class="minus">CONGRATULATION !!!<span>&nbsp;</span>
					</a>
				</div>
				<div id="collapseCongrats" class="panel-collapse collapse in">
					<center><div class="panel-body sub-judul2">
						Congratulation you are successfully registered as participants of BET 2018, yay!!<br>
						Good luck for your competition, hope you learn something useful as participants.<br>
						See you in Malang.<br><br>
						The capicity to learn is a <i>gift</i>,<br>
						The ability to learn is a <i>skill</i>,<br>
						The willingness to learn is a <i>choice</i>,<br>
						- Brian Herbert
					</div></center>
				</div>
			</div>
		</div>
	</div>
			<?php }else{?>
			<div class="col-md-12">
				<div class="panel-group accordion" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseUpload" class="minus">ANNOUNCEMENT !!!<span>&nbsp;</span>
						</a>
					</div>
					<div id="collapseUpload" class="panel-collapse collapse in">
						<center><div class="panel-body sub-judul2">
							
							Your registration is completed! <br>
							Please wait a confirmation from admin to make sure your slot is secured. <br>
							The confirmation will be sent to the email you have registered.<br>
							NB: If you haven’t received any confirmation email from the admin in 1 x 24 hour,<br>
							please kindly contact our contact person immediately.<br>
							Contact Person:<br>
							Farhan (WA & Line: 085645260460)<br>
							Marisa (WA & Line: 081249629223)<br>
						</div></center>
					</div>
				</div>
		</div>
	</div>
	<?php }?>
<?php } ?>
</div>
<h2 class="heading-line text-center">Team Biodata</h2>
<div class="row mt-50">
	<div class="col-md-12">
		<div class="panel-group accordion" id="accordion">
			<?php foreach ($category as $cat_item): ?>
			<?php if($levelInstitution['id']==1 && $cat_item['id']==1){
				continue;
			};?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cat_item['id']; ?>" class="plus"><?php echo $cat_item['nama']; ?><span>&nbsp;</span>
				</a>
			</div>
			<div id="collapse<?php echo $cat_item['id']; ?>" class="panel-collapse collapse">
				<div class="panel-body">
					
					<?php if($cat_item['id']==1){?>
					<?php if($debate!=null){?>
					<?php if($upload[0]['upload']!=1){?>Add more delegation, <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }?>
					<br><center class="sub-judul2"><b>Main List</b></center>
					<div class="table-responsive">
						<table class="table table-hover">
						<thead>
							<tr>
								<th>Team Name</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Food Allergy</th>
					<?php if($upload[0]['upload']!=1){?>
								<th>Function</th>
								<?php }?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($debate as $deb): ?>
							
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta1']; ?></td>
								<td><?php echo $deb['phone_peserta1']; ?></td>
								<td><?php echo $deb['alergi_peserta1']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$deb['id_peserta1']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta1']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta2']; ?></td>
								<td><?php echo $deb['phone_peserta2']; ?></td>
								<td><?php echo $deb['alergi_peserta2']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$deb['id_peserta2']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta2']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta3']; ?></td>
								<td><?php echo $deb['phone_peserta3']; ?></td>
								<td><?php echo $deb['alergi_peserta3']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$deb['id_peserta3']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta3']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>

							<div class="modal fade" id="modal<?php echo $deb['id_peserta1']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta1']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta1']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$deb['id_peserta1']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="modal<?php echo $deb['id_peserta2']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta2']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta1']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$deb['id_peserta2']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>


							<div class="modal fade" id="modal<?php echo $deb['id_peserta3']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta3']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta3']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$deb['id_peserta3']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>
					
					<?php if($countDebateWL['jumlah']!=0){?>
					<br><center class="sub-judul2"><b>Waiting List</b></center>
					<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Team Name</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Food Allergy</th>
					<?php if($upload[0]['upload']!=1){?>
								<th>Function</th>
								<?php }?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($debatewl as $deb): ?>
							
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta1']; ?></td>
								<td><?php echo $deb['phone_peserta1']; ?></td>
								<td><?php echo $deb['alergi_peserta1']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/editwl/".$deb['id_peserta1']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta1']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta2']; ?></td>
								<td><?php echo $deb['phone_peserta2']; ?></td>
								<td><?php echo $deb['alergi_peserta2']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/editwl/".$deb['id_peserta2']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta2']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<tr>
								<td><?php echo $deb['nama_team'];?></td>
								<td><?php echo $deb['nama_peserta3']; ?></td>
								<td><?php echo $deb['phone_peserta3']; ?></td>
								<td><?php echo $deb['alergi_peserta3']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/editwl/".$deb['id_peserta3']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a><a type="button" data-toggle="modal" data-target="#modal<?php echo $deb['id_peserta3']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>

							<div class="modal fade" id="modal<?php echo $deb['id_peserta1']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta1']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta1']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/deletewl/".$deb['id_peserta1']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="modal<?php echo $deb['id_peserta2']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta2']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta1']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/deletewl/".$deb['id_peserta2']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>


							<div class="modal fade" id="modal<?php echo $deb['id_peserta3']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $deb['id_peserta3']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $deb['id_peserta3']; ?>">Deleting debate delegation!</h4>
										</div>
										<div class="modal-body">
											Deleting one person from debate, it means deleting the whole team.<br>
											Are you sure still want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/deletewl/".$deb['id_peserta3']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>
					<?php }?>
					<?php }else{?>
					<?php if($upload[0]['upload']!=1){?>
					There's no delegation for this competition yet, add your delegation by <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }}
					}else if($cat_item['id']==2){
					if($speech!=null){?>
					<?php if($countSpeech[0]['jumlah']<2 && $upload[0]['upload']!=1){?>Add more delegation, <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }?>
					<div class="table-responsive">
						 <table class="table table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Food Allergy</th>
					<?php if($upload[0]['upload']!=1){?>
								<th>Function</th>
								<?php }?>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($speech as $spe): ?>
							<tr>
								<td><?php echo $spe['nama_peserta']; ?></td>
								<td><?php echo $spe['phone']; ?></td>
								<td><?php echo $spe['alergi']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$spe['id']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a> <a type="button" data-toggle="modal" data-target="#modal<?php echo $spe['id']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<div class="modal fade" id="modal<?php echo $spe['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $spe['id']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $spe['id']; ?>">Deleting delegation data!</h4>
										</div>
										<div class="modal-body">
											Are you sure want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$spe['id']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>
					<?php }else{?>
					<?php if($upload[0]['upload']!=1){?>
					There's no delegation for this competition yet, add your delegation by <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }}
					}else if($cat_item['id']==3){
					if($storytelling!=null){?>
					<?php if($upload[0]['upload']!=1){?>Add more delegation, <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }?>
					<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Food Allergy</th>
					<?php if($upload[0]['upload']!=1){?>
								<th>Function</th>
								<?php }?>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($storytelling as $stortel): ?>
							<tr>
								<td><?php echo $stortel['nama_peserta']; ?></td>
								<td><?php echo $stortel['phone']; ?></td>
								<td><?php echo $stortel['alergi']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$stortel['id']."/".$cat_item['id'];  ?>"><i class="fa fa-edit"></i></a> <a type="button" data-toggle="modal" data-target="#modal<?php echo $stortel['id']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<div class="modal fade" id="modal<?php echo $stortel['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $stortel['id']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $stortel['id']; ?>">Deleting delegation data!</h4>
										</div>
										<div class="modal-body">
											Are you sure want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$stortel['id']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div><?php }else{?>
					<?php if($upload[0]['upload']!=1){?>
					There's no delegation for this competition yet, add your delegation by <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }}
					}else{
					if($newscasting!=null){?>
					<?php if($upload[0]['upload']!=1){?>Add more delegation, <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }?>
					<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Food Allergy</th>
					<?php if($upload[0]['upload']!=1){?>
								<th>Function</th>
								<?php }?>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($newscasting as $news): ?>
							<tr>
								<td><?php echo $news['nama_peserta']; ?></td>
								<td><?php echo $news['phone']; ?></td>
								<td><?php echo $news['alergi']; ?> </td>
					<?php if($upload[0]['upload']!=1){?>
								<td><a href="<?php echo base_url()."user/edit/".$news['id']."/".$cat_item['id']; ?>"><i class="fa fa-edit"></i></a> <a type="button" data-toggle="modal" data-target="#modal<?php echo $news['id']; ?>"><i class="fa fa-trash"></i></a></td>
								<?php }?>
							</tr>
							<div class="modal fade" id="modal<?php echo $news['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalName<?php echo $news['id']; ?>">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="modalName<?php echo $news['id']."/".$cat_item['id']; ?>">Deleting delegation data!</h4>
										</div>
										<div class="modal-body">
											Are you sure want to delete this delegation?
										</div>
										<div class="modal-footer">
											<form action="<?php echo base_url()."user/delete/".$news['id']."/".$cat_item['id']; ?>">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-sm btn-danger">Yes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div><?php }else{?>
					<?php if($upload[0]['upload']!=1){?>
					There's no delegation for this competition yet, add your delegation by <a href="<?php echo base_url('user/add/'.$cat_item['id'].'/'.true);?>">click here.</a>
					<?php }}}?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	
	</div> <!-- end col -->
	
	</div> <!-- end row -->
	</div> <!-- end container -->
	</section> <!-- end accordions & tabs -->
	<br><br>