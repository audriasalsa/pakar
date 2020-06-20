<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class DetailMetode extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("metode_model");
    }
    
    public function index(){
        //$this->load->view('template');
        $this->eucdatalatih();
    }

    public function eucdatalatih(){
        $this->metode_model->temp_euc();
        $this->metode_model->temp_eucuji();
        $this->metode_model->temp_rank();
        $this->metode_model->temp_validitas();
        $this->metode_model->temp_weightvoting();
        $id_pasien=$this->uri->segment(2);
        // var_dump($id_pasien);
        // die();
        // $this->metode_model->select_gejala();
        // Simpan hasil hitung jarak
        for($i=2; $i<=6; $i++){
            for($j=2; $j<=6; $j++){
                //var datalatih
                for ($k=1; $k<=17 ; $k++) {

                    switch ($k) {
                        
                        case 1:
                        $G1 = $this->metode_model->select_g($i,$k);
                        $Gtes1 = $this->metode_model->select_gtes($j,$k);
                        $Guji1 = $this->metode_model->select_guji($id_pasien,$k);
                        break;
                    // }
                    // elseif ($k=2) {
                        case 2:
                        $G2 = $this->metode_model->select_g($i,$k);
                        $Gtes2 = $this->metode_model->select_gtes($j,$k);
                        $Guji2 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 3:
                        $G3 = $this->metode_model->select_g($i,$k);
                        $Gtes3 = $this->metode_model->select_gtes($j,$k);
                        $Guji3 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 4:
                        $G4 = $this->metode_model->select_g($i,$k);
                        $Gtes4 = $this->metode_model->select_gtes($j,$k);
                        $Guji4 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 5:
                        $G5 = $this->metode_model->select_g($i,$k);
                        $Gtes5 = $this->metode_model->select_gtes($j,$k);
                        $Guji5 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 6:
                        $G6 = $this->metode_model->select_g($i,$k);
                        $Gtes6 = $this->metode_model->select_gtes($j,$k);
                        $Guji6 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 7:
                        $G7 = $this->metode_model->select_g($i,$k);
                        $Gtes7 = $this->metode_model->select_gtes($j,$k);
                        $Guji7 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 8:
                        $G8 = $this->metode_model->select_g($i,$k);
                        $Gtes8 = $this->metode_model->select_gtes($j,$k);
                        $Guji8 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 9:
                        $G9 = $this->metode_model->select_g($i,$k);
                        $Gtes9 = $this->metode_model->select_gtes($j,$k);
                        $Guji9 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 10:
                        $G10 = $this->metode_model->select_g($i,$k);
                        $Gtes10 = $this->metode_model->select_gtes($j,$k);
                        $Guji10 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 11:
                        $G11 = $this->metode_model->select_g($i,$k);
                        $Gtes11 = $this->metode_model->select_gtes($j,$k);
                        $Guji11 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 12:
                        $G12 = $this->metode_model->select_g($i,$k);
                        $Gtes12 = $this->metode_model->select_gtes($j,$k);
                        $Guji12 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 13:
                        $G13 = $this->metode_model->select_g($i,$k);
                        $Gtes13 = $this->metode_model->select_gtes($j,$k);
                        $Guji13 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 14:
                        $G14 = $this->metode_model->select_g($i,$k);
                        $Gtes14 = $this->metode_model->select_gtes($j,$k);
                        $Guji14 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 15:
                        $G15 = $this->metode_model->select_g($i,$k);
                        $Gtes15 = $this->metode_model->select_gtes($j,$k);
                        $Guji15 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 16:
                        $G16 = $this->metode_model->select_g($i,$k);
                        $Gtes16 = $this->metode_model->select_gtes($j,$k);
                        $Guji16 = $this->metode_model->select_guji($id_pasien,$k);
                        break;

                        case 17:
                        $G17 = $this->metode_model->select_g($i,$k);
                        $Gtes17 = $this->metode_model->select_gtes($j,$k);
                        $Guji17 = $this->metode_model->select_guji($id_pasien,$k);
                        break;
                    }
                }

                // $rumus = sqrt(pow(($usiates-$usia), 2) + pow(($bbtes-$berat), 2));
                    // $rumus = sqrt((((float)$G1->nilai)));
                $rumus = sqrt(pow((float)$G1->nilai - (float)$Gtes1->nilai ,2)
                        +pow((float)$G2->nilai - (float)$Gtes2->nilai ,2)
                        +pow((float)$G3->nilai - (float)$Gtes3->nilai ,2)
                        +pow((float)$G4->nilai - (float)$Gtes4->nilai ,2)
                        +pow((float)$G5->nilai - (float)$Gtes5->nilai ,2)
                        +pow((float)$G6->nilai - (float)$Gtes6->nilai ,2)
                        +pow((float)$G7->nilai - (float)$Gtes7->nilai ,2)
                        +pow((float)$G8->nilai - (float)$Gtes8->nilai ,2)
                        +pow((float)$G9->nilai - (float)$Gtes9->nilai ,2)
                        +pow((float)$G10->nilai - (float)$Gtes10->nilai ,2)
                        +pow((float)$G11->nilai - (float)$Gtes11->nilai ,2)
                        +pow((float)$G12->nilai - (float)$Gtes12->nilai ,2)
                        +pow((float)$G13->nilai - (float)$Gtes13->nilai ,2)
                        +pow((float)$G14->nilai - (float)$Gtes14->nilai ,2)
                        +pow((float)$G15->nilai - (float)$Gtes15->nilai ,2)
                        +pow((float)$G16->nilai - (float)$Gtes16->nilai ,2)
                        +pow((float)$G17->nilai - (float)$Gtes17->nilai ,2)
                );
                $rumusuji = sqrt(pow((float)$G1->nilai - (float)$Guji1->nilai ,2)
                        +pow((float)$G2->nilai - (float)$Guji2->nilai ,2)
                        +pow((float)$G3->nilai - (float)$Guji3->nilai ,2)
                        +pow((float)$G4->nilai - (float)$Guji4->nilai ,2)
                        +pow((float)$G5->nilai - (float)$Guji5->nilai ,2)
                        +pow((float)$G6->nilai - (float)$Guji6->nilai ,2)
                        +pow((float)$G7->nilai - (float)$Guji7->nilai ,2)
                        +pow((float)$G8->nilai - (float)$Guji8->nilai ,2)
                        +pow((float)$G9->nilai - (float)$Guji9->nilai ,2)
                        +pow((float)$G10->nilai - (float)$Guji10->nilai ,2)
                        +pow((float)$G11->nilai - (float)$Guji11->nilai ,2)
                        +pow((float)$G12->nilai - (float)$Guji12->nilai ,2)
                        +pow((float)$G13->nilai - (float)$Guji13->nilai ,2)
                        +pow((float)$G14->nilai - (float)$Guji14->nilai ,2)
                        +pow((float)$G15->nilai - (float)$Guji15->nilai ,2)
                        +pow((float)$G16->nilai - (float)$Guji16->nilai ,2)
                        +pow((float)$G17->nilai - (float)$Guji17->nilai ,2)
                );
                    // var_dump($rumus);
                    // die();
                    // echo $rumus;
                
                    $data = array(
                        'id_datalatih' => $i,
                        'id_datalatih2' => $j,
                        'jarak' => $rumus,
                    );
                    $this->metode_model->add_euclidien($data);
                    $datauji = array(
                        'id_datalatih' => $i,
                        'id_pasien' => $id_pasien,
                        'jarak' => $rumusuji,
                    );
                    $this->metode_model->add_euclidienuji($datauji);
            }
        }
                for($l=1; $l<=6; $l++){
                    $ranking = $this->metode_model->ranking($l);
                    foreach ($ranking as $datas) {
                        $datas     = get_object_vars($datas);
                        // var_dump($data);
                        // die();
                        $idp1=$datas['id_datalatih'];
                        $idp2=$datas['id_datalatih2'];
                        // var_dump($idp1);
                        // var_dump($idp2);
                        // die();
                        $penyakit1 = $this->metode_model->penyakit1($idp1);
                        $penyakit2 = $this->metode_model->penyakit2($idp2);
                        // var_dump($penyakit1);
                        // var_dump($penyakit2);
                        // die();
                        $id_penyakit1 = $penyakit1->id_penyakit;
                        $nyoba2 = $penyakit2->id_penyakit;
                        
                        if ($penyakit1 == $penyakit2) {
                            $n = 1;
                        }
                        else{
                            $n = 0;
                        }
                        // $jumlahn = $this->metode_model->jumlahn($idp1);
                        $data = array(
                        'id_datalatih' => $datas ['id_datalatih'] , 
                        'id_datalatih2' => $datas ['id_datalatih2'],
                        'Jarak' => $datas['Jarak'],
                        'id_penyakit1' => $id_penyakit1,
                        'id_penyakit2' => $penyakit2->id_penyakit,
                        'n' => $n
                        );
                        $this->metode_model->add_ranking($data); 

                        
                        $jumlahn = $this->metode_model->jumlahn($idp1);
                        // $datan['jumlahn'] = $this->metode_model->jumlahn($idp1);
                        $rumusv = (1/3)*((float)$jumlahn->jmln);
                        $datav = array(
                            'id_datalatih' => $datas ['id_datalatih'],
                            'validitas' => $rumusv,  
                        );
                        // var_dump($rumusv);
                        // die();
                        $this->metode_model->add_validitas($datav);

                        $vali = $this->metode_model->get_vali($idp1);
                        $eucuji= $this->metode_model->get_eucuji($idp1);
                        $weightvoting = $vali->validitas*(1/($eucuji->jarak+0.5));

                        // var_dump($vali,$eucuji,$weightvoting);
                        // die();

                        $datawv = array(
                            'id_datalatih' => $datas ['id_datalatih'],
                            'weightvoting' => $weightvoting,  
                        );
                        $this->metode_model->add_weightvoting($datawv);

                        $k = 3;

                        
                    }

                    // $penyakit1 = $this->metode_model->penyakit1($l);
                }
                    
                    $data = array(

                        'title'     => 'Data Datalatih',
                        'data_euclidien' => $this->metode_model->euclidien(),
                        'data_ranking' => $this->metode_model->ranking2(), 
                        'data_validitas'=> $this->metode_model->get_validitas(),
                        'data_diagnosa'=> $this->metode_model->get_diagnosa2(),
                        'data_uji'=> $this->metode_model->datauji($id_pasien),
                        'data_euclidienuji' => $this->metode_model->euclidienuji(),
                        'data_weightvoting' =>$this->metode_model->get_weightvoting(),
                        'data_weightvotinglimit' =>$this->metode_model->get_weightvotinglimit($k),
                        'data_diagnosa' => $this->metode_model->get_diagnosa($id_pasien),

                    );
                    // var_dump($data);
                    // die();
                    $this->template->load('template','metodedetail_view', $data);
                // }
                
        //     }
        // }

    }

    public function eucdatauji(){
        
    }


}