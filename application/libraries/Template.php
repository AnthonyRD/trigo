<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
    private $CI = null; // Codeigniter Object
    public function __construct()
    {
        $this->CI =& get_instance();
    }
    /**
     * @param = array('title'=>'My title single page', 'css'=> array('href'=>"example.css"), "plugin_css"=>array('href'=>"example.css"));
     * */
    private function _header($param = array()){
        $this->CI->load->view('template/header', $param);
    }
    /**
     * @param = array('js' => 'example.js','plugin_js'=>"plugin/example.js")
     * */
    private function _footer($param = array()){
        $this->CI->load->view('template/footer', $param);
    }
    /**
     * @param = array('breadcrumbs' => '', 'title_page' => 'Account', 'view_content' => 'account/login');
     * */
    private function _content($param = array()){
        $this->CI->load->view("template/".$param['view_content'], $param);
    }
    /**
     * @param = array('title' => "", "css"=>"","js"=>"","breadcrums"=>"", "title_page"=>"","view_content"=>"");
     * */
    public function view($param = array()){
        $this->_header($param);
        $this->_content($param);
        $this->_footer($param);
    }
}