<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Chat extends CI_Model
{

	function kelas_guru($id)
	{
		$this->db->get_where('tb_kelas', ['guru_id' => $id])->result_array();
	}
	function get_chat_id($id, $id_kelas)
	{
		// $this->db->select('*');
		// $this->db->from('tb_chat');
		// $this->db->join('tb_guru', 'tb_guru.id = tb_chat.id_guru', 'left');
		// $this->db->join('tb_siswa', 'tb_siswa.kelas_id = tb_chat.id_kelas', 'left');

		// // $this->db->where('tb_chat.id_siswa', $id);
		// $this->db->where('tb_chat.id_kelas', $id_kelas);
		// $this->db->order_by('tb_chat.id_chat', 'desc');
		// $this->db->having($this->db->count('tb_chat.id_chat >= 1'));
		$query = "SELECT tb_chat.*, tb_siswa.* FROM `tb_chat` 
		LEFT JOIN `tb_guru` ON `tb_guru`.`id` = `tb_chat`.`id_guru` 
		LEFT JOIN `tb_siswa` ON `tb_siswa`.`kelas_id` = `tb_chat`.`id_kelas` 
		WHERE `tb_chat`.`id_kelas` = '$id_kelas'
		-- AND `tb_chat`.`id_siswa' = '$id` 
		GROUP BY tb_chat.id_chat 
		HAVING (COUNT(tb_chat.id_chat)>=1)";

		return $this->db->query($query)->result_array();
	}
	function get_chat_siswa($id, $id_kelas)
	{
		$this->db->select('*');
		$this->db->from('tb_chat');
		$this->db->join('tb_guru', 'tb_guru.id = tb_chat.id_guru', 'left');
		// $this->db->join('tb_siswa', 'tb_siswa.kelas_id = tb_chat.id_kelas', 'left');

		// $this->db->where('tb_chat.id_siswa', $id);
		$this->db->where('tb_chat.id_kelas', $id_kelas);
		return $this->db->get()->result_array();
	}
	function chat_siswa($id_siswa, $id_kelas)
	{
		$this->db->select('*');
		$this->db->from('tb_chat');
		$this->db->join('tb_guru', 'tb_guru.id = tb_chat.id_guru', 'left');
		$this->db->join('tb_siswa', 'tb_siswa.kelas_id = tb_chat.id_kelas', 'left');

		$this->db->where('tb_chat.id_siswa', $id_siswa);
		$this->db->where('tb_chat.id_kelas', $id_kelas);
		return $this->db->get()->result_array();
	}
}

/* End of file M_Chat.php */
