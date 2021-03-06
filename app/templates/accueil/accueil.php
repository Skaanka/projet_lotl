<?php $this->layout('layout', ['title' => 'accueil']) ?>


<?php $this->start('navBar') ?>
<!-- Navbar Top-Screen-->
<nav class=" navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->url('accueil') ?>">Lord of the links</a>

            <!--    debut "oeil de sauron" -->
<!-- 
            <div class="eye">
                <div class="iris">
                    <div class="pupil">
                        <div class="pupil-shine"></div>
                    </div>
                </div>
                <div class="eyeshine"></div>
                <div class="lids"></div>
            </div>
-->
            <!-- fin "oeil de sauron" -->

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
            <?php //debug($fil_actus);die(); ?>
            <?php if ($fil_actu['id'] != '1') { ?>
            <div class="item text-center">
                <h1>Nouveau chez <?php echo $this->e($fil_actu['prenom']) ?></h1>
                <p><?php echo $this->e($fil_actu['message']) ?></p>
                <div class="carousel-caption">

                </div>
            </div>
            <?php } ?>
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


<?php $this->start('filtre') ?>
<?php require('partials/filtre.php') ?>
<?php $this->stop('filtre') ?>


<?php $this->start('main_content') ?>
<?php //debug($_SESSION['user']); ?> 
<div id="homeContent" class="row no-padding">



    <!-- Portfolio -->
    <section class="portfolio ">
        <div class="container">
            <div class="row">

                <!-- Début de la grille portfolio -->
                <ul class="portfolio-items list-unstyled" id="grid">

                    <?php foreach ($membres as $membre) { ?> <!-- boucle foreach pour afficher les utilisateur dans la table wusers -->
                    <?php //debug($membres);die();?>
                    <?php if ( $membre['validation_inscription'] == 'true' && $membre['nom'] != 'Sauron' && $membre['nom'] != $_SESSION['user']['nom']) { ?>

                    <li class="row col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-3 col-xs-10 col-xs-offset-1" data-groups='["all", "<?php if (!empty($this->e($membre["psn"]))) { echo 'psn'; } ?>", "<?php if (!empty($this->e($membre["xboxlive"]))) { echo 'xbox'; } ?>", "<?php if (!empty($this->e($membre["steam"]))) { echo 'steam'; } ?>", "<?php if (!empty($this->e($membre["battlenet"]))) { echo 'battle'; }?>", "<?php if (!empty($this->e($membre["compte_nintendo"]))) { echo 'nintendo'; } ?>", "<?php if (!empty($this->e($membre["origin"]))) { echo 'origin'; } ?>", "<?php if (!empty($this->e($membre["linkedin"]))) { echo 'linkedin'; } ?>", "<?php if (!empty($this->e($membre["viadeo"]))) { echo 'viadeo'; } ?>", "<?php if (!empty($this->e($membre["xing"]))) { echo 'xing'; } ?>", "<?php if (!empty($this->e($membre["muxi"]))) { echo 'muxy'; } ?>", "<?php if (!empty($this->e($membre["github"]))) { echo 'github'; } ?>", "<?php if (!empty($this->e($membre["facebook"]))) { echo 'facebook'; } ?>", "<?php if (!empty($this->e($membre["twitter"]))) { echo 'twitter'; } ?>", "<?php if (!empty($this->e($membre["youtube"]))) { echo 'youtube'; } ?>", "<?php if (!empty($this->e($membre["google"]))) { echo 'google+'; } ?>", "<?php if (!empty($this->e($membre["skype"]))) { echo 'skype'; } ?>", "<?php if (!empty($this->e($membre["instagram"]))) { echo 'instagram'; } ?>", "<?php if (!empty($this->e($membre["pinterest"]))) { echo 'pinterest'; } ?>", "<?php if (!empty($this->e($membre["deezer"]))) { echo 'deezer'; } ?>", "<?php if (!empty($this->e($membre["spotify"]))) { echo 'spotify'; } ?>", "<?php if (!empty($this->e($membre["viber"]))) { echo 'viber'; } ?>"]'>

                        <figure class="portfolio-items">
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $membre['id']?>">

                                <!-- contenue de image-->
                                <div class=" vignette">
                                    <div class="row inside" >

                                        <img src="<?= $this->assetUrl("img/uploads/" . $membre["avatar"] . "")?>" class="avatar img-circle col-md-4 col-sm-4 col-xs-4"  alt="Item 1">


                                        <!-- fin contenue image  / début lettrage -->
                                        <div class="espacement col-md-5 col-sm-5 col-xs-4">
                                            <h3 class="row"><?php echo $this->e($membre['prenom'])?> <?php echo $this->e($membre['nom'])?></h3>
                                            <div class="row"><?php echo $this->e($membre['citation'])?></div>

                                        </div>
                                    </div><br>
                                </div>
                                <!-- fin letrrage  -->
                            </a>
                        </figure>
                    </li>


                    <!-- Modal -->
                    <?php require('partials/modal_profilMembres.php') ?>

                    <?php } ?>
                    <?php } ?>
                    <!-- sizer -->
                    <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

                </ul> <!--end portfolio grid -->
            </div> <!--end row -->
        </div> <!-- end container-->
    </section>
</div>	
<?php $this->stop('main_content') ?>