<?php

add_action( 'init', 'projet_mod' );
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

// Register modèles projet
function projet_mod() {
	$domaine = 'projet';
  
  register_post_type( "projet", array(
      'labels' => array(
          'name'                  => __( "Modèles projet", $domaine ),
          'singular_name'         => __( "Modèle projet", $domaine ),
          'all_items'             => __( "Tous les projets", $domaine ),
          'add_new'               => __( "Nouveau projet", $domaine ),
          'add_new_item'          => __( "Nouveau projet", $domaine ),
          'edit_item'             => __( "Édition", $domaine ),
          'new_item'              => __( "Nouveau", $domaine ),
          'view_item'             => __( "Édition", $domaine ),
          'not_found'             => __( "Aucun résultat trouvé", $domaine ),
          'not_found_in_trash'    => __( "Aucun résultat trouvé", $domaine )
      ),
      'publicly_queryable'        => true,
      'public'                    => true,
      'has_archive'               => true,
      'supports'                  => array( 'title' ,'editor'),
      'capability_type'           => 'post',
      'rewrite'                   => array ( 'with_front' => false, "slug" => "inox" ),
      'menu_position'             => 10,
      'menu_icon'   							=> 'dashicons-editor-removeformatting',
      'label'                     => __( 'projet', $domaine ),
      'show_ui'                   => true,
      'show_in_menu'              => true,
      'show_in_nav_menus'         => true,
      'description'               => __( "projet", $domaine ),
      'taxonomies'          		  => array('option_dispo'),
      )
  ); 
}

function create_topics_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Options', 'taxonomy general name' ),
    'singular_name' => _x( 'Option', 'taxonomy singular name' ),
    'search_items' =>  __( 'Rechercher une option' ),
    'popular_items' => __( 'Rechercher une option' ),
    'all_items' => __( 'Toutes les options' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Editer' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter' ),
    'new_item_name' => __( 'Nouvelle option' ),
    'separate_items_with_commas' => __( 'Séparer les options par une virgule' ),
    'add_or_remove_items' => __( 'Ajouter ou supprimer' ),
    'choose_from_most_used' => __( 'Choisir' ),
    'menu_name' => __( 'Les options' ),
  );
  
  // Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('options_dispo','projet',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'options_dispo' ),
  ));
}