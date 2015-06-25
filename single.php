

    <?php get_header(); ?>

	<!-- section -->
	 <section id="contenido" class="col-md-9">
	     
	     


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            
                    <h2 class="oro text-center"><?php the_author(); ?></h2>
                    
                    
                <div class="contenidoEntrada text-justify">

                    
                    <h3><?php the_title(); ?></h3>
                    <h4><?php echo get_post_meta(get_the_id(),'subtitulo', true) ?></h4>
                    <?php the_content(); ?>
                </div>
                             
            
                  <?php edit_post_link(); ?>
		</article>
		<!-- /article -->
                
                

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
                
                
                
                <?php get_template_part('partes/entradas', 'anteriores'); ?>

	</section>
	<!-- /section -->



 <?php  if(isset($_GET['sidebar'])) {
     
      get_sidebar('historia'); 
     
 } else {
     get_sidebar();
 } ?>
         


<?php get_footer(); ?>
