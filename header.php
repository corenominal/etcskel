<?php if ( ! defined( 'WPINC' ) ) { add_theme_support(  'post-thumbnails'  );; }
get_template_part( 'inc/meta' );
?>

<header>
    <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a>

    <form id="search-form" class="search-form" action="<?php echo site_url(); ?>" method="get">
      <label for="search">Search</label>
		  <input id="search" class="search-input" autocomplete="off" type="text" name="s" placeholder="Search ..." value="<?php the_search_query() ?>">
      <input type="submit" value="Search">
    </form>
</header>
