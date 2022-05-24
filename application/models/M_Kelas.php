<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Kelas extends CI_Model
{
	public function get_kelas()
	{
		return $this->db->get('tb_kelas')->result_array();
	}
	public function row_kelas()
	{
		$this->db->select('tb_kelas.id as id_kelas, tb_kelas.nm_kelas,tb_guru.id as guru_id, tb_guru.nm_guru');
		$this->db->from('tb_kelas');
		return $this->db->get('tb_kelas')->row_array();
	}
	public function get_kelas_guru()
	{
		$this->db->select('tb_kelas.id as id_kelas, tb_kelas.nm_kelas,tb_guru.id as guru_id, tb_guru.nm_guru');
		$this->db->from('tb_kelas');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id');
		return $this->db->get()->result_array();
	}
	public function get_kelas_siswa()
	{
		$this->db->select('tb_siswa.id as siswa_id, tb_siswa.*,tb_kelas.id as id_kelas, tb_kelas.nm_kelas');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.kelas_id = tb_kelas.id');
		return $this->db->get()->result_array();
	}
	public function get_kelas_siswaid($id)
	{
		$this->db->select('tb_siswa.*', 'tb_kelas.*', 'tb_siswa.id as id_siswa', 'tb_guru.*');
		$this->db->from('tb_siswa');
		$this->db->where('tb_kelas.id', $id);
		$this->db->join('tb_kelas', 'tb_siswa.kelas_id = tb_kelas.id');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id');

		return $this->db->get()->result_array();
	}
	public function get_kelasid_guru($id)
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id');
		$this->db->join('master_hari', 'master_hari.id_hari = tb_kelas.jadwal_hari');

		$this->db->where('tb_kelas.id', $id);

		return $this->db->get()->row_array();
	}
	public function get_kelas_guruid($id)
	{
		$this->db->select('tb_kelas.id as kelas_id, tb_kelas.*, tb_guru.*,master_hari.*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id');
		$this->db->join('master_hari', 'master_hari.id_hari = tb_kelas.jadwal_hari');

		$this->db->where('tb_guru.id', $id);

		return $this->db->get()->result_array();
	}
	public function get_siswa_kelasid($id)
	{
		$this->db->select('tb_kelas.id as kelas_id, tb_kelas.*, tb_siswa.*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_siswa', 'tb_siswa.kelas_id = tb_kelas.id');
		$this->db->where('tb_kelas.id', $id);
		return $this->db->get()->result_array();
	}
	public function count_siswa_kelasid($id)
	{
		$this->db->select('tb_kelas.id as kelas_id, tb_kelas.*, tb_siswa.*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_siswa', 'tb_siswa.kelas_id = tb_kelas.id');
		$this->db->where('tb_kelas.id', $id);
		return $this->db->count()->result_array();
	}
}

/* End of file M_Kelas.php */
