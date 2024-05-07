<?php
class Kombinasi_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_data_penyakit() {
		$query = $this->db->get('koding'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
		return $query->result_array();
	}

}
