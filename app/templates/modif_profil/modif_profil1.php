<?php $this->layout('layout', ['title' => 'modif_profil1']);?>

<?php $this->start('main_content') ?>
	
        

        




        <div id="wrapper" class="col-md-10">
            
            <form method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">  

                <div class="form-group col-md-12" >
                    
                    
                    

                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3"><img src="../../img/Avatar-512.png" id="avatar" class="img-responsive img-circle" alt="Responsive image" ></div>
                    
                </div>

                <div class="row" id="espaceform">
                    <div class="form-group col-md-6">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="<?php echo $_SESSION['user']['nom']?>" name="wuser[nom]">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="firstname">Prenom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="<?php echo $_SESSION['user']['prenom']?>" name="wuser[prenom]">
                    </div>
                    
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="birthD">date de naissance</label>
                        <input type="date" class="form-control" id="birthD" placeholder="<?php echo $_SESSION['user']['ddn']?>" name="wuser[ddn]">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="<?php echo $_SESSION['user']['adresse']?>" name="wuser[adresse]">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cp">Code Postal</label>
                        <input type="text" class="form-control" id="cp" placeholder="<?php echo $_SESSION['user']['cp']?>" name="wuser[cp]">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="<?php echo $_SESSION['user']['ville']?>" name="wuser[ville]">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="<?php echo $_SESSION['user']['mail']?>" name="wuser[mail]" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Téléphone mobile</label>
                        <input type="text" class="form-control" id="phone" placeholder="<?php echo $_SESSION['user']['phone']?>" name="wuser[phone]">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="webSite">Site web-perso</label>
                        <input type="text" class="form-control" id="webSite" placeholder="<?php echo $_SESSION['user']['siteWeb']?>" name="wuser[siteWeb]">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="citation">Citation</label>
                        <input type="text" class="form-control" id="citation" placeholder="<?php echo $_SESSION['user']['citation']?>" name="wuser[citation]">
                    </div>
                    
                </div>
                <div class="row">
                
                </div>
                    <label id="spanAvatar"for="pics" class=" col-md-3">Avatar</label>
                    <div class="col-md-6">
                        <input type="file" class="" id="pics" name="avatar">
                    </div>
                <div id="bouton" class="row">
                    <div class="col-md-offset-9">
                        <input type="submit" class="btn btn-primary" name="suivant" value="Page suivante">
                    </div>
                </div>
                
            </form>   

        </div>
<?php //print_r($_SESSION['inscription_1']); ?>
       
<?php $this->stop('main_content') ?>