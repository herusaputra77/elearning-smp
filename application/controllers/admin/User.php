<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	// admin
	public function admin()
	{
		$data = [
			'judul' => 'Data Admin',
			'content' => 'admin/v_admin',
			'admin' => $this->M_User->get_admin()
		];
		$data['user'] = $this->M_User->session_admin();

		$this->load->view('template/app', $data);
	}
	public function add_admin()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$data = [
			'username' => $username,
			'password' => 1234,
			'nm_admin' => $nama
		];

		$this->db->insert('tb_admin', $data);
		redirect('admin/user/admin');
	}
	public function edit_admin()
	{
		$id_admin = $this->session->userdata('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$data = [
			'username' => $username,
			// 'password' => 1234,
			'nm_admin' => $nama
		];
		$this->db->where('id', $id_admin);
		$this->db->update('tb_admin', $data);
		redirect('admin/user/admin');
	}
	// guru

	public function guru()
	{
		$data = [
			'judul' => 'Data Guru',
			'content' => 'admin/v_guru',
			'admin' => $this->M_User->get_guru()
		];
		$data['user'] = $this->M_User->session_admin();

		$this->load->view('template/app', $data);
	}
	public function add_guru()
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$agama = $this->input->post('agama');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenkel = $this->input->post('jenkel');

		$data = [
			'username' => $username,
			'password' => 1234,
			'nm_guru' => $nama,
			'nip_guru' => $nip,
			'agama' => $agama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenkel' => $jenkel,
			'foto_guru' => 'user.png'


		];
		$this->db->insert('tb_guru', $data);
		redirect('admin/user/guru');
	}
	public function hapus_guru($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_guru');
		redirect('admin/user/guru');
	}
	public function edit_guru()
	{
		$id_guru = $this->input->post('id_guru');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$agama = $this->input->post('agama');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenkel = $this->input->post('jenkel');

		$data = [
			'username' => $username,
			'password' => 1234,
			'nm_guru' => $nama,
			'nip_guru' => $nip,
			'agama' => $agama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenkel' => $jenkel,
			'foto_guru' => 'user.png'


		];
		$this->db->where('id', $id_guru);
		$this->db->update('tb_guru', $data);
		redirect('admin/user/guru');
	}
	// siswa
	public function siswa()
	{
		$data = [
			'judul' => 'Data siswa',
			'content' => 'admin/v_siswa',
			'admin' => $this->M_User->get_siswa()
		];
		$data['user'] = $this->M_User->session_admin();
		$data['kelas'] = $this->M_Kelas->get_kelas();
		$data['siswa'] = $this->M_Kelas->get_kelas_siswa();
		// var_dump($data['kelas']);


		$this->load->view('template/app', $data);
	}
	public function add_siswa()
	{
		$nama = $this->input->post('nama');
		$nipd = $this->input->post('nipd');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');


		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenkel = $this->input->post('jenkel');
		$kelas = $this->input->post('kelas');


		$data = [
			'username' => $username,
			'password' => 1234,
			'nm_siswa' => $nama,
			'nipd' => $nipd,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nik' => $nik,
			'agama' => $agama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenkel' => $jenkel,
			'kelas_id' => $kelas,
			'foto' => 'user.png'
		];
		$this->db->insert('tb_siswa', $data);
		redirect('admin/user/siswa');
	}
	public function edit_siswa()
	{
		$id = $this->input->post('id');

		$nama = $this->input->post('nama');
		$nipd = $this->input->post('nipd');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');


		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenkel = $this->input->post('jenkel');
		$kelas = $this->input->post('kelas');


		$data = [
			'username' => $username,
			'password' => 1234,
			'nm_siswa' => $nama,
			'nipd' => $nipd,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nik' => $nik,
			'agama' => $agama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenkel' => $jenkel,
			'kelas_id' => $kelas,
			'foto' => 'user.png'
		];
		$this->db->where('id', $id);
		$this->db->update('tb_siswa', $data);
		redirect('admin/user/siswa');
	}
	public function hapus_siswa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_siswa');
		redirect('admin/user/siswa');
	}
}

/* End of file User.php */
