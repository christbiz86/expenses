<?php

class Scan_model extends CI_Model{
    
    function getList($login_id){
        return $this->db->where('login_id',$login_id)->order_by('scan_nama','asc')->get('gogo_scan')->result();
    }
    
    function getData($id){
        return $this->db->where('scan_id',$id)->get('gogo_scan')->result();
    }
    
}

?>
