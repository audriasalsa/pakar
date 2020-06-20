<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model
{
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('id_user');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->row();
        }
    }

    function cek_level($username){
        $query = $this->db->select("level")
            ->from('tb_user')
            ->where('username', $username)
            ->get();
        return $query->row();    
    }

    function cek_login(){
    if ($this->session->userdata('id_user')){
            return true;
        }
        else{
            return false;
        }
    }
}