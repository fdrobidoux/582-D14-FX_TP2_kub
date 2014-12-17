<?php get_header(); ?> 

<!--container -->
<div class="container">

    <?php get_sidebar(); ?>
        
    <!--content-->
    <div class="content content-images index-port">
			<?php $portfolio = new WP_Query(); $portfolio->query('post_type=portfolio&posts_per_page=8&paged='.get_query_var('paged')); ?>
			<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
            
                 <div class="post">
             
                 <?php  //echo $like->gen_like(get_the_ID(),$post_type)?>
                      <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                            if (has_post_thumbnail()) {
                            echo '<a href="'.get_permalink().'" title="'.get_the_title().'" rel="portfolio">
                                    <img src="'.get_bloginfo('template_url').'/includes/thumb.php?src='.$thumbnail[0].'&amp;w=228&amp;h=138&amp;zc=1&amp;q=95" alt="popup" />';
									
							echo '<span>' .get_the_title(). '</span>';
									
                           echo	' </a>'; 
                      } ?>               
                  </div><!--end post-->
                  
            <?php endwhile; //wp_reset_query(); ?>
			
            <input type="hidden" value="<?php next_posts(); ?>" name="rt_link" class="rt_link" />
			                   
    </div><!--end content-->
    
</div><!--end container -->

<?php get_footer(); ?>