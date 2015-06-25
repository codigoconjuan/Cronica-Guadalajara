(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
				jQuery('div.entradaAntigua').each(function() {
					var h3 = jQuery(this).find('h3');
					var html = jQuery(h3).html();
					
					if (html.trim() == '') {
						jQuery(this).hide();
					}
				});
		
				jQuery('.contenidoEntrada').jScrollPane();
                jQuery('#atribucionesWrapper').jScrollPane();
                jQuery('#contenidoNota').jScrollPane();
                jQuery('#cronistasWrapper').jScrollPane();
                
				jQuery('.contenidoEntrada').jScrollPane();
				
				
			
			
			
			    jQuery('.galeria .gallery').bxSlider({
			      minSlides: 2,
			      maxSlides: 2,
			      moveSlides:1,
			      controls: true,
			      auto: true,
			      pager: false
			    });
			
			
				jQuery('#galeriaCronicasSlider').bxSlider({
				  minSlides: 2,
				  maxSlides: 2,
				  slideWidth: 510,
				  slideMargin: 3,
				  moveSlides:1,
				  controls: true,
				  auto: true,
				  pager: false
				});        


				jQuery('.gallery a').each(function(){
				        var captionText = $(this).closest('.gallery-item').find('.wp-caption-text').html();
				        jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
				});

		
                var slider = jQuery('#publicaciones ul').bxSlider({
                  minSlides: 3,
                  maxSlides: 3,
                  slideWidth: 270,
                  slideMargin: 10,
                  moveSlides:1,
                  controls: true,
                  auto: true,
                  pager: false,
                  autoHover:true,
                  
                });
                
                jQuery('input[type="Search"]').attr('placeholder', '¿QUÉ ESTÁS BUSCANDO?');
                

                
                
                jQuery('img.integrante').attr('src', function() {
                    return $(this).attr('src').replace('.jpg', '-150x150.jpg');
                });
                
                jQuery('.page-template-page-integrante-php ul#menu-header-menu li a:contains("Integrantes")').addClass('activo');

                jQuery('.single-cronica ul#menu-header-menu li a:contains("Crónicas")').addClass('activo');
                
                
                jQuery('#anteriores li a').on('click',function() {
                	jQuery('#anteriores li a').removeClass('anterioresActivo');
                	jQuery(this).addClass('anterioresActivo');
                	var clase = jQuery(this).attr('href');
					jQuery('#publicaciones div.ocultar').hide();
					jQuery(clase).show();
					//slider.startAuto();
					return false;
					
                });
                
                
                jQuery('#anteriores li').first().children().addClass('anterioresActivo');
				
				
				
	           	jQuery('ul#galeriaCronicasSlider li  a').on('click', function(e) {
	                	e.preventDefault();
	                	var enlace = jQuery(this).attr('href');
	                	jQuery('#contenidoGalerias').load(enlace + ' article');
	                	window.setTimeout('sliderHistoria()', 1000);
	                	window.setTimeout('scroll()', 1000);
	                	window.setTimeout('lightbox()', 1000);
	                	
                });  // cargar historia 
                
                jQuery('#publicaciones a').each(function() {
					   var _href = jQuery(this).attr("href"); 
					   jQuery(this).attr("href", _href + '&sidebar=sidebar');
                });

  				
	});
        
        
	
})(jQuery, this);


function scroll() {
	jQuery('.contenidoEntrada').jScrollPane();
	jQuery('#contenidoNota').jScrollPane();
}

                
function sliderHistoria() {
    jQuery('.galeria .gallery').bxSlider({
      minSlides: 2,
      maxSlides: 2,
      moveSlides:1,
      controls: true,
      auto: true,
      pager: false
    });
}
	
function lightbox() {
	jQuery('.gallery a').each(function(){
	        var captionText = jQuery(this).closest('.gallery-item').find('.wp-caption-text').html();
	        jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
	});
}
	
                
                
