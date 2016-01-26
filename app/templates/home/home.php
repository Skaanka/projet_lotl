
<?php $this->layout('layout_home', ['title' => 'home']) ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="container-fluid no-padding">
    <div id="titleHome" class="row text-center">
        <span class="texte col-xs-offset-1 col-xs-10">Bienvenue sur <br class="visible-xs"/>Lord of the link</span> 
        <span class=" col-xs-offset-1 col-xs-10"></span>
        
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
