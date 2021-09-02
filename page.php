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
	</header>

	<div class="entry-content">
		<?php the_content() ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
