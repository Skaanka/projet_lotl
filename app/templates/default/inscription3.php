<?php $this->layout('layout', ['title' => 'inscription3']) ?>

<?php $this->start('main_content') ?>
	
	


        <div id="wrapper" class="col-md-10">
            <form method="POST" class="col-md-10">  

                
                <h1>Sociaux</h1><br/>

           
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Divertissement</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/PSN_logo.png">
                            <label for="psn" class="col-sm-2 control-label celSoc">PSN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="psn" placeholder="Identifiant Playstation Network" name="inscription_3['psn']" value="<?php  if ( !empty($_SESSION['inscription']['psn'])) {echo $_SESSION['inscription']['psn'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Xbox_logo.png">
                            <label for="xbox" class="col-sm-2 control-label celSoc">XboxLive</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xbox" placeholder="Identifiant XboxLive" name="inscription_3['xboxlive']" value="<?php  if ( !empty($_SESSION['inscription']['xboxlive'])) {echo $_SESSION['inscription']['xboxlive'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Steam_logo.png">
                            <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="steam" placeholder="Identifiant Steam" name="inscription_3['steam']" value="<?php  if ( !empty($_SESSION['inscription']['steam'])) {echo $_SESSION['inscription']['steam'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/battlenet_logo.png">
                            <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="battlenet" placeholder="Identifiant Battle.net" name="inscription_3['battlenet']" value="<?php  if ( !empty($_SESSION['inscription']['battlenet'])) {echo $_SESSION['inscription']['battlenet'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/nintendo_logo.png">
                            <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="nintendo" placeholder="Identifiant Nintendo" name="inscription_3['nintendo']" value="<?php  if ( !empty($_SESSION['inscription']['nintendo'])) {echo $_SESSION['inscription']['nintendo'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/origin1_logo.png">
                            <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="origin" placeholder="Identifiant Origin" name="inscription_3['origin']" value="<?php  if ( !empty($_SESSION['inscription']['origin'])) {echo $_SESSION['inscription']['origin'];}  ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Pro.</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/linkedin_logo.png">
                            <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="linkedin" placeholder="LikedIn" name="inscription_3['linkedin']" value="<?php  if ( !empty($_SESSION['inscription']['linkedin'])) {echo $_SESSION['inscription']['linkedin'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/viadeo_logo.png">
                            <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viadeo" placeholder="Viadeo" name="inscription_3['viadeo']" value="<?php  if ( !empty($_SESSION['inscription']['viadeo'])) {echo $_SESSION['inscription']['viadeo'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/xing_logo.png">
                            <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xing" placeholder="Xing" name="inscription_3['xing']" value="<?php  if ( !empty($_SESSION['inscription']['xing'])) {echo $_SESSION['inscription']['xing'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/muxi_logo.jpg">
                            <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="muxy" placeholder="Muxy" name="inscription_3['muxy']" value="<?php  if ( !empty($_SESSION['inscription']['muxy'])) {echo $_SESSION['inscription']['muxy'];}  ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Sociaux</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/FB_logo.png">
                            <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="facebook" placeholder="Facebook" name="inscription_3['facebook']" value="<?php  if ( !empty($_SESSION['inscription']['facebook'])) {echo $_SESSION['inscription']['facebook'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Twitter-logo.png">
                            <label for="Twitter" class="col-sm-2 control-label celSoc">Twitter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="twitter" placeholder="Twitter" name="inscription_3['twitter']" value="<?php  if ( !empty($_SESSION['inscription']['twitter'])) {echo $_SESSION['inscription']['twitter'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/YouTube-logo.png">
                            <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="youtube" placeholder="YouTube" name="inscription_3['youtube']" value="<?php  if ( !empty($_SESSION['inscription']['youtube'])) {echo $_SESSION['inscription']['youtube'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/googleplus_logo.png">
                            <label for="google" class="col-sm-2 control-label celSoc">Google+</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="google" placeholder="Google+" name="inscription_3['google']" value="<?php  if ( !empty($_SESSION['inscription']['google'])) {echo $_SESSION['inscription']['google'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Skype_logo.png">
                            <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="skype" placeholder="Skype" name="inscription_3['skype']" value="<?php  if ( !empty($_SESSION['inscription']['skype'])) {echo $_SESSION['inscription']['skype'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/instagram_logo.png">
                            <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="instagram" placeholder="Instagram" name="inscription_3['instagram']" value="<?php  if ( !empty($_SESSION['inscription']['instagram'])) {echo $_SESSION['inscription']['instagram'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/pinterest-logo.png">
                            <label for="pinterest" class="col-sm-2 control-label celSoc">Pinterest</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="pinterest" placeholder="Pinterest" name="inscription_3['pinterest']" value="<?php  if ( !empty($_SESSION['inscription']['pinterest'])) {echo $_SESSION['inscription']['pinterest'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Deezer_logo.png">
                            <label for="deezer" class="col-sm-2 control-label celSoc">Deezer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="deezer" placeholder="Deezer" name="inscription_3['deezer']" value="<?php  if ( !empty($_SESSION['inscription']['deezer'])) {echo $_SESSION['inscription']['deezer'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Spotify_logo.png">
                            <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="spotify" placeholder="Spotify" name="inscription_3['spotify']" value="<?php  if ( !empty($_SESSION['inscription']['spotify'])) {echo $_SESSION['inscription']['spotify'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Viber-logo.png">
                            <label for="Viber" class="col-sm-2 control-label celSoc">Viber</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viber" placeholder="Viber" name="inscription_3['viber']" value="<?php  if ( !empty($_SESSION['inscription']['viber'])) {echo $_SESSION['inscription']['viber'];}  ?>">
                            </div>
                        </div>

                    </div>
                </div>
                

                
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-default col-md-offset-1" value="Page précédente" name="precedent2">
                        <input type="submit" class="btn btn-default col-md-offset-5" value="valider" name="valider">
                    </div>
                </div>

            </form>   

        </div>
 <?php debug($_SESSION['inscription_2']); ?>

<?php $this->stop('main_content') ?>