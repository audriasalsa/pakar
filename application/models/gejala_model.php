<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class gejala_model extends CI_Model
{
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_gejala')
                 ->order_by('id_gejala', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_gejala", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_gejala)
    {

        $query = $this->db->where("id_gejala", $id_gejala)
                ->get("tb_gejala");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_gejala", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_gejala", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}