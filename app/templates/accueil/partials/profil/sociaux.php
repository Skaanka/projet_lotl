<div id="tabMembreSoc<?php echo $_SESSION['user']['id']?>" class="tab-pane fade">
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
																<?php echo $_SESSION['user']['infos']['facebook']?>
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
																<?php echo $_SESSION['user']['infos']['twitter']?>
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
																<?php echo $_SESSION['user']['infos']['youtube']?>
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
																<?php echo $_SESSION['user']['infos']['google']?>
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
																<?php echo $_SESSION['user']['infos']['skype']?>
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
																<?php echo $_SESSION['user']['infos']['instagram']?>
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
																<?php echo $_SESSION['user']['infos']['pinterest']?>
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
																<?php echo $_SESSION['user']['infos']['spotify']?>
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
																<?php echo $_SESSION['user']['infos']['deezer']?>
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
																<?php echo $_SESSION['user']['infos']['viber']?>
															</div>
														</div>

													</div>
												</div>
											</div>

										</div>
									</div>