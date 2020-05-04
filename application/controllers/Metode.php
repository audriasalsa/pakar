<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Metode extends CI_Controller{
    
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
        $this->metode_model->temp_rank();
        // $this->metode_model->select_gejala();
        // Simpan hasil hitung jarak
        for($i=2; $i<=6; $i++){
            for($j=2; $j<=6; $j++){
                //var datalatih
                for ($k=1; $k<=17 ; $k++) {

                    $G1 = $this->metode_model->select_gejala($i,$k);
                    $rumus = (float)$G1->nilai;
                    // var_dump($rumus);
                    // die();
                    // echo $rumus;

                    $data = array(
                        'id_datalatih' => $i,
                        'id_datalatih2' => $j,
                        'jarak' => $rumus,
                    );
                    $this->metode_model->add_euclidien($data);
                    // var_dump($data);
                    // die();
                }
            }
        }
                
                    $ranking = $this->metode_model->ranking();
                    // var_dump($ranking);
                    // die();
                    foreach ($ranking as $datas ) {
                        
                    // while ($ranking = $datas) {
                        $datar = array(
                            'id_datalatih' => $i,
                            'id_datalatih2' => $j,
                            'jarak' => $rumus,
                        );
                        $this->metode_model->add_ranking($datar);
                        //  var_dump($datar);
                        // die();
                        // $this->template->load('template','metode_view', $datar);
                     }
                    $data = array(

                        'title'     => 'Data Datalatih',
                        'data_euclidien' => $this->metode_model->ranking(),

                    );
                    // var_dump($data);
                    // die();
                    $this->template->load('template','metode_view', $data);
                // }
                
        //     }
        // }

    }

}