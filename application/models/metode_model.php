<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class metode_model extends CI_Model
{
	
    public function temp_euc()
    {
        $this->db->query("CREATE TEMPORARY TABLE euclidien(
        Ranking int AUTO_INCREMENT primary key,
        id_datalatih int,
        id_datalatih2 int,
        Jarak float(10,4)
        -- Status char(1)
        );");
    }

    public function temp_eucuji()
    {
        $this->db->query("CREATE TEMPORARY TABLE euclidienuji(
        Ranking int AUTO_INCREMENT primary key,
        id_datalatih int,
        id_pasien int,
        Jarak float(10,4)
        -- Status char(1)
        );");
    }

    public function temp_rank(){
        $this->db->query("CREATE TEMPORARY TABLE Ranking(
        Nomor int AUTO_INCREMENT primary key,
        id_datalatih int,
        id_datalatih2 int,
        Jarak float(10,4),
        id_penyakit1 varchar(3),
        id_penyakit2 varchar(3),
        n int
        );");
    }

    public function temp_validitas(){
        $this->db->query("CREATE TEMPORARY TABLE validitas(
        Nomor int AUTO_INCREMENT primary key,
        id_datalatih int,
        validitas float(10,4)
        );");
    }

    public function temp_weightvoting(){
        $this->db->query("CREATE TEMPORARY TABLE weightvoting(
        Nomor int AUTO_INCREMENT primary key,
        id_datalatih int,
        weightvoting float(10,4)
        );");
    }

    public function select_g($i,$k){
        $query = $this->db->select("tb_datalatih.nilai")
            ->from('tb_pasien')
            ->join('tb_datalatih','tb_pasien.id_pasien = tb_datalatih.id_pasien')
            ->where('tb_pasien.id_pasien', $i)
            ->where('tb_datalatih.id_gejala', 'G'.$k)
            ->get();
        if ($k=1) {
            $G1 = $query->row();
            return $G1;
        }
        elseif ($k=2) {
            $G2 = $query->row();
            return $G2;
        }
        elseif ($k=3) {
            $G3 = $query->row();
            return $G3;
        }
        elseif ($k=4) {
            $G4 = $query->row();
            return $G4;
        }
        elseif ($k=5) {
            $G5 = $query->row();
            return $G5;
        }
        elseif ($k=6) {
            $G6 = $query->row();
            return $G6;
        }
        elseif ($k=7) {
            $G7 = $query->row();
            return $G7;
        }
        elseif ($k=8) {
            $G8 = $query->row();
            return $G8;
        }
        elseif ($k=9) {
            $G9 = $query->row();
            return $G9;
        }
        elseif ($k=10) {
            $G10 = $query->row();
            return $G10;
        }
        elseif ($k=11) {
            $G11 = $query->row();
            return $G11;
        }
        elseif ($k=12) {
            $G12 = $query->row();
            return $G12;
        }
        elseif ($k=13) {
            $G13 = $query->row();
            return $G13;
        }
        elseif ($k=14) {
            $G14 = $query->row();
            return $G14;
        }
        elseif ($k=15) {
            $G15 = $query->row();
            return $G15;
        }
        elseif ($k=16) {
            $G16 = $query->row();
            return $G16;
        }
        elseif ($k=17) {
            $G17 = $query->row();
            return $G17;
        }
        elseif ($k=18) {
            $G18 = $query->row();
            return $G18;
        }
        elseif ($k=19) {
            $G19 = $query->row();
            return $G19;
        }
        elseif ($k=20) {
            $G20 = $query->row();
            return $G20;
        }
        elseif ($k=21) {
            $G21 = $query->row();
            return $G21;
        }
        elseif ($k=22) {
            $G22 = $query->row();
            return $G22;
        }
        elseif ($k=23) {
            $G23 = $query->row();
            return $G23;
        }
        elseif ($k=24) {
            $G24 = $query->row();
            return $G24;
        }

    }

    public function select_gtes($j,$k){
        $query = $this->db->select("tb_datalatih.nilai")
            ->from('tb_pasien')
            ->join('tb_datalatih','tb_pasien.id_pasien = tb_datalatih.id_pasien')
            ->where('tb_pasien.id_pasien', $j)
            ->where('tb_datalatih.id_gejala', 'G'.$k)
            ->get();
        if ($k=1) {
            $Gtes1 = $query->row();
            return $Gtes1;
        }
        elseif ($k=2) {
            $Gtes2 = $query->row();
            return $Gtes2;
        }
        elseif ($k=3) {
            $Gtes3 = $query->row();
            return $Gtes3;
        }
        elseif ($k=4) {
            $Gtes4 = $query->row();
            return $Gtes4;
        }
        elseif ($k=5) {
            $Gtes5 = $query->row();
            return $Gtes5;
        }
        elseif ($k=6) {
            $Gtes6 = $query->row();
            return $Gtes6;
        }
        elseif ($k=7) {
            $Gtes7 = $query->row();
            return $Gtes7;
        }
        elseif ($k=8) {
            $Gtes8 = $query->row();
            return $Gtes8;
        }
        elseif ($k=9) {
            $Gtes9 = $query->row();
            return $Gtes9;
        }
        elseif ($k=10) {
            $Gtes10 = $query->row();
            return $Gtes10;
        }
        elseif ($k=11) {
            $Gtes11 = $query->row();
            return $Gtes11;
        }
        elseif ($k=12) {
            $Gtes12 = $query->row();
            return $Gtes12;
        }
        elseif ($k=13) {
            $Gtes13 = $query->row();
            return $Gtes13;
        }
        elseif ($k=14) {
            $Gtes14 = $query->row();
            return $Gtes14;
        }
        elseif ($k=15) {
            $Gtes15 = $query->row();
            return $Gtes15;
        }
        elseif ($k=16) {
            $Gtes16 = $query->row();
            return $Gtes16;
        }
        elseif ($k=17) {
            $Gtes17 = $query->row();
            return $Gtes17;
        }
        elseif ($k=18) {
            $Gtes18 = $query->row();
            return $Gtes18;
        }
        elseif ($k=19) {
            $Gtes19 = $query->row();
            return $Gtes19;
        }
        elseif ($k=20) {
            $Gtes20 = $query->row();
            return $Gtes20;
        }
        elseif ($k=21) {
            $Gtes21 = $query->row();
            return $Gtes21;
        }
        elseif ($k=22) {
            $Gtes22 = $query->row();
            return $Gtes22;
        }
        elseif ($k=23) {
            $Gtes23 = $query->row();
            return $Gtes23;
        }
        elseif ($k=24) {
            $Gtes24 = $query->row();
            return $Gtes24;
        }     
    }

    public function select_guji($id_pasien,$k){
        $query = $this->db->select("tb_datauji.nilai")
            ->from('tb_pasien')
            ->join('tb_datauji','tb_pasien.id_pasien = tb_datauji.id_pasien')
            ->where('tb_pasien.id_pasien', $id_pasien)
            ->where('tb_datauji.id_gejala', 'G'.$k)
            ->get();
        if ($k=1) {
            $Guji1 = $query->row();
            return $Guji1;
        }
        elseif ($k=2) {
            $Guji2 = $query->row();
            return $Guji2;
        }
        elseif ($k=3) {
            $Guji3 = $query->row();
            return $Guji3;
        }
        elseif ($k=4) {
            $Guji4 = $query->row();
            return $Guji4;
        }
        elseif ($k=5) {
            $Guji5 = $query->row();
            return $Guji5;
        }
        elseif ($k=6) {
            $Guji6 = $query->row();
            return $Guji6;
        }
        elseif ($k=7) {
            $Guji7 = $query->row();
            return $Guji7;
        }
        elseif ($k=8) {
            $Guji8 = $query->row();
            return $Guji8;
        }
        elseif ($k=9) {
            $Guji9 = $query->row();
            return $Guji9;
        }
        elseif ($k=10) {
            $Guji10 = $query->row();
            return $Guji10;
        }
        elseif ($k=11) {
            $Guji11 = $query->row();
            return $Guji11;
        }
        elseif ($k=12) {
            $Guji12 = $query->row();
            return $Guji12;
        }
        elseif ($k=13) {
            $Guji13 = $query->row();
            return $Guji13;
        }
        elseif ($k=14) {
            $Guji14 = $query->row();
            return $Guji14;
        }
        elseif ($k=15) {
            $Guji15 = $query->row();
            return $Guji15;
        }
        elseif ($k=16) {
            $Guji16 = $query->row();
            return $Guji16;
        }
        elseif ($k=17) {
            $Guji17 = $query->row();
            return $Guji17;
        }
        
        elseif ($k=18) {
            $Guji18 = $query->row();
            return $Guji18;
        }
        elseif ($k=19) {
            $Guji19 = $query->row();
            return $Guji19;
        }
        elseif ($k=20) {
            $Guji20 = $query->row();
            return $Guji20;
        }
        elseif ($k=21) {
            $Guji21 = $query->row();
            return $Guji21;
        }
        elseif ($k=22) {
            $Guji22 = $query->row();
            return $Guji22;
        }
        elseif ($k=23) {
            $Guji23 = $query->row();
            return $Guji23;
        }
        elseif ($k=24) {
            $Guji24 = $query->row();
            return $Guji24;
        }
    }

    public function select_g2($i){
        $query = $this->db->select("tb_datalatih.nilai")
            ->from('tb_pasien')
            ->join('tb_datalatih','tb_pasien.id_pasien = tb_datalatih.id_pasien')
            ->where('tb_pasien.id_pasien', $i)
            ->where('tb_datalatih.id_gejala', 'G2')
            ->get();
        $G2 = $query->row();
        return $G2;
    }

    public function add_euclidien($data){
        $query = $this->db->insert("euclidien", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function add_euclidienuji($datauji){
        $query = $this->db->insert("euclidienuji", $datauji);

        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    public function euclidien(){
        $query = $this->db->select("*")
                 ->from('euclidien')
                 ->order_by('id_datalatih', 'asc')
                 // ->limit(17)
                 ->get();
        return $query->result();
    }

    public function euclidienuji(){
        $query = $this->db->select("*")
                 ->from('euclidienuji')
                 ->order_by('id_datalatih', 'asc')
                 ->group_by('id_datalatih')
                 ->get();
        return $query->result();
    }

    public function ranking($l){
        $query = $this->db->select("*")
                 ->from('euclidien')
                 ->order_by('jarak', 'desc')
                 ->where('id_datalatih',$l)
                 ->limit(3)
                 ->get();
        return $query->result();
    }

    public function datauji($id_pasien){
        $query = $this->db->select("tb_datauji.id_pasien, tb_pasien.nama_pasien, tb_gejala.nama_gejala, tb_datauji.nilai")
                 ->from('tb_datauji')
                 ->join('tb_pasien','tb_pasien.id_pasien = tb_datauji.id_pasien')
                 ->join('tb_gejala','tb_gejala.id_gejala = tb_datauji.id_gejala')
                 // ->order_by('jarak', 'desc')
                 ->where('tb_datauji.id_pasien',$id_pasien)
                 ->get();
        return $query->result();
    }

    public function dataujiuser($id_pasien){
        $query = $this->db->select("tb_datauji.id_pasien, tb_pasien.nama_pasien, tb_gejala.nama_gejala, tb_datauji.nilai")
                 ->from('tb_datauji')
                 ->join('tb_pasien','tb_pasien.id_pasien = tb_datauji.id_pasien')
                 ->join('tb_gejala','tb_gejala.id_gejala = tb_datauji.id_gejala')
                 // ->order_by('jarak', 'desc')
                 ->where('tb_datauji.id_pasien',$id_pasien)
                 ->where('tb_datauji.nilai >','0')
                 ->get();
        return $query->result();
    }

    public function ranking2(){
        $query = $this->db->select("*")
                 ->from('ranking')
                 ->order_by('id_datalatih', 'asc')
                 ->get();
        return $query->result();
    }

    public function add_ranking($data){

        $query = $this->db->insert("ranking", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function add_validitas($datav){

        $query = $this->db->insert("validitas", $datav);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function get_all(){
        $query = $this->db->select("*")
                 ->from('euclidien')
                 ->order_by('id_datalatih2', 'asc')
                 ->limit(3)
                 ->get();
        return $query->result();
    }

    public function penyakit1($idp1){
        $query = $this->db->select("tb_datalatih.id_penyakit")
                ->from('tb_datalatih')
                ->where('id_pasien',$idp1)
                ->get();
        return $query->row();
    }

    public function penyakit2($idp2){
        $query = $this->db->select("tb_datalatih.id_penyakit")
                ->from('tb_datalatih')
                ->where('id_pasien',$idp2)
                ->get();
        return $query->row();
    }

    public function jumlahn($idp1){

        $query = $this->db->select_sum('n','jmln')
                ->from('ranking')
                ->group_by('id_datalatih',$idp1)
                ->get();
        return $query->row();
    }

    public function get_validitas(){
        $query = $this->db->select("*")
                 ->from('validitas')
                 ->group_by('id_datalatih')
                 ->get();
        return $query->result();
    }

    public function get_vali($idp1){
        $query = $this->db->select('validitas')
                ->from('validitas')
                ->where('id_datalatih',$idp1)
                ->get();
        return $query->row();
    }

    public function get_eucuji($idp1){
        $query = $this->db->select('jarak')
                ->from('euclidienuji')
                ->where('id_datalatih',$idp1)
                ->get();
        return $query->row();
    }

    public function add_weightvoting($datawv){

        $query = $this->db->insert("weightvoting", $datawv);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function get_weightvoting(){
        $query = $this->db->select("*")
                 ->from('weightvoting')
                 ->group_by('id_datalatih')
                 ->order_by('weightvoting', 'desc')
                 ->get();
        return $query->result();
    }

    public function get_weightvotinglimit($k){
        $query = $this->db->select("weightvoting.id_datalatih, weightvoting.weightvoting, tb_datalatih.id_penyakit")
                 ->from('weightvoting')
                 ->join('tb_datalatih','weightvoting.id_datalatih = tb_datalatih.id_pasien')
                 ->group_by('id_datalatih')
                 ->order_by('weightvoting', 'desc')
                 ->limit($k)
                 ->get();
        return $query->result();
    }
 
    public function get_penyakitlimit($k){
        $query = $this->db->select("tb_datalatih.id_penyakit")
                 ->from('weightvoting')
                 ->join('tb_datalatih','weightvoting.id_datalatih = tb_datalatih.id_pasien')
                 ->group_by('weightvoting.id_datalatih')
                 ->order_by('weightvoting', 'desc')
                 ->limit($k)
                 ->get();
        // $query = $this->db->select("id_penyakit1")
        //          ->from('ranking')
        //          ->order_by('id_datalatih', 'asc')
        //          ->get();
        return $query->result_array();
    }

    public function add_diagnosa($data_diagnosa){
        $query = $this->db->insert("tb_diagnosa", $data_diagnosa);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function get_diagnosa($id_pasien){
        $query = $this->db->select("tb_penyakit.nama_penyakit, tb_penyakit.solusi_penyakit")
                 ->from('tb_diagnosa')
                 ->join('tb_penyakit','tb_penyakit.id_penyakit = tb_diagnosa.id_penyakit')
                 ->where('tb_diagnosa.id_pasien', $id_pasien)
                 ->limit('1')
                 ->get();
        return $query->result();
    }

    public function get_diagnosa2(){
        $query = $this->db->select("tb_diagnosa.id_diagnosa, tb_diagnosa.tanggal, tb_pasien.nama_pasien, tb_penyakit.nama_penyakit, tb_diagnosa.id_pasien")
                 ->from('tb_diagnosa')
                 ->join('tb_pasien','tb_pasien.id_pasien = tb_diagnosa.id_pasien')
                 ->join('tb_penyakit','tb_penyakit.id_penyakit = tb_diagnosa.id_penyakit')
                 ->group_by('tb_diagnosa.id_pasien')
                 ->get();
        return $query->result();
    }
}