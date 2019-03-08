<?php

class Struktur extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','struktur_model'));
    }
    
    function cabang(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'cabang',
            'privileges'=> $this->privileges(),
            'list'  => $this->struktur_model->getList('level'),
            'cabang'=> $this->struktur_model->getList('cabang'),
        );
        $this->smarty->view('struktur/cabang.tpl',$data);
    }
    
    function addlevel(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'cabang',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('struktur/addlevel.tpl',$data);
        } else {
            if($this->form_validation->run('addlevel') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'cabang',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('struktur/addlevel.tpl',$data);
            } else {
                $insert = array(
                    'level_desc'    => $this->input->post('desc'),
                    'level_position'=> $this->input->post('level'),
                    'company_id'    => $this->session->userdata('company_id'),
                    'level_postdate'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('gogo_level',$insert);
                redirect('struktur/cabang');
            }
        }
    }
    
    function editlevel($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'cabang',
                'privileges'=> $this->privileges(),
                'list'  => $this->struktur_model->findData('level',$id),
            );
            $this->smarty->view('struktur/editlevel.tpl',$data);
        } else {
            if($this->form_validation->run('addlevel') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'cabang',
                    'privileges'=> $this->privileges(),
                    'list'  => $this->struktur_model->findData('level',$id),
                );
                $this->smarty->view('struktur/editlevel.tpl',$data);
            } else {
                $insert = array(
                    'level_desc'    => $this->input->post('desc'),
                    'level_position'=> $this->input->post('level'),
                    'level_position_old'    => $this->input->post('level_old'),
                    'level_postdate'=> date('Y-m-d H:i:s')
                );
                $this->db->where('level_id',$id)->update('gogo_level',$insert);
                redirect('struktur/cabang');
            }
        }
    }
    
    function deletelevel($id){
        $this->db->where('level_id',$id)->delete('gogo_level');
        redirect('struktur/cabang'); 
    }
    
    function addcabang(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'cabang',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('struktur/addcabang.tpl',$data);
        } else {
            if($this->form_validation->run('addcabang') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'cabang',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('struktur/addcabang.tpl',$data);
            } else {
                $insert = array(
                    'cabang_nama'   => $this->input->post('cabang'),
                    'company_id'    => $this->session->userdata('company_id')
                );
                $this->db->insert('gogo_cabang',$insert);
                $id_cabang = $this->db->insert_id();
                
                //cek existing cabang
                $cek_cabang = $this->db->where('company_id',$this->session->userdata('company_id'))->get('gogo_cabang')->num_rows();
                if($cek_cabang == 0){
                    $update_cabang = array(
                        'cabang_id' => $id_cabang
                    );
                    $this->db->where('login_id',$this->session->userdata('login_id'))->update('gogo_login',$update_cabang);
                }
                redirect('struktur/cabang');
            }
        }
    }
    
    function editcabang($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'struktur',
                'submenu'   => 'cabang',
                'privileges'=> $this->privileges(),
                'list'  => $this->struktur_model->findData('cabang',$id),
            );
            $this->smarty->view('struktur/editcabang.tpl',$data);
        } else {
            if($this->form_validation->run('addcabang') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'cabang',
                    'privileges'=> $this->privileges(),
                    'list'  => $this->struktur_model->findData('cabang',$id),
                );
                $this->smarty->view('struktur/editcabang.tpl',$data);
            } else {
                $insert = array(
                    'cabang_nama'   => $this->input->post('cabang'),
                );
                $this->db->where('cabang_id',$id)->update('gogo_cabang',$insert);
                redirect('struktur/cabang');
            }
        }
    }
    
    function deletecabang($id){
        $this->db->where('cabang_id',$id)->delete('gogo_cabang');
        redirect('struktur/cabang'); 
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'cabang',
            'privileges'=> $this->privileges(),
            'list'  => $this->struktur_model->getList('level'),
            'cabang'=> $this->struktur_model->getList('cabang'),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_struktur_".date('Y-m-d').".xls");
        $this->smarty->view('struktur/excel.tpl',$data);
    }
    
}

?>
