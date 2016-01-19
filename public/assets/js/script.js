var melanger = (function( $ ) {
    'use strict';
    var maGrille = $('#grid'), //localiser l'élément à trier
        filtresOptions = $('.portfolio-sorting li'),  //localiser les catégories de tri
        dimensionner = maGrille.find('.shuffle_sizer'), // enregistre la taille des éléments

        init = function() {

            // None of these need to be executed synchronously
            setTimeout(function() {
                listen();
                setupFilters();
            }, 100);

            // on instancie le plugin shuffle
            maGrille.shuffle({
                itemSelector: '[class*="col-"]',
                sizer: dimensionner    
            });
        },



        // Clic sur les boutons de filtre
        setupFilters = function() {
            var mesBoutons = filtresOptions.children();
            mesBoutons.on('click', function(e) {
                e.preventDefault();
                var $this = $(this),
                    isActive = $this.hasClass( 'active' ),
                    group = isActive ? 'all' : $this.data('group');

                // Bascule la classe "active" sur l'élément cliqué
                if ( !isActive ) {
                    $('.portfolio-sorting li a').removeClass('active');
                }

                $this.toggleClass('active');

                // Filtrage des éléments
                maGrille.shuffle( 'shuffle', group );
            });

            mesBoutons = null;
        },

        // Lancement du shuffle au chargement des images
        // Nécessaire en-dessous de 768px car la hauteur de .picture-item est auto
        // et que cela dépend de l'image chargée.
        // Il est recommandé d'utiliser "imagesloaded" pour déterminer
        // si l'image est chargée mais cela ne fonctionne pas avec IE7
        listen = function() {
            var debouncedLayout = $.throttle( 300, function() {
                maGrille.shuffle('update');
            });

            // Placer toutes les images dans le shuffle (code pour chaque image / each)
            maGrille.find('img').each(function() {
                var proxyImage;

                // si une image est déjà chargée
                if ( this.complete && this.naturalWidth !== undefined ) {
                    return;
                }

                // Si aucun des tests ci-dessus n'a fonctionné, on simule le chargement
                // de l'élément indépendamment des autres
                proxyImage = new Image();
                $( proxyImage ).on('load', function() {
                    $(this).off('load');
                    debouncedLayout();
                });

                proxyImage.src = this.src;
            });

            // Parce que la méthode n'est pas parfaite...
            setTimeout(function() {
                debouncedLayout();
            }, 500);
        };      

    return {
        init: init
    };
}( jQuery ));

$(document).ready(function()
                  {
    melanger.init(); //filtrer le portfolio
});

$('.carousel').carousel();