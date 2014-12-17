<?php get_header(); ?> 

<!--container -->
<div class="container">
    
	<?php get_sidebar(); ?>
    
    <!--content-->
    <div class="content inside search">
        <h1><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>

        <hr />
        
		<?php if ( have_posts() )  : $count = 0; while (have_posts()) : the_post(); $count++; ?>
                        
                    <div class="section-blog post">
                      <div class="text search">	
                        <h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
                        <p><?php echo rt_excerpt(45); ?></p>
                        
                        <small class="post-date first"><?php echo get_the_date() ?></small>
                      </div><!--end text-->
                      <div class="arrow-section"></div>
                    </div><!--end section-blog-->
                        
                        
        <?php endwhile; else : ?>
                        <div class="post no-results not-found">
                            <h2><?php _e( 'Nothing Found' ); ?></h2>
                            <div class="entry-content">
                                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.'); ?></p>
                                <hr />
                                <?php include (TEMPLATEPATH . '/includes/search-form.php'); ?>
                            </div><!--end entry-content -->
                        </div><!--end post -->
        <?php endif; ?>
        
        <input type="hidden" value="<?php next_posts(); ?>" name="rt_link" class="rt_link" />
        
    </div><!--end content-->
    
    <div style="clear:both;"></div>
</div><!--end container -->

<?php get_footer(); ?>