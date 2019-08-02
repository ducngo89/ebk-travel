<?php
require_once(EBKTRAVEL_PLUGIN_DIR . '/libs/smarty/Smarty.class.php');

class base_controller
{
    public $viewbag;

    function __construct()
    { }

    public function view($view_path)
    {
        $smarty = new Smarty;
        //$smarty->force_compile = true;
        $smarty->debugging = true;
        $smarty->caching = false;
        $smarty->cache_lifetime = 120;

        $smarty->assign("viewbag", $this->viewbag);

        return $smarty->fetch($view_path);
    }
}
