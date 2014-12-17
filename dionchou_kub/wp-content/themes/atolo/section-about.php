<!--BEGIN SECTION ABOUT-->
<section id="about" class="mutualWrap sectP">
<div class="container">
<div class="row">
<div class="span12">

<div class="icon">
 <?php   $about_icon = ot_get_option( 'about_icon');   ?>
<img src="<?php echo $about_icon;?>" alt="" />
</div><!--end icon -->

 <?php   $about_title = ot_get_option( 'about_title');   ?>
 
<h2 class="section-title"><?php echo $about_title;?></h2>

<?php   $about_quote = ot_get_option( 'about_quote');   ?>
<?php   $about_quote_author = ot_get_option( 'about_quote_author');   ?>
<h3 class="section-quote">"<?php echo $about_quote;?>"<span> - <?php echo $about_quote_author;?></span></h3>

<?php   $about_text = ot_get_option( 'about_text');   ?>

<?php echo $about_text;?>


<!--row TEAM -->
<div class="row diamondsContainer">

 <?php
	    $team = ot_get_option( 'team', array() ); 
                                                
		foreach( $team as $team_member ) {      
		
		?>
        
<div class="span3 diamond-container">
<div class="diamond">
<div class="diamond-content">
<img src="<?php echo $team_member['team_upload']?>" alt="" />

<div class="mask-member">
<div class="mask-elem no-b">
<ul>
<li><a class="member-fb" href="<?php echo $team_member['team_fb']?>" target="_blank">Facebook</a></li>
<li><a class="member-twit" href="<?php echo $team_member['team_twitter']?>" target="_blank">Twitter</a></li>
</ul>
</div>
</div>

</div>
</div><!--end diamond-->
<h4 class="item-name"><?php echo $team_member['team_name']?></h4>
<h5 class="job-pos"><?php echo $team_member['team_job']?></h5>
<p class="member-text"><?php echo $team_member['team_text']?></p>
</div>
        
<?php  }//end foreach team-members  ?>	      

</div><!--end row TEAM -->


<div class="row">
<div class="span6 skills">
<?php   $skills_title = ot_get_option( 'skills_title');   ?>
<h4 class="section-sub-title"><?php echo $skills_title;?></h4>

<ul>

<?php
	    $skills = ot_get_option( 'skills', array() ); 
                                                
		foreach( $skills as $skill ) {      
		
		?>
<li>
<h5><?php echo $skill['title']?></h5>
<div class="progressBkg">
<div class="barBkg" style="width: <?php echo $skill['skill_progress']?>;"></div>
</div>
</li>
<?php  }//end foreach skills  ?>	   

</ul>
</div><!--end skills -->

<div class="span6 office">
<?php   $office_title = ot_get_option( 'office_title');   ?>
<h4 class="section-sub-title"><?php echo $office_title;?></h4>

<div class="flexslider-office">
  <ul class="slides">
  <?php
	    $office = ot_get_option( 'office', array() ); 
                                                
		foreach( $office as $office_item ) {      
		
		?>
     <li>  <img src="<?php echo $office_item['office_image']?>" alt="" />   </li>
     
     <?php  }//end foreach office  ?>	
  </ul>
  </div><!--end flexslider-->

</div><!--end office -->

</div><!--end row -->

</div><!--end span12 -->
</div><!--end row -->
</div><!--end container -->
</section><!--end-about-->

<!--END SECTION ABOUT-->