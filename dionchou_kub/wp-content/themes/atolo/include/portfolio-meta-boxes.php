<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   $meta_box_info = array(
    'id'          => 'meta_box_info',
    'title'       => 'Portfolio Item Info',
    'desc'        => '',
    'pages'       => array( 'portfolio' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Year',
        'id'          => 'portfolio_year',
        'type'        => 'text',
        'desc'        => 'Change project year.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => 'Client',
        'id'          => 'portfolio_client',
        'type'        => 'text',
        'desc'        => 'Change client`s name for the project.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'label'       => 'Role',
        'id'          => 'portfolio_role',
        'type'        => 'text',
        'desc'        => 'Change role for the project.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => 'Project URL',
        'id'          => 'portfolio_url',
        'type'        => 'text',
        'desc'        => 'Change project URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      )
      
  	)
  );
   
  $my_meta_box = array(
    'id'          => 'my_meta_box',
    'title'       => 'Display Slider / Image / Video',
    'desc'        => '',
    'pages'       => array( 'portfolio' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     array(
        'label'       => 'Choose what you want to display',
        'id'          => 'portfolio_radio',
        'type'        => 'radio',
        'desc'        => 'Select Slider / Image / Video',
        'choices'     => array(
          array(
            'label'       => 'Slider',
            'value'       => 'slider'
          ),
          array(
            'label'       => 'Image',
            'value'       => 'image'
          ), 
          array(
            'label'       => 'Video',
            'value'       => 'video'
          )
        ),
        'std'         => 'slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''        
      ),
       array(
        'label'       => 'Slider Items',
        'id'          => 'portfolio_slides',
        'type'        => 'list-item',
        'desc'        => 'Display slider. Add as much items as you want.',
        'settings'    => array(
		  array(
            'label'       => 'Upload',
            'id'          => 'portfolio_slide_upload',
            'type'        => 'upload',
            'desc'        => 'Upload image file. Make sure your image width is at least 670px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
		  
         	     ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''      
      ),
	  array(
        'label'       => 'Single Image',
        'id'          => 'portfolio_image',
        'type'        => 'upload',
        'desc'        => 'Display single image.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	   array(
        'label'       => 'Video',
        'id'          => 'portfolio_video',
        'type'        => 'textarea-simple',
        'desc'        => 'Display video.Embed the video iframe code here.',
        'std'         => '<iframe width="670" height="400" src="http://www.youtube.com/embed/IJNR2EpS0jw" frameborder="0" allowfullscreen></iframe>',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	  )
  	)
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  ot_register_meta_box( $meta_box_info); 
  ot_register_meta_box( $my_meta_box );

}