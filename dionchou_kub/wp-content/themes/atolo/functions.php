<?php
/**
 * @package WordPress
 * @subpackage Atolo
 */
 
  // Add Portfolio custom post type
include_once('include/portfolio-custom-post-type.php');

  // Add Portfolio Meta Boxes
include_once( 'include/portfolio-meta-boxes.php' );

// Add recent posts widget
include("include/widget-recent-posts.php");

// Add video widget
include("include/widget-video.php");

// Add flickr widget
include("include/widget-flickr.php");

$lang = TEMPLATE_PATH . '/lang';
load_theme_textdomain('atolo', $lang);


/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
include_once( 'admin/ot-loader.php' );

include_once( 'include/theme-options.php' );


// Disable WordPress's auto-formating filters
include_once('include/disable-autoformat.php');


//	Register and load front end JS and CSS files


if( !function_exists( 'mt_scripts_init' ) ) {
    function mt_scripts_init() {
	
        
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js');
		wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
		wp_register_script('easing', get_stylesheet_directory_uri() . '/js/jquery.easing.min.js');
		wp_register_script('isotope', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js');
		wp_register_script('flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.min.js');
		wp_register_script('jqueryform', get_stylesheet_directory_uri() . '/js/jquery.form.js');
		wp_register_style('pretty-css', get_stylesheet_directory_uri() . '/js/prettyphoto/css/prettyPhoto.css');
		wp_register_script('pretty-photo', get_stylesheet_directory_uri() . '/js/prettyphoto/js/jquery.prettyPhoto.js');		
		wp_register_script('init', get_stylesheet_directory_uri() . '/js/init.js');
		
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('pretty-photo');
    	wp_enqueue_script('bootstrap');
		wp_enqueue_script('easing');
		wp_enqueue_script('isotope');
		wp_enqueue_script('flexslider');		
    	wp_enqueue_script('jqueryform');
		wp_enqueue_style('pretty-css');
    	wp_enqueue_script('init');		

    }
    
    add_action('wp_enqueue_scripts', 'mt_scripts_init');
}


// Register Custom Menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}

// Register Post Thumbnail
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size(350,350,true);
add_image_size( 'portfolio-img', 350, 350, true );
add_image_size( 'blog-image', 770, 300, true );

// Register Sidebar

if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));
	}

// Excerpt Content
function wpe_excerptlength_index($length) { return 20;  }
function wpe_excerptmore($more) { return '...'; }
function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
    add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
    add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
    }

//create new comments output
function my_custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment-body <?php if ($comment->comment_approved == '0') echo 'pending-comment'; ?> clearfix">
                <div class="comment-details">
                    <div class="comment-avatar">
                        <?php echo get_avatar($comment, $size = '45'); ?>
                    </div><!-- /comment-avatar -->
                    <section class="comment-author vcard">
						<?php printf(__('<cite class="author">%s</cite>'), get_comment_author_link()) ?>
						<span class="comment-date"> - <?php echo get_comment_date(); ?></span>
                    </section><!-- /comment-meta -->
                    <section class="comment-content">
    	                <div class="comment-text">
    	                    <?php comment_text() ?>
    	                </div><!-- /comment-text -->
    	                <div class="reply">
    	                    <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply','atolo'). '&#187;','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    	                </div><!-- /reply -->
                    </section><!-- /comment-content -->
				</div><!-- /comment-details -->
		</div><!-- /comment -->
<?php
} //end my_custom_comments()

// Transform HEX color to RGB color
function hex2rgb( $colour ) {
        if ( $colour[0] == '#' ) {
                $colour = substr( $colour, 1 );
        }
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
                return false;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
?>