<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>
<?php get_header(); ?>

<header class="page-header">
	<h1 class="page-title">404 Not Found</h1>
</header><!-- .page-header -->

<div class="error-404 not-found">
	<div class="page-content">
		<p>It looks like nothing was found at this location. Maybe try a search?</p>
		<?php get_search_form(); ?>
	</div><!-- .page-content -->
</div><!-- .error-404 -->

<?php get_footer(); ?>