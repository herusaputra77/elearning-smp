<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
	// admin

	public function get_admin()
	{
		return $this->db->get('tb_admin')->result_array();
	}
	public function session_admin()
	{
		$id = $this->session->userdata('id_user');
		return $this->db->get_where('tb_admin', ['id' => $id])->row_array();
	}
	// guru
	public function get_guru()
	{
		return $this->db->get('tb_guru')->result_array();
	}
	public function session_guru()
	{
		$id = $this->session->userdata('id_user');
		return $this->db->get_where('tb_guru', ['id' => $id])->row_array();
	}

	// siswa
	public function get_siswa()
	{
		return $this->db->get('tb_siswa')->result_array();
	}
	public function session_siswa()
	{
		$id = $this->session->userdata('id_user');
		return $this->db->get_where('tb_siswa', ['id' => $id])->row_array();
	}
}

/* End of file User.php */
