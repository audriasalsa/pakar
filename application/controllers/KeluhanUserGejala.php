<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class KeluhanUserGejala extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("keluhanUserModel");
    }
    
    public function index($id_pasien){
        //$this->template->load('template','tabel_pasien', $data);
        $this->load->view('user/keluhan_user_gejala',$id_pasien);
    }

    public function simpan()
    {
        $this->load->model('KeluhanUserModel');
        $i=1;
        while(isset($_POST['G'.$i]))
        {
         $id_pasien = $this->input->post("id_pasien");
         $id_gejala = 'G'.$i;
         $nilai = $_POST['G'.$i];
         $this->keluhanUserModel->simpan($id_pasien, $id_gejala, $nilai);
         $i++;
         echo var_dump($nilai);
        }
        // $nilai = $_POST['G1'];
        

        //redirect
       // redirect("/KeluhanUserGejala/");

    }

}