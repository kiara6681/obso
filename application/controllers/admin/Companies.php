<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

    public function __construct(){

        parent::__construct();
        check_login_user();

        $this->load->model('Companies_Model');
        $this->load->model('common_model');
        $this->load->model('login_model');
    }

    // show all companies
    public function index(){

		$data = array();
        $data['page_title'] = 'Companies';

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        // Get all supplier companies
        $data['supplier_companies'] = $supplier_companies = $this->Companies_Model->getAllSupplierCompanies();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        /*echo '<pre>';
        print_r($sales_companies);
        exit;*/
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/companies/index', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // Add new company
    public function create(){

        if($this->input->post()){

            $company_type = $this->input->post('company_type');

            $company_name = $this->input->post('company_name');
            $industry = $this->input->post('industry');
            $website = $this->input->post('website');
            $dial_number = $this->input->post('dial_number');
            $information = $this->input->post('information');
            $record_source = $this->input->post('record_source');
            $country = $this->input->post('country');
            $date = date('Y-m-d H:i:s');

            if($company_type == 1){
                
                $competitor = $this->input->post('competitor');
                $free_to_trade = $this->input->post('free_to_trade');                

                $data = array(
                    'company_type'  => $company_type,
                    'company_name'  => $company_name,
                    'industry'      => $industry,
                    'website'       => $website,
                    'dial_number'   => $dial_number,
                    'competitor'    => $competitor,
                    'free_to_trade' => $free_to_trade,
                    'record_source' => $record_source,
                    'information'   => $information,
                    'country'       => $country,
                    'status'        => 1,
                    'created_at'    => $date,
                    'updated_at'    => $date
                );
            }

            if($company_type == 2){                

                $data = array(
                    'company_type'  => $company_type,
                    'company_name'  => $company_name,
                    'industry'      => $industry,
                    'website'       => $website,
                    'dial_number'   => $dial_number,
                    'information'   => $information,
                    'record_source' => $record_source,
                    'country'       => $country,
                    'status'        => 1,
                    'created_at'    => $date,
                    'updated_at'    => $date
                );
            }

            $insert = $this->Companies_Model->insert($data, 'companies');

            $this->session->set_flashdata('message', 'Compnay Created Successfully');

            //redirect to some function
            redirect("admin/companies");
        }

        $data = array();
        $data['page_title'] = 'Add New Company';

        // Get all sales industry
        $data['sales_industries'] = $sales_industries = $this->common_model->get_all_industry();

        // Get all supplier industry
        $data['supplier_industries'] = $supplier_industries = $this->common_model->get_all_supplier_industry();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // echo '<pre>';
        // print_r($countries);
        // exit;
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/companies/create', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function edit_company($id)
    {
        if($_POST) 
        {
            $company_type = $this->input->post('company_type');
            $company_id = $this->input->post('company_id');
            $company_name = $this->input->post('company_name');
            $industry = $this->input->post('industry');
            $website = $this->input->post('website');
            $dial_number = $this->input->post('dial_number');
            $information = $this->input->post('information');
            $record_source = $this->input->post('record_source');
            $country = $this->input->post('country');
            $date = date('Y-m-d H:i:s');
            
            if($company_type == 1){

                $competitor = $this->input->post('competitor');
                $free_to_trade = $this->input->post('free_to_trade');

                $data = array(
                    'company_name' => $company_name,
                    'industry' => $industry,
                    'website' => $website,
                    'dial_number' => $dial_number,
                    'competitor' => $competitor,
                    'free_to_trade' => $free_to_trade,
                    'record_source' => $record_source,
                    'information' => $information,
                    'country' => $country,
                    'updated_at' => $date
                ); 
            }else{

                $data = array(
                    'company_name' => $company_name,
                    'industry' => $industry,
                    'website' => $website,
                    'dial_number' => $dial_number,
                    'record_source' => $record_source,
                    'information' => $information,
                    'country' => $country,
                    'updated_at' => $date
                ); 
            }

            $this->Companies_Model->edit_company($data, $company_id);

            $this->session->set_flashdata('message', 'Company Updated Successfully');

            redirect(base_url('admin/companies'));
        }

        $data = array();

        // get company info by id
        $data['company'] = $company = $this->Companies_Model->getCompanyByID($id);

        // Get all sales industry
        $data['sales_industries'] = $sales_industries = $this->common_model->get_all_industry();

        // Get all supplier industry
        $data['supplier_industries'] = $supplier_industries = $this->common_model->get_all_supplier_industry();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        $data['page_title'] = 'Edit Company';

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/companies/edit', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // Archieve compnay 
    public function archieve($id){

        $this->Companies_Model->archieve($id); 
        $this->session->set_flashdata('message', 'Company Deleted Successfully');
        redirect(base_url('admin/companies'));
    }

    // Sort companies by country
    public function sortCompaniesByCountry()
    {
        $data = array();

        $table = "product";
        $sort = "DESC";
        $column = "id";
        $value='';
        $search='';
        $country='';
        if(isset($_GET['table'])){
        $table = $_GET['table'];
        }
        if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
        }
        if(isset($_GET['column'])){
        $column = $_GET['column'];
        }
        if(isset($_GET['manufacturerby'])){
        $search='manufacturer_name';
        $value = str_replace('_', ' ', $_GET['manufacturerby']) ;
        }
        if(isset($_GET['country']))
        {
        $country=str_replace('_', ' ',$_GET['country']);
        }  
        $result['data']=$this->common_model->get_all_records_sort($table,$column,$sort,$search,$value,$country);

        $result['supplier']=$this->common_model->get_all_supplier_records();
        $result['count'] = count($result['data']);
        $result['manufacturer']=$this->common_model->get_all_manufacturer();
        $result['supplierrecord']=$this->common_model->get_all_supplier_records();
        $result['suppliercontact']=$this->common_model->get_all_supplier_contact();
        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/product/product', $result);

        $this->load->view('admin/layout/footer', $result);
      
    }
}