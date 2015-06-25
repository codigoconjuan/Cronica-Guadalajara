<?php get_header(); the_post(); ?>

        <section class="col-md-9">
            
            <?php the_content(); ?>
            
            
            <div class="clear"></div>
            
            <?php edit_post_link(); ?>
 
        </section>
        <!-- /section -->
        



<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
