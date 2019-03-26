<?php
/**
 * lubvi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lubvi
 */

if ( ! function_exists( 'lubvi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lubvi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lubvi, use a find and replace
		 * to change 'lubvi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lubvi', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'lubvi' ),
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
		add_theme_support( 'custom-background', apply_filters( 'lubvi_custom_background_args', array(
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
add_action( 'after_setup_theme', 'lubvi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lubvi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lubvi_content_width', 640 );
}
add_action( 'after_setup_theme', 'lubvi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lubvi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lubvi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lubvi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Instabar', 'lubvi' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'lubvi' ),
		'before_widget' => '<section id="%2$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lubvi_widgets_init' );

function create_taxonomy() {

	register_taxonomy('Category', 
		array('Photo'), array(
		'label'                 => '',
		'labels'                => array(
			'name'              => 'Category of Photo',
			'singular_name'     => 'Category of Photos',
			'search_items'      => 'Search Category of Photos',
			'all_items'         => 'All Category of Photos',
			'view_item '        => 'View Category of Photos',
			'parent_item'       => 'Parent Category of Photos',
			'parent_item_colon' => 'Parent Category of Photos:',
			'edit_item'         => 'Edit Category of Photos',
			'update_item'       => 'Update Category of Photos',
			'add_new_item'      => 'Add New Category of Photos',
			'new_item_name'     => 'New Category of Photos Name',
			'menu_name'         => 'Category of Photos',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}
add_action('init', 'create_taxonomy');


function true_register_post_type_init() {

	$labels = array(
		'name' => 'Photo',
		'singular_name' => 'Photo', //
		'add_new' => 'Add Photo',
		'add_new_item' => 'Add new Photo', //
		'edit_item' => 'Edit Photo',
		'new_item' => 'New Photo',
		'all_items' => 'All Photo',
		'view_item' => 'view Photo on site',
		'search_items' => 'Search Photo',
		'not_found' =>  'Photo not found',
		'not_found_in_trash' => 'Not found Photo in trash.',
		'menu_name' => 'Photo' //
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, //
		'has_archive' => true,
		'menu_position' => 20, //
		'supports' => array( 'title', 'author', 'thumbnail'),
		'taxonomies' => array( 'Category' ),
	);
	register_post_type('Photo', $args);
	}
add_action( 'init', 'true_register_post_type_init' );




/**
 * Enqueue scripts and styles.
 */
function lubvi_scripts() {
	wp_enqueue_style( 'lubvi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lubvi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lubvi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lubvi_scripts' );

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

