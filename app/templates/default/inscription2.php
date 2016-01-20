<?php $this->layout('layout', ['title' => 'inscription2']) ?>

<?php $this->start('main_content') ?>

	
        



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
                            <input type="text" class="form-control" name="inscription_2['annees_obt']" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt'])) {echo $_SESSION['inscription']['annees_obt'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['intitule']" value="<?php  if ( !empty($_SESSION['inscription']['intitule'])) {echo $_SESSION['inscription']['intitule'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['ecole']" value="<?php  if ( !empty($_SESSION['inscription']['ecole'])) {echo $_SESSION['inscription']['ecole'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="inscription_2['annees_obt2']" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt2'])) {echo $_SESSION['inscription']['annees_obt2'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['intitule2']" value="<?php  if ( !empty($_SESSION['inscription']['intitule2'])) {echo $_SESSION['inscription']['intitule2'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control"  name="inscription_2['ecole2']" value="<?php  if ( !empty($_SESSION['inscription']['ecole2'])) {echo $_SESSION['inscription']['ecole2'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="inscription_2['annees_obt3']" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt3'])) {echo $_SESSION['inscription']['annees_obt3'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['intitule3']" value="<?php  if ( !empty($_SESSION['inscription']['intitule3'])) {echo $_SESSION['inscription']['intitule3'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['ecole3']" value="<?php  if ( !empty($_SESSION['inscription']['ecole3'])) {echo $_SESSION['inscription']['ecole3'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="inscription_2['annees_obt4']" value="<?php  if ( !empty($_SESSION['inscription']['annees_obt4'])) {echo $_SESSION['inscription']['annees_obt4'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['intitule4']" value="<?php  if ( !empty($_SESSION['inscription']['intitule4'])) {echo $_SESSION['inscription']['intitule4'];}  ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="inscription_2['ecole4']" value="<?php  if ( !empty($_SESSION['inscription']['ecole4'])) {echo $_SESSION['inscription']['ecole4'];}  ?>">
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
                            <input type="text"  class="form-control" name="inscription_2['periode_debut']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut'])) {echo $_SESSION['inscription']['periode_debut'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin'])) {echo $_SESSION['inscription']['periode_fin'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie'])) {echo $_SESSION['inscription']['compagnie'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste']" value="<?php  if ( !empty($_SESSION['inscription']['poste'])) {echo $_SESSION['inscription']['poste'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="inscription_2['periode_debut2']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut2'])) {echo $_SESSION['inscription']['periode_debut2'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin2']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin2'])) {echo $_SESSION['inscription']['periode_fin2'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie2']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie2'])) {echo $_SESSION['inscription']['compagnie2'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste2']" value="<?php  if ( !empty($_SESSION['inscription']['poste2'])) {echo $_SESSION['inscription']['poste2'];}  ?>">
                        </div>
                    </div>
                   <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="inscription_2['periode_debut3']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut3'])) {echo $_SESSION['inscription']['periode_debut3'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin3']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin3'])) {echo $_SESSION['inscription']['periode_fin3'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie3']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie3'])) {echo $_SESSION['inscription']['compagnie3'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste3']" value="<?php  if ( !empty($_SESSION['inscription']['poste3'])) {echo $_SESSION['inscription']['poste3'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="inscription_2['periode_debut4']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut4'])) {echo $_SESSION['inscription']['periode_debut4'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin4']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin4'])) {echo $_SESSION['inscription']['periode_fin4'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie4']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie4'])) {echo $_SESSION['inscription']['compagnie4'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste4']" value="<?php  if ( !empty($_SESSION['inscription']['poste4'])) {echo $_SESSION['inscription']['poste4'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="inscription_2['periode_debut5']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut5'])) {echo $_SESSION['inscription']['periode_debut5'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin5']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin5'])) {echo $_SESSION['inscription']['periode_fin5'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie5']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie5'])) {echo $_SESSION['inscription']['compagnie5'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste5']" value="<?php  if ( !empty($_SESSION['inscription']['poste5'])) {echo $_SESSION['inscription']['poste5'];}  ?>">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="inscription_2['periode_debut6']" value="<?php  if ( !empty($_SESSION['inscription']['periode_debut6'])) {echo $_SESSION['inscription']['periode_debut6'];}  ?>">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="inscription_2['periode_fin6']" value="<?php  if ( !empty($_SESSION['inscription']['periode_fin6'])) {echo $_SESSION['inscription']['periode_fin6'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['compagnie6']" value="<?php  if ( !empty($_SESSION['inscription']['compagnie6'])) {echo $_SESSION['inscription']['compagnie6'];}  ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inscription_2['poste6']" value="<?php  if ( !empty($_SESSION['inscription']['poste6'])) {echo $_SESSION['inscription']['poste6'];}  ?>">
                        </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Compétences</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="inscription_2['competences']"><?php  if ( !empty($_SESSION['inscription']['competences'])) {echo $_SESSION['inscription']['competences'];}  ?></textarea>
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
                        <textarea class="form-control" rows="6" name="inscription_2['messages']"><?php  if ( !empty($_SESSION['inscription']['messages'])) {echo $_SESSION['inscription']['messages'];}  ?></textarea>
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
                        <input type="text" class="form-control" rows="6" placeholder="http://..." name="inscription_2['porte_folio']" value="<?php  if ( !empty($_SESSION['inscription']['porte_folio'])) {echo $_SESSION['inscription']['porte_folio'];}  ?>">
                    </div>
                  </div>
                </div>
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-default col-md-offset-1" value="Page précédente" name="precedent">
                        <input type="submit" class="btn btn-default col-md-offset-5" value="Page suivante" name="suivant2">
                    </div>
                </div>

            </form>   

        </div>
 <?php debug($_SESSION['inscription_1']); ?>
	

    <?php $this->stop('main_content') ?>