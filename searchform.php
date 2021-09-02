<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); } ?>

<form id="search-form" class="search-form" action="<?php echo site_url(); ?>" method="get">
	<label class="screen-reader-text" for="search">Search</label>
	<input id="search" class="search-input" type="text" name="s" placeholder="Search ..." value="<?php the_search_query() ?>">
	<input type="submit" value="Search">
</form>
