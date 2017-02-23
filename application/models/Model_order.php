<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_order extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_customer');
    }
    public function order_create($data = array()){
        $data['order']['customer_id'] = $this->model_customer->get_id($data['customer']);
        $this->db->insert('orders', $data['order']);
        if ($this->db->affected_rows() > 0){
            $order_id = $this->db->insert_id();
            $data['order_detail']['order_id'] = $order_id;
            if($this->order_detail_create($data['order_detail'])){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
    public function order_detail_create($data = array()){
        foreach($data['item'] as $key => $value){
            $item = array(
                'product_id' => $value['id'],
                'order_id' => $data['order_id']
            );
            $this->db->insert('order_detail', $item);
        }
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}