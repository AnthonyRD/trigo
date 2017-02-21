<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Create new employee",
	        'title_page' => "Create new employee",
	        'view_content' => "employees/create",
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
	        redirect('employee/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_employee');
	    if ($this->model_employee->category_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_employee();
	    }
	}
	public function add_employee(){
	    $this->load->model('model_employee');
	     $data = array(
	        'name' => $this->input->post('name'),
	        'last_name' => $this->input->post('last_name'),
			'telephone' => $this->input->post('telephone'),
			'cellphone' => $this->input->post('cellphone'),
			'email' => $this->input->post('email'),			
			'status' => $this->input->post('status'),	        
	        'department_id' => $this->input->post('department'),
			'position_id' => $this->input->post('position'),			
	        'start_date' => date('Y-m-d H:i:s'),
	        'address' => array(
	            'address_line_1' => $this->input->post('address_1'),
	            'address_line_2' => $this->input->post('address_2'),
	            'number' => $this->input->post('number'),
	            'country' => $this->input->post('country'),
	            'state' => $this->input->post('state'),
	            'zip_code' => $this->input->post('zip_code')
		 )
	    );
	    if ($this->model_employee->insert_employee($data)){
	        $this->session->set_flashdata('employee_success',true);
	        redirect('employees');
	    }
	    return FALSE;
	}
}