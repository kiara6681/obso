<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user(); 
    }
    
    public function index(){
        $data = array(); 
        $data['page_title'] = 'Dashboard';
        $data['main_content'] = $this->load->view('warehouse/home', $data, TRUE);
        $this->load->view('warehouse/index', $data); 
    }

    public function widget(){
        $data = array();
        $data['page_title'] = 'Widget';
        $data['main_content'] = $this->load->view('warehouse/widget/widget', $data, TRUE);
        $this->load->view('warehouse/index', $data);
    }

}