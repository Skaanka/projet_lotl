
<div id="tabMembrePro<?php echo $_SESSION['user']['id']?>" class="tab-pane fade">
    <div class="container-fluid">

        <h3 class="text-center espacementProfil">Vous trouverez ici les réseaux professionnel que <?php echo $_SESSION['user']['prenom']?> utilise.</h3>

        <div class="panel panel-default col-md-12 espacementProfil">
            <div class="panel-body">
                <div class="row">

                    <?php if (!empty($_SESSION['user']['linkedin'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>LinkedIn</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>" class="iconeMembre">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $_SESSION['user']['linkedin']?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['viadeo'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Viadéo</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>" class="iconeMembre">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $_SESSION['user']['viadeo']?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['xing'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Xing</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>" class="iconeMembre">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $_SESSION['user']['xing']?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['muxi'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Muxi</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>" class="iconeMembre">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $_SESSION['user']['muxi']?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['github'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>GitHub</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/github_logo.png') ?>" class="iconeMembre">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $_SESSION['user']['github']?>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>

    </div>
</div>
