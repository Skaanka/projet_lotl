
<?php $this->layout('layout_home', ['title' => 'home']) ?>

<?php $this->start('navBar') ?>
<nav id="navHome" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div  id="navbar" class="navbar-collapse collapse">
                    <form method="post" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" name="wuser[mail]" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="wuser[mot_de_passe]" placeholder="Password" class="form-control">
                        </div>

                        <input type="submit" name="connexion" class="btn btn-navbut" formaction="<?php echo $this->url('login') ?>" value="Connexion">
                        <input type="submit" name="inscription" class="btn btn-navbut" formaction="<?php echo $this->url('inscription1') ?>" value="Inscription">

                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
<?php $this->stop('navBar') ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="container-fluid no-padding">
    <div id="titleHome" class="row text-center">
        
        
        <div class="texte col-xs-8-offset-2 animated fadeInUp">
            <div class="row">
                <span class="bienvenue">Bienvenue</span>
                <span class="tiny_ltr">Sur</span>
            </div>
            <div class="row">
                <span class="norm_ltr">" Lord</span>
                <span class="tiny_ltr">of the</span>
                <span class="norm_ltr">Link "</span>
            </div>
        </div>
        </div>
    <div  id="quote" class="row">
        <blockquote class="blockquote-reverse text_justify col-xs-12">
           
            <p ><b>Lord Of The Link est un site privé. Si vous êtes un visiteur en recherche de codeur web,<br> nous vous invitons à venir nous rencontrer sur : "http://jesuistondev.fr". </b></p>
            <p>Merci de votre visite.</p>
        </blockquote>
    </div>
</div>

<?php $this->stop('main_content') ?>
