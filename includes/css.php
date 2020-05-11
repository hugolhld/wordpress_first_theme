<?php

function call_style_files()
{
    // wp_register_style('bootstrapmin', get_template_directory_uri().'/asset/styles/bootstrap.min.css');
    // wp_enqueue_style('bootstrapmin');

    // wp_register_style('googlefont', CSS_URL.'')

    wp_register_style('bootstrapmin', CSS_URL.'/bootstrap.min.css' );
    wp_enqueue_style('bootstrapmin');

    wp_register_style('iconic', CSS_URL.'/open-iconic-bootstrap.min.css');
    wp_enqueue_style('iconic');

    wp_register_style('owlcarousel', CSS_URL.'/owl.carousel.min.css');
    wp_enqueue_style('owlcarousel');

    wp_register_style('owltheme', CSS_URL.'/owl.theme.default.min.css');
    wp_enqueue_style('owltheme');

    wp_register_style('animate', CSS_URL.'/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('maincss', CSS_URL.'/style.css');
    wp_enqueue_style('maincss');

    wp_register_style('css', CSS_URL.'/main.css');
    wp_enqueue_style('css');
}

add_action('wp_enqueue_scripts', 'call_style_files');