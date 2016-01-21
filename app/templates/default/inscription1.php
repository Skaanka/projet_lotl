<?php $this->layout('layout', ['title' => 'inscription1']);?>

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
                        <input type="text" class="form-control" id="name" placeholder="nom" name="inscription_1[nom]" value="<?php  if ( !empty($_SESSION['inscription_1']['nom'])) {echo $_SESSION['inscription_1']['nom'];}  ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="firstname">Prenom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="prenom" name="inscription_1[prenom]" value="<?php  if ( !empty($_SESSION['inscription_1']['prenom'])) {echo $_SESSION['inscription_1']['prenom'];}  ?>">
                    </div>
                    <div class="form-group col-md-6 col-md-offset-3">
                        <label for="password">Password</label>     <!-- Ajout d'un  champs confirmation mot de passe ? -->
                        <input type="text" class="form-control" id="password" placeholder="Password" name="inscription_1[mot_de_passe]" value="">
                    </div>
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="birthD">date de naissance</label>
                        <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="inscription_1[ddn]" value="<?php  if ( !empty($_SESSION['inscription_1']['ddn'])) { echo $_SESSION['inscription_1']['ddn'];}  ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="adresse" name="inscription_1[adresse]" value="<?php  if ( !empty($_SESSION['inscription_1']['adresse'])) { echo $_SESSION['inscription_1']['adresse'];}  ?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cp">Code Postal</label>
                        <input type="text" class="form-control" id="cp" placeholder="code postal" name="inscription_1['cp']" value="<?php  if ( !empty($_SESSION['inscription_1']['cp'])) { echo $_SESSION['inscription_1']['cp'];}  ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="Ville" name="inscription_1['ville']" value="<?php  if ( !empty($_SESSION['inscription_1']['ville'])) { echo $_SESSION['inscription_1']['ville'];}  ?>">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail" name="inscription_1['mail']" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Téléphone mobile</label>
                        <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="inscription_1['phone']" value="<?php  if ( !empty($_SESSION['inscription_1']['phone'])) { echo $_SESSION['inscription_1']['phone'];}  ?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="webSite">Site web-perso</label>
                        <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="inscription_1['siteWeb']" value="<?php  if ( !empty($_SESSION['inscription_1']['siteWeb'])) { echo $_SESSION['inscription_1']['siteWeb'];}  ?>">
                    </div>
                    <label id="spanAvatar"for="pics" class=" col-md-3">Avatar</label>
                    <div class="col-md-6">
                        <input type="file" class="" id="pics" name="inscription_1['avatar']" value="<?php  if ( !empty($_SESSION['inscription_1']['avatar'])) { echo $_SESSION['inscription_1']['avatar'];}  ?>">
                    </div>
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