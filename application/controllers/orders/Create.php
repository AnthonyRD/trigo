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
	            'css/sales.css'
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js'
	        ),
	        'js' => array(
	            'js/app.min.js',
	            'js/demo.js',
	            'js/sales.js'
	        ),
	        'sidebar_menu'=> false
	    );
	    $this->load->library("template");
	}
	public function index()
	{
		$this->template->view($this->page_config);
	}
}
