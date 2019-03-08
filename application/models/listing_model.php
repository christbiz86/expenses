<?php

class Listing_model extends CI_Model {
    
    function getList(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('item_desc','asc')->from('gogo_item')->join('gogo_group','gogo_group.group_desc=gogo_item.group_desc')->get()->result();
    }
    
    function findData($id){
        return $this->db->where('item_id',$id)->from('gogo_item')->join('gogo_group','gogo_group.group_desc=gogo_item.group_desc')->get()->result();
    }
    
    function cekExisting($id){
        $sql = $this->db->where('item_id',$id)->get('gogo_request')->result();
        if($sql){
            return TRUE; 
        } else{
            return FALSE;
        }
    }
    
    function getGroup(){
        return $this->db->order_by('group_desc','asc')->group_by('group_desc')->get('gogo_group')->result();
    }
    
}

?>
