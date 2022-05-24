<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// admin

	public function login_admin()
	{
		$data = [
			'judul' => 'Login',
			'content' => 'auth/login'
		];
		$this->load->view('Auth/login', $data, FALSE);
	}
	public function cek_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[12]');

		if ($this->form_validation->run() ==  FALSE) {
			$this->login_admin();
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$login = $this->db->get_where('tb_admin', ['username' => $username])->row_array();
			// var_dump($login['password']);
			// die;
			if ($password == $login['password']) {
				$data = [
					'username' => $login['username'],
					'id_user' => $login['id']

				];
				$this->session->set_userdata($data);
				redirect('admin/beranda');
			} else {
				$this->session->set_flashdata('gagal-login', 'Maaf! Silahkan coba lagi...');
				redirect(base_url('auth/login_admin'));
			}
		}
	}
	// guru
	// siswa
	public function login()
	{
		$data = [
			'judul' => 'Login',
			'content' => 'siswa/login'
		];
		$this->load->view('siswa/login', $data, FALSE);
	}
	public function cek_loginSiswa()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[12]');

		if ($this->form_validation->run() ==  FALSE) {
			$this->login();
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($role == 1) {

				$login = $this->db->get_where('tb_guru', ['username' => $username])->row_array();
				// var_dump($login['password']);
				// die;
				if ($password == $login['password']) {
					$data = [
						'username' => $login['username'],
						'id_user' => $login['id']

					];
					$this->session->set_userdata($data);
					redirect('guru/beranda');
				} else {
					$this->session->set_flashdata('gagal-login', 'Maaf! Silahkan coba lagi...');
					redirect(base_url('auth/login'));
				}
			} else {
				$login = $this->db->get_where('tb_siswa', ['username' => $username])->row_array();
				// var_dump($login['password']);
				// die;
				if ($password == $login['password']) {
					$data = [
						'username' => $login['username'],
						'id_user' => $login['id']

					];
					$this->session->set_userdata($data);
					redirect('siswa/beranda');
				} else {
					$this->session->set_flashdata('gagal-login', 'Maaf! Silahkan coba lagi...');
					redirect(base_url('auth/login_siswa'));
				}
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');

		$this->session->set_flashdata('success-logout', 'Berhasil!');
		redirect('/');
	}
}

/* End of file Auth.php */
