<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class KeluhanUser extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("pasien_model");
    }
    
    public function index(){
        //$this->template->load('template','tabel_pasien', $data);
        $this->load->view('user/keluhan_user');
    }

    public function simpan()
    {
        $data = array(

            'nama_pasien'         => $this->input->post("nama_pasien"),
            'umur'    => $this->input->post("umur"),

        );

        $id_pasien =  $this->pasien_model->simpan($data);

        if($id_pasien === 0) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"> Error! data gagal disimpan didatabase.
                                                    </div>');

            //redirect
            redirect("KeluhanUser");
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                    </div>');

            //redirect
            redirect("/keluhan/$id_pasien");
        }

    }

}