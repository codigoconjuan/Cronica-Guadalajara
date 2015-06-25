<?php get_header(); ?>

	<!-- section -->
	 <section id="contenido" class="col-md-9">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            
            <h2 id="paginas" class="azul text-center"><?php the_title(); ?> </h2>
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

<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
