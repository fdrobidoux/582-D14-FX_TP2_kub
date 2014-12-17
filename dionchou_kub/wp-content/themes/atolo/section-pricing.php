<!--PRICING TABLE-->
<section id="pricing" class="mutualWrap shadow">
<div class="container">
<div class="row">
<div class="span12 sub-sec-title">
<?php $pricing_title = ot_get_option( 'pricing_title'); ?>
<h1><?php echo $pricing_title;?></h1>
</div><!--end span12 -->

<div class="span12">
<div class="row main-table">

<?php $pricing_table = ot_get_option( 'pricing_table');

		foreach($pricing_table as $pricing_column){
 ?>

<div class="span4 table-column">
<header>
<h3 class="column-title"><?php echo $pricing_column['title'];?></h3>
<h4 class="column-price"><?php echo $pricing_column['pricing_price'];?></h4>
</header>
<?php echo $pricing_column['pricing_features'];?>
<h5 class="quote"><a href="<?php echo $pricing_column['pricing_button_url'];?>"><?php echo $pricing_column['pricing_button'];?></a></h5>
</div><!--end table-col -->

<?php }//end foreach?>

</div><!--end main-table -->
</div><!--end span12 -->

</div><!--end row -->
</div><!--end container -->
</section><!--end-pricing-table-->

<!--END PRICING TABLE-->