<?php $this->layout('layout_home', ['title' => 'oubli_mdp']) ?>


<?php $this->start('oubli_mdp') ?>

<form method="POST">

		<input  name="mail" placeholder="Email" />
		<input type="submit" name="envoyer" value="Envoyer" />
		
</form>


<?php $this->stop('oubli_mdp') ?>