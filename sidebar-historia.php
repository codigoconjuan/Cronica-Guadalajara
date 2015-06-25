<!-- sidebar -->
<aside class="sidebar col-md-3" role="complementary">
    
    
    <?php get_template_part('partes/autores', 'sidebar'); ?>
 
    
    <div class="entradas">
            <?php  $args = array(
                        'post_type' => 'cronicas',
                        'offset' => 1,
                        'posts_per_page' => 2,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    ); ?>
                            
                    <?php $entradas = new WP_Query($args); if ($entradas->have_posts() ): while($entradas->have_posts()): $entradas->the_post(); ?>
                   
                    <div class="entradaAntigua">
                            
                            <h2 class="text-center">
                                <a href="<?php the_permalink(); ?>">
                                      <?php the_author_link(); ?>
                                </a>    
                            </h2>
                            <h3 id="subtitulo"><?php the_title(); ?></h2>
                            <p class="subtitulo"><?php echo get_post_meta(get_the_id(),'subtitulo', true) ?> </p>
                            
                            <div class="text-justify">
                                 <?php html5wp_excerpt('html5wp_custom_post'); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="text-center enlace">Ver más</a>
                    </div>
                    
                    <?php  endwhile; endif; wp_reset_postdata(); 
                      
            ?>
        
    </div>
    
</aside>
<!-- /sidebar -->
