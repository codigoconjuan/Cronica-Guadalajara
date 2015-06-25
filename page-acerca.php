<?php
/*
 * Template Name: Acerca De
 */
get_header(); ?>

        <section class="col-md-9">
            
            <h2 id="paginas" class="azul text-center">¿Qué es el consejo de la crónica y la historia de Guadalajara?</h2>
            
            <p class="text-justify"><?php echo get_post_meta( get_the_ID(), '_cmb_consejo_cronica', true ); ?></p>
            
            <h2 id="paginas" class="oro text-center">¿Cómo se integra?</h2>
            
            <p class="text-justify"><?php echo get_post_meta( get_the_ID(), '_cmb_como_integra', true ); ?></p>
            
            <h2 id="paginas" class="oro text-center">sus atribuciones</h2>
            
            
            <div id="atribucionesWrapper">
            
                <?php $integraciones = get_post_meta( get_the_ID(), '_cmb_atribuciones_array', true ); ?>

                 <ol id="atribuciones">
                    <?php foreach($integraciones as $integra ) { ?>
                     <li> <span><?php echo $integra['atribuciones']; ?></span></li>
                    <?php  } ?>    
                </ol>

            </div>
            
            
             
            
        </section>
        <!-- /section -->
        



<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
