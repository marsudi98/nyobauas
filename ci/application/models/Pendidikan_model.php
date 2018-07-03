<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pendidikan_model extends CI_Model
	{
		public function getDataPendidikan()
		{
			$query = $this->db->get("pendidikan");
			return $query->result_array();
		}
		public function getPendidikanByIdJabatan($id)
		{
			$query = $this->db->query("select * from pendidikan where fk_pegawai='$id'");
			return $query->result_array();
		}
		public function insertPendidikan()
		{
			
			$object = array(
				'id' => $this->input->post('id'),
				'namaSekolah' => $this->input->post('namaSekolah'),
				'tahunLulus' => $this->input->post('tahunLulus'),
				'fk_pegawai' => $this->input->post('fk_pegawai')
			);
			$this->db->insert('pendidikan', $object);
		}

		public function getPendidikan($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('pendidikan');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'namaSekolah' => $this->input->post('namaSekolah'),
				'tahunLulus' => $this->input->post('tahunLulus')
			);
			$this->db->where('id', $id);
			$this->db->update('pendidikan', $data);
		}

		public function delete($id)
		{ 
        	if ($this->db->delete("pendidikan", "id = ".$id)) { 
            return true; 
        }
      } 
	}

?>