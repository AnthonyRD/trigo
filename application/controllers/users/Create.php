<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Agregar Usuario",
	        'title_page' => "Agregar Usuario",
	        'view_content' => "users/create",
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
		$this->load->model(array('model_role', 'model_employee'));
	    $data = array(
	        'employee' => $this->model_employee->get_employees(),
	        'role' => $this->model_role->get_roles()
	    );
	    $this->page_config += $data;
		$this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('user_name', 'Nombre', 'callback_name_check');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('error', true);
	        redirect('user/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_user');
	    if ($this->model_user->user_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_user();
	    }
	}
	public function add_user(){
	    $this->load->model('model_user');
	    $data = array(
	        'user_name' => $this->input->post('user_name'),
			'password' => $this->input->post('password'),
	        'employee_id' => $this->input->post('employee'),
			'user_role_id' => $this->input->post('role'),
	        'status' => $this->input->post('status')
	        );
	    if ($this->model_user->insert_user($data)){
	        $this->session->set_flashdata('user_success',true);
	        redirect('users');
	    }
	    return FALSE;
	}
}