<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?> 

<!--container -->
<div class="container">
	<?php get_sidebar(); ?>    
		<div class="content port">
        
        <div class="head">
           <a href="<?php page_nav('before'); ?>" title="Previous"><span class="head-left"></span></a>
           <h1><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></h1>
           <a href="<?php page_nav('after'); ?>" title="Next"><span class="head-right"></span></a>
        </div><!--end head-->
        
            <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>
            <hr />
               
			<ul class="galery">

			<?php $portfolio = new WP_Query(); $portfolio ->query('post_type=portfolio&posts_per_page=16&paged='.get_query_var('paged')); while ($portfolio ->have_posts()) : $portfolio ->the_post(); ?>
            
                  <li class="gallery-item post">
                      <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                            if (has_post_thumbnail()) {
                            echo '<a href="'.$thumbnail[0].'" title="'.get_the_title().'" class="lightbox" rel="portfolio"><span class="overlay"></span>
                                    <img src="'.get_bloginfo('template_url').'/includes/thumb.php?src='.$thumbnail[0].'&amp;w=140&amp;h=85&amp;zc=1&amp;q=95" alt="popup" />
                                    </a>'; 
                      } ?>               
                  </li>
            
            <?php endwhile; wp_reset_query(); ?>
			</ul><!--end galery-->
            
            <input type="hidden" value="<?php next_posts(); ?>" name="rt_link" class="rt_link" />
            
		</div><!--end content-->
</div><!--end container -->

<?php get_footer(); ?>