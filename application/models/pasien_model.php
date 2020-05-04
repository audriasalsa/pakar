<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class pasien_model extends CI_Model
{
	
    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_pasien')
                 ->order_by('id_pasien', 'ASC')
                 ->get();
        return $query->result();
    }
    
    public function simpan($data)
    {

        $query = $this->db->insert("tb_pasien", $data);

        if($query){
             return $this->db->insert_id();
        }else{
            return 0;
        }
    }

    public function edit($id_pasien)
    {

        $query = $this->db->where("id_pasien", $id_pasien)
                ->get("tb_pasien");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_pasien", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_pasien", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}