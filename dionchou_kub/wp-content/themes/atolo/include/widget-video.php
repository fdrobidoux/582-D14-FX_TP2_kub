<?php
/*
 * Plugin Name: MT Video Widget
 * Plugin URI: http://www.matchthemes.com
 * Description: A widget that displays your latest video
 * Version: 1.0
 * Author: MatchThemes
 * Author URI: http://www.matchthemes.com
 */

/*
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'ft_video_embeds' );

/*
 * Register widget.
 */
function ft_video_embeds() {
	register_widget( 'ft_video_embed' );
}

/*
 * Widget class.
 */
class ft_video_embed extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ft_video_embed() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ft_video_embed', 'description' => __('A widget that displays your YouTube or Vimeo Video.', 'wmag') );

		/* Widget control settings. */
	//	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'ft_video_embed' );

		/* Create the widget. */
		$this->WP_Widget( 'ft_video_embed', __('Sidebar - Video Widget', 'wmag'), $widget_ops, $control_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$embed = $instance['embed'];
		$desc = $instance['desc'];

		/* Before widget (defined by themes). */
		echo '<div class="column-clear"></div>'.$before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display Widget */
		?>
			
			<div class="video-widget">
			<?php echo $embed ?>
            <p><?php echo $desc ?></p>
			</div>
			
		
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
		'title' => 'Video Widget',
		'embed' => stripslashes( '<iframe width="300" height="175" src="http://www.youtube.com/embed/badHUNl2HXU" frameborder="0" allowfullscreen></iframe>'),
		'desc' => 'This is a embed video example.',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'wmag') ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- Embed Code: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'embed' ); ?>"><?php _e('Embed Code (best fit 300px width)', 'wmag') ?></label>
			<textarea style="height:120px;width:100%;" id="<?php echo $this->get_field_id( 'embed' ); ?>" name="<?php echo $this->get_field_name( 'embed' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['embed'] ), ENT_QUOTES)); ?></textarea>
		</p>
		
		<!-- Description: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e('Short Description:', 'wmag') ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>" value="<?php echo stripslashes(htmlspecialchars(( $instance['desc'] ), ENT_QUOTES)); ?>" style="width:100%;" />
		</p>
		
	<?php
	}
}
?>