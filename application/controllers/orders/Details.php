<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Listado de Órdenes",
	        'title_page' => "Órdenes",
	        'view_content' => "orders/details",
	        'css' => array(
	            'css/skins/_all-skins.min.css'
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js',
				'js' => 'masonry/masonry.pkgd.min.js'
	        ),
	        'js' => array(
	            'js/app.min.js',
	            'js/demo.js'
	        ),
	        'sidebar_menu'=> true
	    );
	    $this->load->library("template");
	}
	public function index()
	{
		$this->load->model('model_order');
		$data = array(			
			'order_details' => $this->model_order->get_order_details(),
			'data' => $this->model_order->get_order_list()
		);
		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
}