<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>
<?php get_header(); ?>

<header class="page-header">
	<h1 class="page-title">Results for <?php echo get_search_query() ?></h1>
</header><!-- .page-header -->

<?php if ( have_posts() ): ?>

<?php
// Start the Loop
while ( have_posts() ) :
the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<p class="meta article-date"><a class="u-url" href="<?php the_permalink(); ?>"><?php the_time('F j, Y') ?>&nbsp;&nbsp;<?php the_time() ?></a></p>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->

<?php endwhile; // End of the loop. ?>

<?php get_template_part( 'pager' ); ?>

<?php else: ?>

	<p>No results. Try a different search term?</p>

<?php endif; ?>

<?php get_footer(); ?>