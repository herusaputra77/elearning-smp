<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profile_guru extends CI_Controller
{
	public function index()
	{
		$data = [
			'judul' => 'Profile Guru',
			'content' => 'guru/v_profile'

		];
		$data['user'] = $this->M_User->session_guru();
		// var_dump($data['user']);
		$this->load->view('template/app3', $data);
	}
	public function edit()
	{
		$id = $this->session->userdata('id_user');

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$data = ['nm_guru' => $nama, 'alamat' => $alamat, 'no_hp' => $no_hp];
		$this->db->where('id', $id);
		$this->db->update('tb_guru', $data);
		redirect('guru/profile_guru');
	}
	public function edit_foto()
	{
		$id = $this->session->userdata('id_user');

		$file = $_FILES['foto']['name'];
		if ($file) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['remove_spaces']  = TRUE;
			$config['max_size']      = '4096';
			$config['upload_path'] = './assets/foto_profile/guru';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$file = $this->upload->data('file_name');
				$this->db->set('foto_guru', $file);
				$this->db->where('id', $id);
				$this->db->update('tb_guru');
			} else {
				echo $this->upload->display_errors();
			}
		}
		redirect('guru/profile_guru');
	}
}

/* End of file Profile_guru.php */
