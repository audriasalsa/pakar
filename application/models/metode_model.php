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

    public function temp_rank(){
        $this->db->query("CREATE TEMPORARY TABLE Ranking(
        Nomor int AUTO_INCREMENT primary key,
        id_datalatih int,
        id_datalatih2 int,
        Jarak float(10,4));");
    }

    public function select_gejala($i,$k){
        $query = $this->db->select("tb_datalatih.nilai")
            ->from('tb_pasien')
            ->join('tb_datalatih','tb_pasien.id_pasien = tb_datalatih.id_pasien')
            ->where('tb_pasien.id_pasien', $i)
            ->where('tb_datalatih.id_gejala', 'G'.$k)
            ->get();
        $G1 = $query->row();
        // var_dump($G1);
        // die();
        return $G1;
    }

    public function add_euclidien($data){
        $query = $this->db->insert("euclidien", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    public function ranking(){
        $query = $this->db->select("*")
                 ->from('euclidien')
                 ->order_by('jarak', 'desc')
                 // ->limit(17)
                 ->get();
        return $query->result();
    }

    public function add_ranking($datar){

        $query = $this->db->insert("ranking", $datar);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function get_all(){
        $query = $this->db->select("*")
                 ->from('euclidien')
                 ->order_by('jarak', 'asc')
                 ->limit(3)
                 ->get();
        return $query->result();
    }
    public function add_euc()
    {
            // Simpan hasil hitung jarak
            for($i=2; $i<=6; $i++){
                for($j=2; $j<=6; $j++){
                    //var datalatih
                    for ($k=1; $k<=17 ; $k++) { 
                        // $G['$k'] = "SELECT G.$k FROM tb_pasien 
                        //   INNER JOIN tb_datalatih ON tb_pasien.id_pasien = tb_datalatih.id_datalatih where tb_datalatih.id_datalatih = '$i';";
                        // $Gtes['$k'] = "SELECT G.$k FROM tb_pasien 
                        //   INNER JOIN tb_datalatih ON tb_pasien.id_pasien = tb_datalatih.id_datalatih where tb_datalatih.id_datalatih = '$i';";
                    $G1 = $this->db->select("tb_datalatih.nilai")
                            ->from('tb_pasien')
                            ->join('tb_datalatih','tb_pasien.id_pasien = tb_datalatih.id_pasien')
                            ->where('tb_pasien.id_pasien', '$i')
                            ->where('tb_datalatih.id_gejala', 'G$k')
                            ->get();
                    // return true;
                    // $this->db->query("SELECT tb_datalatih.nilai FROM tb_pasien INNER JOIN tb_datalatih ON tb_pasien.id_pasien = tb_datalatih.id_pasien where tb_pasien.id_pasien = '$i' and tb_datalatih.id_gejala = 'G1' ;");

                    // $this->db->select('tb_datalatih.nilai')->from('tb_pasien INNER JOIN tb_datalatih ON tb_pasien.id_pasien = tb_datalatih.id_pasien')->where('tb_pasien.id_pasien ='.$i.  'and tb_datalatih.id_gejala = G1');

                    // $G1 = $this->db->get();
                    
                    // }
                    // Hitung jarak setiap sampel
                    $rumus = sqrt(pow((int)$G1-(int)$G1));
                     // $rumus = sqrt(pow(($Gtes1-$G1), 2) + pow(($Gtes2-$G2), 2) + pow(($Gtes3-$G3), 2) +
                     //    pow(($Gtes4-$G4), 2) + pow(($Gtes5-$G5), 2) + pow(($Gtes6-$G6), 2) + 
                     //    pow(($Gtes7-$G7), 2) + pow(($Gtes8-$G8), 2) + pow(($Gtes9-$G9), 2) +
                     //    pow(($Gtes10-$G10), 2) + pow(($Gtes11-$G11), 2) + pow(($Gtes12-$G12), 2) +
                     //    pow(($Gtes13-$G13), 2) + pow(($Gtes14-$G14), 2) + pow(($Gtes15-$G15), 2) +
                     //    pow(($Gtes16-$G16), 2) + pow(($Gtes17-$G17), 2)
                     // );
                    $query = "INSERT INTO euclidien (id_datalatih,id_datalatih2,Jarak,Status)
                            VALUES ('".$i."','".$j."',".$rumus.",'".$datatrain['id_penyakit']."'); ";
                    // Urutkan jarak dari yang terkecil
                    $rangking = "SELECT * FROM euclidien ORDER BY Jarak ASC LIMIT '3';";      
                    while ($datas = $rangking) {
                      // Simpan kesimpulan
                      $query = "INSERT INTO ranking (id_datalatih,id_datalatih2,Jarak,Status)
                                    VALUES ('".$i."','".$j."',".$rumus.",'".$datatrain['id_penyakit']."'); ";
                    }
                }
            }
            
             }
    }
}