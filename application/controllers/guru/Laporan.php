<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function absensi()
	{
		$data = [
			'judul' => 'Laporan Absensi',
			'content' => 'guru/v_lapAbsensi'
		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		// var_dump($data['kelas']);
		$this->load->view('template/app3', $data);
	}
	public function absensi_kelas($id_kelas)
	{
		$data = [
			'judul' => 'Absensi Kelas',
			'content' => 'guru/v_lapAbsensiKelas'
		];
		$id = $this->session->userdata('id_user');
		$data['absensi'] = $this->M_Absensi->absensi_kelas($id_kelas);
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		$this->load->view('template/app3', $data);
	}
}

/* End of file Laporan.php */
