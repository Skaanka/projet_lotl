<?php $this->layout('layout_home', ['title' => 'inscription2']) ?>

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
                        <input type="text" class="form-control" name="diplome[annees_obt]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt2]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule2]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control"  name="diplome[ecole2]" >
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt3]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule3]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole3]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="diplome[annees_obt4]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[intitule4]">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="diplome[ecole4]">
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
                        <input type="text"  class="form-control" name="experience_pro[periode_debut]">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut2]" >
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin2]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie2]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste2]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut3]">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin3]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie3]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste3]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut4]">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin4]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie4]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste4]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut5]">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin5]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie5]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste5]">
                    </div>
                </div>
                <div class="row cellule">
                    <div class="form-group col-xs-2">
                        <input type="text"  class="form-control" name="experience_pro[periode_debut6]">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="experience_pro[periode_fin6]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[compagnie6]">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="experience_pro[poste6]">
                    </div>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Compétences</h3></div>
            <div class="panel-body">

                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="competence[competence]"></textarea>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Fil d'actu.</h3></div>
            <div class="panel-body">

                <div class="form-group col-xs-12">
                    <textarea class="form-control" rows="6" name="fil_actu[message]"></textarea>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Portfolio en ligne</h3></div>
            <div class="panel-body">

                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" rows="6" placeholder="http://..." name="portfolio[ad_portfolio]">
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

<?php $this->stop('main_content') ?>