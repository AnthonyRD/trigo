<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->input->is_ajax_request()) {
           exit(json_encode(array('error_code' => 500, 'error_message' => 'No direct script access allowed')));
        }
        $this->load->model('model_customer');
    }
    public function getall(){
        $data = array(
            'data' => $this->model_customer->get_customers()
        );
        $this->load->view('template/ajax/response', $data);
    }
    public function get($str){
        $data = array(
            'data' => $this->model_customer->get_customer($str)
        );
        $this->load->view('template/ajax/response', $data);
    }
    public function search(){
        $data = array(
            'data' => $this->model_customer->get_search_customer($this->input->post('search'))
        );
        $this->load->view('template/ajax/response', $data);
    }
}