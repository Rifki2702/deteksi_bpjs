<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
		// Load library PHPExcel (PhpSpreadsheet)
		// $this->load->library('PhpSpreadsheet');
    }

	public function index() {
		$this->load->library('form_validation');
		$this->load->model('profile_model');

		$data['current_user'] = $this->auth_model->current_user();

		
		
		if ($this->input->method() === 'post') {
			$base64Gambar = $_FILES["gambar"]["tmp_name"];
			$Path = "upload/profile/";
			$ImagePath = $Path . $data['current_user']->id. "_logoku.png";
			move_uploaded_file($base64Gambar, $ImagePath);
			
			$rules = $this->profile_model->profile_rules();
			
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('profile', $data );
			}


			$new_data = [
				'id' => $data['current_user']->id,
				'fullname' => $this->input->post('fullname'),
				'password' => $_POST['password'] != '' ? password_hash($this->input->post('password'), PASSWORD_DEFAULT) : 'admin',
				'foto' => !empty($_FILES['gambar']['name']) ? base_url() . $ImagePath : null,
				'username' => $this->input->post('username'),
				'study' => $this->input->post('study'),
			];
			if($this->profile_model->update($new_data)){
				$this->session->set_flashdata('message', 'Profile was updated');
				redirect(site_url('admin/dashboard'));
			}
		}
		
		$data['current_user'] = $this->auth_model->current_user();
        $this->load->view('profile',$data);
    }

}
