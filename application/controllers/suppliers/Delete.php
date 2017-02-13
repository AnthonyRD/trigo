<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Delete supplier",
	        'title_page' => "Delete supplier",
	        'view_content' => "suppliers/delete",
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
	        $this->load->model("model_supplier");
	        $data = array(
	            'data' => $this->model_supplier->get_supplier($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('suppliers');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'supplier', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('supplier_success', false);
	        redirect('suppliers');
	    }
	}
	public function id_isExisted($str){
	    $this->load->model('model_supplier');
	    if (!$this->model_supplier->supplier_id_isExisted($str)){
	        return TRUE;
	    }else{
	        return $this->delete_supplier();
	    }
	}
	public function delete_supplier(){
	    $this->load->model('model_supplier');
	    if ($this->model_supplier->delete_supplier($this->input->post("id"), $this->input->post('address_id'))){
	        $this->session->set_flashdata('supplier_success',true);
	        redirect('suppliers');
	    }
	    return FALSE;
	}
}