<?php
    add_action('init', 'createServices');

    function createServices()
    {
        $post_type = "services";
        $labels = array(
                'name'               => 'Services',
                'singular_name'      => 'Service',
                'all_items'          => 'Toutes les services ',
                'add_new'            => 'Nouveau service',
                'add_new_item'       => 'Ajouter un nouveau service',
                'edit_item'          => "Modifier un service",
                'new_item'           => 'Nouveeau service',
                'view_item'          => "Voir le service",
                'search_items'       => 'Trouver un service',
                'not_found'          => 'pas de resultat',
                'not_found_in_trash' => 'pas de resultat',
                'parent_item_colon'  => 'Service parent:',
                'menu_name'          => 'Services',
            );

            $args = array(
                'labels'              => $labels,
                'hierarchical'        => false,
                'supports'            => array('title','editor'),
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'menu_position'       => 5,
                'menu_icon'           => 'dashicons-book',
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