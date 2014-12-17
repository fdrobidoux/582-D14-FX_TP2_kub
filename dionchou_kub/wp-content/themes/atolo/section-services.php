<!--BEGIN SECTION SERVICES-->
<section id="services" class="mutualWrap sectP">
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
 <?php   $services_icon = ot_get_option( 'services_icon');   ?>
<img src="<?php echo $services_icon;?>" alt="" />
</div><!--end icon -->

 <?php   $services_title = ot_get_option( 'services_title');   ?>
 
 <h2 class="section-title"><?php echo $services_title;?></h2>
 
<?php   $services_quote = ot_get_option( 'services_quote');   ?>
<?php   $services_quote_author = ot_get_option( 'services_quote_author');   ?>
<h3 class="section-quote">"<?php echo $services_quote;?>"<span> - <?php echo $services_quote_author;?></span></h3>

<div class="row">
<?php   $services_content = ot_get_option( 'services_content');   ?>

<?php echo $services_content;?>

</div><!--end row -->

<!--row SERVICES -->
<div class="row diamondsContainer">

<?php   $service_items = ot_get_option( 'service_items');

		foreach($service_items as $service_item){
  ?>

<div class="span3 diamond-container">
<div class="diamond">
<div class="diamond-content">
<img class="service-img" src="<?php echo $service_item['service_image'];?>" alt="" />
</div>
</div><!--end diamond-->
<h4 class="item-name"><?php echo $service_item['title'];?></h4>
<?php echo $service_item['service_desc'];?>
</div>

<?php }//end foreach?>

</div><!--end row SERVICES -->

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-services-->

<!--END SECTION SERVICES-->