<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Eliminar Localidad",
	        'title_page' => "Eliminar Localidad",
	        'view_content' => "locations/delete",
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
	public function index($str){
	    if (!is_null($str)){
	        $this->load->model("model_location");
	        $data = array(
	            'data' => $this->model_location->get_location($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('locations');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'location', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('location_success', false);
	        redirect('locations');
	    }
	}
	public function id_isExisted($str){
	    $this->load->model('model_location');
	    if (!$this->model_location->location_id_isExisted($str)){
	        return TRUE;
	    }else{
	        return $this->delete_location();
	    }
	}
	public function delete_location(){
	    $this->load->model('model_location');
	    if ($this->model_location->delete_location($this->input->post("id"))){
	        $this->session->set_flashdata('location_success',true);
	        redirect('locations');
	    }
	    return FALSE;
	}
}