<?php

class User extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','user_model'));
        $this->load->helper('content_helper');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'user',
            'privileges'=> $this->privileges(),
            'list'  => $this->user_model->getList(),
        );
        $this->smarty->view('user/view.tpl',$data);
    }
    
    function delete($id){
        $this->db->where('login_id',$id)->delete('gogo_login');
        redirect('user/index'); 
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
                'submenu'   => 'user',
                'privileges'=> $this->privileges(),
                'cabang'=> $this->user_model->getData('cabang_nama','gogo_cabang'),
                'level' => $this->user_model->getData('level_desc','gogo_level'),
                'tambah'=> ''
            );
            $this->smarty->view('user/add.tpl',$data);
        } else {
            if($this->form_validation->run('adduser') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'user',
                    'privileges'=> $this->privileges(),
                    'cabang'=> $this->user_model->getData('cabang_nama','gogo_cabang'),
                    'level' => $this->user_model->getData('level_desc','gogo_level'),
                    'tambah'=> ''
                );
                $this->smarty->view('user/add.tpl',$data);
            } else {
                $email = $this->input->post('email');
                $cekEmail = $this->user_model->checkExisting($email);
                if($cekEmail == 0){
                    #$cabang = implode(",",$this->input->post('cabang'));
                    $insert = array(
                        'email'     => $this->input->post('email'),
                        'full_name' => $this->input->post('nama'),
                        'password'  => md5($this->input->post('password')),
                        'level_id'  => $this->input->post('level'),
                        'cabang_id' => $this->input->post('cabang'),
                        'status'    => $this->input->post('status'),
                        'divisi'    => $this->input->post('divisi'),
                        'company_id'=> $this->session->userdata('company_id')
                    );
                    $this->db->insert('gogo_login',$insert);
                    
                    $ins_priveleges = array(
                        'login_id'  => $this->user_model->getLastUser(),
                        'supplier'  => $this->input->post('supplier'),
                        'struktur'  => $this->input->post('struktur'),
                        'budget'    => $this->input->post('budget'),
                        'list_coa'  => $this->input->post('list_coa'),
                        'reporting' => $this->input->post('reporting'),
                        'libur'     => $this->input->post('libur'),
                        'request'   => $this->input->post('request'),
                        'income'    => $this->input->post('income'),
                        'scan'      => $this->input->post('scan'),
                        'stock'     => $this->input->post('stock'),
                        'accounting'=> $this->input->post('accounting'),
                    );
                    $this->db->insert('gogo_privileges',$ins_priveleges);
                    redirect('user/index');
                } else {
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'struktur',
                        'submenu'   => 'user',
                        'privileges'=> $this->privileges(),
                        'cabang'=> $this->user_model->getData('cabang_nama','gogo_cabang'),
                        'level' => $this->user_model->getData('level_desc','gogo_level'),
                        'tambah'=> 'existing'
                    );
                    $this->smarty->view('user/add.tpl',$data);
                }
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
                'menu'  => 'struktur',
                'submenu'   => 'user',
                'privileges'=> $this->privileges(),
                'cabang'=> $this->user_model->getData('cabang_nama','gogo_cabang'),
                'level' => $this->user_model->getData('level_desc','gogo_level'),
                'list'  => $this->user_model->findData('login',$id)
            );
            $this->smarty->view('user/edit.tpl',$data);
        } else {
            if($this->form_validation->run('adduser') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'struktur',
                    'submenu'   => 'user',
                    'privileges'=> $this->privileges(),
                    'cabang'=> $this->user_model->getData('cabang_nama','gogo_cabang'),
                    'level' => $this->user_model->getData('level_desc','gogo_level'),
                    'list'  => $this->user_model->findData('login',$id)
                );
                $this->smarty->view('user/edit.tpl',$data);
            } else {
                $cek = $this->user_model->findData('login',$id);
                $password_old = $cek[0]->password;
                $password_new = $this->input->post('password');
                $email = $this->input->post('email');
                $cabang = implode(",",$this->input->post('cabang'));
                if($password_new == $password_old){
                    $insert = array(
                        'email'     => $this->input->post('email'),
                        'full_name' => $this->input->post('nama'),
                        'level_id'  => $this->input->post('level'),
                        'divisi'    => $this->input->post('divisi'),
                        'cabang_id' => $cabang,
                        'status'    => $this->input->post('status')
                    );
                } else {
                    $insert = array(
                        'email'     => $this->input->post('email'),
                        'full_name' => $this->input->post('nama'),
                        'password'  => md5($this->input->post('password')),
                        'divisi'    => $this->input->post('divisi'),
                        'level_id'  => $this->input->post('level'),
                        'cabang_id' => $cabang,
                        'status'    => $this->input->post('status')
                    );
                }
                $this->db->where('login_id',$id)->update('gogo_login',$insert);
                $ins_priveleges = array(
                    'supplier'  => $this->input->post('supplier'),
                    'struktur'  => $this->input->post('struktur'),
                    'budget'    => $this->input->post('budget'),
                    'list_coa'  => $this->input->post('list_coa'),
                    'reporting' => $this->input->post('reporting'),
                    'libur'     => $this->input->post('libur'),
                    'request'   => $this->input->post('request'),
                    'income'    => $this->input->post('income'),
                    'scan'      => $this->input->post('scan'),
                    'stock'     => $this->input->post('stock'),
                    'accounting'=> $this->input->post('accounting'),
                );
                $this->db->where('login_id',$id)->update('gogo_privileges',$ins_priveleges);
                redirect('user/index');
            }
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'struktur',
            'submenu'   => 'user',
            'privileges'=> $this->privileges(),
            'list'  => $this->user_model->getList(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_user_".date('Y-m-d').".xls");
        $this->smarty->view('user/excel.tpl',$data);
    }
    
}

?>
