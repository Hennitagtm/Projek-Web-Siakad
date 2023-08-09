<?php  
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Auth extends CI_Controller { 
 
    public function __construct() 
    { 
        parent::__construct(); 
        $this->load->model('M_user','user');
    } 
 
    public function index() 
    { 
        if($this->session->userdata('login') == TRUE && $this->session->userdata('username') != ""){
            redirect(base_url(). 'dashboard');
        }
        else{
        $this->load->view('login');
    }
    } 

    public function checklogin() 
    {
        $postData = $this->input->post();
        $data = [
            'username'=>$postData['username'],
            'password'=>md5($postData['password'])
        ];
        $CheckUser = $this->user->getuserlogin($data);
        //check akun sesuai dengan input form
        if ($CheckUser) {
            $sessi=[
                'username'=>$CheckUser->username,
                'password'=>$CheckUser->password,
                'login'=>TRUE
            ];
            $this->session->set_userdata($sessi);
            //jika akun yang diinputkan benar akan masuk ke halaman dashboard
            redirect(base_url().'dashboard');
        }
        else{
             //jika akun yang diinputkan salah akan kembali kehalaman login
            $this->session->set_flashdata('error','Username Dan Password Anda Salah');
           redirect(base_url());
        }
    }
    public function logout()
    {
        $sessi=[
            'username'=>"",
            'password'=>"",
            'login'=>FALSE
            ];
            $this->session->unset_userdata($sessi);
            $this->session->sess_destroy();
        redirect(base_url());
    } 
}