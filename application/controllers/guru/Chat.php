<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul' => 'Chat',
			'content' => 'guru/v_chat'

		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->db->get_where('tb_kelas', ['guru_id' => $id])->result_array();
		// var_dump($data['kelas']);
		$data['user'] = $this->M_User->session_guru();
		// var_dump($data['user']);
		$this->load->view('template/app3', $data);
	}
	public function chatId($id_kelas)
	{
		$data = [
			'judul' => 'Chat',
			'content' => 'guru/v_chatID'

		];
		$id = $this->session->userdata('id_user');
		$data['kelas'] = $this->db->get_where('tb_kelas', ['guru_id' => $id])->result_array();
		$data['user'] = $this->M_User->session_guru();
		$data['chat'] = $this->M_Chat->get_chat_id($id, $id_kelas);
		// var_dump($data['chat']);
		$this->load->view('template/app3', $data);
	}
	public function addChat()
	{
		date_default_timezone_set('Asia/Jakarta');

		$date = date('Y-m-d H:i:s');
		$id_kelas = $this->input->post('id_kelas');

		$pesan = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'id_guru' => $this->session->userdata('id_user'),
			'chat' => $this->input->post('chat'),
			'waktu' => $date,
		);

		$this->db->insert('tb_chat', $pesan);
		redirect('guru/chat/chatID/' . $id_kelas);
	}
}

/* End of file Chat.php */
