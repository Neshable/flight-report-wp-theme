<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flight_Report
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
<div id="page" class="site">

		<!-- Navigation -->
		<?php if ( !is_page_template( 'home-template.php' ) ) : ?>

		<nav id="mainNav" class="navbar  navbar-toggleable-md navbar-light" role="navigation">

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        	<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			// Check if the custom logo is set
			if ( has_custom_logo() ) : ?>
			     <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="navbar-logo" id="logo" src="<?php echo esc_url( $logo[0] ); ?>"></a>
			<?php else : ?>
				<!-- Display website name if no logo is present -->
			     <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

            <div class="collapse navbar-collapse" id="navbarExample">

            	<?php wp_nav_menu( array(
                	'theme_location' => 'menu-primary',
                	'walker' => new FlightBoot_Walker(), 
                	'menu_class' => 'navbar-nav ml-auto',
                	'container' => 'ul'
                )); ?>

            </div>
        	
        </div>
		

		</nav><!-- #site-navigation -->
		<?php else : ?>
		<!-- Display nav bar for the landing page template (no navigation menu) -->
		<nav id="mainNav" class="navbar  navbar-toggleable-md navbar-light transparent" role="navigation">
		<div class="container">
		<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) : ?>
			      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			      <img class="navbar-logo" id="logo" src="<?php echo esc_url( $logo[0] ); ?>">
			      </a>
			<?php else : ?>
			        <h1><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></h1>
		<?php endif; ?>
		<div class="collapse navbar-collapse" id="navbarExample">
			<div class="navbar-nonmenu ml-auto"><i class="fa fa-phone"></i>0808 271 7364 / FreePhone</div></br>
		</div>
			</div>
		</nav>
	<?php endif; ?>


