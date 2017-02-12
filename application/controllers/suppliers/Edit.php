<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Edit supplier",
	        'title_page' => "Edit Supplier",
	        'view_content' => "suppliers/edit",
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
	    $this->form_validation->set_rules('id', 'Supplier', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	    	$this->session->set_flashdata('error', true);
	        redirect('supplier/edit/'.$this->input->post('id'));
	    }else{
	        $this->session->set_flashdata('supplier_success', false);
	        redirect('suppliers');
	    }
	}
	public function id_isExisted($str){
        return $this->update_supplier();
	}
	public function update_supplier(){
	    $this->load->model('model_supplier');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'email' => $this->input->post('email'),
	        'RNC' => $this->input->post('rnc'),
	        'contact_name' => $this->input->post('contact_name'),
	        'telephone' => $this->input->post('telephone'),
	        'cellphone' => $this->input->post('cellphone'),
	        'Details' => $this->input->post('details'),
            'address_line_1' => $this->input->post('address_1'),
            'address_line_2' => $this->input->post('address_2'),
            'number' => $this->input->post('number'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            'zip_code' => $this->input->post('zip_code')
	    );
	    if ($this->model_supplier->update_supplier($data, $this->input->post("id"))){
	        $this->session->set_flashdata('supplier_success',true);
	        redirect('suppliers');
	    }
	    return FALSE;
	}
}