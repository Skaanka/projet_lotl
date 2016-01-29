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
			<form class="navbar-form navbar-right" method="post">

				<!-- Button trigger modal Profil -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalProfil">
					Profil
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModalProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Mon profil</h4>
							</div>
							<div class="modal-body">

								<!-- Début des onglets dans le modal consultation des profil membres -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a data-toggle="tab" href="#tabMembreInfo<?php //echo $_SESSION['user']['id']?>">Infos</a></li>
									<li><a data-toggle="tab" href="#tabMembreDiv<?php //echo $_SESSION['user']['id']?>">Divertissements</a></li>
									<li><a data-toggle="tab" href="#tabMembrePro<?php //echo $_SESSION['user']['id']?>">Réseaux Pro.</a></li>
									<li><a data-toggle="tab" href="#tabMembreSoc<?php //echo $_SESSION['user']['id']?>">Réseaux Soc.</a></li>
								</ul>
								<!-- Fin des onglets -->


								<!-- Contenu des onglets -->
								<div class="tab-content">

									<!-- info -->
									<div id="tabMembreInfo<?php //echo $_SESSION['user']['id']?>" class="tab-pane fade in active">
										<div class="container-fluid">

											<div class="row media">
												<div class="col-md-12 espacementProfil">
													<div class="media-left media-middle col-md-3 col-md-offset-1">
														<img class="media-object img-circle" src="<?= $this->assetUrl('img/uploads/' .$_SESSION['user']['avatar'].'') ?>" alt="...">
													</div>
													<div class="media-body media-body-cheat col-md-6 col-md-offset-2">
														<h2 class="media-heading"><?php echo $_SESSION['user']['prenom']?><br><?php echo $_SESSION['user']['nom']?></h2>
														<h3 class="">Age: <?= $_SESSION['user']['ddn'] ?></h3>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="panel panel-default col-md-12">
													<div class="panel-body col-md-12">
														<div class="col-md-6">
															<p>Adresse : <?php echo $_SESSION['user']['adresse']?></p>
															<p>Code postal : <?php echo $_SESSION['user']['cp']?></p>
															<p>Ville : <?php echo $_SESSION['user']['ville']?></p>
														</div>
														<div class="col-md-6">
															<p>Email: <?php echo $_SESSION['user']['mail']?></p>
															<p>Telephone: <?php echo $_SESSION['user']['phone']?></p>
															<p>Site Web: <?php echo $_SESSION['user']['siteWeb']?></p>
														</div>
													</div>




													<?php //echo $_SESSION['user']['ad_portfolio']?> <!-- portfolio --> <!-- il faut connecter la table wuser à la table portfolios -->
													<?php echo $portfolio['ad_portfolio'] ?>

													<?php //echo $_SESSION['user']['message']?> <!-- fil d'actu --> <!-- il faut connecter la table wuser à la table fil_actus -->
													<?php // echo $fil_actus['message'] ?> <!-- ajouter le fil_actus dans la fenêtre modale post actu-->
													<?php //debug($fil_actus);die(); ?>
													
												</div>
											</div>

											<div class="row">
												<div class="panel panel-default col-md-12">
													<div class="panel-body col-md-12">
														<h2><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp;<u>Diplomes: </u></h2><br>
														<table class="table">
															<tr>
																<td><b>Années <br>d'obtention</b></td>
																<td><b>Intitulé</b></td>
																<td><b>Ecole</b></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['annees_obt']?></td>
																<td><?php echo $_SESSION['user']['intitule']?></td>
																<td><?php echo $_SESSION['user']['ecole']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['annees_obt2']?></td>
																<td><?php echo $_SESSION['user']['intitule2']?></td>
																<td><?php echo $_SESSION['user']['ecole2']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['annees_obt3']?></td>
																<td><?php echo $_SESSION['user']['intitule3']?></td>
																<td><?php echo $_SESSION['user']['ecole3']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['annees_obt4']?></td>
																<td><?php echo $_SESSION['user']['intitule4']?></td>
																<td><?php echo $_SESSION['user']['ecole4']?></td>
															</tr>
														</table>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="panel panel-default col-md-12">
													<div class="panel-body col-md-12">
														<h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp; <u>Experiences Professionnelles: </u></h2><br>
														<table class="table">
															<tr>
																<td><b>Début</b></td>
																<td><b>Fin</b></td>
																<td><b>Compagnie</b></td>
																<td><b>Poste</b></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut']?></td>
																<td><?php echo $_SESSION['user']['periode_fin']?></td>
																<td><?php echo $_SESSION['user']['compagnie']?></td>
																<td><?php echo $_SESSION['user']['poste']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut2']?></td>
																<td><?php echo $_SESSION['user']['periode_fin2']?></td>
																<td><?php echo $_SESSION['user']['compagnie2']?></td>
																<td><?php echo $_SESSION['user']['poste2']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut3']?></td>
																<td><?php echo $_SESSION['user']['periode_fin3']?></td>
																<td><?php echo $_SESSION['user']['compagnie3']?></td>
																<td><?php echo $_SESSION['user']['poste3']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut4']?></td>
																<td><?php echo $_SESSION['user']['periode_fin4']?></td>
																<td><?php echo $_SESSION['user']['compagnie4']?></td>
																<td><?php echo $_SESSION['user']['poste4']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut5']?></td>
																<td><?php echo $_SESSION['user']['periode_fin5']?></td>
																<td><?php echo $_SESSION['user']['compagnie5']?></td>
																<td><?php echo $_SESSION['user']['poste5']?></td>
															</tr>
															<tr>
																<td><?php echo $_SESSION['user']['periode_debut6']?></td>
																<td><?php echo $_SESSION['user']['periode_fin6']?></td>
																<td><?php echo $_SESSION['user']['compagnie6']?></td>
																<td><?php echo $_SESSION['user']['poste6']?></td>
															</tr>
														</table>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="panel panel-default col-md-12">
													<div class="panel-body col-md-12">
														<h2><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;<u>Compétences: </u></h2><br>
														<p><?php echo $_SESSION['user']['competence']?></p>

													</div>
												</div>
											</div>



										</div>
									</div><!-- Fin contenu onglet info -->


									<!-- Divertissements -->
									<div id="tabMembreDiv<?php //echo $_SESSION['user']['id']?>" class="tab-pane fade">
										<div class="container-fluid">

											<h3 class="text-center espacementProfil">Vous trouverez ici les plate-formes de jeux en ligne que <?php echo $_SESSION['user']['prenom']?> utilise.</h3>

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
																<?php echo $_SESSION['user']['psn']?>
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
																<?php echo $_SESSION['user']['xboxlive']?>
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
																<?php echo $_SESSION['user']['steam']?>
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
																<?php echo $_SESSION['user']['battlenet']?>
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
																<?php echo $_SESSION['user']['origin']?>
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
																<?php echo $_SESSION['user']['compte_nintendo']?>
															</div>
														</div>



													</div>
												</div>
											</div>

										</div>
									</div><!-- Fin contenu onglet divertissements -->


									<!-- Pro -->
									<div id="tabMembrePro<?php //echo $_SESSION['user']['id']?>" class="tab-pane fade">
										<div class="container-fluid">

											<h3 class="text-center espacementProfil">Vous trouverez ici les réseaux professionnel que <?php echo $_SESSION['user']['prenom']?> utilise.</h3>

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
																<?php echo $_SESSION['user']['linkedin']?>
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
																<?php echo $_SESSION['user']['viadeo']?>
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
																<?php echo $_SESSION['user']['xing']?>
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
																<?php echo $_SESSION['user']['muxi']?>
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
																<?php echo $_SESSION['user']['github']?>
															</div>
														</div>

													</div>
												</div>
											</div>

										</div>
									</div>


									<!-- Sociaux -->
									<div id="tabMembreSoc<?php //echo $_SESSION['user']['id']?>" class="tab-pane fade">
										<div class="container-fluid">

											<h3 class="text-center espacementProfil">Vous trouverez ici les réseaux sociaux que <?php echo $_SESSION['user']['prenom']?> utilise.</h3>

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
																<?php echo $_SESSION['user']['facebook']?>
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
																<?php echo $_SESSION['user']['twitter']?>
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
																<?php echo $_SESSION['user']['youtube']?>
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
																<?php echo $_SESSION['user']['google']?>
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
																<?php echo $_SESSION['user']['skype']?>
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
																<?php echo $_SESSION['user']['instagram']?>
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
																<?php echo $_SESSION['user']['pinterest']?>
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
																<?php echo $_SESSION['user']['spotify']?>
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
																<?php echo $_SESSION['user']['deezer']?>
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
																<?php echo $_SESSION['user']['viber']?>
															</div>
														</div>

													</div>
												</div>
											</div>

										</div>
									</div><!-- Fin du contenu onglet réseaux sociaux -->
								</div>


							</div>
							<form method="post">
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								<button type="submit" name="modifier" class="btn btn-primary" formaction="<?php echo $this->url('modif_profil1') ?>">Modifier</button>
							</div>
							</form>
						</div>
					</div>
				</div>



				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalPost">
					Post actu
				</button>

				<!-- Modal -->

				<div class="modal fade" id="myModalPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Poster une nouvelle actualitée.</h4>
							</div>

							<div class="modal-body">
								<div class="container-fluid">

									<textarea class="col-md-12" rows="10" placeholder="Votre nouvelle actu."></textarea>

								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								<button type="submit" name="actu" class="btn btn-primary">Sauvegarder</button>
							</div>

						</div>

					</div>
				</div>



				<input type="submit" class="btn btn-success" name="deconnexion" value="déconnexion" formaction="<?= $this->url("logout")  ?>">
			</form>
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


