<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Guru extends CI_Model
{

	public function get_guru()
	{
		return $this->db->get('tb_guru')->result_array();
	}
	public function row_guru($id)
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_guru', 'tb_guru.id = tb_kelas.guru_id', 'left');
		$this->db->where('tb_kelas.id', $id);

		return $this->db->get()->row_array();
	}
}

/* End of file M_Guru.php */
