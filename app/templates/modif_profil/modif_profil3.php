<?php $this->layout('layout', ['title' => 'modification profil - partie 3']) ?>

<?php $this->start('navBar') ?>
<!-- Navbar Top-Screen-->
<nav class=" navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $this->url('accueil') ?>">Lord of the links</a>
            
            <!--    debut "oeil de sauron" -->
            
           
                <div class="eye">
                    <div class="iris">
                        <div class="pupil">
                            <div class="pupil-shine"></div>
                        </div>
                    </div>
  <!--<div class="eyeshine"></div>-->
                    <div class="lids"></div>
                </div>
            
            
            <!-- fin "oeil de sauron" -->
            
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


<?php $this->start('main_content') ?>
<div id="" class="wrappInscr container">
    <form method="POST" class="col-md-12">  


        <div class="text-center col-md-offset-0">
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
                            <input type="text" class="col-md-8 form-control celSoc" id="psn" value="<?php echo $this->e($_SESSION['user']['psn'])?>" name="reseaux_divertissement[psn]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="xbox" class="col-sm-2 control-label celSoc">XboxLive</label>
                            <input type="text" class="form-control celSoc" id="xbox" value="<?php echo $this->e($_SESSION['user']['xboxlive'])?>" name="reseaux_divertissement[xboxlive]">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
                            <input type="text" class="form-control celSoc" id="steam" value="<?php echo $this->e($_SESSION['user']['steam'])?>" name="reseaux_divertissement[steam]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
                            <input type="text" class="form-control celSoc" id="battlenet" value="<?php echo $this->e($_SESSION['user']['battlenet'])?>" name="reseaux_divertissement[battlenet]">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/nintendo_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo</label>
                            <input type="text" class="form-control celSoc" id="nintendo" value="<?php echo $this->e($_SESSION['user']['compte_nintendo'])?>" name="reseaux_divertissement[compte_nintendo]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
                            <input type="text" class="form-control celSoc" id="origin" value="<?php echo $this->e($_SESSION['user']['origin'])?>" name="reseaux_divertissement[origin]">
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
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
                            <input type="text" class="form-control celSoc" id="linkedin" value="<?php echo $this->e($_SESSION['user']['linkedin'])?>" name="reseaux_pro[linkedin]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
                            <input type="text" class="form-control celSoc" id="viadeo" value="<?php echo $this->e($_SESSION['user']['viadeo'])?>" name="reseaux_pro[viadeo]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
                            <input type="text" class="form-control celSoc" id="xing" value="<?php echo $this->e($_SESSION['user']['xing'])?>" name="reseaux_pro[xing]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>">
                        <div class="col-sm-8">
                            <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
                            <input type="text" class="form-control celSoc" id="muxy" value="<?php echo $this->e($_SESSION['user']['muxi'])?>" name="reseaux_pro[muxi]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-3" src="<?= $this->assetUrl('img/icons/github_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="github" class="col-sm-2 control-label celSoc">GitHub</label>
                            <input type="text" class="form-control celSoc" id="github" value="<?php echo $this->e($_SESSION['user']['github'])?>" name="reseaux_pro[github]">
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
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/FB_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
                            <input type="text" class="form-control celSoc" id="facebook" value="<?php echo $this->e($_SESSION['user']['facebook'])?>" name="reseaux_social[facebook]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Twitter-logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="Twitter" class="col-sm-2 control-label celSoc">Twitter</label>
                            <input type="text" class="form-control celSoc" id="twitter" value="<?php echo $this->e($_SESSION['user']['twitter'])?>" name="reseaux_social[twitter]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/YouTube-logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
                            <input type="text" class="form-control celSoc" id="youtube" value="<?php echo $this->e($_SESSION['user']['youtube'])?>" name="reseaux_social[youtube]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/googleplus_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="google" class="col-sm-2 control-label celSoc">Google+</label>
                            <input type="text" class="form-control celSoc" id="google" value="<?php echo $this->e($_SESSION['user']['google'])?>" name="reseaux_social[google]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Skype_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
                            <input type="text" class="form-control celSoc" id="skype" value="<?php echo $this->e($_SESSION['user']['skype'])?>" name="reseaux_social[skype]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/instagram_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
                            <input type="text" class="form-control celSoc" id="instagram" value="<?php echo $this->e($_SESSION['user']['instagram'])?>" name="reseaux_social[instagram]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Whatsapp_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="whatsapp" class="col-sm-2 control-label celSoc">What's app</label>
                            <input type="text" class="form-control celSoc" id="whatsapp" value="<?php echo $this->e($_SESSION['user']['whatsapp'])?>" name="reseaux_social[whatsapp]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/pinterest-logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="pinterest" class="col-sm-2 control-label celSoc">Pinterest</label>
                            <input type="text" class="form-control celSoc" id="pinterest" value="<?php echo $this->e($_SESSION['user']['pinterest'])?>" name="reseaux_social[pinterest]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Deezer_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="deezer" class="col-sm-2 control-label celSoc">Deezer</label>
                            <input type="text" class="form-control celSoc" id="deezer" value="<?php echo $this->e($_SESSION['user']['deezer'])?>" name="reseaux_social[deezer]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Spotify_logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
                            <input type="text" class="form-control celSoc" id="spotify" value="<?php echo $this->e($_SESSION['user']['spotify'])?>" name="reseaux_social[spotify]">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="col-md-12 col-md-offset-0">
                        <img class="icons col-sm-2" src="<?= $this->assetUrl('img/icons/Viber-logo.png') ?>">
                        <div class="col-sm-8">
                            <label for="Viber" class="col-sm-2 control-label celSoc">Viber</label>
                            <input type="text" class="form-control celSoc" id="viber" value="<?php echo $this->e($_SESSION['user']['viber'])?>" name="reseaux_social[viber]">
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>







        <div id="bouton" class="row">
            <div class="">
                <input type="submit" class="btn btn-default btn-navbut col-md-offset-3 marginTop5Bottom10" value="Page précédente" name="precedent2">
                <input type="submit" class="btn btn-default btn-navbut col-md-offset-3 marginTop5Bottom10" value="valider" name="valider">
            </div>
        </div>

    </form>   

</div>

<?php $this->stop('main_content') ?>