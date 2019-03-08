<?php

class Libur extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','libur_model'));
        $this->load->helper('content_helper');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'libur',
            'id'    => $this->session->userdata('login_id'),
            'list'  => $this->libur_model->getCuti($this->session->userdata('login_id')),
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('libur/view.tpl',$data);
    }
    
    function request(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'libur',
                'user'  => $this->libur_model->getUser(),
                'submenu'   => '',
                'error'     => '',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('libur/request.tpl',$data);
        } else {
            if($this->form_validation->run('addlibur') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'libur',
                    'user'  => $this->libur_model->getUser(),
                    'submenu'   => '',
                    'error'     => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('libur/request.tpl',$data);
            } else {
                $user_ganti = $this->input->post('user_ganti');
                $awal = date('Y-m-d', strtotime($this->input->post('tgl_awal')));
                $akhir = date('Y-m-d', strtotime($this->input->post('tgl_akhir')));
                $cekExistLibur = $this->libur_model->cekExist($user_ganti,$awal,$akhir);
                if($cekExistLibur){
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'libur',
                        'user'  => $this->libur_model->getUser(),
                        'submenu'   => '',
                        'error'     => 'ada',
                        'privileges'=> $this->privileges(),
                    );
                    $this->smarty->view('libur/request.tpl',$data);
                } else {
                    $insert = array(
                        'login_id'  => $this->session->userdata('login_id'),
                        'libur_start'   => $awal,
                        'libur_end'     => $akhir,
                        'uraian'    => $this->input->post('uraian'),
                        'user_ganti'=> $user_ganti,
                        'status'    => 'New',
                        'postdate'  => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('gogo_libur',$insert);
                    redirect('libur');
                }
            }
        }
    }
    
    function accept($libur_id){
        $update = array(
            'status'    => 'Approved',
            'approved_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('libur_id',$libur_id)->update('gogo_libur',$update);
        redirect('libur/index');
    }
    
    function cancel($libur_id){
        $update = array(
            'status'    => 'Cancel',
        );
        $this->db->where('libur_id',$libur_id)->update('gogo_libur',$update);
        redirect('libur/index');
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'libur',
            'id'    => $this->session->userdata('login_id'),
            'list'  => $this->libur_model->getCuti($this->session->userdata('login_id')),
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_libur_".date('Y-m-d').".xls");
        $this->smarty->view('libur/excel.tpl',$data);
    }
    
}

?>
