<!-- sidebar -->
<aside class="sidebar col-md-3" role="complementary">
    <div class="autores">
        
       <?php $args = array(
           'author' => 2,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">ARMANDO GONZÁLEZ ESCOTO</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 3,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">CARLOS ENRIGUE ZULOAGA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
        
       <?php $args = array(
           'author' => 4,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">GUILLERMO GARCÍA OROPEZA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>

       <?php $args = array(
           'author' => 5,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">ILDEFONSO LOZA MÁRQUEZ G. DE Q.</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 6,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">JUAN PALOMAR VEREA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 7,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">LAURA CAROLINA ZOHN MULDOON</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 8,
           'post_type' => array('cronica', 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'order' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>">RENÉE DE LA TORRE CASTELLANOS</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>

    </div>
    
    
    <div class="entradas">
        <?php $args = array(
            'post_type' => 'cronicas',
            'offset' => 1,
            'posts_per_page' => 2,
            'order' => 'DESC',
            'orderby' => 'date'
        ); ?>
        
        <?php $entradas = new WP_Query($args); if ($entradas->have_posts() ): while($entradas->have_posts()): $entradas->the_post(); ?>
       


                    <h2 class="text-center">
                        <a href="/consejo/?author=<?php the_author_meta('ID'); ?>">
                              <?php the_author_link(); ?>
                        </a>    
                    </h2>
                    <h3 id="subtitulo"><?php the_title(); ?></h2>
                    <p class="subtitulo"><?php echo get_post_meta(get_the_id(),'subtitulo', true) ?> </p>
                    
                    <div class="text-justify">
                         <?php html5wp_excerpt('html5wp_custom_post'); ?>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="text-center enlace">Ver más</a>
            
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php  endwhile; endif; wp_reset_postdata(); ?>
        
    </div>
    
</aside>
<!-- /sidebar -->
