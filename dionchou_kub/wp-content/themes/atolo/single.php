<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */

get_header();
?>


<!--BEGIN SECTION SINGLE-->
<section class="page-blog content-load">
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
<?php   $blog_icon = ot_get_option( 'blog_icon');   ?>
<img src="<?php echo $blog_icon;?>" alt="" />
</div><!--end icon -->

 <?php   $blog_title = ot_get_option( 'blog_title');   ?>
 
<h2 class="section-title"><?php echo $blog_title;?></h2>


<div class="row post-single">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="span8 post-content" id="post-<?php the_ID(); ?>">
<?php if ( has_post_thumbnail($post->ID ) ){ ?>
<div class="single-img">
<?php the_post_thumbnail('blog-image', array('alt' => ''.get_the_title().'', 'title' => ''));?>
</div>
<?php }	?>
<h4 class="post-title"><?php the_title(); ?></h4>
<div class="published no-b"><?php the_time('F jS, Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link(__('No comments', 'atolo'), __('1 Comment', 'atolo'), __('% Comments', 'atolo')); ?></div>


<?php the_content(); ?>

 <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>


   	<?php comments_template(); ?>


</article><!--end post-single-->


<?php get_sidebar(); ?>


</div><!--end row-->

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-blog-->

<!--END SECTION SINGLE-->

<?php get_footer(); ?>
