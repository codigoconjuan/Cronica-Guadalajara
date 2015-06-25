

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
    


    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
                    <div class="resultadosBusqueda">
                            <h3 id="subtitulo"><?php echo get_post_meta( get_the_ID(), 'subtitulo', true ); ?></h3>
                            <p class="autor"><?php the_author(); ?> </p>
        
        
                            <p><?php the_date('d/m/Y h:i A'); ?></p>
                    </div>
    <?php html5wp_excerpt('html5wp_custom_post'); ?>



    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article id="noresultados">
        <h2><?php _e( '<h2>Su búsqueda no produjo resultados</h2> <ul>
<li>Verifique que las palabras estén bien escritas.</li>
<li>No encierre la frase entre comillas si desea buscar por cada palabra individualmente. <em>fabulosa búsqueda</em> generalmente devolverá más resultados que <em>"fabulosa búsqueda"</em>.</li>
<li>Considere relajar su búsqueda con <em>OR</em>. <em>fabulosa OR búsqueda</em> generalmente devolverá más resultados que <em>fabulosa búsqueda</em>.</li>
</ul>', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>
