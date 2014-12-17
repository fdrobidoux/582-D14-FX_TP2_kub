<!--SOCIAL MEDIA-->
<section id="social-media" class="mutualWrap shadow">
<div class="container">
<div class="row">
<div class="span12 sub-sec-title">
<?php $social_title = ot_get_option( 'social_title'); ?>
<h1><?php echo $social_title;?></h1>
</div><!--end span12 -->
<div class="span12">

 <ul class="social">
 
  <?php $fb_hide = ot_get_option( 'fb_hide');
	  		$fb_url = ot_get_option( 'fb_url');
			
	  if ($fb_hide == 0) :
	   ?>
 <li><a class="facebook" href="<?php echo $fb_url;?>" target="_blank">Facebook</a></li>
  <?php endif;?>
   <?php $tw_hide = ot_get_option( 'tw_hide');
	  		$tw_url = ot_get_option( 'tw_url');
			
	  if ($tw_hide == 0) :
	   ?>
 <li><a class="twitter" href="<?php echo $tw_url;?>" target="_blank">Twitter</a></li>
   <?php endif;?>
 <?php $gp_hide = ot_get_option( 'gp_hide');
	  		$gp_url = ot_get_option( 'gp_url');
			
	  if ($gp_hide == 0) :
	   ?>
 <li><a class="gplus" href="<?php echo $gp_url;?>" target="_blank">GPlus</a></li>
  <?php endif;?>
 <?php $db_hide = ot_get_option( 'db_hide');
	  		$db_url = ot_get_option( 'db_url');
			
	  if ($db_hide == 0) :
	   ?>
 <li><a class="dribbble" href="<?php echo $db_url;?>" target="_blank">Dribbble</a></li>
   <?php endif;?>
  <?php $li_hide = ot_get_option( 'li_hide');
	  		$li_url = ot_get_option( 'li_url');
			
	  if ($li_hide == 0) :
	   ?>
 <li><a class="linkedin" href="<?php echo $li_url;?>" target="_blank">Linkedin</a></li>
  <?php endif;?>
  <?php $st_hide = ot_get_option( 'st_hide');
	  		$st_url = ot_get_option( 'st_url');
			
	  if ($st_hide == 0) :
	   ?>
 <li><a class="stumble" href="<?php echo $st_url;?>" target="_blank">Stumbleupon</a></li>
 <?php endif;?>
 </ul>
 
</div><!--end span12 -->

</div><!--end row -->
</div><!--end container -->
</section><!--end-join-team-->

<!--END SOCIAL MEDIA-->