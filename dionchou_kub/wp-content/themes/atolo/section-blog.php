<!--BEGIN SECTION BLOG-->
<section id="blog" class="mutualWrap sectP">
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
 <?php   $blog_icon = ot_get_option( 'blog_icon');   ?>
<img src="<?php echo $blog_icon;?>" alt="" />

</div><!--end icon -->

 <?php   $blog_title = ot_get_option( 'blog_title');   ?>
 
<h2 class="section-title"><?php echo $blog_title;?></h2>


<?php   $blog_quote = ot_get_option( 'blog_quote');   ?>
<?php   $blog_quote_author = ot_get_option( 'blog_quote_author');   ?>
<h3 class="section-quote">"<?php echo $blog_quote;?>"<span> - <?php echo $blog_quote_author;?></span></h3>


 <?php
			
				$count = 0;
				global $wp_query;
				wp_reset_query();

	$defaults_blog = array('post_type' => 'post', 'showposts' => 10);
	$wp_query = new WP_Query($defaults_blog);
		
			?>
             
			<?php while (have_posts() ) : the_post(); ?>
            
                               
                   <?php  	if(($count % 2) == 0) {   	?>	
				
                <div class="row">
<div class="span6 post no-b">
<?php if ( has_post_thumbnail($post->ID ) ){ ?>
<a href="<?php the_permalink() ?>">
<div class="post-img">
<?php the_post_thumbnail('blog-image', array('alt' => ''.get_the_title().'', 'title' => ''));?>
<div class="mask"><div class="mask-elem"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more-img.png" alt="more" />
</div>
</div><!--end mask-->
</div><!--end post-img-->
</a>
<?php }	?>
<div class="post-container">
<h4 class="post-title no-b"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
<div class="published no-b"><?php the_time('F jS, Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link(__('No comments', 'atolo'), __('1 Comment', 'atolo'), __('% Comments', 'atolo')); ?></div>
<?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore');?>
</div>
<div class="read-more"><a href="<?php the_permalink() ?>"><?php _e('Read More', 'atolo'); ?></a></div>

</div><!--end post-->
        			
				  					
				            
			    <?php }else{ ?>
                
<div class="span6 post no-b">
<?php if ( has_post_thumbnail($post->ID ) ){ ?>
<a href="<?php the_permalink() ?>">
<div class="post-img">
<?php the_post_thumbnail('blog-image', array('alt' => ''.get_the_title().'', 'title' => ''));?>
<div class="mask"><div class="mask-elem"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more-img.png" alt="more" />
</div>
</div><!--end mask-->
</div><!--end post-img-->
</a>
<?php }	?>
<div class="post-container">
<h4 class="post-title no-b"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
<div class="published no-b"><?php the_time('F jS, Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link(__('No comments', 'atolo'), __('1 Comment', 'atolo'), __('% Comments', 'atolo')); ?></div>
<?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore');?>
</div>
<div class="read-more"><a href="<?php the_permalink() ?>"><?php _e('Read More', 'atolo'); ?></a></div>

</div><!--end post-->
              
				
				<?php }; $count++; if(($count % 2) == 0) {?> </div><!--end row--> <?php }?>
		    <?php endwhile; if(($count % 2) == 1) {?> </div><!--end row--> <?php } ?>


</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-blog-->

<!--END SECTION BLOG-->
