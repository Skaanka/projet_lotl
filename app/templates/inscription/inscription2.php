<?php $this->layout('layout_home', ['title' => 'inscription - partie 2']) ?>

<?php $this->start('main_content') ?>





<div class="inscript_back">
    <div id="wrapper" class="wrappInscr container">
        <form class="inscr2 col-md-12" method="POST">  

            <div class="title_inscipt col-md-4 col-md-offset-4 text-center">
                <h1>Parcour pro.</h1><br/>
            </div>


            <div class="col-md-10 col-md-offset-1 espacement2">
 

                <div class=""><legend><h3 class="text-center">Diplomes</h3></legend></div>

                <div class="row" id="diplomes">
                    <div class="form-group col-md-2 col-xs-2">
                        <label for="annees">Années d'obt.</label>
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <label for="intitule">Intitulé</label>

                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <label for="ecole">Ecole</label>
                    </div>
                </div>

                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="diplome[annees_obt]" value="<?php if (!empty($_SESSION['diplomeInsc']['annees_obt'])) { echo $this->e($_SESSION['diplomeInsc']['annees_obt']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[intitule]" value="<?php if (!empty($_SESSION['diplomeInsc']['intitule'])) { echo $this->e($_SESSION['diplomeInsc']['intitule']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[ecole]" value="<?php if (!empty($_SESSION['diplomeInsc']['ecole'])) { echo $this->e($_SESSION['diplomeInsc']['ecole']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="diplome[annees_obt2]" value="<?php if (!empty($_SESSION['diplomeInsc']['annees_obt2'])) { echo $this->e($_SESSION['diplomeInsc']['annees_obt2']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[intitule2]" value="<?php if (!empty($_SESSION['diplomeInsc']['intitule2'])) { echo $this->e($_SESSION['diplomeInsc']['intitule2']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control"  name="diplome[ecole2]" value="<?php if (!empty($_SESSION['diplomeInsc']['ecole2'])) { echo $this->e($_SESSION['diplomeInsc']['ecole2']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="diplome[annees_obt3]" value="<?php if (!empty($_SESSION['diplomeInsc']['annees_obt3'])) { echo $this->e($_SESSION['diplomeInsc']['annees_obt3']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[intitule3]" value="<?php if (!empty($_SESSION['diplomeInsc']['intitule3'])) { echo $this->e($_SESSION['diplomeInsc']['intitule3']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[ecole3]" value="<?php if (!empty($_SESSION['diplomeInsc']['ecole3'])) { echo $this->e($_SESSION['diplomeInsc']['ecole3']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="diplome[annees_obt4]" value="<?php if (!empty($_SESSION['diplomeInsc']['annees_obt4'])) { echo $this->e($_SESSION['diplomeInsc']['annees_obt4']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[intitule4]" value="<?php if (!empty($_SESSION['diplomeInsc']['intitule4'])) { echo $this->e($_SESSION['diplomeInsc']['intitule4']); } ?>">
                    </div>
                    <div class="form-group col-md-5 col-xs-5">
                        <input type="text" class="form-control" name="diplome[ecole4]" value="<?php if (!empty($_SESSION['diplomeInsc']['ecole4'])) { echo $this->e($_SESSION['diplomeInsc']['ecole4']); } ?>">
                    </div>
                </div>
            
            </div>



            <div class="col-md-10 col-md-offset-1 espacement2">

                <div class=""><legend><h3 class="text-center">Experience pro.</h3></legend></div>


                <div class="row" id="diplomes">
                    <div class="form-group col-md-4 col-xs-4">
                        <label for="periode">Période</label>
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <label for="compagnie">Compagnie</label>

                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <label for="intitulePoste">Intitulé du poste</label>
                    </div>
                </div>

                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste'])) { echo $this->e($_SESSION['experience_proInsc']['poste']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut2]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut2'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut2']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin2]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin2'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin2']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie2]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie2'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie2']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste2]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste2'])) { echo $this->e($_SESSION['experience_proInsc']['poste2']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut3]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut3'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut3']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin3]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin3'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin3']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie3]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie3'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie3']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste3]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste3'])) { echo $this->e($_SESSION['experience_proInsc']['poste3']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut4]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut4'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut4']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin4]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin4'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin4']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie4]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie4'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie4']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste4]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste4'])) { echo $this->e($_SESSION['experience_proInsc']['poste4']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut5]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut5'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut5']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin5]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin5'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin5']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie5]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie5'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie5']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste5]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste5'])) { echo $this->e($_SESSION['experience_proInsc']['poste5']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut6]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_debut6'])) { echo $this->e($_SESSION['experience_proInsc']['periode_debut6']); } ?>">
                    </div>
                    <div class="form-group col-md-2 col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin6]" value="<?php if (!empty($_SESSION['experience_proInsc']['periode_fin6'])) { echo $this->e($_SESSION['experience_proInsc']['periode_fin6']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie6]" value="<?php if (!empty($_SESSION['experience_proInsc']['compagnie6'])) { echo $this->e($_SESSION['experience_proInsc']['compagnie6']); } ?>">
                    </div>
                    <div class="form-group col-md-4 col-xs-4">
                        <input type="text" class="form-control" name="experience_pro[poste6]" value="<?php if (!empty($_SESSION['experience_proInsc']['poste6'])) { echo $this->e($_SESSION['experience_proInsc']['poste6']); } ?>">
                    </div>

                </div>
            </div>



            <div class="col-md-8 col-md-offset-2 espacement2">

                <div class=""><legend><h3 class="text-center">Compétences</h3></legend></div>


                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="competence[competence]"><?php if (!empty($_SESSION['competenceInsc']['competence'])) { echo $this->e($_SESSION['competenceInsc']['competence']); } ?></textarea>
                </div>


            </div>

            <div class="col-md-8 col-md-offset-2 espacement2">

                <div class=""><legend><h3 class="text-center">Fil d'actu.</h3></legend></div>
                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="fil_actu[message]"><?php if (!empty($_SESSION['fil_actuInsc']['message'])) { echo $this->e($_SESSION['fil_actuInsc']['message']); } ?></textarea>
                </div>


            </div>

            <div class="col-md-8 col-md-offset-2 espacement2">
                <div class=""><legend><h3 class="text-center">Portfolio en ligne</h3></legend></div>

                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" rows="6" placeholder="http://..." name="portfolio[ad_portfolio]" value="<?php if (!empty($_SESSION['portfolioInsc']['ad_portfolio'])) { echo $this->e($_SESSION['portfolioInsc']['ad_portfolio']); } ?>">
                </div>
            </div>
                    



            <legend>
            <div id="" class="row">
                <div class="">
                    <input type="submit" class="btn-navbut btn btn-primary col-md-offset-3 col-xs-offset-3 marginTop5Bottom10" value="Page précédente" name="precedent">
                    <input type="submit" class="btn-navbut btn btn-primary col-md-offset-3 col-xs-offset-3 marginTop5Bottom10" value="Page suivante" name="suivant2">
                </div>
            </div>
            </legend>

        </form>   

    </div>
</div>
<?php //debug($_SESSION['inscription_1']); ?>


<?php $this->stop('main_content') ?>