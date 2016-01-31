<?php $this->layout('layout', ['title' => 'administration']) ?>

<?php $this->start('navBar') ?>

<!-- Navbar Top-Screen-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->url('accueil') ?>">Lord of the links</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">

                <!--interface admin-->
                <?php if ($_SESSION['user']['role'] === 'admin' ) { ?>
                <!-- Button trigger modal Admin -->
                <a href="<?php echo $this->url('administration'); ?>"><button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalAdmin">
                    Administration
                    </button></a>
                <?php } elseif ($_SESSION['user']['role'] == 'membre') {echo "";}?>
                <!--interface admin-->

                <!-- Button trigger modal Profil -->
                <button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalProfil">
                    Profil
                </button>

                <!-- Modal -->
                <?php include('C:\xampp\htdocs\projet_lotl\app/templates/partials/modal_profil.php') ?>



                <!-- Button trigger modal -->
                <button type="button" class="btn  btn-navbut" data-toggle="modal" data-target="#myModalPost">
                    Post actu
                </button>

                <!-- Modal -->
                <?php include('C:\xampp\htdocs\projet_lotl\app/templates/partials/modal_postActu.php') ?>



                <a href="<?= $this->url("logout"); ?>"><button class="btn btn-navbut">Déconnexion</button></a>
            </div>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
<!-- Fin Navbar Top-Screen-->
<?php $this->stop('navBar') ?>

<?php $this->start('main_content') ?>

<div id="homeContent" class="row no-padding">
    <?php //debug($membres);die(); ?>
    <a href="<?php echo $this->url('accueil'); ?>">Retour accueil</a>
    <form>
        <?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
        <?php if ( $membre['validation_inscription'] === 'false') { ?>
        <?php 
    $true = 'true';
    echo $this->e($membre['prenom']) . " " . $this->e($membre['nom']) . " : "; 
        ?> <a href="<?= $this->url('validationProfil', ['id' => $membre['id']]) ?>">Validation profil</a> <a href="<?= $this->url('RefusProfil', ['id' => $membre['id']]) ?>">Delete profil</a> 
        <br/>
        <?php } ?> <!--fin du if--> 
        <?php } ?> <!--fin du foreach-->
    </form>
</div>	
<?php $this->stop('main_content') ?>