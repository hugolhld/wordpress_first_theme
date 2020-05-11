<?php

define( 'THEME_PATH' ,          get_template_directory()            );
define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/asset/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/asset/img'       );
define( 'JS_URL' ,              THEME_URL .    '/asset/js'      );
define( 'FAVICONS_URL' ,        THEME_URL .    '/asset/fav_icons'      );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


foreach ( glob( THEME_PATH . "/includes/*.php" ) as $file ) {
    include_once $file;
}


function changer_longueur_resume( $words ) {
    return 3;
}
add_filter( 'excerpt_length', 'changer_longueur_resume' );






