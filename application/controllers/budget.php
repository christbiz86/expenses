<?php

class Budget extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','budget_model'));
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->budget_model->getList(),
            'menu'  => 'budget',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('budget/view.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'budget',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'error' => '',
                'item'  => $this->budget_model->getItem(),
                'cabang'=> $this->budget_model->getData('cabang_nama','gogo_cabang'),
            );
            $this->smarty->view('budget/add.tpl',$data);
        } else {
            if($this->form_validation->run('addbudget') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'budget',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                    'error' => '',
                    'item'  => $this->budget_model->getItem(),
                    'cabang'=> $this->budget_model->getData('cabang_nama','gogo_cabang'),
                );
                $this->smarty->view('budget/add.tpl',$data);
            } else {
                $period = $this->input->post('period');
                $jumlah = str_replace('.', '', $this->input->post('jumlah'));
                $limitBudget = $this->budget_model->cekBudgetLimit($period,$jumlah);
                if($limitBudget){
                    $cabang = implode(",",$this->input->post('cabang'));
                    $insert = array(
                        'budget_period' => $period,
                        'jumlah'        => $jumlah,
                        'item_id'       => $this->input->post('item'),
                        'postdate'      => date('Y-m-d H:i:s'),
                        'cabang_id'     => $cabang,
                    );
                    $this->db->insert('gogo_budget',$insert);
                    redirect('budget');
                } else {
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'budget',
                        'submenu'   => '',
                        'privileges'=> $this->privileges(),
                        'error' => 'over',
                        'item'  => $this->budget_model->getItem(),
                        'cabang'=> $this->budget_model->getData('cabang_nama','gogo_cabang'),
                    );
                    $this->smarty->view('budget/add.tpl',$data);
                }
            }
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'supplier',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'  => $this->budget_model->getList(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_budget_".date('Y-m-d').".xls");
        $this->smarty->view('budget/excel.tpl',$data);
    }
    
}

?>
