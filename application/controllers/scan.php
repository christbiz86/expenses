<?php

class Scan extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','scan_model'));
        $this->load->helper('content_helper');
        $this->load->library('form_validation');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'scan',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'      => $this->scan_model->getList($this->session->userdata('login_id'))
        );
        $this->smarty->view('scan/view.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'scan',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('scan/add.tpl',$data);
        } else {
            if($this->form_validation->run('addscan') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'scan',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('scan/add.tpl',$data);
            } else {
                //upload file dokumen
                $config['upload_path'] = './resources/dokumen/';
                $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xlsx|xls|jpeg';
                $this->load->library('upload',$config);
                foreach($_FILES['dokumen'] as $key=>$val)
                {
                    $i = 1;
                    foreach($val as $v)
                    {
                        $field_name = "file_".$i;
                        $_FILES[$field_name][$key] = $v;
                        $i++;
                    }
                }
                unset($_FILES['dokumen']);
                $nama = array();
                foreach($_FILES as $field_name => $file)
                {
                    $seoname    = preg_replace('/\s[\s]+/','-',strip_tags($file['name']));    // Strip off multiple spaces
                    #$seoname    = preg_replace('/[\s\W]+/','-',$seoname);    // Strip off spaces and non-alpha-numeric
                    $seoname    = preg_replace('/^[\-]+/','',$seoname); // Strip off the starting hyphens
                    $seoname    = preg_replace('/[\-]+$/','',$seoname); // // Strip off the ending hyphens 
                    $nama[]  = (strip_tags($seoname));
                    if ( ! $this->upload->do_upload($field_name))
                    {
                       $this->upload->display_errors();
                    } else {
                       $this->upload->data();
                    }
                }
                $filedokumen = (implode(",",$nama));

                $insert = array(
                    'login_id'  => $this->session->userdata('login_id'),
                    'scan_nama' => $this->input->post('nama'),
                    'scan_dokumen'  => $filedokumen,
                    'postdate'  => date('Y-m-d H:i:s')
                );
                $this->db->insert('gogo_scan',$insert);
                redirect('scan');
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
                'menu'  => 'scan',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'list'      => $this->scan_model->getData($id)
            );
            $this->smarty->view('scan/edit.tpl',$data);
        } else {
            if($this->form_validation->run('addscan') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'scan',
                    'submenu'   => '',
                    'privileges'=> $this->privileges(),
                    'list'      => $this->scan_model->getData($id)
                );
                $this->smarty->view('scan/edit.tpl',$data);
            } else {
                $isidokumen = $this->input->post('dokumen');
                //upload file dokumen
                $config['upload_path'] = './resources/dokumen/';
                $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xlsx|xls|jpeg';
                $this->load->library('upload',$config);
                foreach($_FILES['dokumen'] as $key=>$val)
                {
                    $i = 1;
                    foreach($val as $v)
                    {
                        $field_name = "file_".$i;
                        $_FILES[$field_name][$key] = $v;
                        $i++;
                    }
                }
                unset($_FILES['dokumen']);
                $nama = array();
                foreach($_FILES as $field_name => $file)
                {
                    $seoname    = preg_replace('/\s[\s]+/','-',strip_tags($file['name']));    // Strip off multiple spaces
                    #$seoname    = preg_replace('/[\s\W]+/','-',$seoname);    // Strip off spaces and non-alpha-numeric
                    $seoname    = preg_replace('/^[\-]+/','',$seoname); // Strip off the starting hyphens
                    $seoname    = preg_replace('/[\-]+$/','',$seoname); // // Strip off the ending hyphens 
                    $nama[]  = (strip_tags($seoname));
                    if ( ! $this->upload->do_upload($field_name))
                    {
                       $this->upload->display_errors();
                    } else {
                       $this->upload->data();
                    }
                }
                $filter = array_filter($nama, 'strlen');
                $total = array_merge($isidokumen, $filter);
                $filedokumen = (implode(",",$total));

                $insert = array(
                    'scan_nama' => $this->input->post('nama'),
                    'scan_dokumen'  => $filedokumen,
                );
                $this->db->where('scan_id',$id)->update('gogo_scan',$insert);
                redirect('scan');
            }
        }
    }
    
    function delete($id){
        $this->db->where('scan_id',$id)->delete('gogo_scan');
        redirect('scan/index'); 
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'scan',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
            'list'      => $this->scan_model->getList($this->session->userdata('login_id'))
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_scan_".date('Y-m-d').".xls");
        $this->smarty->view('scan/excel.tpl',$data);
    }
    
}

?>
