<?php

class Accounting extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
        $this->load->model(array('home_model','accounting_model'));
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'accounting',
            'list'  => $this->accounting_model->getListJurnal(),
            'submenu'   => 'viewjurnal',
            'privileges'=> $this->privileges(),
            'list_bank' => $this->accounting_model->getListBank()
        );
        $this->smarty->view('accounting/viewjurnal.tpl',$data);
    }
    
    function listjurnal(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'accounting',
            'list'  => $this->accounting_model->getAllJurnal(),
            'submenu'   => 'listjurnal',
            'privileges'=> $this->privileges(),
            'list_bank' => $this->accounting_model->getListBank()
        );
        $this->smarty->view('accounting/viewjurnal.tpl',$data);
    }
    
    function addjurnal($accounting_id){
        $jurnal_no = $this->accounting_model->getLastJurnalNo();
        $tgl_pd = $this->accounting_model->getDatePd($accounting_id);
        $update = array(
            'status'    => 'Jurnal',
            'jurnal_no' => $jurnal_no,
            'bank_id'   => $this->input->post('bank_id'),
            'jurnal_createddate'    => $tgl_pd
        );
        $this->db->where('accounting_id',$accounting_id)->update('gogo_accounting',$update);
//        $req_id = $this->input->post('request_id');
//        foreach($req_id as $row){
//            $update = array(
//                'status'    => 'Jurnal',
//                'jurnal_no' => $jurnal_no,
//                'bank_id'   => $this->input->post('bank_id'),
//                'jurnal_createddate'    => $tgl_pd
//            );
//            $this->db->where('request_id',$row)->update('gogo_accounting',$update);
//        }
        redirect('accounting/index');
    }
    
    function releasebbk($jurnal_no){
        $cek = $this->db->where('jurnal_no',$jurnal_no)->get('gogo_accounting')->row();
        $update = array(
            'status_bbk'    => 'Finish'
        );
        $this->db->where('request_id',$cek->request_id)->update('gogo_request',$update);
        redirect('accounting/listjurnal');
    }
            
    function detailjurnalbalik($jurnal_no){
        $data = array(
            'list'  => $this->accounting_model->getJurnalDetail($jurnal_no),
            'no_jurnal' => $jurnal_no,
            'company'   => $this->accounting_model->getJurnalCompany($jurnal_no)
        );
        $this->smarty->view('accounting/detailjurnalbalik.tpl',$data);
    }
    
    function detailjurnal($jurnal_no){
        $data = array(
            'list'  => $this->accounting_model->getJurnalDetail($jurnal_no),
            'no_jurnal' => $jurnal_no,
            'company'   => $this->accounting_model->getJurnalCompany($jurnal_no)
        );
        $this->smarty->view('accounting/detailjurnal.tpl',$data);
    }
    
    function showbbk($jurnal_no){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->accounting_model->getJurnalDetail($jurnal_no),
            'no_jurnal' => $jurnal_no,
            'company'   => $this->accounting_model->getJurnalCompany($jurnal_no)
        );
        $this->smarty->view('accounting/showdetailbbk.tpl',$data);
    }
    
    function printbbk(){
        $no_cheque = $this->input->post('no_cheque');
        if($no_cheque){
            $update = array(
                'jatuh_tempo'   => date('Y-m-d', strtotime($this->input->post('jatuh_tempo'))),
                'no_cheque'     => $this->input->post('no_cheque'),
                'bank_id'       => $this->input->post('bank_id'),
            );
            $request = $this->input->post('request_id');
            foreach($request as $row){
                $this->db->where('request_id',$row)->update('gogo_accounting',$update);
                $upd_req = array(
                    'status_bbk'    => 'Printed'
                );
                $this->db->where('request_id',$row)->update('gogo_request',$upd_req);
            }
        }
        redirect('accounting/index');
    }
    
    function bbk(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'accounting',
            'list'  => $this->accounting_model->getListBbk(),
            'submenu'   => 'bbk',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('accounting/bbk.tpl',$data);
    }
    
    function matriks(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'menu'  => 'accounting',
            'submenu'   => 'matriks',
            'privileges'=> $this->privileges(),
            'list'  => $this->accounting_model->getMatriks()
        );
        $this->smarty->view('accounting/matriks-view.tpl',$data);
    }
    
    function matriksadd(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'accounting',
                'submenu'   => 'matriks',
                'status'    => '',
                'privileges'=> $this->privileges(),
                'approval'  => $this->accounting_model->getListApproval()
            );
            $this->smarty->view('accounting/matriks-add.tpl',$data);
        } else {
            if($this->form_validation->run('addmatriks') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'accounting',
                    'submenu'   => 'matriks',
                    'status'    => '',
                    'privileges'=> $this->privileges(),
                    'approval'  => $this->accounting_model->getListApproval()
                );
                $this->smarty->view('accounting/matriks-add.tpl',$data);
            } else {
                $limit_bawah = str_replace('.', '', $this->input->post('limit_bawah'));
                $limit_atas = str_replace('.', '', $this->input->post('limit_atas'));
                if($limit_atas <= $limit_bawah){
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'accounting',
                        'submenu'   => 'matriks',
                        'status'    => 'error',
                        'privileges'=> $this->privileges(),
                        'approval'  => $this->accounting_model->getListApproval()
                    );
                    $this->smarty->view('accounting/matriks-add.tpl',$data);
                } else {
                    $insert = array(
                        'group_desc'    => $this->input->post('group_desc'),
                        'limit_bawah'   => $limit_bawah,
                        'limit_atas'    => $limit_atas,
                        'approval_id'   => $this->input->post('approval_id')
                    );
                    $this->db->insert('gogo_group',$insert);
                    redirect('accounting/matriks');
                }
            }
        }
    }
    
    function matriksedit($id){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'accounting',
                'submenu'   => 'matriks',
                'status'    => '',
                'privileges'=> $this->privileges(),
                'approval'  => $this->accounting_model->getListApproval(),
                'list'  => $this->accounting_model->getDetailMatriks($id)
            );
            $this->smarty->view('accounting/matriks-edit.tpl',$data);
        } else {
            if($this->form_validation->run('addmatriks') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'accounting',
                    'submenu'   => 'matriks',
                    'status'    => '',
                    'privileges'=> $this->privileges(),
                    'approval'  => $this->accounting_model->getListApproval(),
                    'list'  => $this->accounting_model->getDetailMatriks($id)
                );
                $this->smarty->view('accounting/matriks-edit.tpl',$data);
            } else {
                $limit_bawah = str_replace('.', '', $this->input->post('limit_bawah'));
                $limit_atas = str_replace('.', '', $this->input->post('limit_atas'));
                if($limit_atas <= $limit_bawah){
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'accounting',
                        'submenu'   => 'matriks',
                        'status'    => 'error',
                        'privileges'=> $this->privileges(),
                        'approval'  => $this->accounting_model->getListApproval(),
                        'list'  => $this->accounting_model->getDetailMatriks($id)
                    );
                    $this->smarty->view('accounting/matriks-edit.tpl',$data);
                } else {
                    $insert = array(
                        'group_desc'    => $this->input->post('group_desc'),
                        'limit_bawah'   => $limit_bawah,
                        'limit_atas'    => $limit_atas,
                        'approval_id'   => $this->input->post('approval_id')
                    );
                    $this->db->where('group_id',$id)->update('gogo_group',$insert);
                    redirect('accounting/matriks');
                }
            }
        }
    }
    
    function matriksdelete($id){
        $this->db->where('group_id',$id)->delete('gogo_group');
        redirect('accounting/matriks');
    }
    
//    function excel(){
//        $data = array(
//            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
//            'menu'  => 'supplier',
//            'submenu'   => '',
//            'privileges'=> $this->privileges(),
//            'list'  => $this->budget_model->getList(),
//        );
//        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
//        header("Content-Type: application/vnd.ms-excel");
//        header("Content-Disposition: attachment; filename=data_jurnal_".date('Y-m-d').".xls");
//        $this->smarty->view('accounting/excel.tpl',$data);
//    }
    
}

?>
