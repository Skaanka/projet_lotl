<div class="modal fade" id="myModalPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Poster une nouvelle actualitée.</h4>
			</div>
			<form action="<?= $this->url('postactu') ?>" method="POST">
				<div class="modal-body">
					<div class="container-fluid">
						<h1>Ma dernière actualité : </h1>
						<div class="panel panel-default">
							<div class="panel-body">
                                
								<p><?php echo $_SESSION['user']['statut'] ?></p>
							</div>
						</div>

						<textarea name="texte_actu" class="col-md-12" rows="10" placeholder="Votre nouvelle actu."></textarea>

					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					<button type="submit" name="actu" class="btn btn-primary">Sauvegarder</button>
				</div>
			</form>
		</div>

	</div>
</div>
