<?php
function fitnes_comment_start($comment, $args, $depth){
?>
<!-- <pre><?php //print_r( get_avatar_url( $comment ) ) ?></pre> -->
<div class="media">
    <div class="media-object pull-left">
        <img src="<?php echo get_avatar_url( $comment ) ?>" class="img-responsive img-circle" alt="blog">
    </div><!-- media-object -->
    <div class="media-body">
        <h4 class="media-heading"><?php echo get_comment_author() ?></h4>
        <h5><?php echo get_comment_date( 'd M Y', $comment ); ?></h5>
        <p><?php echo get_comment_text(); ?></p>
        <?php //echo get_comment_reply_link(['reply_text' => "ответить на комментарий"], 2881, 631); ?> 
    <?php 
    // If not chidrens closed block media
    
}
function fitnes_comment_end($comment, $args, $depth){
    if( $depth ) {
        echo "\n\t</div><!-- media -->";
        if ( !$args['has_children'] ) {
            echo "\n\t\t</div><!-- media-body -->";
        }
    }

    // If not chidrens closed last block media
    if ( !$args['has_children'] ) {
        echo "\n</div><!-- media-body-last -->";
        echo "\n</div><!-- media-last -->";
    }
}
