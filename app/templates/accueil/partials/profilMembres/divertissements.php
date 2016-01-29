<div id="tabMembreDiv<?php echo $membre['id']?>" class="tab-pane fade">
    <div class="container-fluid">

        <h3 class="text-center espacementProfil">Vous trouverez ici les plate-formes de jeux en ligne que <?php echo $membre['prenom']?> utilise.</h3>

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
                            <?php echo $membre['psn']?>
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
                            <?php echo $membre['xboxlive']?>
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
                            <?php echo $membre['steam']?>
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
                            <?php echo $membre['battlenet']?>
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
                            <?php echo $membre['origin']?>
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
                            <?php echo $membre['compte_nintendo']?>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
</div>