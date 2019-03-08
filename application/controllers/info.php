<?php

class Info extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function about_us(){
        $this->smarty->view('info/about-us.tpl');
    }
    
}

?>
