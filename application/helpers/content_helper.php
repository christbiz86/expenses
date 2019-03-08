<?php

function dec($isi){
    $ci = &get_instance();
    return $ci->encrypt->decode($isi);
}

function showDate($content){
    $angka = substr($content,5,2);
    switch ($angka) {
        case '01': $bln = 'Januari';break;
        case '02': $bln = 'Februari';break;
        case '03': $bln = 'Maret';break;
        case '04': $bln = 'April';break;
        case '05': $bln = 'Mei';break;
        case '06': $bln = 'Juni';break;
        case '07': $bln = 'Juli';break;
        case '08': $bln = 'Agustus';break;
        case '09': $bln = 'September';break;
        case '10': $bln = 'Oktober';break;
        case '11': $bln = 'November';break;
        case '12': $bln = 'Desember';break;
        default:break;
    }
    $tgl = substr($content,8,2);
    $tahun = substr($content,0,4);
    $jam = substr($content,11,5);
    return $tgl.' '.$bln.' '.$tahun.' '.$jam;
}

function getField($select,$field,$where,$tabel){
    $ci = &get_instance();
    $sql = $ci->db->where($where,$field)->get('gogo_'.$tabel)->result();
    foreach($sql as $row){
        return $row->$select;
    }
}

function getCabang($id){
    $ci = &get_instance();
    $hasil = '';
    $list = explode(",", $id);
    foreach($list as $row){
        $sql = $ci->db->select('cabang_nama')->where('cabang_id',$row)->get('gogo_cabang')->row();
        if($sql){
            $hasil = $sql->cabang_nama.', '.$hasil;
        }
    }
    return substr($hasil, 0, -2);
}

function getStatus($request_id){
    $ci = &get_instance();
    $hasil = '';
    $ci->db->select('gogo_login.full_name,gogo_request_approve.*');
    $sql = $ci->db->where('request_id',$request_id)->order_by('date_approve','desc')->from('gogo_request_approve')->join('gogo_login','gogo_login.login_id = gogo_request_approve.approved_by')->get()->result();
    if($sql){
        foreach($sql as $row){
            $hasil = $hasil.'- '.$row->status.' by '.$row->full_name.' '.showDate($row->date_approve).'<br>';
        }
    } else {
        $hasil = 'Baru';
    }
    return $hasil;
}

function formatRupiah($nilaiUang){
    $nilaiRupiah 	= "";
    $jumlahAngka 	= strlen($nilaiUang);
    while($jumlahAngka > 3)
    {
        $nilaiRupiah = "." . substr($nilaiUang,-3) . $nilaiRupiah;
        $sisaNilai = strlen($nilaiUang) - 3;
        $nilaiUang = substr($nilaiUang,0,$sisaNilai);
        $jumlahAngka = strlen($nilaiUang);
    }
    if($nilaiUang < 0){
        $nilaiUang = $nilaiUang * -1;
        return "- Rp. " . $nilaiUang . $nilaiRupiah;
    } else {
        return "Rp. " . $nilaiUang . $nilaiRupiah;
    }
}

function hitungSisaBudget($budget, $expense, $period, $cabang){
    $ci = &get_instance();
    $total_request = 0;
    $tanggal = date('Y-m-d');
    if($period == 'daily'){
        $where = array(
            'gogo_item.item_id'  => $expense,
            'gogo_request_approve.status !='    => 'Decline',
        );
        $like = array(
            'gogo_request.postdate' => $tanggal,
        );
    } else if ($period == 'weekly'){
        $tahun = substr($tanggal,0,4);
        $duedt = explode("-",$tanggal);
        $date = mktime(0, 0, 0, $duedt[1], $duedt[2],$duedt[0]);
        $week_awal = (int)date('W', $date);
        $week_akhir = $week_awal + 1;
        $week_start = new DateTime();
        $week_end = new DateTime();
        $week_start->setISODate($tahun,$week_awal);
        $week_end->setISODate($tahun,$week_akhir);
        $awal = $week_start->format('Y-m-d');
        $akhir = $week_end->format('Y-m-d');
        $where = array(
            'gogo_item.item_id'      => $expense,
            'gogo_request.postdate >='  => $awal, 
            'gogo_request.postdate <='  => $akhir, 
            'gogo_request_approve.status !='    => 'Decline',
        );
        $like = array();
    } else {
        $where = array(
            'gogo_item.item_id'          => $expense,
            'month(gogo_request.postdate)'  => substr($tanggal,5,2),
            'year(gogo_request.postdate)'   => substr($tanggal,0,4),
            'gogo_request_approve.status !='    => 'Decline',
        );
        $like = array();
    }
    
    $all_request = $ci->db->like($like)->where($where)->from('gogo_request')->join('gogo_request_approve','gogo_request.request_id=gogo_request_approve.request_id')->join('gogo_request_item','gogo_request.request_id=gogo_request_item.request_id')->join('gogo_item','gogo_item.item_id=gogo_request_item.item_id')->get()->result();
    
    foreach($all_request as $row){
        $cekcabang = $ci->db->where('login_id',$row->login_id)->get('gogo_login')->row();
        if(strpos($cekcabang->cabang_id,$cabang) !== false) {
            $total_request = $total_request + ($ci->encrypt->decode($row->jumlah));
        }
    }
    return formatRupiah($budget - $total_request);
}

