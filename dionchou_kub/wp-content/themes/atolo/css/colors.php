<?php 
header("Content-type: text/css");

if(file_exists('../../../../wp-load.php')) :
	include '../../../../wp-load.php';
else:
	include '../../../../../wp-load.php';
endif; 

ob_flush(); 
?>

/*==========================================================================================
	
This file contains styles related to the colour scheme of the theme

==========================================================================================*/

<?php $link_primary = ot_get_option( 'link_primary'); ?>
<?php $link_hover_primary = ot_get_option( 'link_hover_primary'); ?>
<?php $body_color = ot_get_option( 'body_color'); ?>
<?php $body_bkg = ot_get_option( 'body_bkg'); ?>
<?php $body_size = ot_get_option( 'body_size'); ?>
<?php $headers_family = ot_get_option( 'headers_family'); ?>
<?php $header_bkg = ot_get_option( 'header_bkg'); ?>
<?php $menu_link_1 = ot_get_option( 'menu_link_1'); ?>
<?php $menu_link_2 = ot_get_option( 'menu_link_2'); ?>
<?php $slides_border_color = ot_get_option( 'slides_border_color'); ?>
<?php $slide_text_color = ot_get_option( 'slide_text_color'); ?>
<?php $slide_text_bkg = ot_get_option( 'slide_text_bkg'); ?>
<?php $about_bkg_color = ot_get_option( 'about_bkg_color'); ?>
<?php $about_bkg_image = ot_get_option( 'about_bkg_image'); ?>
<?php $quote_text_color = ot_get_option( 'quote_text_color'); ?>
<?php $quote_text_color_author = ot_get_option( 'quote_text_color_author'); ?>
<?php $about_title_color = ot_get_option( 'about_title_color'); ?>
<?php $team_mask_color = ot_get_option( 'team_mask_color'); ?>
<?php $skills_bkg = ot_get_option( 'skills_bkg'); ?>
<?php $skills_progress = ot_get_option( 'skills_progress'); ?>
<?php $join_title_color = ot_get_option( 'join_title_color'); ?>
<?php $join_text_color = ot_get_option( 'join_text_color'); ?>
<?php $join_bkg_color = ot_get_option( 'join_bkg_color'); ?>
<?php $join_bkg_image = ot_get_option( 'join_bkg_image'); ?>
<?php $join_btn_text = ot_get_option( 'join_btn_text'); ?>
<?php $join_btn_text_color_1 = ot_get_option( 'join_btn_text_color_1'); ?>
<?php $join_btn_text_color_2 = ot_get_option( 'join_btn_text_color_2'); ?>
<?php $join_btn_bkg_color_1 = ot_get_option( 'join_btn_bkg_color_1'); ?>
<?php $join_btn_bkg_color_2 = ot_get_option( 'join_btn_bkg_color_2'); ?>
<?php $portfolio_bkg_color = ot_get_option( 'portfolio_bkg_color'); ?>
<?php $portfolio_bkg_image = ot_get_option( 'portfolio_bkg_image'); ?>
<?php $portfolio_title_color = ot_get_option( 'portfolio_title_color'); ?>
<?php $portfolio_categ_bkg_color_1 = ot_get_option( 'portfolio_categ_bkg_color_1'); ?>
<?php $portfolio_categ_bkg_color_2 = ot_get_option( 'portfolio_categ_bkg_color_2'); ?>
<?php $portfolio_categ_text_color_1 = ot_get_option( 'portfolio_categ_text_color_1'); ?>
<?php $portfolio_categ_text_color_2 = ot_get_option( 'portfolio_categ_text_color_2'); ?>
<?php $clients_title_color = ot_get_option( 'clients_title_color'); ?>
<?php $clients_bkg_color = ot_get_option( 'clients_bkg_color'); ?>
<?php $clients_bkg_image = ot_get_option( 'clients_bkg_image'); ?>
<?php $services_bkg_color = ot_get_option( 'services_bkg_color'); ?>
<?php $services_bkg_image = ot_get_option( 'services_bkg_image'); ?>
<?php $services_title_color = ot_get_option( 'services_title_color'); ?>
<?php $services_item_bkg = ot_get_option( 'services_item_bkg'); ?>
<?php $pricing_title_color = ot_get_option( 'pricing_title_color'); ?>
<?php $pricing_bkg_color = ot_get_option( 'pricing_bkg_color'); ?>
<?php $pricing_bkg_image = ot_get_option( 'pricing_bkg_image'); ?>
<?php $pricing_col_title_color = ot_get_option( 'pricing_col_title_color'); ?>
<?php $pricing_col_title_bkg_color = ot_get_option( 'pricing_col_title_bkg_color'); ?>
<?php $pricing_price_color = ot_get_option( 'pricing_price_color'); ?>
<?php $pricing_price_bkg_color = ot_get_option( 'pricing_price_bkg_color'); ?>
<?php $pricing_features_color = ot_get_option( 'pricing_features_color'); ?>
<?php $pricing_features_bkg_color = ot_get_option( 'pricing_features_bkg_color'); ?>
<?php $pricing_features_border_color = ot_get_option( 'pricing_features_border_color'); ?>
<?php $pricing_button_color_1 = ot_get_option( 'pricing_button_color_1'); ?>
<?php $pricing_button_bkg_color_1 = ot_get_option( 'pricing_button_bkg_color_1'); ?>
<?php $pricing_button_color_2 = ot_get_option( 'pricing_button_color_2'); ?>
<?php $pricing_button_bkg_color_2 = ot_get_option( 'pricing_button_bkg_color_2'); ?>
<?php $blog_title_color = ot_get_option( 'blog_title_color'); ?>
<?php $blog_bkg_color = ot_get_option( 'blog_bkg_color'); ?>
<?php $blog_bkg_image = ot_get_option( 'blog_bkg_image'); ?>
<?php $social_title_color = ot_get_option( 'social_title_color'); ?>
<?php $social_bkg_color = ot_get_option( 'social_bkg_color'); ?>
<?php $social_bkg_image = ot_get_option( 'social_bkg_image'); ?>
<?php $contact_title_color = ot_get_option( 'contact_title_color'); ?>
<?php $contact_bkg_color = ot_get_option( 'contact_bkg_color'); ?>
<?php $contact_bkg_image = ot_get_option( 'contact_bkg_image'); ?>


