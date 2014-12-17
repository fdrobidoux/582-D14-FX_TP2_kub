<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */

get_header();
?>


<section class="page-blog content-load">
<div class="container">
<div class="row">
<div class="span12">

<h2 class="section-title"><?php the_title(); ?></h2>


<div class="row post-single">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="span12 post-content" id="post-<?php the_ID(); ?>">


<?php the_content(); ?>

 <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>


</article><!--end post-single-->


</div><!--end row-->

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-blog-->


<?php get_footer(); ?>
