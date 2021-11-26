<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" role="banner">
	    
	    <?php if ( has_custom_logo() ) : ?>
			<div class="site-logo"><?php the_custom_logo(); ?></div>
		<?php endif; ?>

		<div class="site-branding">

			<?php if ( get_bloginfo( 'name' ) ) : ?>
				<?php if ( is_front_page() && ! is_paged() ) : ?>
					<h1 class="site-title"><?php bloginfo('name') ?></h1>
				<?php elseif ( is_front_page() && ! is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo site_url(); ?>"><?php bloginfo('name') ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo site_url(); ?>"><?php bloginfo('name') ?></a></p>
				<?php endif; ?>
			<?php endif; ?>


			<p class="site-description">
				<?php bloginfo( 'description' ) ?>
			</p>

		</div><!-- .site-branding -->

	    <?php get_search_form(); ?>

	    <?php if ( has_nav_menu( 'primary' ) ) : ?>
		    <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="Primary menu">
		    	<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
				?>
		    </nav><!-- #site-navigation -->
	    <?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">