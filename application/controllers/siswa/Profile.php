<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Profile',
			'content2' => 'siswa/v_profile'

		];
		$data['user'] = $this->M_User->session_siswa();
		// var_dump($data['user']);
		$this->load->view('template/app2', $data);
		// $this->load->view('v_beranda');

	}
}

/* End of file Profile.php */
