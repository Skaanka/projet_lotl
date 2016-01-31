<?php $this->layout('layout', ['title' => 'modification profil - partie 2']) ?>

<?php $this->start('navBar') ?>
<!-- Navbar Top-Screen-->
<nav class=" navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $this->url('accueil') ?>">Lord of the links</a>
            
            <!--    debut "oeil de sauron" -->
            
           
                <div class="eye">
                    <div class="iris">
                        <div class="pupil">
                            <div class="pupil-shine"></div>
                        </div>
                    </div>
  <!--<div class="eyeshine"></div>-->
                    <div class="lids"></div>
                </div>
            
            
            <!-- fin "oeil de sauron" -->
            
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<div class="navbar-form navbar-right">
                
                <!--interface admin-->
                <?php if ($_SESSION['user']['role'] === 'admin' ) { ?>
                <!-- Button trigger modal Admin -->
                <a href="<?php echo $this->url('administration'); ?>"><button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalAdmin">
                    Administration
                </button></a>
                <?php } elseif ($_SESSION['user']['role'] == 'membre') {echo "";}?>
                <!--interface admin-->
                
				<!-- Button trigger modal Profil -->
				<button type="button" class="btn btn-navbut" data-toggle="modal" data-target="#myModalProfil">
					Profil
				</button>

				<!-- Modal -->
                <?php require('partials/modal_profil.php') ?>



				<!-- Button trigger modal -->
				<button type="button" class="btn  btn-navbut" data-toggle="modal" data-target="#myModalPost">
					Post actu
				</button>

				<!-- Modal -->
				<?php require('partials/modal_postActu.php') ?>



				<a href="<?= $this->url("logout"); ?>"><button class="btn btn-navbut">Déconnexion</button></a>
			</div>
		</div><!--/.navbar-collapse -->
	</div>
</nav>
<!-- Fin Navbar Top-Screen-->
<?php $this->stop('navBar') ?>


<?php $this->start('main_content') ?>
<div id="" class="wrappInscr container">
    <form class="col-md-12" method="POST">  


        <div class="title_inscipt text-center col-md-offset-0">
            <h1>Parcour pro.</h1><br/>
        </div>


        <div class="col-md-10 col-md-offset-1">

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
                    <input type="text" class="form-control" name="diplome[annees_obt]" value="<?php echo $this->e($_SESSION['user']['annees_obt'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[intitule]" value="<?php echo $this->e($_SESSION['user']['intitule'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[ecole]" value="<?php echo $this->e($_SESSION['user']['ecole'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" name="diplome[annees_obt2]" value="<?php echo $this->e($_SESSION['user']['annees_obt2'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[intitule2]" value="<?php echo $this->e($_SESSION['user']['intitule2'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control"  name="diplome[ecole2]" value="<?php echo $this->e($_SESSION['user']['ecole2'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" name="diplome[annees_obt3]" value="<?php echo $this->e($_SESSION['user']['annees_obt3'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[intitule3]" value="<?php echo $this->e($_SESSION['user']['intitule3'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[ecole3]" value="<?php echo $this->e($_SESSION['user']['ecole3'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" name="diplome[annees_obt4]" value="<?php echo $this->e($_SESSION['user']['annees_obt4'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[intitule4]" value="<?php echo $this->e($_SESSION['user']['intitule4'])?>">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="diplome[ecole4]" value="<?php echo $this->e($_SESSION['user']['ecole4'])?>">
                </div>
            </div>
        </div>


        <div class="col-md-10 col-md-offset-1">

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
                    <input type="text"  class="form-control" name="experience_pro[periode_debut]" value="<?php echo $this->e($_SESSION['user']['periode_debut'])?>">
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin]" value="<?php echo $this->e($_SESSION['user']['periode_fin'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie]" value="<?php echo $this->e($_SESSION['user']['compagnie'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste]" value="<?php echo $this->e($_SESSION['user']['poste'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-xs-2">
                    <input type="text"  class="form-control" name="experience_pro[periode_debut2]" value="<?php echo $this->e($_SESSION['user']['periode_debut2'])?>" >
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin2]" value="<?php echo $this->e($_SESSION['user']['periode_fin2'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie2]" value="<?php echo $this->e($_SESSION['user']['compagnie2'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste2]" value="<?php echo $this->e($_SESSION['user']['poste2'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-xs-2">
                    <input type="text"  class="form-control" name="experience_pro[periode_debut3]" value="<?php echo $this->e($_SESSION['user']['periode_debut3'])?>">
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin3]" value="<?php echo $this->e($_SESSION['user']['periode_fin3'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie3]" value="<?php echo $this->e($_SESSION['user']['compagnie3'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste3]" value="<?php echo $this->e($_SESSION['user']['poste3'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-xs-2">
                    <input type="text"  class="form-control" name="experience_pro[periode_debut4]" value="<?php echo $this->e($_SESSION['user']['periode_debut4'])?>">
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin4]" value="<?php echo $this->e($_SESSION['user']['periode_fin4'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie4]" value="<?php echo $this->e($_SESSION['user']['compagnie4'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste4]" value="<?php echo $this->e($_SESSION['user']['poste4'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-xs-2">
                    <input type="text"  class="form-control" name="experience_pro[periode_debut5]" value="<?php echo $this->e($_SESSION['user']['periode_debut5'])?>">
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin5]" value="<?php echo $this->e($_SESSION['user']['periode_fin5'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie5]" value="<?php echo $this->e($_SESSION['user']['compagnie5'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste5]" value="<?php echo $this->e($_SESSION['user']['poste5'])?>">
                </div>
            </div>
            <div class="row cellule">
                <div class="form-group col-xs-2">
                    <input type="text"  class="form-control" name="experience_pro[periode_debut6]" value="<?php echo $this->e($_SESSION['user']['periode_debut6'])?>">
                </div>
                <div class="form-group col-xs-2">
                    <input type="text" class="form-control" name="experience_pro[periode_fin6]" value="<?php echo $this->e($_SESSION['user']['periode_fin6'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[compagnie6]" value="<?php echo $this->e($_SESSION['user']['compagnie6'])?>">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="experience_pro[poste6]" value="<?php echo $this->e($_SESSION['user']['poste6'])?>">
                </div>

            </div>
        </div>


        <div class="col-md-10 col-md-offset-1">

            <div class=""><h3>Compétences</h3></div>


            <div class="form-group col-xs-12">
                <textarea class="form-control" rows="6" name="competence[competence]"><?php echo $this->e($_SESSION['user']['competence'])?></textarea>
            </div>
        </div>


        <div class="col-md-10 col-md-offset-1">
            <div class=""><h3>Fil d'actu.</h3></div>


            <div class="form-group col-xs-12">
                <textarea class="form-control" rows="6" name="fil_actu[message]"><?php echo $this->e($_SESSION['user']['message'])?></textarea>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class=""><h3>Portfolio en ligne</h3></div>


            <div class="form-group col-xs-12">
                <input type="text" class="form-control" rows="6" placeholder="http://..." name="portfolio[ad_portfolio]" value="<?php echo $this->e($_SESSION['user']['ad_portfolio'])?>">
            </div>
        </div>




        <div id="bouton" class="row">
            <div class="">
                <input type="submit" class="btn btn-primary btn-navbut col-md-offset-3 marginTop5Bottom10" value="Page précédente" name="precedent">
                <input type="submit" class="btn btn-default btn-navbut col-md-offset-3 marginTop5Bottom10" value="Page suivante" name="suivant2">
            </div>
        </div>

    </form>   

</div>

<?php $this->stop('main_content') ?>