a{color:<?php echo $link_primary;?>;text-decoration:none;
}
a:hover{text-decoration:underline;
color:<?php echo $link_hover_primary;?>;
}

body{color:<?php echo $body_color;?>;
background:<?php echo $body_bkg;?>;
font-size:<?php echo $body_size;?>;
}

h1,h2,h3, h4,h5,h6, .menu{font-family:'<?php echo $headers_family;?>', Arial, sans-serif;}

.dropcap{color:<?php echo $link_primary;?>;}

.top-header{background:<?php echo $header_bkg;?>;
-webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2);
-moz-box-shadow:    0px 1px 3px rgba(0, 0, 0, 0.2);
box-shadow:         0px 1px 3px rgba(0, 0, 0, 0.2);
}

.menu li a{color:<?php echo $menu_link_1;?>;
text-decoration:none;
}
.menu li a:hover, .menu li a:focus, .menu li a.active{color:<?php echo $menu_link_2;?>;
text-decoration:none;
background:none;}

.flex-caption{color: <?php echo $slide_text_color;?>;}
.flex-caption h1, .flex-caption h4{background:<?php echo $slide_text_bkg;?>;}

.flex-viewport, .single-img{
border-bottom:10px solid <?php echo $slides_border_color;?>;
border-top:10px solid <?php echo $slides_border_color;?>;
}
#clients .flex-viewport{border:none;}

.section-title, .section-sub-title, .item-name{color:<?php echo $about_title_color;?>;
font-family:'<?php echo $headers_family;?>', Arial, sans-serif;}

.section-quote{color:<?php echo $quote_text_color;?>;border-left: 1px solid <?php echo $quote_text_color;?>;}
.section-quote span{color:<?php echo $quote_text_color_author;?>;}

/*** ABOUT ***/

#about{background:<?php echo $about_bkg_color;?> url('<?php echo $about_bkg_image;?>') repeat 0 0;}

