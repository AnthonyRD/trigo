<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Resetear Password",
	        'title_page' => "Resetear Password",
	        'view_content' => "account/reset",
	        'plugin_css' => array(
	        	'href' => 'iCheck/square/blue.css'
	        ),
	        'css' => array(
	        	'href' => 'css/login.css'
	        ),
	        'plugin_js' => array(
	        	'js' => 'iCheck/icheck.min.js'
	        ),
	        'js' => array(
	        	'src' => 'js/config/iCheck.js'
	        ),
	        'sidebar-menu'=> false
	    );
	    $this->load->library("template");
	}
	public function index()
	{
		$this->template->view($this->page_config);
	}
}
