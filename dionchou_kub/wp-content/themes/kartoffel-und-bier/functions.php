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
//define('WOOCOMMERCE_USE_CSS', false);
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

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
//    set_post_thumbnail_size(150, 150, false);   // default thumb size
//    set_post_thumbnail_size(300, 0, true);   // default thumb size



//    // Add post format support - if these are not needed, comment them out
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

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

//    add_theme_support('menus');            // wp menus

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

/**
 * Permet des entrées personnalisées dans la page d'accueil.  Le gestionnaire du commerce pourra donc procéder a de
 * nouvelles entrées, ou éditer des entrées existantes, sans risquer de briser la page d'accueil du site.
 *
 * wordpress hook -> init
 *
 * @param void
 * @return void
 */
function kub_register_home_post_type() {

    $labels = array(
        'name'                => 'Entrées',
        'singular_name'       => 'Entrée',
        'menu_name'           => 'Accueil',
        'parent_item_colon'   => 'Entrée parente:',
        'all_items'           => 'Toutes les entrées',
        'view_item'           => 'Voir l\'entrée',
        'add_new_item'        => 'Ajouter une nouvelle entrée',
        'add_new'             => 'Ajouter',
        'edit_item'           => 'Éditer l\'entrée',
        'update_item'         => 'Mettre à jour l\'entrée',
        'search_items'        => 'Rechercher une entrée',
        'not_found'           => 'Entrée introuvable',
        'not_found_in_trash'  => 'Entrée introuvable dans la corbeille',
    );
    $args = array(
        'label'               => 'accueil',
        'description'         => 'Permet une entré personnalisée dans la page d\'accueil',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-home',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'accueil', $args );

}

// Hook sur l'action 'init'
add_action('init', 'kub_register_home_post_type', 0);


/**
 * Permet des entrées personnalisées dans la page  des fournisseurs.  Le gestionnaire du commerce pourra donc procéder a de
 * nouvelles entrées, ou éditer des entrées existantes, sans risquer de briser la page.
 *
 * wordpress hook -> init
 *
 * @param void
 * @return void
 */
function kub_register_fournisseurs_post_type() {

    $labels = array(
        'name'                => 'Fournisseurs',
        'singular_name'       => 'Fournisseur',
        'menu_name'           => 'Fournisseurs',
        'parent_item_colon'   => 'Entrée parente:',
        'all_items'           => 'Toutes les entrées',
        'view_item'           => 'Voir l\'entrée',
        'add_new_item'        => 'Ajouter une nouvelle entrée',
        'add_new'             => 'Ajouter',
        'edit_item'           => 'Éditer l\'entrée',
        'update_item'         => 'Mettre à jour l\'entrée',
        'search_items'        => 'Rechercher une entrée',
        'not_found'           => 'Entrée introuvable',
        'not_found_in_trash'  => 'Entrée introuvable dans la corbeille',
    );
    $args = array(
        'label'               => 'fournisseurs',
        'description'         => 'Permet une entré personnalisée dans la page des fournisseurs',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-clipboard',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'fournisseurs', $args );

}

// Hook sur l'action 'init'
add_action('init', 'kub_register_fournisseurs_post_type', 0);


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
    global $woocommerce;

    if (!is_admin()) {

        wp_deregister_style( 'bootstrap' );
        wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.1');
        wp_enqueue_style('bootstrap');

        wp_deregister_style( 'flat-ui-pro' );
        wp_register_style('flat-ui-pro', get_template_directory_uri().'/assets/vendor/flat-ui-pro/css/flat-ui-pro.min.css',array('bootstrap'), '1.3.1' );
        wp_enqueue_style('flat-ui-pro' );

        wp_deregister_style( 'kub' );
        wp_register_style('kub', get_template_directory_uri().'/assets/css/kub.css',array('bootstrap','flat-ui-pro'), null);
        wp_enqueue_style('kub' );

        wp_deregister_style( 'kub-masonery' );
        wp_register_style('kub-masonery', get_template_directory_uri().'/assets/css/kub-masonery.css',array('bootstrap'), null);
        wp_enqueue_style('kub-masonery' );

        $lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;

        if ( $lightbox_en && !wp_style_is( 'woocommerce_prettyPhoto_css', 'registered' )) {
            wp_register_style('woocommerce_prettyPhoto_css', $woocommerce->plugin_url() . '/assets/css/prettyPhoto.css',array(),null );
            wp_enqueue_style( 'woocommerce_prettyPhoto_css');
        }
        elseif($lightbox_en && !wp_style_is( 'woocommerce_prettyPhoto_css', 'enqueued' )) {
            wp_enqueue_style( 'woocommerce_prettyPhoto_css');
        }


    }
}

// hook sur l'action 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'kub_register_styles');

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
    global $woocommerce;


    if (!is_admin()) {

        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri().'/assets/vendor/jquery/jquery-1.11.2.min.js',array(), '1.11.2', true);
        wp_enqueue_script('jquery');

        $lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;

        if ( $lightbox_en && !wp_script_is( 'prettyPhoto', 'registered' )) {
            wp_register_script( 'prettyPhoto', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto.min.js', array( 'jquery' ), '3.1.5', true );
            wp_enqueue_script('prettyPhoto');
        }
        elseif($lightbox_en && !wp_script_is( 'prettyPhoto', 'enqueued' )) {
            wp_enqueue_script( 'prettyPhoto');
        }

        if ( $lightbox_en && !wp_script_is( 'prettyPhoto-init', 'registered' )) {
            wp_register_script( 'prettyPhoto-init', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto.init.min.js', array( 'jquery','prettyPhoto' ), WC_VERSION, true );
            wp_enqueue_script('prettyPhoto-init');
        }
        elseif($lightbox_en && !wp_script_is( 'prettyPhoto-init', 'enqueued' )) {
            wp_enqueue_script( 'prettyPhoto-init');
        }

        wp_dequeue_script('wc-single-product');
        wp_deregister_script( 'wc-single-product' );
        wp_register_script( 'wc-single-product', get_template_directory_uri(). '/woocommerce/js/frontend/single-product.js', array( 'jquery' ), WC_VERSION, true );
        wp_enqueue_script( 'wc-single-product');

        wp_dequeue_script('woocommerce');
        wp_deregister_script( 'woocommerce' );
        wp_register_script( 'woocommerce', get_template_directory_uri(). '/woocommerce/js/frontend/woocommerce.js', array( 'jquery', 'jquery-blockui' ), WC_VERSION, true );
        wp_enqueue_script( 'woocommerce');

        wp_deregister_script( 'flat-ui-pro' );
        wp_register_script('flat-ui-pro', get_template_directory_uri().'/assets/vendor/flat-ui-pro/js/flat-ui-pro.min.js',array('jquery'), '1.3.1', true );
        wp_enqueue_script('flat-ui-pro' );

        wp_deregister_script( 'imagesloaded' );
        wp_register_script('imagesloaded', get_template_directory_uri().'/assets/vendor/pkgd/imagesloaded.pkgd.min.js',array('jquery'), '3.1.8', true );
        wp_enqueue_script('imagesloaded' );

        wp_deregister_script( 'masonery' );
        wp_register_script('masonery', get_template_directory_uri().'/assets/vendor/pkgd/masonry.pkgd.min.js',array('jquery'), '3.2.2', true );
        wp_enqueue_script('masonery' );

        wp_register_script('kub', get_template_directory_uri().'/assets/js/kub.js',array('jquery','flat-ui-pro'), null, true );
        wp_enqueue_script('kub' );

        wp_register_script('kub-masonery', get_template_directory_uri().'/assets/js/kub-masonery.js',array('jquery'), null, true );
        wp_enqueue_script('kub-masonery' );

        // Include the file, if needed
        if ( ! function_exists( 'wp_check_browser_version' ) ) {
            include_once( ABSPATH . 'wp-admin/includes/dashboard.php' );
        }

        // IE version conditional enqueue
        $response = wp_check_browser_version();

        if ( 0 > version_compare( intval( $response['version'] ) , 9 ) ) {
            wp_register_script( 'html5shiv', get_template_directory_uri().'/assets/vendor/html5shiv.js', array(), '3.7.2', false );
            wp_enqueue_script('html5shiv' );
            wp_register_script( 'respond-js', get_template_directory_uri().'/assets/vendor/respond.min.js', array(), '1.4.2', false );
            wp_enqueue_script('respond-js' );

        }
    }
}

// hook sur l'action 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'kub_register_script');

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

    return '<p><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' .'Suite...' . '</a></p>';
}
add_filter( 'excerpt_more', 'kub_excerpt_more' );
add_filter( 'the_content_more_link', 'kub_excerpt_more' );



