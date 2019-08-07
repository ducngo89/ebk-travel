<?php
 //Add scripts
 function ebk_add_scripts(){
    //Add css files
    wp_enqueue_style('ebk-style-custom',plugins_url().'/ebk-travel/public/content/css/style.css');
    wp_enqueue_style('ebk-style-bootstrap',plugins_url().'/ebk-travel/public/content/bootstrap/css/bootstrap.min.css');
    //Add js files
    wp_enqueue_script('ebk-script',plugins_url().'/ebk-travel/public/content/js/script.js');
}

add_action('wp_enqueue_scripts','ebk_add_scripts');