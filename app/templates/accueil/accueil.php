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
                    
                    <!-- Première vignette  -->
                    <li class="vignette col-md-4 col-sm-8 col-xs-10 col-md-offset-0 col-sm-offset-2 col-xs-offset-1" data-groups='["youtube"]'>
                        <figure class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#myModal">
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
                    <?php } ?>


                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Consultation du profil</h4>
                                </div>
                                <div class="modal-body">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a data-toggle="tab" href="#tabInfo">Infos</a></li>
                                        <li><a data-toggle="tab" href="#tabDiv">Divertissements</a></li>
                                        <li><a data-toggle="tab" href="#tabPro">Réseaux Pro.</a></li>
                                        <li><a data-toggle="tab" href="#tabSoc">Réseaux Soc.</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tabInfo" class="tab-pane fade in active">Test tab infos</div>
                                        <div id="tabDiv" class="tab-pane fade">Test tab div</div>
                                        <div id="tabPro" class="tab-pane fade">Test tab pro</div>
                                        <div id="tabSoc" class="tab-pane fade">Test tab soc</div>
                                    </div>

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