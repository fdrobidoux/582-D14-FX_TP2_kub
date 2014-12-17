	<div class="toggle-container">
      <div id="toggle-wrapper">
		<div class="panel">
			<div class="panel-about">
				<h1>About me</h1>
				<hr />
                <?php $contact_drop = new WP_Query('pagename=contacts'); while ($contact_drop->have_posts()) : $contact_drop->the_post(); $do_not_duplicate = $post->ID; ?>
				   <p>
                     <?php echo rt_excerpt(40); ?>
				   </p>
				   <a href="http://rockablethemes.com/preview/briefcase/contacts/" class="more">more</a>
                 <?php endwhile;  wp_reset_query(); ?>
			</div>
            
            
			<div class="panel-works">
				<h1>Latest works <a href="http://rockablethemes.com/preview/briefcase/portfolio/">all works</a></h1>
				<hr />
				<?php include (TEMPLATEPATH . '/includes/panel-slider.php'); ?>
			</div>
            
            
			<div class="panel-contacts">
				<h1>Be in touch <a href="http://rockablethemes.com/preview/briefcase/contacts/">more contacts</a></h1>
				<hr />
                <?php include (TEMPLATEPATH . '/includes/panel-contact.php'); ?>
			</div>
		</div><!--end panel--> 
        <div style="clear:both;"></div>    
      </div><!--end toggle-wrapper-->  
	</div><!--end toggle-container-->
    
    
    
    <div class="panel-button">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/panel_open.png" alt="" />
    </div>    