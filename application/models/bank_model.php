<?php

class Bank_model extends CI_Model {
   
    function getList(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('postdate','desc')->get('gogo_bank')->result();
    }
    
    function findData($id){
        return $this->db->where('bank_id',$id)->get('gogo_bank')->result();
    }
    
}
?>
