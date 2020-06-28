<?php
Class BerandaUser extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_model');
    }
    
    function index(){
    	   $isi = $this->admin_model->cek_login();



	        if ($isi) {
	        	// $this->template->load('template','index');	 
	        	$this->load->view('user/index_user');           
	        }
	        else{
	        	redirect(site_url('Login'));
	        	// $this->template->load('template','index');
	        }
        
    }
}