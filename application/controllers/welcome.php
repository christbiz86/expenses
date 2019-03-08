<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
    
    function test(){
        $this->smarty->view('test.tpl');
    }
    
    function channel(){
        echo "<script src=\"//connect.facebook.net/en_US/all.js\"></script>";
    }

    public function index()
    {
        $submit = $this->input->post('submit');
        if($submit){
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $login = $this->login_model->cekLogin($email,$password);
            if(empty($email) && empty($password)){
                $data['status'] = 'kosong';
                $data['menu'] = 'welcome';
                $this->smarty->view('login.tpl',$data);
            } else {
                if($login->num_rows() > 0){
                    $ceklogin = $login->row();
                    $this->session->set_userdata('login_id',$ceklogin->login_id);
                    $this->session->set_userdata('company_id',$ceklogin->company_id);
                    $this->login_model->updateLoginHistory($ceklogin->login_id);
                    redirect('supplier');
                } else {
                    $data['status'] = 'gagal';
                    $data['menu'] = 'welcome';
                    $this->smarty->view('login.tpl',$data);
                }
            }
        } else {
            $data['status'] = '';
            $data['menu'] = 'welcome';
            $this->smarty->view('login.tpl',$data);
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
    
    function register(){
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        $data['menu'] = 'welcome';
        if($submit){
            if ($this->form_validation->run('register') == FALSE){
                $data['cek'] = 'gagal';
            } else {
                $email    = $this->input->post('email');
                $id_exist = $this->login_model->checkRegister($email);
                if($id_exist){
                    $data['cek'] = $id_exist;
                } else {
                    $pincode = md5(date('Y-m-d H:i:s'));
                    $this->login_model->newUser($email,$pincode);
                    //send email
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://mail.celebesmineral.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'christian@celebesmineral.com',
                        'smtp_pass' => 'superman',
//                        'smtp_host' => 'ssl://smtp.googlemail.com',
//                        'smtp_port' => 465,
//                        'smtp_user' => 'ptcelebesmineral@gmail.com',
//                        'smtp_pass' => 'celebes123',
                        'mailtype'  => 'html', 
                        'charset'   => 'iso-8859-1'
                    );
                    $this->load->library('email', $config);
                    $link = site_url("welcome/aktivasi/".$pincode);
                    $message = "Terima kasih Anda telah berhasil mendaftar di ExpenseGogo. \n";
                    $message .= "<a href=".$link.">Klik disini untuk aktivasi akun Anda</a>. \n";
                    $this->email->from('noreply@expensegogo.com', 'ExpenseGoGo');
                    $this->email->to($email); 
                    #$this->email->cc('another@another-example.com'); 
                    $this->email->subject('Pendaftaran Baru - ExpenseGoGo');
                    $this->email->message($message);
                    $this->email->send();
                    $data['cek'] = 'sukses';
                }
            }
        } else {
            $data['cek'] = 'start';
        }
        $this->smarty->view('register.tpl',$data);
    }
    
    function aktivasi($pincode){
        $data['menu'] = 'welcome';
        $data['pincode'] = $pincode;
        $cek_email = $this->login_model->aktivasi($pincode);
        if($cek_email->email){
            $data['cek'] = 'start';
        } else {
            $data['cek'] = 'gagal';
        }
        $this->smarty->view('aktivasi.tpl',$data);
    }
    
    function submitaktivasi($pincode){
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        $data['menu'] = 'welcome';
        $data['pincode'] = $pincode;
        if($submit){
            if ($this->form_validation->run('resetpassword') == FALSE){
                $data['cek'] = 'tidakdiisi';
            } else {
                $password1 = $this->input->post('password1');
                $password2 = $this->input->post('password2');
                if($password1 != $password2){
                    $data['cek'] = 'bedapass';
                } else {
                    $data['cek'] = 'sukses';
                    $update = array(
                        'password'  => md5($password1),
                        'status'    => 'TRUE',
                        'pincode'   => ''
                    );
                    $this->db->where('pincode',$pincode)->update('gogo_login',$update);
                }
            }
        }
        $this->smarty->view('aktivasi.tpl',$data);
    }
    
    function forgetpass(){
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        $data['menu'] = 'welcome';
        if($submit){
            if ($this->form_validation->run('register') == FALSE){
                $data['cek'] = 'gagal';
            } else {
                $email    = $this->input->post('email');
                $id_exist = $this->login_model->checkRegister($email);
                if($id_exist){
                    $data['cek'] = 'sukses';
                    $pincode = $this->login_model->createPincode($email);
                    $link = site_url("welcome/resetpassword/".$pincode);
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
                    $message = "If you request to reset your current password, please follow this link below \n";
                    $message .= "<a href=".$link.">reset your password</a>. \n";
                    $this->email->from('noreply@expensegogo.com', 'ExpenseGoGo');
                    $this->email->to($email); 
                    #$this->email->cc('another@another-example.com'); 
                    $this->email->subject('Forget Password - ExpenseGoGo');
                    $this->email->message($message);	
                    #$this->email->send();
                } else {
                    $data['cek'] = $email;
                }
            }
        } else {
            $data['cek'] = '';
        }
        $this->smarty->view('forgetpass.tpl',$data);
    }
    
    function resetpassword($pincode){
        $cek = $this->login_model->resetPass($pincode,'cek');
        if($cek){
            $data['cek'] = 'start';
            $data['pincode'] = $pincode;
        } else {
            $data['cek'] = 'kosong';
            $data['pincode'] = $pincode;
        }
        $this->smarty->view('resetpassword.tpl',$data);
    }
    
    function submitresetpassword($pincode){
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        $data['menu'] = 'welcome';
        if($submit){
            if ($this->form_validation->run('resetpassword') == FALSE){
                $data['cek'] = 'tidakdiisi';
                $data['pincode'] = $pincode;
                $this->smarty->view('resetpassword.tpl',$data);
            } else {
                $password1 = $this->input->post('password1');
                $password2 = $this->input->post('password2');
                if($password1 != $password2){
                    $data['cek'] = 'bedapass';
                    $data['pincode'] = $pincode;
                    $this->smarty->view('resetpassword.tpl',$data);
                } else {
                    $this->login_model->resetPass($pincode,'done');
                    $data['cek'] = 'sukses';
                    $data['pincode'] = $pincode;
                    $this->smarty->view('resetpassword.tpl',$data);
                }
            }
        } else {
            $data['cek'] = 'start';
            $data['pincode'] = $pincode;
            $this->smarty->view('resetpassword.tpl',$data);
        }
    }
    
    function kontak(){
        parent::login();
        $this->privileges = parent::privileges();
        $this->load->model(array('home_model'));
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Anda belum mengisi %s');
        $this->form_validation->set_error_delimiters('<p style="color:#b94a48">', '</p>');
        $submit = $this->input->post('submit');
        $data['menu'] = 'welcome';
        if($submit){
            if ($this->form_validation->run('kontak') == FALSE){
                $data['cek'] = 'gagal';
            } else {
                $data['cek'] = 'sukses';
                $insert = array(
                    'login_id'  => $this->session->userdata('login_id'),
                    'isi'       => $this->input->post('isi'),
                    'judul'     => $this->input->post('judul'),
                    'postdate'  => date('Y-m-d H:i:s')
                );
                $this->db->insert('gogo_contact',$insert);
                
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
                $nama = $this->home_model->getName($this->session->userdata('login_id'));
                $message = "Ada pesan baru dari ".$nama."\n";
                $message .= "Judul Pesan :\n";
                $message .= $this->input->post('judul')."\n";
                $message .= "Isi Pesan :\n";
                $message .= $this->input->post('isi')."\n";
                $message .= "Segera tanggapi pesan tersebut. \n";
                $message .= "Terima kasih.";
                $this->email->from('noreply@erpgogo.com', 'Pesan Hubungi Kami - 123GoGo');
                $this->email->to('contact@erpgogo.com'); 
                #$this->email->cc(''); 
                $this->email->subject('Pesan Hubungi Kami - 123GoGo');
                $this->email->message($message);	
                #$this->email->send();
            }
        } else {
            $data['cek'] = '';
        }
        $data['nama'] = $this->home_model->getName($this->session->userdata('login_id'));
        $data['privileges'] = $this->privileges();
        $data['submenu'] = '';
        $this->smarty->view('user/kontak.tpl',$data);
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */