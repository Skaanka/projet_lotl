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
        <?php echo $this->section('filtre') ?>
        <!-- Fin menu navbar en dropdown --> 
        

       
        <!-- Début container -->
        <div class="container-fluid no-padding">


            <div id="content" class="col-md-12 no-padding">
                <?= $this->section('main_content') ?>
            </div>

        </div> 
        <!-- Fin container -->
        
        <div id="footer" class="container-fluid no-padding">
        </div>

        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script type="text/javascript" src="<?= $this->assetUrl('js/eye.js') ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/jquery.shuffle.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>"></script>
        
       


    </body>
</html>