<div id="tabMembreSoc<?php echo $_SESSION['user']['id']?>" class="tab-pane fade">
    <div class="container-fluid">

        <h3 class="text-center espacementProfil">Vous trouverez ici les réseaux sociaux que <?php echo $this->e($_SESSION['user']['prenom'])?> utilise.</h3>

        <div class="panel panel-default col-md-12 espacementProfil">
            <div class="panel-body">
                <div class="row">
                    
                    <?php if (!empty($_SESSION['user']['facebook'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Facebook</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/FB_logo.png') ?>" class="iconeMembre" alt="logo facebook">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['facebook'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['twitter'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Twitter</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/Twitter-logo.png') ?>" class="iconeMembre" alt="logo twitter">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['twitter'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['youtube'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Youtube</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/YouTube-logo.png') ?>" class="iconeMembre" alt="logo youtube">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['youtube'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['compte_nintendo'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Google+</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/googleplus_logo.png') ?>" class="iconeMembre" alt="logo google plus">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['google'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['skype'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Skype</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/skype_logo.png') ?>" class="iconeMembre" alt="logo skype">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['skype'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['instagram'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Instagram</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/instagram_logo.png') ?>" class="iconeMembre" alt="logo instagram">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['instagram'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['pinterest'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Pinterest</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/pinterest-logo.png') ?>" class="iconeMembre" alt="logo pinterest">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['pinterest'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['spotify'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Spotify</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/spotify_logo.png') ?>" class="iconeMembre" alt="logo spotify">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['spotify'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['deezer'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Deezer</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/deezer_logo.png') ?>" class="iconeMembre" alt="logo deezer">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['deezer'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if (!empty($_SESSION['user']['viber'])) { ?>
                    <div class="col-md-6 affichageLiens">
                        <div class="col-md-10 col-md-offset-2">
                            <h4>Viber</h4>
                        </div>
                        <div class="col-md-2">
                            <img src="<?= $this->assetUrl('img/icons/viber-logo.png') ?>" class="iconeMembre" alt="logo viber">
                        </div>
                        <div class="well well-sm col-md-8">
                            <?php echo $this->e($_SESSION['user']['viber'])?>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>

    </div>
</div>
