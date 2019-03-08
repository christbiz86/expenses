<?php

class Supplier extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','supplier_model'));
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'supplier',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->supplier_model->getList()
        );
        $this->smarty->view('supplier/view.tpl',$data);
    }
    
    function delete($id){
        $ceksupplier = $this->supplier_model->cekExisting($id);
        if(!$ceksupplier){
            $this->db->where('supplier_id',$id)->delete('gogo_supplier');
        }
        redirect('supplier/index'); 
    }
    
    function detail($id){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'supplier',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->supplier_model->getRow($id)
        );
        $this->smarty->view('supplier/detail.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'supplier',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('supplier/add.tpl',$data);
        } else {
            if($this->form_validation->run('addsupplier') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'supplier',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('supplier/add.tpl',$data);
            } else {
                $insert = array(
                    'company_id'    => $this->session->userdata('company_id'),
                    'supplier_name' => $this->input->post('name'),
                    'supplier_address'  => $this->input->post('alamat'),
                    'supplier_company'  => $this->input->post('company'),
                    'supplier_email'    => $this->input->post('email'),
                    'supplier_city' => $this->input->post('kota'),
                    'supplier_telp' => $this->input->post('telp'),
                    'supplier_fax'  => $this->input->post('fax'),
                );
                $this->db->insert('gogo_supplier',$insert);
                redirect('supplier');
            }
        }
    }
    
    function edit($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'supplier',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'list'  => $this->supplier_model->getRow($id)
            );
            $this->smarty->view('supplier/edit.tpl',$data);
        } else {
            if($this->form_validation->run('addsupplier') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'supplier',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                    'list'  => $this->supplier_model->getRow($id)
                );
                $this->smarty->view('supplier/edit.tpl',$data);
            } else {
                $insert = array(
                    'supplier_name' => $this->input->post('name'),
                    'supplier_address'  => $this->input->post('alamat'),
                    'supplier_company'  => $this->input->post('company'),
                    'supplier_email'    => $this->input->post('email'),
                    'supplier_city' => $this->input->post('kota'),
                    'supplier_telp' => $this->input->post('telp'),
                    'supplier_fax'  => $this->input->post('fax'),
                );
                $this->db->where('supplier_id',$id)->update('gogo_supplier',$insert);
                redirect('supplier');
            }
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'supplier',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->supplier_model->getList()
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_supplier_".date('Y-m-d').".xls");
        $this->smarty->view('supplier/excel.tpl',$data);
    }
    
    function pdf(){
        
    }
    
}

?>
