<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat2 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('obat_model');
		$data['obat_list'] = $this->obat_model->getDataObat();
		$this->load->view('Obat/list_obat', $data);
	}
}

