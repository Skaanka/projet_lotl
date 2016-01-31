<div class="modal fade" id="myModal<?php echo $membre['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel<?php echo $membre['id']?>">Le profil de <?php echo $membre['prenom']?> <?php echo $membre['nom']?>.</h4>
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
					<?php require('profilMembres/info.php') ?>


					<!-- Divertissements -->
					<?php require('profilMembres/divertissements.php') ?>
					<!-- Fin contenu onglet divertissements -->


					<!-- Pro -->
					<?php require('profilMembres/pro.php') ?>


					<!-- Sociaux -->
					<?php require('profilMembres/sociaux.php') ?>
					<!-- Fin du contenu onglet réseaux sociaux -->
				</div>
				<!-- Fin du contenu des onglets -->

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div> <!-- Fin de modal -->
