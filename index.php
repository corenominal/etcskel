<?php if ( ! defined( 'WPINC' ) ) { add_theme_support(  'post-thumbnails'  );; }?>
<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ):
    while ( have_posts() ): 
        the_post();
    ?>
        <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>

        <?php the_content() ?>
    
    <?php endwhile; ?>

    <?php else: ?>

        <p>No content.</p>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
