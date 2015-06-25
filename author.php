<?php get_header(); ?>

<?php 

 $ID = $_GET['author'];
 $autor = $_GET['author'];

?>

	<main role="main">
		<!-- section -->
		<section class="col-md-9">
                    
                    <div id="contenido" class="integrantesWrap">
                        
                    

                    
                         <h2 class="text-center puesto"><?php echo the_author_meta('_cmb_puesto', $ID ); ?></h2>

                        
                             
                                <div class="row integrante">
                                    <div class="col-md-2 col-sm-2 col-sm-2 col-xs-3">
                                         <img class="integrante" src="<?php echo the_author_meta('_cmb_imagen',$ID );  ?>">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-9">
                                         <h2 class="text-center azul"><?php the_author_meta('display_name',  $ID ); ?></h2>
                                         <p class="sociales">Contacto</p>
                                         
                                         <?php $mail =  the_author_meta('_cmb_emailurl', $ID);  ?>
                                         <?php if (!empty($mail)) {
                                             echo '<p class="sociales">"$email"</p>';
                                         } ?>
                                         
                                         <?php $facebook =  the_author_meta('_cmb_facebookurl',$ID);   ?>
                                         <?php if (!empty($facebook)) {
                                             echo '<p class="sociales">"$facebook"</p>';
                                         } ?>
                                         
                                         <?php $twitter =  the_author_meta('_cmb_twitterurl',$ID);  ?>
                                         <?php if (!empty($twitter)) {
                                             echo '<p class="sociales">"$twitter"</p>';
                                         } ?>
                                         
                                         
                            
                                         
                                         
                                        
                                    </div>
                                </div>
                             
                                <div class="semblanzaAutor">
                                  <h2 id="paginas" class="oro text-center">Semblanza</h2>
                                  <p class="descripcion text-justify"><?php the_author_meta('description',$ID); ?></p>
                                </div>
     
        
        


               <?php $autor =  $post->post_author; ?>
               
                <section id="anteriores">
                            <ul class="nav nav-justified">
                                <li><a href="#2014">2014</a></li>
                                <li><a href="#2013">2013</a></li>
                                <li><a href="#2012">2012</a></li>
                                <li><a href="#2011">2011</a></li>
                                <li><a href="#2010">2010</a></li>
                                <li><a href="#2009">2009</a></li>
                            </ul>
                </section>
                
        
                <section id="publicaciones">
        
                      <div id="2014" class="ocultar"><ul><?php postsAutor($ID, 2014); ?></ul></div>
                      <div id="2013" class="ocultar"><ul><?php postsAutor($ID, 2013); ?></ul></div>
                      <div id="2012" class="ocultar"><ul><?php postsAutor($ID, 2012); ?></ul></div>
                      <div id="2011" class="ocultar"><ul><?php postsAutor($ID, 2011); ?></ul></div>
                      <div id="2010" class="ocultar"><ul><?php postsAutor($ID, 2010); ?></ul></div>
                      <div id="2009" class="ocultar"><ul><?php postsAutor($ID, 2009); ?></ul></div>
                      
                </section>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
