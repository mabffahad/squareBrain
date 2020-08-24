<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SquareBrain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title();  ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="title" content="<?php wp_title(); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="image:Background" content="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg">
    <meta property="og:title" content="<?php wp_title() ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'squarebrain' ); ?></a>
	<div style="background-image: url('<?php echo page_bg();?>')" class="bg-wrapper">
		<header id="masthead" class="site-header">
	        <nav class="navbar navbar-expand-lg navbar-default" style="padding-right: 0; padding-left: 0">
	            <div class="container pr">
	                <a class="navbar-brand" href="<?php echo site_url(); ?>">
	                    <img alt="Cluster Antivirus Logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
	                </a>
	                <div class="nav-btn">
	                    <a data-toggle="tooltip" title="Send Email" data-placement="top" href="mailto:<?php echo get_theme_mod( 'squarebrain_email_settings', false ); ?>"> <img alt="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.png"></a>
	                    <a data-toggle="tooltip" title="Call now" data-placement="top" href="tel:<?php echo get_theme_mod( 'squarebrain_phone_settings', false ); ?>"> <img alt="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-2.png"></a>
	                    <a data-toggle="tooltip" title="Search..." data-placement="top" href="javascript: void(0)"> <img alt="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-3.png"></a>
	                    <a data-toggle="tooltip" title="Your Cart Items" data-placement="top" href="<?php echo wc_get_cart_url(); ?>"> <img alt="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-4.png">
	                    	<span id="mini-cart-count">
	                    		<?php 
		                    		if (WC()->cart->get_cart_contents_count() != 0) {
		                    			echo WC()->cart->get_cart_contents_count(); 
		                    		}
	                    		?>
	                    	</span>
	                    </a>
	                    <button class="navbar-toggler" type="button">
	                        <span class="fa fa-bars"></span>
	                    </button>
	                </div>
	                <div class="collapse navbar-collapse"  id="squarebrain_nav">
	                	<?php 
	                		wp_nav_menu( array( 
										'theme_location'=>'Primary',
										'menu_class'=>'navbar-nav home-nav  mr-auto',
	                		) );
	                	?>
	                    
	                </div>

	            </div>
	        </nav>
	    </header>
