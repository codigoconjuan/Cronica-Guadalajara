<?php get_header(); ?>


    <div class="col-md-9">
        <section id="contenido" >
            
                <?php $args = array(
                    'post_type' => array(   'cronicas'),
                    'posts_per_page' => 1,
                    'order' => 'DESC',
                    'orderby' => 'date'
                ); ?>
                

                
                <?php $entradaUltima = new WP_Query($args); if($entradaUltima->have_posts()): while($entradaUltima->have_posts() ): $entradaUltima->the_post(); ?>

                <h2 class="text-center"><?php $author =  the_author(); ?></h2>

                <?php if($post->post_type == 'cronica') { ?>
                    
                    
                    
                    
                           <div class="row">
                                    <div class="col-md-6">
                                         <h3><?php the_title(); ?></h3>
                                        <h3 id="subtitulo"><?php echo get_post_meta( get_the_ID(), 'subtitulo', true ); ?></h3>

                                        <p><?php the_date('d/m/Y h:i A'); ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="galeria">
                                             <?php the_content(); ?>
                                        </div>
                                    </div>  
                                </div>
                                
                            <div class="contenidoEntrada text-justify">
                                 <?php echo get_post_meta( get_the_ID(), 'nota', true ); ?>
                            </div>
                
                
                    
                <?php } else { ?>
                    
                    
                       <div class="contenidoEntrada text-justify">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php echo get_post_meta(get_the_id(),'subtitulo', true) ?></h4>
                            <?php the_content(); ?>
                        </div>
                        
                        
              <?php  } ?>

                
                
                
                <?php endwhile; endif; wp_reset_postdata(); ?>
       
  
         </section>
        <!-- /section -->
        
        
        <?php get_template_part('partes/entradas', 'anteriores'); ?>


      
        
    </div>

<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
