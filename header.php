<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Almiron_Digital_Group_-_Base
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NCRDTNT');</script>
<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCRDTNT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'almiron-digital-group-base' ); ?></a>

	<header id="masthead" class="site-header">

		<!-- <div class="covid-notice">
		COVID-19 UPDATE - TELEHEALTH CONSULTATIONS AVAILABLE - CALL <a onclick="ga('event','send', 'PhoneCalls','HeaderClick','Covid-19');" href="tel:877-925-4565">(877)-925-4565</a>
			</div> -->
		<nav class="navbar navbar-expand-md navbar-light" role="navigation">
		  <div class="container">

				<div class="header-buttons">
					<a onclick="ga('PhoneCalls','HeaderClick');" href="tel:<?php the_field('phone', 'option');?>"><?php the_field('phone', 'option');?></a>
					<a onclick="ga('AppClick','HeadClick');" href="/contact"><?php the_field('button', 'option');?></a>
				</div>


				<div class="site-branding">
		 		<a href="/">	<img src="<?php the_field('logo','option');?>"></a>
		 		</div><!-- .site-branding -->
		        <?php
		        wp_nav_menu( array(
		            'theme_location'    => 'primary',
		            'depth'             => 2,
		            'container'         => 'div',
		            'container_class'   => 'collapse navbar-collapse',
		            'container_id'      => 'mobile-menu-custom',
		            'menu_class'        => 'nav navbar-nav ml-auto',
		            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		            'walker'            => new WP_Bootstrap_Navwalker(),
		        ) );
		        ?>

						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" id="toggle-btnn">
							<span class="navbar-toggler-icon"></span>
						</button>
		    </div>
		</nav>
	</header><!-- #masthead -->
