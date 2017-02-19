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
	            'css/skins/_all-skins.min.css',
	            'css/sales.css',
	            'css/select2.min.css'
	        ),
	        'plugin_js' => array(
	        	'fastclick/fastclick.js',
	        	'jQuery/jquery-2.2.3.min.js'
	        ),
	        'js' => array(
	        	'js/jquery.storageapi.min.js',
	            'js/config/sales.js',
	            'js/select2.full.min.js'
	            
	        ),
	        'sidebar_menu'=> false
	    );
	    $this->load->model(array('model_product', 'model_category'));
	    $this->load->library("template");
	}
	public function index()
	{
		$data = array(
			'products' => $this->model_product->get_products(),
			'categories' => $this->model_category->get_categories()
		);
		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
}
