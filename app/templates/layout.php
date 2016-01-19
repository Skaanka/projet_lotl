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
                    <a class="navbar-brand" href="#">Project name</a>
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

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <section>
			
			     <?= $this->section('main_content') ?>
		      </section>
                
                
            </div>
        </div>

        <div class="container">
            <div class="left-bar"></div>
            
            <div class="right-bar"></div>
            
        </div> <!-- /container -->
        <footer></footer>

        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>