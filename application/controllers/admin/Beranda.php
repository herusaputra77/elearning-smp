<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$tabel = 'tb_admin';
	}


	public function index()
	{
		$data = [
			'judul' => 'Beranda',
			'content' => 'admin/beranda'

		];
		$data['user'] = $this->M_User->session_admin();
		// var_dump($data['user']);
		$this->load->view('template/app', $data);
	}
}

/* End of file Beranda.php */
