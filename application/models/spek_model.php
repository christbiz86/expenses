<?php

class Spek_model extends CI_Model {
    
    function getDescSpek(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('spek_desc_name','asc')->get('gogo_spek_desc')->result();
    }
    
    function findData($tabel,$field,$where){
        return $this->db->where($field,$where)->get('gogo_'.$tabel)->result();
    }
    
    function getStock(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->get('gogo_stock')->result();
    }
    
}

?>
