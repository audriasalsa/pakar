<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class user_model extends CI_Model
{
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_user')
                 ->order_by('id_user', 'ASC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_user", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_user)
    {

        $query = $this->db->where("id_user", $id_user)
                ->get("tb_user");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_user", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_user", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}