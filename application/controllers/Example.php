<?php
Class Example extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_model');
    }
    
    function index(){
        // $this->load->view('template');

        // $this->template->load('template','index');
	        // $this->load->model("login_model");
    	    	// var_dump($isi);
    	// die();
    	$isi = $this->admin_model->cek_login();



	        if ($isi) {
	        	$this->template->load('template','index');	            
	        }
	        else{
	        	redirect(site_url('Login'));
	        	// $this->template->load('template','index');
	        }
                        // var_dump($this->session->userdata('username'));
                        // die();
        // $data['tb_user'] = $this->db->get_where('tb_user',['username' => $this->session->userdata('username')])->row_array();
        // echo $data['tb_user']['username'];
        // if($this->session->userdata('username')){
        // 	$this->load->view('template');
        // }
        // else{
        // 	$this->load->view('template');
        // }
    }
}