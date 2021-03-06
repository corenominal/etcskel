<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>
<?php get_header(); ?>

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
		<p class="entry-date published updated">Published <a class="u-url" href="<?php the_permalink(); ?>"><?php the_time('F j, Y') ?></a></p>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->

<?php endwhile; // End of the loop. ?>

<?php get_template_part( 'pager' ); ?>

<?php get_footer(); ?>