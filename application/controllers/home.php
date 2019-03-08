<?php

class Home extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model('home_model');
        $this->load->library('encrypt');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'dashboard',
            'submenu'   => '',
            'privileges'=> $this->privileges()
        );
        $this->smarty->view('home.tpl',$data);
    }
    
    function changepassword(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => '',
                'submenu'   => '',
                'password'  => '',
                'privileges'=> $this->privileges()
            );
            $this->smarty->view('changepassword.tpl',$data);
        } else {
            if($this->form_validation->run('changepassword') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => '',
                    'submenu'   => '',
                    'password'  => '',
                    'privileges'=> $this->privileges()
                );
                $this->smarty->view('changepassword.tpl',$data);
            } else {
                $old_pwd = md5($this->input->post('old_password'));
                $new_pwd = md5($this->input->post('new_password'));
                $retype_pwd = md5($this->input->post('retype_password'));
                $cekOldPassword = $this->home_model->oldPassword($old_pwd);
                if($cekOldPassword){
                    if($new_pwd != $retype_pwd){
                        $data = array(
                            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                            'menu'  => '',
                            'submenu'   => '',
                            'password'  => 'beda',
                            'privileges'=> $this->privileges()
                        );
                        $this->smarty->view('changepassword.tpl',$data);
                    } else {
                        $update = array(
                            'password'  => $new_pwd,
                        );
                        $this->db->where('login_id',$this->session->userdata('login_id'))->update('gogo_login',$update);
                    }
                } else {
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => '',
                        'submenu'   => '',
                        'password'  => 'lama',
                        'privileges'=> $this->privileges()
                    );
                    $this->smarty->view('changepassword.tpl',$data);
                }
            }
        }
    }
    
}

?>
