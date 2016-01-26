<?php $this->layout('layout', ['title' => 'accueil']) ?>

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
			<div class="item text-center">
				<h1>Nouveau chez <?php echo $fil_actu['prenom'] ?></h1>
				<p><?php echo $fil_actu['message'] ?></p>
				<div class="carousel-caption">

				</div>
			</div>
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

<div id="homeContent" class="row no-padding"> 

	<!-- Portfolio -->
	<section class="portfolio ">
		<div class="container">
			<div class="row">

				<!-- Début de la grille portfolio -->
				<ul class="portfolio-items list-unstyled" id="grid">


					<?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
					<?php //debug($membres);//die();?>
					<!-- Première vignette  -->
					<!--<li class="vignette col-md-4 col-sm-6 col-xs-7 col-md-offset-0 col-sm-offset-3 col-xs-offset-2" data-groups='["all", "<?php if (!empty($membre["psn"])) { echo 'psn'; } ?>", "<?php if (!empty($membre["xboxlive"])) { echo 'xbox'; } ?>", "<?php if (!empty($membre["steam"])) { echo 'steam'; } ?>", "<?php if (!empty($membre["battlenet"])) { echo 'battle'; }?>", "<?php if (!empty($membre["compte_nintendo"])) { echo 'nintendo'; } ?>", "<?php if (!empty($membre["origin"])) { echo 'origin'; } ?>", "<?php if (!empty($membre["linkedin"])) { echo 'linkedin'; } ?>", "<?php if (!empty($membre["viadeo"])) { echo 'viadeo'; } ?>", "<?php if (!empty($membre["xing"])) { echo 'xing'; } ?>", "<?php if (!empty($membre["muxi"])) { echo 'muxy'; } ?>", "<?php if (!empty($membre["github"])) { echo 'github'; } ?>", "<?php if (!empty($membre["facebook"])) { echo 'facebook'; } ?>", "<?php if (!empty($membre["twitter"])) { echo 'twitter'; } ?>", "<?php if (!empty($membre["youtube"])) { echo 'youtube'; } ?>", "<?php if (!empty($membre["google"])) { echo 'google+'; } ?>", "<?php if (!empty($membre["skype"])) { echo 'skype'; } ?>", "<?php if (!empty($membre["instagram"])) { echo 'instagram'; } ?>", "<?php if (!empty($membre["pinterest"])) { echo 'pinterest'; } ?>", "<?php if (!empty($membre["deezer"])) { echo 'deezer'; } ?>", "<?php if (!empty($membre["spotify"])) { echo 'spotify'; } ?>", "<?php if (!empty($membre["viber"])) { echo 'viber'; } ?>"]'>
						<div class="outerBox">
							<a href="#" id="innerBoxA" class="innerBoxA" data-toggle="modal" data-target="#myModal<?php echo $membre['id']?>">
								<div class="chat">
									<img class="media-object chatchat img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
								</div>
								<div class="innerBox">
									<div class="chatcontent">
										<h3 class="text-center"><?php echo $membre['prenom']?> <?php echo $membre['nom']?></h3>
										<p><?php echo $membre['citation']?></p>
									</div> 
								</div>
							</a>
						</div>
					</li>-->

					<li class="row col-md-4 offset-1 " data-groups='["all", "<?php if (!empty($membre["psn"])) { echo 'psn'; } ?>", "<?php if (!empty($membre["xboxlive"])) { echo 'xbox'; } ?>", "<?php if (!empty($membre["steam"])) { echo 'steam'; } ?>", "<?php if (!empty($membre["battlenet"])) { echo 'battle'; }?>", "<?php if (!empty($membre["compte_nintendo"])) { echo 'nintendo'; } ?>", "<?php if (!empty($membre["origin"])) { echo 'origin'; } ?>", "<?php if (!empty($membre["linkedin"])) { echo 'linkedin'; } ?>", "<?php if (!empty($membre["viadeo"])) { echo 'viadeo'; } ?>", "<?php if (!empty($membre["xing"])) { echo 'xing'; } ?>", "<?php if (!empty($membre["muxi"])) { echo 'muxy'; } ?>", "<?php if (!empty($membre["github"])) { echo 'github'; } ?>", "<?php if (!empty($membre["facebook"])) { echo 'facebook'; } ?>", "<?php if (!empty($membre["twitter"])) { echo 'twitter'; } ?>", "<?php if (!empty($membre["youtube"])) { echo 'youtube'; } ?>", "<?php if (!empty($membre["google"])) { echo 'google+'; } ?>", "<?php if (!empty($membre["skype"])) { echo 'skype'; } ?>", "<?php if (!empty($membre["instagram"])) { echo 'instagram'; } ?>", "<?php if (!empty($membre["pinterest"])) { echo 'pinterest'; } ?>", "<?php if (!empty($membre["deezer"])) { echo 'deezer'; } ?>", "<?php if (!empty($membre["spotify"])) { echo 'spotify'; } ?>", "<?php if (!empty($membre["viber"])) { echo 'viber'; } ?>"]'>
						<figure class="portfolio-items">
							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $membre['id']?>">

								<!-- contenue de image-->
								<div class=" vignette">
									<div class="row inside" >

										<img src="<?= $this->assetUrl('img/cat.jpg')?>" class="avatar img-circle col-md-4 col-sm-4 col-xs-4"  alt="Item 1">


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






					<!-- ANCIEN MODELE DE VIGNETTE -->
					<!--<li class="vignette col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube", "psn"]'>
