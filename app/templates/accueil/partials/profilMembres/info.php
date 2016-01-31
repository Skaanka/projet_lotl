<div id="tabMembreInfo<?php echo $membre['id']?>" class="tab-pane fade in active">
    <div class="container-fluid">

        <div class="row media">
            <div class="col-md-12 espacementProfil">
                <div class="media-left media-middle col-md-3 col-md-offset-1">
                    <img class="media-object img-circle" src="<?= $this->assetUrl("img/uploads/" . $this->e($membre["avatar"]) . "")?>" alt="avatar de <?php echo $this->e($membre["avatar"]) ?>">
                </div>
                <div class="media-body media-body-cheat col-md-6 col-md-offset-2">
                    <h2 class="media-heading"><?php echo $this->e($membre['prenom'])?><br><?php echo $this->e($membre['nom'])?></h2>
                    <h3 class="">Age: <?php echo DateTime::createFromFormat('Y-m-d', $this->e($membre['ddn']))->diff(new DateTime('now'))->y; ?></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-body col-md-12">
                    <div class="col-md-6">
                        <p>Adresse : <?php echo $this->e($membre['adresse'])?></p>
                        <p>Code postal : <?php echo $this->e($membre['cp'])?></p>
                        <p>Ville : <?php echo $this->e($membre['ville'])?></p>
                    </div>
                    <div class="col-md-6">
                        <p>Email: <?php echo $this->e($membre['mail'])?></p>
                        <p>Telephone:<?php if (!empty($membre['phone'])) { echo $this->e($membre['phone']); } ?></p>
                        <p>Site Web: <?php echo $this->e($membre['siteWeb'])?></p>
                    </div>
                </div>
                <!-- TODO STYLE -->
                <?php echo $this->e($membre['ad_portfolio'])?> <!-- portfolio -->
                <?php echo $this->e($membre['message'])?> <!-- fil d'actu -->
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
                        <?php if ( !empty($membre['intitule']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['annees_obt'])?></td>
                            <td><?php echo $this->e($membre['intitule'])?></td>
                            <td><?php echo $this->e($membre['ecole'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['intitule2']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['annees_obt2'])?></td>
                            <td><?php echo $this->e($membre['intitule2'])?></td>
                            <td><?php echo $this->e($membre['ecole2'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['intitule3']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['annees_obt3'])?></td>
                            <td><?php echo $this->e($membre['intitule3'])?></td>
                            <td><?php echo $this->e($membre['ecole3'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['intitule4']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['annees_obt4'])?></td>
                            <td><?php echo $this->e($membre['intitule4'])?></td>
                            <td><?php echo $this->e($membre['ecole4'])?></td>
                        </tr>
                        <?php } ?>
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
                        <?php if ( !empty($membre['poste']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut'])?></td>
                            <td><?php echo $this->e($membre['periode_fin'])?></td>
                            <td><?php echo $this->e($membre['compagnie'])?></td>
                            <td><?php echo $this->e($membre['poste'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['poste2']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut2'])?></td>
                            <td><?php echo $this->e($membre['periode_fin2'])?></td>
                            <td><?php echo $this->e($membre['compagnie2'])?></td>
                            <td><?php echo $this->e($membre['poste2'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['poste3']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut3'])?></td>
                            <td><?php echo $this->e($membre['periode_fin3'])?></td>
                            <td><?php echo $this->e($membre['compagnie3'])?></td>
                            <td><?php echo $this->e($membre['poste3'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['poste4']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut4'])?></td>
                            <td><?php echo $this->e($membre['periode_fin4'])?></td>
                            <td><?php echo $this->e($membre['compagnie4'])?></td>
                            <td><?php echo $this->e($membre['poste4'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['poste5']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut5'])?></td>
                            <td><?php echo $this->e($membre['periode_fin5'])?></td>
                            <td><?php echo $this->e($membre['compagnie5'])?></td>
                            <td><?php echo $this->e($membre['poste5'])?></td>
                        </tr>
                        <?php } ?>
                        <?php if ( !empty($membre['poste6']) ) { ?>
                        <tr>
                            <td><?php echo $this->e($membre['periode_debut6'])?></td>
                            <td><?php echo $this->e($membre['periode_fin6'])?></td>
                            <td><?php echo $this->e($membre['compagnie6'])?></td>
                            <td><?php echo $this->e($membre['poste6'])?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-body col-md-12">
                    <h2><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;<u>Compétences: </u></h2><br>
                    <p><?php echo $this->e($membre['competence'])?></p>

                </div>
            </div>
        </div>



    </div>
</div>
