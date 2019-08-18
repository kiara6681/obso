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
        $data['sales_lead_block'] = $sales_lead_block = $this->Suppliers_Model->getAllSupplierContacts(1);

        $data['sales_suspects_block'] = $sales_suspects_block = $this->Suppliers_Model->getAllSupplierContacts(2);

        $data['sales_prospects_block'] = $sales_prospects_block = $this->Suppliers_Model->getAllSupplierContacts(3);

        $data['sales_key_contact_block'] = $sales_key_contact_block = $this->Suppliers_Model->getAllSupplierContacts(4);

        //get Suppliers Menufaturer
        $data['manufacturer'] = $manufacturer = $this->Suppliers_Model->getAllSupplierManufacturer();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');


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
        $data['archieved_contacts'] = $archieved_contacts = $this->Sales_Model->getAllSupplierContacts($status);

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

            $company                       = $this->input->post('company');
            $trader                        = $this->input->post('trader');
            $website                       = $this->input->post('website');
            $supplier_type                 = $this->input->post('supplier_type');
            $contact_country               = $this->input->post('contact_country');
            $cut_off_time                  = $this->input->post('cut_off_time');
            $information_notes             = $this->input->post('information_notes');
            $supplier_other_names          = $this->input->post('supplier_other_names');
            $express_options               = $this->input->post('express_options');
            $conditions_offered            = $this->input->post('conditions_offered');
            $delivery_time                 = $this->input->post('delivery_time');
            $quality_rating                = $this->input->post('quality_rating');
            $pricing_rating                = $this->input->post('pricing_rating');
            $brief_info_quality            = $this->input->post('brief_info_quality');
            $brief_info_pricing            = $this->input->post('brief_info_pricing');
            $brief_info_delivery           = $this->input->post('brief_info_delivery');
            $brief_info_time               = $this->input->post('brief_info_time');
            $brief_info_communication      = $this->input->post('brief_info_communication');
            $brief_info_coverall           = $this->input->post('brief_info_coverall');
            $accuracy_rating               = $this->input->post('accuracy_rating');
            $responce_time_rating          = $this->input->post('responce_time_rating');
            $communication_rating          = $this->input->post('communication_rating');
            $alternate_supplier_conditions = $this->input->post('alternate_supplier_conditions');
            $payment_terms                 = $this->input->post('payment_terms');
            $ordering_status               = $this->input->post('ordering_status');
            $unique_number                 = $this->input->post('unique_number');
            $communication                 = $this->input->post('communication');
            $contact_status                = $this->input->post('contact_status');
            $date                          = date('Y-m-d H:i:s');
            
            //Supliers Persons
            $as_manager                    = $this->input->post('as_manager');
            $fname                         = $this->input->post('contact_name');
            $lname                         = $this->input->post('contact_surname');
            $email                         = $this->input->post('contact_email');
            $mobile                        = $this->input->post('contact_phone');
            $main_language                 = $this->input->post('main_language');
            $english                       = $this->input->post('english');
            
            //Supliers Menufacturers
            $manufacturers                 = $this->input->post('manufacturer');
            $current                       = $this->input->post('current');
            $obsolate                      = $this->input->post('obsolate');
            $condition_information         = $this->input->post('condition_information');
            $pricing_discount              = $this->input->post('pricing_discount');
            $featured                      = $this->input->post('featured_mnfr');
            
            //Address 
            $location                      = $this->input->post('location');
            $street_address                = $this->input->post('street_address');
            $city                          = $this->input->post('city');
            $state                         = $this->input->post('state');
            $zip                           = $this->input->post('zip');
            $country                       = $this->input->post('country');

            $overall_rating = ($quality_rating +$pricing_rating + $accuracy_rating + $responce_time_rating + $communication_rating)/5;

            $data = array(
                'company'                       => $company,
                'trader'                        => $trader,
                'website'                       => $website,
                'supplier_type'                 => $supplier_type,
                'contact_country'               => $contact_country,
                'cut_off_time'                  => $cut_off_time,
                'information_notes'             => $information_notes,
                'supplier_other_names'          => $supplier_other_names,
                'express_options'               => json_encode($express_options),
                'conditions_offered'            => $conditions_offered,
                'delivery_time'                 => $delivery_time,
                'quality_rating'                => $quality_rating,
                'pricing_rating'                => $pricing_rating,
                'accuracy_rating'               => $accuracy_rating,
                'responce_time_rating'          => $responce_time_rating,
                'communication_rating'          => $communication_rating,
                'overall_rating'                => $overall_rating,
                'brief_info_quality'            => $brief_info_quality,
                'brief_info_pricing'            => $brief_info_pricing,
                'brief_info_delivery'           => $brief_info_delivery,
                'brief_info_time'               => $brief_info_time,
                'brief_info_communication'      => $brief_info_communication,
                'brief_info_coverall'           => $brief_info_coverall,
                'alternate_supplier_conditions' => $alternate_supplier_conditions,
                'payment_terms'                 => $payment_terms,
                'ordering_status'               => $ordering_status,
                'unique_number'                 => $unique_number,
                'communication'                 => $communication,
                'contact_status'                => $contact_status,
                'status'                        => $contact_database_status,
                'created_at'                    => $date,
                'updated_at'                    => $date
            );

            //Insert Sales Data
            $insert_id = $this->Sales_Model->insert($data, 'suppliers');

            //Insert Address
            foreach ($fname as $key => $name) {
                $data = array(
                    'supplier_id'   => $insert_id,
                    'as_manager'    => $as_manager[$key],
                    'fname'         => $name,
                    'lname'         => $lname[$key],
                    'email'         => $email[$key],
                    'mobile'        => $mobile[$key],
                    'main_language' => $main_language[$key],
                    'english'       => $english[$key],
                    'status'        => 1,
                    'created_at'    => $date,
                    'updated_at'    => $date
                );

                $insert = $this->Sales_Model->insert($data, 'suppliers_contacts');

            }

            //Insert manufacturer
            foreach ($manufacturers as $key => $manufacturer) {
                $data = array(
                    'supplier_id'           => $insert_id,
                    'manufacturer'          => $manufacturer,
                    'current'               => $current[$key],
                    'obsolate'              => $obsolate[$key],
                    'condition_information' => $condition_information[$key],
                    'pricing_discount'      => $pricing_discount[$key],
                    'featured'              => $featured[$key],
                    'status'                => 1,
                    'created_at'            => $date,
                    'updated_at'            => $date
                );

                $insert = $this->Sales_Model->insert($data, 'supplier_manufacturers');
            }

            //Insert Address
            foreach ($location as $key => $value) {
                $data = array(
                    'session_id' => $insert_id,
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

                $insert = $this->Sales_Model->insert($data, 'supplier_address');
            }

            $this->session->set_flashdata('message', 'Supplier Created Successfully');

            //redirect to some function
            redirect("admin/suppliers");
        }

        $data = array();
        $data['page_title'] = 'Add New Suppliers';

        // Get all suppliers companies
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
        $data['sales_contact'] = $contact = $this->Suppliers_Model->getAllSupplierContacts(null, $id);

        // Get all sales companies
        $data['contact_address'] = $contact_address = $this->Suppliers_Model->getContactsAddress($id);

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        //Get Enquiry 
        $data['enquires'] = $enquires = $this->Suppliers_Model->getSalesEnqury($contact->id);

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

    // Sort and show only suppliers
    public function supplier_filter(){

        $sort_by = null;
        $show_only = null;
        
        // if sort by is not empty
        if($_GET['sort_by']){

            $sort_by = $_GET['sort_by'];
        }

        // if coutry is not empty
        if($_GET['show_only']){

            $show_only = $_GET['show_only'];
        }

        $html = '';

        // Get all sales companies
        $all_suppliers = $this->Suppliers_Model->sortBySuppliers($sort_by, $show_only);

        // check if number of contact are between 10 to 99
        if($show_only == 12)
        {
            foreach ($all_suppliers as $key => $supplier)
            {
                // Get number of sales contact
                $supplier_contacts = $this->Suppliers_Model->getContactRecords($supplier['id']);
               
                if($show_only == 12){

                    // if number of contacts are less than 100
                    if(count($supplier_contacts) != 1){

                        unset($all_suppliers[$key]);
                    }
                }                
            }
        }

        echo '<pre>';
        print_r($all_suppliers);
        exit;

        $lead_block = '';
        $suspects_block = '';
        $prospects_block = '';
        $key_contact_block = '';

        $sales_address = $this->Sales_Model->getAllSalesAddress();
        $flag = 'us.png';

        foreach ($all_sales_contacts as $key => $contact) 
        {
            if($contact['status'] == 1)
            {
                foreach($sales_address as $address)
                {
                    if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $flag = $address['flag'];
                    }
                }
                
                $lead_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['fname'].' '.$contact['lname'].' </b><br/>Company : <b class="f-w-700">'. $contact['company_name'].'</b></h5><p>Position: <strong>'. $contact['job_title'].'</strong></p><p>Department: <strong>'. $contact['department'].'</strong></p><p>Location:';
                            
                $add_count = 0;
                foreach($sales_address as $address)
                {
                    if($address["address_type"] == "head_office_address" && $address["sales_contact_id"] == $contact["id"])
                    {
                        $lead_block .=  $address["location"].', '.$address["street"].', '.$address["town"].', '.$address["state"].', '.$address["country_name"].' '.$address["zip_code"];
                    
                    }else if($address['address_type'] != 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $add_count++;
                    }
                }
                $lead_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. ($contact["trader"] != '')?$contact["trader"]:"N/A".' | Spend: <i class="fas fa-pound-sign" style="color: #fff;"> </i> N/A </p><p> Enquiry: N/A | Quoted: N/A | Order: N/A</p>
                </div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><a role="menuitem" tabindex="-1" href="'.base_url()."admin/sales/edit_sales/".$contact["id"]).'"><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archieve</li></a></ul></div>';
            }

            if($contact['status'] == 2)
            {
                foreach($sales_address as $address)
                {
                    if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $flag = $address['flag'];
                    }
                }
                
                $suspects_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['fname'].' '.$contact['lname'].' </b><br/>Company : <b class="f-w-700">'. $contact['company_name'].'</b></h5><p>Position: <strong>'. $contact['job_title'].'</strong></p><p>Department: <strong>'. $contact['department'].'</strong></p><p>Location:';
                            
                $add_count = 0;
                foreach($sales_address as $address)
                {
                    if($address["address_type"] == "head_office_address" && $address["sales_contact_id"] == $contact["id"])
                    {
                        $suspects_block .=  $address["location"].', '.$address["street"].', '.$address["town"].', '.$address["state"].', '.$address["country_name"].' '.$address["zip_code"];
                    
                    }else if($address['address_type'] != 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $add_count++;
                    }
                }
                $suspects_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: <i class="fas fa-pound-sign" style="color: #fff;"> </i>` 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
                </div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><a role="menuitem" tabindex="-1" href="'.base_url()."admin/sales/edit_sales/".$contact["id"]).'"><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archieve</li></a></ul></div>';
            }

            if($contact['status'] == 3)
            {
                foreach($sales_address as $address)
                {
                    if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $flag = $address['flag'];
                    }
                }
                
                $prospects_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['fname'].' '.$contact['lname'].' </b><br/>Company : <b class="f-w-700">'. $contact['company_name'].'</b></h5><p>Position: <strong>'. $contact['job_title'].'</strong></p><p>Department: <strong>'. $contact['department'].'</strong></p><p>Location:';
                            
                $add_count = 0;
                foreach($sales_address as $address)
                {
                    if($address["address_type"] == "head_office_address" && $address["sales_contact_id"] == $contact["id"])
                    {
                        $prospects_block .=  $address["location"].', '.$address["street"].', '.$address["town"].', '.$address["state"].', '.$address["country_name"].' '.$address["zip_code"];
                    
                    }else if($address['address_type'] != 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $add_count++;
                    }
                }
                $prospects_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: <i class="fas fa-pound-sign" style="color: #fff;"> </i>` 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
                </div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><a role="menuitem" tabindex="-1" href="'.base_url()."admin/sales/edit_sales/".$contact["id"]).'"><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archieve</li></a></ul></div>';
            }

            if($contact['status'] == 4)
            {
                foreach($sales_address as $address)
                {
                    if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $flag = $address['flag'];
                    }
                }
                
                $key_contact_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['fname'].' '.$contact['lname'].' </b><br/>Company : <b class="f-w-700">'. $contact['company_name'].'</b></h5><p>Position: <strong>'. $contact['job_title'].'</strong></p><p>Department: <strong>'. $contact['department'].'</strong></p><p>Location:';
                            
                $add_count = 0;
                foreach($sales_address as $address)
                {
                    if($address["address_type"] == "head_office_address" && $address["sales_contact_id"] == $contact["id"])
                    {
                        $key_contact_block .=  $address["location"].', '.$address["street"].', '.$address["town"].', '.$address["state"].', '.$address["country_name"].' '.$address["zip_code"];
                    
                    }else if($address['address_type'] != 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                    {
                        $add_count++;
                    }
                }
                $key_contact_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: <i class="fas fa-pound-sign" style="color: #fff;"> </i>` 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
                </div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><a role="menuitem" tabindex="-1" href="'.base_url()."admin/sales/edit_sales/".$contact["id"]).'"><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archieve</li></a></ul></div>';
            }
        }

        $html = $lead_block."|-|".$suspects_block."|-|".$prospects_block.'|-|'.$key_contact_block;
        echo $html;
    }
}