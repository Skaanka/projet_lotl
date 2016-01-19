<?php $this->layout('layout', ['title' => 'inscription2']) ?>

<?php $this->start('main_content') ?>
	
	
        
        <div id="connexionbar" class="col-md-8 col-md-offset-2">
            
            <form id="connexion" class="form-inline" method="POST">
                <?php 
                if (isset($_SESSION['user']) ) { 
                ?>
                    <div class="form-group">
                        <label for="profil">Bienvenue <?php echo $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] ; ?></label> <!-- TODO STYLE ECHO NOM PRENOM -->
                        <input type="submit" id="profil" class="btn btn-default btn-xs" name="profil" value="profil" formaction=".php">
                        <input type="submit" class="btn btn-default btn-xs" name="deconnexion" value="déconnexion" formaction="../../php/logoff.php">
                    </div>
                <?php
                } elseif ( empty($_SESSION['user']) )  {
                ?>
                    <div class="form-group">
                        <label class="sr-only" for="mail">Email address</label>
                        <input type="email" class="mail" id="mail" placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="" id="password" placeholder="Password" name="mot_de_passe">
                    </div>

                     <input type="submit" class="dropdown-toggle" name="connexion" value="connexion" formaction="../../php/login.php">
                    <input type="submit" class="dropdown-toggle" name="" formaction="formulaire.php" value="Inscription">
                <?php
                    //echo $login_erreur; // TODO affiche message d'erreur : "erreur email ou mot de passe, veuillez réessayer" 
                }
                ?>
            </form>
        </div>

        <div id="header" class="col-md-8 col-md-offset-2">

        </div>
        
        
        <!-- menu navbar en dropdown -->
        <div class="row col-md-8 col-md-offset-2" id="menu-nav">
            
            <a href="../../index.php">
                <button type="button" class="dropdown-toggle" >
                    <img src="../../img/icons/ring.png" id="home">
                </button>
            </a>
            
            <!-- bouton divertissement -->
            <div class="btn-group" >
              <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divertissement <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?divCat=" . 0 ; ?>"><img src="../../img/icons/PSN_logo.png" class="iconMini">&nbsp;PSN</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 1 ; ?>"><img src="../../img/icons/Xbox_logo.png" class="iconMini">&nbsp;XboxLive</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 2 ; ?>"><img src="../../img/icons/Steam_logo.png" class="iconMini">&nbsp;Steam</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 3 ; ?>"><img src="../../img/icons/battlenet_logo.png" class="iconMini">&nbsp;Battle.net</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 4 ; ?>"><img src="../../img/icons/nintendo_logo.png" class="iconMini">&nbsp;Nintendo</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 5 ; ?>"><img src="../../img/icons/origin1_logo.png" class="iconMini">&nbsp;Origin</a></li>
              </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux pro. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?proCat=" . 0 ; ?>"><img src="../../img/icons/linkedin_logo.png" class="iconMini">&nbsp;LinkedIn</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 1 ; ?>"><img src="../../img/icons/viadeo_logo.png" class="iconMini">&nbsp;Viadeo</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 2 ; ?>"><img src="../../img/icons/xing_logo.png" class="iconMini">&nbsp;xing</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 3 ; ?>"><img src="../../img/icons/muxi_logo.jpg" class="iconMini">&nbsp;Muxy</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 4 ; ?>"><img src="../../img/icons/github_logo.png" class="iconMini">&nbsp;GitHub</a></li>
              </ul>
            </div>
            
            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux sociaux <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo "?resCat=" . 0 ; ?>"><img src="../../img/icons/FB_logo.png" class="iconMini">&nbsp;Facebook</a></li>
                <li><a href="<?php echo "?resCat=" . 1 ; ?>"><img src="../../img/icons/Twitter-logo.png" class="iconMini">&nbsp;Twitter</a></li>
                <li><a href="<?php echo "?resCat=" . 2 ; ?>"><img src="../../img/icons/YouTube-logo.png" class="iconMini">&nbsp;Youtube</a></li>
                <li><a href="<?php echo "?resCat=" . 3 ; ?>"><img src="../../img/icons/googleplus_logo.png" class="iconMini">&nbsp;Google+</a></li>
                <li><a href="<?php echo "?resCat=" . 4 ; ?>"><img src="../../img/icons/Skype_logo.png" class="iconMini">&nbsp;Skype</a></li>
                <li><a href="<?php echo "?resCat=" . 5 ; ?>"><img src="../../img/icons/instagram_logo.png" class="iconMini">&nbsp;Instagram</a></li>
                <li><a href="<?php echo "?resCat=" . 6 ; ?>"><img src="../../img/icons/pinterest-logo.png" class="iconMini">&nbsp;Pinterest</a></li>
                <li><a href="<?php echo "?resCat=" . 7 ; ?>"><img src="../../img/icons/Deezer_logo.png" class="iconMini">&nbsp;Deezer</a></li>
                <li><a href="<?php echo "?resCat=" . 8 ; ?>"><img src="../../img/icons/Spotify_logo.png" class="iconMini">&nbsp;Spotify</a></li>
                <li><a href="<?php echo "?resCat=" . 9 ; ?>"><img src="../../img/icons/Viber-logo.png" class="iconMini">&nbsp;Viber</a></li>
              </ul>
            </div>
            
        </div><!-- Fin de menu navbar -->







        <div id="wrapper" class="col-md-8 col-md-offset-2">
            <form class="col-md-6 col-md-offset-3" method="POST">  

                
                <h1>Parcour pro.</h1><br/>

                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Diplomes</h3></div>
                    <div class="panel-body">
                    <div class="row" id="diplomes">
                        
                        <div class="form-group col-md-2">
                            <label for="annees">Années d'obt.</label>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="intitule">Intitulé</label>

                        </div>
                        <div class="form-group col-md-5">
                            <label for="ecole">Ecole</label>
                        </div>
                    </div>
                            
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt'])) {echo $_SESSION['inscription']['annees_obt'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule" value="<?php  if ( !empty($_SESSION['inscription']['intitule'])) {echo $_SESSION['inscription']['intitule'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole" value="<?php  if ( !empty($_SESSION['inscription']['ecole'])) {echo $_SESSION['inscription']['ecole'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt2" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt2'])) {echo $_SESSION['inscription']['annees_obt2'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule2" value="<?php  if ( !empty($_SESSION['inscription']['intitule2'])) {echo $_SESSION['inscription']['intitule2'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control"  name="ecole2" value="<?php  if ( !empty($_SESSION['inscription']['ecole2'])) {echo $_SESSION['inscription']['ecole2'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt3" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt3'])) {echo $_SESSION['inscription']['annees_obt3'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule3" value="<?php  if ( !empty($_SESSION['inscription']['intitule3'])) {echo $_SESSION['inscription']['intitule3'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole3" value="<?php  if ( !empty($_SESSION['inscription']['ecole3'])) {echo $_SESSION['inscription']['ecole3'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt4" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt4'])) {echo $_SESSION['inscription']['annees_obt4'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule4" value="<?php  if ( !empty($_SESSION['inscription']['intitule4'])) {echo $_SESSION['inscription']['intitule4'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole4" value="<?php  if ( !empty($_SESSION['inscription']['ecole4'])) {echo $_SESSION['inscription']['ecole4'];}  ?>">
                        </div>
                    </div>
                      </div>
                    </div>
                

                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Experience pro.</h3></div>
                  <div class="panel-body">
                    
                    <div class="row" id="diplomes">
                        <div class="form-group col-md-4">
                            <label for="periode">Période</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="compagnie">Compagnie</label>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="intitulePoste">Intitulé du poste</label>
                        </div>
                    </div>

                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut'])) {echo $_SESSION['inscription']['periode_debut'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin'])) {echo $_SESSION['inscription']['periode_fin'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie" value="<?php  if ( !empty($_SESSION['inscription']['compagnie'])) {echo $_SESSION['inscription']['compagnie'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste" value="<?php  if ( !empty($_SESSION['inscription']['poste'])) {echo $_SESSION['inscription']['poste'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut2" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut2'])) {echo $_SESSION['inscription']['periode_debut2'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin2" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin2'])) {echo $_SESSION['inscription']['periode_fin2'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie2" value="<?php  if ( !empty($_SESSION['inscription']['compagnie2'])) {echo $_SESSION['inscription']['compagnie2'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste2" value="<?php  if ( !empty($_SESSION['inscription']['poste2'])) {echo $_SESSION['inscription']['poste2'];}  ?>">
                        </div>
                    </div>
                   <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut3" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut3'])) {echo $_SESSION['inscription']['periode_debut3'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin3" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin3'])) {echo $_SESSION['inscription']['periode_fin3'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie3" value="<?php  if ( !empty($_SESSION['inscription']['compagnie3'])) {echo $_SESSION['inscription']['compagnie3'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste3" value="<?php  if ( !empty($_SESSION['inscription']['poste3'])) {echo $_SESSION['inscription']['poste3'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut4" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut4'])) {echo $_SESSION['inscription']['periode_debut4'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin4" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin4'])) {echo $_SESSION['inscription']['periode_fin4'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie4" value="<?php  if ( !empty($_SESSION['inscription']['compagnie4'])) {echo $_SESSION['inscription']['compagnie4'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste4" value="<?php  if ( !empty($_SESSION['inscription']['poste4'])) {echo $_SESSION['inscription']['poste4'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut5" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut5'])) {echo $_SESSION['inscription']['periode_debut5'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin5" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin5'])) {echo $_SESSION['inscription']['periode_fin5'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie5" value="<?php  if ( !empty($_SESSION['inscription']['compagnie5'])) {echo $_SESSION['inscription']['compagnie5'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste5" value="<?php  if ( !empty($_SESSION['inscription']['poste5'])) {echo $_SESSION['inscription']['poste5'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut6" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut6'])) {echo $_SESSION['inscription']['periode_debut6'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin6" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin6'])) {echo $_SESSION['inscription']['periode_fin6'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie6" value="<?php  if ( !empty($_SESSION['inscription']['compagnie6'])) {echo $_SESSION['inscription']['compagnie6'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste6" value="<?php  if ( !empty($_SESSION['inscription']['poste6'])) {echo $_SESSION['inscription']['poste6'];}  ?>">
                        </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Compétences</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="competences"><?php  if ( !empty($_SESSION['inscription']['competences'])) {echo $_SESSION['inscription']['competences'];}  ?></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                    if (isset($_SESSION['user']) ) {
                ?>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Fil d'actu.</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="messages"><?php  if ( !empty($_SESSION['inscription']['messages'])) {echo $_SESSION['inscription']['messages'];}  ?></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                    }
                ?>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Portfolio en ligne</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <input type="text" class="form-control" rows="6" placeholder="http://..." name="porte_folio" value="<?php  if ( !empty($_SESSION['inscription']['porte_folio'])) {echo $_SESSION['inscription']['porte_folio'];}  ?>">
                    </div>
                  </div>
                </div>
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-default col-md-offset-1" value="Page précédente" formaction="formulaire.php" name="return">
                        <input type="submit" class="btn btn-default col-md-offset-5" value="Page suivante" formaction="formulaire_post2.php" name="submit">
                    </div>
                </div>

            </form>   

        </div>

    <?php $this->stop('main_content') ?>