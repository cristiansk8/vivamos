<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
        <div class="lista">
          <?php
          $args = array(
            'post_type' => 'terminos',
            'posts_per_page' => 200
          );

          $query = new WP_Query($args);

          if ($query->have_posts() ) : ?>
          <?php
          while($query->have_posts()):$query->the_post();
              ?>
              <div class="item">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
                           <?php
         endwhile;
       endif;
       wp_reset_postdata();
         ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <h2><?php _e('Resultados de búsqueda de', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
        <hr/>
				<?php get_template_part('includes/loops/content', 'search'); ?>
      </div><!-- /#content -->
    </div>


  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
