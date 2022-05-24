<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Materi Pelajaran',
			'content' => 'guru/v_materi'
		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->M_Kelas->get_kelas_guruid($id);
		// var_dump($data['kelas']);
		$data['materi'] = $this->db->get_where('tb_materi', ['id_guru' => $id])->result_array();
		$data['user'] = $this->M_User->session_guru();
		$this->load->view('template/app3', $data);
	}
	public function add_materi()
	{
		$materi = $this->input->post('materi');
		$id_guru = $this->session->userdata('id_user');

		$file = $_FILES['file_materi']['name'];
		if ($file) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|docx|doc|mp3|mp4';
			$config['remove_spaces']  = False;
			$config['max_size']      = '';
			$config['upload_path'] = './assets/materi/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_materi')) {
				$file = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		// var_dump($file);
		// die;
		$data = [
			'judul_materi' => $materi,
			'tgl_input_materi' => time(),
			'id_guru' => $id_guru,
			'file_materi' => $file
		];
		$this->db->insert('tb_materi', $data);
		redirect('guru/materi');
	}
	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_materi');
		$this->session->flashdata('pesan', 'Data Berhasil Dihapus!');

		redirect('guru/materi');
	}
	public function kirim_materi()
	{
		$deskripsi = $this->input->post('deskripsi');
		$kelas = $this->input->post('kelas');
		$id_materi = $this->input->post('id_materi');

		$data = [
			'materi_id' => $id_materi,
			'kelas_id' => $kelas,
			'waktu_kirim' => time(),
			'deskripsi' => $deskripsi
		];
		$this->db->insert('tb_materi_kelas', $data);
		redirect('guru/materi');
	}
}

/* End of file Materi.php */
