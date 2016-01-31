<?php $this->layout('layout', ['title' => 'modification profil - partie 1']);?>

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
            <div class="eye">
                <div class="iris">
                    <div class="pupil">
                        <div class="pupil-shine"></div>
                    </div>
                </div>
                <!--<div class="eyeshine"></div>-->
                <div class="lids"></div>
            </div>
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


<?php $this->start('main_content') ?>

<div class="inscript_back">
    <div id="" class="wrappInscr container">

        <form method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">  


            <div class="">
                <div class="">
                    <img src="<?= $this->assetUrl("img/uploads/" . $this->e($_SESSION['user']["avatar"]) . "") ?>" id="avatarInscr" class="img-responsive img-circle" alt="Responsive image" >
                </div>

            </div>

            <div class="row" id="espaceform">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $this->e($_SESSION['user']['nom'])?>" name="wuser[nom]">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="firstname">Prenom</label>
                    <input type="text" class="form-control" id="firstname" value="<?php echo $this->e($_SESSION['user']['prenom'])?>" name="wuser[prenom]">
                </div>

            </div>


            <div class="row">
                <div class="form-group col-md-12 col-xs-12">
                    <label for="birthD">date de naissance</label>
                    <input type="date" class="form-control" id="birthD" value="<?php echo $this->e($_SESSION['user']['ddn'])?>" name="wuser[ddn]">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" value="<?php echo $this->e($_SESSION['user']['adresse'])?>" name="wuser[adresse]">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="cp">Code Postal</label>
                    <input type="text" class="form-control" id="cp" value="<?php echo $this->e($_SESSION['user']['cp'])?>" name="wuser[cp]">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" value="<?php echo $this->e($_SESSION['user']['ville'])?>" name="wuser[ville]">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $this->e($_SESSION['user']['mail'])?>" name="wuser[mail]" value="">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="phone">Téléphone mobile</label>
                    <input type="text" class="form-control" id="phone" value="<?php echo $this->e($_SESSION['user']['phone'])?>" name="wuser[phone]">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="webSite">Site web-perso</label>
                    <input type="text" class="form-control" id="webSite" value="<?php echo $this->e($_SESSION['user']['siteWeb'])?>" name="wuser[siteWeb]">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="citation">Citation</label>
                    <input type="text" class="form-control" id="citation" value="<?php echo $this->e($_SESSION['user']['citation'])?>" name="wuser[citation]">
                </div>

            </div>
            <div class="row">

            </div>
            <label id="spanAvatar"for="pics" class=" col-md-3 col-xs-3">Avatar</label>
            <div class="col-md-6 col-xs-6">
                <input type="file" class="" id="pics" name="avatar">
            </div>
            <div id="bouton" class="row">
                <div class="col-md-offset-9 col-xs-offset-9 marginTop5Bottom10">
                    <input type="submit" class="btn btn-primary btn-navbut" name="suivant" value="Page suivante">
                </div>
            </div>

        </form>   

    </div>
</div>

<?php //print_r($_SESSION['inscription_1']); ?>

<?php $this->stop('main_content') ?>