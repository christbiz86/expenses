<?php

class Bank extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
        $this->load->model(array('home_model','bank_model'));
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'bank',
            'privileges'=> $this->privileges(),
            'list'  => $this->bank_model->getList()
        );
        $this->smarty->view('bank/view.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'bank',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('bank/add.tpl',$data);
        } else {
            if($this->form_validation->run('addbank') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'bank',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('bank/add.tpl',$data);
            } else {
                $insert = array(
                    'postdate'      => date('Y-m-d H:i:s'),
                    'company_id'    => $this->session->userdata('company_id'),
                    'bank_nama'     => $this->input->post('bank_nama'),
                    'bank_norek'    => $this->input->post('bank_norek'),
                    'item_kode'     => $this->input->post('item_kode'),
                );
                $this->db->insert('gogo_bank',$insert);
                redirect('bank');
            }
        }
    }
    
    function delete($id){
        $this->db->where('bank_id',$id)->delete('gogo_bank');
        redirect('bank/index'); 
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'bank',
            'privileges'=> $this->privileges(),
            'list'  => $this->bank_model->getList()
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_bank_".date('Y-m-d').".xls");
        $this->smarty->view('bank/excel.tpl',$data);
    }
    
    function edit($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'bank',
                'privileges'=> $this->privileges(),
                'list'  => $this->bank_model->findData($id)
            );
            $this->smarty->view('bank/edit.tpl',$data);
        } else {
            if($this->form_validation->run('addbank') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'bank',
                    'privileges'=> $this->privileges(),
                    'list'  => $this->bank_model->findData($id)
                );
                $this->smarty->view('bank/edit.tpl',$data);
            } else {
                $update = array(
                    'bank_nama'     => $this->input->post('bank_nama'),
                    'bank_norek'    => $this->input->post('bank_norek'),
                    'item_kode'     => $this->input->post('item_kode'),
                );
                $this->db->where('bank_id',$id)->update('gogo_bank',$update);
                redirect('bank/index');
            }
        }
    }
    
}

?>
