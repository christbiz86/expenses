<?php
class Login_model extends CI_Model {
    
    function cekLogin($email,$password){
        $sql = $this->db->where('email',$email)->where('password',md5($password))->where('status','TRUE')->get('gogo_login');
        return $sql;
    }
    
    function aktivasi($pincode){
        $sql = $this->db->where('pincode',$pincode)->get('gogo_login')->row();
        return $sql;
    }
    
    function checkRegister($email){
        $sql = $this->db->where('email',$email)->get('gogo_login')->row();
        return $sql;
    }
    
    function createPincode($email){
        $update = array(
            'pincode'   => md5(date('Y-m-d H:i:s'))
        );
        $this->db->where('email',$email)->update('gogo_login',$update);
        return md5(date('Y-m-d H:i:s'));
    }
    
    function resetPass($pincode,$action){
        if($action=='cek'){
            $sql = $this->db->where('pincode',$pincode)->get('gogo_login')->row();
        } else {
            $findemail = $this->db->where('pincode',$pincode)->get('gogo_login')->row();
            $update = array(
                'password'  => md5($this->input->post('password1')),
                'pincode'   => ''
            );
            $this->db->where('pincode',$pincode)->update('gogo_login',$update);
            //send email
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'ptcelebesmineral@gmail.com',
                'smtp_pass' => 'celebes123',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $message = "Anda telah berhasil mengganti Password. \n";
            $message .= "Silahkan login kembali. \n";
            $this->email->from('noreply@expensegogo.com', 'ExpenseGoGo');
            $this->email->to($findemail->email); 
            #$this->email->cc('another@another-example.com'); 
            $this->email->subject('Reset Password - ExpenseGoGo');
            $this->email->message($message);	
            #$this->email->send();
            $sql = TRUE;
        }
        return $sql;
    }
    
    function newUser($email,$pincode){
        //insert new company
        $ins_company = array(
            'company_email' => $email,
            'created_date'  => date('Y-m-d H:i:s'),
            'paket'     => 'Free'
        );
        $this->db->insert('gogo_company',$ins_company);
        $id_company = $this->db->insert_id();
        
        $ins_level = array(
            'level_desc'    => 'Administrator',
            'level_postdate'=> date('Y-m-d H:i:s'),
            'level_position'=> '0',
            'company_id'    => $id_company,
            'level_position_old'    => '0',
        );
        $this->db->insert('gogo_level',$ins_level);
        $id_level = $this->db->insert_id();
        
        $insert = array(
            'email' => $email,
            'status'=> 'FALSE',
            'level_id'  => $id_level,
            'pincode'   => $pincode,
            'company_id'=> $id_company
        );
        $this->db->insert('gogo_login',$insert);
        $id_login = $this->db->insert_id();
        
        $ins_privileges = array(
            'login_id'  => $id_login,
        );
        $this->db->insert('gogo_privileges',$ins_privileges);
    }
    
//    function getLogin($id){
//        $sql = $this->db->where('login_id',$id)->get('gogo_login');
//        return $sql->row();
//    }
//    
    function updateLoginHistory($id){
        $insert = array(
            'login_id'  => $id,
            'login_date'=> date('Y-m-d H:i:s'),
            'login_ip'  => $_SERVER['REMOTE_ADDR'],
        );
        $this->db->insert('gogo_login_history',$insert);
    }
    
    
}
?>
