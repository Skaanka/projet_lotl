<div id="tabMembreInfo<?php echo $_SESSION['user']['id']?>" class="tab-pane fade in active">
    <div class="container-fluid">

        <div class="row media">
            <div class="col-md-12 espacementProfil">
                <div class="media-left media-middle col-md-3 col-md-offset-1">
                    <img class="media-object img-circle" src="<?= $this->assetUrl('img/uploads/' . $this->e($_SESSION['user']['avatar']) .'') ?>" alt="...">
                </div>
                <div class="media-body media-body-cheat col-md-6 col-md-offset-2">
                    <h2 class="media-heading"><?php echo $this->e($_SESSION['user']['prenom'])?><br><?php echo $this->e($_SESSION['user']['nom'])?></h2>
                    <h3 class="">Age: <?php echo DateTime::createFromFormat('Y-m-d', $this->e($_SESSION['user']['ddn']))->diff(new DateTime('now'))->y; ?></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-body col-md-12">
                    <div class="col-md-6">
                        <p>Adresse : <?php echo $this->e($_SESSION['user']['adresse'])?></p>
                        <p>Code postal : <?php echo $this->e($_SESSION['user']['cp'])?></p>
                        <p>Ville : <?php echo $this->e($_SESSION['user']['ville'])?></p>
                    </div>
                    <div class="col-md-6">
                        <p>Email: <?php echo $this->e($_SESSION['user']['mail'])?></p>
                        <p>Telephone: <?php if (!empty($_SESSION['user']['intitule'])) { echo $this->e($_SESSION['user']['phone']); } ?></p>
                        <p>Site Web: <?php echo $this->e($_SESSION['user']['siteWeb'])?></p>
                    </div>
                </div>

                <?php echo $this->e($_SESSION['user']['ad_portfolio'])?> <!-- portfolio --> <!-- il faut connecter la table wuser à la table portfolios -->

                <?php echo $this->e($_SESSION['user']['message'])?> <!-- fil d'actu --> <!-- il faut connecter la table wuser à la table fil_actus -->

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
                        <?php if (!empty($_SESSION['user']['intitule'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['annees_obt'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['intitule'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['ecole'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['intitule2'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['annees_obt2'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['intitule2'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['ecole2'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['intitule3'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['annees_obt3'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['intitule3'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['ecole3'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['intitule4'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['annees_obt4'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['intitule4'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['ecole4'])?></td>
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
                        <?php if (!empty($_SESSION['user']['poste'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['poste2'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut2'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin2'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie2'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste2'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['poste3'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut3'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin3'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie3'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste3'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['poste4'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut4'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin4'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie4'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste4'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['poste5'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut5'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin5'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie5'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste5'])?></td>
                        </tr>
                        <?php } ?>
                    
                        <?php if (!empty($_SESSION['user']['poste6'])) { ?>
                        <tr>
                            <td><?php echo $this->e($_SESSION['user']['periode_debut6'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['periode_fin6'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['compagnie6'])?></td>
                            <td><?php echo $this->e($_SESSION['user']['poste6'])?></td>
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
                    <p><?php if (!empty($_SESSION['user']['competence'])) { echo $this->e($_SESSION['user']['competence']); }?></p>

                </div>
            </div>
        </div>



    </div>
</div>