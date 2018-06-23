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
       $this->load->view('Obat/Grid');
    }

    public function getAllObat()
    {
        $result = $this->Obat_model->getAllObat2(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addDoktor()
    {
        $this->pegawai_model->save();
    }

    public function deleteDoktor()
    {
        $Id = $this->input->post('id'); 
        $this->pegawai_model->deleteKendaraan($Id);
    }

    public function updateDoktor()
    {
        $Id = $this->input->post('id'); 
        $this->pegawai_model->updatejs($Id);
    }

    }

/* End of file Home.php */

?>