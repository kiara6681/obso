<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

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

    public function payment_report(){
        $data = array();
        $data['page_title'] = 'Payment Report';
        $data['main_content'] = $this->load->view('sales/report/payment_report', $data, TRUE);
        $this->load->view('sales/index', $data);
    }

    public function income_report(){
        $data = array();
        $data['page_title'] = 'Income Report';
        $data['main_content'] = $this->load->view('sales/report/income_report', $data, TRUE);
        $this->load->view('sales/index', $data);
    }

    public function sales_report(){
        $data = array();
        $data['page_title'] = 'Sales Report';
        $data['main_content'] = $this->load->view('sales/report/sales_report', $data, TRUE);
        $this->load->view('sales/index', $data);
    }


}