<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DataLatih extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('DataLatihModel');
  }
  
  public function index(){
    $data['DataLatih'] = $this->DataLatihModel->view();
    
    $this->load->view('TampilDataLatih', $data); // Load view index.php
  }
  
  public function form(){
    $this->load->view('Form'); // Load view form.php
  }
  
  public function save(){
    // Ambil data yang dikirim dari form
    $id_datalatih = $_POST['id_datalatih']; // Ambil data nis dan masukkan ke variabel nis
    $id_pasien = $_POST['id_pasien']; // Ambil data nama dan masukkan ke variabel nama
    $id_gejala = $_POST['id_gejala']; // Ambil data telp dan masukkan ke variabel telp
    $nilai = $_POST['nilai']; // Ambil data alamat dan masukkan ke variabel alamat
    $id_penyakit = $_POST['id_penyakit'];
    $data = array();
    
    $index = 0; // Set index array awal dengan 0
    foreach($id_datalatih as $dataid_datalatih){ // Kita buat perulangan berdasarkan nis sampai data terakhir
      array_push($data, array(
        'id_datalatih'=>$dataid_datalatih,
        'id_pasien'=>$id_pasien[$index],  // Ambil dan set data nama sesuai index array dari $index
        'id_gejala'=>$id_gejala[$index],  // Ambil dan set data telepon sesuai index array dari $index
        'nilai'=>$nilai[$index],  // Ambil dan set data alamat sesuai index array dari $index
        'id_penyakit'=>$id_penyakit[$index],
      ));
      
      $index++;
    }
    
    $sql = $this->DataLatihModel->save_batch($data); // Panggil fungsi save_batch yang ada di model DataLatih (DataLatihModel.php)
    
    // Cek apakah query insert nya sukses atau gagal
    if($sql){ // Jika sukses
      echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('index.php/DataLatih')."';</script>";
    }else{ // Jika gagal
      echo "<script>alert('Data gagal disimpan');window.location = '".base_url('index.php/DataLatih/Form')."';</script>";
    }
  }
}