<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="row ">

    <!-- Portfolio -->
    <section class="portfolio ">
        <div class="container">
            <div class="row">

                <!-- Début de la grille portfolio -->
                <ul class="portfolio-items list-unstyled" id="grid">



                    <!-- Première vignette  -->
                    <li class="vignette col-md-4 col-sm-6 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
                        <div class="outerBox">
                            <a href="#" id="innerBoxA" class="innerBoxA" data-toggle="modal" data-target="#myModal">
                                <div class="chat">
                                    <img class="media-object chatchat img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="...">
                                </div>
                                <div class="innerBox">
                                    <div class="chatcontent">
                                        <h3 class="text-center">François GUILLERME</h3>
                                        <p>Tu vas avoir droit à 10 p'tites secondes, pour déplacer ton gros cul dégueulasse...</p>
                                    </div> 
                                </div>
                            </a>
                        </div>
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
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Le profil de Mr Dugenou.</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- Début des onglets dans le modal consultation des profil membres -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a data-toggle="tab" href="#tabMembreInfo">Infos</a></li>
                                        <li><a data-toggle="tab" href="#tabMembreDiv">Divertissements</a></li>
                                        <li><a data-toggle="tab" href="#tabMembrePro">Réseaux Pro.</a></li>
                                        <li><a data-toggle="tab" href="#tabMembreSoc">Réseaux Soc.</a></li>
                                    </ul>
                                    <!-- Fin des onglets -->


                                    <!-- Contenu des onglets -->
                                    <div class="tab-content">

                                        <!-- info -->
                                        <div id="tabMembreInfo" class="tab-pane fade in active">
                                            <div class="container-fluid">

                                                <div class="row media">
                                                    <div class="col-md-12 espacementProfil">
                                                        <div class="media-left media-middle col-md-3 col-md-offset-1">
                                                            <img class="media-object img-circle" src="<?= $this->assetUrl('img/Avatar-512.png') ?>" alt="...">
                                                        </div>
                                                        <div class="media-body media-body-cheat col-md-6 col-md-offset-2">
                                                            <h2 class="media-heading">François <br>GUILLERME</h2>
                                                            <h3 class="">Age: Beaucoup trop</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="panel panel-default col-md-12">
                                                        <div class="panel-body col-md-12">
                                                            <div class="col-md-6">
                                                                <p>Adresse : Toutlabas</p>
                                                                <p>Code postal : loin</p>
                                                                <p>Ville : faraway</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Email: blabla@linternet.fr</p>
                                                                <p>Telephone: 555-5678-65</p>
                                                                <p>Site Web: www.léapassiontaxidermie.fr</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Fin contenu onglet info -->


                                        <!-- Divertissements -->
                                        <div id="tabMembreDiv" class="tab-pane fade">
                                            <div class="container-fluid">
                                                
                                                <h3 class="text-center espacementProfil">Vous trouverez ici les plate-formes de jeux en ligne que François utilise.</h3>

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
                                                                    Pouetpouetsony
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
                                                                    Pouetpouetsony
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
                                                                    Pouetpouetsony
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
                                                                    Pouetpouetsony
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
                                                                    Pouetpouetsony
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
                                                                    Pouetpouetsony
                                                                </div>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Fin contenu onglet divertissements -->


                                        <!-- Pro -->
                                        <div id="tabMembrePro" class="tab-pane fade">
                                            <div class="container-fluid">
                                                
                                                <h3 class="text-center espacementProfil">Vous trouverez ici les réseaux professionnel que François utilise.</h3>

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
                                                                    blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blabla
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- Sociaux -->
                                        <div id="tabMembreSoc" class="tab-pane fade">
                                            <div class="container-fluid">
                                                
                                                <h3 class="text-center espacementProfil">Vous trouverez ici les réseaux sociaux que François utilise.</h3>

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
                                                                    blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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
                                                                    Blablabla
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


                    <!-- sizer -->
                    <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

                </ul> <!--end portfolio grid -->
            </div> <!--end row -->
        </div> <!-- end container-->
    </section>
</div>	
<?php $this->stop('main_content') ?>