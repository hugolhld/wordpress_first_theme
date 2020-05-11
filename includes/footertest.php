<?php
    add_action('wp_footer', 'testFunction');

    function testFunction ()
    {
        echo 'tesst';
    }
    
    add_action('wp_head', 'metaAuthor');
    
    function metaAuthor()
    {
        echo '<meta name="author" name="hugo"/>';
    }