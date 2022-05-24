<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Kelas',
			'content' => 'guru/v_kelas'

		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		$data['user'] = $this->M_User->session_guru();
		$data['detail_kelas'] = $this->M_Kelas->get_siswa_kelasid($id);
		// var_dump($data['kelas']);
		$this->load->view('template/app3', $data);
	}
}

/* End of file Kelas.php */
