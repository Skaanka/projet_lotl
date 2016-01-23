<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="row col-md-12 no-padding">

    <!-- Portfolio -->
    <section class="portfolio container-fluid">
        <div class="container">
            <div class="row">

                <!-- Début de la grille portfolio -->
                <ul class="portfolio-items list-unstyled" id="grid">

                   <?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
                    <?php //debug($membre);//die();?>
                    <!-- Première vignette  -->
                    <li class="vignette col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
                        <figure class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $membre['id']?>">
                                <div class="media no-padding">
                                    <div class="media-left media-middle">
                                        <img class="media-object img-circle" src="<?= $this->assetUrl('img/cat.jpg')?>" alt="..."><!-- SQL image avatar-->
                                    </div>
                                    <div class="media-body">
                                        <div class="modal_content">
                                            <h3 class="media-heading text-center"><?php echo $membre['prenom']?> <?php echo $membre['nom']?></h3> <!-- SQL prenom NOM -->
                                            <p><?php echo $membre['citation']?></p> <!-- SQL citation -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </li>
                    
                   

                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $membre['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Consultation du profil</h4>
                                </div>
                                <div class="modal-body">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a data-toggle="tab" href="#tabInfo<?php echo $membre['id']?>">Infos</a></li>
                                        <li><a data-toggle="tab" href="#tabDiv<?php echo $membre['id']?>">Divertissements</a></li>
                                        <li><a data-toggle="tab" href="#tabPro<?php echo $membre['id']?>">Réseaux Pro.</a></li>
                                        <li><a data-toggle="tab" href="#tabSoc<?php echo $membre['id']?>">Réseaux Soc.</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tabInfo<?php echo $membre['id']?>" class="tab-pane fade in active">
                                            Test tab infos
                                        </div>
                                        
                                        <div id="tabDiv<?php echo $membre['id']?>" class="tab-pane fade">
                                            <?php echo $membre['psn']?>
                                            <?php echo $membre['xboxlive']?>
                                            <?php echo $membre['steam']?>
                                            <?php echo $membre['battlenet']?>
                                            <?php echo $membre['compte_nintendo']?>
                                            <?php echo $membre['origin']?>
                                        </div>
                                        
                                        <div id="tabPro<?php echo $membre['id']?>" class="tab-pane fade">
                                            <?php echo $membre['linkedin']?>
                                            <?php echo $membre['viadeo']?>
                                            <?php echo $membre['xing']?>
                                            <?php echo $membre['muxi']?>
                                            <?php echo $membre['github']?>
                                        </div>
                                        
                                        <div id="tabSoc<?php echo $membre['id']?>" class="tab-pane fade">
                                            <?php echo $membre['facebook']?>
                                            <?php echo $membre['twitter']?>
                                            <?php echo $membre['youtube']?>
                                            <?php echo $membre['google']?>
                                            <?php echo $membre['skype']?>
                                            <?php echo $membre['instagram']?>
                                            <?php echo $membre['whatsapp']?>
                                            <?php echo $membre['pinterest']?>
                                            <?php echo $membre['deezer']?>
                                            <?php echo $membre['spotify']?>
                                            <?php echo $membre['viber']?>
                                        </div>
                                    </div>

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