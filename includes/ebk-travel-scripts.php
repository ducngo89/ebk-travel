<?php
 //Add scripts
 function ebk_add_scripts(){
    //Add css files 1
    wp_enqueue_style('ebk-style',plugins_url().'/ebk-travel/css/style.css');
    //Add js files
    wp_enqueue_script('ebk-script',plugins_url().'/ebk-travel/js/script.js');
}

add_action('wp_enqueue_scripts','ebk_add_scripts');