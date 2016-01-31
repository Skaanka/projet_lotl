<?php $this->layout('layout_home', ['title' => 'inscription - partie 1']);?>

<?php $this->start('main_content') ?>


<div class="inscript_back">
    <div id="wrapper" class="wrappInscr container">
        <form method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3 ">           
            <div class="">
                <div class="">
                    <img src="<?= $this->assetUrl('/img/Avatar-512.png') ?>" id="avatarInscr"  class="img-responsive img-circle" alt="Responsive image" >
                </div>

            </div>

  

            <div class="row" id="espaceform">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" placeholder="nom" name="wuser[nom]" value="<?php if (!empty($_SESSION['wuserInsc']['nom'])) { echo $this->e($_SESSION['wuserInsc']['nom']); } ?>" required>
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="firstname">Prenom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="prenom" name="wuser[prenom]" value="<?php if (!empty($_SESSION['wuserInsc']['prenom'])) { echo $this->e($_SESSION['wuserInsc']['prenom']); } ?>" required>
                </div>
                <div class="form-group col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
                    <label for="password">Password</label>     <!-- Ajout d'un  champs confirmation mot de passe ? -->
                    <input type="password" class="form-control" id="password" placeholder="Password" name="wuser[mot_de_passe]" required>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-12 col-xs-12">
                    <label for="birthD">date de naissance</label>
                    <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="wuser[ddn]" value="<?php if (!empty($_SESSION['wuserInsc']['ddn'])) { echo $this->e($_SESSION['wuserInsc']['ddn']); } ?>">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="adresse" name="wuser[adresse]" value="<?php if (!empty($_SESSION['wuserInsc']['adresse'])) { echo $this->e($_SESSION['wuserInsc']['adresse']); } ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="cp">Code Postal</label>
                    <input type="text" class="form-control" id="cp" placeholder="code postal" name="wuser[cp]" value="<?php if (!empty($_SESSION['wuserInsc']['cp'])) { echo $this->e($_SESSION['wuserInsc']['cp']); } ?>">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" placeholder="Ville" name="wuser[ville]" value="<?php if (!empty($_SESSION['wuserInsc']['ville'])) { echo $this->e($_SESSION['wuserInsc']['ville']); } ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="wuser[mail]" required>
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="phone">Téléphone mobile</label>
                    <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="wuser[phone]" value="<?php if (!empty($_SESSION['wuserInsc']['phone'])) { echo $this->e($_SESSION['wuserInsc']['phone']); } ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-6">
                    <label for="webSite">Site web-perso</label>
                    <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="wuser[siteWeb]" value="<?php if (!empty($_SESSION['wuserInsc']['siteWeb'])) { echo $this->e($_SESSION['wuserInsc']['siteWeb']); } ?>">
                </div>
                <div class="form-group col-md-6 col-xs-6">
                    <label for="citation">Citation</label>
                    <input type="text" class="form-control" id="citation" placeholder="Votre citation...(60 caractères max)" name="wuser[citation]" maxlength="60" value="<?php if (!empty($_SESSION['wuserInsc']['citation'])) { echo $this->e($_SESSION['wuserInsc']['citation']); } ?>">
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <label id="spanAvatar"for="pics" class="">Avatar</label>
                    <div class="">
                        <input type="file" class="" id="pics" name="avatar">
                    </div>
                </div>
            </div>



            <div id="bouton" class="row">
                <div class="col-md-offset-9 col-xs-offset-9">
                    <input type="submit" class="btn-navbut btn btn-primary" name="suivant" value="Page suivante">
                </div>
            </div>

        </form>   

    </div>
</div>

<?php $this->stop('main_content') ?>