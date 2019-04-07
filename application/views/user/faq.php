     <!-- Accordions & Tabs -->
    <section class="section-wrap">
      <div class="container">

        <h2 class="heading-line text-center">frequently asked question</h2>

        <div class="row mt-50">
          <?php foreach ($faq as $faq_item): ?>
          <div class="col-md-12">

            <div class="panel-group accordion" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#FAQ<?php echo $faq_item['id'];?>" class="plus"><?php echo $faq_item['question'];?><span>&nbsp;</span>
                  </a>
                </div>
                <div id="FAQ<?php echo $faq_item['id'];?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php echo $faq_item['answer'];?>
                  </div>
                </div>
              </div>
            </div>
           
          </div> <!-- end col -->

        <?php endforeach; ?>

         
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end accordions & tabs -->

