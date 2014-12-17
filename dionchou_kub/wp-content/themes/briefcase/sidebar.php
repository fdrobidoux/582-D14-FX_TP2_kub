<div class="left">

    <div class="logo">
           <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo3.png" alt="<?php bloginfo('name'); ?>" /></a>
           <div class="description"><?php bloginfo('description'); ?></div>
    </div><!--end logo-->
    
    <div class="menu">
           <?php if(is_active_sidebar('sidebar-main')) : dynamic_sidebar('sidebar-main'); else : ?>
           <?php endif; ?>
    </div><!--end menu -->
    
</div><!--end left -->
