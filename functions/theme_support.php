<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }

// Add theme support for WordPress features
// See: https://developer.wordpress.org/reference/functions/add_theme_support/

/*
 * Let WordPress manage the document title.
 * This theme does not use a hard-coded <title> tag in the document head,
 * WordPress will provide it for us.
 */
add_theme_support( 'title-tag' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
	'html5',
	array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	)
);

/*
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
$logo_width  = 100;
$logo_height = 100;

add_theme_support(
	'custom-logo',
	array(
		'height'               => $logo_height,
		'width'                => $logo_width,
		'flex-width'           => true,
		'flex-height'          => true,
		'unlink-homepage-logo' => false,
	)
);

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for responsive embedded content.
add_theme_support( 'responsive-embeds' );

// Add support for page excerpts
add_post_type_support( 'page', 'excerpt' );
