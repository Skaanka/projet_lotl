<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"> 

        <!-- Compatibilité Internet Explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="" />
        <meta name="description" content="">  

        <title><?= $this->e($title) ?></title>

        <!--Feuilles de style-->
        <link href="<?= $this->assetUrl('css/bootstrap/bootstrap.css') ?>" rel="stylesheet">
        <link href="<?= $this->assetUrl('css/style.css') ?>" rel="stylesheet">


        <!--font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Indie+Flower|Droid+Sans:400,700'" type='text/css'>

        <!--Support des éléments HTML5 et des mediaqueries pour IE8 et précédents : HTML5 shiv et Respond.js-->
        <!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <div id="header" class="container-fluid no-padding"><img src="<?php echo $this->assetUrl('img/bandeau.jpg') ?>" alt="" class="img-reponsive col-xs-12 no-padding"></div>

        <!-- menu navbar en dropdown -->
        <div class="container-fluid" id="menu-nav">

            <div class="btn-group">
                <a href="index.php">
                    <button type="button" class="dropdown-toggle"> 
                        <img src="<?= $this->assetUrl('img/icons/ring.png') ?>" id="home">
                    </button>
                </a>
            </div>

            <!-- bouton divertissement -->
            <div class="btn-group" >
                <button type="button" id="btnDivertissement" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Divertissement <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="index.php<?php echo "?divCat=" . 0 ; ?>"><img src="<?= $this->assetUrl('img/icons/PSN_logo.png') ?>" class="iconMini">&nbsp;PSN</a></li>
                    <li><a href="index.php<?php echo "?divCat=" . 1 ; ?>"><img src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>" class="iconMini">&nbsp;XboxLive</a></li>
                    <li><a href="index.php<?php echo "?divCat=" . 2 ; ?>"><img src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>" class="iconMini">&nbsp;Steam</a></li>
                    <li><a href="index.php<?php echo "?divCat=" . 3 ; ?>"><img src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>" class="iconMini">&nbsp;Battle.net</a></li>
                    <li><a href="index.php<?php echo "?divCat=" . 4 ; ?>"><img src="<?= $this->assetUrl('img/icons/nintendo_logo.png') ?>" class="iconMini">&nbsp;Nintendo</a></li>
                    <li><a href="index.php<?php echo "?divCat=" . 5 ; ?>"><img src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>" class="iconMini">&nbsp;Origin</a></li>
                </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Réseaux pro. <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="index.php<?php echo "?proCat=" . 0 ; ?>"><img src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>" class="iconMini">&nbsp;LinkedIn</a></li>
                    <li><a href="index.php<?php echo "?proCat=" . 1 ; ?>"><img src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>" class="iconMini">&nbsp;Viadeo</a></li>
                    <li><a href="index.php<?php echo "?proCat=" . 2 ; ?>"><img src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>" class="iconMini">&nbsp;xing</a></li>
                    <li><a href="index.php<?php echo "?proCat=" . 3 ; ?>"><img src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>" class="iconMini">&nbsp;Muxy</a></li>
                    <li><a href="index.php<?php echo "?proCat=" . 4 ; ?>"><img src="<?= $this->assetUrl('img/icons/github_logo.png') ?>" class="iconMini">&nbsp;GitHub</a></li>
                </ul>
            </div>

            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Réseaux sociaux <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo "?resCat=" . 0 ; ?>"><img src="<?= $this->assetUrl('img/icons/FB_logo.png')?>" class="iconMini">&nbsp;Facebook</a></li>
                    <li><a href="<?php echo "?resCat=" . 1 ; ?>"><img src="<?= $this->assetUrl('img/icons/Twitter-logo.png')?>" class="iconMini">&nbsp;Twitter</a></li>
                    <li><a href="<?php echo "?resCat=" . 2 ; ?>"><img src="<?= $this->assetUrl('img/icons/YouTube-logo.png')?>" class="iconMini">&nbsp;Youtube</a></li>
                    <li><a href="<?php echo "?resCat=" . 3 ; ?>"><img src="<?= $this->assetUrl('img/icons/googleplus_logo.png')?>" class="iconMini">&nbsp;Google+</a></li>
                    <li><a href="<?php echo "?resCat=" . 4 ; ?>"><img src="<?= $this->assetUrl('img/icons/Skype_logo.png')?>" class="iconMini">&nbsp;Skype</a></li>
                    <li><a href="<?php echo "?resCat=" . 5 ; ?>"><img src="<?= $this->assetUrl('img/icons/instagram_logo.png')?>" class="iconMini">&nbsp;Instagram</a></li>
                    <li><a href="<?php echo "?resCat=" . 6 ; ?>"><img src="<?= $this->assetUrl('img/icons/pinterest-logo.png')?>" class="iconMini">&nbsp;Pinterest</a></li>
                    <li><a href="<?php echo "?resCat=" . 7 ; ?>"><img src="<?= $this->assetUrl('img/icons/Deezer_logo.png')?>" class="iconMini">&nbsp;Deezer</a></li>
                    <li><a href="<?php echo "?resCat=" . 8 ; ?>"><img src="<?= $this->assetUrl('img/icons/Spotify_logo.png')?>" class="iconMini">&nbsp;Spotify</a></li>
                    <li><a href="<?php echo "?resCat=" . 9 ; ?>"><img src="<?= $this->assetUrl('img/icons/Viber-logo.png')?>" class="iconMini">&nbsp;Viber</a></li>
                </ul>
            </div>

        </div><!-- Fin de menu navbar -->

        <div class="container-fluid no-padding">

            <div id="sidebarMembres" class="col-md-2">
                <h2>Liste des membres</h2><br/>
                <ul id="membres" >
                    <li id="animated-example" class="animated fadeInLeft"><a href="" class="scrollMembres">Prenom Nom</a></li>    
                </ul>
            </div>
            <div id="content" class="col-md-10 no-padding">
                <?= $this->section('main_content') ?>
            </div>

        </div> <!-- /container -->
        <div id="footer" class="container-fluid no-padding">
        </div>

        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>"></script>
    </body>
</html>