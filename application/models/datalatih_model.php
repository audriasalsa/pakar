<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class datalatih_model extends CI_Model
{
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_datalatih')
                 ->order_by('id_datalatih', 'ASC')
                 ->get();
        return $query->result();
    }

    public function tampil_data_pasien()
    {  
        $query = $this->db->get('tb_pasien');
        return $query;
    }

    public function tampil_data_penyakit()
    {  
        $query = $this->db->get('tb_penyakit');
        return $query;
    }

    public function tampil_data_gejala()
    {  
        $query = $this->db->get('tb_gejala');
        return $query;
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_datalatih", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_datalatih)
    {

        $query = $this->db->where("id_datalatih", $id_datalatih)
                ->get("tb_datalatih");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_datalatih", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_datalatih", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}