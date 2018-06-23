<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Obat_model extends CI_Model
	{
		public function getDataObat()
		{
			$query = $this->db->get("data_obat");
			return $query->result_array();
		}
		public function insertObat()
		{
			$tgl=$this->input->post('tanggal');
			$tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'nama' => $this->input->post('nama'),
				'keterangan' => $this->input->post('keterangan'),
				'tanggal' => $tglBaru,
				'foto' => $this->upload->data('file_name'));
			$this->db->insert('data_obat', $object);
		}

		public function getObat($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('data_obat');
			return $query->result();
		}

		public function updateById($id)
		{
			$this->db->where('id', $id);
			$object = array(
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'keterangan' => $this->input->post('keterangan'),
				'foto' => $this->upload->data('file_name'));
			$this->db->update('data_obat', $object);
		}

		public function delete($id)
		{ 
        	if ($this->db->delete("data_obat", "id = ".$id)) { 
            return true; 
        }
     }

     	public function getAllObat2(){
        $query = $this->db->get('data_obat');
        if ($query->num_rows()>0) {
            # code...
            return $query->result();
        }
    }

	}

?>