<?php get_header(); ?> 

<!--container -->
<div class="container">
    
	<?php get_sidebar(); ?>
    
    <!--content-->
    <div class="content inside blog">
        <!--head-->
        <h1 class="single-heading"><?php the_title(); ?></h1>
        <!--end head-->
        <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>

        <hr />

 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      
      <div class="text">  
	     <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>   
                
                <div class="arrow-date-link2"></div>
				<div class="date-link">
					<div class="date"><?php the_time('F jS Y') ?></div>
					<div class="link"><a href="<?php echo get_permalink() ?>">Direct link</a></div>
					<div class="icons">
						<a href="http://twitter.com/home?status=Reading on <?php bloginfo('name') ?> - <?php the_title(); ?> <?php the_permalink(); ?>" target="_blank" title="Share on Twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_twitter.png" alt="" /></a>
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank" title="Share on Facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_facebook.png" alt="" /></a>
					</div>
				</div>
	
            
            <?php comments_template('', true); ?>
            

        
	<?php endwhile; ?>
    <?php endif; ?>

        
        <!--<a href="" class="more">More</a>-->
    </div><!--end content-->
    
    <div style="clear:both;"></div>
</div><!--end container -->

<?php get_footer(); ?>