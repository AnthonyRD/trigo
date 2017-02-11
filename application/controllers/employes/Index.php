<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Employes List",
	        'title_page' => "Employes",
	        'view_content' => "employes/index",
	        'css' => array(
	            'css/skins/_all-skins.min.css'
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js'
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
		$this->template->view($this->page_config);
	}
}