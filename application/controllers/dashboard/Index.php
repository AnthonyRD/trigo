<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Indicadores",
	        'title_page' => "Indicadores",
	        'view_content' => "dashboard/index",
	        'css' => array(
	            'css/skins/skin-yellow-light.css'
	            
	        ),
	        'plugin_js' => array(
	        	'js' => 'fastclick/fastclick.js', 				
				'js' => 'numeral/numeral.min.js',
				'chartjs/Chart.min.js',
				'slimScroll/jquery.slimscroll.min.js',
				'sparkline/jquery.sparkline.js'

	        ),
	        'js' => array(
	            'js/app.min.js',
		    'js/pages/dashboard2.js'
	        ),
	        'sidebar_menu'=> true
	    );
	    $this->load->library("template");
	}
	public function index()
	{
		$this->load->model('model_order');		
		$this->load->model('model_customer');		
		$order_list = array ();
		$orders = $this->model_order->get_order_list();		
		
		$orders_number = $this->model_order->get_order_number();
		$total_sales = $this->model_order->get_total_sales();
		$products_sold = $this->model_order->get_total_products_sold();
		$most_sold_product = $this->model_order->get_most_sold_products();
		$customer_number = $this->model_customer->get_customers_number();		
		
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
			'products_sold' => $products_sold,
			'customer_number' => $customer_number,
			'most_sold_product' => $most_sold_product
		);

		$this->page_config += $data;
		$this->template->view($this->page_config);
	}
}
