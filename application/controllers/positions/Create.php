<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Agregar Puesto",
	        'title_page' => "Agregar Puesto",
	        'view_content' => "positions/create",
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
	        redirect('position/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_position');
	    if ($this->model_position->position_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_position();
	    }
	}
	public function add_position(){
	    $this->load->model('model_position');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description'),
	        'status' => $this->input->post('status')
	        );
	    if ($this->model_position->insert_position($data)){
	        $this->session->set_flashdata('position_success',true);
	        redirect('positions');
	    }
	    return FALSE;
	}
}