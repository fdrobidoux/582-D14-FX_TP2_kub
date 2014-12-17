<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */
?>
		<aside class="span4 sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
			
			<?php endif; ?>
 
  	</ul>    
    

</aside><!-- end sidebar -->