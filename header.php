<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	 <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url');  ?>">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<div class="menu-wrap">
				<!--  spread menu -->
				<div class="main-menu">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'main_menu',
							'fallback_cb'	  => 'false',
						));
					?>
				</div>
</div>

<div id="main" class="content-main">
<div id="wrapper" class="content-wrap">
  <header id="header">
  
	<div class="header-top">
			<div id="site-logo">
				<a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home" itemprop="url">
					 kina.</a>
			</div>
			
	<!-- menu toggle -->
	<div id="site-menu">
		<div class="menu-overlay"></div>
     		<a href="#" class="menu-link">
			  <div class="menu-button">
					<span class="line line-1"></span>
					<span class="line line-2"></span>
					<span class="line line-3"></span>
			</div>
			</a>
	</div>
	
	<div class="clear"></div>
	</div>
	
	<div id="site-title">
		<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
	</div>

	
  </header>