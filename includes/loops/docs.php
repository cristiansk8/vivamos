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
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item">
         <div class="news__caption">
            <p class="headline headline--4">
              <a href="<?php the_field('file') ?>">  <?php the_title(); ?> </a>
            </p>
         </div>
         <a class="word" href="<?php the_field('file') ?>">Open a Word document in Fancybox</a>


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
