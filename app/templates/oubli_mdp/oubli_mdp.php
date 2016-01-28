<?php $this->layout('layout_home', ['title' => 'oubli_mdp']) ?>


<?php $this->start('oubli_mdp') ?>

<form method="POST">
    
        <h1>Veuillez saisir votre nouveau mot passe.</h1>
		<input name="wuser[mot_de_passe]" placeholder="Password" />
		<button name="envoyer" value="Envoyer "></button>
		
</form>


<?php $this->stop('oubli_mdp') ?>