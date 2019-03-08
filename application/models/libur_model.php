<?php

class Libur_model extends CI_Model {
    
    function getUser(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('full_name','asc')->get('gogo_login')->result();
    }
    
    function getCuti($id){
        $this->db->select('gogo_libur.uraian,gogo_libur.libur_start,gogo_libur.libur_end,gogo_libur.status,gogo_login.full_name,gogo_libur.postdate,gogo_libur.libur_id,gogo_libur.login_id,gogo_libur.user_ganti,gogo_libur.approved_date');
        return $this->db->where('gogo_libur.user_ganti',$id)->or_where('gogo_libur.login_id',$id)->from('gogo_libur')->join('gogo_login','gogo_libur.user_ganti = gogo_login.login_id')->get()->result();
    }
    
    function cekExist($user_ganti,$awal,$akhir){
        return $this->db->where('login_id',$user_ganti)->where('libur_start >=',$awal)->where('libur_end <=',$akhir)->get('gogo_libur')->result();
    }
    
}

?>
