<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Actualizar cliente",
	        'title_page' => "Actualizar nuevo cliente",
	        'view_content' => "customers/edit",
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
	        $this->load->model("model_customer");
	        $data = array(
	            'data' => $this->model_customer->get_customer($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('customers');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){	   
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
			$this->session->set_flashdata('customer_success', false);
			redirect('customers');
	    }else{
	        $this->session->set_flashdata('customer_success', true);
	        redirect('customer/edit/'.$this->input->post('id'));
	    }
	}
	public function update_customer(){	    
	    $data = array(
	        'name' => $this->input->post('name'),
	        'last_name' => $this->input->post('last_name'),
	        'telephone' => $this->input->post('telephone'),
	        'cellphone' => $this->input->post('cellphone'),
	        'email' => $this->input->post('email'),
	        'origin' => $this->input->post('origin'),
	        'birthdate' => $this->input->post('birthdate'),
	        'address' => array(
	            'address_line_1' => $this->input->post('address_1'),
	            'address_line_2' => $this->input->post('address_2'),
	            'number' => $this->input->post('number'),
	            'country' => $this->input->post('country'),
	            'state' => $this->input->post('state'),
	            'zip_code' => $this->input->post('zip_code')
	        )
	    );
		$this->load->model('model_customer');
	    if ($this->model_customer->update_customer($data, $this->input->post("id"), $this->input->post('address_id'))){
	        $this->session->set_flashdata('customer_success',true);
	        redirect('customers');
	    }
	    return FALSE;
	}
}