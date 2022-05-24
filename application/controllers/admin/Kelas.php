<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Data Kelas',
			'content' => 'admin/v_kelas'
		];
		$data['kelas'] = $this->M_Kelas->get_kelas_guru();
		$data['guru'] = $this->M_Guru->get_guru();
		// var_dump($data['kelas']);
		$data['user'] = $this->M_User->session_admin();
		$data['hari'] = $this->db->get('master_hari')->result_array();
		$this->load->view('template/app', $data);
	}
	public function add_kelas()
	{
		$nm_kelas = $this->input->post('nm_kelas');
		$nm_guru = $this->input->post('nm_guru');
		$jadwal = $this->input->post('jadwal');
		// $jam_masuk = $this->input->post('jam_masuk');
		// $jam_keluar = $this->input->post('jam_keluar');

		$data = [
			'nm_kelas' => $nm_kelas,
			'guru_id' => $nm_guru,
			'jadwal_hari' => $jadwal

		];
		$this->db->insert('tb_kelas', $data);
		redirect('admin/kelas');
	}
	public function kelas_siswa()
	{
		$data = [
			'judul' => 'Data Kelas',
			'content' => 'admin/v_kelasSiswa'

		];
		$data['kelas'] = $this->M_Kelas->row_kelas();
		$data['guru'] = $this->M_Guru->row_guru();
		$data['user'] = $this->M_User->session_admin();
		$data['siswa'] = $this->db->get('tb_siswa')->result_array();
		// var_dump($data['guru']);
		$this->load->view('template/app', $data);
	}
	public function isi_kelas($id)
	{
		$data = [
			'judul' => 'Isi Kelas',
			'content' => 'admin/v_kelasSiswa'

		];
		$data['guru'] = $this->M_Guru->row_guru($id);

		$data['user'] = $this->M_User->session_admin();
		$data['siswa'] = $this->M_Kelas->get_kelas_siswaid($id);
		$data['kelas'] = $this->M_Kelas->get_kelasid_guru($id);
		$data['kelas2'] = $this->db->get('tb_kelas')->result_array();

		// var_dump($data['siswa']);
		$this->load->view('template/app', $data);
	}
	public function ganti_isi_kelas()
	{
		$id_kelas = $this->input->post('id_kelas');
		$id_siswa = $this->input->post('id_siswa');
		$this->db->set('kelas_id', $id_kelas);
		$this->db->where('id', $id_siswa);
		$this->db->update('tb_siswa');
		redirect('admin/kelas/isi_kelas/' . $id_kelas);
	}
	public function hapus_kelas($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('tb_kelas');
		redirect('admin/kelas');
	}
	public function edit_kelas()
	{
		$id_kelas = $this->input->post('id_kelas');

		$nm_kelas = $this->input->post('nm_kelas');
		$nm_guru = $this->input->post('nm_guru');
		$data = [
			'nm_kelas' => $nm_kelas,
			'guru_id' => $nm_guru
		];
		$this->db->where('id', $id_kelas);
		$this->db->update('tb_kelas', $data);
		redirect('admin/kelas');
	}
}

/* End of file Kelas.php */