<div id="vign">
<figure class="portfolio-item">
<a href="#" data-toggle="modal" data-target="#myModal">
<div class="media no-padding">
<div class="media-left media-middle">
<img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
</div>

<div class="media-body">
<div class="modal_content">
<h3 class="media-heading text-center">François GUILLERME</h3> 
<p>Je vais te donner 10 p'tites secondes, pour bouger ton gros cul dégueulasse...</p>
</div>
</div>
</div>
</a>
</figure>
</div>
</li> -->


					<!-- Modal -->
					<div class="modal fade" id="myModal<?php echo $membre['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Le profil de <?php echo $membre['prenom']?> <?php echo $membre['nom']?>.</h4>
								</div>
								<div class="modal-body">

									<!-- Début des onglets dans le modal consultation des profil membres -->
									<ul class="nav nav-tabs" role="tablist">
										<li class="active"><a data-toggle="tab" href="#tabMembreInfo<?php echo $membre['id']?>">Infos</a></li>
										<li><a data-toggle="tab" href="#tabMembreDiv<?php echo $membre['id']?>">Divertissements</a></li>
										<li><a data-toggle="tab" href="#tabMembrePro<?php echo $membre['id']?>">Réseaux Pro.</a></li>
										<li><a data-toggle="tab" href="#tabMembreSoc<?php echo $membre['id']?>">Réseaux Soc.</a></li>
									</ul>
									<!-- Fin des onglets -->


									<!-- Contenu des onglets -->
									<div class="tab-content">

										<!-- info -->
										<div id="tabMembreInfo<?php echo $membre['id']?>" class="tab-pane fade in active">
											<div class="container-fluid">

												<div class="row media">
													<div class="col-md-12 espacementProfil">
														<div class="media-left media-middle col-md-3 col-md-offset-1">
															<img class="media-object img-circle" src="<?= $this->assetUrl('img/Avatar-512.png') ?>" alt="...">
														</div>
														<div class="media-body media-body-cheat col-md-6 col-md-offset-2">
															<h2 class="media-heading"><?php echo $membre['prenom']?><br><?php echo $membre['nom']?></h2>
															<h3 class="">Age: Beaucoup trop</h3>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="panel panel-default col-md-12">
														<div class="panel-body col-md-12">
															<div class="col-md-6">
																<p>Adresse : <?php echo $membre['adresse']?></p>
																<p>Code postal : <?php echo $membre['cp']?></p>
																<p>Ville : <?php echo $membre['ville']?></p>
															</div>
															<div class="col-md-6">
																<p>Email: <?php echo $membre['mail']?></p>
																<p>Telephone: <?php echo $membre['phone']?></p>
																<p>Site Web: <?php echo $membre['siteWeb']?></p>
															</div>
														</div>
														<?php echo $membre['competence']?>

														<?php echo $membre['annees_obt']?>
														<?php echo $membre['intitule']?>
														<?php echo $membre['ecole']?>

														<?php echo $membre['annees_obt2']?>
														<?php echo $membre['intitule2']?>
														<?php echo $membre['ecole2']?>

														<?php echo $membre['annees_obt3']?>
														<?php echo $membre['intitule3']?>
														<?php echo $membre['ecole3']?>

														<?php echo $membre['annees_obt4']?>
														<?php echo $membre['intitule4']?>
														<?php echo $membre['ecole4']?>


														<?php echo $membre['periode_debut']?>
														<?php echo $membre['periode_fin']?>
														<?php echo $membre['compagnie']?>
														<?php echo $membre['poste']?>

														<?php echo $membre['periode_debut2']?>
														<?php echo $membre['periode_fin2']?>
														<?php echo $membre['compagnie2']?>
														<?php echo $membre['poste2']?>

														<?php echo $membre['periode_debut3']?>
														<?php echo $membre['periode_fin3']?>
														<?php echo $membre['compagnie3']?>
														<?php echo $membre['poste3']?>

														<?php echo $membre['periode_debut4']?>
														<?php echo $membre['periode_fin4']?>
														<?php echo $membre['compagnie4']?>
														<?php echo $membre['poste4']?>

														<?php echo $membre['periode_debut5']?>
														<?php echo $membre['periode_fin5']?>
														<?php echo $membre['compagnie5']?>
														<?php echo $membre['poste5']?>

														<?php echo $membre['periode_debut6']?>
														<?php echo $membre['periode_fin6']?>
														<?php echo $membre['compagnie6']?>
														<?php echo $membre['poste6']?>

														<?php echo $membre['ad_portfolio']?> <!-- portfolio -->

														<?php echo $membre['message']?> <!-- fil d'actu -->
													</div>
												</div>

											</div>
										</div><!-- Fin contenu onglet info -->


										<!-- Divertissements -->
										<div id="tabMembreDiv<?php echo $membre['id']?>" class="tab-pane fade">
											<div class="container-fluid">

												<h3 class="text-center espacementProfil">Vous trouverez ici les plate-formes de jeux en ligne que <?php echo $membre['prenom']?> utilise.</h3>

												<div class="panel panel-default col-md-12 espacementProfil">
													<div class="panel-body">
														<div class="row">

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>PSN</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/PSN_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['psn']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>XboxLive</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['xboxlive']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Steam</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['steam']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Battle.net</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['battlenet']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Origin</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['origin']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Nintendo</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/Nintendo_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['compte_nintendo']?>
																</div>
															</div>



														</div>
													</div>
												</div>

											</div>
										</div><!-- Fin contenu onglet divertissements -->


										<!-- Pro -->
										<div id="tabMembrePro<?php echo $membre['id']?>" class="tab-pane fade">
											<div class="container-fluid">

												<h3 class="text-center espacementProfil">Vous trouverez ici les réseaux professionnel que <?php echo $membre['prenom']?> utilise.</h3>

												<div class="panel panel-default col-md-12 espacementProfil">
													<div class="panel-body">
														<div class="row">

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>LinkedIn</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['linkedin']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Viadéo</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['viadeo']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Xing</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['xing']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Muxi</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['muxi']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>GitHub</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/github_logo.jpg') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['github']?>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>


										<!-- Sociaux -->
										<div id="tabMembreSoc<?php echo $membre['id']?>" class="tab-pane fade">
											<div class="container-fluid">

												<h3 class="text-center espacementProfil">Vous trouverez ici les réseaux sociaux que <?php echo $membre['prenom']?> utilise.</h3>

												<div class="panel panel-default col-md-12 espacementProfil">
													<div class="panel-body">
														<div class="row">

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Facebook</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/FB_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['facebook']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Twitter</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/Twitter-logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['twitter']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Youtube</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/YouTube-logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['youtube']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Google+</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/googleplus_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['google']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Skype</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/skype_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['skype']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Instagram</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/instagram_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['instagram']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Pinterest</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/pinterest-logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['pinterest']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Spotify</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/spotify_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['spotify']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Deezer</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/deezer_logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['deezer']?>
																</div>
															</div>

															<div class="col-md-6 affichageLiens">
																<div class="col-md-10 col-md-offset-2">
																	<h4>Viber</h4>
																</div>
																<div class="col-md-2">
																	<img src="<?= $this->assetUrl('img/icons/viber-logo.png') ?>" class="iconeMembre">
																</div>
																<div class="well well-sm col-md-8">
																	<?php echo $membre['viber']?>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div><!-- Fin du contenu onglet réseaux sociaux -->
									</div>
									<!-- Fin du contenu des onglets -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div> <!-- Fin de modal -->

					<?php } ?>
					<!-- sizer -->
					<li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

				</ul> <!--end portfolio grid -->
			</div> <!--end row -->
		</div> <!-- end container-->
	</section>
</div>	
<?php $this->stop('main_content') ?>