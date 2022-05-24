<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/v_absensi'

		];
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d');
		// echo $tanggal;
		$tgl_sekarang = date('D', strtotime($tanggal));
		$listhari = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => "Jum'at",
			'Sat' => "Sabtu",
		);
		// echo $tgl_sekarang;
		$id_siswa =	$this->session->userdata('id_user');

		$hariIni = $listhari[$tgl_sekarang];
		$data['kelas'] = $this->M_Absensi->get_absensi($tanggal, $id_siswa);
		// var_dump($data['kelas']);
		$kelas = $this->M_Absensi->get_absensi($tanggal);
		$data['user'] = $this->M_User->session_siswa();
		// $data['absen'] = $this->M_absen->get_absen_siswa($id_siswa);
		foreach ($kelas as $k) {
			echo $k['id'];
			echo $tanggal;
			echo $id_siswa;
			$data['absen'] =  $this->M_Absensi->cek_absen();
			// var_dump($data['absen']);
			// die;
		}
		// var_dump($data['kelas']);
		$this->load->view('template/app2', $data);
		// $this->load->view('v_beranda');

	}
	public function isi_absen()
	{
		$id_siswa = 	$this->session->userdata('id_user');
		$id_absensi_kelas = $this->input->post('id_absensi_kelas');
		$id_absensi_siswa = $this->input->post('id_absensi_siswa');

		$id_kelas = $this->input->post('id_kelas');
		$jam_masuk = $this->input->post('jam_masuk');
		$tgl_absen = $this->input->post('tgl_absen');

		$data = [
			// 'id_absensi_kelas' => $id_absensi_kelas,
			// // 'kelas_id' => $id_kelas,
			// 'id_siswa' => $id_siswa,
			'jam_absensi_siswa' => $jam_masuk,
			'tgl_absensi_siswa' => $tgl_absen,
			'keterangan' => 'hadir'
		];
		$this->db->where('id_absensi_siswa', $id_absensi_siswa);
		$this->db->update('tb_absensi_siswa', $data);
		$this->session->flashdata('name', 'Anda Telah Mengisi Absen');

		redirect('siswa/absensi');
	}
}

/* End of file Absensi.php */
