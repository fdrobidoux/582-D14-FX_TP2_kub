<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/colors.php" type="text/css" media="screen" />
    
   
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

    <?php $headers_family = ot_get_option( 'headers_family', 'Open Sans'); ?>
    
    <link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $headers_family); ?>:300,300italic,400,600,800' rel='stylesheet' type='text/css' />
   
    <!-- Favicons -->
    <?php $favicon = ot_get_option('favicon'); ?>
   <link rel="shortcut icon" href="<?php echo $favicon;?>">
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<?php wp_head(); ?>
    
    <?php $analytics = ot_get_option( 'analytics');
	
		  echo $analytics;
	 ?>
    
 </head>
  
<body>



<div id="top" class="allC">

<header class="top-header clearfix">

<div class="container">
<div class="row">
<div class="span12">

 <?php $logo = ot_get_option( 'logo'); ?>
 <div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo $logo;?>" alt=""/></a></div>
 
 <?php if(is_home()) { ?>
 
<?php wp_nav_menu(array('menu' => 'primary-menu', 'menu_class' => 'menu', 'container' => 'false')); ?>

<?php } else{ ?>

<div class="closePage"><a href="javascript:history.back()"><?php _e('Close', 'atolo'); ?></a></div>

<?php }?>

</div>
</div>
</div>

</header>

