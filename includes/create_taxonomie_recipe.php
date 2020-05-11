<?php

add_action('init', 'create_taxonomie_type');

function create_taxonomie_type()
{
    $taxonomie = 'recette_type';
    $object_type = 'recette';
    $args = array(
        'label' => 'Type de recette',
        'rewrite' => array('slug' => 'recette_types'),
        'hierarchical' => true,
    );

    register_taxonomy($taxonomie, $object_type, $args);
}