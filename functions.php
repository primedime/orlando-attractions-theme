<?php
/**
 * Orlando Attractions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Orlando_Attractions
 */

if ( ! function_exists( 'orlando_attractions_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function orlando_attractions_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Orlando Attractions, use a find and replace
		 * to change 'orlando-attractions' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'orlando-attractions', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'orlando-attractions' ),
			'tickets' => esc_html__( 'Ticket Nav', 'orlando-attractions'),
			'footer'  => esc_html__( 'Footer Nav', 'orlando-attractions'),
			'best-action'  => esc_html__( 'Best Action Attractions', 'orlando-attractions'),
			'best-distraction'  => esc_html__( 'Best Distraction Attractions', 'orlando-attractions')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'orlando_attractions_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'orlando_attractions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function orlando_attractions_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'orlando_attractions_content_width', 640 );
}
add_action( 'after_setup_theme', 'orlando_attractions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function orlando_attractions_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'orlando-attractions' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'orlando-attractions' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Parks Sidebar', 'orlando-attractions' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'orlando-attractions' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'orlando_attractions_widgets_init' );

class Partner_Ad_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'partner_ad_widget',
			'description' => 'Display a partner ad in the sidebar',
		);
		parent::__construct( 'partner_ad_widget', 'Partner Ad Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
		<section class="sidebar-partner">
    <?php $loop = new WP_Query( array( 'post_type' => 'partner_ads', 'orderby' => 'rand', 'order' => 'ASC', 'posts_per_page' => '1') ); ?>		
          <?php while( $loop->have_posts() ) : $loop->the_post(); 
            $partner_image        = get_field('partner_image');
            $partner_url          = get_field('partner_url');
            $partner_category     = get_field('partner_category');
          ?>
      <div class="partner-wrapper">
        <a href="<?php the_field('partner_url'); ?>">
          <img src="<?php echo $partner_image['url']; ?>" alt="<?php echo $attraction_image['alt']; ?>">
          <div class="text">
            <h3 class="tagline"><?php the_title(); ?></h3>
            <p class="category"><?php the_field('partner_category'); ?></p>
          </div>
        </a>
      </div>
    <? endwhile; ?>
  </section>
	<?php echo $args['after_widget'];
	}
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}
function partner_ad_widget() { 
	register_widget( 'Partner_Ad_Widget' );
}
add_action( 'widgets_init', 'partner_ad_widget' );

/**
 * Enqueue scripts and styles.
 */
function orlando_attractions_scripts() {
	wp_enqueue_style( 'orlando-attractions-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	wp_enqueue_script( 'orlando-attractions-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'orlando-attractions-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'orlando_attractions_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Remove width and height attributes from the returning html
 */

add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );
 
function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}