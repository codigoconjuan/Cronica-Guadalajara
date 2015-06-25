<?php
/*
 * Template Name: Crónicas
 */
get_header(); ?>
       

        <section class="col-md-9">
            
            <div id="galeriaCronicas">
                <?php $args = array(
                    'post_type' => 'cronica',
                    'order' => 'DESC',
                    'order_by' => 'date',
                    'posts_per_page' => -1
                ); ?>
                <ul id="galeriaCronicasSlider">
                    <?php $galeria = new WP_Query($args); while($galeria->have_posts()): $galeria->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('galeria'); ?>
                             </a>
                        </li>
                       
                    <?php endwhile; wp_reset_postdata(); ?>   
                </ul>
                
            </div> <!-- /galeriaCronicas --> 
            
            <?php $args = array(
                'post_type' => 'cronica',
                'posts_per_page' => 1,
                'order' => 'DESC',
                'orderby' => 'date'
            ); ?>
            
            
            <?php $cronicas = new WP_Query($args); if($cronicas->have_posts() ): while($cronicas->have_posts() ): $cronicas->the_post(); ?>
                
            <div id="contenidoGalerias">
            
                    <h2 id="paginas" class="azul text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 id="subtitulo"><?php echo get_post_meta( get_the_ID(), 'subtitulo', true ); ?></h3>
                                    <p class="autor"><?php the_author(); ?> </p>
        
        
                                    <p><?php the_date('d/m/Y'); ?></p>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="galeria">
                                         <?php the_content(); ?>
                                    </div>
                                </div>  
                            </div>
                        
                    <div id="contenidoNota" class="text-justify">
                         <?php echo get_post_meta( get_the_ID(), 'nota', true ); ?>
                    </div>
        
            </div>
            
            <?php endwhile; endif; wp_reset_postdata(); ?>
 
        </section>
        <!-- /section -->
        


<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
