<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koding extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('auth_model');
		$this->load->model('Kombinasi_model'); // Memuat model yang telah dibuat
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
		// Load library PHPExcel (PhpSpreadsheet)
		// $this->load->library('PhpSpreadsheet');
    }

    public function index() {
        $this->load->view('koding');
    }

	public function checkKombinasi()
	{
		$kode1_input = $this->input->post('kode_satu');
		$kode2_input = $this->input->post('kode_dua');
		$database_penyakit = $this->Kombinasi_model->get_data_penyakit(); // Mengambil data dari model
		$hasil_cek = $this->cek_kombinasi($kode1_input, $kode2_input, $database_penyakit);
		$data['hasil_cek'] = $hasil_cek;
//		$this->load->view('koding', $data);
		$this->load->view('koding_result', $data);

	}
	private function cek_kombinasi($kode1, $kode2, $database_penyakit) {
		foreach ($database_penyakit as $idx => $penyakit) {
			if ($kode1 == $penyakit['kode_satu'] && $kode2 == $penyakit['kode_dua']) {
				$kode = $penyakit['kode_bpjs'] != null ? $penyakit['kode_bpjs'] : '-';
				$data = [
					'title' => 'Seharusnya di kode '.$kode,
					'keterangan' => $penyakit['keterangan'],
				];
				return $data;
			}
		}
		$data = [
			'title' => null,
			'keterangan' => 'Tidak sesuai dengan BA kesepakatan',
		];
		return $data;
	}

}
