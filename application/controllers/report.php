<?php

class Report extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','report_model'));
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
    }
    
    function index(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'report',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('report/view.tpl',$data);
        } else {
            if($this->form_validation->run('approvepd') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'report',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('report/view.tpl',$data);
            } else {
                $start = date('Y-m-d', strtotime($this->input->post('tgl_awal'))).' 00:00:00';
                $end = date('Y-m-d', strtotime($this->input->post('tgl_akhir'))).' 00:00:00';
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'report',
                    'list'  => $this->report_model->showReport($start,$end,$this->session->userdata('login_id')),
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('report/showall.tpl',$data);
            }
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'report',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_report_".date('Y-m-d').".xls");
        $this->smarty->view('report/excel.tpl',$data);
    }
    
}

?>
