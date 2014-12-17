<?php /* Template Name: Blog Template */ ?>
<?php get_header(); ?>

 

<!--container -->
<div class="container">
    
	<?php get_sidebar(); ?>
    
    <!--content-->
    <div class="content inside blog" id="content">
    
        <div class="head">
           <a href="<?php page_nav('before'); ?>" title="Previous"><span class="head-left"></span></a>
           <h1><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></h1>
           <a href="<?php page_nav('after'); ?>" title="Next"><span class="head-right"></span></a>
        </div><!--end head-->
        
        <!--breadcrumbs-->
        <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>
        <!--end breadcrumbs-->
        <hr />
        
		   <?php
           $query_string = "&cat=".get_option('blog_exclude_cat')."&paged=$paged";
           query_posts($query_string); ?>
       
            <?php if (have_posts()) : $count = 0; while (have_posts()) : the_post(); $count++; ?>
              
              <!--section-blog-->
                  <div class="section-blog post">
                  <?php  //echo $like->gen_like(get_the_ID(),$post_type)?>
                      <!--text-->
                      <div class="text">
                          <h2><a href="<?php echo get_permalink() ?>" title=""><?php the_title(); ?></a></h2>
                          <p><?php echo rt_excerpt(45); ?></p>
                          
                          <?php the_post_thumbnail('blog-thumb'); ?>
      
                          <div class="img-desc">
                              <?php the_post_thumbnail_caption(); ?>
                          </div><!--end img-desc-->
                          
                          <div class="arrow-date-link"></div>
      
                          <div class="date-link">
                              <a href="<?php echo get_permalink() ?>" class="link"></a>
                              <div class="date"><?php the_time('F jS Y') ?></div>
                              <div class="comm"><?php comments_popup_link( 'nocomments', 'one comment', '% comments'); ?></div>
                              
                              <div class="icons">
                                  <a href="http://twitter.com/home?status=Reading on <?php bloginfo('name') ?> - <?php the_title(); ?> <?php the_permalink(); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_twitter.png" alt="" /></a>
                                  <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_facebook.png" alt="" /></a>
                              </div>
                          </div><!--end date-link-->
                          
                          <a href="<?php echo get_permalink() ?>" class="button">More</a>
                      </div><!--end text-->
                      <div class="arrow-section"></div>
              </div><!--end section-blog-->
              
      
              
          <?php endwhile; else: ?>
          <?php endif; ?>
      
          <input type="hidden" value="<?php next_posts(); ?>" name="rt_link" class="rt_link" />
        
    </div><!--end content-->
    
    <div style="clear:both;"></div>
</div><!--end container -->

<?php get_footer(); ?>