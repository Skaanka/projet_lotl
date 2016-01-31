
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
        <link href="<?= $this->assetUrl('css/home/style.css') ?>" rel="stylesheet">
         <link href="<?= $this->assetUrl('css/animate.min.css') ?>" rel="stylesheet">
        <!--fichier font google -->
        <script src="//use.edgefonts.net/kotta-one.js"></script> 


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
        
        <?= $this->section('validation') ?>
        <?= $this->section('main_content') ?>
        
        
        
        <div id="footerHome" class="container-fluid no-padding">
            <div class="col-xs-6 col-sm-offset-8 col-sm-1  col-lg-offset-8 col-lg-1 text-center hauteurFooter">
                <a href="mailto:saurondumordorlouviers@gmail.com">Contact</a>
            </div>
            <div class="col-xs-6 col-sm-1 col-lg-1 text-center hauteurFooter">
                <a href="<?php $this->redirect('http://www.jesuistondev.fr/'); ?>" target="_blank">JeSuisTonDev.fr</a>
            </div>
        </div>
        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>