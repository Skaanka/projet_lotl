<?php $this->layout('layout_home', ['title' => 'inscription - partie 2']) ?>

<?php $this->start('main_content') ?>





<div class="inscript_back">
    <div id="wrapper" class="wrappInscr container">
        <form class="inscr2 col-md-12" method="POST">  

            <div class="title_inscipt col-md-offset-0 text-center">
                <h1>Parcour pro.</h1><br/>
            </div>


            <div class="col-md-10 col-md-offset-1 espacement2">

                <div class=""><h3>Diplomes</h3></div>

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
                        <input type="text" class="form-control" name="diplome[annees_obt]" value="<?php if (!empty($_SESSION['diplome']['annees_obt'])) { echo $this->e($_SESSION['diplome']['annees_obt']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule]" value="<?php if (!empty($_SESSION['diplome']['intitule'])) { echo $this->e($_SESSION['diplome']['intitule']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole]" value="<?php if (!empty($_SESSION['diplome']['ecole'])) { echo $this->e($_SESSION['diplome']['ecole']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt2]" value="<?php if (!empty($_SESSION['diplome']['annees_obt2'])) { echo $this->e($_SESSION['diplome']['annees_obt2']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule2]" value="<?php if (!empty($_SESSION['diplome']['intitule2'])) { echo $this->e($_SESSION['diplome']['intitule2']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control"  name="diplome[ecole2]" value="<?php if (!empty($_SESSION['diplome']['ecole2'])) { echo $this->e($_SESSION['diplome']['ecole2']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt3]" value="<?php if (!empty($_SESSION['diplome']['annees_obt3'])) { echo $this->e($_SESSION['diplome']['annees_obt3']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule3]" value="<?php if (!empty($_SESSION['diplome']['intitule3'])) { echo $this->e($_SESSION['diplome']['intitule3']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole3]" value="<?php if (!empty($_SESSION['diplome']['ecole3'])) { echo $this->e($_SESSION['diplome']['ecole3']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt4]" value="<?php if (!empty($_SESSION['diplome']['annees_obt4'])) { echo $this->e($_SESSION['diplome']['annees_obt4']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule4]" value="<?php if (!empty($_SESSION['diplome']['intitule4'])) { echo $this->e($_SESSION['diplome']['intitule4']); } ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole4]" value="<?php if (!empty($_SESSION['diplome']['ecole4'])) { echo $this->e($_SESSION['diplome']['ecole4']); } ?>">
                    </div>
                </div>
            </div>



            <div class="col-md-10 col-md-offset-1 espacement2">

                <div class=""><h3>Experience pro.</h3></div>


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
                        <input type="text"  class="form-control" name="experience_pro[periode_debut]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut'])) { echo $this->e($_SESSION['experience_pro']['periode_debut']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin'])) { echo $this->e($_SESSION['experience_pro']['periode_fin']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie'])) { echo $this->e($_SESSION['experience_pro']['compagnie']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste]" value="<?php if (!empty($_SESSION['experience_pro']['poste'])) { echo $this->e($_SESSION['experience_pro']['poste']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut2]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut2'])) { echo $this->e($_SESSION['experience_pro']['periode_debut2']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin2]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin2'])) { echo $this->e($_SESSION['experience_pro']['periode_fin2']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie2]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie2'])) { echo $this->e($_SESSION['experience_pro']['compagnie2']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste2]" value="<?php if (!empty($_SESSION['experience_pro']['poste2'])) { echo $this->e($_SESSION['experience_pro']['poste2']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut3]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut3'])) { echo $this->e($_SESSION['experience_pro']['periode_debut3']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin3]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin3'])) { echo $this->e($_SESSION['experience_pro']['periode_fin3']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie3]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie3'])) { echo $this->e($_SESSION['experience_pro']['compagnie3']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste3]" value="<?php if (!empty($_SESSION['experience_pro']['poste3'])) { echo $this->e($_SESSION['experience_pro']['poste3']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut4]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut4'])) { echo $this->e($_SESSION['experience_pro']['periode_debut4']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin4]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin4'])) { echo $this->e($_SESSION['experience_pro']['periode_fin4']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie4]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie4'])) { echo $this->e($_SESSION['experience_pro']['compagnie4']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste4]" value="<?php if (!empty($_SESSION['experience_pro']['poste4'])) { echo $this->e($_SESSION['experience_pro']['poste4']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut5]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut5'])) { echo $this->e($_SESSION['experience_pro']['periode_debut5']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin5]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin5'])) { echo $this->e($_SESSION['experience_pro']['periode_fin5']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie5]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie5'])) { echo $this->e($_SESSION['experience_pro']['compagnie5']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste5]" value="<?php if (!empty($_SESSION['experience_pro']['poste5'])) { echo $this->e($_SESSION['experience_pro']['poste5']); } ?>">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut6]" value="<?php if (!empty($_SESSION['experience_pro']['periode_debut6'])) { echo $this->e($_SESSION['experience_pro']['periode_debut6']); } ?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin6]" value="<?php if (!empty($_SESSION['experience_pro']['periode_fin6'])) { echo $this->e($_SESSION['experience_pro']['periode_fin6']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie6]" value="<?php if (!empty($_SESSION['experience_pro']['compagnie6'])) { echo $this->e($_SESSION['experience_pro']['compagnie6']); } ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste6]" value="<?php if (!empty($_SESSION['experience_pro']['poste6'])) { echo $this->e($_SESSION['experience_pro']['poste6']); } ?>">
                    </div>

                </div>
            </div>



            <div class="col-md-10 col-md-offset-1 espacement2">

                <div class=""><h3>Compétences</h3></div>


                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="competence[competence]"><?php if (!empty($_SESSION['competence']['competence'])) { echo $this->e($_SESSION['competence']['competence']); } ?></textarea>
                </div>


            </div>

            <div class="col-md-10 col-md-offset-1 espacement2">

                <div class=""><h3>Fil d'actu.</h3></div>
                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="fil_actu[message]"><?php if (!empty($_SESSION['fil_actu']['message'])) { echo $this->e($_SESSION['fil_actu']['message']); } ?></textarea>
                </div>


            </div>

            <div class="col-md-10 col-md-offset-1 espacement2">
                <div class=""><h3>Portfolio en ligne</h3></div>

                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" rows="6" placeholder="http://..." name="portfolio[ad_portfolio]" value="<?php if (!empty($_SESSION['portfolio']['ad_portfolio'])) { echo $this->e($_SESSION['portfolio']['ad_portfolio']); } ?>">
                </div>
            </div>




            <div id="" class="row">
                <div class="">
                    <input type="submit" class="btn-navbut btn btn-primary col-md-offset-3 marginTop5Bottom10" value="Page précédente" name="precedent">
                    <input type="submit" class="btn-navbut btn btn-primary col-md-offset-3 marginTop5Bottom10" value="Page suivante" name="suivant2">
                </div>
            </div>

        </form>   

    </div>
</div>
<?php //debug($_SESSION['inscription_1']); ?>


<?php $this->stop('main_content') ?>