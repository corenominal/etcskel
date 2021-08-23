<?php if ( ! defined( 'WPINC' ) ) { add_theme_support(  'post-thumbnails'  );; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if( is_home() || is_front_page() ): ?>
<title><?php bloginfo('name')?> - <?php bloginfo('description'); ?></title>
<?php else: ?>
<title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>
<?php endif; ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS Feed | <?php bloginfo('name'); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
