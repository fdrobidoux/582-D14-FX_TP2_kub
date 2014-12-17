<?php 
function tz_comment($comment, $args, $depth) {

    $isByAuthor = false;
    if($comment->comment_author_email == get_the_author_meta('email')) {
        $isByAuthor = true;
    }
    $GLOBALS['comment'] = $comment; ?>
    
    
    
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

   <div id="comment-<?php comment_ID(); ?>" class="commentid">
     
            <div class="comments">
                    <div class="comments-title">
                        <?php printf(get_comment_author_link()) ?>
                        <span><?php echo(get_comment_date()) ?></span>
                        <span style="margin:2px 0 0 0;"><?php edit_comment_link(__('(Edit Comment)'),'  ','') ?></span>
                    </div><!--end comments-title-->
                    
                    <div class="text">
                        <?php comment_text() ?>
                        
                        <?php if ($comment->comment_approved == '0') : ?>
                           <em class="moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
                           <br />
                        <?php endif; ?>
                    </div><!--end text-->
                    
                    <div class="reply-container">
                       <span><?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply','depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
                    </div><!--end reply-container-->
            </div><!--end comments-->
      <div style="clear:both;"></div> 
   </div><!--end commentid-->

<?php } ?>