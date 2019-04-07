<br><br>

						<?php $dataS=array($debate,$speech,$storytelling,$newscasting)?>
						<?php $total=0;?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel-group accordion" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="plus">Total registration fee<span>&nbsp;</span>
					</a>
				</div>
				<div id="collapseOne" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-hover table-aneh">
							<thead>
								<tr>
									<th>Competition Field</th>
									<th>Amount</th>
									<th>IDR</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($category as $cat_item): ?>
									<?php if($levelInstitution['id']==1 && $cat_item['id']==1){
										continue;
									};?>
								<?php if($cat_item['id']==1){
									$hargaCat=500000;
								}else{
									$hargaCat=275000;
								}?>
								<?php
								date_default_timezone_set('Asia/Jakarta');
								$today=getdate();
								if(($today['mon']==1 && $today['mday']<27)||($today['mon']==12 && $today['mday']>27)){
									$hargaCat+=0;
								}else if(($today['mon']==1 && $today['mday']>=27)||($today['mon']==2)){
									$hargaCat+=50000;
								}
								if($cat_item['id']==1){$team=3;}else{$team=1;}?>
								<tr>
									<td><?php echo $cat_item['nama'];?></td>
									<td><?php if(count($dataS[$cat_item['id']-1])==0){
												echo $jumlah = 0;
												if($cat_item['id']==1){
													echo " team";
												}else{
													echo " person";
												}
											}else{
												if($cat_item['id']==1){
													echo $jumlah = ceil($dataS[$cat_item['id']-1]['jumlah']);
												}else{
													echo $jumlah = ceil($dataS[$cat_item['id']-1][0]['jumlah']/$team);
												}
												
												if($cat_item['id']==1){
													echo " team";
												}else{
													echo " person";
												}
									}$total+=$jumlah*$hargaCat;?></td>
									<td><?php echo "Rp. ".number_format($hargaCat);?></td>
									<td><?php echo "Rp. ".number_format($jumlah*$hargaCat);?></td>
								</tr>
								<?php endforeach; ?>
								<tr>
									<td></td>
									<td></td>
									<td>Total</td>
									<td><?php echo "Rp. ".number_format($total);?></td>
									<br>
								</tr>
							</tbody>
						</table>
						</div>
					NB: This is not included debate waiting list<br>
						<center class="sub-judul">Payment deadline: 
						<?php 
							$date = new DateTime($tgl['tgl_daftar']);
							$date->modify('+3 day');
							echo $date->format('F j Y g:i A');?></center> 
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="plus">How to pay<span>&nbsp;</span>
				</a>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse">
				<center><div class="panel-body sub-judul2">
					You can transfer your registration fee to our account:<br><br>
					Bank  : Bank Rakyat Indonesia (BRI)<br>
					Account Number : 6590-01-027821-53-9<br>
					On Behalf of : Dwiyana Harini<br><br>
					NB: 
You have to complete the payment in 3x24 hours after submit. Failure to do so, <br> it means your slot is still unsecured and you have to repeat the registration from the beginning.<br>
						<br><center>Payment deadline: 
						<?php 
							$date = new DateTime($tgl['tgl_daftar']);
							$date->modify('+3 day');
							echo $date->format('F j Y g:i A');?></center>
				</div></center>

			</div>
		</div>
	</div>
	
	</div> <!-- end col -->
	
	</div> <!-- end row -->
	
</div>