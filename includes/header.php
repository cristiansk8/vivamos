<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-wa_rning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-header">
    <div class="row-header">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
          <img src="<?php bloginfo('template_url')?>/img/logo-vivamos.jpg" alt="vivamos"/>
        </a>
		  <div class="text-right bienvenido">
				<a href="https://victimas.toryskateshop.com/wp-admin/">			  <p>
								  Bienvenido,
									<span>
										<?php
										if (is_user_logged_in()){
												$cu = wp_get_current_user();
												echo ' ' . $cu->user_login     . '<br>';
										}
										 ?>
									</span>
							  </p>
							</a>
							<a href="https://victimas.toryskateshop.com/wp-login.php?action=logout">
								<p class="logout">Cerrar sesión</p>
							</a>

		  </div>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-nav--right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>



      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container -->
</nav>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
