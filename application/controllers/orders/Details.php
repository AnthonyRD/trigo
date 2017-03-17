<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Listado de Órdenes",
	        'title_page' => "Órdenes",
	        'view_content' => "orders/details",
	        'css' => array(
	            'css/skins/_all-skins.min.css'
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js',
				'js' => 'masonry/masonry.pkgd.min.js'
	        ),
	        'js' => array(
	            'js/app.min.js',
	            'js/demo.js'
	        ),
	        'sidebar_menu'=> true
	    );
	    $this->load->library("template");
	}
	public function index()
	{
		$this->load->model('model_order');		
		$order_list = array ();
		$orders = $this->model_order->get_order_list();		
		
		$orders_number = $this->model_order->get_order_number();
		$total_sales = $this->model_order->get_total_sales();
		$products_sold = $this->model_order->get_total_products_sold();
		
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
				'detail'=>$order_detail
			);
			array_push ( $order_list, $tmp );
		}	
		
		$data = array(
			'data' => $order_list,
			'orders_number' => $orders_number,
			'total_sales' => $total_sales,
			'products_sold' => $products_sold
		);

		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
}