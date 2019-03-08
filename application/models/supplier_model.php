<?php

class Supplier_model extends CI_Model {
   
    function getList(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->get('gogo_supplier')->result();
    }
    
    function delete($id){
        $this->db->where('supplier_id',$id)->delete('gogo_supplier');
        redirect('supplier');
    }
    
    function getRow($id){
        return $this->db->where('supplier_id',$id)->get('gogo_supplier')->result();
    }
    
    function cekExisting($id){
        $sql = $this->db->where('supplier_id',$id)->get('gogo_request')->result();
        if($sql){
            return TRUE; 
        } else{
            return FALSE;
        }
    }
    
}
?>
