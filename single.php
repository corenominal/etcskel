<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>
<?php get_header(); ?>

<?php
// Start the Loop
while ( have_posts() ) :
the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title() ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content() ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<p class="meta article-date">Published <a class="u-url" href="<?php the_permalink(); ?>"><?php the_time('F j, Y') ?></a></p>

		<?php
		$categories_list = get_the_category_list( ', ' );
		if( $categories_list ): ?>
			<p>Categorised as <?php echo $categories_list ?></p>
		<?php endif; ?>

		<?php if( has_tag() ): ?>    
		<p>Tagged <?php the_tags( '' ) ?></p>
		<?php endif; ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; // End of the loop. ?>

<?php comments_template() ?>

<?php get_footer(); ?>
