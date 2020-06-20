<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelDataUji extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("datauji_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data DataUji',
            'data_datauji' => $this->datauji_model->get_all(),

        );
        $this->template->load('template','tabel_datauji', $data);
    }

    public function tambah(){
        $data = array(

            'title'     => 'Tambah Data Data Uji'

        );
        $this->template->load('template','tambah_datauji', $data);
        // $this->load->view('template','tambah_datauji', $data);
    }

    // public function simpan()
    // {
    //     $data = array(

    //         'id_pasien'       => $this->input->post("id_pasien"),
    //         'id_gejala'         => $this->input->post("nama_datauji"),

    //     );

    //     $this->datauji_model->simpan($data);

    //     $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
    //                                             </div>');

    //     //redirect
    //     redirect('/Tabeldatauji');

    // }

    // public function edit($id_datauji)
    // {
    //     $id_datauji = $this->uri->segment(3);

    //     $data = array(

    //         'title'     => 'Edit Data datauji',
    //         'data_datauji' => $this->datauji_model->edit($id_datauji)

    //     );

    //     $this->template->load('template','edit_datauji', $data);
    //     // $this->load->view('edit_datauji', $data);
    // }

    // public function update()
    // {
    //     $id['id_datauji'] = $this->input->post("id_datauji");
    //     $data = array(

    //         'id_datauji'           => $this->input->post("id_datauji"),
    //         'nama_datauji'         => $this->input->post("nama_datauji"),
    //     );

    //     $this->datauji_model->update($data, $id);

    //     $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
    //                                             </div>');

    //     //redirect
    //     redirect('/Tabeldatauji');

    // }

    public function hapus($id_datauji)
    {
        $id['id_datauji'] = $this->uri->segment(3);

        $this->datauji_model->hapus($id);

        //redirect
        redirect('/Tabeldatauji');

    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('id_datauji',$keyword);
        $this->db->or_like('id_pasien',$keyword);
        $this->db->or_like('id_gejala',$keyword);
        $this->db->or_like('nilai',$keyword);
        // $data_pasien['post'] = $this->db->get('tb_pasien')->result();
        $data = array(

            'title'     => 'Data Uji',
            'data_datauji' => $this->db->get('tb_datauji')->result(),

        );
        // $this->template->load('template','tabel_pasien', $data);
        
        // $this->load->view('pencarian',$query);
        $this->template->load('template','tabel_datauji', $data);
    }

}