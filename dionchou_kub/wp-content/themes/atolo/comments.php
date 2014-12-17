<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="alert">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h4 class="comm-title"><?php comments_number(__('No Commets', 'atolo'), __('1 Comment', 'atolo'), __('% Comments', 'atolo') );?> to &#8220;<?php the_title(); ?>&#8221;</h4>

	<ol class="commentlist">
	<?php wp_list_comments( array( 'callback' => 'my_custom_comments' )); ?>
	</ol>
    
 <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
                <h1 class="assistive-text"><?php echo $comments_navigation; ?></h1>
                <div class="nav-previous"><?php previous_comments_link( '&larr;'. $comments_older ); ?></div>
                <div class="nav-next"><?php next_comments_link($comments_newer .'&rarr;'); ?></div>
            </nav><!-- /coment-nav-above -->
            <?php endif; ?>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

	<h4 class="comm-title"><?php comment_form_title(__('Leave a Comment', 'atolo'), __('Leave a Comment to %s', 'atolo') ); ?></h4>

	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
    
   <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    
    <div class="row">
    
     <div class="span5">
		<textarea name="comment" id="comment" cols="100%" rows="11" tabindex="4"></textarea>
        </div>

		 <div class="span3">

		<?php if ( is_user_logged_in() ) : ?>

		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
        
		<?php else : ?>
        
<input type="text" name="author" id="author" class="comm-field"  value="<?php _e('Name', 'atolo')?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> onFocus="if(this.value=='<?php _e('Name', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('Name', 'atolo')?>';" />
   		<input type="text" name="email" id="email" class="comm-field" value="<?php _e('Email', 'atolo')?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> onFocus="if(this.value=='<?php _e('Email', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('Email', 'atolo')?>';"  />
   		<input type="text" name="url" id="url" class="comm-field" value="<?php _e('URL', 'atolo')?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?> onFocus="if(this.value=='<?php _e('URL', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('URL', 'atolo')?>';" />
		
	<?php endif; ?>

		
		<input name="submit" type="submit" id="submit-comm" tabindex="5" value="<?php _e('Submit Comment', 'atolo')?>" />
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
        
	     </div><!--end span3-->

 </div>
	</form>

	<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; // if you delete this the sky will fall on your head ?>