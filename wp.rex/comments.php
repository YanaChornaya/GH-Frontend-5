<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
    'author' => '<div class="form-group"><input id="author" type="text" name="author" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . __('Name','rex') . '"/></div>',
    'email'  => '<div class="form-group"><input id="email" type="email" name="email" class="form-control" placeholder="' . __('Enter Email','rex'). '"  value="' . esc_attr(  $commenter['comment_author_email'] ) . '"/></div>',
);
$comments_args = array(
    'fields'                =>  apply_filters( 'comment_form_default_fields', $fields),
    'comment_field'         => '<div class="form-group"><textarea id="comment" name="comment" class="form-control" aria-required="true"></textarea></div>',
    'title_reply'          =>  '',
    'comment_notes_before'  => '',
    'comment_notes_after'  => '',
    'submit_button'        => '<input class="button button-default ownstyle" data-text="Comment" type="submit" id="%2$s" value="'. __('Comment','rex') .'"/>',
);

function kama_reorder_comment_fields( $fields )
{
    $new_fields = array();

    $myorder = array('author', 'email', 'comment');

    foreach ($myorder as $key) {
        $new_fields[$key] = $fields[$key];
        unset($fields[$key]);
    }

    return $new_fields;
}

add_filter('comment_form_fields', 'kama_reorder_comment_fields' );

comment_form($comments_args);