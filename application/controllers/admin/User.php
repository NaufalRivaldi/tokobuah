<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data["user"] = $this->user_model->getAll();
		
		$this->load->view('admin/user/list', $data);
	}

	public function add(){
		$user = $this->user_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if($validation->run()){
			$user->save();
			$this->session->set_flashdata('success', 'Data has been add!');
			redirect('admin/user');
		}

		$this->load->view('admin/user/new_form');
	}

	public function view($id){
		$data['user'] = $this->user_model->getById($id);
		$this->load->view('admin/user/view', $data);
	}

	public function edit($id = null){
		if(!isset($id)) redirect('admin/user');

		$user = $this->user_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if($validation->run()){
			$user->update();
			redirect('admin/user');
		}

		$data['user'] = $user->getById($id);
		$this->load->view('admin/user/edit_form', $data);
	}

	public function delete($id){
		if(!isset($id)) show_404();

		if($this->user_model->delete($id)){
			redirect('admin/user');
		}
	}
}

?>