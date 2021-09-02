<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>

<?php if( get_next_posts_link() || get_previous_posts_link() ): ?>

<div id="pager" class="pager">
<div id="next_posts_link" class="next_posts_link">
<?php next_posts_link( '&lt; Older Posts' ) ?>
</div>
<div id="previous_posts_link" class="previous_posts_link">
<?php previous_posts_link( 'Newer Posts &gt;' ) ?>
</div>
</div>

<?php endif; ?>