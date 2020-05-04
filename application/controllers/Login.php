<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin_model
        $this->load->model('admin_model');
        $this->load->library('session');
    }

    public function index()
    {
            

            if($this->admin_model->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                // $this->session->set_userdata('username',$username);
                redirect('example');

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->admin_model->check_login('tb_user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_user'   => $apps->id_user,
                            'username' => $apps->username,
                            'password' => $apps->password,
                        );
                        // $username = "1";
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        // $this->session->set_userdata('username',$username);
                        redirect('example/');
                        

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login_view', $data);
                }

            }else{

                $this->load->view('login_view');
            }

        }

    }

    function logout()
    {
        $this->session->unset_userdata(array('username' =>''));
        redirect('/Login');
    }
}