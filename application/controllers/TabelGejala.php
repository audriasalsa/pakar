<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelGejala extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("gejala_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data Gejala',
            'data_gejala' => $this->gejala_model->get_all(),

        );
        $this->template->load('template','tabel_gejala', $data);
    }

    public function tambah(){
    	$data = array(

            'title'     => 'Tambah Data Gejala'

        );
        $this->template->load('template','tambah_gejala', $data);
        // $this->load->view('template','tambah_gejala', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_gejala'       => $this->input->post("id_gejala"),
            'nama_gejala'         => $this->input->post("nama_gejala"),

        );

        $this->gejala_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('/Tabelgejala');

    }

    public function edit($id_gejala)
    {
        $id_gejala = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data gejala',
            'data_gejala' => $this->gejala_model->edit($id_gejala)

        );

        $this->template->load('template','edit_gejala', $data);
        // $this->load->view('edit_gejala', $data);
    }

    public function update()
    {
        $id['id_gejala'] = $this->input->post("id_gejala");
        $data = array(

            'id_gejala'           => $this->input->post("id_gejala"),
            'nama_gejala'         => $this->input->post("nama_gejala"),
        );

        $this->gejala_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('/TabelGejala');

    }

    public function hapus($id_gejala)
    {
        $id['id_gejala'] = $this->uri->segment(3);

        $this->gejala_model->hapus($id);

        //redirect
        redirect('/TabelGejala');

    }

}