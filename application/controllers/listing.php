<?php

class Listing extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','listing_model'));
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'listing',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->listing_model->getList()
        );
        $this->smarty->view('listing/excel.tpl',$data);
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'listing',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->listing_model->getList()
        );
        $this->smarty->view('listing/view.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'listing',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'group' => $this->listing_model->getGroup(),
            );
            $this->smarty->view('listing/add.tpl',$data);
        } else {
            if($this->form_validation->run('additem') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'listing',
                    'group' => $this->listing_model->getGroup(),
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('listing/add.tpl',$data);
            } else {
                $insert = array(
                    'item_desc' => $this->input->post('desc'),
                    'item_status'=> $this->input->post('status'),
                    'item_kode  '=> $this->input->post('kode'),
                    'item_tipe'  => $this->input->post('tipe'),
                    'group_id'   => $this->input->post('group_id'),
                    'company_id'    => $this->session->userdata('company_id')
                );
                $this->db->insert('gogo_item',$insert);
                redirect('listing');
            }
        }
    }
    
    function edit($id){
        var_dump($this->listing_model->findData($id));
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'listing',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'list'  => $this->listing_model->findData($id),
                'group' => $this->listing_model->getGroup()
            );
            $this->smarty->view('listing/edit.tpl',$data);
        } else {
            if($this->form_validation->run('additem') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'listing',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                    'list'  => $this->listing_model->findData($id),
                    'group' => $this->listing_model->getGroup()
                );
                $this->smarty->view('listing/edit.tpl',$data);
            } else {
                $insert = array(
                    'item_desc' => $this->input->post('desc'),
                    'item_status'=> $this->input->post('status'),
                    'item_kode  '=> $this->input->post('kode'),
                    'item_tipe'  => $this->input->post('tipe'),
                    'group_id'   => $this->input->post('group_id'),
                );
                $this->db->where('item_id',$id)->update('gogo_item',$insert);
                redirect('listing');
            }
        }
    }
    
    function delete($id){
        $ceklisting = $this->listing_model->cekExisting($id);
        if(!$ceklisting){
            $this->db->where('item_id',$id)->delete('gogo_item');
        }
        redirect('listing/index'); 
    }
    
}

?>
