<?php get_header(); ?> 

<!--container -->
<div class="container">
    
	<?php get_sidebar(); ?>
    
    <!--content-->
    <div class="content inside blog">
        <!--head-->
        <div class="head">
          <?php next_post_link('%link','<span class="head-left">next</span>'); ?>
           <h1 class="single-heading"><?php the_title(); ?></h1>
           <?php previous_post_link('%link','<span class="head-right">next</span>'); ?>
        </div><!--end head-->
        <!--end head-->
        <div class="breadcrumbs"><?php if (function_exists('rt_breadcrumbs')) rt_breadcrumbs(); ?></div>

        <hr />

 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      
      <div class="text">  
	     <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>   
			<!--assessment-->
			<div class="assessment">
				<div class="line-left"></div>
				<div><?php echo $like->gen_like(get_the_ID(),$post_type)?></div>
				<div class="line-right">
					
				</div>
			</div>
            
                <div class="arrow-date-link2"></div>
				<div class="date-link" id="date-link-single">
					<div class="date"><?php the_time('F jS Y') ?></div>
					<div class="link"><a href="<?php echo get_permalink() ?>">Direct link</a></div>
					<div class="icons">
						<a href="http://twitter.com/home?status=Reading on <?php bloginfo('name') ?> - <?php the_title(); ?> <?php the_permalink(); ?>" target="_blank" title="Share on Twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_twitter.png" alt="" /></a>
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank" title="Share on Facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_facebook.png" alt="" /></a>
					</div><!--end icons-->
				</div><!--end date-link-->
			<!--end assessment-->
	
            
            <?php comments_template('', true); ?>
            

        
	<?php endwhile; ?>
    <?php endif; ?>

        
    </div><!--end content-->
    
    <div style="clear:both;"></div>
</div><!--end container -->

<?php get_footer(); ?>