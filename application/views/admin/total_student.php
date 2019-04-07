<br><br>
            <?php $dataS=array($countDebateHS,$countSpeechHS,$countStorytellingHS,$countNewscastingHS)?>
            <?php $dataSB=array($countDebateHSBayar,$countSpeechHSBayar,$countStorytellingHSBayar,$countNewscastingHSBayar)?>
            <?php $dataSBB=array($countDebateHSBelumBayar,$countSpeechHSBelumBayar,$countStorytellingHSBelumBayar,$countNewscastingHSBelumBayar)?>
            <?php $dataV=array(0,$countSpeechVar,$countStorytellingVar,$countNewscastingVar)?>
            <?php $dataVB=array(0,$countSpeechVarBayar,$countStorytellingVarBayar,$countNewscastingVarBayar)?>
            <?php $dataVBB=array(0,$countSpeechVarBelumBayar,$countStorytellingVarBelumBayar,$countNewscastingVarBelumBayar)?>
            <?php $total=0;?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel-group accordion" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="minus">Total participant student<span>&nbsp;</span>
          </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-hover table-aneh">
              <thead>
                <tr>
                  <th>Competition Field</th>
                  <th>Level</th>
                  <th>Amount</th>
                  <th>Remaining Slot</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($category as $cat_item): ?>
                <?php if($cat_item['id']==1){
                  $team=3;
                  $totalSlot=50;
                }else{
                  $totalSlot=30;
                }?>
                <tr>
                  <td><?php echo $cat_item['nama'];?></td>
                  <td><?php echo "Highschool";?></td>
                  <td><?php if(count($dataS[$cat_item['id']-1])==0){
                        echo $jumlah = 0;
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                      }else{
                        if($cat_item['id']==1){
                          echo $jumlah = ceil($dataS[$cat_item['id']-1][0]['jumlah']/$team);
                        }else{
                          echo $jumlah = ceil($dataS[$cat_item['id']-1][0]['jumlah']);
                        }
                        
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                  }$remaining=$totalSlot-$jumlah;?></td>
                  <td><?php echo $remaining;
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                        ?></td>
                </tr>
                <?php endforeach; ?>

                <?php foreach ($category as $cat_item): ?>
                <?php if($cat_item['id']==1){
                  continue;
                }$totalSlot=20;?>
                <tr>
                  <td><?php echo $cat_item['nama'];?></td>
                  <td><?php echo "Varsity";?></td>
                  <td><?php if(count($dataV[$cat_item['id']-1])==0){
                        echo $jumlah = 0;
                          echo " person";
                      }else{
                          echo $jumlah = ceil($dataV[$cat_item['id']-1][0]['jumlah']);
                          echo " person";
                  }$remaining=$totalSlot-$jumlah;?></td>
                  <td><?php echo $remaining;
                          echo " person";
                        ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  
      <div class="panel-group accordion" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="minus">Total participant status<span>&nbsp;</span>
          </a>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-hover table-aneh">
              <thead>
                <tr>
                  <th>Competition Field</th>
                  <th>Level</th>
                  <th>Total Paid</th>
                  <th>Total Not Yet Paid</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($category as $cat_item): ?>
                <?php if($cat_item['id']==1){
                  $team=3;
                  if(count($dataS[$cat_item['id']-1])!=0){
                        $jumlahTotal = $dataS[$cat_item['id']-1][0]['jumlah']/$team;
                  }
                }else{
                  if(count($dataS[$cat_item['id']-1])!=0){
                        $jumlahTotal = $dataS[$cat_item['id']-1][0]['jumlah'];
                  }
                }?>
                <tr>
                  <td><?php echo $cat_item['nama'];?></td>
                  <td><?php echo "Highschool";?></td>
                  <td><?php if($dataSB[$cat_item['id']-1]['jumlah']==0){
                        echo $jumlahBayar = 0;
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                      }else{
                        if($cat_item['id']==1){
                          echo $jumlahBayar = ceil($dataSB[$cat_item['id']-1]['jumlah']/$team);
                        }else{
                          echo $jumlahBayar = ceil($dataSB[$cat_item['id']-1]['jumlah']);
                        }
                        
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                  }?></td>
                  <td><?php 
                        if($cat_item['id']==1){
                          echo $jumlahBayar = ceil($dataSBB[$cat_item['id']-1]['jumlah']/$team);
                        }else{
                          echo $jumlahBayar = ceil($dataSBB[$cat_item['id']-1]['jumlah']);
                        }
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                        ?></td>
                </tr>
                <?php endforeach; ?>

                
                <?php foreach ($category as $cat_item): ?>
                  <?php
                  if($cat_item['id']==1){
                  continue;
                  }
                  if(count($dataV[$cat_item['id']-1])!=0){
                        $jumlahTotal = $dataV[$cat_item['id']-1][0]['jumlah'];
                  }
                ?>
                <tr>
                  <td><?php echo $cat_item['nama'];?></td>
                  <td><?php echo "Varsity";?></td>
                  <td><?php if($dataVB[$cat_item['id']-1]['jumlah']==0){
                        echo $jumlahBayar = 0;
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                      }else{
                        if($cat_item['id']==1){
                          echo $jumlahBayar = ceil($dataVB[$cat_item['id']-1]['jumlah']/$team);
                        }else{
                          echo $jumlahBayar = ceil($dataVB[$cat_item['id']-1]['jumlah']);
                        }
                        
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                  }?></td>
                  <td><?php 
                        if($cat_item['id']==1){
                          echo $jumlahBayar = ceil($dataVBB[$cat_item['id']-1]['jumlah']/$team);
                        }else{
                          echo $jumlahBayar = ceil($dataVBB[$cat_item['id']-1]['jumlah']);
                        }
                        if($cat_item['id']==1){
                          echo " team";
                        }else{
                          echo " person";
                        }
                        ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div> <!-- end col -->
  
  </div> <!-- end row -->
  
</div>