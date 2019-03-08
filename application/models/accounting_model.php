<?php

class Accounting_model extends CI_Model {
    
    function getLastJurnalNo(){
        $sql = $this->db->order_by('jurnal_no','desc')->limit(1)->get('gogo_accounting')->row();
        return $sql->jurnal_no + 1;
    }
    
    function getListJurnal(){
        return $this->db->where('gogo_request.status_bbk','Ready')->order_by('jurnal_createddate','desc')->from('gogo_accounting')->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id')->get()->result();
    }
    
    function getAllJurnal(){
        return $this->db->order_by('jurnal_createddate','desc')->from('gogo_accounting')->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id')->get()->result();
    }
    
    function getJurnalDetail($jurnal_no){
        $this->db->where('jurnal_no',$jurnal_no)->from('gogo_accounting');
        return $this->db->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id')->join('gogo_request_item','gogo_request_item.request_id=gogo_request.request_id')->get()->result();
    }
    
    function getJurnalCompany($jurnal_no){
        $this->db->where('jurnal_no',$jurnal_no)->from('gogo_accounting');
        $this->db->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id');
        $sql = $this->db->join('gogo_login','gogo_request.login_id=gogo_login.login_id')->get()->row();
        return $sql->company_id;
    }
    
    function getDatePd($accounting_id){
        $this->db->where('accounting_id',$accounting_id)->from('gogo_accounting');
        $sql = $this->db->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id')->get()->row();
        return $sql->postdate;
    }
    
    function getListBank(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('bank_nama','asc')->get('gogo_bank')->result();
    }
    
    function getListBbk(){
        $this->db->where('status_bbk','Printed')->where('bank_id !=','0')->from('gogo_accounting');
        $this->db->join('gogo_request','gogo_request.request_id=gogo_accounting.request_id');
        $sql = $this->db->join('gogo_login','gogo_request.login_id=gogo_login.login_id')->get()->result();
        return $sql;
    }
    
    function getMatriks(){
        return $this->db->order_by('group_desc','asc')->from('gogo_group')->join('gogo_login','gogo_login.login_id=gogo_group.approval_id')->get()->result();
    }
    
    function getListApproval(){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by('full_name','asc')->get('gogo_login')->result();
    }
    
    function getDetailMatriks($id){
        return $this->db->where('group_id',$id)->from('gogo_group')->join('gogo_login','gogo_login.login_id=gogo_group.approval_id')->get()->result();
    }
    
}

?>
