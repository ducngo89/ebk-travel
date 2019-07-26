<?php
 //Add scripts
 function ebk_add_scripts(){
    //Add css file
    wp_enqueue_style('ebk-style',plugins_url().'/ebk-travel/css/style.css');
    //Add js file
    wp_enqueue_script('ebk-script',plugins_url().'/ebk-travel/js/script.js');
}

add_action('wp_enqueue_scripts','ebk_add_scripts');