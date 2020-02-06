<?php 
function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment-author vcard bio">
            <?php echo get_avatar($comment,$size='64',$default="http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g"); ?>
        </div>
        <!-- <?php if ($comment->comment_approved == '0') : ?>
            <em><?php esc_html_e('Your comment is awaiting moderation.','evans') ?></em>
            <br />
        <?php endif; ?> -->
        
        <div class="comment-body">
            <h3><?php echo get_comment_author(); ?></h3>
            <div class="meta"><?php echo get_comment_date(); ?> <?php echo get_comment_time(); ?></div>
            <p><?php comment_text(); ?></p>
            <?php comment_reply_link(array_merge($args, array( 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </li>


<?php 
}