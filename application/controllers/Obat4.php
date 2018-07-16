<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obat4 extends CI_Controller {
public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('obat_model');
        }
    
        public function index()
    {
       $this->load->view('Obat/grid');
    }

    public function getAllObat()
    {
        // $this->load->model('Obat/grid');
        $result = $this->Obat_model->getAllObat2(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    // public function addObat()
    // {
    //     $this->Obat_model->save();
    // }

    // public function deleteObat()
    // {
    //     $Id = $this->input->post('id'); 
    //     $this->Obat_model->deleteKendaraan($Id);
    // }

    // public function updateObat()
    // {
    //     $Id = $this->input->post('id'); 
    //     $this->Obat_model->updatejs($Id);
    // }

    }

/* End of file Home.php */

?>