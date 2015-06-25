<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="col-md-9">

      <?php

        $year =  $_GET['m'];
        $author = $_GET['autor'];


        $args = array(
            'post_type' => 'post',
            'year' => "$year",
            'author' => "$author",
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => -1
        ); 
        
        
        $filtro = new WP_Query($args); while($filtro->have_posts() ): $filtro->the_post(); ?>
        
        
        <h1><?php the_title(); ?></h1>
        
        <?php 
        endwhile; wp_reset_postdata();
        


?>
	           
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
