<?php
/**
 * functions.php
 *
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux & Michel Chouinard
 * Date:    03/12/2014
 * Time:    5:58 PM
 */

// Désactive la barre d'administration de wordpress.
// todo - Il est possible de la placer mais elle n'est pas nécessaire.
show_admin_bar(false);

//======================================================================================================================
// DÉBUT DE LA SECTION SPÉCIFIQUE AU SUPPORT DE WOOCOMMERCE DANS NOTRE THÈME
//======================================================================================================================

// Désactivation du CSS de woocommerce
define('WOOCOMMERCE_USE_CSS', false);

/**
 * Activation du support woocommerce
 *
 * @param void
 * @return void
 */
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

// Action hook d'activation du support woocommerce
add_action('after_setup_theme', 'woocommerce_support');

/**
 * Remplace les balises HTML d'ouverture du wrapper de la boutique woocommerce
 *
 * @param void
 * @return void
 */
function kub_theme_wrapper_start()
{
    echo '<!--THEME WRAPPER START-->';
    echo '<section id="Main" class="container">';
}

/**
 * Remplace les balises HTML de fermeture du wrapper de la boutique woocommerce
 *
 * @param void
 * @return void
 */
function kub_theme_wrapper_end()
{
    echo '</section>';
    echo '<!--THEME WRAPPER END-->';
}

// Supprime le action hook par défaut et le remplace par le notre
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'kub_theme_wrapper_start', 10);

// Supprime le action hook par défaut et le remplace par le notre
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'kub_theme_wrapper_end', 10);

//======================================================================================================================
// FIN DE LA SECTION SPÉCIFIQUE AU SUPPORT DE WOOCOMMERCE DANS NOTRE THÈME
//======================================================================================================================



// Add WP 3+ Functions & Theme Support
function wp_bootstrap_theme_support()
{
    add_theme_support('post-thumbnails');      // wp thumbnails (sizes handled in functions.php)
//    set_post_thumbnail_size(300, 0, true);   // default thumb size

//	// Add post format support - if these are not needed, comment them out
//	add_theme_support( 'post-formats',      // post formats
//		array(
//				'aside',   // title less blurb
//				'gallery', // gallery of images
//				'link',    // quick link to other site
//				'image',   // an image
//				'quote',   // a quick quote
//				'status',  // a Facebook like status update
//				'video',   // video
//				'audio',   // audio
//				'chat'     // chat transcript
//		)
//	);

    add_theme_support('menus');            // wp menus

    register_nav_menus(                      // wp3+ menus
        array(
            'main_nav' => 'The Main Menu',   // main nav in header
            'footer_links' => 'Footer Links' // secondary nav in footer
        )
    );
}

// launching this stuff after theme setup
add_action('after_setup_theme', 'wp_bootstrap_theme_support');

/**
 * Permet l'utilisation d'un main nav en bootstrap.
 */
