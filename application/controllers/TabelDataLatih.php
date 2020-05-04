<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelDataLatih extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("datalatih_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data Datalatih',
            'data_datalatih' => $this->datalatih_model->get_all(),

        );
        $this->template->load('template','tabel_datalatih', $data);
    }

    public function tambah(){
    	$data = array(

            'title'     => 'Tambah Data datalatih'

        );
        $data['datapasien'] = $this->datalatih_model->tampil_data_pasien();
        $data['datapenyakit'] = $this->datalatih_model->tampil_data_penyakit();
        $data['datagejala'] = $this->datalatih_model->tampil_data_gejala();
        $this->template->load('template','tambah_datalatih', $data);

    }

    public function simpan()
    {
        $data = array(

            'id_pasien'       => $this->input->post("id_pasien"),
            'id_gejala'         => $this->input->post("id_gejala"),
            'nilai'         => $this->input->post("nilai"),
            'id_penyakit'         => $this->input->post("id_penyakit"),

        );

        $this->datalatih_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('/Tabeldatalatih');

    }

    public function edit($id_datalatih)
    {
        $id_datalatih = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data datalatih',
            'data_datalatih' => $this->datalatih_model->edit($id_datalatih)

        );

        $this->template->load('template','edit_datalatih', $data);
        // $this->load->view('edit_datalatih', $data);
    }

    public function update()
    {
        $id['id_datalatih'] = $this->input->post("id_datalatih");
        $data = array(

            'id_pasien'       => $this->input->post("id_pasien"),
            'id_gejala'         => $this->input->post("id_gejala"),
            'nilai'         => $this->input->post("nilai"),
            'id_penyakit'         => $this->input->post("id_penyakit"),
        );

        $this->datalatih_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('/Tabeldatalatih');

    }

    public function hapus($id_datalatih)
    {
        $id['id_datalatih'] = $this->uri->segment(3);

        $this->datalatih_model->hapus($id);

        //redirect
        redirect('/TabelDataLatih');

    }

}