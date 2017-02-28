<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Agregar Departamento",
	        'title_page' => "Agregar Departamento",
	        'view_content' => "departments/create",
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
	    $this->form_validation->set_rules('name', 'Nombre', 'callback_name_check');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('error', true);
	        redirect('department/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_department');
	    if ($this->model_department->department_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_department();
	    }
	}
	public function add_department(){
	    $this->load->model('model_department');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description'),
	        'status' => $this->input->post('status')
	        );
	    if ($this->model_department->insert_department($data)){
	        $this->session->set_flashdata('department_success',true);
	        redirect('departments');
	    }
	    return FALSE;
	}
}