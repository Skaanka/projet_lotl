<div id="tabMembreDiv<?php echo $_SESSION['user']['id']?>" class="tab-pane fade">
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
							<?php echo $_SESSION['user']['infos']['psn']?>
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
							<?php echo $_SESSION['user']['infos']['xboxlive']?>
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
							<?php echo $_SESSION['user']['infos']['steam']?>
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
							<?php echo $_SESSION['user']['infos']['battlenet']?>
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
							<?php echo $_SESSION['user']['infos']['origin']?>
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
							<?php echo $_SESSION['user']['infos']['compte_nintendo']?>
						</div>
					</div>



				</div>
			</div>
		</div>

	</div>
</div>