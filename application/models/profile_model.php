<?php
class profile_model extends CI_Model
{
	private $_table = "users";

	public function profile_rules()
	{
		return [
			[
				'field' => 'fullname',
				'label' => 'Fullname',
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'study',
				'label' => 'Study',
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|max_length[32]'
			],
		];
	}

	public function password_rules()
	{
		return [
			[
				'field' => 'password',
				'label' => 'New Password',
				'rules' => 'required'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			],
		];
	}

	public function update($data)
	{
		if (!$data['id']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id' => $data['id']]);
	}
}
?>
