<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_customer');
        $this->load->model('model_product');
    }


    //PRODUCTS 
    public function get_products_number(){
        $this->db->select('count(*) products_number');  
        $this->db->from('customer');  
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    public function get_products_number_by_date($startdate, $endtdate){
        $this->db->where('creation_date >=', $startdate);
        $this->db->where('creation_date <=', $endtdate);
        $this->db->select('count(*) products_number');  
        $this->db->from('product');              
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }


    //CUSTOMERS 
    public function get_customer_number(){
        $this->db->select('count(*) customers_number');  
        $this->db->from('customer');  
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    public function get_customer_number_by_date($startdate, $endtdate){
        $this->db->where('creation_date >=', $startdate);
        $this->db->where('creation_date <=', $endtdate);
        $this->db->select('count(*) customers_number');  
        $this->db->from('customer');              
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }



    //ORDERS
    public function order_create($data = array()){        
        $this->db->insert('orders', $data['order']);
        if ($this->db->affected_rows() > 0){
            $order_id = $this->db->insert_id();
            $data['order_detail']['order_id'] = $order_id;
            $this->order_detail_create($data['order_detail']);  

            return $order_id;            
        }                
    }
    public function get_order_list(){
        $this->db->select('orden, fecha, subtotal, tax itbis, tipo_pago, status, 
                          username, tipo_orden, nombre_cliente, apellido_cliente, tienda');
        $this->db->from('vw_order_list');     
        $this->db->order_by('orden','desc');   
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order_list_by_date($startdate, $endtdate){
        $this->db->where('fecha >=', $startdate);
        $this->db->where('fecha <=', $endtdate);
        $this->db->select('orden, fecha, subtotal, tax itbis, tipo_pago, status, 
                          username, tipo_orden, nombre_cliente, apellido_cliente, tienda');
        $this->db->from('vw_order_list');   
        $this->db->order_by('orden','desc');   
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order_details(){
        $this->db->select('orden, fecha_orden fecha, producto, cantidad, precio, ITBIS_Producto, status, 
                            usuario username, subtotal, ITBIS_Orden itbis, nombre_cliente, apellido_cliente');
        $this->db->from('vw_order_detail');                 
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order($str){
        $this->db->where('orden', $str);
         $this->db->select('orden, fecha_orden, producto, cantidad, precio, ITBIS_Producto, 
                            usuario, subtotal, ITBIS_Orden, nombre_cliente, apellido_cliente');
        $this->db->from('vw_order_detail');  
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order_number(){        
         $this->db->select('count(*) numero_ordenes');  
         $query = $this->db->get(' orders');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_order_number_by_date($startdate, $endtdate){        
         $this->db->where('date >=', $startdate);
         $this->db->where('date <=', $endtdate);
         $this->db->select('count(*) numero_ordenes');  
         $query = $this->db->get(' orders');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_total_sales(){        
         $this->db->select('sum(tax + subtotal) total_ventas');  
         $query = $this->db->get(' orders');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_total_sales_by_date($startdate, $endtdate){        
         $this->db->where('date >=', $startdate);
         $this->db->where('date <=', $endtdate);
         $this->db->select('sum(tax + subtotal) total_ventas');  
         $query = $this->db->get(' orders');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_total_products_sold(){        
         $this->db->select('sum(od.quantity) cantidad');  
          $this->db->from('order_detail od');          
         $this->db->join('orders o', 'od.order_id = o.id','left');
         $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_total_products_sold_by_date($startdate, $endtdate){        
         $this->db->where('o.date >=', $startdate);
         $this->db->where('o.date <=', $endtdate);
         $this->db->select('sum(od.quantity) cantidad');  
         $this->db->from('order_detail od');          
         $this->db->join('orders o', 'od.order_id = o.id','left');
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
                'order_id' => $data['order_id'],
                'quantity' => $value['unidad']
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