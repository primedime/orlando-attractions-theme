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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:100,200,300,400,600,700,800" rel="stylesheet"></link>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'orlando-attractions' ); ?></a>

	<header class="site-header" role="banner">
  <nav class="navbar-top" role="navigation">
    <p class="slogan">Smart Vacation Ideas. Save Time. Save Money.</p>
    <ul class="top-links">
      <li><a href="#">Login</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Ticket FAQ</a></li>
    </ul>
  </nav>

  <nav id="site-navigation" class="navbar-middle main-navigation" role="navigation">
    <div class="logo" itemscope itemtype="http://schema.org/Organization">
      <img itemprop="logo" src="/wp-content/uploads/2016/08/OA-Logo-1000.png" alt="">
		</div>
		<button class="menu-toggle" id="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
      <i class="fas fa-bars"></i>
</button>

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
		<i class="icon-tags"></i>
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