.diamond{background:#c0c0c0;}

.mask-member{background:<?php echo $team_mask_color;?>;}

.job-pos{border-bottom:1px solid #d5d5d5;}

.progressBkg{background:<?php echo $skills_bkg;?>;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
}
.barBkg{background:<?php echo $skills_progress;?>;}

/*** END ABOUT ***/

/*** JOIN TEAM ***/

#join-team h1{color:<?php echo $join_title_color;?>;}
#join-team{background:<?php echo $join_bkg_color;?> url('<?php echo $join_bkg_image;?>') repeat 0 0;}
#join-team p{color:<?php echo $join_text_color;?>;}
.join-button a{background:<?php echo $join_btn_bkg_color_1;?>;
color:<?php echo $join_btn_text_color_1;?>;
border:1px solid <?php echo $join_btn_bkg_color_1;?>;
}
.join-button a:hover{background:<?php echo $join_btn_bkg_color_2;?>;
color:<?php echo $join_btn_text_color_2;?>;
border:1px solid <?php echo $join_btn_bkg_color_2;?>;
text-decoration:none;}

/*** END JOIN TEAM ***/

/*** PORTFOLIO ***/

#portfolio{background:<?php echo $portfolio_bkg_color;?> url('<?php echo $portfolio_bkg_image;?>') repeat 0 0;}
#portfolio .section-title, #portfolio .section-sub-title, #portfolio .item-name{color:<?php echo $portfolio_title_color;?>;}

#work-filter li a{background:<?php echo $portfolio_categ_bkg_color_1;?>;
color:<?php echo $portfolio_categ_text_color_1;?>;
border:none;
-webkit-transition: all 0.3s ease-out 0s;
-moz-transition: all 0.3s ease-out 0s;
-o-transition: all 0.3s ease-out 0s;
-ms-transition: all 0.3s ease-out 0s;
transition: all 0.3s ease-out 0s;
}
#work-filter li a:hover{background:<?php echo $portfolio_categ_bkg_color_2;?>;
color:<?php echo $portfolio_categ_text_color_2;?>;
text-decoration:none;}

.work-categ li, .work-more, .post-img .mask{background:<?php echo $portfolio_categ_bkg_color_2;?>;
color:<?php echo $portfolio_categ_text_color_2;?>;
}

.work-item .mask{background:rgba(33, 226, 154, 0.9);}

.project h1{color:<?php echo $portfolio_title_color;?>;}
.project h4{color:<?php echo $link_primary;?>;}

.go-visit a{background:<?php echo $portfolio_categ_bkg_color_1;?>;
color:<?php echo $portfolio_categ_text_color_1;?>;
padding:14px 21px;
border:none;
display:block;
-webkit-transition: all 0.3s ease-out 0s;
-moz-transition: all 0.3s ease-out 0s;
-o-transition: all 0.3s ease-out 0s;
-ms-transition: all 0.3s ease-out 0s;
transition: all 0.3s ease-out 0s;
}
.go-visit a:hover{background:<?php echo $portfolio_categ_bkg_color_2;?>;
color:<?php echo $portfolio_categ_text_color_2;?>;
text-decoration:none;}

/*** END PORTFOLIO ***/

/*** CLIENTS ***/

#clients h1{color:<?php echo $clients_title_color;?>;}
#clients{background:<?php echo $clients_bkg_color;?> url('<?php echo $clients_bkg_image;?>') repeat 0 0;}

/*** END CLIENTS ***/

/*** SERVICES ***/

#services{background:<?php echo $services_bkg_color;?> url('<?php echo $services_bkg_image;?>') repeat 0 0;}
#services .section-title, #services .section-sub-title, #services .item-name{color:<?php echo $services_title_color;?>;}
#services .diamond{background:<?php echo $services_item_bkg;?>;border:none;}

/*** END SERVICES ***/

/*** PRICING TABLE ***/

#pricing h1{color:<?php echo $pricing_title_color;?>;}
#pricing{background:<?php echo $pricing_bkg_color;?> url('<?php echo $pricing_bkg_image;?>') repeat 0 0;}

.table-column{background:<?php echo $pricing_features_bkg_color;?>;}
.column-title{color:<?php echo $pricing_col_title_color;?>; background:<?php echo $pricing_col_title_bkg_color;?>;}
.column-price{color:<?php echo $pricing_price_color;?>;background:<?php echo $pricing_price_bkg_color;?>;}

.column-features li{color:<?php echo $pricing_features_color;?>;border-bottom:1px solid <?php echo $pricing_features_border_color;?>;}
.column-features li:last-child{border:none;}

