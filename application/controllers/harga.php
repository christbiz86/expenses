<?php

class Harga extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model'));
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'harga',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('harga/view.tpl',$data);
    }
    
    function done(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'harga',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('harga/done.tpl',$data);
    }
    
}

?>
