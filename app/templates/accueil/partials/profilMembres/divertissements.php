<div id="tabMembreDiv<?php echo $membre['id']?>" class="tab-pane fade">
    <div class="container-fluid">

        <h3 class="text-center espacementProfil">Vous trouverez ici les plate-formes de jeux en ligne que <?php echo $this->e($membre['prenom'])?> utilise.</h3>

        <div class="panel panel-default col-md-12 espacementProfil">
            <div class="panel-body">
                <div class="row">

                    <?php if (!empty($membre['psn'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>PSN</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/PSN_logo.png') ?>" class="iconeMembre" alt="logo psn">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['psn'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($membre['xboxlive'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>XboxLive</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>" class="iconeMembre" alt="logo xbox">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['xboxlive'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($membre['steam'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Steam</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>" class="iconeMembre" alt="logo steam">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['steam'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($membre['battlenet'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Battle.net</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>" class="iconeMembre" alt="logo battle.net">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['battlenet'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($membre['origin'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Origin</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>" class="iconeMembre" alt="logo origin">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['origin'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($membre['compte_nintendo'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Nintendo</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/Nintendo_logo.png') ?>" class="iconeMembre" alt="logo nintendo">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($membre['compte_nintendo'])?>
                        </div>
                    </div>
                    <?php } ?>


                </div>
            </div>
        </div>

    </div>
</div>
