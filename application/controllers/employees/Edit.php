<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Editar Producto",
	        'title_page' => "Editar Producto",
	        'view_content' => "products/edit",
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
	        $this->load->model(array('model_supplier','model_category', 'model_product'));
	        $data = array(
    	        'category' => $this->model_category->get_categories(),
    	        'supplier' => $this->model_supplier->get_suppliers(),
    	        'data' => $this->model_product->get_product($str)
    	    );
	        $this->page_config += $data;
	    }else{
	        redirect('products');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'Product', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	    	$this->session->set_flashdata('error', true);
	        redirect('product/edit/'.$this->input->post('id'));
	    }else{
	        $this->session->set_flashdata('supplier_success', false);
	        redirect('products');
	    }
	}
	public function id_isExisted($str){
        if (empty($_FILE['image_url'])){
            return $this->update_product();
        }else{
            return do_upload();
        }
	}
    public function do_upload()
    {
            $config['upload_path']          = './uploads/';
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
                    
                    return $this->update_product();
            }
    }
	public function update_product(){
	    $this->load->model('model_product');
        $data = array(
	        'name' => $this->input->post('name'),
	        'description' => $this->input->post('description'),
	        'image_url' => $this->image_url['file_name'],
	        'price' => $this->input->post('price'),
	        'mesurement_unit' => $this->input->post('mesurement_unit'),
	        'id_category' => $this->input->post('category'),
	        'charge_tax' => $this->input->post('charge_tax'),
	        'suplier_id' => $this->input->post('supplier')
	    );
	    if (is_null($this->image_url)) unset($data['image_url']);
	    if ($this->model_product->update_product($data, $this->input->post("id"), $this->input->post('address_id'))){
	        $this->session->set_flashdata('product_success',true);
	        redirect('products');
	    }
	    return FALSE;
	}
}