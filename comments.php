<?php

if( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area comment-body">

    <?php   
    if( have_comments() ) : ?>
    
    <h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h4>

    <ul class="comment-list">
        <?php wp_list_comments('callback=custom_comments'); ?>
    </ul>
   
        <?php 

        // wp_list_comments( array( 'callback' => 'better_comments', 'style' => 'ul' ) );
        
        // $args = array(
        //     'walker'            => null,
        //     'max_depth'         => '',
        //     'style'             => 'ul',
        //     'callback'          => null,
        //     'end-callback'      => null,
        //     'type'              => 'all',
        //     'reply_text'        => 'Reply',
        //     'page'              => '',
        //     'per_page'          => '',
        //     'avatar_size'       => 64,
        //     'reverse_top_level' => null,
        //     'reverse_children'  => '', 
        //     'format'            => 'html5',
        //     'short_ping'        => false,
        //     'echo'              => true
        // );

        // wp_list_comments( $args );  

   
        ?>
    </ul>

    <?php 
    if( !comments_open() && get_comments_number() ) :
    ?>

    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'evans' ); ?></p>

    <?php endif; ?>

    <?php endif;  ?>

    <?php comment_form(); ?>
</div><!--.comments-area-->