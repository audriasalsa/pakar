<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class TabelUser extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $data = array(

            'title'     => 'Data user',
            'data_user' => $this->user_model->get_all(),

        );
        $this->template->load('template','tabel_user', $data);
    }

    public function tambah(){
    	$data = array(

            'title'     => 'Tambah Data user'

        );
        $this->template->load('template','tambah_user', $data);
        // $this->load->view('template','tambah_user', $data);
    }

    public function simpan()
    {
        $data = array(

            'username'       => $this->input->post("username"),
            'password'         => md5($this->input->post("password")),
            'level'         => $this->input->post("level"),

        );

        $this->user_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('/TabelUser');

    }

    public function edit($id_user)
    {
        $id_user = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data user',
            'data_user' => $this->user_model->edit($id_user)

        );

        $this->template->load('template','edit_user', $data);
        // $this->load->view('edit_user', $data);
    }

    public function update()
    {
        $id['id_user'] = $this->input->post("id_user");
        $data = array(

            'username'           => $this->input->post("username"),
            'password'         => md5($this->input->post("password")),
            'level'         => $this->input->post("level"),
        );

        $this->user_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('/TabelUser');

    }

    public function hapus($id_user)
    {
        $id['id_user'] = $this->uri->segment(3);

        $this->user_model->hapus($id);

        //redirect
        redirect('/TabelUser');

    }

}