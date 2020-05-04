<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelPasien extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("pasien_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data Pasien',
            'data_pasien' => $this->pasien_model->get_all(),

        );
        $this->template->load('template','tabel_pasien', $data);
    }

    public function tambah(){
    	$data = array(

            'title'     => 'Tambah Data pasien'

        );
        $this->template->load('template','tambah_pasien', $data);
        // $this->load->view('template','tambah_pasien', $data);
    }

    public function simpan()
    {
        $data = array(

            'nama_pasien'       => $this->input->post("nama_pasien"),
            'umur'         => $this->input->post("umur"),

        );

        $this->pasien_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('/TabelPasien');

    }

    public function edit($id_pasien)
    {
        $id_pasien = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data pasien',
            'data_pasien' => $this->pasien_model->edit($id_pasien)

        );

        $this->template->load('template','edit_pasien', $data);
        // $this->load->view('edit_pasien', $data);
    }

    public function update()
    {
        $id['id_pasien'] = $this->input->post("id_pasien");
        $data = array(

            'nama_pasien'           => $this->input->post("nama_pasien"),
            'umur'         => $this->input->post("umur"),
        );

        $this->pasien_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('/TabelPasien');

    }

    public function hapus($id_pasien)
    {
        $id['id_pasien'] = $this->uri->segment(3);

        $this->pasien_model->hapus($id);

        //redirect
        redirect('/TabelPasien');

    }

}