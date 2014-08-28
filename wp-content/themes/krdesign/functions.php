<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * @package WordPress
 * @subpackage krdesign
 * @since krdesign
 */


if ( ! function_exists( 'krdesign_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'krdesign' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'krdesign', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', krdesign_font_url() ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'krdesign-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'mainmenu'   => __( 'Main Menu', 'krdesign' ),
		'footer_section1' => __( 'Footer Menu of Section 1', 'krdesign' ),
		'footer_section2' => __( 'Footer Menu of Section 2', 'krdesign' ),
		'footer_section3' => __( 'Footer Menu of Section 3', 'krdesign' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'krdesign_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'krdesign_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // krdesign_setup
add_action( 'after_setup_theme', 'krdesign_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'krdesign_content_width' );



/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'krdesign' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'krdesign' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'krdesign_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function krdesign_font_url() {
	$font_url = '';
	
	$font_url = add_query_arg( 'family', urlencode( 'Open+Sans:400,300,600,700,800' ), "//fonts.googleapis.com/css" );
	
	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_scripts() {

	wp_enqueue_style( 'krdesign-style', get_stylesheet_uri() );
	wp_enqueue_style( 'krdesign-bxslider_css', get_template_directory_uri(). '/css/jquery.bxslider.css' );
	wp_enqueue_style( 'krdesign-fancybox_css', get_template_directory_uri(). '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'krdesign-combined_css', get_template_directory_uri(). '/css/combined.css' );
	// wp_enqueue_style( 'krdesign-opensans', krdesign_font_url(), array(), null );

	wp_enqueue_script( 'krdesign-juery', get_template_directory_uri() . '/js/jquery.js',array(), '1.10.2');
	wp_enqueue_script( 'krdesign-bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.js');
	wp_enqueue_script( 'krdesign-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.js');
	wp_enqueue_script( 'krdesign-juery-migrate', get_template_directory_uri() . '/js/jquery-migrate.js');
	wp_enqueue_script( 'krdesign-main-js', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'krdesign-combined', get_template_directory_uri() . '/js/combined.js');
	wp_enqueue_script( 'krdesign-kenburns', get_template_directory_uri() . '/js/kenburns.js');
	wp_enqueue_script( 'krdesign-reflection', get_template_directory_uri() . '/js/reflection.js');
	wp_enqueue_script( 'krdesign-custom', get_template_directory_uri() . '/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'krdesign_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_admin_fonts() {
	wp_enqueue_style( 'krdesign-lato', krdesign_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'krdesign_admin_fonts' );

if ( ! function_exists( 'krdesign_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 */
function krdesign_the_attached_image() {
	$post = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'krdesign_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;




/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function krdesign_post_classes( $classes ) {
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'krdesign_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function krdesign_wp_title( $title, $sep ) {
	global $paged, $page;

	/*if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo $title = "$site_description $sep $title";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( __( 'krdesign', 'Page %s' ), max( $paged, $page ) ). " $sep  $title";
	}
*/
	$sitename = get_bloginfo( 'name', 'display' );
	$title = $sitename .' '.$sep.' '.$title;
	$title = rtrim(trim($title),'|');

	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = get_bloginfo( 'description', 'display' );
	}

	return $title;
}
add_filter( 'wp_title', 'krdesign_wp_title', 10, 2 );

