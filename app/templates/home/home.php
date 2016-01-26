
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

                        <input type="submit" name="connexion" class="btn btn-success" formaction="<?php echo $this->url('logins') ?>" value="Connexion">
                        <input type="submit" name="inscription" class="btn btn-success" formaction="<?php echo $this->url('inscription1') ?>" value="Inscription">

                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
<?php $this->stop('navBar') ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="container-fluid no-padding">
    <div id="titleHome" class="row text-center">
        <h1 col-xs-offset-1 col-xs-10>Bienvenue sur <br class="visible-xs"/>Lord of the link</h1> 
        <span class=" col-xs-offset-1 col-xs-10">un réseau pour les trouver, un réseau pour les amener tous, et dans le web les lier.</span>
        
        <p class=" col-xs-offset-1 col-xs-10">TODO DESCRIPTION</p>
    </div>
    <div  id="quote" class="row">
        <blockquote class="blockquote-reverse text_justify col-xs-12">
            <p><b>" Vous êtes en retard ! "<br/>
            " Un magicien n’est jamais en retard, ni en avance d’ailleurs. Il arrive précisément à l’heure prévue. "</b></p>
            <footer>Frodon Sacquet, Gandalf le Gris.</footer>
        </blockquote>
    </div>
</div>		

<?php $this->stop('main_content') ?>
