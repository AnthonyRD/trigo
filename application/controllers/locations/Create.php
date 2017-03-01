<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Agregar Localidad",
	        'title_page' => "Agregar Localidad",
	        'view_content' => "locations/create",
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
	        redirect('location/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_location');
	    if ($this->model_location->location_name_validation($str)){
	        return TRUE;
	    }else{
	        return $this->add_location();
	    }
	}
	public function add_location(){
	    $this->load->model('model_location');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description')
	        );
	    if ($this->model_location->insert_location($data)){
	        $this->session->set_flashdata('location_success',true);
	        redirect('locations');
	    }
	    return FALSE;
	}
}