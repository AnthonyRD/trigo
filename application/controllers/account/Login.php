<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->load->database();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('model_account');			

		$this->page_config = array(
	        'title' => "Login",
	        'title_page' => "Login",
	        'view_content' => "account/login",
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

	// Check for user login process
	public function user_login_process() {
		$this->load->helper('security');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
		if(isset($this->session->userdata['logged_in'])){
			$this->load->view('admin_page');
		}else{			
			$this->template->view($this->page_config);
		}
		} else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->model_account->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->model_account->read_user_information($username);
				if ($result != false) {
					$session_data = array(
					'username' => $result[0]->user_name/*,
					'email' => $result[0]->user_email,*/
				);				
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('admin_page');
				}
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('account/login', $data);
				//$this->template->view($this->page_config, $data);
			}
		}
	}

	// Logout from admin page
	public function logout() {
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		//$this->load->view('login', $data);
		$this->template->view($this->page_config, $data);
	}

}
