<!--CLIENTS-->
<section id="clients" class="mutualWrap shadow">
<div class="container">
<div class="row">
<div class="span12 sub-sec-title">
<?php $clients_title = ot_get_option( 'clients_title'); ?>
<h1><?php echo $clients_title;?></h1>
</div><!--end span12 -->


<div class="span12">

<div class="flexslider-clients">
  <ul class="slides">
  
  <?php
	    $clients_items = ot_get_option( 'clients_items', array() ); 
                                                
		foreach( $clients_items as $client_item ) {      
		
		?>
        
     <li><a href="<?php echo $client_item['clients_url']?>">  <img src="<?php echo $client_item['clients_image']?>" alt="" /></a>   </li>
    

<?php }//end foreach?>
  </ul>
  </div><!--end flexslider-->

</div><!--end span12 -->

</div><!--end row -->
</div><!--end container -->
</section><!--end-join-team-->

<!--END CLIENTS-->