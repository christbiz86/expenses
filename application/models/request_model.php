<?php

class Request_model extends CI_Model {
    
    function getField($tabel,$where,$field){
        return $this->db->where($field,$where)->get('gogo_'.$tabel)->row();
    }
    
    function cekBudget($jumlah_pd,$tanggal,$item_id){
        $jumlah = array_filter($jumlah_pd);
        $total_jumlah = count($jumlah) - 1;
        foreach($item_id as $row){
            if($row){
                $sql = $this->db->where('item_id',$row)->order_by('postdate','desc')->limit(1)->get('gogo_budget')->row();
                $tempo = $sql->budget_period;
                if($tempo=='daily'){
                    $request_total = 0;
                    $tahun = substr($tanggal,0,4);
                    $bulan = substr($tanggal,5,2);
                    $tanggal = substr($tanggal,8,2);
                    $cek_request = $this->db->where('item_id',$row)->where('MONTH(postdate)',$bulan)->where('YEAR(postdate)',$tahun)->where('DAY(postdate)',$tanggal)->from('gogo_request')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->get()->result();
                    foreach($cek_request as $data){
                        $request_total = $request_total + $this->encrypt->decode($data->jumlah);
                    }
                    if($cek_request){
                        $sisa_budget = $sql->jumlah - $request_total;
                    } else {
                        $sisa_budget = $sql->jumlah;
                    }
                    for($i=0;$i<$total_jumlah;$i++){
                        if($jumlah[$i] > $sisa_budget){
                            //over-budget
                            $tipe_budget[] = 'Non-budget';
                        } else {
                            $tipe_budget[] = 'Budget';
                        }
                    }
                } elseif($tempo=='weekly') {
                    $tahun = substr($tanggal,0,4);
                    $request_total = 0;
                    $duedt = explode("-",$tanggal);
                    $date = mktime(0, 0, 0, $duedt[1], substr($duedt[2], 0 ,2),$duedt[0]);
                    $week_awal = (int)date('W', $date);
                    $week_akhir = $week_awal + 1;
                    $week_start = new DateTime();
                    $week_end = new DateTime();
                    $week_start->setISODate($tahun,$week_awal);
                    $week_end->setISODate($tahun,$week_akhir);
                    $awal = $week_start->format('Y-m-d');
                    $akhir = $week_end->format('Y-m-d');
                    $cek_request = $this->db->where('item_id',$row)->where('postdate >=',$awal)->where('postdate <=',$akhir)->from('gogo_request')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->get()->result();
                    foreach($cek_request as $data){
                        $request_total = $request_total + $this->encrypt->decode($data->jumlah);
                    }
                    if($cek_request){
                        $sisa_budget = $sql->jumlah - $request_total;
                    } else {
                        $sisa_budget = $sql->jumlah;
                    }
                    for($i=0;$i<$total_jumlah;$i++){
                        if($jumlah[$i] > $sisa_budget){
                            //over-budget
                            $tipe_budget[] = 'Non-budget';
                        } else {
                            $tipe_budget[] = 'Budget';
                        }
                    }
                } else {
                    $request_total = 0;
                    $budget = $sql->jumlah;
                    $tahun = substr($tanggal,0,4);
                    $bulan = substr($tanggal,5,2);
                    $cek_request = $this->db->where('item_id',$row)->where('MONTH(postdate)',$bulan)->where('YEAR(postdate)',$tahun)->from('gogo_request')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->get()->result();
                    foreach($cek_request as $data){
                        $request_total = $request_total + $this->encrypt->decode($data->jumlah);
                    }
                    if($cek_request){
                        $sisa_budget = $sql->jumlah - $request_total;
                    } else {
                        $sisa_budget = $sql->jumlah;
                    }
                    for($i=0;$i<$total_jumlah;$i++){
                        if($jumlah[$i] > $sisa_budget){
                            //over-budget
                            $tipe_budget[] = 'Non-budget';
                        } else {
                            $tipe_budget[] = 'Budget';
                        }
                    }
                }
            }
        }
        return $tipe_budget;
    }
    
//    function cekBudgetOld($jumlah,$tanggal,$item_id){
//        $sql = $this->db->where('item_id',$item_id)->order_by('postdate','desc')->limit(1)->get('gogo_budget')->row();
//        if($sql->budget_period){
//            $tempo = $sql->budget_period;
//            if($tempo=='daily'){
//                if($jumlah > $sql->jumlah){
//                    return FALSE;
//                } else {
//                    return TRUE;
//                }
//            } elseif($tempo=='weekly') {
//                $tahun = substr($tanggal,0,4);
//                $total = 0;
//                $duedt = explode("-",$tanggal);
//                $date = mktime(0, 0, 0, $duedt[1], substr($duedt[2], 0 ,2),$duedt[0]);
//                $week_awal = (int)date('W', $date);
//                $week_akhir = $week_awal + 1;
//                $week_start = new DateTime();
//                $week_end = new DateTime();
//                $week_start->setISODate($tahun,$week_awal);
//                $week_end->setISODate($tahun,$week_akhir);
//                $awal = $week_start->format('Y-m-d');
//                $akhir = $week_end->format('Y-m-d');
//                $cek = $this->db->where('postdate >=',$awal)->where('postdate <=',$akhir)->get('gogo_request')->result();
//                foreach($cek as $row){
//                    $total = $total + $this->encrypt->decode($row->jumlah);
//                }
//                if($jumlah < $total){
//                    return FALSE;
//                } else {
//                    return TRUE;
//                }
//            } else {
//                $total = 0;
//                $budget = $sql->jumlah;
//                $tahun = substr($tanggal,0,4);
//                $bulan = substr($tanggal,5,2);
//                $cek = $this->db->where('item_id',$item_id)->where('MONTH(postdate)',$bulan)->where('YEAR(postdate)',$tahun)->get('gogo_request')->result();
//                foreach($cek as $row){
//                    $total = $total + $this->encrypt->decode($row->jumlah);
//                }
//                $all_total = $total + $jumlah;
//                if($all_total > $budget){
//                    return FALSE;
//                } else {
//                    return TRUE;
//                }
//            }
//        } else {
//            //tidak ada budget yg di-input
//            return FALSE;
//        }
//    }
    
