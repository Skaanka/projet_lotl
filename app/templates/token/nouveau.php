<?php $this->layout('layout_home', ['title' => 'new_mpd']) ?>


<?php $this->start('oubli_mdp') ?>



<?php $this->stop('oubli_mdp') ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="container-fluid no-padding">
    <div id="titleHome" class="row text-center">


        <div class="texte col-xs-8-offset-2 animated fadeInUp">
            <div class="row">
                <form method="POST">
                    <h1>Veuillez saisir votre nouveau mot passe.</h1>
                    Password : <input type="password" name="wuser[mot_de_passe]" />
                    <button type="submit" name="envoyer">Valider</button>

                </form>
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
