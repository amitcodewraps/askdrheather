<?php
/**
 * askdrheather functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package askdrheather
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function askdrheather_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on askdrheather, use a find and replace
		* to change 'askdrheather' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'askdrheather', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'askdrheather' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'askdrheather_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'askdrheather_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function askdrheather_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'askdrheather_content_width', 640 );
}
add_action( 'after_setup_theme', 'askdrheather_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function askdrheather_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Social Link', 'askdrheather' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'askdrheather' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'askdrheather_widgets_init' );


add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Footer 1' ),
  'id' => 'footer1',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));


add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Footer-2 Contact Us' ),
  'id' => 'footer2',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Footer-3 Quick Link' ),
  'id' => 'footer3',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));


add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Footer-4 Heather' ),
  'id' => 'footer4',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Address' ),
  'id' => 'address',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Email' ),
  'id' => 'email',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Phone' ),
  'id' => 'phone',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));


add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Fax' ),
  'id' => 'fax',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

add_action( 'init', 'create_my_taxonomies', 0 );
register_sidebar(array(
  'name' => __( 'Copyright' ),
  'id' => 'copyright',
  'description' => __( 'Widgets in this area will be shown in the sidebar on blog Page.' ),
  'before_widget' => '<div>',
 'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

/**
 * Enqueue scripts and styles.
 */
function askdrheather_scripts() {

wp_enqueue_style( 'bootstrapmincss', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
wp_enqueue_style( 'owlthemedefaultmincss', get_template_directory_uri().'/assets/css/owl.theme.default.min.css' );
wp_enqueue_style( 'owlcarouselmincss', get_template_directory_uri().'/assets/css/owl.carousel.min.css' );
wp_enqueue_style( 'boxiconsmincss', get_template_directory_uri().'/assets/css/boxicons.min.css' );
wp_enqueue_style( 'flaticoncss', get_template_directory_uri().'/assets/css/flaticon.css' );
wp_enqueue_style( 'meanmenumincss', get_template_directory_uri().'/assets/css/meanmenu.min.css' );
wp_enqueue_style( 'animatemincss', get_template_directory_uri().'/assets/css/animate.min.css' );
wp_enqueue_style( 'niceselectmincss', get_template_directory_uri().'/assets/css/nice-select.min.css' );
wp_enqueue_style( 'datepickermincss', get_template_directory_uri().'/assets/css/date-picker.min.css' );
wp_enqueue_style( 'magnificpopupmincss', get_template_directory_uri().'/assets/css/magnific-popup.min.css' );
wp_enqueue_style( 'animatemincss', get_template_directory_uri().'/assets/css/animate.min.css' );
wp_enqueue_style( 'stylecss', get_template_directory_uri().'/assets/css/style.css' );
wp_enqueue_style( 'responsivecss', get_template_directory_uri().'/assets/css/responsive.css' );
wp_enqueue_style( 'animatemincss', get_template_directory_uri().'/assets/css/animate.min.css' );
	



	

	wp_enqueue_style( 'askdrheather-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'askdrheather-style', 'rtl', 'replace' );

	wp_enqueue_script( 'askdrheather-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'askdrheather_scripts' );

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

// Disabling Gutenberg Editor

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
return false;
}

// Adding the Options Page in Admin Menu

add_action( 'admin_menu', 'linked_url' );
function linked_url() {
add_menu_page( 'linked_url', 'Options', 'read', 'post.php?post=121&action=edit', '', 'dashicons-admin-generic', 90 );
}

//Hiding the Options Page

add_filter( 'parse_query', 'exclude_pages_from_admin' );
function exclude_pages_from_admin($query) {
    global $pagenow,$post_type;
    if (is_admin() && $pagenow=='edit.php' && $post_type =='page') {
		$settings_page = get_page_by_path("options",NULL,"page")->ID;
        $query->query_vars['post__not_in'] = array($settings_page);
    }
}


