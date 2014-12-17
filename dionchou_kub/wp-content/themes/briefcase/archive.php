<?php get_header(); ?> 

<!--container -->
<div class="container">
    
	<?php get_sidebar(); ?>
    
    <!--content-->
    <div class="content inside blog">
        <?php the_post(); ?> 

        <div class="single-heading">
		  <?php if ( is_day() ) : ?>
                          <h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_time(get_option('date_format')) ) ?></h1>
          <?php elseif ( is_month() ) : ?>
                          <h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_time('F Y') ) ?></h1>
          <?php elseif ( is_year() ) : ?>
                          <h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_time('Y') ) ?></h1>
          <?php elseif ( is_category()) : ?>
                          <h1 class="page-title">Category: <span><?php single_cat_title(); ?></span></h1>
                          
          <?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
                          <h1 class="page-title"><?php _e( 'Blog Archives' ) ?></h1>
                          

                          
          <?php endif; ?>
		</div>
        
        <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>

        <hr />
 
<?php rewind_posts(); ?>
        
 
<?php while ( have_posts() ) : the_post(); ?>
 
                <div class="section-blog post">
                <div class="text">	
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
                    <div class="entry-meta">
                        <span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s'), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                        <?php edit_post_link( __( 'Edit'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                    </div><!-- .entry-meta -->
 
                    <div class="entry-summary">
                        <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>' )  ); ?>
                    </div><!-- .entry-summary -->
 
                    <div class="entry-utility">
                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in '); ?></span><?php echo get_the_category_list(', '); ?></span>
                        <span class="meta-sep"> | </span>
                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ') . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments') ) ?></span>
                        <?php edit_post_link( __( 'Edit'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
                    </div><!-- #entry-utility -->
                </div><!--end text-->
                <div class="arrow-section"></div>   
                </div><!--end section-blog -->
 
<?php endwhile; ?>        
    
<input type="hidden" value="<?php next_posts(); ?>" name="rt_link" class="rt_link" />

        
        <!--<a href="" class="more">More</a>-->
    </div><!--end content-->
    
    <div style="clear:both;"></div>
</div><!--end container -->

<?php get_footer(); ?>