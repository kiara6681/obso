<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user(); 
    }
    
    public function index(){
        $data = array(); 
        $data['page_title'] = 'Dashboard';
        $data['main_content'] = $this->load->view('sales/home', $data, TRUE);
        $this->load->view('sales/index', $data); 
    }

    public function widget(){
        $data = array();
        $data['page_title'] = 'Widget';
        $data['main_content'] = $this->load->view('sales/widget/widget', $data, TRUE);
        $this->load->view('sales/index', $data);
    }

}