<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class keluhanUserModel extends CI_Model
{
    
    public function simpan($id_pasien, $id_gejala, $nilai)
    {
        $data = array(
        // 'id_pasien'=>$this->input->post("id_pasien"),
        'id_pasien'=> $id_pasien,
        'id_gejala' => $id_gejala,
        'nilai' => $nilai            
    );
    $this->db->insert('tb_datauji', $data);

    }
}