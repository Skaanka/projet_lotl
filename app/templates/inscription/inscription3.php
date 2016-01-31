<?php $this->layout('layout_home', ['title' => 'inscription - partie 3']) ?>

<?php $this->start('main_content') ?>



<div class="inscript_back">
<div id="wrapper" class="wrappInscr container">
	<form method="POST" class="col-md-12">  

		<div class="col-md-offset-0 text-center">
			<h1 class="title_inscipt">Réseaux Sociaux</h1><br/>
		</div>


		<div class="col-md-10 col-md-offset-1 espacement2">

			<div class=""><h3>Divertissement</h3></div>


			<div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3 img-responsive" src="<?= $this->assetUrl('img/icons/PSN_logo.png') ?>">
						<div class="col-md-8">
							<label for="psn" class="col-md-2 control-label celSoc">PSN</label>
							<input type="text" class="col-md-8 form-control celSoc" id="psn" placeholder="Identifiant Playstation Network" name="reseaux_divertissement[psn]" value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['psn'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['psn']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3 img-responsive" src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>">
						<div class="col-md-8">
							<label for="xbox" class="col-md-2 control-label celSoc">XboxLive</label>
							<input type="text" class="col-md-8 form-control celSoc" id="xbox" placeholder="Identifiant XboxLive" name="reseaux_divertissement[xboxlive]" value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['xboxlive'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['xboxlive']); } ?>">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>">
						<div class="col-md-8">
							<label for="steam" class="col-md-2 control-label celSoc">Steam</label>
							<input type="text" class="col-md-8 form-control celSoc" id="steam" placeholder="Identifiant Steam" name="reseaux_divertissement[steam]" value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['steam'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['steam']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>">
						<div class="col-md-8">
							<label for="battlenet" class="col-md-2 control-label celSoc">Battle.net</label>
							<input type="text" class="col-md-8 form-control celSoc" id="battlenet" placeholder="Identifiant Battle.net" name="reseaux_divertissement[battlenet]"  value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['battlenet'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['battlenet']); } ?>">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/nintendo_logo.png') ?>">
						<div class="col-md-8">
							<label for="nintendo" class="col-md-2 control-label celSoc">Nintendo</label>
							<input type="text" class="form-control celSoc" id="nintendo" placeholder="Identifiant Nintendo" name="reseaux_divertissement[compte_nintendo]" value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['compte_nintendo'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['compte_nintendo']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>">
						<div class="col-md-8">
							<label for="origin" class="col-md-2 control-label celSoc">Origin</label>
							<input type="text" class="form-control celSoc" id="origin" placeholder="Identifiant Origin" name="reseaux_divertissement[origin]" value="<?php if (!empty($_SESSION['reseaux_divertissementInsc']['origin'])) { echo $this->e($_SESSION['reseaux_divertissementInsc']['origin']); } ?>">
						</div>
					</div>
				</div>
			</div>

		</div>

        
        
		<div class="col-md-10 col-md-offset-1 espacement2">

			<div class=""><h3>Réseaux Pro.</h3></div>

            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>">
						<div class="col-md-8">
							<label for="linkedin" class="col-md-2 control-label celSoc">LinkedIn</label>
							<input type="text" class="form-control celSoc" id="linkedin" placeholder="LikedIn" name="reseaux_pro[linkedin]" value="<?php if (!empty($_SESSION['reseaux_proInsc']['linkedin'])) { echo $this->e($_SESSION['reseaux_proInsc']['linkedin']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>">
						<div class="col-md-8">
							<label for="viadeo" class="col-md-2 control-label celSoc">Viadeo</label>
							<input type="text" class="form-control celSoc" id="viadeo" placeholder="Viadeo" name="reseaux_pro[viadeo]" value="<?php if (!empty($_SESSION['reseaux_proInsc']['viadeo'])) { echo $this->e($_SESSION['reseaux_proInsc']['viadeo']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>">
						<div class="col-md-8">
							<label for="xing" class="col-md-2 control-label celSoc">Xing</label>
							<input type="text" class="form-control celSoc" id="xing" placeholder="Xing" name="reseaux_pro[xing]" value="<?php if (!empty($_SESSION['reseaux_proInsc']['xing'])) { echo $this->e($_SESSION['reseaux_proInsc']['xing']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>">
						<div class="col-md-8">
							<label for="muxy" class="col-md-2 control-label celSoc">Muxy</label>
							<input type="text" class="form-control celSoc" id="muxy" placeholder="Muxy" name="reseaux_pro[muxi]" value="<?php if (!empty($_SESSION['reseaux_proInsc']['muxi'])) { echo $this->e($_SESSION['reseaux_proInsc']['muxi']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/github_logo.png') ?>">
						<div class="col-md-8">
							<label for="github" class="col-md-2 control-label celSoc">GitHub</label>
							<input type="text" class="form-control celSoc" id="github" placeholder="github" name="reseaux_pro[github]" value="<?php if (!empty($_SESSION['reseaux_proInsc']['github'])) { echo $this->e($_SESSION['reseaux_proInsc']['github']); } ?>">
						</div>
					</div>
				</div>
			</div>
                        
		</div>

        
        
		<div class="col-md-10 col-md-offset-1 espacement2">

			<div class=""><h3>Réseaux Sociaux</h3></div>

            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/FB_logo.png') ?>">
						<div class="col-md-8">
							<label for="facebook" class="col-md-2 control-label celSoc">Facebook</label>
							<input type="text" class="form-control celSoc" id="facebook" placeholder="Facebook" name="reseaux_social[facebook]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['facebook'])) { echo $this->e($_SESSION['reseaux_socialInsc']['facebook']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Twitter-logo.png') ?>">
						<div class="col-md-8">
							<label for="Twitter" class="col-md-2 control-label celSoc">Twitter</label>
							<input type="text" class="form-control celSoc" id="twitter" placeholder="Twitter" name="reseaux_social[twitter]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['twitter'])) { echo $this->e($_SESSION['reseaux_socialInsc']['twitter']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/YouTube-logo.png') ?>">
						<div class="col-md-8">
							<label for="youtube" class="col-md-2 control-label celSoc">YouTube</label>
							<input type="text" class="form-control celSoc" id="youtube" placeholder="YouTube" name="reseaux_social[youtube]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['youtube'])) { echo $this->e($_SESSION['reseaux_socialInsc']['youtube']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/googleplus_logo.png') ?>">
						<div class="col-md-8">
							<label for="google" class="col-md-2 control-label celSoc">Google+</label>
							<input type="text" class="form-control celSoc" id="google" placeholder="Google+" name="reseaux_social[google]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['google'])) { echo $this->e($_SESSION['reseaux_socialInsc']['google']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Skype_logo.png') ?>">
						<div class="col-md-8">
							<label for="skype" class="col-md-2 control-label celSoc">Skype</label>
							<input type="text" class="form-control celSoc" id="skype" placeholder="Skype" name="reseaux_social[skype]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['skype'])) { echo $this->e($_SESSION['reseaux_socialInsc']['skype']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/instagram_logo.png') ?>">
						<div class="col-md-8">
							<label for="instagram" class="col-md-2 control-label celSoc">Instagram</label>
							<input type="text" class="form-control celSoc" id="instagram" placeholder="Instagram" name="reseaux_social[instagram]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['instagram'])) { echo $this->e($_SESSION['reseaux_socialInsc']['instagram']); } ?>">
						</div>
					</div>
				</div>
			</div>
                                    
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Whatsapp_logo.png') ?>">
						<div class="col-md-8">
							<label for="whatsapp" class="col-md-2 control-label celSoc">What's app</label>
							<input type="text" class="form-control celSoc" id="whatsapp" placeholder="What's app" name="reseaux_social[whatsapp]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['whatsapp'])) { echo $this->e($_SESSION['reseaux_socialInsc']['whatsapp']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/pinterest-logo.png') ?>">
						<div class="col-md-8">
							<label for="pinterest" class="col-md-2 control-label celSoc">Pinterest</label>
							<input type="text" class="form-control celSoc" id="pinterest" placeholder="Pinterest" name="reseaux_social[pinterest]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['pinterest'])) { echo $this->e($_SESSION['reseaux_socialInsc']['pinterest']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Deezer_logo.png') ?>">
						<div class="col-md-8">
							<label for="deezer" class="col-md-2 control-label celSoc">Deezer</label>
							<input type="text" class="form-control celSoc" id="deezer" placeholder="Deezer" name="reseaux_social[deezer]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['deezer'])) { echo $this->e($_SESSION['reseaux_socialInsc']['deezer']); } ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Spotify_logo.png') ?>">
						<div class="col-md-8">
							<label for="spotify" class="col-md-2 control-label celSoc">Spotify</label>
							<input type="text" class="form-control celSoc" id="spotify" placeholder="Spotify" name="reseaux_social[spotify]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['spotify'])) { echo $this->e($_SESSION['reseaux_socialInsc']['spotify']); } ?>">
						</div>
					</div>
				</div>
			</div>
            
            <div class="row form-group">
				
				<div class="col-md-6 col-xs-6 col-sm-6">
					<div class="col-md-12 col-md-offset-0">
						<img class="icons col-md-3" src="<?= $this->assetUrl('img/icons/Viber-logo.png') ?>">
						<div class="col-md-8">
							<label for="Viber" class="col-md-2 control-label celSoc">Viber</label>
							<input type="text" class="form-control celSoc" id="viber" placeholder="Viber" name="reseaux_social[viber]" value="<?php if (!empty($_SESSION['reseaux_socialInsc']['viber'])) { echo $this->e($_SESSION['reseaux_socialInsc']['viber']); } ?>">
						</div>
					</div>
				</div>
			</div>

		</div>



		<div id="" class="row">
			<div class="">
				<input type="submit" class="btn-navbut btn btn-primary col-md-offset-3 marginTop5Bottom10" value="Page précédente" name="precedent2">
				<input type="submit" class="btn btn-success col-md-offset-3 marginTop5Bottom10" value="valider" name="valider">
			</div>
		</div>

	</form>   

</div>
</div>

<?php $this->stop('main_content') ?>