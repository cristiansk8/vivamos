<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'terminos',
  'posts_per_page' => 200
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="documentos">
  <div class="container padding-contendor-elemetos">
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <div class="" id="sidebar" role="navigation">
            <?php get_template_part('includes/sidebar'); ?>
        </div>
         <div class="lista">
           <?php
           while($query->have_posts()):$query->the_post();
               ?>
               <div class="item">
                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </div>
              <?php
          endwhile;
          ?>
         </div>
      </div>
      <div class="col-xs-12 col-sm-8">
        <?php
        while($query->have_posts()):$query->the_post();
            ?>
          <div class="news__item">
             <div class="news__caption">
                <h2 class="headline headline--4">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </h2>
             </div>
             <div class="info">
                <?php the_content(); ?>
             </div>

          </div>
            <?php
        endwhile;
        ?>
      </div>


    </div>
  </div>
</section>
    <?php
endif;
wp_reset_postdata();
