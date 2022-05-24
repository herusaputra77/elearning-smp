<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Beranda',
			'content2' => 'siswa/v_chat'

		];
		$siswa = $this->M_User->session_siswa();
		$id = $siswa['id'];
		$id_kelas = $siswa['kelas_id'];
		// var_dump($siswa);

		// die;
		$data['chat'] = $this->M_Chat->get_chat_siswa($id, $id_kelas);

		$data['user'] = $this->M_User->session_siswa();
		// var_dump($data['user']);
		$this->load->view('template/app2', $data);
		// $this->load->view('v_beranda');
	}
	public function addChat()
	{
		date_default_timezone_set('Asia/Jakarta');

		$date = date('Y-m-d H:i:s');
		$id_kelas = $this->input->post('id_kelas');

		$pesan = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'id_siswa' => $this->session->userdata('id_user'),
			'chat' => $this->input->post('chat'),
			'waktu' => $date,
		);

		$this->db->insert('tb_chat', $pesan);
		redirect('siswa/chat/');
	}
	public function reload()
	{
		$siswa = $this->M_User->session_siswa();
		$id = $siswa['id'];
		$id_kelas = $siswa['kelas_id'];
		$data = $this->M_Chat->get_chat_siswa($id, $id_kelas);

		echo json_encode($data);
	}
}

/* End of file Chat.php */
