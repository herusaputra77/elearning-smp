<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Beranda',
			'content' => 'guru/v_beranda'

		];
		$data['user'] = $this->M_User->session_guru();
		// var_dump($data['user']);
		$this->load->view('template/app3', $data);
	}
}

/* End of file Beranda.php */
