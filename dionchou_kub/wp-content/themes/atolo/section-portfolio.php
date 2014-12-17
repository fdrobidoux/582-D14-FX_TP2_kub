<!--BEGIN SECTION PORTFOLIO-->

<section id="portfolio" class="mutualWrap sectP">
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
 <?php   $portfolio_icon = ot_get_option( 'portfolio_icon');   ?>
<img src="<?php echo $portfolio_icon;?>" alt="" />
</div><!--end icon -->

<?php   $portfolio_title = ot_get_option( 'portfolio_title');   ?>
 
<h2 class="section-title"><?php echo $portfolio_title;?></h2>

<?php   $portfolio_quote = ot_get_option( 'portfolio_quote');   ?>
<?php   $portfolio_quote_author = ot_get_option( 'portfolio_quote_author');   ?>
<h3 class="section-quote">"<?php echo $portfolio_quote;?>"<span> - <?php echo $portfolio_quote_author;?></span></h3>

<?php $categories=get_categories('taxonomy=section'); ?>

<ul id="work-filter">
<li><a href="#" data-filter="*"><?php _e('All', 'atolo')?></a></li>

<?php foreach($categories as $category) { ?>

<li><a href="#" data-filter=".<?php echo strtolower($category->slug); ?>"><?php echo $category->name; ?></a></li>

<?php }//end foreach ?>

</ul>

<div id="workSample" class="row">

<?php 
	global $wp_query;
	wp_reset_query();

	$defaults = array('post_type' => 'portfolio', 'showposts' => 40);
	$wp_query = new WP_Query($defaults);
?>

<?php while (have_posts() ) : the_post(); 

$terms = get_the_terms( get_the_ID(), 'section' );

?>

<div class="span3 work-item <?php foreach ($terms as $term) { echo strtolower($term->slug).' '; } ?>">
<div class="diamond">
<div class="diamond-content">

<?php if ( has_post_thumbnail($post->ID ) ){ ?>

<?php the_post_thumbnail('portfolio-img', array('alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); 

	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

<?php } ?>

<div class="work-more"><div class="mask-elem">
<ul>
<li><a class="lightbox" href="<?php echo $image[0]; ?>" rel="prettyPhoto[gallery]" title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-big.png" alt="<?php the_title_attribute(); ?>" /></a></li>
<li><a href="<?php the_permalink() ?>" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-more.png" alt="more" /></a></li>
</ul>
</div>
</div><!--end work-more-->

</div>
</div><!--end diamond-->
<h4 class="item-name"><?php the_title(); ?></h4>
<ul class="work-categ">
<?php foreach ($terms as $term) { ?>  
<li><?php echo $term->name;?></li>
<?php }?>
</ul>
</div>

<?php endwhile;?>

</div><!--end workSample-->

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-portfolio-->

<!--END SECTION PORTFOLIO-->