<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Materi extends CI_Model
{

	public function get_materi_siswaid($id)
	{
		$this->db->select('tb_siswa.*, tb_kelas.*, tb_materi.*,tb_materi_kelas.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_siswa.kelas_id');
		$this->db->join('tb_materi_kelas', 'tb_materi_kelas.kelas_id=tb_kelas.id');
		$this->db->join('tb_materi', 'tb_materi.id=tb_materi_kelas.materi_id');
		$this->db->where('tb_siswa.id =', $id);
		$this->db->order_by('tb_materi_kelas.id_materi_kelas', 'desc');


		return $this->db->get()->result_array();
	}
	function kirim_materi($id_materi)
	{
		$id_guru =  $this->session->userdata('id_user');

		$this->db->select('*');
		$this->db->from('tb_materi_kelas');
		$this->db->join('tb_kelas', 'tb_kelas.id=tb_materi_kelas.kelas_id');
		$this->db->join('tb_materi', 'tb_materi.id=tb_materi_kelas.materi_id');
		$this->db->join('tb_guru', 'tb_guru.id=tb_kelas.guru_id');
		$this->db->where('tb_guru.id', $id_guru);
		$this->db->where('tb_materi_kelas.materi_id', $id_materi);
		$this->db->order_by('tb_materi_kelas.id_materi_kelas', 'desc');
		return $this->db->get()->result_array();
	}
}

/* End of file M_Materi.php */
