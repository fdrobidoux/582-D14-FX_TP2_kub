<?php

/*###########################################################################
DEREGISTER DEFAULT WIDGETS
###########################################################################*/
function rt_unregister_default_widgets() {
    unregister_widget('WP_Widget_Search');
}
add_action('widgets_init', 'rt_unregister_default_widgets', 1);

/*###########################################################################
SEARCH & STAY IN TOUCH
###########################################################################*/
class rockable_search_social extends WP_Widget {

function rockable_search_social() {
   $widget_ops = array('description' => 'This widget includes a search area and a social widget.' );
   parent::WP_Widget(false, $name = __('ROCKABLE : Search Widget'), $widget_ops);    
}
 
function widget($args, $instance) {        
   extract( $args );
   $search_title = $instance['search_title'];
?>
       
<div class="sidebar-block">
        <h1><?php echo $search_title; ?></h1>

        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
          <div class="search-bg">
          <input type="text" value="Search" name="s" id="search-input" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" />
          </div><!--end search-bg-->
          <div><input type="submit" id="go" alt="Search" title="Search" value="GO" /></div>
        </form>
</div><!--end sidebar-block-->


<?php } function update($new_instance, $old_instance) { return $new_instance; }
			function form($instance) {                
			   $search_title = esc_attr($instance['search_title']);
   ?>   
   
   <p>
   <label for="<?php echo $this->get_field_id('search_title'); ?>">Title:</label>
   <input type="text" name="<?php echo $this->get_field_name('search_title'); ?>" value="<?php echo $search_title; ?>" class="widefat" id="<?php echo $this->get_field_id('search_title'); ?>" />
   </p>
       
<?php } } register_widget('rockable_search_social');

