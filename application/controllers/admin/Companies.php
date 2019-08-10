<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

    public function __construct(){

        parent::__construct();
        check_login_user();

        $this->load->model('Companies_Model');
        $this->load->model('Sales_Model');
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
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/companies/index', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // show related companies
    public function related_company($id){

        $data = array();
        $data['page_title'] = 'Companies';

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Sales_Model->getSalesRelatedCompany($id);

        // echo '<pre>';
        // print_r($sales_companies);
        // exit;

        // Get all supplier companies
        //$data['supplier_companies'] = $supplier_companies = $this->Companies_Model->getAllSupplierCompanies();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/companies/related_companies', $data);
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
    public function sort_by_companies(){

        $sort_by = null;
        $country_by = null;
        $show_only = null;
        
        // if sort by is not empty
        if($_GET['sort_by']){

            $sort_by = $_GET['sort_by'];
        }

        // if coutry is not empty
        if($_GET['country_by']){

            $country_by = $_GET['country_by'];
        }

        // if coutry is not empty
        if($_GET['show_only']){

            $show_only = $_GET['show_only'];
        }

        $html = '';

        // Get all sales companies
        $all_sales_companies = $this->Companies_Model->sortBySalesCompanies($sort_by, $country_by, $show_only);

        // Get all supplier companies
        $supplier_companies = $this->Companies_Model->sortBySupplierCompanies($sort_by, $country_by, $show_only);

        $sales_companies = array();

        // If sorting by number of enquiries hight to low / low to high then rearrange sales companies
        if($sort_by == 3 || $sort_by == 4){

            // Get number of enquiries of all companies
            $all_enquiries = $this->common_model->getAllEnquiryCountOFCompanies();

            // If sorting by enquiry low to high
            if($sort_by == 4){
                $all_enquiries = array_reverse($all_enquiries);
            }

            foreach ($all_enquiries as $ae_key => $value) {
            
                foreach ($all_sales_companies as $key => $sal_comp) {
                    
                    if($value['company_id'] == $sal_comp['id']){

                        $sales_companies[$ae_key] = $all_sales_companies[$key];
                    }
                }
            }
        }elseif($sort_by == 5 || $sort_by == 6){

            // if sort by last enquiry of company then
            // Get last enquiry of companies
            $last_company_enquiries = $this->common_model->getLastEnquiryOFCompanies();

            // If sorting by enquiry low to high
            if($sort_by == 5){
                $last_company_enquiries = array_reverse($last_company_enquiries);
            }

            foreach ($last_company_enquiries as $lce_key => $value) {
                
                foreach ($all_sales_companies as $key => $sal_comp) {
                    
                    if($value['company_id'] == $sal_comp['id']){

                        $sales_companies[$lce_key] = $all_sales_companies[$key];
                    }
                }
            }
        }else{

            // all companies as it is
            $sales_companies = $all_sales_companies;
        }

        // sory by (show only sales company)
        // show only sales companies
        if($show_only == 2){

            $supplier_companies = array();
        }
        // show only supplier companies
        if($show_only == 3){

            $sales_companies = array();
        }

        // check if number of contact are between 10 to 99
        if($show_only == 4 || $show_only == 5){

            foreach ($sales_companies as $key => $sale_comp){
                
                // Get number of contact of this company
                $company_contacts = $this->Companies_Model->getCompanyContacts($sale_comp['id']);

                if($show_only == 4){

                    // if number of contacts are not between 10 to 99
                    if(count($company_contacts) < 10 && count($company_contacts) > 99){

                        unset($sales_companies[$key]);
                    }
                }
                if($show_only == 5){

                    // if number of contacts are less than 100
                    if(count($company_contacts) <= 100){

                        unset($sales_companies[$key]);
                    }
                }                
            }
        }

        foreach ($sales_companies as $key => $sale_comp) {
            
            // Get company contact
            $company_contacts = $this->Companies_Model->getCompanyContacts($sale_comp['id']);

            // Get total enquiry of this company
            $enquiries = $this->common_model->getAllEnquiryOFCompany($sale_comp['id']);

            $quoted_enqiries = 0;
            foreach ($enquiries as $key => $enquiry) {
                if($enquiry['suspus'] == 1){

                    $quoted_enqiries++;
                }
            }

            $company_contacts_count = 0;
            if(count($company_contacts) > 0){
                $company_contacts_count = count($company_contacts);
            }

            $unquoted_enquiries = count($enquiries) - $quoted_enqiries;

            $total_enqs = count($enquiries);

            $html .= '<div class="card search_result sales_companies_only">
                        <div class="card-body">
                            <div class="row p-9">
                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                    <img src="'.base_url().'obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                    <div class="col-md-12 m-l-30">
                                        <p> 
                                            Company  : '.$sale_comp["company_name"].'
                                            <br>
                                            Industry : '.$sale_comp["industry_name"].'
                                            <br>
                                            Website : '.$sale_comp["website"].'
                                            <br>
                                            Dial : '.$sale_comp["dial_number"].'
                                            <br>
                                            Information : '.$sale_comp["information"].'
                                            <br>
                                            Competitor : '.$sale_comp["competitor"].'
                                        </p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                                    <div class="row">
                                        <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                            <div class="row">
                                                <a href="javascript:;"></a>
                                                <div class="col-xl-12">
                                                    <p>
                                                        Contacts : 
                                                        <span style="color: #00fb00;">'.$company_contacts_count.'</span>
                                                            <br>

                                                        Total Enquiry : 
                                                            <span style="color: red;">
                                                            '.$unquoted_enquiries.'
                                                            </span> 
                                                            / 
                                                            '.$total_enqs.'
                                                            <br>

                                                        Quoted : 
                                                        <span style="color: #00fb00;">'.$quoted_enqiries.'
                                                        </span>
                                                        <br>
                                                        Ordered : <br>
                                                        Total Spent : <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2">
                                            <div class="test" id="menu1" data-toggle="dropdown"></div>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="background-color: #dedede;color: #000;">
                                                <a role="menuitem" tabindex="-1" href="'.base_url().'admin/companies/edit_company/'.$sale_comp["id"].'" style="color: #000 !important;">
                                                  <li role="presentation">Edit</li>
                                                </a>
                                                <a href="'.base_url().'admin/companies/archieve/'.$sale_comp["id"].'" onclick="return confirm("Are you sure you want to remove the company ?")" role="menuitem" tabindex="-1" style="color: #000 !important;">
                                                    <li role="presentation">Archieve</li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        foreach ($supplier_companies as $key => $sup_comp) {
            
            // Get company contact
            $company_contacts = $this->Companies_Model->getCompanyContacts($sup_comp['id']);

            // Get total enquiry of this company
            $enquiries = $this->common_model->getAllEnquiryOFCompany($sup_comp['id']);

            $quoted_enqiries = 0;
            foreach ($enquiries as $key => $enquiry) {
                if($enquiry['suspus'] == 1){

                    $quoted_enqiries++;
                }
            }

            $company_contacts_count = 0;
            if(count($company_contacts) > 0){
                $company_contacts_count = count($company_contacts);
            }

            $unquoted_enquiries = count($enquiries) - $quoted_enqiries;

            $total_enqs = count($enquiries);

            $html .= '<div class="card search_result supplier_companies_only" style="background-color: #dedede !important; color: #000;">
                        <div class="card-body">
                            <div class="row p-9">
                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                    <img src="'.base_url().'obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                    <div class="col-md-12 m-l-30">
                                        <p> 
                                            Company  : '.$sup_comp["company_name"].'
                                            <br>
                                            Industry : '.$sup_comp["industry_name"].'
                                            <br>
                                            Website : '.$sup_comp["website"].'
                                            <br>
                                            Dial : '.$sup_comp["dial_number"].'
                                            <br>
                                            Information : '.$sup_comp["information"].'
                                        </p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                                    <div class="row">
                                        <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                            <div class="row">
                                                <a href="javascript:;"></a>
                                                <div class="col-xl-12">
                                                    <p>
                                                        Contacts : 
                                                        <span style="color: #00fb00;">'.$company_contacts_count.'</span>
                                                            <br>

                                                        Number of Product : 
                                                            <span style="color: red;">
                                                            </span> 
                                                            <br>
                                                        Order : 
                                                        <span style="color: #00fb00;">'.$quoted_enqiries.'
                                                        </span>
                                                        <br>
                                                        Total Amount of Order : 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2">
                                            <div class="test" id="menu1" data-toggle="dropdown"></div>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="background-color: rgb(50, 58, 78);color: #000;">
                                                <a role="menuitem" tabindex="-1" href="'.base_url().'admin/companies/edit_company/'.$sup_comp["id"].'">
                                                  <li role="presentation">Edit</li>
                                                </a>
                                                <a href="'.base_url().'admin/companies/archieve/'.$sup_comp["id"].'" onclick="return confirm("Are you sure you want to remove the company ?")" role="menuitem" tabindex="-1">
                                                    <li role="presentation">Archieve</li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        echo $html;
    }

    // show related contact of company
    public function related_contacts($id){

        // Get sales contact of this company
        $data['sales_contacts'] = $sales_contacts = $this->Companies_Model->getCompanyContacts($id);
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/related_sales_contacts', $data);
        $this->load->view('admin/layout/footer', $data);
    }
}