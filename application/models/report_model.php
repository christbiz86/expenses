<?php

class Report_model extends CI_Model {
    
    function showReport($start,$end,$login_id){
        $company = $this->db->where('login_id',$login_id)->get('gogo_login')->row();
        $sql = $this->db->where('gogo_login.company_id',$company->company_id)->where('gogo_request.postdate >=',$start)->where('gogo_request.postdate <=',$end)->from('gogo_login')->join('gogo_request','gogo_login.login_id = gogo_request.login_id')->join('gogo_cabang','gogo_cabang.cabang_id = gogo_login.cabang_id')->join('gogo_level','gogo_level.level_id = gogo_login.level_id')->join('gogo_request_approve','gogo_request_approve.request_id = gogo_request.request_id')->order_by('gogo_request_approve.date_approve','desc')->get()->result();
        return $sql;
    }
    
}

?>
