<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat3 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller)) {
				if (! $this->acl->is_allowed($current_controller,$data['level'])) 
				{
					redirect('Login/logout','refresh');
				}
			}
		} else {
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('obat_model');
		$data['obat_list'] = $this->obat_model->getDataObat();
		$this->load->view('Obat/list_obat2', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('obat_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('Obat/tambah_obat_view');
		}
		else
		{
			$config['upload_path']		= './assets/img';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 1000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('Obat/tambah_obat_view', $error);
			}

			else
			{
				$this->obat_model->insertObat();
				$this->load->view('Obat/tambah_obat_data');

			}
		}

	}

	// public function update($id)
	// {
	// 	$this->load->helper('url','form');
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	// 	$this->form_validation->set_rules('alamat', 'ALamat', 'trim|required');
	// 	$this->form_validation->set_rules('tanggalLahir', 'Tgl Lahir', 'trim|required');

	// 	$this->load->model('pegawai_model');
	// 	$data['pegawai'] = $this->pegawai_model->getPegawai($id);

	// 	if ($this->form_validation->run()==FALSE)
	// 	{
	// 		$this->load->view('edit_pegawai_view',$data);
	// 	}
	// 	else
	// 	{
	// 		$this->pegawai_model->updateById($id);
	// 		$this->load->view('edit_pegawai_data');
	// 	}
	// }

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("obat_model");
		$this->obat_model->delete($id);
		redirect('data_obat');
	}
}

