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
			'judul' => 'Beranda',
			'content2' => 'siswa/v_tugas'

		];
		$id = $this->session->userdata('id_user');

		$data['user'] = $this->M_User->session_siswa();
		$data['tugas'] = $this->M_Tugas->get_tugas_siswaid($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app2', $data);
	}
	public function detail_tugas($id_tugas)
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/detail_tugas'

		];
		$id = $this->session->userdata('id_user');

		$data['user'] = $this->M_User->session_siswa();
		$data['tugas'] = $this->M_Tugas->get_tugasid_siswaid($id, $id_tugas);
		// var_dump($data['tugas']);
		$this->load->view('template/app2', $data);
	}
	public function upload_tugas($id_tugas)
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/upload_tugas'

		];
		$id = $this->session->userdata('id_user');

		$data['user'] = $this->M_User->session_siswa();
		$data['tugas'] = $this->M_Tugas->get_tugasid_siswaid($id, $id_tugas);
		// var_dump($data['tugas']);
		$this->load->view('template/app2', $data);
	}
	public function simpan_tugas()
	{
		$id_siswa = $this->session->userdata('id_user');

		$keterangan = $this->input->post('keterangan');
		$id_tugas = $this->input->post('id_tugas');
		$id_tugas_kelas = $this->input->post('id_tugas_kelas');

		$file = $_FILES['file_tugas']['name'];
		if ($file) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|docx|doc';
			$config['remove_spaces']  = TRUE;
			$config['max_size']      = '4096';
			$config['upload_path'] = './assets/tugas_siswa/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_tugas')) {
				$file = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		$data = [
			'id_siswa' => $id_siswa,
			'id_tugas_kelas' => $id_tugas_kelas,
			'file_tugas_siswa' => $file,
			'keterangan' => $keterangan,
			'waktu_kumpul_tugas' => time()
		];
		$this->db->insert('tb_tugas_siswa', $data);
		redirect('siswa/tugas/detail_tugas/' . $id_tugas);
	}
	public function catatan_tugas()
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/catatan_tugas'

		];
		$id = $this->session->userdata('id_user');

		$data['user'] = $this->M_User->session_siswa();
		$data['tugas'] = $this->M_Tugas->get_siswaid_tugas($id);
		// var_dump($data['tugas']);
		$this->load->view('template/app2', $data);
	}
	public function detail_tugas_siswa($id_tugas)
	{
		$data = [
			'judul' => 'Detail Tugas Siswa',
			'content2' => 'siswa/detail_tugasSiswa'

		];
		$id = $this->session->userdata('id_user');
		// var_dump($id_tugas);
		$data['user'] = $this->M_User->session_siswa();
		$data['tugas'] = $this->M_Tugas->get_detail_tugasid($id, $id_tugas);
		// var_dump($data['tugas']);
		$this->load->view('template/app2', $data);
	}
}

/* End of file Tugas.php */
