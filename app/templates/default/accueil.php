<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('main_content') ?>
<div id="homeContent" class="row col-md-12 no-padding">
    <div class="row text-center">
        <h1>Bonjour, <?php echo htmlspecialchars($value["prenom"]) ?> </h1>
    </div>
    <div>
        <h1 class="text-center"><b>"– Vous êtes en retard !<br/><br/>– Un magicien n’est jamais en retard, ni en avance d’ailleurs. Il arrive précisément à l’heure prévue."</b></h1>
        <h3 class="col-md-offset-8"><i>- Frodon Sacquet, Gandalf le Gris.</i></h3>
    </div>
</div>	
<?php $this->stop('main_content') ?>