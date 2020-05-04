<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('register_model'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('register_view');
         }else{

             $data['username'] =    $this->input->post('username');
             $data['password'] =    md5($this->input->post('password'));
             $data['level'] = "2";
 
             $this->register_model->daftar($data);
             
             // $pesan['message'] =    "Pendaftaran berhasil";
             
             redirect('login/');
         }
     }
 }