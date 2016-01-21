<?php $this->layout('layout', ['title' => 'inscription2']) ?>

<?php $this->start('main_content') ?>

	
        



        <div id="wrapper" class="col-md-10">
            <form class="col-md-10" method="POST">  

                
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
                            <input type="text" class="form-control" name="diplome['annees_obt']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome['intitule']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome['ecole']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="diplome2['annees_obt']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome2['intitule']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control"  name="diplome2['ecole']" >
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="diplome3['annees_obt']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome3['intitule']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome3['ecole']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="diplome4['annees_obt']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome4['intitule']">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="diplome4['ecole']">
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
                            <input type="text"  class="form-control" name="experience_pro['periode_debut']">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro['poste']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="experience_pro2['periode_debut']" >
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro2['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro2['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro2['poste']">
                        </div>
                    </div>
                   <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="experience_pro3['periode_debut']">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro3['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro3['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro3['poste']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="experience_pro4['periode_debut']">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro4['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro4['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro4['poste']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="experience_pro5['periode_debut']">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro5['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro5['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro5['poste']">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="experience_pro6['periode_debut']">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="experience_pro6['periode_fin']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro6['compagnie']">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="experience_pro6['poste']">
                        </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Compétences</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="competence['competences']"></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Fil d'actu.</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="fil_actus['message']"></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Portfolio en ligne</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <input type="text" class="form-control" rows="6" placeholder="http://..." name="protfolios['ad_folio']">
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