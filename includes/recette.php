<?php

add_action('init', 'createRecette');

function createRecette()
{
    $post_type = "recette";
    $labels = array(
            'name'               => 'Recettes',
            'singular_name'      => 'Recette',
            'all_items'          => 'Toutes les recttes ',
            'add_new'            => 'Nouvelle recette',
            'add_new_item'       => 'Ajouter une nouvelle recette',
            'edit_item'          => "Modifier une recette",
            'new_item'           => 'Nouvelle recette',
            'view_item'          => "Voir la rectte",
            'search_items'       => 'Trouver une recette',
            'not_found'          => 'pas de resultat',
            'not_found_in_trash' => 'pas de resultat',
            'parent_item_colon'  => 'Reecette parente:',
            'menu_name'          => 'Recettes',
        );

        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false,
            'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'post-formats',),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-home',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type )
        );

    register_post_type($post_type, $args );
}

