<?php $this->layout('layout', ['title' => 'modale']) ?>

<?php $this->start('main_content') ?>

                <div class="modal-dialog">
                
                    <!-- contenu de la fenêtre à proprement parler -->
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>En-tête de la fenêtre modale</h4>
                        </div>
                        
                        <div class="modal-body">
                            <p>Contenu de la fenêtre modale</p>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    
                    </div>
                    
                
                </div>
	
<?php $this->stop('main_content') ?>
