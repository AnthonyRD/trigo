<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Eliminar Usuario",
	        'title_page' => "Eliminar Usuario",
	        'view_content' => "users/delete",
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
	public function index($str){
	    if (!is_null($str)){
	        $this->load->model("model_user");
	        $data = array(
	            'data' => $this->model_user->get_user($str)
	        );
	        $this->page_config += $data;
	    }else{
	        redirect('users');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'user', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	        $this->template->view($this->page_config);
	    }else{
	        $this->session->set_flashdata('user_success', false);
	        redirect('users');
	    }
	}
	public function id_isExisted($str){
	    $this->load->model('model_user');
	    if (!$this->model_user->user_id_isExisted($str)){
	        return TRUE;
	    }else{
	        return $this->delete_user();
	    }
	}
	public function delete_user(){
	    $this->load->model('model_user');
	    if ($this->model_user->delete_user($this->input->post("id"))){
	        $this->session->set_flashdata('user_success',true);
	        redirect('users');
	    }
	    return FALSE;
	}
}