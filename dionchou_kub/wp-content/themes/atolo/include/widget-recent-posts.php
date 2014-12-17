<?php
/**
 * Plugin Name: Recent Posts with Image
 * Plugin URI: http://www.matchthemes.com
 * Description:Display recent post with image thumbnail.
 * Version: 1.0
 * Author: MatchThemes
 * Author URI: http://www.matchthemes.com
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'ft_recent_posts' );

function ft_recent_posts() {
	register_widget( 'ft_recent_post' );
}

/**
 Widget class.
 */
class ft_recent_post extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function ft_recent_post() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ft_recent_post', 'description' => __('Display recent posts.', 'atolo') );
		
		/* Widget control settings */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'tz_ad300_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'ft_recent_post', __('Recent Posts MT', 'atolo'), $widget_ops, $control_ops );
	}

	/**
	 *display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );
	    $title = $instance['title'];
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
		?>
        
       
       <?php
	   $nr_articles = $instance['nr_articles'];  ?>
	   	   
	 <div class="sidebar-articles">
                  
                    <ul>
            			<?php 
						$recPosts = new WP_Query();
						$recPosts->query('caller_get_posts=1&showposts='.$nr_articles.'');
						while ($recPosts->have_posts()) : $recPosts->the_post(); ?>
                        
                        <li>
   						<h5><a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a></h5>
					   <p><?php the_time('F j, Y') ?></p>
					  </li>
                        
                        <?php endwhile; ?>
                        
                        <?php wp_reset_query(); ?>

                    </ul>
                  
                </div><!--sidebar-articles-->
       
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
		'title' => '',
		'nr_articles' => '5'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

     <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Recent Posts Title:', 'atolo'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
		
  <p><label for="<?php echo $this->get_field_id( 'nr_articles' ); ?>"><?php _e('Number of articles', 'atolo'); ?></label>
 <input type="text" id="<?php echo $this->get_field_id('nr_articles'); ?>" name="<?php echo $this->get_field_name('nr_articles'); ?>" value="<?php echo $instance['nr_articles']; ?>" style="width:100%;" /></p>
 
 	<?php
	}
}

?>