<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Tugas extends CI_Model
{
	public function get_tugas_guruid($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tugas');
		$this->db->where('id_guru', $id);
		return $this->db->get()->result_array();
	}
	public function get_tugas_siswaid($id)
	{
		$this->db->select('tb_siswa.*, tb_kelas.*, tb_tugas.*,tb_tugas_kelas.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_siswa.kelas_id');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.kelas_id=tb_kelas.id');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas=tb_tugas_kelas.tugas_id');
		$this->db->order_by('tb_tugas_kelas.id_tugas_kelas', 'desc');

		$this->db->where('tb_siswa.id =', $id);

		return $this->db->get()->result_array();
	}
	public function get_tugasid_siswaid($id, $id_tugas)
	{
		$this->db->select('tb_siswa.*, tb_kelas.*, tb_tugas.*,tb_tugas_kelas.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_siswa.kelas_id');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.kelas_id=tb_kelas.id');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas=tb_tugas_kelas.tugas_id');
		$this->db->order_by('tb_tugas_kelas.id_tugas_kelas', 'desc');
		$this->db->where('tb_siswa.id =', $id);
		$this->db->where('tb_tugas.id_tugas =', $id_tugas);


		return $this->db->get()->result_array();
	}
	public function get_siswaid_tugas($id)
	{
		$this->db->select('tb_siswa.*, tb_tugas.*,tb_tugas_kelas.*,tb_tugas_siswa.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_siswa.kelas_id');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.kelas_id=tb_kelas.id');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas=tb_tugas_kelas.tugas_id');
		$this->db->join('tb_tugas_siswa', 'tb_tugas_siswa.id_tugas_kelas=tb_tugas_kelas.id_tugas_kelas');
		$this->db->order_by('tb_tugas_kelas.id_tugas_kelas', 'desc');
		$this->db->where('tb_siswa.id =', $id);
		return $this->db->get()->result_array();
	}
	public function get_detail_tugasid($id, $id_tugas)
	{
		$this->db->select('tb_siswa.*, tb_tugas.*,tb_tugas_kelas.*,tb_tugas_siswa.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_siswa.kelas_id');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.kelas_id=tb_kelas.id');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas=tb_tugas_kelas.tugas_id');
		$this->db->join('tb_tugas_siswa', 'tb_tugas_siswa.id_tugas_kelas=tb_tugas_kelas.id_tugas_kelas');
		$this->db->order_by('tb_tugas_kelas.id_tugas_kelas', 'desc');
		$this->db->where('tb_siswa.id =', $id);
		$this->db->where('tb_tugas_siswa.id_tugas_siswa=', $id_tugas);

		return $this->db->get()->result_array();
	}
	public function tugas_siswa($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tugas_siswa');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.id_tugas_kelas = tb_tugas_siswa.id_tugas_kelas', 'left');
		$this->db->join('tb_kelas', 'tb_tugas_kelas.kelas_id = tb_kelas.id', 'left');
		$this->db->join('tb_siswa', 'tb_siswa.id = tb_tugas_siswa.id_siswa', 'left');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas = tb_tugas_kelas.tugas_id', 'left');
		// $this->db->join('tb_guru', 'tb_guru.id_tugas = tb_tugas_kelas.tugas_id', 'left');

		$this->db->where('tb_tugas.id_guru', $id);

		return $this->db->get()->result_array();
	}
	function tugas_admin($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tb_tugas_siswa');
		$this->db->join('tb_siswa', 'tb_siswa.id = tb_tugas_siswa.id_siswa', 'left');
		$this->db->join('tb_tugas_kelas', 'tb_tugas_kelas.id_tugas_kelas = tb_tugas_siswa.id_tugas_kelas', 'left');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas = tb_tugas_kelas.tugas_id', 'left');
		$this->db->where('tb_siswa.id', $id_siswa);

		return $this->db->get()->result_array();
	}
	function tugas_kelas($id_tugas)
	{
		$id_guru = $this->session->userdata('id_user');
		$this->db->select('*');
		$this->db->from('tb_tugas_kelas');
		$this->db->join('tb_tugas', 'tb_tugas.id_tugas = tb_tugas_kelas.tugas_id', 'left');
		$this->db->join('tb_kelas', 'tb_kelas.id = tb_tugas_kelas.kelas_id', 'left');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id', 'left');
		$this->db->where('tb_tugas_kelas.tugas_id', $id_tugas);
		$this->db->where('tb_guru.id', $id_guru);
		return $this->db->get()->result_array();
	}
}

/* End of file M_Tugas.php */
