<?php


function call_js_files()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', JS_URL.'/jquery-3.2.1.slim.min.js','',1.0,true );
    wp_enqueue_script('jquery');

    wp_register_script('mainjs', JS_URL.'/main.js','',1.0,true );
    wp_enqueue_script('mainjs');
    

    wp_register_script('owlcarousel', JS_URL.'/owl.carousel.min.js','',1.0,true );
    wp_enqueue_script('owlcarousel');

    wp_register_script('jquerywaypoints', JS_URL.'/jquery.waypoints.min.js','',1.0,true );
    wp_enqueue_script('jquerywaypoints');

    wp_register_script('imgloaded', JS_URL.'/imagesloaded.pkgd.min.js','',1.0,true );
    wp_enqueue_script('imgloaded');
    
    wp_register_script('popper', JS_URL.'/popper.min.js','',1.0,true );
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', JS_URL.'/bootstrap.min.js','',1.0,true );
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'call_js_files');
