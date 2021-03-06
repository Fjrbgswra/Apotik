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

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('obat_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$data['data_obat'] = $this->obat_model->getObat($id);
			$this->load->view('Obat/edit_obat_view',$data);
		}
		else
		{
			$config['upload_path']		= './assets/img';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			$this->obat_model->updateById($id);
			$this->load->view('Obat/edit_obat_data');
		}


	}

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("obat_model");
		$this->obat_model->delete($id);
		redirect('Obat3');
	}
}

