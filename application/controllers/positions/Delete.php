<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Eliminar Puesto",
	        'title_page' => "Eliminar Puesto",
	        'view_content' => "positions/delete",
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
	        $this->load->model("model_position");
	        $data = array(
	            'data' => $this->model_position->get_position($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('positions');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'position', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('position_success', false);
	        redirect('positions');
	    }
	}
	public function id_isExisted($str){
	    $this->load->model('model_position');
	    if (!$this->model_position->position_id_isExisted($str)){
	        return TRUE;
	    }else{
	        return $this->delete_position();
	    }
	}
	public function delete_position(){
	    $this->load->model('model_position');
	    if ($this->model_position->delete_position($this->input->post("id"), $this->input->post('address_id'))){
	        $this->session->set_flashdata('position_success',true);
	        redirect('positions');
	    }
	    return FALSE;
	}
}