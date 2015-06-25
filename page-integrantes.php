<?php
/*
 * Template Name: Integrantes
 */
get_header(); ?>
       

        <section class="col-md-9">
            
            <div id="contenido" class="integrantesWrap">
                <h2 class="text-center puesto">Coordinador</h2>
                
                <div id="coordinador" class="row integrante">
                    <div class="col-md-2 col-sm-2 col-sm-2 col-xs-3">
                         <img class="integrante" src="<?php the_author_meta('_cmb_imagen',  2  ); ?>">
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                         <h2 class="text-center azul armando"><?php the_author_meta('display_name',  2  ); ?></h2>
                         <p class="descripcion text-justify"><?php the_author_meta('description', 2 ); ?></p>
                         <a href="/?author=<?php the_author_meta('ID', 2 ); ?>"class="btn alignright enlace">Ver más</a>
                    </div>
                </div>
                
                <h2 class="text-center azul puesto">Cronistas Titulares</h2>
                
                
                <div id="cronistasWrapper">
                    <?php $autores = get_users('rderby=nicename&role=author');
                    foreach ($autores as $autor) { ?>

                    <div class="integrante clear">
                        <div class="col-md-2 col-sm-2 col-xs-3">
                            <?php echo '<img class="integrante" src=' . $autor->_cmb_imagen . '>'; ?>
                       </div>
                        <div class="col-md-10 col-sm-10 col-xs-9">
                                <h2 class="text-center oro nombre"><?php echo $autor->display_name ?></h2>
                                
                                    <?php
                                    $length = 400; //modify for desired width
                                    $string =  $autor->description;
                                    if (strlen($string) <= $length) {
                                       $string = $string; //do nothing
                                    } else {
                                       $string = substr($string, 0, strpos(wordwrap($string, $length), "\n"));
                                    }
                                    ?>
                         
                              
                                <p class="descripcion text-justify"><?php echo $string; ?></p>
                                
                                
                                
                                <a href="/?author=<?php echo $autor->ID ?> " class="btn alignright">Ver más</a>
                        </div>
                     </div>
                    <?php  }  ?>   
               </div>
                
            </div>
 
        </section>
        <!-- /section -->
        



<?php get_sidebar('historia'); ?>

<?php get_footer(); ?>
