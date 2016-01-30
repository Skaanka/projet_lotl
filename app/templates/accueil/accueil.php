<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('navBar') ?>

<!-- Navbar Top-Screen-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Lord of the links</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<div class="navbar-form navbar-right">
                
                <!--interface admin-->
                <?php if ($_SESSION['user']['role'] === 'admin' ) { ?>
                <!-- Button trigger modal Admin -->
                <a href="<?php echo $this->url('administration'); ?>"><button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalAdmin">
                    Administration
                </button></a>
                <?php } elseif ($_SESSION['user']['role'] == 'membre') {echo "";}?>
                <!--interface admin-->
                
				<!-- Button trigger modal Profil -->
				<button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalProfil">
					Profil
				</button>

				<!-- Modal -->
                <?php require('partials/modal_profil.php') ?>



				<!-- Button trigger modal -->
				<button type="button" class="btn  btn-navbut" data-toggle="modal" data-target="#myModalPost">
					Post actu
				</button>

				<!-- Modal -->
				<?php require('partials/modal_postActu.php') ?>



				<a href="<?= $this->url("logout"); ?>"><button class="btn btn-navbut">Déconnexion</button></a>
			</div>
		</div><!--/.navbar-collapse -->
	</div>
</nav>
<!-- Fin Navbar Top-Screen-->
<?php $this->stop('navBar') ?>

<?php $this->start('carousel') ?>
<!--<div id="header" class="container-fluid no-padding"><img src="<?php echo $this->assetUrl('img/bandeau.jpg') ?>" alt="" class="img-reponsive col-xs-12 no-padding"></div>-->

<!-- Caroussel -->
<div id="wrapCar" class="col-md-8 col-md-offset-2">
	<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item text-center active">
				<h1>HELLO WORLD</h1>
				<p>Bienvenue sur Lord of the link</p>
				<div class="carousel-caption">

				</div>
			</div>
			<?php foreach ($fil_actus as $fil_actu) { ?>
            <?php //debug($membres);die(); ?>
            <?php if ($fil_actu['id'] != '1') { ?>
			<div class="item text-center">
				<h1>Nouveau chez <?php echo $fil_actu['prenom'] ?></h1>
				<p><?php echo $fil_actu['message'] ?></p>
				<div class="carousel-caption">

				</div>
			</div>
			<?php } ?>
			<?php } ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- Fin du caroussel -->
<?php $this->stop('carousel') ?>



<?php $this->start('main_content') ?>


<?php //debug($_SESSION['user']); ?> 

<div id="homeContent" class="row no-padding">

	<!-- Portfolio -->
	<section class="portfolio ">
		<div class="container">
			<div class="row">

				<!-- Début de la grille portfolio -->
				<ul class="portfolio-items list-unstyled" id="grid">

					<?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
					<?php //debug($membres);die();?>
                    <?php if ( $membre['validation_inscription'] == 'true' && $membre['nom'] != 'Sauron' && $membre['nom'] != $_SESSION['user']['nom']) { ?>

					<li class="row col-md-4 offset-1 " data-groups='["all", "<?php if (!empty($membre["psn"])) { echo 'psn'; } ?>", "<?php if (!empty($membre["xboxlive"])) { echo 'xbox'; } ?>", "<?php if (!empty($membre["steam"])) { echo 'steam'; } ?>", "<?php if (!empty($membre["battlenet"])) { echo 'battle'; }?>", "<?php if (!empty($membre["compte_nintendo"])) { echo 'nintendo'; } ?>", "<?php if (!empty($membre["origin"])) { echo 'origin'; } ?>", "<?php if (!empty($membre["linkedin"])) { echo 'linkedin'; } ?>", "<?php if (!empty($membre["viadeo"])) { echo 'viadeo'; } ?>", "<?php if (!empty($membre["xing"])) { echo 'xing'; } ?>", "<?php if (!empty($membre["muxi"])) { echo 'muxy'; } ?>", "<?php if (!empty($membre["github"])) { echo 'github'; } ?>", "<?php if (!empty($membre["facebook"])) { echo 'facebook'; } ?>", "<?php if (!empty($membre["twitter"])) { echo 'twitter'; } ?>", "<?php if (!empty($membre["youtube"])) { echo 'youtube'; } ?>", "<?php if (!empty($membre["google"])) { echo 'google+'; } ?>", "<?php if (!empty($membre["skype"])) { echo 'skype'; } ?>", "<?php if (!empty($membre["instagram"])) { echo 'instagram'; } ?>", "<?php if (!empty($membre["pinterest"])) { echo 'pinterest'; } ?>", "<?php if (!empty($membre["deezer"])) { echo 'deezer'; } ?>", "<?php if (!empty($membre["spotify"])) { echo 'spotify'; } ?>", "<?php if (!empty($membre["viber"])) { echo 'viber'; } ?>"]'>
						<figure class="portfolio-items">
							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $membre['id']?>">

								<!-- contenue de image-->
								<div class=" vignette">
									<div class="row inside" >

										<img src="<?= $this->assetUrl("img/uploads/" . $membre["avatar"] . "")?>" class="avatar img-circle col-md-4 col-sm-4 col-xs-4"  alt="Item 1">


										<!-- fin contenue image  / début lettrage -->
										<div class="espacement col-md-5 col-sm-5 col-xs-4">
											<h3 classe="row col-md-4 offset-2"><?php echo $membre['prenom']?> <?php echo $membre['nom']?></h3>
											<div class="row"><?php echo $membre['citation']?></div>

										</div>
									</div><br>
								</div>
								<!-- fin letrrage  -->
							</a>
						</figure>
					</li>


					<!-- Modal -->
					<?php require('partials/modal_profilMembres.php') ?>

					<?php } ?>
					<?php } ?>
					<!-- sizer -->
					<li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

				</ul> <!--end portfolio grid -->
			</div> <!--end row -->
		</div> <!-- end container-->
	</section>
</div>	
<?php $this->stop('main_content') ?>