<?php
function ebktravel_shortcodes_init()
{
    function searchbox_shortcode($atts = [], $content = null)
    {
        return "hello";
    }
    add_shortcode('searchbox', 'searchbox_shortcode');
}
add_action('init', 'ebktravel_shortcodes_init');
