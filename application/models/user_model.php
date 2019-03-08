<?php

class User_model extends CI_Model {
    
    function getList(){
        $loginDetail = $this->db->where('login_id',$this->session->userdata('login_id'))->get('gogo_login')->row();
        $this->db->from('gogo_login');
        $this->db->join('gogo_level', 'gogo_level.level_id = gogo_login.level_id');
        $this->db->where('gogo_login.company_id',$this->session->userdata('company_id'));
        if($loginDetail->full_name != 'Administrator'){
            $this->db->where('gogo_login.cabang_id',$loginDetail->cabang_id);
            $this->db->where('gogo_login.cabang_id !=','0');
        }
        #$this->db->join('gogo_cabang', 'gogo_cabang.cabang_id = gogo_login.cabang_id');
        return $this->db->get()->result();
    }
    
    function findData($tabel,$id){
        $this->db->from('gogo_login');
        $this->db->join('gogo_level', 'gogo_level.level_id = gogo_login.level_id','left');
        $this->db->join('gogo_privileges', 'gogo_privileges.login_id = gogo_login.login_id');
        $this->db->where('gogo_login.'.$tabel.'_id',$id);
        return $this->db->get()->result();
    }
    
    function getData($order, $tabel){
        return $this->db->where('company_id',$this->session->userdata('company_id'))->order_by($order,'asc')->get($tabel)->result();
    }
    
    function checkExisting($email){
        $sql = $this->db->where('email',$email)->get('gogo_login');
        return $sql->num_rows();
    }
    
    function getLastUser(){
        $sql = $this->db->order_by('login_id','desc')->limit(1)->get('gogo_login')->row();
        return $sql->login_id;
    }
    
}
?>
