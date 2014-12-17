<script type="text/javascript">


/********************************************************************************************* 
Grid Slider Initialization
*********************************************************************************************/
$(document).ready(	
	function() {
		$(".grid-container").gridSlider({
			num_cols:5,
			num_rows:3,
			tile_width:36,
			tile_height:36,
			tile_margin:17,
			tile_border:1,			
			margin:10,			
			auto_scale:true,
			auto_center:true,
			auto_rotate:false,
			delay:5000,
			mouseover_pause:false,
			effect:"h_slide",	
			duration:500,
			easing:"",
			display_panel:false,
			panel_direction:"bottom",
			display_timer:true,
			display_dbuttons:true,
			mouseover_dbuttons:false,			
			display_numinfo:false,
			display_index:false,
			display_number:false,
			display_play:false,
			display_caption:false,
			mouseover_caption:true,
			caption_effect:"fade",			
			caption_position:"inside",
			caption_align:"bottom",					
			caption_width:0,
			caption_height:0,
			cont_nav:true,
			shuffle:false,
			category_index:0
		});
	}
);


/********************************************************************************************* 
Slide Panel
*********************************************************************************************/
$(document).ready(function(){
    //Hide (Collapse) the toggle containers on load
	$(".toggle-container").hide(); 

	$(".panel-button").click(function(){
		$(".toggle-container").slideToggle(500);
		$(this).toggleClass("up"); return false;
	});
	
	$(".panel-button").toggle(function(){
		$(".panel").animate({top:'',height: 'slideDown'},{queue:false,duration:500});
	},function(){
	$(".panel").animate({top:'-320',height: 'slideUp'},{queue:false,duration:500});
	});

});


/********************************************************************************************* 
Contact Form - contacts-template.php + Contact Form - Panel
*********************************************************************************************/
jQuery(document).ready(function(){
	jQuery("#contactForm").validate();
});

//Contact Form - Panel
jQuery(document).ready(function(){
	jQuery("#contactForm2").validate();
});


/********************************************************************************************* 
LightBox Initialization
*********************************************************************************************/
  jQuery(document).ready(function($){
    $('.lightbox').lightbox();
  });
  

/********************************************************************************************* 
Like Module Script
*********************************************************************************************/
jQuery(document).ready(function(){
    jQuery("#like div").live("click",function(){
        
       if(""+jQuery(this).attr("class")=="like-disable"||""+jQuery(this).attr("class")=="like-enable"){
      /** Like**/
        var image = ' ';
            
        var element = jQuery(this).parent("#like");
            
        jQuery(this).parent("#like").append(image);
        jQuery(this).parent("#like").children("#zoom_like").animate({
            opacity: 0,
            height: '+=25px',
            width: '+=25px'
        }, 500, function() {
            jQuery(element).children("#zoom_like").remove();
        });
                         
            
        var a = parseInt(""+jQuery(this).parent("#like").children('strong').html());
        var state = ""+jQuery(this).attr("class");
        var c = ""+jQuery(this).attr("id");

        if(state=='like-enable'){
            a++;
            jQuery(this).parent("#like").children(".like-enable").removeClass("like-enable").addClass("like-disable");
            jQuery.post("<?php bloginfo('stylesheet_directory'); ?>/includes/extensions/like/like.class.php",{vote:"plus",post:c},function(data){
        //alert(data);    
        });
        }
        if(state=='like-disable'){
            a--;
            jQuery(this).parent("#like").children(".like-disable").removeClass("like-disable").addClass("like-enable");
            jQuery.post("<?php bloginfo('stylesheet_directory'); ?>/includes/extensions/like/like.class.php",{vote:"minus",post:c},function(data){
        //alert(data);    
        }); 
        }
        if(a!=-1){
            jQuery(this).parent("#like").children("strong").html(a);
       
	   }else{
			jQuery(this).parent("#like").children("strong").html('0');
            
			}
			/* * end like **/
            }
      //"porto-disable", "porto-enable"
      if(""+jQuery(this).attr("class")=="porto-enable"||""+jQuery(this).attr("class")=="porto-disable"){
        
          /** portofolio* */
        var image = '<img src="<?php  bloginfo('stylesheet_directory'); ?>/images/assessment_voted.png" id="zoom_like_portfolio" alt="" />';
            
        var element = jQuery(this).parent("#like");
            
        jQuery(this).parent("#like").append(image);
        jQuery(this).parent("#like").children("#zoom_like_portfolio").animate({
            opacity: 0,
            height: '+=50%',
            width: '+=50%',
			left:'+=-28px',
			top:'+=-28px'
        }, 500, function() {
            jQuery(element).children("#zoom_like_portfolio").remove();
        });
           
        var a = parseInt(""+jQuery(this).parent("#like").children('strong').html());
        var state = ""+jQuery(this).attr("class");
        var c = ""+jQuery(this).attr("id");
            
        if(state=='porto-enable'){
            a++;
            jQuery(this).parent("#like").children(".porto-enable").removeClass("porto-enable").addClass("porto-disable");
            jQuery.post("<?php bloginfo('stylesheet_directory'); ?>/includes/extensions/like/like.class.php",{vote:"plus",post:c},function(data){
        //alert(data);    
        });
        }
        if(state=='porto-disable'){
            a--;
            jQuery(this).parent("#like").children(".porto-disable").removeClass("porto-disable").addClass("porto-enable");
            jQuery.post("<?php bloginfo('stylesheet_directory'); ?>/includes/extensions/like/like.class.php",{vote:"minus",post:c},function(data){
        //alert(data);    
        }); 
        }
        if(a!=(-1))
            jQuery(this).parent("#like").children("strong").html(""+a);
        else
            jQuery(this).parent("#like").children("strong").html('0');
         /** end portofolio* */
        }     
    });
    
});

</script>