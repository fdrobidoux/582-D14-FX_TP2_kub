<?php
/*###########################################################################
Theme Post Type -Portfolio
###########################################################################*/
function rt_create_post_type_portfolios() {
  $labels = array(
	  'name' => __( 'Portfolio'),
	  'singular_name' => __( 'Portfolio' ),
	  'add_new' => _x('Add New', 'slide'),
	  'add_new_item' => __('Add New Item'),
	  'edit_item' => __('Edit Item'),
	  'new_item' => __('New Item'),
	  'view_item' => __('View Item'),
	  'search_items' => __('Search Items'),
	  'not_found' =>  __('No Item found'),
	  'not_found_in_trash' => __('No Item found in Trash'), 
	  'parent_item_colon' => '3'
	);
	
	$args = array(
	  'labels' => $labels,
	  'public' => true,
	  'exclude_from_search' => true,
	  'publicly_queryable' => true,
	  'rewrite' => array('slug' => __( 'portfolio-items' )),
	  'show_ui' => true, 
	  'query_var' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'menu_icon' => get_template_directory_uri() .'/images/portfolio-icon.png',
	  'menu_position' => 27,
	  'supports' => array('title','editor','thumbnail', 'comments')
	); 
	register_post_type(__( 'portfolio' ),$args);
}


function rt_build_taxonomies(){
	register_taxonomy(__( "portfolio-categories" ), array(__( "portfolio" )), array("hierarchical" => true, "label" => __( "Categories" ), "singular_label" => __( "Categories" ), "rewrite" => array('slug' => 'portfolio-categories', 'hierarchical' => true))); 
}


function rt_portfolio_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __( 'Portfolio Items Title' ),
            "type" => __( 'Type' )
        );  
        return $columns;  
}  
  
function rt_portfolio_custom_columns($column){  
        global $post;  
        switch ($column)  
        {    
            case __( 'type' ):  
                echo get_the_term_list($post->ID, __( 'portfolio-categories' ), '', ', ','');  
                break;
        }  
}  





add_action( 'init', 'rt_create_post_type_portfolios' );
add_action( 'init', 'rt_build_taxonomies', 0 );
add_filter("manage_edit-portfolio_columns", "rt_portfolio_edit_columns");  
add_action("manage_posts_custom_column",  "rt_portfolio_custom_columns");  


?>