<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class KeluhanUser extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("pasien_model");
    }
    
    public function index(){
        //$this->template->load('template','tabel_pasien', $data);
        $this->load->view('user/keluhan_user');
    }

    public function simpan()
    {

        $this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
        $this->form_validation->set_rules('umur','Umur','required|greater_than[11]');

        // $data = array(

        //     'nama_pasien'         => $this->input->post("nama_pasien"),
        //     'umur'    => $this->input->post("umur"),

        // );
        if($this->form_validation->run() != false){
             $data = array(

            'nama_pasien'         => $this->input->post("nama_pasien"),
            'umur'    => $this->input->post("umur"),

            );
            $id_pasien =  $this->pasien_model->simpan($data);
            redirect("/keluhan/$id_pasien");
        }else{

            $this->load->view('user/keluhan_user');
        }
        // $id_pasien =  $this->pasien_model->simpan($data);

        // if($id_pasien === 0) {
        //     $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"> Error! data gagal disimpan didatabase.
        //                                             </div>');

        //     //redirect
        //     redirect("KeluhanUser");
        // } else {
        //     $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
        //                                             </div>');

        //     //redirect
        //     redirect("/keluhan/$id_pasien");
        // }

    }

}