<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orlando_Attractions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'orlando-attractions' ); ?></a>

	<header class="site-header" role="banner">
  <nav class="navbar-top" role="navigation">
    <p class="slogan">Smart Vacation Ideas. Save Time. Save Money.</p>
    <ul class="top-links">
      <li class="social"><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
      <li class="social"><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
      <li class="social"><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
      <li class="social"><a href="#"><span class="fa fa-youtube" aria-hidden="true"></span></a></li>
      <li class="social"><a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
    </ul>
  </nav>

  <nav class="navbar-middle" role="navigation">
    <div class="logo" itemscope itemtype="http://schema.org/Organization">
      <img itemprop="logo" src="/wp-content/uploads/2018/04/oa-logo.png" alt="">
    </div>

		<?php
			wp_nav_menu( array(
				'menu'             => 'primary',
				'theme_location'   => 'primary',
				'container'        => 'div',
				'container_class'  => 'middle-nav',
				'menu_class'       => 'middle-links'
			));
		?>
  </nav>

  <nav class="navbar-bottom" role="navigation">
    <a href="#" class="buy-tickets">
      <p>Buy Tickets</p>
      <div class="bot-left"></div>
    </a>
		<?php
			wp_nav_menu( array(
				'theme_location'   => 'tickets',
				'menu'             => 'tickets',
				'container'        => 'nav',
				'container_class'  => 'navbar-bottom',
				'menu_class'       => 'bottom-links'
			));
		?>
  </nav>
  
</header>

	<div id="content" class="site-content">
