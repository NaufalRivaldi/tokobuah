<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	private $_table = "user";

	public $username;
	public $password;
	public $name;
	public $email;
	public $no_telp;
	public $address;

	public function rules(){
		return [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'no_telp',
				'label' => 'No_telp',
				'rules' => 'numeric'
			],
			[
				'field' => 'address',
				'label' => 'Address',
				'rules' => 'required'
			]
		];
	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ['user_id' => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->username = $post['username'];
		$this->password = md5($post['password']);
		$this->name = $post['name'];
		$this->email = $post['email'];
		$this->no_telp = $post['no_telp'];
		$this->address = $post['address'];

		$this->db->insert($this->_table, $this);
	}

	public function update(){
		$post = $this->input->post();
		$this->user_id = $post['id'];
		$this->username = $post['username'];
		$this->name = $post['name'];
		$this->email = $post['email'];
		$this->no_telp = $post['no_telp'];
		$this->address = $post['address'];

		$this->db->update($this->_table, $this, array("user_id" => $post['id']));
	}

	public function delete($id){
		return $this->db->delete($this->_table, array("user_id" => $id));
	}
}

?>