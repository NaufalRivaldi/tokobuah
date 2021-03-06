<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["product"] = $this->product_model->getAll();
		$this->load->view('admin/product/list', $data);	
	}

	public function add()
	{
		$product = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if($validation->run()){
			$product->save();
			$this->session->set_flashdata('success', 'Data has been add!');
		}

		$this->load->view('admin/product/new_form');
	}

	public function edit($id = null){
		if(!isset($id)) redirect('admin/product');

		$product = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if($validation->run()){
			$product->update();
			redirect('admin/product');
		}

		$data["product"] = $product->getById($id);
		if(!$data["product"]) show_404();

		$this->load->view('admin/product/edit_form', $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		$data = $this->product_model->getById($id);
		$url = $data->image;

		if($this->product_model->delete($id)){
			if($url != "default.jpg"){
				unlink('upload/product/'.$url);
			}
			redirect(site_url('admin/product'));
		}
	}
}

?>