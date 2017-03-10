<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_order extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_customer');
    }
    public function order_create($data = array()){
        //$data['order']['customer_id'] = $this->model_customer->get_id($data['customer']);
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
    public function get_orders(){
        $this->db->select('user.id, user.user_name, user.password,user.status,  
                          employee.name, employee.last_name, user_role.name role');
        $this->db->from('user'); 
        $this->db->join('employee', 'employee.id = user.employee_id','left');
        $this->db->join('user_role', 'user_role.id = user.user_role_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order($str){
        $this->db->where('id', $str);
        $this->db->select('user.id, user.user_name, user.password,user.status,  
                          employee.name, employee.last_name, user_role.name role');
        $this->db->from('user'); 
        $this->db->join('employee', 'employee.id = user.employee_id','left');
        $this->db->join('user_role', 'user_role.id = user.user_role_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
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
    public function get_order_type(){
        $this->db->where('active', '1');
        $query = $this->db->get('order_type');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
}