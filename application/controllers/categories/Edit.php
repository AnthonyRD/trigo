<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Edit category",
	        'title_page' => "Edit Category",
	        'view_content' => "categories/edit",
	        'css' => array(
	            'css/skins/_all-skins.min.css',
	            'css/style.css'
	        ),
	        'plugin_css' => array(
	            'datatables/dataTables.bootstrap.css',
	            'iCheck/square/blue.css'
	        ),
	        'plugin_js' => array(
	        	'fastclick/fastclick.js',
	        	'datatables/jquery.dataTables.min.js',
	        	'datatables/dataTables.bootstrap.min.js',
	        	'iCheck/icheck.min.js'
	        ),
	        'js' => array(
	            'js/app.min.js',
	            'js/demo.js',
	            'js/config/dataTables.js',
	            'js/config/iCheck.js'
	        ),
	        'sidebar_menu'=> true
	    );
	    $this->load->library("template");
	    $this->load->helper("form");
	    $this->load->library("form_validation");
	    $this->form_validation->set_error_delimiters('<section class="alert alert-danger">', '</section>');
	}
	public function index($str = NULL)
	{
	    if (!is_null($str)){
	        $this->load->model("model_category");
	        $data = array(
	            'data' => $this->model_category->get_category($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('products');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'Category', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('category_success', false);
	        redirect('product/categories');
	    }
	}
	public function id_isExisted($str){
	    $this->load->model('model_category');
	    if (!$this->model_category->category_id_isExisted($str)){
	        return TRUE;
	    }else{
	        return $this->update_category();
	    }
	}
	public function update_category(){
	    $this->load->model('model_category');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('descripcion')
	    );
	    if ($this->model_category->update_category($data, $this->input->post("id"))){
	        $this->session->set_flashdata('category_success',true);
	        redirect('product/categories');
	    }
	    return FALSE;
	}
}