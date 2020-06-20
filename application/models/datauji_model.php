<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class datauji_model extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_datauji')
                 ->order_by('id_datauji', 'ASC')
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