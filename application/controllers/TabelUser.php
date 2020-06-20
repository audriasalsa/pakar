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
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('level','Level','required');

        if($this->form_validation->run() != false){
            $data = array(

                'username'       => $this->input->post("username"),
                'password'         => md5($this->input->post("password")),
                'level'         => $this->input->post("level"),

            );
            $this->user_model->simpan($data);
            redirect('/TabelUser');
        }
        else{
             ?>
                <script type="text/javascript">
                    alert("Harus Diisi Lengkap");
                </script>
            <?php
            $data = array(

            'title'     => 'Tambah Data user'

            );
            $this->template->load('template','tambah_user', $data);
        }
    }
        // $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                // </div>');

        //redirect
        

    // }

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

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('id_user',$keyword);
        $this->db->or_like('username',$keyword);
        // $data_pasien['post'] = $this->db->get('tb_pasien')->result();
        $data = array(

            'title'     => 'Data User',
            'data_user' => $this->db->get('tb_user')->result(),

        );
        // $this->template->load('template','tabel_pasien', $data);
        
        // $this->load->view('pencarian',$query);
        $this->template->load('template','tabel_user', $data);
    }

}