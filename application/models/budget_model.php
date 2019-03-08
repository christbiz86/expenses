<?php

class Budget_model extends CI_Model {
    
    function getList(){
        return $this->db->from('gogo_budget')->where('gogo_item.company_id',$this->session->userdata('company_id'))->join('gogo_item','gogo_item.item_id=gogo_budget.item_id')->order_by('postdate','desc')->get()->result();
    }
    
    function cekBudgetLimit($period, $jumlah){
        if($period=='daily'){
            return TRUE;
        } else {
            $cek = $this->db->where('company_id',$this->session->userdata('company_id'))->where('budget_period','daily')->limit(1)->order_by('postdate','desc')->from('gogo_budget')->join('gogo_cabang','gogo_budget.cabang_id=gogo_cabang.cabang_id')->get()->row();
            if(($cek->jumlah) < $jumlah){
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    
    function getItem(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->where('item_status','Aktif')->order_by('item_desc','asc')->get('gogo_item')->result();
    }
    
    function getData($order, $tabel){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by($order,'asc')->get($tabel)->result();
    }
    
}

?>
