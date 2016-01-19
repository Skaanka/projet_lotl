<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('main_content') ?>
<div id="homeContent" class="row col-md-12 no-padding">
    <section class="portfolio container-fluid">
      <div class="container">
        <div class="row">

          <ul class="portfolio-items list-unstyled" id="grid">

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["psn"]'>
              <figure class="portfolio-item">
                <a href="#">
                  <img src="http://lorempixel.com/700/400/people/1" alt="Item 1" class="img-responsive">
                </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["steam", "psn"]'>
                <figure class="portfolio-item">
                    <a href="#">
                        <img src="http://lorempixel.com/700/400/people/7" alt="" class="img-responsive">
                    </a>
                </figure>
            </li>

           <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["youtube"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/1" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["pinterest"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/2" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons", "people"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/1" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/3" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
                <figure class="portfolio-item">
                    <a href="#">
                        <img src="http://lorempixel.com/700/400/people/9" alt="" class="img-responsive">
                    </a>
                </figure>
            </li>

             <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/4" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>

            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/5" alt="" class="img-responsive">
                  </a>
              </figure>
            </li>
            <!-- sizer -->
            <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>
            
          </ul> <!--end portfolio grid -->
          </div> <!--end row -->
        </div> <!-- end container-->
    </section>
</div>	
<?php $this->stop('main_content') ?>