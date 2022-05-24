<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/v_materi'

		];
		$id = 	$this->session->userdata('id_user');

		$data['materi'] = $this->M_Materi->get_materi_siswaid($id);
		$data['user'] = $this->M_User->session_siswa();
		// var_dump($data['materi']);
		$this->load->view('template/app2', $data);
	}
}

/* End of file Materi.php */
