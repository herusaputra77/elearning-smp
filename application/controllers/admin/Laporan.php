<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function tugas()
	{
		$data = [
			'judul' => 'Laporan Tugas',
			'content' => 'admin/v_lapTugas'

		];
		$data['kelas'] = $this->M_Kelas->get_kelas_guru();
		$data['user'] = $this->M_User->session_admin();
		$data['siswa'] = $this->db->get('tb_siswa')->result_array();
		$this->load->view('template/app', $data);
	}
	public function detail_tugas($id)
	{
		$data = [
			'judul' => 'Nilai Tugas',
			'content' => 'admin/v_nilaiTugas'
		];
		$data['user'] = $this->M_User->session_admin();
		$data['tugas'] = $this->M_Tugas->tugas_admin($id);
		$data['row'] = $this->M_Tugas->tugas_admin($id);
		$this->load->view('template/app', $data);
	}
	public function nilai_kelas($id_kelas)
	{
		$data = [
			'judul' => 'Nilai Kelas',
			'content' => 'admin/v_nilaiKelas'
		];
		$data['user'] = $this->M_User->session_admin();
		$data['siswa'] = $this->M_Kelas->get_kelas_siswaid($id_kelas);
		// $data['tugas'] = $this->M_Tugas->tugas_admin($id);
		// $data['row'] = $this->M_Tugas->tugas_admin($id);
		$this->load->view('template/app', $data);
	}
}

/* End of file Laporan.php */
