
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
              <div id="2014" class="ocultar"><ul><?php postsAutor($autor, 2014); ?></ul></div>
              <div id="2013" class="ocultar"><ul><?php postsAutor($autor, 2013); ?></ul></div>
              <div id="2012" class="ocultar"><ul><?php postsAutor($autor, 2012); ?></ul></div>
              <div id="2011" class="ocultar"><ul><?php postsAutor($autor, 2011); ?></ul></div>
              <div id="2010" class="ocultar"><ul><?php postsAutor($autor, 2010); ?></ul></div>
              <div id="2009" class="ocultar"><ul><?php postsAutor($autor, 2009); ?></ul></div>
        </section>
        

