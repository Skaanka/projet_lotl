<div id="tabMembreInfo<?php echo $_SESSION['user']['id']?>" class="tab-pane fade in active">
	<div class="container-fluid">

		<div class="row media">
			<div class="col-md-12 espacementProfil">
				<div class="media-left media-middle col-md-3 col-md-offset-1">
					<img class="media-object img-circle" src="<?= $this->assetUrl('img/uploads/' .$_SESSION['user']['avatar'].'') ?>" alt="...">
				</div>
				<div class="media-body media-body-cheat col-md-6 col-md-offset-2">
					<h2 class="media-heading"><?php echo $_SESSION['user']['prenom']?><br><?php echo $_SESSION['user']['nom']?></h2>
					<h3 class="">Age: <?php echo DateTime::createFromFormat('Y-m-d', $_SESSION['user']['ddn'])->diff(new DateTime('now'))->y; ?></h3>
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
				<?php  //$portfolio['ad_portfolio'] ?>

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
							<td><?php echo $_SESSION['user']['infos']['annees_obt']?></td>
							<td><?php echo $_SESSION['user']['infos']['intitule']?></td>
							<td><?php echo $_SESSION['user']['infos']['ecole']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['annees_obt2']?></td>
							<td><?php echo $_SESSION['user']['infos']['intitule2']?></td>
							<td><?php echo $_SESSION['user']['infos']['ecole2']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['annees_obt3']?></td>
							<td><?php echo $_SESSION['user']['infos']['intitule3']?></td>
							<td><?php echo $_SESSION['user']['infos']['ecole3']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['annees_obt4']?></td>
							<td><?php echo $_SESSION['user']['infos']['intitule4']?></td>
							<td><?php echo $_SESSION['user']['infos']['ecole4']?></td>
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
							<td><?php echo $_SESSION['user']['infos']['periode_debut']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['periode_debut2']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin2']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie2']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste2']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['periode_debut3']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin3']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie3']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste3']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['periode_debut4']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin4']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie4']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste4']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['periode_debut5']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin5']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie5']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste5']?></td>
						</tr>
						<tr>
							<td><?php echo $_SESSION['user']['infos']['periode_debut6']?></td>
							<td><?php echo $_SESSION['user']['infos']['periode_fin6']?></td>
							<td><?php echo $_SESSION['user']['infos']['compagnie6']?></td>
							<td><?php echo $_SESSION['user']['infos']['poste6']?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="panel panel-default col-md-12">
				<div class="panel-body col-md-12">
					<h2><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;<u>Compétences: </u></h2><br>
					<p><?php echo $_SESSION['user']['infos']['competence']?></p>

				</div>
			</div>
		</div>



	</div>
</div>