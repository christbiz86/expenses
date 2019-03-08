<?php

class Struktur_model extends CI_Model {
    
    function getList($tabel){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->get('gogo_'.$tabel)->result();
    }
    
    function findData($tabel,$id){
        return $this->db->where($tabel.'_id',$id)->get('gogo_'.$tabel)->result();
    }
    
}
?>