//======================================================================================================================
//  METABOX
//======================================================================================================================

/**
 * @param $meta_boxes
 * @return array
 */
function kub_home_metaboxes($meta_boxes)
{
    $prefix = '_kub_'; // Prefix for all fields

    $meta_boxes[] = array(
        'id' => 'dispwidth_metabox',
        'title' => 'Propriétés d\'affichage',
        'pages' => array('accueil'), // post type
        'context' => 'side',
        'priority' => 'core',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name'    => 'Taille',
                'desc'    => 'Détermine la taille d\'affichage de l\'item dans la mosaïque',
                'id'      => $prefix . 'dispwidth',
                'type'    => 'radio',
                'default' => 'small',
                'options' => array(
                    'small' => __( 'Petit', 'cmb' ),
                    'medium' => __( 'Moyen', 'cmb' ),
                    'large' => __( 'Large', 'cmb' ),
                    'full' => __( 'Pleine largeur', 'cmb' ),
                ),
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('cmb_meta_boxes', 'kub_home_metaboxes');

function kub_initialize_cmb_Meta_Box()
{
    if (!class_exists('cmb_Meta_Box'))
        require_once( get_template_directory().'/libs/metabox/init.php' );
}

add_action('init', 'kub_initialize_cmb_Meta_Box', 9999);



//======================================================================================================================
// CORE
//======================================================================================================================


/**
 * Remplace le shortcode pour figure & figcaption créé par l'éditeur
 *
 * Permet de régler un problème de validation quand l'utilisateur utilise plus d'une fois la même image dans un post.
 * Retire les dimensions de l'image dans la balise IMG
 *
 * @param $attr
 * @param null $content
 * @return mixed|null|string|void
 */
function kub_fix_figure_figcaption_shortcode($attr, $content = null) {
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }
    $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
    if ( $output != '' )
        return $output;
    extract( shortcode_atts(array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr));
    if ( 1 > (int) $width || empty($caption) )
        return $content;

    //
    if ( $id ) $id = 'data-attachement-id="' . esc_attr($id) . '" ';

    $content = preg_replace( '/(width|height)="\d*"\s/', "", $content );

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '.esc_attr($width).'px;">'
    . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
add_shortcode( 'caption', 'kub_fix_figure_figcaption_shortcode' );
add_shortcode( 'wp_caption', 'kub_fix_figure_figcaption_shortcode' );

//===========================================================================
// PRICES
//===========================================================================

/**
 * Retire des boutons de la barre d'outils de l'éditeur
 *
 * @param $buttons
 * @return mixed
 */
function kub_remove_tinymce_buttons($buttons)
{
    global $current_screen;

    // Liste des vues sur lesquelles appliquer ce filtre
    $screens = array('accueil','fournisseurs');

    if ( in_array($current_screen->post_type, $screens) ) {

        // Liste des boutons a retirer
        $remove = array('wp_more');

        foreach($remove as $btns) {

            if ( ( $key = array_search($btns,$buttons) ) !== false ) {

                unset($buttons[$key]);

            }
        }
    }

    return $buttons;
}
add_filter('mce_buttons','kub_remove_tinymce_buttons');


function kub_remove_product_tabs($tabs) {
    global $name;

    $pages = array('envedette');

    if(in_array($name,$pages)) {

        $remove = array('reviews');

        foreach($remove as $tab) {

            if ( array_key_exists ($tab , $tabs )) {

                unset($tabs[$tab]);

            }
        }

    }

    return $tabs;
}

add_filter('woocommerce_product_tabs','kub_remove_product_tabs');



function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );



///* --- */
///* $this->get_price() > 0 */
///* --- */
//
//function kub_price_html($prix, $produit)
//{
//    $retour = '<span class="btn btn-inverse btn-sm price">'.$prix.'</span>';
//
//    return $retour;
//}
//
///* OU */
//
//function kub_sale_price_html($prix, $produit)
//{
//    $retour = str_replace("<del>", '<span class="btn btn-default btn-sm price"><del>', $prix);
//    $retour = str_replace("</del>", '</del></span>', $retour);
//    $retour = str_replace("<ins>", '<span class="btn btn-info btn-sm price-sale">', $retour);
//    $retour = str_replace("</ins>", '</span>', $retour);
//
//    return ''.$retour.'</span>';
//}
//
///* --- */
///* $this->get_price() === '' */
///* --- */
//
//function kub_empty_price_html($prix, $produit)
//{
//    return '<span class="btn btn-warning btn-sm disabled price-empty">N/A</span>';
//}
//
///* --- */
///* $this->get_price() == 0 */
///* --- */
//
//function kub_free_sale_price_html($prix, $produit)
//{
//    return '<span class="btn btn-primary price">'.$prix.'</span>';
//}
//
///* OU */
//
//function kub_free_price_html($prix, $produit)
//{
//    return '<span class="">'.$prix.'</span>';
//}
//
///* À LA TOUTE FIN */
//
//function kub_get_price_html($prix, $produit)
//{
//    return ''.$prix.'';
//}
//
//add_filter( 'woocommerce_price_html', 'kub_price_html', 100, 2 );
//add_filter( 'woocommerce_sale_price_html', 'kub_sale_price_html', 100, 2 );
//add_filter( 'woocommerce_empty_price_html', 'kub_empty_price_html', 100, 2 );
//add_filter( 'woocommerce_free_sale_price_html', 'kub_free_sale_price_html', 100, 2);
//add_filter( 'woocommerce_free_price_html', 'kub_free_price_html', 100, 2);
//add_filter( 'woocommerce_get_price_html', 'kub_get_price_html', 100, 2);