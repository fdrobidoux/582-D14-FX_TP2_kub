<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */
get_header();
?>

 <!--BEGIN HOME SLIDER-->
 <?php 
  $slides_hide = ot_get_option( 'slides_hide', '0'); 
	 
	 	if ($slides_hide[0] == 0) {
 
 ?>
 
<section id="home" class="mutualWrap sectP">
<div class="flexslider-home">
  <ul class="slides">
     <?php
	    $slides = ot_get_option( 'slides', array() ); 
                                                
		foreach( $slides as $slide ) {      
		
		?>
         <li>                             
          <img src="<?php echo $slide['slide_upload']?>" alt="" />
          <div class="flex-caption">
   		  <div class="caption-block">
		  <h1><?php echo $slide['title']?></h1>
	      <h4><?php echo $slide['slide_second_text']?></h4>
          </div>
	     </div>
		</li>
										
		<?php  }//end foreach  ?>	

  </ul>

  </div><!--end flexslider-->
  
</section><!--end-home-->

<?php } ?>

<!--END HOME SLIDER-->

<!-- BEGIN ABOUT -->

<?php get_template_part('section', 'about'); ?>

<!-- END ABOUT -->

<!-- BEGIN JOIN TEAM -->

<?php get_template_part('section', 'join_team'); ?>

<!-- END JOIN TEAM -->

<!-- BEGIN PORTFOLIO -->

<?php get_template_part('section', 'portfolio'); ?>

<!-- END PORTFOLIO -->

<!-- BEGIN CLIENTS -->

<?php get_template_part('section', 'clients'); ?>

<!-- END CLIENTS -->

<!-- BEGIN SERVICES -->

<?php get_template_part('section', 'services'); ?>

<!-- END SERVICES -->

<!-- BEGIN PRICING TABLE -->

<?php get_template_part('section', 'pricing'); ?>

<!-- END PRICING TABLE -->

<!-- BEGIN BLOG -->

<?php get_template_part('section', 'blog'); ?>

<!-- END BLOG -->

<!-- BEGIN SOCIAL MEDIA -->

<?php get_template_part('section', 'social'); ?>

<!-- END SOCIAL MEDIA -->

<!-- BEGIN CONTACT -->

<?php get_template_part('section', 'contact'); ?>

<!-- END CONTACT -->


<?php get_footer();?>