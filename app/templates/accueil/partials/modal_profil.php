<div class="modal fade" id="myModalProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mon profil</h4>
            </div>
            <div class="modal-body">

                <!-- Début des onglets dans le modal consultation des profil membres -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a data-toggle="tab" href="#tabMembreInfo<?php //echo $_SESSION['user']['id']?>">Infos</a></li>
                    <li><a data-toggle="tab" href="#tabMembreDiv<?php //echo $_SESSION['user']['id']?>">Divertissements</a></li>
                    <li><a data-toggle="tab" href="#tabMembrePro<?php //echo $_SESSION['user']['id']?>">Réseaux Pro.</a></li>
                    <li><a data-toggle="tab" href="#tabMembreSoc<?php //echo $_SESSION['user']['id']?>">Réseaux Soc.</a></li>
                </ul>
                <!-- Fin des onglets -->


                <!-- Contenu des onglets -->
                <div class="tab-content">

                    <!-- info -->
                    <?php require('profil/info.php') ?>


                    <!-- Divertissements -->
                    <?php require('profil/divertissements.php') ?>


                    <!-- Pro -->
                    <?php require('profil/pro.php') ?>


                    <!-- Sociaux -->
                    <?php require('profil/sociaux.php') ?>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" name="profil" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>