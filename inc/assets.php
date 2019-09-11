<?php

// Load the CSS and the JavaScript File in this file

define('accessibility_version', 1);

function accessibility_enqueue_scripts($hook){
    
    wp_enqueue_script( ('scorpiotek-accessibility'), 
    jsPath, 
        array('jquery'), 
        null, true );

    // You must load the CSS the same way as you load the JS.
    wp_register_style( 'accessibility_css', cssPath );
    wp_enqueue_style( 'accessibility_css' );
}

 add_action( 'wp_enqueue_scripts', 'accessibility_enqueue_scripts' );