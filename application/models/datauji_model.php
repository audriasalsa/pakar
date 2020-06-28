<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class datauji_model extends CI_Model
{
    public function get_all()
    {
        // $query = $this->db->select("*")
        //          ->from('tb_datauji')
        //          ->order_by('id_datauji', 'ASC')
        //          ->get();
        // return $query->result();

        $query = $this->db->select("tb_pasien.nama_pasien, tb_gejala.nama_gejala, tb_datauji.nilai, tb_datauji.id_datauji")
                 ->from('tb_datauji')
                 ->join('tb_pasien','tb_pasien.id_pasien = tb_datauji.id_pasien')
                 ->join('tb_gejala','tb_gejala.id_gejala = tb_datauji.id_gejala')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_datauji", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_datauji)
    {

        $query = $this->db->where("id_datauji", $id_datauji)
                ->get("tb_datauji");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_datauji", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_datauji", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}