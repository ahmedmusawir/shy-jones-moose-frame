<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-logo-social container-fluid">
			<?php
			    $front_header_image = get_field('front_header_image', 6); // 1476 is post id     
			    $blog_header_image = get_field('blog_header_image', 324);                          
			    $siteLogo = get_field('site_logo', 6); // 1476 is post id                               
			    $size = 'full'; // (thumbnail, medium, large, full or custom size)
			?>

			<style type="text/css" media="screen">
				
				.header-logo-social {
					/* background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/header-transparent-bg.png"); */
				}
				.navbar {
					/* background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/header-transparent-bg.png"); */
				}

			</style>
			<div class="logo-container col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
	        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo $siteLogo;  ?>" alt=""></a>
	      	</div>
	      	<div class="header-social-container col-xs-12 col-sm-12 col-md-8 col-lg-8">
<!-- 
	      		<div class="header-social pull-right">
					<span><a href="#"><i class="fa fa-twitter fa-2x"></i></a></span>				
					<span><a href="#"><i class="fa fa-facebook fa-2x"></i></a></span>				
					<span><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></span>				
					<span><a href="#"><i class="fa fa-instagram fa-2x"></i></a></span>				
					<span><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></span>				
				</div> 
-->


				<div class="navbar-container">
					<nav class="navbar navbar-inverse-not navbar-fixed-top-not" role="navigation">
			
			  		  <div class="container-fluid">

					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					        </button>
					    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="http://tiana/wp-content/uploads/2016/01/TianaGustafsonLogo.png" alt=""></a> -->
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse navbar-ex1-collapse">

					    	
					        <?php
						        wp_nav_menu( array(
						            'theme_location' => 'primary',
						            'depth' => 2,
						            'container' => false,
						            'menu_class' => 'nav navbar-nav navbar-right',
						            'fallback_cb' => 'wp_page_menu',
						            //Process nav menu using our custom nav walker
						            'walker' => new wp_bootstrap_navwalker())
						        );
					        ?>
					    </div><!-- /.navbar-collapse --> 
			  		  </div><!-- /.container-fluid -->

					</nav>
				</div>


	      	</div>
		
		</div>

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<?php $page_header_image = get_field( 'page_header_image' ); ?>
	
	<header id="front-pg-header">

		<?php // if ( is_front_page() || is_home() || is_single() || is_archive() || is_search() ) : ?>
		<?php if ( is_front_page() || is_single() || is_archive() || is_search() ) : ?>

			<img class="img-responsive" src="<?php echo $front_header_image; ?>" alt="tiana img">

		<?php elseif ( is_home() ) : ?>	
			
			<img class="img-responsive" src="<?php echo $blog_header_image; ?>" alt="tiana img">
			
		<?php else : ?>
			<img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img">
		<?php endif; ?>
	

	</header>




