<?php //debug($_SESSION['user']); ?> 

<div id="homeContent" class="row no-padding">

	<!-- Portfolio -->
	<section class="portfolio ">
		<div class="container">
			<div class="row">

				<!-- Début de la grille portfolio -->
				<ul class="portfolio-items list-unstyled" id="grid">


					<?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
					<?php //debug($membres);//die();?>

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




														<?php echo $membre['ad_portfolio']?> <!-- portfolio -->

														<?php echo $membre['message']?> <!-- fil d'actu -->
													</div>
												</div>

												<div class="row">
													<div class="panel panel-default col-md-12">
														<div class="panel-body col-md-12">
															<h2><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp;<u>Diplomes: </u></h2><br>
															<table class="table">
																<tr>
																	<td><b>Années <br>d'obtention</b></td>
																	<td><b>Intitulé</b></td>
																	<td><b>Ecole</b></td>
																</tr>
																<tr>
																	<td><?php echo $membre['annees_obt']?></td>
																	<td><?php echo $membre['intitule']?></td>
																	<td><?php echo $membre['ecole']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['annees_obt2']?></td>
																	<td><?php echo $membre['intitule2']?></td>
																	<td><?php echo $membre['ecole2']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['annees_obt3']?></td>
																	<td><?php echo $membre['intitule3']?></td>
																	<td><?php echo $membre['ecole3']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['annees_obt4']?></td>
																	<td><?php echo $membre['intitule4']?></td>
																	<td><?php echo $membre['ecole4']?></td>
																</tr>
															</table>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="panel panel-default col-md-12">
														<div class="panel-body col-md-12">
															<h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp; <u>Experiences Professionnelles: </u></h2><br>
															<table class="table">
																<tr>
																	<td><b>Début</b></td>
																	<td><b>Fin</b></td>
																	<td><b>Compagnie</b></td>
																	<td><b>Poste</b></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut']?></td>
																	<td><?php echo $membre['periode_fin']?></td>
																	<td><?php echo $membre['compagnie']?></td>
																	<td><?php echo $membre['poste']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut2']?></td>
																	<td><?php echo $membre['periode_fin2']?></td>
																	<td><?php echo $membre['compagnie2']?></td>
																	<td><?php echo $membre['poste2']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut3']?></td>
																	<td><?php echo $membre['periode_fin3']?></td>
																	<td><?php echo $membre['compagnie3']?></td>
																	<td><?php echo $membre['poste3']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut4']?></td>
																	<td><?php echo $membre['periode_fin4']?></td>
																	<td><?php echo $membre['compagnie4']?></td>
																	<td><?php echo $membre['poste4']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut5']?></td>
																	<td><?php echo $membre['periode_fin5']?></td>
																	<td><?php echo $membre['compagnie5']?></td>
																	<td><?php echo $membre['poste5']?></td>
																</tr>
																<tr>
																	<td><?php echo $membre['periode_debut6']?></td>
																	<td><?php echo $membre['periode_fin6']?></td>
																	<td><?php echo $membre['compagnie6']?></td>
																	<td><?php echo $membre['poste6']?></td>
																</tr>
															</table>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="panel panel-default col-md-12">
														<div class="panel-body col-md-12">
															<h2><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;<u>Compétences: </u></h2><br>
															<p><?php echo $membre['competence']?></p>

														</div>
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