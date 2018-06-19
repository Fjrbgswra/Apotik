<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Obat_model extends CI_Model
	{
		public function getDataPegawai()
		{
			$query = $this->db->get("data_obat");
			return $query->result_array();
		}
		// public function insertPegawai()
		// {
		// 	$tgl=$this->input->post('tglLahir');
		// 	$tglBaru=date_format(new DateTime($tgl),"Y-m-d");
		// 	$object = array(
		// 		'nama' => $this->input->post('nama'),
		// 		'alamat' => $this->input->post('alamat'),
		// 		'tanggalLahir' => $tglBaru,
		// 		'foto' => $this->upload->data('file_name'));
		// 	$this->db->insert('pegawai', $object);
		// }

		public function getPegawai($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('data_obat');
			return $query->result();
		}

		// public function updateById($id)
		// {
		// 	$data = array(
		// 		'nama' => $this->input->post('nama'),
		// 		'tanggalLahir' => $this->input->post('tanggalLahir'),
		// 		'alamat' => $this->input->post('alamat'));
		// 		//'foto' => $this->upload->data('file_name'));
		// 	$this->db->where('id', $id);
		// 	$this->db->update('pegawai', $data);
		// }

		// public function delete($id)
		// { 
  //       	if ($this->db->delete("pegawai", "id = ".$id)) { 
  //           return true; 
  //       }
  //    } 
	}

?>