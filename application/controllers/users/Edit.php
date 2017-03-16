<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Editar Usuario",
	        'title_page' => "Editar Usuario",
	        'view_content' => "users/edit",
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
	        $this->load->model(array('model_role','model_employee', 'model_user'));
	        $data = array(
    	        'employee' => $this->model_employee->get_employees(),
    	        'role' => $this->model_role->get_roles(),
    	        'data' => $this->model_user->get_user($str)
    	    );
	        $this->page_config += $data;
	    }else{
	        redirect('users');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'user', 'callback_id_isExisted');		
	    if ($this->form_validation->run() === FALSE){
	    	$this->session->set_flashdata('error', true);
	        redirect('user/edit/'.$this->input->post('id'));
	    }else{
	        $this->session->set_flashdata('user_success', false);
	        redirect('users');
	    }
	}
	public function id_isExisted($str){
        if (empty($_FILE['image_url'])){
            return $this->update_user();
        }else{
            return do_upload();
        }
	}    
	public function update_user(){
	    $this->load->model('model_user');
        $data = array(
	        'user_name' => $this->input->post('user_name'),
	        'password' => $this->input->post('password'),	        
	        'status' => $this->input->post('status'),
	        'user_role_id' => $this->input->post('role'),
	        'employee_id' => $this->input->post('employee')	        
	    );	    
	    if ($this->model_user->update_user($data, $this->input->post("id"))){
	        $this->session->set_flashdata('user_success',true);
	        redirect('users');
	    }
	    return FALSE;
	}
}