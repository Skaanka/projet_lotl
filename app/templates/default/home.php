<?php $this->layout('layout', ['title' => 'home']) ?>

<?php $this->start('main_content') ?>
<div id="homeContent" class="row col-md-12 no-padding">
    <div class="row text-center">
        <h1>Bienvenue sur lord of the Link</h1>
        <h2>Vous devez créé un compte et vous connectez pour consulter les profils.</h2>
    </div>
    <div class="row text-center">
        <button type="submit" class=btn btn-success>Inscription</button>
        <button type="submit" class=btn btn-success>Connexion</button>
    </div>
    <div>
        <h1 class="text-center"><b>"Je cherche quelqu'un pour prendre part à une aventure..."</b></h1>
        <h3 class="col-md-offset-8"><i>- Gandalf le Gris.</i></h3>
    </div>

</div>	
<?php $this->stop('main_content') ?>
