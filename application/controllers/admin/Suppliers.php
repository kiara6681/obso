<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class suppliers extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');        
        $this->load->model('Sales_Model');     
        $this->load->model('Suppliers_Model');  
        $this->load->model('Companies_Model');  
    }    

    // Show all suppliers
    public function index(){

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // get All sales contacts
        $data['sales_lead_block'] = $sales_lead_block = $this->Sales_Model->getAllSalesContacts(1);
        $data['sales_suspects_block'] = $sales_suspects_block = $this->Sales_Model->getAllSalesContacts(2);

        $data['sales_prospects_block'] = $sales_prospects_block = $this->Sales_Model->getAllSalesContacts(3);

        $data['sales_key_contact_block'] = $sales_key_contact_block = $this->Sales_Model->getAllSalesContacts(4);

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        // Get all sales companies
        $data['sales_address'] = $sales_address = $this->Sales_Model->getAllSalesAddress();

        $data['page_title'] = 'Sales Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/supplier/index', $data);
        $this->load->view('admin/layout/footer', $data);        
    }

    // show all Archieved suppliers
    public function archieved(){

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        $status = 0;
        // get All sales contacts
        $data['archieved_contacts'] = $archieved_contacts = $this->Sales_Model->getAllSalesContacts($status);

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        // Get all Menufecturer
        $data['menufecturer'] = $menufecturer = $this->common_model->select('manufacturer');

        // Get all sales companies
        $data['sales_address'] = $sales_address = $this->Sales_Model->getAllSalesAddress();

        $data['page_title'] = 'Sales Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/archieved', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // Add new supplier
    public function create(){

        if($this->input->post()){
            
            if($this->input->post('contact_database_status')){

                $contact_database_status = $this->input->post('contact_database_status');
            }else{
                $contact_database_status = 1;
            }

            $company             = $this->input->post('company');
            $trader              = $this->input->post('trader');
            $fname               = $this->input->post('first_name');
            $lname               = $this->input->post('last_name');
            $gender              = $this->input->post('gender');
            $personal_info       = $this->input->post('personal_info');
            /*$branch            = $this->input->post('branch');*/
            $department          = $this->input->post('department');
            $job_title           = $this->input->post('job_title');
            $email               = $this->input->post('email');
            $alternate_email     = $this->input->post('alternate_email');
            $whatsapp            = $this->input->post('whatsapp');
            $linkedin            = $this->input->post('linkedin');
            $mobile              = $this->input->post('phone');
            $direct_dial         = $this->input->post('direct_dial');
            $contact_location    = $this->input->post('contact_location');
            $contact_country     = $this->input->post('contact_country');
            $industry            = $this->input->post('industry');
            $competitor          = $this->input->post('competitor');
            $payment_terms     = $this->input->post('payment_terms');
            $invoice_ref_no    = $this->input->post('invoice_ref_no');
            $pls_info            = $this->input->post('pls_info');
            $estimated_frequency = $this->input->post('estimated_frequency');
            $estimated_spend     = $this->input->post('estimated_spend');
            $manufacturers       = $this->input->post('menufecturer');
            $communication       = $this->input->post('communication');
            $contact_status      = $this->input->post('contact_status');
            $location            = $this->input->post('location');
            $street_address      = $this->input->post('street_address');
            $city                = $this->input->post('city');
            $state               = $this->input->post('state');
            $zip                 = $this->input->post('zip');
            $country             = $this->input->post('country');
            $address_type        = $this->input->post('address_type');
            $date                = date('Y-m-d H:i:s');

            $data = array(
                'company'                    => $company,
                'trader'                     => $trader,
                'fname'                      => $fname,
                'lname'                      => $lname,
                'gender'                     => $gender,
                'personal_info'              => $personal_info,
                'industry'                   => $industry,
                'contact_location'           => $contact_location,
                'contact_country'            => $contact_country,
                'competitor'                 => $competitor,
                /*'branch'                   => $branch,*/
                'department'                 => $department,
                'job_title'                  => $job_title,
                'email'                      => $email,
                'alternate_email'            => $alternate_email,
                'whatsapp'                   => $whatsapp,
                'linkedin'                   => $linkedin,
                'mobile'                     => $mobile,
                'direct_dial'                => $direct_dial,
                'payment_terms'              => $payment_terms,
                'estimate_required'          => $estimated_frequency,
                'estimate_spend'             => $estimated_spend,
                'manufacturers'              => json_encode($manufacturers),
                'invoice_reference_number'   => $invoice_ref_no,
                'pls_information'            => $pls_info,
                'communication'              => $communication,
                'contact_status'             => $contact_status,
                'status'                     => $contact_database_status,
                'created_at'                 => $date,
                'updated_at'                 => $date
            );

            //Insert Sales Data
            $insert_id = $this->Sales_Model->insert($data, 'sales_contacts');

            //Insert Address
            foreach ($location as $key => $value) {
                $data = array(
                    'sales_contact_id' => $insert_id,
                    'address_type'     => $address_type[$key],
                    'location'         => $value,
                    'street'           => $street_address[$key],
                    'town'             => $city[$key],
                    'state'            => $street_address[$key],
                    'zip_code'         => $zip[$key],
                    'country'          => $country[$key],
                    'status'           => 1,
                    'created_at'       => $date,
                    'updated_at'       => $date
                );

                $insert = $this->Sales_Model->insert($data, 'sales_contact_addresses');

            }

            $this->session->set_flashdata('message', 'Sales Created Successfully');

            //redirect to some function
            redirect("admin/sales");
        }

        $data = array();
        $data['page_title'] = 'Add New Suppliers';

        // Get all sales companies
        $data['suppliers_companies'] = $suppliers_companies = $this->Companies_Model->getAllSupplierCompanies();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // Get all Menufecturer
        $data['menufecturer'] = $menufecturer = $this->common_model->select('manufacturer');
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/supplier/create', $data);
        $this->load->view('admin/layout/footer', $data);
    }
    
    // Add new supplier
    public function edit_supplier()
    {
        if($this->input->post())
        {
            $id                  = $this->input->post('id');
            $company             = $this->input->post('company');
            $trader              = $this->input->post('trader');
            $fname               = $this->input->post('first_name');
            $lname               = $this->input->post('last_name');
            $gender              = $this->input->post('gender');
            $personal_info       = $this->input->post('personal_info');
            /*$branch              = $this->input->post('branch');*/
            $department          = $this->input->post('department');
            $job_title           = $this->input->post('job_title');
            $email               = $this->input->post('email');
            $alternate_email     = $this->input->post('alternate_email');
            $linkedin            = $this->input->post('linkedin');
            $whatsapp            = $this->input->post('whatsapp');
            $mobile              = $this->input->post('phone');
            $direct_dial         = $this->input->post('direct_dial');
            $contact_location    = $this->input->post('contact_location');
            $contact_country     = $this->input->post('contact_country');
            $industry            = $this->input->post('industry');
            $competitor          = $this->input->post('competitor');
            $payment_terms       = $this->input->post('payment_terms');
            $invoice_ref_no      = $this->input->post('invoice_ref_no');
            $pls_info            = $this->input->post('pls_info');
            $estimated_frequency = $this->input->post('estimated_frequency');
            $estimated_spend     = $this->input->post('estimated_spend');
            $manufacturer        = $this->input->post('menufecturer');
            $communication       = $this->input->post('communication');
            $contact_status      = $this->input->post('contact_status');
            $location            = $this->input->post('location');
            $street_address      = $this->input->post('street_address');
            $city                = $this->input->post('city');
            $state               = $this->input->post('state');
            $zip                 = $this->input->post('zip');
            $country             = $this->input->post('country');
            $address_type        = $this->input->post('address_type');
            $date                = date('Y-m-d H:i:s');

            $data = array(
                'company'                  => $company,
                'trader'                   => $trader,
                'fname'                    => $fname,
                'lname'                    => $lname,
                'gender'                   => $gender,
                'personal_info'            => $personal_info,
                /*'branch'                   => $branch,*/
                'department'               => $department,
                'job_title'                => $job_title,
                'industry'                 => $industry,
                'contact_location'         => $contact_location,
                'contact_country'          => $contact_country,
                'competitor'               => $competitor,
                'email'                    => $email,
                'alternate_email'          => $alternate_email,
                'linkedin'                 => $linkedin,
                'whatsapp'                 => $whatsapp,
                'mobile'                   => $mobile,
                'direct_dial'              => $direct_dial,
                'payment_terms'            => $payment_terms,
                'estimate_required'        => $estimated_frequency,
                'estimate_spend'           => $estimated_spend,
                'manufacturers'            => json_encode($manufacturer),
                'invoice_reference_number' => $invoice_ref_no,
                'pls_information'          => $pls_info,
                'communication'            => $communication,
                'contact_status'           => $contact_status,
                'updated_at'               => $date
            );

            //Insert Sales Data
            $insert_id = $this->Sales_Model->updateContact($data, $id);

            //Delete Address 
            $delete = $this->Sales_Model->deleteAddress($id,'sales_contact_addresses'); 

            //Insert Address
            foreach ($location as $key => $value) {
                $data = array(
                    'sales_contact_id' => $id,
                    'address_type'     => $address_type[$key],
                    'location'         => $value,
                    'street'           => $street_address[$key],
                    'town'             => $city[$key],
                    'state'            => $street_address[$key],
                    'zip_code'         => $zip[$key],
                    'country'          => $country[$key],
                    'status'           => 1,
                    'created_at'       => $date,
                    'updated_at'       => $date
                );

                $insert = $this->Sales_Model->insert($data, 'sales_contact_addresses');

            }

            $this->session->set_flashdata('message', 'Sales Updated Successfully');

            //redirect to some function
            redirect("admin/sales");
        }

        $id = $this->uri->segment(4);

        $data = array();
        $data['page_title'] = 'Edit Sales';

        // Get all sales companies
        $data['sales_contact'] = $contact = $this->Sales_Model->getAllSalesContacts(null, $id);

        // Get all sales companies
        $data['contact_address'] = $contact_address = $this->Sales_Model->getContactsAddress($id);

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        //Get Enquiry 
        $data['enquires'] = $enquires = $this->Sales_Model->getSalesEnqury($contact->id);

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // Get all Menufecturer
        $data['menufecturer'] = $menufecturer = $this->common_model->select('manufacturer');

        // echo '<pre>';
        // print_r($countries);
        // exit;
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/edit', $data);
        $this->load->view('admin/layout/footer', $data);
    }
}