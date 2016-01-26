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
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!--Feuilles de style-->
		<link href="<?= $this->assetUrl('css/bootstrap/bootstrap.css') ?>" rel="stylesheet">
		<link href="<?= $this->assetUrl('css/style.css') ?>" rel="stylesheet">

		<!--Favicon trop stylé-->
		<link rel="icon" href="<?= $this->assetUrl('img/sonic_ring.gif') ?>" />

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





		

        <?= $this->section('navBar') ?>
        <?= $this->section('carousel') ?>


		<!-- menu navbar en dropdown -->
		<div class="col-md-4 col-md-offset-4" id="menu-nav">

			<div class="btn-group btn_home">
                <ul class="portfolio-sorting list-inline ul_btnHome">
                    <li>
                        <a href="#" data-group="all" class="active"><img src="<?= $this->assetUrl('img/icons/ring.png') ?>" id="home"></a>
                    </li>
                </ul>
            </div>

			<!-- bouton divertissement -->
			<div class="btn-group" >
				<button type="button" id="btnDivertissement" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Divertissement <span class="caret"></span>
				</button>
				<ul class="dropdown-menu portfolio-sorting list-inline">
					<li><a href="#" data-group="psn"><img src="<?= $this->assetUrl('img/icons/PSN_logo.png') ?>" class="iconMini">&nbsp;PSN</a></li>
					<li><a href="#" data-group="xbox"><img src="<?= $this->assetUrl('img/icons/Xbox_logo.png') ?>" class="iconMini">&nbsp;XboxLive</a></li>
					<li><a href="#" data-group="steam"><img src="<?= $this->assetUrl('img/icons/Steam_logo.png') ?>" class="iconMini">&nbsp;Steam</a></li>
					<li><a href="#" data-group="battle"><img src="<?= $this->assetUrl('img/icons/battlenet_logo.png') ?>" class="iconMini">&nbsp;Battle.net</a></li>
					<li><a href="#" data-group="nintendo"><img src="<?= $this->assetUrl('img/icons/nintendo_logo.png') ?>" class="iconMini">&nbsp;Nintendo</a></li>
					<li><a href="#" data-group="origin"><img src="<?= $this->assetUrl('img/icons/origin1_logo.png') ?>" class="iconMini">&nbsp;Origin</a></li>
				</ul>
			</div>

			<!-- bouton réseaux pro -->
			<div class="btn-group">
				<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Réseaux pro. <span class="caret"></span>
				</button>
				<ul class="dropdown-menu portfolio-sorting list-inline">
					<li><a href="#" data-group="linkedin"><img src="<?= $this->assetUrl('img/icons/linkedin_logo.png') ?>" class="iconMini">&nbsp;LinkedIn</a></li>
					<li><a href="#" data-group="viadeo"><img src="<?= $this->assetUrl('img/icons/viadeo_logo.png') ?>" class="iconMini">&nbsp;Viadeo</a></li>
					<li><a href="#" data-group="xing"><img src="<?= $this->assetUrl('img/icons/xing_logo.png') ?>" class="iconMini">&nbsp;xing</a></li>
					<li><a href="#" data-group="muxy"><img src="<?= $this->assetUrl('img/icons/muxi_logo.jpg') ?>" class="iconMini">&nbsp;Muxy</a></li>
					<li><a href="#" data-group="github"><img src="<?= $this->assetUrl('img/icons/github_logo.png') ?>" class="iconMini">&nbsp;GitHub</a></li>
				</ul>
			</div>

			<!-- bouton réseaux sociaux-->
			<div class="btn-group">
				<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Réseaux sociaux <span class="caret"></span>
				</button>
				<ul class="dropdown-menu portfolio-sorting list-inline">
					<li><a href="#" data-group="facebook"><img src="<?= $this->assetUrl('img/icons/FB_logo.png')?>" class="iconMini">&nbsp;Facebook</a></li>
					<li><a href="#" data-group="twitter"><img src="<?= $this->assetUrl('img/icons/Twitter-logo.png')?>" class="iconMini">&nbsp;Twitter</a></li>
					<li><a href="#" data-group="youtube"><img src="<?= $this->assetUrl('img/icons/YouTube-logo.png')?>" class="iconMini">&nbsp;Youtube</a></li>
					<li><a href="#" data-group="google+"><img src="<?= $this->assetUrl('img/icons/googleplus_logo.png')?>" class="iconMini">&nbsp;Google+</a></li>
					<li><a href="#" data-group="skype"><img src="<?= $this->assetUrl('img/icons/Skype_logo.png')?>" class="iconMini">&nbsp;Skype</a></li>
					<li><a href="#" data-group="instagram"><img src="<?= $this->assetUrl('img/icons/instagram_logo.png')?>" class="iconMini">&nbsp;Instagram</a></li>
					<li><a href="#" data-group="pinterest"><img src="<?= $this->assetUrl('img/icons/pinterest-logo.png')?>" class="iconMini">&nbsp;Pinterest</a></li>
					<li><a href="#" data-group="deezer"><img src="<?= $this->assetUrl('img/icons/Deezer_logo.png')?>" class="iconMini">&nbsp;Deezer</a></li>
					<li><a href="#" data-group="spotify"><img src="<?= $this->assetUrl('img/icons/Spotify_logo.png')?>" class="iconMini">&nbsp;Spotify</a></li>
					<li><a href="#" data-group="viber"><img src="<?= $this->assetUrl('img/icons/Viber-logo.png')?>" class="iconMini">&nbsp;Viber</a></li>
				</ul>
			</div>

		</div><!-- Fin de menu navbar -->

		<div class="container-fluid no-padding">


			<div id="content" class="col-md-12 no-padding">
				<?= $this->section('main_content') ?>
			</div>

		</div> <!-- /container -->
		<div id="footer" class="container-fluid no-padding">
		</div>

		<!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/jquery.shuffle.min.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>"></script>
        
        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>