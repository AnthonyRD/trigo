<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Account Forgot Password",
	        'title_page' => "Account",
	        'view_content' => "account/forgot_password",
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
	public function password()
	{
		$this->template->view($this->page_config);
	}
}
