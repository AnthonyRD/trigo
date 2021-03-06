<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Orders Create",
	        'title_page' => "Orders",
	        'view_content' => "orders/create",
	        'css' => array(
	            'css/skins/skin-yellow-light.css',
	            'css/sales.css'
	        ),
	        'plugin_js' => array(
	        	'fastclick/fastclick.js',				
				'js' => 'numeral/numeral.min.js'
	        ),
	        'js' => array(
	        	'js/jquery.storageapi.min.js',
	            'js/config/sales.js',
	            'js/bootstrap-typeahead.js'
	            
	        ),
	        'sidebar_menu'=> false
	    );
	    $this->load->model(array('model_product', 'model_category', 'model_order'));
	    $this->load->library("template");
	}
	public function index()
	{
		$data = array(
			'products' => $this->model_product->get_products(),
			'categories' => $this->model_category->get_categories(),
			'order_type' => $this->model_order->get_order_type()
		);
		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
	public function prints(){
		$data = array(
			'print' => TRUE
		);
		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
	public function receiveOrderNumber(){

		$data = array(
			'orderNumber' => $this->input->post('order')			
		);
		
	}
}
