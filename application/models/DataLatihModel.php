<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataLatihModel extends CI_Model {
	public function view(){
	//	return $this->db->get('tb_datalatih')->result(); // Tampilkan semua data yang ada di tabel siswa
		$query = $this->db->select("tb_pasien.nama_pasien, tb_gejala.nama_gejala, tb_datalatih.nilai, tb_penyakit.nama_penyakit")
                 ->from('tb_datalatih')
                 ->join('tb_pasien','tb_pasien.id_pasien = tb_datalatih.id_pasien')
                 ->join('tb_gejala','tb_gejala.id_gejala = tb_datalatih.id_gejala')
                 ->join('tb_gejala','tb_penyakit.id_penyakit = tb_datalatih.id_penyakit')
                 ->get();
        return $query->result();
	} 
	
	// Fungsi untuk melakukan proses upload file
	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload
		
		$config['upload_path'] = './csv/';
		$config['allowed_types'] = 'csv';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
	public function insert_multiple($data){
		$this->db->insert_batch('tb_datalatih', $data);
	}
}