function wp_bootstrap_main_nav()
{
    // Display the WordPress menu if available
    wp_nav_menu(
        array(
            'menu' => 'main_nav', /* menu name */
            'menu_class' => 'nav navbar-nav navbar-right',
            'theme_location' => 'main_nav', /* where in the theme it's assigned */
            'container' => 'false', /* container class */
            'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
        )
    );
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');




//======================================================================================================================
// CUSTOM POST TYPES
//======================================================================================================================

///**
// * Permet des entrées personnalisées dans la page d'accueil.  Le gestionnaire du commerce pourra donc procéder a de
// * nouvelles entrées, ou éditer des entrées existantes, sans risquer de briser la page d'accueil du site.
// *
// * wordpress hook -> init
// *
// * @param void
// * @return void
// */
//function kub_register_home_post_type()
//{
//
//    $labels = array(
//        'name' => 'Entrées',
//        'singular_name' => 'Entrée',
//        'menu_name' => 'Accueil',
//        'parent_item_colon' => 'Entrée parente:',
//        'all_items' => 'Toutes les entrées',
//        'view_item' => 'Voir l\'entrée',
//        'add_new_item' => 'Ajouter une nouvelle entrée',
//        'add_new' => 'Ajouter',
//        'edit_item' => 'Éditer l\'entrée',
//        'update_item' => 'Mettre à jour l\'entrée',
//        'search_items' => 'Rechercher une entrée',
//        'not_found' => 'Entrée introuvable',
//        'not_found_in_trash' => 'Entrée introuvable dans la corbeille',
//    );
//    $rewrite = array(
//        'slug' => 'accueil',
//        'with_front' => false,
//        'pages' => false,
//        'feeds' => false,
//    );
////    $capabilities = array(
////        'edit_post' => 'edit_post',
////        'read_post' => 'read_post',
////        'delete_post' => 'delete_post',
////        'edit_posts' => 'edit_posts',
////        'edit_others_posts' => 'edit_others_posts',
////        'publish_posts' => 'publish_posts',
////        'read_private_posts' => 'read_private_posts',
////    );
//    $args = array(
//        'label' => 'home_entry_post_type',
//        'description' => 'Permet des entrées personnalisées dans la page d\'accueil',
//        'labels' => $labels,
//        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions',),
//        'hierarchical' => false,
//        'public' => true,
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'show_in_nav_menus' => false,
//        'show_in_admin_bar' => false,
//        'menu_position' => 5,
//        'menu_icon' => 'dashicons-admin-home',
//        'can_export' => true,
//        'has_archive' => false,
//        'exclude_from_search' => true,
//        'publicly_queryable' => true,
//        'query_var' => 'home_entry',
//        'rewrite' => $rewrite,
////        'capabilities' => $capabilities,
//    );
//    register_post_type('home_entry_post_type', $args);
//
//}
//
//// Hook sur l'action 'init'
//add_action('init', 'kub_register_home_post_type', 0);


//======================================================================================================================
// "DEQUEUE, REGISTER & ENQUEUE" DES STYLES UTILISÉS PAR NOTRE THÈME
//======================================================================================================================

/**
 * 
 *
 * wordpress hook -> wp_enqueue_scripts
 *
 * @param void
 * @return void
 */
function kub_register_styles() {

    if (!is_admin()) {

        wp_deregister_style( 'bootstrap' );
//        wp_register_style( 'bootstrap', get_template_directory_uri().'/css/vendor/bootstrap.min.css', array(), '3.3.1');
        wp_register_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css', array(), '3.3.1');
        wp_enqueue_style('bootstrap');

        wp_deregister_style( 'flat-ui-pro' );
        wp_register_style('flat-ui-pro', get_template_directory_uri().'/css/vendor/flat-ui-pro.min.css',array('bootstrap'), '1.3.1' );
        wp_enqueue_style('flat-ui-pro' );

        wp_deregister_style( 'kub' );
        wp_register_style('kub', get_template_directory_uri().'/css/kub.css',array('bootstrap','flat-ui-pro'), null);
        wp_enqueue_style('kub' );

    }
}

// hook sur l'action 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'kub_register_styles');

//======================================================================================================================
//  FILTERS
//======================================================================================================================

/**
 * Replace the [...] of excerpts for a link pointing to the post
 *
 * @param $more
 *
 * @return string
 */
function kub_excerpt_more( $more ) {

    return '<p><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'more...', 'mcintranet' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'kub_excerpt_more' );


//======================================================================================================================
// "DEQUEUE, REGISTER & ENQUEUE" DES SCRIPTS UTILISÉS PAR NOTRE THÈME
//======================================================================================================================

/**
 *
 * wordpress hook -> wp_enqueue_scripts
 *
 * @param void
 * @return void
 */
function kub_register_script() {

    if (!is_admin()) {

        wp_deregister_script('jquery');
//        wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery.min.js',array(), '1.11.1', true);
        wp_register_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js',array(), '1.11.1', true);
        wp_enqueue_script('jquery');

        wp_deregister_script( 'flat-ui-pro' );
        wp_register_script('flat-ui-pro', get_template_directory_uri().'/js/vendor/flat-ui-pro.min.js',array('jquery'), '1.3.1', true );
        wp_enqueue_script('flat-ui-pro' );

        wp_register_script('kub', get_template_directory_uri().'/js/kub.js',array('jquery','flat-ui-pro'), null, true );
        wp_enqueue_script('kub' );

    }
}

// hook sur l'action 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'kub_register_script');