.quote a{background:<?php echo $pricing_button_bkg_color_1;?>;
color:<?php echo $pricing_button_color_1;?>;
-webkit-transition: all 0.3s ease-out 0s;
-moz-transition: all 0.3s ease-out 0s;
-o-transition: all 0.3s ease-out 0s;
-ms-transition: all 0.3s ease-out 0s;
transition: all 0.3s ease-out 0s;
}
.quote a:hover{background:<?php echo $pricing_button_bkg_color_2;?>;
color:<?php echo $pricing_button_color_2;?>;
text-decoration:none;}

/*** END PRICING TABLE ***/

/*** BLOG ***/
#blog{background:<?php echo $blog_bkg_color;?> url('<?php echo $blog_bkg_image;?>') repeat 0 0;}
#blog .section-title, #blog .section-sub-title, #blog .item-name{color:<?php echo $blog_title_color;?>;}


.published, .comm-title, #comments-title {color:<?php echo $blog_title_color;?>;
border-top:1px solid #c0c0c0;
border-bottom:1px solid #c0c0c0;
padding:7px 0;}
.post-title, .post-title a, .published a{color:<?php echo $blog_title_color;?>;}
.post-title a:hover, .published a:hover{color:<?php echo $link_primary;?>;}

.read-more a, .closePage a{background:<?php echo $blog_title_color;?>;
color:#ffffff;
border:1px solid <?php echo $blog_title_color;?>;}

.read-more a:hover, .closePage a:hover{background:<?php echo $link_primary;?>;
color:<?php echo $blog_title_color;?>;
border:1px solid <?php echo $link_primary;?>;
text-decoration:none;}

input.comm-field, #comment, #message2, input.comm-field:focus, #message2:focus, #comment:focus {border:1px solid #c0c0c0;
border-left: 5px solid <?php echo $link_primary;?>;
color:<?php echo $body_color;?>;}

.comment-body {border-bottom: 1px solid #c0c0c0; }
.comment-author .author a:link, .comment-author .author a:visited { color: #353535;}
.comment-author .author a:hover { color: <?php echo $link_primary;?>; }
.comment-reply-link, #cancel-comment-reply-link{ color: <?php echo $blog_title_color;?>; font-size: 12px }
.comment-reply-link:hover, #cancel-comment-reply-link:hover { color: <?php echo $link_primary;?>; }

input.comm-field:focus, #message2:focus, #comment:focus {}

#submit, #submit-comm{
color: #ffffff;
background: <?php echo $blog_title_color;?>;
border: 1px solid <?php echo $blog_title_color;?>;

-webkit-transition: all 0.3s ease-out 0s;
-moz-transition: all 0.3s ease-out 0s;
-o-transition: all 0.3s ease-out 0s;
-ms-transition: all 0.3s ease-out 0s;
transition: all 0.3s ease-out 0s;
}
#submit:hover, #submit:active, #submit-comm:hover, #submit-comm:active{
background:<?php echo $link_primary;?>;
border: 1px solid <?php echo $link_primary;?>;
color: <?php echo $blog_title_color;?>;
}
.output2{border:1px solid #ff0000;}

.widgettitle{color:<?php echo $blog_title_color;?>;
border-left:5px solid <?php echo $link_primary;?>;}

.sidebar-articles ul li a, .widget_archive ul li a{color:<?php echo $blog_title_color;?>;border:none;}
.sidebar-articles ul li a:hover, .widget_archive ul li a:hover{color:<?php echo $link_primary;?>;border:none;}

.flickr img{border:3px solid <?php echo $blog_title_color;?>;-webkit-transition: border-color 0.5s ease;-moz-transition: border-color 0.5s ease;
-o-transition: border-color 0.5s ease;transition: border-color 0.5s ease;}
.flickr img:hover{border:3px solid <?php echo $link_primary;?>;}

/*** END BLOG ***/

#social-media h1{color:<?php echo $social_title_color;?>;}
#social-media{background:<?php echo $social_bkg_color;?> url('<?php echo $social_bkg_image;?>') repeat 0 0;}

#contact{background:<?php echo $contact_bkg_color;?> url('<?php echo $contact_bkg_image;?>') repeat 0 0;}
#contact .section-title, #contact .section-sub-title, #contact .item-name{color:<?php echo $contact_title_color;?>;}

h4.trigger a{color:#3f3f3f;}
h4.trigger:hover{background-color:#88F2BF;}

<?php ob_end_flush(); ?>