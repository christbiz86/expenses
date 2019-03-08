<?php

class Request extends CI_Controller{
    function __construct() {
        parent::__construct();
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model','request_model'));
        $this->load->helper('content_helper');
        $this->load->library('encrypt');
    }
    
    function index(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->request_model->getData($this->session->userdata('login_id')),
            'cabang'=> $this->request_model->getCabang($this->session->userdata('login_id')),
            'menu'  => 'request',
            'submenu'   => 'view',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('request/view.tpl',$data);
    }
    
    function detail($id){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->request_model->getRequest($id),
            'menu'  => 'request',
            'submenu'   => '',
            'privileges'=> $this->privileges(),
        );
        $this->smarty->view('request/detail.tpl',$data);
    }
    
    function add(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'request',
                'submenu'   => 'add',
                'privileges'=> $this->privileges(),
                'budget'    => '',
                'supplier'  => $this->request_model->getSupplier(),
                'item'      => $this->request_model->getItem(),
            );
            $this->smarty->view('request/add.tpl',$data);
        } else {
            if($this->form_validation->run('addrequest') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'menu'  => 'request',
                    'submenu'   => 'add',
                    'privileges'=> $this->privileges(),
                    'budget'    => '',
                    'supplier'  => $this->request_model->getSupplier(),
                    'item'      => $this->request_model->getItem(),
                );
                $this->smarty->view('request/add.tpl',$data);
            } else {
                $jumlah = str_replace('.', '', $this->input->post('jumlah'));
                $tanggal = date('Y-m-d H:i:s');
                $item = $this->input->post('item');
                $cekbudget = $this->request_model->cekBudget($jumlah, $tanggal, $item);
                if($cekbudget){
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
//                        $seoname    = preg_replace('/\s[\s]+/','-',strip_tags($file['name']));    // Strip off multiple spaces
//                        $seoname    = preg_replace('/[\s\W]+/','-',$seoname);    // Strip off spaces and non-alpha-numeric
//                        $seoname    = preg_replace('/^[\-]+/','',$seoname); // Strip off the starting hyphens
//                        $seoname    = preg_replace('/[\-]+$/','',$seoname); // // Strip off the ending hyphens 
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
                    
                    $login = $this->request_model->getField('login',$this->input->post('nama'),'full_name');
                    $insert = array(
                        'tipe'      => $this->input->post('tipe'),
                        'uraian'    => $this->input->post('uraian'),
                        'terbilang' => $this->encrypt->encode($this->input->post('terbilang')),
                        'login_id'  => $this->session->userdata('login_id'),
                        'payment'   => $this->input->post('payment'),
                        'comment'   => $this->input->post('comment'),
                        'penerima'  => $this->encrypt->encode($this->input->post('penerima')),
                        'bank'      => $this->encrypt->encode($this->input->post('bank')),
                        'no_rek'    => $this->encrypt->encode($this->input->post('no_rek')),
                        'supplier_id'   => $this->input->post('supplier'),
                        'dokumen'   => $filedokumen,
                        'postdate'  => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('gogo_request',$insert);

                    $x = 0;
                    foreach($item as $isi_item){
                        if($isi_item){
                            $insert_item = array(
                                'request_id'    => $this->request_model->getLastRequest(),
                                'item_id'       => $isi_item,
                                'jumlah'        => $this->encrypt->encode($jumlah[$x]),
                                'budget'        => $cekbudget[$x],
                            );
                            $x++;
                            $this->db->insert('gogo_request_item',$insert_item);
                        }
                    }
                    
                    if($this->input->post('supplier') == 'Others'){
                        $supplier = array(
                            'supplier_name' => $this->input->post('supplier_other')
                        ); 
                        $this->db->insert('gogo_supplier',$supplier);
                    }

                    $insert_app = array(
                        'request_id'    => $this->request_model->getLastRequest(),
                        'approved_by'   => '0',
                        'status'        => 'New',
                        'date_approve'  => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('gogo_request_approve',$insert_app);
                    
                    //send email
                    $config = Array(
                        'protocol' => 'mail',
                        'smtp_host' => 'mail.celebesmineral.com',
                        'smtp_port' => 25,
                        'smtp_user' => 'formpd@celebesmineral.com',
                        'smtp_pass' => '123456',
                        'mailtype'  => 'html', 
                        'charset'   => 'iso-8859-1'
                    );
                    $this->load->library('email', $config);
                    $getemail = $this->request_model->findEmail($this->session->userdata('login_id'));
                    $message = "Permohonan dana baru telah dibuat oleh ".$this->input->post('nama')."\n";
                    $message .= "Segera cek halaman admin Anda. \n";
                    $message .= "Terima kasih.";
                    $this->email->from('noreply@expensegogo.com', 'ExpenseGoGo');
                    $this->email->to($getemail); 
                    $this->email->cc('christian@celebesmineral.com'); 
                    $this->email->subject('Permintaan Dana Baru - ExpenseGoGo');
                    $this->email->message($message);	
                    $this->email->send();
                    redirect('request/index');
                } else {
                    //overbudget
                    $data = array(
                        'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                        'menu'  => 'request',
                        'submenu'   => 'add',
                        'privileges'=> $this->privileges(),
                        'budget'    => 'over',
                        'supplier'  => $this->request_model->getSupplier(),
                        'item'      => $this->request_model->getItem(),
                    );
                    $this->smarty->view('request/add.tpl',$data);
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
                'list'  => $this->request_model->getRequest($id),
                'list_item' => $this->request_model->getRequestItem($id),
                'menu'  => 'request',
                'submenu'   => '',
                'budget'    => '',
                'privileges'=> $this->privileges(),
                'id'        => $id,
                'supplier'  => $this->request_model->getSupplier(),
                'item'      => $this->request_model->getItem(),
            );
            $this->smarty->view('request/edit.tpl',$data);
        } else {
            if($this->form_validation->run('addrequest') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'list'  => $this->request_model->getRequest($id),
                    'menu'  => 'request',
                    'submenu'   => '',
                    'budget'    => '',
                    'privileges'=> $this->privileges(),
                    'id'        => $id,
                    'supplier'  => $this->request_model->getSupplier(),
                    'item'      => $this->request_model->getItem(),
                );
                $this->smarty->view('request/edit.tpl',$data);
            } else {
                $jumlah = str_replace('.', '', $this->input->post('jumlah'));
                $tanggal = date('Y-m-d H:i:s');
                $item = $this->input->post('item');
                $cekbudget = $this->request_model->cekBudget($jumlah, $tanggal, $item);
                
                if($this->input->post('supplier')=='Others'){
                    $supplier_name = $this->input->post('supplier_other');
                    $ins_supplier = array(
                        'supplier_name' => $supplier_name,
                    );
                    $this->db->insert('gogo_supplier',$ins_supplier);
                    $supplier_id = $this->request_model->getLastRequest();
                } else {
                    $supplier_id = $this->input->post('supplier');
                }
                
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
                    
                $insert = array(
                    'tipe'      => $this->input->post('tipe'),
                    'uraian'    => $this->input->post('uraian'),
                    'terbilang' => $this->encrypt->encode($this->input->post('terbilang')),
                    'payment'   => $this->input->post('payment'),
                    'comment'   => $this->input->post('comment'),
                    'penerima'  => $this->encrypt->encode($this->input->post('penerima')),
                    'bank'      => $this->encrypt->encode($this->input->post('bank')),
                    'no_rek'    => $this->encrypt->encode($this->input->post('no_rek')),
                    'supplier_id'   => $this->input->post('supplier'),
                    'dokumen'   => $filedokumen,
                    'postdate'  => date('Y-m-d H:i:s')
                );
                $this->db->where('request_id',$id)->update('gogo_request',$insert);
                $this->db->where('request_id',$id)->delete('gogo_request_item');
                
                $x = 0;
                foreach($item as $isi_item){
                    if($isi_item){
                        var_dump($x);
                        $insert_item = array(
                            'request_id'    => $id,
                            'item_id'       => $isi_item,
                            'jumlah'        => $this->encrypt->encode($jumlah[$x]),
                            'budget'        => $cekbudget[$x],
                        );
                        $x = $x+1;
                        $this->db->insert('gogo_request_item',$insert_item);
                    }
                }
                redirect('request/index');
            }
        }
    }
    
    function cancel($id){
        $update = array(
            'status'    => 'Canceled'
        );
        $this->db->where('request_id',$id)->update('gogo_request',$update);
        redirect('request/index');
    }
    
    function approval(){
        $submit = $this->input->post('submit');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        if(empty($submit)){
            $data = array(
                'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                'menu'  => 'request',
                'cabang'=> $this->request_model->getCabang($this->session->userdata('login_id')),
                'list'  => $this->request_model->getAllRequest($this->session->userdata('login_id'),'',''),
                'sesi_login'=> $this->session->userdata('login_id'),
                'level_login'=> $this->request_model->cekPosisiLevel($this->session->userdata('login_id'),''),
                'submenu'   => 'approve',
                'privileges'=> $this->privileges(),
            );
            $this->smarty->view('request/approve.tpl',$data);
        } else {
            $from = date('Y-m-d', strtotime($this->input->post('tgl_awal'))).' 00:00:00';
            $end = date('Y-m-d', strtotime($this->input->post('tgl_akhir'))).' 00:00:00';
            if($this->form_validation->run('approvepd') == FALSE){
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'list'  => $this->request_model->getAllRequest($this->session->userdata('login_id'),'',''),
                    'menu'  => 'request',
                    'cabang'=> $this->request_model->getCabang($this->session->userdata('login_id')),
                    'sesi_login'=> $this->session->userdata('login_id'),
                    'level_login'=> $this->request_model->cekPosisiLevel($this->session->userdata('login_id'),''),
                    'submenu'   => 'approve',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('request/approve.tpl',$data);
            } else {
                $data = array(
                    'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
                    'list'  => $this->request_model->getAllRequest($this->session->userdata('login_id'),$from,$end),
                    'menu'  => 'request',
                    'cabang'=> $this->request_model->getCabang($this->session->userdata('login_id')),
                    'sesi_login'=> $this->session->userdata('login_id'),
                    'level_login'=> $this->request_model->cekPosisiLevel($this->session->userdata('login_id'),''),
                    'submenu'   => 'approve',
                    'privileges'=> $this->privileges(),
                );
                $this->smarty->view('request/approve.tpl',$data);
            }
        }
    }
    
    function accept($request_id){
        $insert = array(
            'request_id'    => $request_id,
            'status'        => 'Approved',
            'approved_by'   => $this->session->userdata('login_id'),
            'date_approve'  => date('Y-m-d H:i:s')
        );
        $this->db->insert('gogo_request_approve',$insert);
        
        $cek_level = $this->request_model->cekPosisiLevel($this->session->userdata('login_id'),'MGMT');

        if($cek_level == '1'){
            $update_bbk_status = array(
                'status_bbk'    => 'Ready',
                'bbk_createddate'=> date('Y-m-d H:i:s')
            );
            $this->db->where('request_id',$request_id)->update('gogo_request',$update_bbk_status);
            
            //insert jurnal accounting
            $getPdDetail = $this->db->where('request_id',$request_id)->get('gogo_request')->row();
            $insert_acct = array(
//                'request_approve_id'    => $this->request_model->getLastApprove(),
                'request_id'=> $request_id,
                'jurnal_no' => $this->request_model->getLastJurnal(),
                'jurnal_createddate'    => $getPdDetail->postdate,
            );
            $this->db->insert('gogo_accounting',$insert_acct);
        }
        redirect("request/approval");
    }
    
    function reject($request_id){
        $insert = array(
            'request_id'    => $request_id,
            'status'        => 'Decline',
            'approved_by'   => $this->session->userdata('login_id'),
            'date_approve'  => date('Y-m-d H:i:s')
        );
        $this->db->insert('gogo_request_approve',$insert);
        redirect("request/approval");
    }
    
    function excel(){
        $data = array(
            'nama'  => $this->home_model->getName($this->session->userdata('login_id')),
            'list'  => $this->request_model->getData($this->session->userdata('login_id')),
            'cabang'=> $this->request_model->getCabang($this->session->userdata('login_id')),
            'menu'  => 'request',
            'submenu'   => 'view',
            'privileges'=> $this->privileges(),
        );
        header("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=data_request_".date('Y-m-d').".xls");
        $this->smarty->view('request/excel.tpl',$data);
    }
    
}

?>
