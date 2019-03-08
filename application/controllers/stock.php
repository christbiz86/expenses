<?php

class Stock extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->load->dbforge();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','spek_model'));
        $this->load->helper('content_helper');
        $this->load->library('form_validation');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'stock',
            'column'=> $this->spek_model->getDescSpek(),
            'list'  => $this->spek_model->getStock(),
            'submenu'   => 'viewstock',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('stock/view.tpl',$data);
    }
    
    function delete($id){
        $this->db->where('stock_id',$id)->delete('gogo_stock');
        redirect('stock/index'); 
    }
    
    function spek(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'stock',
            'list'  => $this->spek_model->getDescSpek(),
            'submenu'   => 'spek',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('stock/spek-view.tpl',$data);
    }
    
    function spekedit($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'stock',
                'list'  => $this->spek_model->findData('spek_desc','spek_desc_id',$id),
                'submenu'   => 'spek',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('stock/spek-edit.tpl',$data);
        } else {
            $list = $this->spek_model->findData('spek_desc','spek_desc_id',$id);
            if($this->form_validation->run('addspekdesc') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'stock',
                    'list'  => $list,
                    'submenu'   => 'spek',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('stock/spek-edit.tpl',$data);
            } else {
                foreach($list as $row){
                    $old_column = $row->spek_desc_name;
                }
                $update = array(
                    'spek_desc_name' => $this->input->post('desc'),
                );
                $this->db->where('spek_desc_id',$id)->update('gogo_spek_desc',$update);
                //update column - table stock
                $fields = array(
                    $old_column => array(
                        'name' => $this->input->post('desc'),
                        'type' => 'VARCHAR(250)',
                    ),
                );
                $this->dbforge->modify_column('gogo_stock', $fields);
                redirect('stock/spek');
            }
        }
    }
    
    function spekadd(){
        $submit = $this->input->post('submit');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'stock',
                'submenu'   => 'spek',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('stock/spek-add.tpl',$data);
        } else {
            if($this->form_validation->run('addspekdesc') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'stock',
                    'submenu'   => 'spek',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('stock/spek-add.tpl',$data);
            } else {
                $update = array(
                    'spek_desc_name' => $this->input->post('desc'),
                );
                $this->db->insert('gogo_spek_desc',$update);
                //add column - gogo stock
                $fields = array(
                    $this->input->post('desc') => array('type' => 'VARCHAR(250)')
                );
                $this->dbforge->add_column('gogo_stock', $fields);
                redirect('stock/spek');
            }
        }
    }
    
    function add(){
        $submit = $this->input->post('submit');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'stock',
                'spek'  => $this->spek_model->getDescSpek(),
                'submenu'   => 'addstock',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('stock/add.tpl',$data);
        } else {
            $no = 1;
            $sql = $this->db->query("SHOW COLUMNS FROM gogo_stock")->result();
            foreach($sql as $row){
                if($no > 1){
                    $insert[$row->Field] = $this->input->post($row->Field);
                }
                $no = $no + 1;
            }
            $this->db->insert('gogo_stock',$insert);
            redirect('stock');
        }
    }
    
    function edit($id){
        $submit = $this->input->post('submit');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'stock',
                'column'=> $this->spek_model->getDescSpek(),
                'list'  => $this->spek_model->findData('stock','stock_id',$id),
                'submenu'   => 'addstock',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('stock/edit.tpl',$data);
        } else {
            $no = 1;
            $sql = $this->db->query("SHOW COLUMNS FROM gogo_stock")->result();
            foreach($sql as $row){
                if($no > 1){
                    $insert[$row->Field] = $this->input->post($row->Field);
                }
                $no = $no + 1;
            }
            $this->db->where('stock_id',$id)->update('gogo_stock',$insert);
            redirect('stock');
        }
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'stock',
            'column'=> $this->spek_model->getDescSpek(),
            'list'  => $this->spek_model->getStock(),
            'submenu'   => 'viewstock',
            'privileges'=> $this->privileges(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_stock_".date('Y-m-d').".xls");
        $this->smarty->view('stock/excel.tpl',$data);
    }
    
}

?>
