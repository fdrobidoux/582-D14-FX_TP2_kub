<?php
/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', '_custom_theme_options', 1 );

/**
 * Theme Mode demo code of all the available option types.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_theme_options() {
  
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Create a custom settings array that we pass to 
   * the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'sections'        => array(
	 array(
        'title'       => 'General Settings',
        'id'          => 'general'
      ),
	
     array(
        'title'       => 'Top Slideshow',
        'id'          => 'slideshow'
      ),
	
     array(
        'title'       => 'Section About',
        'id'          => 'section_about'
      ),
	  
	  array(
        'title'       => 'Section Join Team',
        'id'          => 'section_join'
      ),
	  
	   array(
        'title'       => 'Section Portfolio',
        'id'          => 'section_portfolio'
      ),
	  
	   array(
        'title'       => 'Section Clients',
        'id'          => 'section_clients'
      ),
	  
	   array(
        'title'       => 'Section Services',
        'id'          => 'section_services'
      ),
	  
	   array(
        'title'       => 'Section Pricing',
        'id'          => 'section_pricing'
      ),
	  
	  array(
        'title'       => 'Section Blog',
        'id'          => 'section_blog'
      ),
	  
	    array(
        'title'       => 'Section Social Media',
        'id'          => 'section_social'
      ),
	  
	   array(
        'title'       => 'Section Contact',
        'id'          => 'section_contact'
      ),
	  
	  
    ),
    'settings'        => array(
	
	array(
        'label'       => 'Logo',
        'id'          => 'logo',
        'type'        => 'upload',
        'desc'        => 'Upload logo image.',
        'std'         => get_stylesheet_directory_uri() . '/images/logo.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	    array(
        'label'       => 'Favicon Image',
        'id'          => 'favicon',
        'type'        => 'upload',
        'desc'        => 'Upload favicon image.',
        'std'         => get_stylesheet_directory_uri() . '/images/favicon.ico',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Google Analytics',
        'id'          => 'analytics',
        'type'        => 'textarea-simple',
        'desc'        => 'Add Google Analytics code.',
        'std'         => '',
        'rows'        => '7',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	array(
        'label'       => 'Hide Slideshow',
        'id'          => 'slides_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the top slideshow.',
        'choices'     => array(
          array (
            'label'       => 'Hide Background Slideshow',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
     
      array(
        'label'       => 'Slideshow Items',
        'id'          => 'slides',
        'type'        => 'list-item',
        'desc'        => 'Create top slideshow. Add as much items as you want.',
        'settings'    => array(
		array(
            'label'       => 'Second Text Paragraph',
            'id'          => 'slide_second_text',
            'type'        => 'text',
            'desc'        => 'Write second text paragraph',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
          array(
            'label'       => 'Upload',
            'id'          => 'slide_upload',
            'type'        => 'upload',
            'desc'        => 'Upload image file. Make sure your image is 1300x580px for a better view.',
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
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	  array(
        'label'       => 'Text Color',
        'id'          => 'slide_text_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose slides text color.',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	  array(
        'label'       => 'Text Background Color',
        'id'          => 'slide_text_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose slides text background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	   array(
        'label'       => 'Slideshow Border Color',
        'id'          => 'slides_border_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose slideshow border color.',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
		  
	  
	   array(
        'label'       => 'Slideshow Autoplay',
        'id'          => 'slides_autoplay',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want the slides to play automatically.',
        'choices'     => array(
          array (
            'label'       => 'Yes',
            'value'       => '1'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	  array(
        'label'       => 'Slides Interval',
        'id'          => 'slide_interval',
        'type'        => 'text',
        'desc'        => 'Length between transitions in milliseconds. Make sure autoplay is checked.',
        'std'         => '3000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),

	   array(
        'label'       => 'Slides Transition',
        'id'          => 'slide_transition',
        'type'        => 'select',
        'desc'        => 'Select your slides transition effect. Default is fade.',
        'choices'     => array(
          array(
            'label'       => 'Fade',
            'value'       => '1'
          ),
          array(
            'label'       => 'Slide Top',
            'value'       => '2'
          ),
          array(
            'label'       => 'Slide Right',
            'value'       => '3'
          ),
          array(
            'label'       => 'Slide Bottom',
            'value'       => '4'
          ),
          array(
            'label'       => 'Slide Left',
            'value'       => '5'
          ),
          array(
            'label'       => 'Carousel Right',
            'value'       => '6'
          ),
          array(
            'label'       => 'Carousel Left',
            'value'       => '7'
          )
        ),
        'std'         => '1',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	  array(
        'label'       => 'Transition Speed',
        'id'          => 'transition_speed',
        'type'        => 'text',
        'desc'        => 'Speed of slides transition in milliseconds.',
        'std'         => '1000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'slideshow'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'about_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'About',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Title Color',
        'id'          => 'about_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'about_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'about_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Icon',
        'id'          => 'about_icon',
        'type'        => 'upload',
        'desc'        => 'Choose About Section icon',
        'std'         => get_stylesheet_directory_uri() . '/images/icon-about.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Quote',
        'id'          => 'about_quote',
        'type'        => 'text',
        'desc'        => 'Change quote.',
        'std'         => 'Anyone who has never made a mistake has never tried anything new',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Quote Author',
        'id'          => 'about_quote_author',
        'type'        => 'text',
        'desc'        => 'Change quote author.',
        'std'         => 'Albert Einstein',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  
	  array(
        'label'       => 'Text Content',
        'id'          => 'about_text',
        'type'        => 'textarea-simple',
        'desc'        => 'Change text content. You can use the Twitter Boostrap columns for typography.(more here: http://twitter.github.com/bootstrap/scaffolding.html#gridSystem)',
        'std'         => '',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Team Members',
        'id'          => 'team',
        'type'        => 'list-item',
        'desc'        => 'Create team members. Add as much items as you want.',
        'settings'    => array(
		array(
            'label'       => 'Team Member Name',
            'id'          => 'team_name',
            'type'        => 'text',
            'desc'        => 'Choose team member name',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		array(
            'label'       => 'Team Member Job',
            'id'          => 'team_job',
            'type'        => 'text',
            'desc'        => 'Choose team member job',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Team Member Text',
            'id'          => 'team_text',
            'type'        => 'text',
            'desc'        => 'Choose team member text',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
          array(
            'label'       => 'Upload Team Member Image',
            'id'          => 'team_upload',
            'type'        => 'upload',
            'desc'        => 'Upload team member image file. Make sure your image is 350x350px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Team Member Facebook URL',
            'id'          => 'team_fb',
            'type'        => 'text',
            'desc'        => 'Change team member Facebook URL',
            'std'         => '#',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Team Member Twitter URL',
            'id'          => 'team_twitter',
            'type'        => 'text',
            'desc'        => 'Change team member Twitter URL',
            'std'         => '#',
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
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   
	  array(
        'label'       => 'Team Member Mask Hover Color',
        'id'          => 'team_mask_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose team member mask hover color.',
        'std'         => '#88F2BF',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Skills Title',
        'id'          => 'skills_title',
        'type'        => 'text',
        'desc'        => 'Change skills title.',
        'std'         => 'Skills',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Skills Items',
        'id'          => 'skills',
        'type'        => 'list-item',
        'desc'        => 'Create skills. Add as much items as you want.',
        'settings'    => array(
		array(
            'label'       => 'Skill Progress',
            'id'          => 'skill_progress',
            'type'        => 'text',
            'desc'        => 'Change skill progress',
            'std'         => '50%',
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
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  array(
        'label'       => 'Skills Background',
        'id'          => 'skills_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Change skills background.',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Skills Progress Bar Background',
        'id'          => 'skills_progress',
        'type'        => 'colorpicker',
        'desc'        => 'Change skills progress bar background.',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Office Title',
        'id'          => 'office_title',
        'type'        => 'text',
        'desc'        => 'Change office title.',
        'std'         => 'Office',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	   array(
        'label'       => 'Office Items',
        'id'          => 'office',
        'type'        => 'list-item',
        'desc'        => 'Create office image slideshow. Add as much items as you want.',
        'settings'    => array(
		 array(
            'label'       => 'Upload Image',
            'id'          => 'office_image',
            'type'        => 'upload',
            'desc'        => 'Upload image file. Make sure your image is 670x400px for a better view.',
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
        'class'       => '',
        'section'     => 'section_about'
      ),
	  
	  
	   array(
        'label'       => 'Title',
        'id'          => 'join_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Join Our Team',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Title Color',
        'id'          => 'join_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Text',
        'id'          => 'join_text',
        'type'        => 'textarea-simple',
        'desc'        => 'Change text',
        'std'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo sapien felis. Pellentes faucibus sollicitudin ante, at porta felis rutrum eget. Aenean eget odio vel libero porttitor pretium non sed purus. Aenean id suscipit eros. Suspendisse bibendum commodo erat.',
        'rows'        => '7',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Text Color',
        'id'          => 'join_text_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose text color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'join_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'join_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => get_stylesheet_directory_uri() . '/images/bkg-diam.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Button Text',
        'id'          => 'join_btn_text',
        'type'        => 'text',
        'desc'        => 'Change button text',
        'std'         => 'Apply Now',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	   array(
        'label'       => 'Button URL',
        'id'          => 'join_btn_url',
        'type'        => 'text',
        'desc'        => 'Change button URL. Dont forget to use http:// in front.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Button Normal State Text Color',
        'id'          => 'join_btn_text_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Change button normal state text color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	   array(
        'label'       => 'Button Normal State Background Color',
        'id'          => 'join_btn_bkg_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Change button normal state background color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Button Hover State Text Color',
        'id'          => 'join_btn_text_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Change button hover state text color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	   array(
        'label'       => 'Button Hover State Background Color',
        'id'          => 'join_btn_bkg_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Change button hover state background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_join'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'portfolio_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Portfolio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	   array(
        'label'       => 'Title Color',
        'id'          => 'portfolio_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'portfolio_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'portfolio_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Icon',
        'id'          => 'portfolio_icon',
        'type'        => 'upload',
        'desc'        => 'Choose icon',
        'std'         => get_stylesheet_directory_uri() . '/images/icon-portfolio.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Quote',
        'id'          => 'portfolio_quote',
        'type'        => 'text',
        'desc'        => 'Change quote.',
        'std'         => 'Choose a job you love, and you will never have to work a day in your life',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Quote Author',
        'id'          => 'portfolio_quote_author',
        'type'        => 'text',
        'desc'        => 'Change quote author.',
        'std'         => 'Confucius',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Category Filter Normal State Background Color',
        'id'          => 'portfolio_categ_bkg_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose category filter normal state background color.',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	   array(
        'label'       => 'Category Filter Normal State Text Color',
        'id'          => 'portfolio_categ_text_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose category filter normal state text color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Category Filter Hover State Background Color',
        'id'          => 'portfolio_categ_bkg_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose category filter hover state background color.',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	   array(
        'label'       => 'Category Filter Hover State Text Color',
        'id'          => 'portfolio_categ_text_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose category filter hover state text color.',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_portfolio'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'clients_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Our Clients',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_clients'
      ),
	  
	  array(
        'label'       => 'Title Color',
        'id'          => 'clients_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_clients'
      ),
	  
	 array(
        'label'       => 'Background Color',
        'id'          => 'clients_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_clients'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'clients_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => get_stylesheet_directory_uri() . '/images/bkg-diam.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_clients'
      ),
	  
	   array(
        'label'       => 'Clients',
        'id'          => 'clients_items',
        'type'        => 'list-item',
        'desc'        => 'Create clients image slideshow. Add as much items as you want.',
        'settings'    => array(
		 array(
            'label'       => 'Upload Image',
            'id'          => 'clients_image',
            'type'        => 'upload',
            'desc'        => 'Upload image file. Make sure your image has a maximum width of 233px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'URL',
            'id'          => 'clients_url',
            'type'        => 'text',
            'desc'        => 'Change client URL.',
            'std'         => '#',
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
        'class'       => '',
        'section'     => 'section_clients'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'services_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Services',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	   array(
        'label'       => 'Title Color',
        'id'          => 'services_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'services_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'services_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Icon',
        'id'          => 'services_icon',
        'type'        => 'upload',
        'desc'        => 'Choose icon',
        'std'         => get_stylesheet_directory_uri() . '/images/icon-services.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Quote',
        'id'          => 'services_quote',
        'type'        => 'text',
        'desc'        => 'Change quote.',
        'std'         => 'There is joy in work. There is no happiness except in the realization that we have accomplished something',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Quote Author',
        'id'          => 'services_quote_author',
        'type'        => 'text',
        'desc'        => 'Change quote author.',
        'std'         => 'Henry Ford',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Content',
        'id'          => 'services_content',
        'type'        => 'textarea-simple',
        'desc'        => 'Change content',
        'std'         => '<div class="span12"><p><span class=" dropcap">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo sapien felis. Pellentes faucibus sollicitudin ante, at porta felis rutrum eget. Aenean eget odio vel libero porttitor pretium non sed purus. Aenean id suscipit eros. Suspendisse bibendum commodo erat. Sed ut nisl urna, <a href="#">eget convallis</a> purus. In metus tortor, adipiscing vitae lacinia quis, viverra id massa. In hac habitasse platea dictumst. Sed sed bibendum nisl. Curabitur blandit diam in erat varius vel convallis mauris egestas.</p></div>',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	   array(
        'label'       => 'Item Background Color',
        'id'          => 'services_item_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose service item background color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Item Content',
        'id'          => 'service_items',
        'type'        => 'list-item',
        'desc'        => 'Create services. Add as much items as you want.',
        'settings'    => array(
		 array(
            'label'       => 'Upload Icon',
            'id'          => 'service_image',
            'type'        => 'upload',
            'desc'        => 'Upload image icon. Make sure your image is 100x100px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		   array(
            'label'       => 'Description',
            'id'          => 'service_desc',
            'type'        => 'textarea-simple',
            'desc'        => 'Change service description.',
            'std'         => '<p>Aenean id suscipit eros. Suspendisse bibendum commodo erat. Sed ut nisl urna, eget convallis purus. In metus tortor, adipiscing vitae lacinia quis.</p>
<ul class="offer">
<li>Logo designs</li>
<li>Brand Identity Development</li>
<li>Packaging designs</li>
<li>Business Cards</li>
<li>Letterheads</li>
</ul>',
            'rows'        => '7',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
		  
		     ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'pricing_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Our Offer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Title Color',
        'id'          => 'pricing_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	 array(
        'label'       => 'Background Color',
        'id'          => 'pricing_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'pricing_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => get_stylesheet_directory_uri() . '/images/bkg-diam.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	   array(
        'label'       => 'Pricing Table',
        'id'          => 'pricing_table',
        'type'        => 'list-item',
        'desc'        => 'Create pricing table columns. Add a maximum of 3 columns.',
        'settings'    => array(
		 
		 array(
            'label'       => 'Price',
            'id'          => 'pricing_price',
            'type'        => 'text',
            'desc'        => 'Change column pricing option.',
            'std'         => '<span>starting at </span>$250',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		   array(
            'label'       => 'Features',
            'id'          => 'pricing_features',
            'type'        => 'textarea-simple',
            'desc'        => 'Change column features.',
            'std'         => '<ul class="column-features">
<li>Metus tortor</li>
<li>Sed ut nisl</li>
<li>Cuscipit eros</li>
<li>Vitae lacinia quis</li>
</ul>',
            'rows'        => '7',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Button Text',
            'id'          => 'pricing_button',
            'type'        => 'text',
            'desc'        => 'Change column text button.',
            'std'         => 'Get a quote',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Button URL',
            'id'          => 'pricing_button_url',
            'type'        => 'text',
            'desc'        => 'Change column button URL.',
            'std'         => '#',
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
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Title Text Color',
        'id'          => 'pricing_col_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Title Background Color',
        'id'          => 'pricing_col_title_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column title background color',
        'std'         => '#88F2BF',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Price Text Color',
        'id'          => 'pricing_price_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column price text color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Price Background Color',
        'id'          => 'pricing_price_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column price background color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	   array(
        'label'       => 'Column Features Text Color',
        'id'          => 'pricing_features_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column features text color',
        'std'         => '#909090',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Features Background Color',
        'id'          => 'pricing_features_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column features background color',
        'std'         => '#f7f7f7',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Features Border Bottom Color',
        'id'          => 'pricing_features_border_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column features border bottom color',
        'std'         => '#e5e5e5',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Button Text Color Normal State',
        'id'          => 'pricing_button_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column button text color normal state',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Button Background Color Normal State',
        'id'          => 'pricing_button_bkg_color_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column button background color normal state',
        'std'         => '#88F2BF',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Button Text Color Hover State',
        'id'          => 'pricing_button_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column button text color hover state',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Column Button Background Color Hover State',
        'id'          => 'pricing_button_bkg_color_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose column button background color hover state',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_pricing'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'blog_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	   array(
        'label'       => 'Title Color',
        'id'          => 'blog_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'blog_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'blog_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Icon',
        'id'          => 'blog_icon',
        'type'        => 'upload',
        'desc'        => 'Choose icon',
        'std'         => get_stylesheet_directory_uri() . '/images/icon-blog.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Quote',
        'id'          => 'blog_quote',
        'type'        => 'text',
        'desc'        => 'Change quote.',
        'std'         => 'The way you communicate an idea is different than the way you communicate a product',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Quote Author',
        'id'          => 'blog_quote_author',
        'type'        => 'text',
        'desc'        => 'Change quote author.',
        'std'         => 'Frank Luntz',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Title',
        'id'          => 'social_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Connect with Us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Title Color',
        'id'          => 'social_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	 array(
        'label'       => 'Background Color',
        'id'          => 'social_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'social_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => get_stylesheet_directory_uri() . '/images/bkg-diam.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	   array(
        'label'       => 'Hide Facebook Icon',
        'id'          => 'fb_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the Facebook icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide Facebook Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Facebook Icon URL',
        'id'          => 'fb_url',
        'type'        => 'text',
        'desc'        => 'Change the Facebook URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Hide Twitter Icon',
        'id'          => 'tw_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the Twitter icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide Twitter Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Twitter Icon URL',
        'id'          => 'tw_url',
        'type'        => 'text',
        'desc'        => 'Change the Twitter URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	   array(
        'label'       => 'Hide Google Plus Icon',
        'id'          => 'gp_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the Google Plus icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide Google Plus Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Google Plus Icon URL',
        'id'          => 'gp_url',
        'type'        => 'text',
        'desc'        => 'Change the Google Plus URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Hide Dribbble Icon',
        'id'          => 'db_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the Dribbble icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide Dribbble Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Dribbble Icon URL',
        'id'          => 'db_url',
        'type'        => 'text',
        'desc'        => 'Change the Dribbble URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	   array(
        'label'       => 'Hide LinkedIn Icon',
        'id'          => 'li_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the LinkedIn icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide LinkedIn Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'LinkedIn Icon URL',
        'id'          => 'li_url',
        'type'        => 'text',
        'desc'        => 'Change the LinkedIn URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'Hide StumbleUpon Icon',
        'id'          => 'st_hide',
        'type'        => 'checkbox',
        'desc'        => 'Check this box if you want to hide the StumbleUpon icon.',
        'choices'     => array(
          array (
            'label'       => 'Hide StumbleUpon Icon',
            'value'       => '1'
          )
        ),
        'std'         => '0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	  array(
        'label'       => 'StumbleUpon Icon URL',
        'id'          => 'st_url',
        'type'        => 'text',
        'desc'        => 'Change the StumbleUpon URL.',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_social'
      ),
	  
	   array(
        'label'       => 'Title',
        'id'          => 'contact_title',
        'type'        => 'text',
        'desc'        => 'Change title',
        'std'         => 'Contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	   array(
        'label'       => 'Title Color',
        'id'          => 'contact_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose title color',
        'std'         => '#3f3f3f',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'contact_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	   array(
        'label'       => 'Background Image',
        'id'          => 'contact_bkg_image',
        'type'        => 'upload',
        'desc'        => 'Upload background image',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Icon',
        'id'          => 'contact_icon',
        'type'        => 'upload',
        'desc'        => 'Choose icon',
        'std'         => get_stylesheet_directory_uri() . '/images/icon-contact.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	   array(
        'label'       => 'World Map Image',
        'id'          => 'contact_map',
        'type'        => 'upload',
        'desc'        => 'Upload world map image',
        'std'         => get_stylesheet_directory_uri() . '/images/world-map.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	   array(
        'label'       => 'Offices',
        'id'          => 'contact_offices',
        'type'        => 'list-item',
        'desc'        => 'Create contact point offices. Add as much items as you want.',
        'settings'    => array(
		 array(
            'label'       => 'Location',
            'id'          => 'contact_location',
            'type'        => 'textarea-simple',
            'desc'        => 'Contact office details.',
            'std'         => '<p>
     
<strong>Address:</strong> Company Street nr 1 New York, USA<br/>

<strong>Phone:</strong> (+00) 000 000 0000<br/>

<strong>Email:</strong> contact@website.com

     </p>',
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
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	   array(
        'label'       => 'Copyright',
        'id'          => 'contact_copy',
        'type'        => 'text',
        'desc'        => 'Change copyright',
        'std'         => '&copy; 2013 Atolo Single Page Template by MatchThemes',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	 	  
	   array(
        'label'       => 'Link Color',
        'id'          => 'link_primary',
        'type'        => 'colorpicker',
        'desc'        => 'Choose link color.',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Link Hover Color',
        'id'          => 'link_hover_primary',
        'type'        => 'colorpicker',
        'desc'        => 'Choose link hover color.',
        'std'         => '#21E29A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Body Text Color',
        'id'          => 'body_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose your font color.',
        'std'         => '#909090',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Body Background Color',
        'id'          => 'body_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Headers and Menu Font Family',
        'id'          => 'headers_family',
        'type'        => 'select',
        'desc'        => 'Select headers and menu font family for the Google Web Fonts.',
        'choices'     => array(
          array(
            'label'       => 'ABeeZee',
            'value'       => 'ABeeZee'
          ),
          array(
            'label'       => 'Abel',
            'value'       => 'Abel'
          ),
          array(
            'label'       => 'Acme',
            'value'       => 'Acme'
          ),
          array(
            'label'       => 'Actor',
            'value'       => 'Actor'
          ),
          array(
            'label'       => 'Adamina',
            'value'       => 'Adamina'
          ),
          array(
            'label'       => 'Aldrich',
            'value'       => 'Aldrich'
          ),
          array(
            'label'       => 'Alice',
            'value'       => 'Alice'
          ),
          array(
            'label'       => 'Allerta',
            'value'       => 'Allerta'
          ),
          array(
            'label'       => 'Almendra',
            'value'       => 'Almendra'
          ),
          array(
            'label'       => 'Amaranth',
            'value'       => 'Amaranth'
          ),
          array(
            'label'       => 'Anonymous Pro',
            'value'       => 'Anonymous Pro'
          ),
          array(
            'label'       => 'Anton',
            'value'       => 'Anton'
          ),
          array(
            'label'       => 'Arapey',
            'value'       => 'Arapey'
          ),
          array(
            'label'       => 'Archivo Narrow',
            'value'       => 'Archivo Narrow'
          ),
          array(
            'label'       => 'Arvo',
            'value'       => 'Arvo'
          ),
          array(
            'label'       => 'Asul',
            'value'       => 'Asul'
          ),
          array(
            'label'       => 'Belgrano',
            'value'       => 'Belgrano'
          ),
          array(
            'label'       => 'Belleza',
            'value'       => 'Belleza'
          ),
          array(
            'label'       => 'BenchNine',
            'value'       => 'BenchNine'
          ),
          array(
            'label'       => 'Bentham',
            'value'       => 'Bentham'
          ),
          array(
            'label'       => 'Bitter',
            'value'       => 'Bitter'
          ),
          array(
            'label'       => 'Brawler',
            'value'       => 'Brawler'
          ),
          array(
            'label'       => 'Bree Serif',
            'value'       => 'Bree Serif'
          ),
          array(
            'label'       => 'Buenard',
            'value'       => 'Buenard'
          ),
          array(
            'label'       => 'Cabin',
            'value'       => 'Cabin'
          ),
          array(
            'label'       => 'Cagliostro',
            'value'       => 'Cagliostro'
          ),
          array(
            'label'       => 'Cambo',
            'value'       => 'Cambo'
          ),
          array(
            'label'       => 'Candal',
            'value'       => 'Candal'
          ),
          array(
            'label'       => 'Cantarell',
            'value'       => 'Cantarell'
          ),
          array(
            'label'       => 'Cantora One',
            'value'       => 'Cantora One'
          ),
          array(
            'label'       => 'Capriola',
            'value'       => 'Capriola'
          ),
          array(
            'label'       => 'Cardo',
            'value'       => 'Cardo'
          ),
          array(
            'label'       => 'Carme',
            'value'       => 'Carme'
          ),
          array(
            'label'       => 'Caudex',
            'value'       => 'Caudex'
          ),
          array(
            'label'       => 'Chivo',
            'value'       => 'Chivo'
          ),
          array(
            'label'       => 'Cinzel',
            'value'       => 'Cinzel'
          ),
          array(
            'label'       => 'Convergence',
            'value'       => 'Convergence'
          ),
          array(
            'label'       => 'Copse',
            'value'       => 'Copse'
          ),
          array(
            'label'       => 'Cousine',
            'value'       => 'Cousine'
          ),
          array(
            'label'       => 'Coustard',
            'value'       => 'Coustard'
          ),
          array(
            'label'       => 'Crete Round',
            'value'       => 'Crete Round'
          ),
          array(
            'label'       => 'Crimson Text',
            'value'       => 'Crimson Text'
          ),
          array(
            'label'       => 'Cuprum',
            'value'       => 'Cuprum'
          ),
          array(
            'label'       => 'Cutive',
            'value'       => 'Cutive'
          ),
          array(
            'label'       => 'Cutive Mono',
            'value'       => 'Cutive Mono'
          ),
          array(
            'label'       => 'Days One',
            'value'       => 'Days One'
          ),
          array(
            'label'       => 'Della Respira',
            'value'       => 'Della Respira'
          ),
          array(
            'label'       => 'Didact Gothic',
            'value'       => 'Didact Gothic'
          ),
          array(
            'label'       => 'Doppio One',
            'value'       => 'Doppio One'
          ),
          array(
            'label'       => 'Dorsa',
            'value'       => 'Dorsa'
          ),
          array(
            'label'       => 'Dosis',
            'value'       => 'Dosis'
          ),
          array(
            'label'       => 'Droid Sans',
            'value'       => 'Droid Sans'
          ),
          array(
            'label'       => 'Droid Sans Mono',
            'value'       => 'Droid Sans Mono'
          ),
          array(
            'label'       => 'Droid Serif',
            'value'       => 'Droid Serif'
          ),
          array(
            'label'       => 'Duru Sans',
            'value'       => 'Duru Sans'
          ),
          array(
            'label'       => 'EB Garamond',
            'value'       => 'EB Garamond'
          ),
          array(
            'label'       => 'Economica',
            'value'       => 'Economica'
          ),
          array(
            'label'       => 'Electrolize',
            'value'       => 'Electrolize'
          ),
          array(
            'label'       => 'Englebert',
            'value'       => 'Englebert'
          ),
          array(
            'label'       => 'Enriqueta',
            'value'       => 'Enriqueta'
          ),
          array(
            'label'       => 'Esteban',
            'value'       => 'Esteban'
          ),
          array(
            'label'       => 'Exo',
            'value'       => 'Exo'
          ),
          array(
            'label'       => 'Fanwood Text',
            'value'       => 'Fanwood Text'
          ),
          array(
            'label'       => 'Federo',
            'value'       => 'Federo'
          ),
          array(
            'label'       => 'Fenix',
            'value'       => 'Fenix'
          ),
          array(
            'label'       => 'Fjord One',
            'value'       => 'Fjord One'
          ),
          array(
            'label'       => 'Francois One',
            'value'       => 'Francois One'
          ),
          array(
            'label'       => 'Fresca',
            'value'       => 'Fresca'
          ),
          array(
            'label'       => 'Gafata',
            'value'       => 'Gafata'
          ),
          array(
            'label'       => 'Galdeano',
            'value'       => 'Galdeano'
          ),
          array(
            'label'       => 'Gentium Basic',
            'value'       => 'Gentium Basic'
          ),
          array(
            'label'       => 'Gentium Book Basic',
            'value'       => 'Gentium Book Basic'
          ),
          array(
            'label'       => 'Geo',
            'value'       => 'Geo'
          ),
          array(
            'label'       => 'Gilda Display',
            'value'       => 'Gilda Display'
          ),
          array(
            'label'       => 'Glegoo',
            'value'       => 'Glegoo'
          ),
          array(
            'label'       => 'Gudea',
            'value'       => 'Gudea'
          ),
          array(
            'label'       => 'Habibi',
            'value'       => 'Habibi'
          ),
          array(
            'label'       => 'Hammersmith One',
            'value'       => 'Hammersmith One'
          ),
          array(
            'label'       => 'Headland One',
            'value'       => 'Headland One'
          ),
          array(
            'label'       => 'Holtwood One SC',
            'value'       => 'Holtwood One SC'
          ),
          array(
            'label'       => 'Homenaje',
            'value'       => 'Homenaje'
          ),
          array(
            'label'       => 'Imprima',
            'value'       => 'Imprima'
          ),
          array(
            'label'       => 'Inconsolata',
            'value'       => 'Inconsolata'
          ),
          array(
            'label'       => 'Inder',
            'value'       => 'Inder'
          ),
          array(
            'label'       => 'Inika',
            'value'       => 'Inika'
          ),
          array(
            'label'       => 'Istok Web',
            'value'       => 'Istok Web'
          ),
          array(
            'label'       => 'Italiana',
            'value'       => 'Italiana'
          ),
          array(
            'label'       => 'Jacques Francois',
            'value'       => 'Jacques Francois'
          ),
          array(
            'label'       => 'Jockey One',
            'value'       => 'Jockey One'
          ),
          array(
            'label'       => 'Josefin Sans',
            'value'       => 'Josefin Sans'
          ),
          array(
            'label'       => 'Josefin Slab',
            'value'       => 'Josefin Slab'
          ),
          array(
            'label'       => 'Judson',
            'value'       => 'Judson'
          ),
          array(
            'label'       => 'Junge',
            'value'       => 'Junge'
          ),
          array(
            'label'       => 'Kameron',
            'value'       => 'Kameron'
          ),
          array(
            'label'       => 'Karla',
            'value'       => 'Karla'
          ),
          array(
            'label'       => 'Kite One',
            'value'       => 'Kite One'
          ),
          array(
            'label'       => 'Kotta One',
            'value'       => 'Kotta One'
          ),
          array(
            'label'       => 'Kreon',
            'value'       => 'Kreon'
          ),
          array(
            'label'       => 'Lato',
            'value'       => 'Lato'
          ),
          array(
            'label'       => 'Ledger',
            'value'       => 'Ledger'
          ),
          array(
            'label'       => 'Lekton',
            'value'       => 'Lekton'
          ),
          array(
            'label'       => 'Lora',
            'value'       => 'Lora'
          ),
          array(
            'label'       => 'Lusitana',
            'value'       => 'Lusitana'
          ),
          array(
            'label'       => 'Lustria',
            'value'       => 'Lustria'
          ),
          array(
            'label'       => 'Magra',
            'value'       => 'Magra'
          ),
          array(
            'label'       => 'Mako',
            'value'       => 'Mako'
          ),
          array(
            'label'       => 'Marcellus',
            'value'       => 'Marcellus'
          ),
          array(
            'label'       => 'Marko One',
            'value'       => 'Marko One'
          ),
          array(
            'label'       => 'Marmelad',
            'value'       => 'Marmelad'
          ),
          array(
            'label'       => 'Marvel',
            'value'       => 'Marvel'
          ),
          array(
            'label'       => 'Mate',
            'value'       => 'Mate'
          ),
          array(
            'label'       => 'Maven Pro',
            'value'       => 'Maven Pro'
          ),
          array(
            'label'       => 'Merriweather',
            'value'       => 'Merriweather'
          ),
          array(
            'label'       => 'Metrophobic',
            'value'       => 'Metrophobic'
          ),
          array(
            'label'       => 'Michroma',
            'value'       => 'Michroma'
          ),
          array(
            'label'       => 'Molengo',
            'value'       => 'Molengo'
          ),
          array(
            'label'       => 'Montaga',
            'value'       => 'Montaga'
          ),
          array(
            'label'       => 'Montserrat',
            'value'       => 'Montserrat'
          ),
          array(
            'label'       => 'Mouse Memoirs',
            'value'       => 'Mouse Memoirs'
          ),
          array(
            'label'       => 'Muli',
            'value'       => 'Muli'
          ),
          array(
            'label'       => 'Neuton',
            'value'       => 'Neuton'
          ),
          array(
            'label'       => 'News Cycle',
            'value'       => 'News Cycle'
          ),
          array(
            'label'       => 'Nobile',
            'value'       => 'Nobile'
          ),
          array(
            'label'       => 'Noticia Text',
            'value'       => 'Noticia Text'
          ),
          array(
            'label'       => 'Numans',
            'value'       => 'Numans'
          ),
          array(
            'label'       => 'Nunito',
            'value'       => 'Nunito'
          ),
          array(
            'label'       => 'Old Standard TT',
            'value'       => 'Old Standard TT'
          ),
          array(
            'label'       => 'Open Sans',
            'value'       => 'Open Sans'
          ),
          array(
            'label'       => 'Open Sans Condensed',
            'value'       => 'Open Sans Condensed'
          ),
          array(
            'label'       => 'Oranienbaum',
            'value'       => 'Oranienbaum'
          ),
          array(
            'label'       => 'Orbitron',
            'value'       => 'Orbitron'
          ),
          array(
            'label'       => 'Orienta',
            'value'       => 'Orienta'
          ),
          array(
            'label'       => 'Oswald',
            'value'       => 'Oswald'
          ),
          array(
            'label'       => 'Ovo',
            'value'       => 'Ovo'
          ),
          array(
            'label'       => 'Oxygen',
            'value'       => 'Oxygen'
          ),
          array(
            'label'       => 'Oxygen Mono',
            'value'       => 'Oxygen Mono'
          ),
          array(
            'label'       => 'PT Mono',
            'value'       => 'PT Mono'
          ),
          array(
            'label'       => 'PT Sans',
            'value'       => 'PT Sans'
          ),
          array(
            'label'       => 'PT Sans Caption',
            'value'       => 'PT Sans Caption'
          ),
          array(
            'label'       => 'PT Sans Narrow',
            'value'       => 'PT Sans Narrow'
          ),
          array(
            'label'       => 'PT Serif',
            'value'       => 'PT Serif'
          ),
          array(
            'label'       => 'PT Serif Caption',
            'value'       => 'PT Serif Caption'
          ),
          array(
            'label'       => 'Paytone One',
            'value'       => 'Paytone One'
          ),
          array(
            'label'       => 'Petrona',
            'value'       => 'Petrona'
          ),
          array(
            'label'       => 'Philosopher',
            'value'       => 'Philosopher'
          ),
          array(
            'label'       => 'Play',
            'value'       => 'Play'
          ),
          array(
            'label'       => 'Playfair Display',
            'value'       => 'Playfair Display'
          ),
          array(
            'label'       => 'Podkova',
            'value'       => 'Podkova'
          ),
          array(
            'label'       => 'Poly',
            'value'       => 'Poly'
          ),
          array(
            'label'       => 'Pontano Sans',
            'value'       => 'Pontano Sans'
          ),
          array(
            'label'       => 'Port Lligat Sans',
            'value'       => 'Port Lligat Sans'
          ),
          array(
            'label'       => 'Port Lligat Slab',
            'value'       => 'Port Lligat Slab'
          ),
          array(
            'label'       => 'Prata',
            'value'       => 'Prata'
          ),
          array(
            'label'       => 'Prociono',
            'value'       => 'Prociono'
          ),
          array(
            'label'       => 'Puritan',
            'value'       => 'Puritan'
          ),
          array(
            'label'       => 'Quando',
            'value'       => 'Quando'
          ),
          array(
            'label'       => 'Quantico',
            'value'       => 'Quantico'
          ),
          array(
            'label'       => 'Quattrocento',
            'value'       => 'Quattrocento'
          ),
          array(
            'label'       => 'Quattrocento Sans',
            'value'       => 'Quattrocento Sans'
          ),
          array(
            'label'       => 'Questrial',
            'value'       => 'Questrial'
          ),
          array(
            'label'       => 'Quicksand',
            'value'       => 'Quicksand'
          ),
          array(
            'label'       => 'Radley',
            'value'       => 'Radley'
          ),
          array(
            'label'       => 'Raleway',
            'value'       => 'Raleway'
          ),
          array(
            'label'       => 'Rambla',
            'value'       => 'Rambla'
          ),
          array(
            'label'       => 'Rationale',
            'value'       => 'Rationale'
          ),
          array(
            'label'       => 'Rokkitt',
            'value'       => 'Rokkitt'
          ),
          array(
            'label'       => 'Ropa Sans',
            'value'       => 'Ropa Sans'
          ),
          array(
            'label'       => 'Rosario',
            'value'       => 'Rosario'
          ),
          array(
            'label'       => 'Rufina',
            'value'       => 'Rufina'
          ),
          array(
            'label'       => 'Ruluko',
            'value'       => 'Ruluko'
          ),
          array(
            'label'       => 'Rum Raisin',
            'value'       => 'Rum Raisin'
          ),
          array(
            'label'       => 'Russo One',
            'value'       => 'Russo One'
          ),
          array(
            'label'       => 'Sanchez',
            'value'       => 'Sanchez'
          ),
          array(
            'label'       => 'Scada',
            'value'       => 'Scada'
          ),
          array(
            'label'       => 'Seymour One',
            'value'       => 'Seymour One'
          ),
          array(
            'label'       => 'Shanti',
            'value'       => 'Shanti'
          ),
          array(
            'label'       => 'Share Tech',
            'value'       => 'Share Tech'
          ),
          array(
            'label'       => 'Share Tech Mono',
            'value'       => 'Share Tech Mono'
          ),
          array(
            'label'       => 'Signika',
            'value'       => 'Signika'
          ),
          array(
            'label'       => 'Signika Negative',
            'value'       => 'Signika Negative'
          ),
          array(
            'label'       => 'Snippet',
            'value'       => 'Snippet'
          ),
          array(
            'label'       => 'Sorts Mill Goudy',
            'value'       => 'Sorts Mill Goudy'
          ),
          array(
            'label'       => 'Source Code Pro',
            'value'       => 'Source Code Pro'
          ),
          array(
            'label'       => 'Source Sans Pro',
            'value'       => 'Source Sans Pro'
          ),
          array(
            'label'       => 'Spinnaker',
            'value'       => 'Spinnaker'
          ),
          array(
            'label'       => 'Stoke',
            'value'       => 'Stoke'
          ),
          array(
            'label'       => 'Strait',
            'value'       => 'Strait'
          ),
          array(
            'label'       => 'Telex',
            'value'       => 'Telex'
          ),
          array(
            'label'       => 'Tenor Sans',
            'value'       => 'Tenor Sans'
          ),
          array(
            'label'       => 'Text Me One',
            'value'       => 'Text Me One'
          ),
          array(
            'label'       => 'Tienne',
            'value'       => 'Tienne'
          ),
          array(
            'label'       => 'Tinos',
            'value'       => 'Tinos'
          ),
          array(
            'label'       => 'Trocchi',
            'value'       => 'Trocchi'
          ),
          array(
            'label'       => 'Ubuntu',
            'value'       => 'Ubuntu'
          ),
          array(
            'label'       => 'Ubuntu Condensed',
            'value'       => 'Ubuntu Condensed'
          ),
          array(
            'label'       => 'Ubuntu Mono',
            'value'       => 'Ubuntu Mono'
          ),
          array(
            'label'       => 'Ultra',
            'value'       => 'Ultra'
          ),
          array(
            'label'       => 'Unna',
            'value'       => 'Unna'
          ),
          array(
            'label'       => 'Varela',
            'value'       => 'Varela'
          ),
          array(
            'label'       => 'Varela Round',
            'value'       => 'Varela Round'
          ),
          array(
            'label'       => 'Vidaloka',
            'value'       => 'Vidaloka'
          ),
          array(
            'label'       => 'Viga',
            'value'       => 'Viga'
          ),
          array(
            'label'       => 'Volkhov',
            'value'       => 'Volkhov'
          ),
          array(
            'label'       => 'Vollkorn',
            'value'       => 'Vollkorn'
          ),
          array(
            'label'       => 'Voltaire',
            'value'       => 'Voltaire'
          ),
          array(
            'label'       => 'Wire One',
            'value'       => 'Wire One'
          ),
          array(
            'label'       => 'Yanone Kaffeesatz',
            'value'       => 'Yanone Kaffeesatz'
          )
          
        ),
        'std'         => 'Open Sans',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Body Font Size',
        'id'          => 'body_size',
        'type'        => 'select',
        'desc'        => 'Select text font page size.',
        'choices'     => array(
          array(
            'label'       => '14px',
            'value'       => '14px'
          ),
          array(
            'label'       => '16px',
            'value'       => '16px'
          ),
          array(
            'label'       => '18px',
            'value'       => '18px'
          ),
          array(
            'label'       => '20px',
            'value'       => '20px'
          ),
          array(
            'label'       => '24px',
            'value'       => '24px'
          )
          
        ),
        'std'         => '14px',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Top Header Background Color',
        'id'          => 'header_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose top header background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Menu Link Color',
        'id'          => 'menu_link_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose menu link color.',
        'std'         => '#909090',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Menu Link Hover Color',
        'id'          => 'menu_link_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose menu link hover color.',
        'std'         => '#000000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Section Quote Text Color',
        'id'          => 'quote_text_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose text color for section quote.',
        'std'         => '#88F2BF',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Section Quote Author Text Color',
        'id'          => 'quote_text_color_author',
        'type'        => 'colorpicker',
        'desc'        => 'Choose text color for section quote author.',
        'std'         => '#909090',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      )
	  
	  
	)
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}