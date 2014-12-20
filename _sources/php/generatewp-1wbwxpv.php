<?php
/**
 * kub_home_entries
 *
 * Snippet by GenerateWP.com
 * Generated on December 17, 2014 22:49:01
 * @link http://generatewp.com/snippet/1wbwxpv/
 */


// Register Custom Post Type
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
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
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
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'accueil', $args );

}

// Hook into the 'init' action
add_action( 'init', 'kub_register_home_post_type', 0 );
