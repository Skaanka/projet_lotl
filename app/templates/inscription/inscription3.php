<?php $this->layout('layout_home', ['title' => 'inscription3']) ?>

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
                                <input type="text" class="form-control celSoc" id="psn" placeholder="Identifiant Playstation Network" name="reseaux_divertissement[psn]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Xbox_logo.png">
                            <label for="xbox" class="col-sm-2 control-label celSoc">XboxLive</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xbox" placeholder="Identifiant XboxLive" name="reseaux_divertissement[xboxlive]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Steam_logo.png">
                            <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="steam" placeholder="Identifiant Steam" name="reseaux_divertissement[steam]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/battlenet_logo.png">
                            <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="battlenet" placeholder="Identifiant Battle.net" name="reseaux_divertissement[battlenet]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/nintendo_logo.png">
                            <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="nintendo" placeholder="Identifiant Nintendo" name="reseaux_divertissement[compte_nintendo]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/origin1_logo.png">
                            <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="origin" placeholder="Identifiant Origin" name="reseaux_divertissement[origin]">
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
                                <input type="text" class="form-control celSoc" id="linkedin" placeholder="LikedIn" name="reseaux_pro[linkedin]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/viadeo_logo.png">
                            <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viadeo" placeholder="Viadeo" name="reseaux_pro[viadeo]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/xing_logo.png">
                            <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xing" placeholder="Xing" name="reseaux_pro[xing]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/muxi_logo.jpg">
                            <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="muxy" placeholder="Muxy" name="reseaux_pro[muxi]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/github_logo.jpg">
                            <label for="github" class="col-sm-2 control-label celSoc">GitHub</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="github" placeholder="github" name="reseaux_pro[github]">
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
                                <input type="text" class="form-control celSoc" id="facebook" placeholder="Facebook" name="reseaux_social[facebook]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Twitter-logo.png">
                            <label for="Twitter" class="col-sm-2 control-label celSoc">Twitter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="twitter" placeholder="Twitter" name="reseaux_social[twitter]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/YouTube-logo.png">
                            <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="youtube" placeholder="YouTube" name="reseaux_social[youtube]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/googleplus_logo.png">
                            <label for="google" class="col-sm-2 control-label celSoc">Google+</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="google" placeholder="Google+" name="reseaux_social[google]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Skype_logo.png">
                            <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="skype" placeholder="Skype" name="reseaux_social[skype]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/instagram_logo.png">
                            <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="instagram" placeholder="Instagram" name="reseaux_social[instagram]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/instagram_logo.png">
                            <label for="whatsapp" class="col-sm-2 control-label celSoc">What's app</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="whatsapp" placeholder="What's app" name="reseaux_social[whatsapp]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/pinterest-logo.png">
                            <label for="pinterest" class="col-sm-2 control-label celSoc">Pinterest</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="pinterest" placeholder="Pinterest" name="reseaux_social[pinterest]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Deezer_logo.png">
                            <label for="deezer" class="col-sm-2 control-label celSoc">Deezer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="deezer" placeholder="Deezer" name="reseaux_social[deezer]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Spotify_logo.png">
                            <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="spotify" placeholder="Spotify" name="reseaux_social[spotify]">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../../img/icons/Viber-logo.png">
                            <label for="Viber" class="col-sm-2 control-label celSoc">Viber</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viber" placeholder="Viber" name="reseaux_social[viber]">
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

<?php $this->stop('main_content') ?>