<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
    }
    
    public function index(){
        $data = array();
        $data['page_title'] = 'Table';
        $data['main_content'] = $this->load->view('purchase/home', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function basic_table(){
        $data = array();
        $data['page_title'] = 'Basic Table';
        $data['main_content'] = $this->load->view('purchase/table/basic_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function table_layout(){
        $data = array();
        $data['page_title'] = 'layout Table';
        $data['main_content'] = $this->load->view('purchase/table/table_layout', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function data_table(){
        $data = array();
        $data['page_title'] = 'Datatable';
        $data['main_content'] = $this->load->view('purchase/table/data_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function bootsrap_table(){
        $data = array();
        $data['page_title'] = 'Bootsrap Table';
        $data['main_content'] = $this->load->view('purchase/table/bootsrap_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }
	
	 public function responsive_table(){
        $data = array();
        $data['page_title'] = 'Responsive Table';
        $data['main_content'] = $this->load->view('purchase/table/responsive_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function editable_table(){
        $data = array();
        $data['page_title'] = 'Editable Table';
        $data['main_content'] = $this->load->view('purchase/table/editable_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function footable(){
        $data = array();
        $data['page_title'] = 'Footable';
        $data['main_content'] = $this->load->view('purchase/table/footable', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

    public function jsgrid_table(){
        $data = array();
        $data['page_title'] = 'Jsgrid Table';
        $data['main_content'] = $this->load->view('purchase/table/jsgrid_table', $data, TRUE);
        $this->load->view('purchase/index', $data);
    }

}