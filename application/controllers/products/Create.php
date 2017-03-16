<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	private $image_url = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Agregar Producto",
	        'title_page' => "Agregar Producto",
	        'view_content' => "products/create",
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
	    $this->load->model(array('model_supplier', 'model_category', 'model_measurement_unit'));
	    $data = array(
	        'category' => $this->model_category->get_categories(),
	        'supplier' => $this->model_supplier->get_suppliers(),
			'measurement_unit' => $this->model_measurement_unit->get_measurement_units()
	    );
	    $this->page_config += $data;
		$this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('name', 'Nombre', 'callback_name_check');
	    $this->form_validation->set_rules('image_url', 'Imagen', 'callback_do_upload');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('error', true);
	        redirect('product/create');
	    }
	}
	public function name_check($str){
	    $this->load->model('model_product');
	    if ($this->model_product->product_name_validation($str)){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
    public function do_upload()
    {
            $config['upload_path']          = './uploads/products/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
    
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image_url'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    return FALSE;
            }
            else
            {
                    $this->image_url = $this->upload->data();
                    
                    return $this->add_product();
            }
    }
	public function add_product(){
	    $this->load->model('model_product');
	    $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description'),
	        'image_url' => $this->image_url['file_name'],
	        'price' => $this->input->post('price'),
	        'measurement_unit_id' => $this->input->post('measurement_unit'),
	        'id_category' => $this->input->post('category'),
	        'charge_tax' => $this->input->post('charge_tax'),
	        'suplier_id' => $this->input->post('supplier'),			
	        'entry_date' => date('Y-m-d H:i:s')
	    );
	    if ($this->model_product->insert_product($data)){
	        $this->session->set_flashdata('product_success',true);
	        redirect('products');
	    }
	    return FALSE;
	}
}