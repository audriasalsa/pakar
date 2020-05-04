<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan id_gejala filenya
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('ImportModel');
	}
	
	public function index(){
		$data['datalatih'] = $this->ImportModel->view();
		$this->template->load('template','tabel_datalatih', $data);
	}
	
	public function form(){
		$data = array(); // Buat variabel $data sebagai array
		
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di ImportModel.php
			$upload = $this->ImportModel->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$csvreader = PHPExcel_IOFactory::createReader('CSV');
				$loadcsv = $csvreader->load('csv/'.$this->filename.'.csv'); // Load file yang tadi diupload ke folder csv
				$sheet = $loadcsv->getActiveSheet()->getRowIterator();
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
				$data['sheet'] = $sheet; 
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->template->load('template','tambah_datalatih', $data);
	}
	
	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$data_file = array();

		// Upload file\
		$config['upload_path']          = './csv/';
        $config['allowed_types']        = 'xls|xlsx|csv'; // bener gak?? tipe ne ky e tipene csv
        $config['max_size']             = 5000; // 5mb

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                // $error = array('error' => $this->upload->display_errors());

                // $this->load->view('upload_form', $error);
        }
        else
        {
                $data_file = $this->upload->data();
        }
		
		$csvreader = PHPExcel_IOFactory::createReader('CSV');
		$loadcsv = $csvreader->load('csv/'.$data_file['file_name']); // Load file yang tadi diupload ke folder csv
		$sheet = $loadcsv->getActiveSheet()->getRowIterator();
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = [];
		
		$numrow = 1;
		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah id_gejala-id_gejala kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// START -->
				// Skrip untuk mengambil value nya
				$cellIterator = $row->getCellIterator();
				$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
				
				$get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
				foreach ($cellIterator as $cell) {
					array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
				}
				// <-- END
				
				// Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
				$id_pasien = $get[0]; // Ambil data id_pasien dari kolom A di csv
				$id_gejala = $get[1]; // Ambil data id_gejala dari kolom B di csv
				$nilai = $get[2]; // Ambil data jeid_pasien kelamin dari kolom C di csv
				$id_penyakit = $get[3]; // Ambil data id_penyakit dari kolom D di csv
				
				// Kita push (add) array data ke variabel data
				array_push($data, [
					'id_pasien'=>$id_pasien, // Insert data id_pasien
					'id_gejala'=>$id_gejala, // Insert data id_gejala
					'nilai'=>$nilai, // Insert data jeid_pasien kelamin
					'id_penyakit'=>$id_penyakit, // Insert data id_penyakit
				]);
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		// var_dump($data);
		// var_dump($data_file['file_name']);

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->ImportModel->insert_multiple($data);
		
		redirect("Import"); // Redirect ke halaman awal (ke controller datalatih fungsi index)
	}
}
