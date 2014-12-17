<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
   <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
   
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen,projection" />
   <!--[if IE 7]><link href="<?php bloginfo('stylesheet_directory'); ?>/css/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
   
   
   <?php wp_head(); ?>
   <?php include (TEMPLATEPATH . '/includes/scripts.php'); ?>   
</head>

<body>
    <?php include (TEMPLATEPATH . '/includes/panel.php'); ?>
    <div class="root">