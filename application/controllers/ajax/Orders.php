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
            'order' => array(
                'date' => date("Y-m-d H:i:s"),
                'customer_id' => $this->input->post('customer_id'),          
                'subtotal' => $this->input->post('subtotal'),                
                'tax' => $this->input->post('tax'),
                'payment_type_id' => $this->input->post('payment_type'),
                'payment_date' => date('Y-m-d'),                                                             
                'username' =>$this->input->post('username'),                
                'location_id' =>$this->input->post('location_id'),
                'status' => 'completada', 
                'oder_type_id' => $this->input->post('tipo'),
          ),
          'order_detail' => array(
                'item' => $this->input->post('order')
            )
          );          
          $data = array(
            'data' => $this->model_order->order_create($data)
        );
          
        $this->load->view('template/ajax/response', $data);
    }

     public function search_by_period(){      

        $start_date = $this->input->post('start_date');
        $end_date=$this->input->post('end_date');

        $this->load->model('model_order');		
		$order_list = array ();
		$orders = $this->model_order->get_order_list_by_date($start_date,$end_date);		
		
		$orders_number = $this->model_order->get_order_number_by_date($start_date,$end_date)[0]->numero_ordenes;
		$total_sales = $this->model_order->get_total_sales_by_date($start_date,$end_date)[0]->total_ventas;
		$products_sold = $this->model_order->get_total_products_sold_by_date($start_date,$end_date)[0]->cantidad;
		
        if($orders!=null){
            foreach ( $orders as $values ) {	
                $order_detail = $this->model_order->get_order($values->orden);	
                $tmp = array (		
                    'orden'=>$values->orden, 
                    'fecha'=>$values->fecha, 
                    'subtotal'=>$values->subtotal, 
                    'itbis'=>$values->itbis, 
                    'username'=>$values->username, 
                    'nombre_cliente'=>$values->nombre_cliente, 
                    'apellido_cliente'=>$values->apellido_cliente, 		
                    'status'=>$values->status, 		
                    'detail'=>$order_detail,                    
                    'orders_number' => $orders_number,
                    'total_sales' => $total_sales,
                    'products_sold' => $products_sold
                );
                array_push ( $order_list, $tmp );
            }	
            
            $data = array(
                'data' => $order_list
            );
        } else {
            $data = array('data' => null );
        }

        $this->load->view('template/ajax/response', $data);
    }
}