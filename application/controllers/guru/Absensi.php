<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Absensi',
			'content' => 'guru/v_absensi'
		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		// var_dump($data['kelas']);
		$this->load->view('template/app3', $data);
	}
	public function absen_kelas($id_kelas)
	{
		$data = [
			'judul' => 'Absensi Kelas',
			'content' => 'guru/v_absensiKelas'
		];


		$id = $this->session->userdata('id_user');
		$data['absensi'] = $this->M_Absensi->absensi_kelas($id_kelas);
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		$this->load->view('template/app3', $data);
	}
	public function add_absensi()
	{
		$id_guru = $this->session->userdata('id_user');

		$jam_masuk = $this->input->post('jam_masuk');
		$jam_keluar = $this->input->post('jam_keluar');
		$tanggal = $this->input->post('tgl_absensi');
		$id_kelas = $this->input->post('id_kelas');
		$keterangan = $this->input->post('keterangan');
		$kelas = $this->M_Kelas->get_siswa_kelasid($id_kelas);
		$data = [
			'id_kelas' => $id_kelas,
			'id_guru' => $id_guru,
			'tgl_absensi' => $tanggal,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'keterangan' => $keterangan
		];
		$this->db->insert('absensi_kelas', $data);
		$id_absensi_kelas = $this->db->insert_id();
		foreach ($kelas as $ke) {
			$data2 = [

				'id_absensi_kelas' => $id_absensi_kelas,
				'id_siswa' => $ke['id'],
			];

			$this->db->insert('tb_absensi_siswa', $data2);
		};
		redirect('guru/absensi/absen_kelas/' . $id_kelas);
	}
	public function hapus_absensiKelas($id)
	{
		$id_kelas = $this->uri->segment(4);
		$this->db->where('absensi_kelas.id_absensi_kelas', $id);
		$this->db->delete('absensi_kelas');
		redirect('guru/absensi/absen_kelas/' . $id_kelas);
	}
	public function detail_absen($id_absen)
	{

		$data = [
			'judul' => 'Absensi Siswa',
			'content' => 'guru/v_absen_siswa'
		];
		$id = $this->session->userdata('id_user');
		$data['siswa'] = $this->M_Absensi->get_absensi_siswa($id_absen);
		$data['user'] = $this->M_User->session_guru();
		$this->load->view('template/app3', $data);
	}
}

/* End of file Absensi.php */
