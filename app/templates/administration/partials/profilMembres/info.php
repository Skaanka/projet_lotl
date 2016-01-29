<div id="tabMembreInfo<?php echo $membre['id']?>" class="tab-pane fade in active">
    <div class="container-fluid">

        <div class="row media">
            <div class="col-md-12 espacementProfil">
                <div class="media-left media-middle col-md-3 col-md-offset-1">
                    <img class="media-object img-circle" src="<?= $this->assetUrl('img/Avatar-512.png') ?>" alt="...">
                </div>
                <div class="media-body media-body-cheat col-md-6 col-md-offset-2">
                    <h2 class="media-heading"><?php echo $membre['prenom']?><br><?php echo $membre['nom']?></h2>
                    <h3 class="">Age: Beaucoup trop</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-body col-md-12">
                    <div class="col-md-6">
                        <p>Adresse : <?php echo $membre['adresse']?></p>
                        <p>Code postal : <?php echo $membre['cp']?></p>
                        <p>Ville : <?php echo $membre['ville']?></p>
                    </div>
                    <div class="col-md-6">
                        <p>Email: <?php echo $membre['mail']?></p>
                        <p>Telephone: <?php echo $membre['phone']?></p>
                        <p>Site Web: <?php echo $membre['siteWeb']?></p>
                    </div>
                </div>
                <?php echo $membre['ad_portfolio']?> <!-- portfolio -->
                <?php echo $membre['message']?> <!-- fil d'actu -->
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
                        <tr>
                            <td><?php echo $membre['annees_obt']?></td>
                            <td><?php echo $membre['intitule']?></td>
                            <td><?php echo $membre['ecole']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['annees_obt2']?></td>
                            <td><?php echo $membre['intitule2']?></td>
                            <td><?php echo $membre['ecole2']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['annees_obt3']?></td>
                            <td><?php echo $membre['intitule3']?></td>
                            <td><?php echo $membre['ecole3']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['annees_obt4']?></td>
                            <td><?php echo $membre['intitule4']?></td>
                            <td><?php echo $membre['ecole4']?></td>
                        </tr>
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
                        <tr>
                            <td><?php echo $membre['periode_debut']?></td>
                            <td><?php echo $membre['periode_fin']?></td>
                            <td><?php echo $membre['compagnie']?></td>
                            <td><?php echo $membre['poste']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['periode_debut2']?></td>
                            <td><?php echo $membre['periode_fin2']?></td>
                            <td><?php echo $membre['compagnie2']?></td>
                            <td><?php echo $membre['poste2']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['periode_debut3']?></td>
                            <td><?php echo $membre['periode_fin3']?></td>
                            <td><?php echo $membre['compagnie3']?></td>
                            <td><?php echo $membre['poste3']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['periode_debut4']?></td>
                            <td><?php echo $membre['periode_fin4']?></td>
                            <td><?php echo $membre['compagnie4']?></td>
                            <td><?php echo $membre['poste4']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['periode_debut5']?></td>
                            <td><?php echo $membre['periode_fin5']?></td>
                            <td><?php echo $membre['compagnie5']?></td>
                            <td><?php echo $membre['poste5']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $membre['periode_debut6']?></td>
                            <td><?php echo $membre['periode_fin6']?></td>
                            <td><?php echo $membre['compagnie6']?></td>
                            <td><?php echo $membre['poste6']?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-12">
                <div class="panel-body col-md-12">
                    <h2><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;<u>Compétences: </u></h2><br>
                    <p><?php echo $membre['competence']?></p>

                </div>
            </div>
        </div>



    </div>
</div>
