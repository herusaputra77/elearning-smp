<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Absensi extends CI_Model
{

	public function get_absensi($tgl_sekarang)
	{

		$id = $this->session->userdata('id_user');

		$this->db->select('*');
		$this->db->from('absensi_kelas');
		$this->db->join('tb_kelas', 'tb_kelas.id = absensi_kelas.id_kelas', 'left');
		// $this->db->join('master_hari', 'master_hari.id_hari = tb_kelas.jadwal_hari', 'left');
		// $this->db->join('absensi_kelas', 'absensi_kelas.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_absensi_siswa', 'tb_absensi_siswa.id_absensi_kelas = absensi_kelas.id_absensi_kelas', 'left');
		$this->db->where('tb_absensi_siswa.id_siswa', $id);
		$this->db->where('absensi_kelas.tgl_absensi', $tgl_sekarang);

		// $this->db->where('master_hari.hari', $hari);

		return $this->db->get()->result_array();
	}
	public function cek_absen()
	{
		date_default_timezone_set('Asia/Jakarta');
		$jam = date('h:i:s A');
		$tgl_sekarang = date('Y-m-d');
		$id = $this->session->userdata('id_user');
		// $absen = $this->db->get_where('absensi_kelas')

		$this->db->select('*');
		$this->db->from('tb_absensi_siswa');
		$this->db->where('tb_absensi_siswa.id_siswa', $id);
		// $this->db->where('absensi_kelas.id_absensi_kelas', $id_absensi_kelas);
		$this->db->where('absensi_kelas.tgl_absensi', $tgl_sekarang);
		$this->db->join('absensi_kelas', 'absensi_kelas.id_absensi_kelas = tb_absensi_siswa.id_absensi_kelas', 'left');

		// $this->db->where('tb_absesnsi_siswa.id_siswas', $id);
		return $this->db->get()->result_array();
	}
	function absensi_kelas($id)
	{
		$this->db->select('*');
		$this->db->from('absensi_kelas');
		$this->db->join('tb_kelas', 'tb_kelas.id = absensi_kelas.id_kelas', 'left');
		$this->db->join('tb_guru', 'tb_guru.id = absensi_kelas.id_guru', 'left');

		$this->db->where('absensi_kelas.id_kelas', $id);

		return $this->db->get()->result_array();
	}
	function get_absensi_siswa($id)
	{
		$this->db->select('tb_absensi_siswa.*,absensi_kelas.*,tb_kelas.*,tb_siswa.*,tb_absensi_siswa.keterangan as keterangan_absen');
		$this->db->from('tb_absensi_siswa');
		$this->db->join('absensi_kelas', 'absensi_kelas.id_absensi_kelas = tb_absensi_siswa.id_absensi_kelas', 'left');
		$this->db->join('tb_kelas', 'tb_kelas.id = absensi_kelas.id_kelas', 'left');
		$this->db->join('tb_siswa', 'tb_absensi_siswa.id_siswa = tb_siswa.id', 'left');
		$this->db->join('tb_guru', 'tb_guru.id = absensi_kelas.id_guru', 'left');
		$this->db->where('absensi_kelas.id_absensi_kelas', $id);

		return $this->db->get()->result_array();
	}
	function get_absens_siswa($id_siswa)
	{
	}
}

/* End of file M_Absensi.php */
