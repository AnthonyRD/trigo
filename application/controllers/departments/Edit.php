<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Editar Departmento",
	        'title_page' => "Editar Departmento",
	        'view_content' => "departments/edit",
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
	        $this->load->model("model_department");
	        $data = array(
	            'data' => $this->model_department->get_department($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('departments');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'department', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	    	$this->session->set_flashdata('error', true);
	        redirect('department/edit/'.$this->input->post('id'));
	    }else{
	        $this->session->set_flashdata('department_success', false);
	        redirect('departments');
	    }
	}
	public function id_isExisted($str){
        return $this->update_department();
	}
	public function update_department(){
	    $this->load->model('model_department');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description'),
	        'status' => $this->input->post('status')
	        );	    
	    if ($this->model_department->update_department($data, $this->input->post("id"))){
	        $this->session->set_flashdata('department_success',true);
	        redirect('departments');
	    }
	    return FALSE;
	}
}
