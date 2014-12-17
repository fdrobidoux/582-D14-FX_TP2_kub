<!--BEGIN SECTION CONTACT-->
<section id="contact" class="mutualWrap sectP">
<div id="world-map">
<div class="row">
<div class="span12">
<?php $contact_map = ot_get_option( 'contact_map');   ?>
<img src="<?php echo $contact_map;?>" alt="" />
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
<?php   $contact_icon = ot_get_option( 'contact_icon');   ?>
<img src="<?php echo $contact_icon;?>" alt="" />
</div><!--end icon -->

<?php   $contact_title = ot_get_option( 'contact_title');   ?>
<h2 class="section-title"><?php echo $contact_title;?></h2>

<div class="row">

<?php $contact_offices = ot_get_option( 'contact_offices');
	$k = 0;
		
		foreach($contact_offices as $contact_office) {
  ?>

<div class="span4">

    <h4 class="trigger"><a href="#office<?php echo $k;?>"><?php echo $contact_office['title'];?></a></h4>
     
    <div id="office<?php echo $k;?>" class="toggle_container">
   <?php echo $contact_office['contact_location'];?>
    </div>

</div>

<?php $k++;}//end foreach?>


</div><!--end row offices -->

<div class="row contact-form">

<form method="post" id="my-form" action='<?php echo get_stylesheet_directory_uri(); ?>/include/contact-process.php'>

     <div class="span7">
        <textarea name="message" id="message2" cols="100%" rows="11" tabindex="4"></textarea>
        
        <div id="output"></div>
        </div>
    
    <div class="span5">
<input type="text" name="author" id="author" class="comm-field"  value="<?php _e('Name', 'atolo')?>" size="22" tabindex="1" onFocus="if(this.value=='<?php _e('Name', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('Name', 'atolo')?>';" />
   		<input type="text" name="email" id="email" class="comm-field" value="<?php _e('Email', 'atolo')?>" size="22" tabindex="2" onFocus="if(this.value=='<?php _e('Email', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('Email', 'atolo')?>';"  />
   		<input type="text" name="title" id="title" class="comm-field" value="<?php _e('Subject', 'atolo')?>" size="22" tabindex="3" onFocus="if(this.value=='<?php _e('Subject', 'atolo')?>')this.value='';" onBlur="if(this.value=='')this.value='<?php _e('Subject', 'atolo')?>';" />
		<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Send Message', 'atolo')?>" />
     </div>

 	</form>


</div><!--end row contact-form -->
<?php   $contact_copy = ot_get_option( 'contact_copy');   ?>
<p class="copyright"><?php echo $contact_copy;?></p>

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-contact-->

<!--END SECTION CONTACT-->