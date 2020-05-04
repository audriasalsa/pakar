<?php
Class BerandaUser extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('user/index_user');
    }
}