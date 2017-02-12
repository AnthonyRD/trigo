<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Create new category",
	        'title_page' => "Create new category",
	        'view_content' => "categories/create",
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
	public function index()
	{
		$this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('name', 'Nombre', 'callback_name_check',
	        array("name_check" => 'El nombre de la categoria ya existe.')
	    );
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->template->view($this->page_config);
	    }
	}
	public function name_check($str){
	    $this->load->model('model_category');
	    if ($this->model_category->category_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_category();
	    }
	}
	public function add_category(){
	    $this->load->model('model_category');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('descripcion')
	    );
	    if ($this->model_category->insert_category($data)){
	        $this->session->set_flashdata('category_success',true);
	        redirect('product/categories');
	    }
	    return FALSE;
	}
}