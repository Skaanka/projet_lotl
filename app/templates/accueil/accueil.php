<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('main_content') ?>
<div id="homeContent" class="row col-md-12 no-padding">
	<section class="portfolio container-fluid">
		<div class="container">
			<div class="row">


				<h1></h1>
				<ul class="portfolio-items list-unstyled" id="grid">

					<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
						<figure class="portfolio-item">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<div class="media no-padding">
									<div class="media-left media-middle">
										<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
									</div>
									<div class="media-body">
										<h4 class="media-heading">Prenom NOM</h4>
										<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
									</div>
								</div>
							</a>
						</figure>
					</li>


					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Modal title</h4>
								</div>
								<div class="modal-body">
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>


					<!--<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["psn"]'>
<figure class="portfolio-item">
<a href="#">
<div class="media no-padding">
<div class="media-left media-middle">

<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">

</div>
<div class="media-body">
<h4 class="media-heading">Prenom NOM</h4>
<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</a>
</figure>
</li>

<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["psn", "xbox"]'>
<figure class="portfolio-item">
<a href="#">
<div class="media no-padding">
<div class="media-left media-middle">
<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
</div>
<div class="media-body">
<h4 class="media-heading">Prenom NOM</h4>
<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</a>
</figure>
</li>

<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube", "psn"]'>
<figure class="portfolio-item">
<a href="#">
<div class="media no-padding">
<div class="media-left media-middle">
<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
</div>
<div class="media-body">
<h4 class="media-heading">Prenom NOM</h4>
<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</a>
</figure>
</li>

<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
<figure class="portfolio-item">
<a href="#">
<div class="media no-padding">
<div class="media-left media-middle">
<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
</div>
<div class="media-body">
<h4 class="media-heading">Prenom NOM</h4>
<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</a>
</figure>
</li>

<li class="col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
<figure class="portfolio-item">
<a href="#">
<div class="media no-padding">
<div class="media-left media-middle">
<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
</div>
<div class="media-body">
<h4 class="media-heading">Prenom NOM</h4>
<p>Citation Blablablablaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</a>
</figure>
</li>-->


					<!-- sizer -->
					<li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

				</ul> <!--end portfolio grid -->
			</div> <!--end row -->
		</div> <!-- end container-->
	</section>
</div>	
<?php $this->stop('main_content') ?>