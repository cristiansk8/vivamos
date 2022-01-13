<div class="container docs" >
  <div class="row">
    <div class="col-md-6">
      <?php
      wp_tag_cloud ()
       ?>
       <h2>
         Posibles resultados
       </h2>
       <?php

       /**
        * Related News
        */

       $args = array(
         'post_type' => 'documentos',
         'posts_per_page' => 100
       );

       $query = new WP_Query($args);

       if ($query->have_posts() ) : ?>
       <section class="documentos">
         <div class="container-fluid padding-contendor-elemetos">
           <div class="row lista-docs">
           <?php
           while($query->have_posts()):$query->the_post();
               ?>
             <div class="news__item">
                <div class="news__caption">
                   <p class="headline headline--4">
                       <?php the_title(); ?>
                   </p>
                </div>

             </div>
               <?php
           endwhile;
           ?>

           </div>
         </div>
       </section>
           <?php
       endif;
       wp_reset_postdata();
       ?>
    </div>
    <div class="col-md-6">
      <div class="visor">
       <p>Aqui se visualiza el pdf</p>
      </div>
      <div class="boton-descarga">
        <a href="#">Descargar</a>
      </div>
    </div>
  </div>
</div>
