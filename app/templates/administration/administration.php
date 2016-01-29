<?php $this->layout('layout', ['title' => 'accueil']) ?>

<?php $this->start('navBar') ?>

<!-- Navbar Top-Screen-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Lord of the links</a>
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
                <?php require('partials/modal_profil.php') ?>



				<!-- Button trigger modal -->
				<button type="button" class="btn  btn-navbut" data-toggle="modal" data-target="#myModalPost">
					Post actu
				</button>

				<!-- Modal -->
				<?php require('partials/modal_postActu.php') ?>



				<a href="<?= $this->url("logout"); ?>"><button class="btn btn-success">Déconnexion</button></a>
			</div>
		</div><!--/.navbar-collapse -->
	</div>
</nav>
<!-- Fin Navbar Top-Screen-->
<?php $this->stop('navBar') ?>

<?php $this->start('carousel') ?>
<!--<div id="header" class="container-fluid no-padding"><img src="<?php echo $this->assetUrl('img/bandeau.jpg') ?>" alt="" class="img-reponsive col-xs-12 no-padding"></div>-->

<!-- Caroussel -->
<div id="wrapCar" class="col-md-8 col-md-offset-2">
	<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item text-center active">
				<h1>HELLO WORLD</h1>
				<p>Bienvenue sur Lord of the link</p>
				<div class="carousel-caption">

				</div>
			</div>
			<?php foreach ($fil_actus as $fil_actu) { ?>
			<div class="item text-center">
				<h1>Nouveau chez <?php echo $fil_actu['prenom'] ?></h1>
				<p><?php echo $fil_actu['message'] ?></p>
				<div class="carousel-caption">

				</div>
			</div>
			<?php } ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- Fin du caroussel -->
<?php $this->stop('carousel') ?>



<?php $this->start('main_content') ?>

<div id="homeContent" class="row no-padding">
    <?php //debug($membres);die(); ?>
    <a href="<?php echo $this->url('accueil'); ?>">Retour accueil</a>
    <form>
    <?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
    <?php if ( $membre['validation_inscription'] === 'false') { ?>
        <?php 
        $true = 'true';
        echo $membre['prenom'] . " " . $membre['nom'] . " : "; 
        ?> <a href="<?= $this->url('validationProfil', ['id' => $membre['id']]) ?>">Validation profil</a> <a href="<?= $this->url('RefusProfil', ['id' => $membre['id']]) ?>">Delete profil</a> 
        <br/>
    <?php } ?> <!--fin du if--> 
    <?php } ?> <!--fin du foreach-->
        </form>
</div>	
<?php $this->stop('main_content') ?>