    function getLastRequest(){
        $sql = $this->db->order_by('request_id','desc')->limit(1)->get('gogo_request')->row();
        if($sql){
            return $sql->request_id;
        } else {
            return '1';
        }
    }
    
    function getLastSupplier(){
        $sql = $this->db->order_by('supplier_id','desc')->limit(1)->get('gogo_supplier')->row();
        if($sql){
            return $sql->supplier_id;
        } else {
            return '1';
        }
    }
    
    function getData($id){
        $loginDetail = $this->db->where('login_id',$id)->from('gogo_login')->join('gogo_level','gogo_level.level_id=gogo_login.level_id')->get()->row();
        $data = $this->db->where('gogo_login.cabang_id',$loginDetail->cabang_id)->where('gogo_login.company_id',$loginDetail->company_id)->where('gogo_level.level_position >=',$loginDetail->level_position)->from('gogo_request')->join('gogo_login','gogo_request.login_id=gogo_login.login_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_request_item','gogo_request_item.request_id = gogo_request.request_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->join('gogo_level','gogo_level.level_id=gogo_login.level_id')->get()->result();
        return $data;
    }
    
    function getRequest($id){
        #->join('gogo_item','gogo_item.item_id=gogo_request.item_id')->join('gogo_supplier','gogo_supplier.supplier_id = gogo_request.supplier_id')
        $data = $this->db->where('gogo_request.request_id',$id)->group_by('gogo_request.request_id')->from('gogo_request')->join('gogo_login','gogo_login.login_id = gogo_request.login_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->get()->result();

        #$data = $this->db->where('gogo_request.request_id',$id)->from('gogo_request')->join('gogo_login','gogo_login.login_id = gogo_request.login_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->join('gogo_item','gogo_item.item_id=gogo_request.item_id')->join('gogo_supplier','gogo_supplier.supplier_id = gogo_request.supplier_id')->order_by('gogo_request_approve.date_approve','desc')->limit(1)->get()->result();
        return $data;
    }
    
    function getAllRequest($id, $from, $end){
        $loginDetail = $this->db->where('login_id',$id)->get('gogo_login')->row();
        if($from){
            $this->db->where('gogo_request.postdate >=',$from);
            $this->db->where('gogo_request.postdate <=',$end);
        }
        #$data = $this->db->where('gogo_login.cabang_id',$loginDetail->cabang_id)->where('gogo_login.company_id',$loginDetail->company_id)->where('gogo_login.level_id >=',$loginDetail->level_id)->order_by('gogo_request_approve.date_approve','desc')->from('gogo_login')->join('gogo_request','gogo_login.login_id = gogo_request.login_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->get()->result();
        if($loginDetail->divisi == 'FIN' || $loginDetail->divisi == 'MGMT'){
            $data = $this->db->where('gogo_login.company_id',$loginDetail->company_id)->order_by('gogo_request_approve.date_approve','desc')->from('gogo_login')->join('gogo_request','gogo_login.login_id = gogo_request.login_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->get()->result();
        } else {
            $data = $this->db->where('gogo_login.cabang_id',$loginDetail->cabang_id)->where('gogo_login.company_id',$loginDetail->company_id)->order_by('gogo_request_approve.date_approve','desc')->from('gogo_login')->join('gogo_request','gogo_login.login_id = gogo_request.login_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->get()->result();
        }
        return $data;
    }
    
    function getSupplier(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('supplier_name','asc')->get('gogo_supplier')->result();
    }
    
    function getItem(){
        return $this->db->where('item_status','Aktif')->where('company_id',$this->session->userdata('company_id'))->order_by('item_desc','asc')->get('gogo_item')->result();
    }
    
    function getCabang($login_id){
        $sql = $this->db->where('login_id',$login_id)->get('gogo_login')->row();
        return $sql->cabang_id;
    }
    
    function getLastApprove(){
        $sql = $this->db->order_by('request_approve_id','desc')->limit(1)->get('gogo_request_approve')->row();
        if($sql){
            return $sql->request_approve_id;
        } else {
            return '1';
        }
    }
    
    function cekLevel($login_id){
        $sql = $this->db->where('login_id',$login_id)->get('gogo_login')->row();
        return $sql->level_id;
    }
    
    function cekPosisiLevel($login_id,$divisi){
        if($divisi){
            $sql = $this->db->where('login_id',$login_id)->where('divisi',$divisi)->from('gogo_login')->join('gogo_level','gogo_login.level_id=gogo_level.level_id')->get()->row();
        } else {
            $sql = $this->db->where('login_id',$login_id)->from('gogo_login')->join('gogo_level','gogo_login.level_id=gogo_level.level_id')->get()->row();
        }
        if($sql){
            return $sql->level_position;
        } else {
            return FALSE;
        }
    }
    
    function findEmail($login_id){
        $email = '';
        $sql = $this->db->where('login_id',$login_id)->from('gogo_login')->join('gogo_level','gogo_level.level_id=gogo_login.level_id')->get()->row();
        $level = $this->db->where('company_id',$sql->company_id)->where('level_position <',$sql->level_position)->get('gogo_level')->result();
        foreach($level as $row){
            $hasil[] = $row->level_id;
        }
        $getEmail = $this->db->or_where_in('level_id',$hasil)->where('status','TRUE')->get('gogo_login')->result();
        foreach($getEmail as $row1){
            $email = $row1->email.','.$email;
        }
        return $email;
    }
    
    function getRequestItem($request_id){
        return $this->db->where('request_id',$request_id)->get('gogo_request_item')->result();
    }    
    
    function getLastJurnal(){
        $sql = $this->db->order_by('jurnal_no','desc')->limit(1)->get('gogo_accounting')->row();
        if($sql){
            return $sql->jurnal_no + 1;
        } else {
            return 1;
        }
    }
    
}

?>
