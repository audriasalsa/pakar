<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelPenyakit extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("penyakit_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data Penyakit',
            'data_penyakit' => $this->penyakit_model->get_all(),

        );
        $this->template->load('template','tabel_penyakit', $data);
    }

    public function tambah(){
    	$data = array(

            'title'     => 'Tambah Data Penyakit'

        );
        $this->template->load('template','tambah_penyakit', $data);
        // $this->load->view('template','tambah_penyakit', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_penyakit'       => $this->input->post("id_penyakit"),
            'nama_penyakit'         => $this->input->post("nama_penyakit"),
            'solusi_penyakit'    => $this->input->post("solusi_penyakit"),

        );

        $this->penyakit_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('/TabelPenyakit');

    }

    public function edit($id_penyakit)
    {
        $id_penyakit = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Penyakit',
            'data_penyakit' => $this->penyakit_model->edit($id_penyakit)

        );

        $this->template->load('template','edit_penyakit', $data);
        // $this->load->view('edit_penyakit', $data);
    }

    public function update()
    {
        $id['id_penyakit'] = $this->input->post("id_penyakit");
        $data = array(

            'id_penyakit'           => $this->input->post("id_penyakit"),
            'nama_penyakit'         => $this->input->post("nama_penyakit"),
            'solusi_penyakit'    => $this->input->post("solusi_penyakit"),

        );

        $this->penyakit_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('/TabelPenyakit');

    }

    public function hapus($id_penyakit)
    {
        $id['id_penyakit'] = $this->uri->segment(3);

        $this->penyakit_model->hapus($id);

        //redirect
        redirect('/TabelPenyakit');

    }

}