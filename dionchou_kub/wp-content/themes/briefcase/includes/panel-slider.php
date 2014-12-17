<div class="grid-container">
	<div class="g-slider">       
    	<div class="tiles">
        	<ul>
                    <?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 100 ) ); ?>
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                    <li>
						  <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                                if (has_post_thumbnail()) {
                                echo '<a href="'.get_permalink().'" title="'.get_the_title().'">
                                        <img src="'.get_bloginfo('template_url').'/includes/thumb.php?src='.$thumbnail[0].'&amp;w=36&amp;h=36&amp;zc=1&amp;q=95" alt="popup" />
                                        </a>'; 
                          } ?>
                    </li>  
                    <?php endwhile; wp_reset_query(); ?>
           	</ul>
        </div><!--end tiles-->
    </div><!--end g-slider-->
</div><!--end grid-container-->