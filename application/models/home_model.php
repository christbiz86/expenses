<?php

class Home_model extends CI_Model {
   
    function getName($id){
        $sql = $this->db->where('login_id',$id)->get('gogo_login')->row();
        return $sql->full_name;
    }
    
    function oldPassword($password){
        $sql = $this->db->where('login_id',$this->session->userdata('login_id'))->get('gogo_login')->row();
        if($sql->password == $password){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}
?>
