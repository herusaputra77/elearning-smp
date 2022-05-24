<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Tugas');
	}


	public function index()
	{

		$data = [
			'judul' => 'Tugas Siswa',
			'content' => 'guru/v_tugas'

		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		$data['tugas'] = $this->M_Tugas->get_tugas_guruid($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
	public function add_tugas()
	{
		$tugas = $this->input->post('tugas');
		$id_guru = $this->session->userdata('id_user');

		$file = $_FILES['file_tugas']['name'];
		if ($file) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|docx|doc';
			$config['remove_spaces']  = TRUE;
			$config['max_size']      = '4096';
			$config['upload_path'] = './assets/tugas/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_tugas')) {
				$file = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		// var_dump($file);
		// die;
		$data = [
			'id_guru' => $id_guru,
			'judul_tugas' => $tugas,
			'file_tugas' => $file,
			'tgl_upload' => time()
		];
		$this->db->insert('tb_tugas', $data);
		redirect('guru/tugas');
	}
	public function kirim_tugas()
	{
		$deskripsi = $this->input->post('deskripsi');
		$kelas = $this->input->post('kelas');
		$id_tugas = $this->input->post('id_tugas');
		$tgl_kumpul = $this->input->post('tgl_kumpul');
		$jam_kumpul = $this->input->post('jam_kumpul');



		$data = [
			'tugas_id' => $id_tugas,
			'kelas_id' => $kelas,
			'waktu_kirim_tugas' => time(),
			'tgl_dikumpul' => $tgl_kumpul,
			'jam_dikumpul' => $jam_kumpul,
			'deskripsi_tugas' => $deskripsi
		];
		$this->db->insert('tb_tugas_kelas', $data);
		redirect('guru/tugas');
	}
	public function tugas_siswa()
	{
		$data = [
			'judul' => 'Tugas Siswa',
			'content' => 'guru/v_tugasSiswa'
		];
		$id = $this->session->userdata('id_user');
		$data['user'] = $this->M_User->session_guru();

		$data['tugas'] = $this->M_Tugas->tugas_siswa($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
	public function detail_tugas()
	{
		$data = [
			'judul' => 'Data Tugas Siswa',
			'content' => 'guru/detail_TugasSiswa'
		];
		$id = $this->session->userdata('id_user');
		// $guru = $this->db->get_where('id', $id)->row_array();
		// $kelas = $guru[''];
		$data['user'] = $this->M_User->session_guru();

		$data['tugas'] = $this->M_Tugas->tugas_siswa($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
	public function nilai_tugas()
	{
		$id_tugas_kelas = $this->uri->segment(4);

		$id_tugas = $this->input->post('id_tugas');
		$nilai_tugas = $this->input->post('nilai_tugas');

		$this->db->set('nilai_tugas', $nilai_tugas);
		$this->db->where('id_tugas_siswa', $id_tugas);

		$this->db->update('tb_tugas_siswa');
		redirect('guru/tugas/detail_tugas/' . $id_tugas_kelas);
	}
	public function get_tugas_siswa()
	{
		$data = [
			'judul' => 'Data Kelas',
			'content' => 'guru/nilai_kelas'
		];
		$id = $this->session->userdata('id_user');
		// $guru = $this->db->get_where('id', $id)->row_array();
		// $kelas = $guru[''];
		$data['user'] = $this->M_User->session_guru();
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['tugas'] = $this->M_Tugas->tugas_siswa($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
	public function nilai_tugasSiswa($id_kelas)
	{
		$data = [
			'judul' => 'Data Siswa Kelas',
			'content' => 'guru/nilai_kelasSiswa'
		];
		$id = $this->session->userdata('id_user');
		$data['user'] = $this->M_User->session_guru();
		$data['detail_kelas'] = $this->M_Kelas->get_siswa_kelasid($id_kelas);
		$data['tugas'] = $this->M_Tugas->tugas_siswa($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
	public function nilai_siswa($id_siswa)
	{
		$data = [
			'judul' => 'Data Siswa Kelas',
			'content' => 'guru/nilai_siswa'
		];
		$id = $this->session->userdata('id_user');
		$data['user'] = $this->M_User->session_guru();
		// $data['detail_kelas'] = $this->M_Kelas->get_siswa_kelasid($id_kelas);
		$data['tugas'] = $this->M_Tugas->tugas_admin($id_siswa);
		// var_dump($data['tugas']);
		$this->load->view('template/app3', $data);
	}
}

/* End of file Tugas.php */
