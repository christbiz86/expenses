<?php

class Income extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','income_model'));
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->income_model->getData($this->session->userdata('login_id')),
            'cabang'=> $this->income_model->getCabang($this->session->userdata('login_id')),
            'menu'  => 'income',
            'submenu'   => 'viewincome',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('income/view.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'income',
                'submenu'   => 'addincome',
                'privileges'=> $this->privileges(),
                'budget'    => '',
                'supplier'  => $this->income_model->getSupplier(),
                'item'      => $this->income_model->getItem(),
            );
            $this->smarty->view('income/add.tpl',$data);
        } else {
            if($this->form_validation->run('addrequest') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'income',
                    'submenu'   => 'addincome',
                    'privileges'=> $this->privileges(),
                    'budget'    => '',
                    'supplier'  => $this->income_model->getSupplier(),
                    'item'      => $this->income_model->getItem(),
                );
                $this->smarty->view('income/add.tpl',$data);
            } else {
                $jumlah = str_replace('.', '', $this->input->post('jumlah'));
                $tanggal = date('Y-m-d H:i:s');
                $item = $this->input->post('item');
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
                    #$nama[]  = (strip_tags($seoname));
                    $nama[]  = ($file['name']);
                    if ( ! $this->upload->do_upload($field_name))
                    {
                       $this->upload->display_errors();
                    } else {
                       $this->upload->data();
                    }
                }
                $filedokumen = (implode(",",$nama));

                $login = $this->income_model->getField('login',$this->input->post('nama'),'full_name');
                $insert = array(
                    'jumlah'    => $this->encrypt->encode($jumlah),
                    'uraian'    => $this->input->post('uraian'),
                    'terbilang' => $this->encrypt->encode($this->input->post('terbilang')),
                    'login_id'  => $this->session->userdata('login_id'),
                    'payment'   => $this->input->post('payment'),
                    'pembeli'   => $this->encrypt->encode($this->input->post('pembeli')),
                    'bank'      => $this->input->post('bank'),
                    'no_rek'    => $this->input->post('no_rek'),
                    'supplier_id'   => $this->input->post('customer'),
                    'item_id'   => $this->input->post('item'),
                    'dokumen'   => $filedokumen,
                    'postdate'  => date('Y-m-d H:i:s')
                );
                $this->db->insert('gogo_income',$insert);
                redirect('income');
            }
        }
    }
    
    function delete($id){
        $this->db->where('income_id',$id)->delete('gogo_income');
        redirect('income/index'); 
    }
    
    function detail($id){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->income_model->getRequest($id),
            'menu'  => 'income',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('income/detail.tpl',$data);
    }
    
    function edit($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'list'  => $this->income_model->getRequest($id),
                'menu'  => 'income',
                'submenu'   => '',
                'privileges'=> $this->privileges(),
                'id'        => $id,
                'supplier'  => $this->income_model->getSupplier(),
                'item'      => $this->income_model->getItem(),
            );
            $this->smarty->view('income/edit.tpl',$data);
        } else {
            if($this->form_validation->run('addrequest') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'list'  => $this->income_model->getRequest($id),
                    'menu'  => 'income',
                    'submenu'   => '',
                    'budget'    => '',
                    'privileges'=> $this->privileges(),
                    'id'        => $id,
                    'supplier'  => $this->income_model->getSupplier(),
                    'item'      => $this->income_model->getItem(),
                );
                $this->smarty->view('income/edit.tpl',$data);
            } else {
                $jumlah = str_replace('.', '', $this->input->post('jumlah'));
                $login = $this->income_model->getField('login',$this->input->post('nama'),'full_name');
                if($this->input->post('supplier')=='Others'){
                    $supplier_name = $this->input->post('supplier_other');
                    $ins_supplier = array(
                        'supplier_name' => $supplier_name,
                    );
                    $this->db->insert('gogo_supplier',$ins_supplier);
                    $supplier_id = $this->income_model->getLastSupplier();
                } else {
                    $supplier_id = $this->input->post('supplier');
                }
                $insert = array(
                    'jumlah'    => $jumlah,
                    'uraian'    => $this->input->post('uraian'),
                    'terbilang' => $this->input->post('terbilang'),
                    'login_id'  => $this->session->userdata('login_id'),
                    'payment'   => $this->input->post('payment'),
                    'pembeli'   => $this->input->post('pembeli'),
                    'bank'      => $this->input->post('bank'),
                    'no_rek'    => $this->input->post('no_rek'),
                    'supplier_id'   => $supplier_id,
                    'item_id'   => $this->input->post('item'),
                    'dokumen'   => $filedokumen,
                    'postdate'  => date('Y-m-d H:i:s')
                );
                $this->db->where('income_id',$id)->update('gogo_income',$insert);
                redirect('income');
            }
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->income_model->getData($this->session->userdata('login_id')),
            'cabang'=> $this->income_model->getCabang($this->session->userdata('login_id')),
            'menu'  => 'income',
            'submenu'   => 'viewincome',
            'privileges'=> $this->privileges(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_income_".date('Y-m-d').".xls");
        $this->smarty->view('income/excel.tpl',$data);
    }
    
}

?>
