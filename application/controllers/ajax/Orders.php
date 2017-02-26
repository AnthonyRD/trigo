<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->input->is_ajax_request()) {
           exit(json_encode(array('error_code' => 500, 'error_message' => 'No direct script access allowed')));
        }
        $this->load->model('model_order');
    }
    public function create(){
        $data = array(
          'payment' => array(
                'payment_type' => $this->input->post('tipo')
                
          ),
          'order' => array(
                'date' => date("Y-m-d H:i:s"),
                'subtotal' => $this->input->post('subtotal'),
                'tax' => $this->input->post('tax'),
                'status' => ($this->input->post('payment_type') != '1') ? 'active': '',
                'payment_date' => date('Y-m-d'),
                'customer_id' => null,
                'payment_type' => $this->input->post('payment_type')
                
          ),
          'order_detail' => array(
                'item' => $this->input->post('order')
            ),
            'customer' => $this->input->post('customer')
        );
        $data = array(
            'data' => $this->model_order->order_create($data)
        );
        
        $this->load->view('template/ajax/response', $data);
    }
}