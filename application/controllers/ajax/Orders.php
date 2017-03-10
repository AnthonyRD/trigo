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
    /*public function create(){
        $data = array(
          'payment' => array(
                'payment_type' => $this->input->post('tipo')
                
          ),
          'order' => array(
                'date' => date("Y-m-d H:i:s"),
                'customer_id' => null,
                'subtotal' => $this->input->post('subtotal'),                
                'tax' => $this->input->post('tax'),
                'payment_type_id' => $this->input->post('payment_type')
                'payment_date' => date('Y-m-d'),                                
                'status' => ($this->input->post('payment_type') != '1') ? 'completada': '',                
                'username' =>$this->input->post('username'),
                'tax' => $this->input->post('tax'),
                'location_id' =>$this->input->post('location_id')
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
    }*/
    public function create(){
        $data = array(                          
            'order' => array(
                'date' => date("Y-m-d H:i:s"),
                'customer_id' => $this->input->post('customer'),          
                'subtotal' => $this->input->post('subtotal'),                
                'tax' => $this->input->post('tax'),
                'payment_type_id' => $this->input->post('payment_type'),
                'payment_date' => date('Y-m-d'),                                                             
                'username' =>$this->input->post('username'),                
                'location_id' =>$this->input->post('location_id'),
                'status' => 'completada', 
                'oder_type_id' => '1'
          ),
          'order_detail' => array(
                'item' => $this->input->post('order')
          ),
          'data' => array(
                //'data' => $this->model_order->order_create($data)
                'data' =>''
            )
        );                       
        $this->load->view('template/ajax/response', $data);
    }
}