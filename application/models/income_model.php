<?php

class Income_model extends CI_Model {
    
    function getField($tabel,$where,$field){
        return $this->db->where($field,$where)->get('gogo_'.$tabel)->row();
    }
    
    function getLastRequest(){
        $sql = $this->db->order_by('income_id','desc')->limit(1)->get('gogo_income')->row();
        if($sql){
            return $sql->income_id;
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
        $loginDetail = $this->db->where('login_id',$id)->get('gogo_login')->row();
        $data = $this->db->where('gogo_login.level_id >=',$loginDetail->level_id)->from('gogo_login')->join('gogo_income','gogo_login.login_id = gogo_income.login_id')->join('gogo_item','gogo_item.item_id = gogo_income.item_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->get()->result();
        return $data;
    }
    
    function getRequest($id){
        $data = $this->db->where('gogo_income.income_id',$id)->from('gogo_login')->join('gogo_income','gogo_login.login_id = gogo_income.login_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_item','gogo_item.item_id=gogo_income.item_id')->join('gogo_supplier','gogo_supplier.supplier_id = gogo_income.supplier_id')->limit(1)->get()->result();
        return $data;
    }
    
    function getAllRequest($id, $from, $end){
        $loginDetail = $this->db->where('login_id',$id)->get('gogo_login')->row();
        if($from){
            $this->db->where('gogo_income.postdate >=',$from);
            $this->db->where('gogo_income.postdate <=',$end);
        }
        $data = $this->db->where('gogo_login.level_id >=',$loginDetail->level_id)->from('gogo_login')->join('gogo_income','gogo_login.login_id = gogo_income.login_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->get()->result();
        return $data;
    }
    
    function getSupplier(){
        return $this->db->order_by('supplier_name','asc')->get('gogo_supplier')->result();
    }
    
    function getItem(){
        return $this->db->where('item_status','Aktif')->order_by('item_desc','asc')->get('gogo_item')->result();
    }
    
    function getCabang($login_id){
        $sql = $this->db->where('login_id',$login_id)->get('gogo_login')->row();
        return $sql->cabang_id;
    }
    
}

?>
