<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Indicadores",
	        'title_page' => "Indicadores",
	        'view_content' => "dashboard/index",
	        'css' => array(
	            'css/skins/skin-yellow-light.css'
	            
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js', 
				'chartjs/Chart.min.js',
				'slimScroll/jquery.slimscroll.min.js',
				'sparkline/jquery.sparkline.js'

	        ),
	        'js' => array(
	            'js/app.min.js',
		    'js/pages/dashboard2.js'
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
