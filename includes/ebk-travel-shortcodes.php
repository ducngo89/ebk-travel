<?php
function ebktravel_shortcodes_init()
{
    require_once (EBKTRAVEL_PLUGIN_DIR.'/public/controllers/tour-controller.php');
    function searchbox_shortcode($atts = [], $content = null)
    {
        $tourController = new tour_controller();
        return $tourController->search_box();
    }
    add_shortcode('searchbox', 'searchbox_shortcode');
}
add_action('init', 'ebktravel_shortcodes_init');