function getScan($dokumen){
    $hasil = "";
    $data = explode(",",$dokumen);
    foreach($data as $row){
        $link = "<a href=".site_url("resources/dokumen/".$row).">".$row."</a>";
        $hasil = $hasil."- ".$link."<br>";
    }
    return $hasil;
}

function getTotalJurnal($jurnal_no){
    $total = 0;
    $ci = &get_instance();
    $sql = $ci->db->where('jurnal_no',$jurnal_no)->from('gogo_accounting')->join('gogo_request','gogo_request.request_id = gogo_accounting.request_id')->get()->result();
    foreach($sql as $row){
        $total = $total + dec($row->jumlah);
    }
    return $total;
}

function getBankData($id){
    $ci = &get_instance();
    $sql = $ci->db->where('bank_id',$id)->get('gogo_bank')->row();
    return $sql->bank_nama.' - '.$sql->bank_norek;
}

function getMultiItem($request_id,$field,$menu=null){
    $ci = &get_instance();
    $hasil = '';
    $sql = $ci->db->where('request_id',$request_id)->from('gogo_request_item')->join('gogo_item','gogo_item.item_id=gogo_request_item.item_id')->get()->result();
    foreach($sql as $row){
        if($field=='jumlah'){
            $all_total = dec($row->$field);
            $tampil = 'Rp. '.number_format($all_total,0,',','.').' <span style="color:red">('.($row->budget).')</span>';
        } else {
            $tampil = $row->$field;
        }
        $hasil = $hasil."- ".$tampil."<br>";
    }
    if($menu){
        return str_replace('- ','',$hasil);
    } else {
        return $hasil;
    }
}

function getTotalPd($request_id){
    $total = 0;
    $ci = &get_instance();
    $sql = $ci->db->where('request_id',$request_id)->from('gogo_request_item')->join('gogo_item','gogo_item.item_id=gogo_request_item.item_id')->get()->result();
    foreach($sql as $row){
        $total = $total + dec($row->jumlah);
    }
    return 'Rp. '.number_format($total,0,',','.');
}

function cekLevelApprove($divisi,$request_id){
    $ci = &get_instance();
    $loginDetail = $ci->db->where('login_id',$ci->session->userdata('login_id'))->from('gogo_login')->join('gogo_level','gogo_level.level_id=gogo_login.level_id')->get()->row();
    $sql = $ci->db->where('gogo_request_approve.status','Approved')->where('request_id',$request_id)->order_by('date_approve','desc')->from('gogo_request_approve')->join('gogo_login','gogo_login.login_id = gogo_request_approve.approved_by')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->get()->row();
    
    var_dump($sql->approved_by);
    var_dump($ci->session->userdata('login_id'));
    var_dump($sql->level_position);
    var_dump($sql->full_name);
    var_dump($sql->divisi);
    var_dump($loginDetail->level_position);
    var_dump($loginDetail->full_name);
    var_dump($loginDetail->divisi);
    
    #if(($sql->level_position == 1 || $sql->divisi == $loginDetail->divisi) && ($loginDetail->level_position - $sql->level_position = 1) && ($sql->divisi=='USER' && $divisi=='FIN') || ($sql->divisi=='FIN' && $divisi=='ACCT')){
    if($sql->divisi == $loginDetail->divisi && ($sql->approved_by != $ci->session->userdata('login_id')) && ($sql->level_position - $loginDetail->level_position == 1)){
        var_dump('iii');
        return TRUE;
    } else {
        if($sql->level_position == 1 && $loginDetail->level_position == 3 && ($sql->divisi=='USER' && $loginDetail->divisi=='FIN')){
            return TRUE;
        } else {
            if($loginDetail->divisi == 'MGMT'){
                $total = preg_replace("/[^0-9]/","",getTotalPd($sql->request_id));
                $cekMatriks = $ci->db->where('request_id',$sql->request_id)->where('limit_bawah <=',$total)->where('limit_atas >=',$total)->from('gogo_request_item')->join('gogo_item','gogo_item.item_id=gogo_request_item.item_id')->join('gogo_group','gogo_group.group_desc=gogo_item.group_desc')->get()->row();
                if(($cekMatriks->approval_id == $ci->session->userdata('login_id')) && $sql->level_position == 1 && ($sql->approved_by != $ci->session->userdata('login_id'))){
                    var_dump('aaa');
                    return TRUE;
                } else {
                    var_dump('bbb');
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        }
    }
}

function getLevelPosisi($login_id){
    $ci = &get_instance();
    if($login_id){
        $sql = $ci->db->where('login_id',$login_id)->from('gogo_login')->join('gogo_level','gogo_level.level_id=gogo_login.level_id')->get()->row();
        return $sql->level_position;
    } else {
        return FALSE;
    }
}   

?>
