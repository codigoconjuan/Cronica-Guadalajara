   <div class="autores">
        
       <?php $args = array(
           'author' => 2,
           'post_type' => array( 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">ARMANDO GONZÁLEZ ESCOTO</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 3,
           'post_type' => array('cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">CARLOS ENRIGUE ZULOAGA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
        
       <?php $args = array(
           'author' => 4,
           'post_type' => array('cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">GUILLERMO GARCÍA OROPEZA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>

       <?php $args = array(
           'author' => 5,
           'post_type' => array( 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">ILDEFONSO LOZA MÁRQUEZ G. DE Q.</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 6,
           'post_type' => array( 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">JUAN PALOMAR VEREA</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 7,
           'post_type' => array('cronicas'),
           'posts_per_page' => 1,
          'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">LAURA CAROLINA ZOHN MULDOON</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>
           
       <?php $args = array(
           'author' => 8,
           'post_type' => array( 'cronicas'),
           'posts_per_page' => 1,
           'order' => 'DESC',
           'orderby' => 'date'
       );  $armando = new WP_Query($args); while($armando->have_posts()): $armando->the_post(); ?>
        
           <li><a href="<?php the_permalink(); ?>&sidebar=sidebar">RENÉE DE LA TORRE CASTELLANOS</a></li>
           
        <?php endwhile;  wp_reset_postdata(); ?>

    </div>
    