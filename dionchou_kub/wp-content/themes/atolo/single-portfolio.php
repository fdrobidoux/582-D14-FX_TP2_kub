<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */

get_header();
?>

<div class="container project content-load">
<div class="row">

<div class="span12">

<div class="icon">
<?php   $portfolio_icon = ot_get_option( 'portfolio_icon');   ?>
<img src="<?php echo $portfolio_icon;?>" alt="" />
</div><!--end icon -->

 <?php   $portfolio_title = ot_get_option( 'portfolio_title');   ?>
 
<h2 class="section-title"><?php echo $portfolio_title;?></h2>

<h1 class="proj-title"><?php the_title(); ?></h1>

<div class="proj-info clearfix">
<ul class="details">

<?php $portfolio_year = get_post_meta($post->ID, "portfolio_year", true); 
	  $portfolio_client = get_post_meta($post->ID, "portfolio_client", true);
	$portfolio_role = get_post_meta($post->ID, "portfolio_role", true);
	$portfolio_url = get_post_meta($post->ID, "portfolio_url", true);
?>

<li><strong><?php _e('Year', 'atolo')?></strong>: <?php echo $portfolio_year;?></li>
<li><strong><?php _e('Client', 'atolo')?></strong>: <?php echo $portfolio_client;?></li>
<li><strong><?php _e('Role', 'atolo')?></strong>: <?php echo $portfolio_role;?></li>
</ul>
<div class="go-visit"><a href="<?php echo $portfolio_url;?>"><?php _e('Visit Website', 'atolo')?></a></div>
</div>

</div>

<div class="span7 portfolioLeft">

<?php  $portfolio_radio = get_post_meta($post->ID, "portfolio_radio", true); 

	switch ($portfolio_radio) {
    case 'slider':
     
	 ?>
         <div class="flexslider">
  <ul class="slides">
  
  <?php  $portfolio_slides = get_post_meta($post->ID, "portfolio_slides", true); 

foreach( $portfolio_slides as $portfolio_slide ) {  

	?>
		 <li>  <img src="<?php echo $portfolio_slide['portfolio_slide_upload']; ?>" alt="" />   </li>
<?php 
} //end foreach
?>         

  </ul>
  </div><!--end flexslider-->
        
		<?php
        break;
    case 'image':
	?>
     <div class="single-img">
    <?php  $portfolio_image = get_post_meta($post->ID, "portfolio_image", true); ?>
      
 <img src="<?php echo $portfolio_image; ?>" alt="" />
 </div>
        
    <?php
        break;
    case 'video':
	?>
    
     <div class="embed single-img">
      <?php  $portfolio_video = get_post_meta($post->ID, "portfolio_video", true);
	  
	  		echo $portfolio_video;
	  ?>
      
</div>
    
     <?php 
        break;
}
?>
  
  
</div><!--end portfolioLeft-->
<div class="span5 portfolioRight">
 <?php if (have_posts()) : while (have_posts()) : the_post(); 	 ?> 	
 <?php the_content(); ?>
 
  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
 
</div><!--end portfolioRight-->



</div><!--end row-->

</div><!--end container-->

<?php get_footer(); ?>
