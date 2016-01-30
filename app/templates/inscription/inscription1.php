<?php $this->layout('layout_home', ['title' => 'inscription - partie 1']);?>

<?php $this->start('main_content') ?>


<div class="inscript_back">
<div id="wrapper" class="wrappInscr container">

    <form method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">  



        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?= $this->assetUrl('/img/Avatar-512.png') ?>" id="avatarInscr" class="img-responsive img-circle" alt="Responsive image" >
            </div>

        </div>

        <div class="row" id="espaceform">
            <div class="form-group col-md-6">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="nom" name="wuser[nom]">
            </div>
            <div class="form-group col-md-6">
                <label for="firstname">Prenom</label>
                <input type="text" class="form-control" id="firstname" placeholder="prenom" name="wuser[prenom]">
            </div>
            <div class="form-group col-md-6 col-md-offset-3">
                <label for="password">Password</label>     <!-- Ajout d'un  champs confirmation mot de passe ? -->
                <input type="password" class="form-control" id="password" placeholder="Password" name="wuser[mot_de_passe]" value="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label for="birthD">date de naissance</label>
                <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="wuser[ddn]">
            </div>
            <div class="form-group col-md-12">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="adresse" name="wuser[adresse]">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="cp">Code Postal</label>
                <input type="text" class="form-control" id="cp" placeholder="code postal" name="wuser[cp]">
            </div>
            <div class="form-group col-md-6">
                <label for="city">Ville</label>
                <input type="text" class="form-control" id="city" placeholder="Ville" name="wuser[ville]">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="E-mail" name="wuser[mail]" value="" required>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Téléphone mobile</label>
                <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="wuser[phone]">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="webSite">Site web-perso</label>
                <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="wuser[siteWeb]">
            </div>
            <div class="form-group col-md-6">
                <label for="citation">Citation</label>
                <input type="text" class="form-control" id="citation" placeholder="Votre citation...(60 caractères max)" name="wuser[citation]" maxlength="60">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <label id="spanAvatar"for="pics" class="">Avatar</label>
                <div class="">
                    <input type="file" class="" id="pics" name="avatar">
                </div>
            </div>
        </div>
        
        

        <div id="bouton" class="row">
            <div class="col-md-offset-9">
                <input type="submit" class="btn-navbut btn btn-primary" name="suivant" value="Page suivante">
            </div>
        </div>

    </form>   

</div>
</div>
<?php //print_r($_SESSION['inscription_1']); ?>

<?php $this->stop('main_content') ?>