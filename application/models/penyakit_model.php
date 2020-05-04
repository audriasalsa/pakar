<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class penyakit_model extends CI_Model
{
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_penyakit')
                 ->order_by('id_penyakit', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_penyakit", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_penyakit)
    {

        $query = $this->db->where("id_penyakit", $id_penyakit)
                ->get("tb_penyakit");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_penyakit", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_penyakit", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}