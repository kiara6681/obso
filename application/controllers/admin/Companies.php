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
    public function sort_by_companies(){

        $sort_by = $_GET['sort_by'];
        $country_by = $_GET['country_by'];

        $enquiries = $this->common_model->sort_by_enquiry($sort_by, $country_by);

        $html = '';

        foreach ($enquiries as $key => $enq) {

            $country_info = $this->common_model->getCountryInfo($enq['country_id']); 

            $contactname = $this->common_model->getcontactname($enq['contact_id']);
            
            $qty = $this->common_model->getEnquiryInfoById($enq['id']);
            
            $html .= '<div class="card p-0">    
                        <div class="card-body srchdv">
                            <div class="row p-9" style="background: #5f5f5f;margin: 0px;" >                 
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-12"> 
                                        Company Name:
                                            <strong style="font-size: 18px;"> &nbsp : '.$enq["company_name_front"].'
                                            </strong>
                                        </div>
                                    </div>
                                </div>                              
                                <div class="col-xl-1" style="background: grey;padding-left: 10px;">';
                                    
                                    if(!empty($country_info->flag)){
                                        
                                        $html .= '<img src="'.base_url().'uploads/flags/'.$country_info->flag.'" alt="flag" style="width:40px;height:40px;margin-top: 4px;">'; 
                                        
                                    }
                        $html .= '</div>

                                <div class="col-xl-4"> 
                                    <div class="col-xl-12" style="padding: 5px;">
                                        <div class="row">
                                            Based In : &nbsp;
                                            <p>';
                                                
                                                if(!empty($country_info)){
                                                    $html .= $country_info->name;
                                                }
                                                
                                            $html .= '</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-xl-1">              
                                    <div class="test" id="menu1" data-toggle="dropdown"></div>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_enq_edit('.$enq["id"].')">
                                            <li role="presentation">Edit</li>
                                        </a>
                                        <a href="'.base_url().'admin/enquiry/delete/'.$enq["id"].'" onclick="return confirm("Are you sure you want to remove the contact list?")" role="menuitem" tabindex="-1">
                                            <li role="presentation">Delete</li>
                                        </a>
                                        <a href="'.base_url().'admin/enquiry/prospectstatus/'.$enq["id"].'">
                                            <li role="presentation">Quoted</li>
                                        </a>
                                        <a href="'.base_url().'admin/enquiry/partnerstatus/'.$enq['id'].'">
                                            <li role="presentation">Ready to Order</li>
                                        </a>
                                    </ul>
                                </div>                  
                            </div>
                          
                            <div class="row p-9" style="margin: 0px;">

                                <div class="col-xl-8 col-md-4 col-sm-6">
                                    <div class="row">                 
                                        <div class="col-xl-12">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <strong>
                                                    Industry : &nbsp';
                                                    
                                                    if(!empty($enq->industry_name)) {

                                                        $html .= $enq->industry_name;   
                                                    } 

                                                    $html .= '</strong>
                                                </div>
                                                <div class="col-md-6 text-right" style="color: #22ff22;">
                                                    Reference No. : '.$enq["ref_number"].'
                                                </div>                           
                                            </div>                           

                                            <p>';
                                                
                                                $fullName = "";
                                              
                                                if(!empty($contactname)){
                                                 
                                                  $fullName = $contactname->fname. " ". $contactname->lname;
                                                }
                                                
                                                $html .= '<br>
                                                Contact Person :  <strong>'.$fullName.'</strong><br>
                                                Activity :  <strong>Activity</strong><br>';

                                                
                                                foreach ($qty as $qt => $quanty) {

                                                $html .= 'Qty : '.$quanty["qty"].' &nbsp; &nbsp; '.$quanty["part"].'<br>';

                                                }

                                                $html .= 'Time :  '.$enq["created_at"].'<br>
                                            </p>                                       
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-sm-6 p-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="col-xl-12 p-0">
                                              <textarea class="form-control" placeholder="Note" style="width: 100%;height: 175px;">'.$enq["lead2"].'</textarea>
                                             
                                            </div>                                      
                                        </div>                                    
                                    </div>
                                </div>
                            </div>

                            <div class="row p-9" style="height: 30px;margin: 0px;" >                
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-6"> 
                                            <div class="col-xl-12">      
                                                <div class="row">Trader Name: &nbsp<p> '.$_SESSION["name"].'</p></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">';
                                            
                                            if ($enq["status"] == "waiting" ){
                                                $html .= '<a href="'.base_url().'admin/order/quotation/'.$enq["id"].'"><button class="btn-primary btn-blocka waves-effect waves-light btn-radius">Quote</button></a>';
                                            }
                                            
                                            if ($enq["status"] == "draft" ){
                                                $html .= '<a href="'.base_url().'admin/order/quotation/'.$enq["id"].'"><button class="btn-primary btn-blocka waves-effect waves-light btn-radius">Draft</button></a>';
                                            }
                                        $html .= '</div>
                                    </div>
                                </div>

                                <div class="col-xl-4" style="padding: 3px;">
                                    <div class="col-xl-12" style="background: red;">
                                        <p>Status Unqualified</p>                      
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>';
        }

        echo $html;
    }
}