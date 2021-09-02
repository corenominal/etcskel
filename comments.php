<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); } ?>
<section id="comments" class="comments">
<h3><?php comments_number('', 'One comment', '% comments'); ?></h3>
<ol class="comment-list">
<?php
wp_list_comments( array(
    'style'       => 'ol',
    'short_ping'  => true,
    'avatar_size' => 46,
) );
?>
</ol>
<?php
$commenter = wp_get_current_commenter();
$fields =  array(

  'author' =>
    '<label for="author">Name *</label> ' .
    '<input id="author" placeholder="Your name here ..." class="full-width" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" required>',

  'email' =>
    '<label for="email">Email *</label> ' .
    '<input id="email" placeholder="Your email here ..." class="full-width" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" required>',

  'url' =>
    '<label for="url">Website</label>' .
    '<input id="url" class="full-width" name="url" type="text" placeholder="https://example.com" value="' . esc_attr( $commenter['comment_author_url'] ) .'">',
);

$comment_field = '<label for="comment">Comment *</label><textarea id="comment" placeholder="Your comment here ..." class="full-width" name="comment" rows="12" aria-required="true" required></textarea>';

$args = array(
    'fields'                =>  $fields,
    'comment_field'         =>  $comment_field,
    'title_reply'	        =>	'Leave a comment',
    'class_form'            =>  'form-classS',
    'class_submit'          =>  'button-class'
	);
comment_form( $args );
?>
</section>