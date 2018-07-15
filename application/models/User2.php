<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User2 extends CI_Model
	{
		public function getDataObat()
		{
			$query = $this->db->get("user");
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
			$this->db->insert('user', $object);
		}

		public function getObat($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('user');
			return $query->result();
		}

		public function updateById($id)
		{
			$this->db->where('id', $id);
			$object = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level' => $this->input->post('level')
				);
			$this->db->update('user', $object);
		}

		public function delete($id)
		{ 
        	if ($this->db->delete("user", "id = ".$id)) { 
            return true; 
        }
     }

     	public function getAllObat2(){
        $query = $this->db->get('user');
        if ($query->num_rows()>0) {
            # code...
            return $query->result();
        }
    }

	}

?>