<?php
require_once(EBKTRAVEL_PLUGIN_DIR.'/public/controllers/base-controller.php');

class tour_controller extends base_controller { 
    public function __construct() {
        parent::__construct();
    }

    public function search_box(){
        $this->viewbag['test']='hello';
        return $this->view(EBKTRAVEL_PLUGIN_DIR.'/public/views/search-box.tpl');
    }
    
}
