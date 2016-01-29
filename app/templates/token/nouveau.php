<?php $this->layout('layout_home', ['title' => 'new_mpd']) ?>


<?php $this->start('oubli_mdp') ?>

<form method="POST">
        <h1>Veuillez saisir votre nouveau mot passe.</h1>
		Password : <input type="password" name="wuser[mot_de_passe]" />
		<button type="submit" name="envoyer"></button>
		
</form>

<?php $this->stop('oubli_mdp') ?>


