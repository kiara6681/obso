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

        $data['supplier_main_contacts'] = $supplier_main_contacts = $this->Suppliers_Model->getSupplierMainContact();
        //get Suppliers Menufaturer
        $data['manufacturer'] = $manufacturer = $this->Suppliers_Model->getAllSupplierManufacturer();

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
    
    // edit supplier
    public function edit_supplier()
    {
        if($this->input->post())
        {
            if($this->input->post('contact_database_status')){

                $contact_database_status = $this->input->post('contact_database_status');
            }else{
                $contact_database_status = 1;
            }

            $id                            = $this->input->post('id');
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
                'updated_at'                    => $date
            );

            //Insert Sales Data
            $update = $this->Suppliers_Model->updateContact($data, $id);

            //Delete Address 
            $delete = $this->Suppliers_Model->deleteAddress($id,'supplier_address');

            //Delete Supplier Contacts 
            $delete = $this->Suppliers_Model->deleteSupplierData($id, 'suppliers_contacts'); 

            //Delete Supplier Menufacturer 
            $delete = $this->Suppliers_Model->deleteSupplierData($id, 'supplier_manufacturers'); 

            //Insert Address
            foreach ($fname as $key => $name) {
                $data = array(
                    'supplier_id'   => $id,
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
                    'supplier_id'           => $id,
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
                    'session_id' => $id,
                    'location'   => $value,
                    'street'     => $street_address[$key],
                    'town'       => $city[$key],
                    'state'      => $street_address[$key],
                    'zip_code'   => $zip[$key],
                    'country'    => $country[$key],
                    'status'     => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                );

                $insert = $this->Sales_Model->insert($data, 'supplier_address');
            }

            $this->session->set_flashdata('message', 'Supplier Updated Successfully');

            //redirect to some function
            redirect("admin/suppliers");
        }

        $id = $this->uri->segment(4);

        $data = array();
        $data['page_title'] = 'Edit Suplier';

        // Get supplier
        $data['supplier'] = $supplier = $this->Suppliers_Model->getAllSupplierContacts(null, $id);

        // Get all supplier address
        $data['contact_address'] = $contact_address = $this->Suppliers_Model->getContactsAddress($id);

        // Get all supplier contact
        $data['supplier_contacts'] = $supplier_contacts = $this->Suppliers_Model->getSupplierContact($id);

        // Get all supplier menufacturer
        $data['supplier_manufacturers'] = $supplier_manufacturers = $this->Suppliers_Model->getSupplierManufacturers($id);

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // Get all Menufecturer
        $data['menufecturers'] = $menufecturers = $this->common_model->select('manufacturer');
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/supplier/edit', $data);
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

        $lead_block = '';
        $suspects_block = '';
        $prospects_block = '';
        $key_contact_block = '';

        $supplier_main_contacts = $this->Suppliers_Model->getSupplierMainContact();

        //get Suppliers Menufaturer
        $manufacturer = $this->Suppliers_Model->getAllSupplierManufacturer();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        $flag = 'flag.png';

        foreach ($all_suppliers as $key => $contact) 
        {
            if($contact['status'] == 1)
            {
                foreach($countries as $country)
                {
                    if($country['id'] == $contact['contact_country'])
                    {
                        $flag = $country['flag'];
                    }
                }
                $blanklist = '';
                $risk = '';

                if($contact['blacklisted'] == 1)
                {
                    $blanklist = 'blanklist';
                }
                if($contact['risk'] == 1)
                {
                    $risk = 'risk';
                }
                
                $lead_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b '.$blanklist." ".$risk.'"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['company'].'</b> Score: ';
                            
                if($contact['overall_rating'] == 1)
                {
                    $lead_block .= '<i class="fa fa-star yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    
                }else if($contact['overall_rating'] == 2){
                    $lead_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 3){
                    $lead_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 4){
                    $lead_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 5){
                    $lead_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>';
                }else{
                    $lead_block .= '
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }

                $lead_block .= ' </h5> Website :<a href="website"><b class="f-w-700">'.$contact['website'].'</b></a><p>Supplier Type: <strong>'.$contact['supplier_type'].'</strong></p><p>Conditions Offered: <strong>'.$contact['conditions_offered'].'</strong></p><p>Express Options:';
                $option = json_encode($contact['express_options']);
                $temp = json_decode($contact['express_options']);
                $res = (array)$temp;

                foreach($res as $dd)
                {
                    $lead_block .= $dd.'...';
                    break;
                }

                $lead_block .= '| Express Order Cut off Time:';

                if(strlen($contact['cut_off_time']) > 10)
                {
                    $lead_block .= substr($contact['cut_off_time'],0, 10)."..."; 
                }else{
                    $lead_block .= $contact['cut_off_time'];
                }

                $lead_block .= ' </p><p>Payment Terms: '.$contact['payment_terms'].' | Supplier Status: '.$contact['contact_status'].' </p><p> Email: ';
                $email = '';
                $mobile = '';
                foreach($supplier_main_contacts as $main_contact)
                {
                    if($main_contact['supplier_id'] == $contact['id'])
                    {
                        $email = $main_contact['email'];
                        $mobile = $main_contact['mobile'];
                    }
                }
                $lead_block .= '<a href="mailto:'.$email.'" style="color:coral !important;">'.$email.'</a> | Number: '.$mobile.'</p><p> Enquiry"s Sent N/A (Active) | Quoted N/A | Supplier Orders : N/A (Active)</p></div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_'.$contact['id'].'"><a role="menuitem" tabindex="-1" href="'.base_url("admin/suppliers/edit_supplier/".$contact["id"]).'."><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archive</li></a><a href="javascript:;" id="'.$contact['id'].'" class="blanklist_supplier" role="menuitem" tabindex="-1"><li role="presentation">Blanklist Supplier</li></a><a href="javascript:;" id="'.$contact['id'].'" class="risk_supplier" role="menuitem" tabindex="-1"><li role="presentation">Risk Supplier</li></a></ul></div>';
            }

            if($contact['status'] == 2)
            {
                foreach($countries as $country)
                {
                    if($country['id'] == $contact['contact_country'])
                    {
                        $flag = $country['flag'];
                    }
                }
                $blanklist = '';
                $risk = '';

                if($contact['blacklisted'] == 1)
                {
                    $blanklist = 'blanklist';
                }
                if($contact['risk'] == 1)
                {
                    $risk = 'risk';
                }
                
                $suspects_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b '.$blanklist." ".$risk.'"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['company'].'</b> Score: ';
                            
                if($contact['overall_rating'] == 1)
                {
                    $suspects_block .= '<i class="fa fa-star yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    
                }else if($contact['overall_rating'] == 2){
                    $suspects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 3){
                    $suspects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 4){
                    $suspects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 5){
                    $suspects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>';
                }else{
                    $suspects_block .= '
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }

                $suspects_block .= ' </h5> Website :<a href="website"><b class="f-w-700">'.$contact['website'].'</b></a><p>Supplier Type: <strong>'.$contact['supplier_type'].'</strong></p><p>Conditions Offered: <strong>'.$contact['conditions_offered'].'</strong></p><p>Express Options:';
                $option = json_encode($contact['express_options']);
                $temp = json_decode($contact['express_options']);
                $res = (array)$temp;

                foreach($res as $dd)
                {
                    $suspects_block .= $dd.'...';
                    break;
                }

                $suspects_block .= '| Express Order Cut off Time:';

                if(strlen($contact['cut_off_time']) > 10)
                {
                    $suspects_block .= substr($contact['cut_off_time'],0, 10)."..."; 
                }else{
                    $suspects_block .= $contact['cut_off_time'];
                }

                $suspects_block .= ' </p><p>Payment Terms: '.$contact['payment_terms'].' | Supplier Status: '.$contact['contact_status'].' </p><p> Email: ';
                $email = '';
                $mobile = '';
                foreach($supplier_main_contacts as $main_contact)
                {
                    if($main_contact['supplier_id'] == $contact['id'])
                    {
                        $email = $main_contact['email'];
                        $mobile = $main_contact['mobile'];
                    }
                }
                $suspects_block .= '<a href="mailto:'.$email.'" style="color:coral !important;">'.$email.'</a> | Number: '.$mobile.'</p><p> Enquiry"s Sent N/A (Active) | Quoted N/A | Supplier Orders : N/A (Active)</p></div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_'.$contact['id'].'"><a role="menuitem" tabindex="-1" href="'.base_url("admin/suppliers/edit_supplier/".$contact["id"]).'."><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archive</li></a></ul></div>';
            }

            if($contact['status'] == 3)
            {
                foreach($countries as $country)
                {
                    if($country['id'] == $contact['contact_country'])
                    {
                        $flag = $country['flag'];
                    }
                }
                $blanklist = '';
                $risk = '';

                if($contact['blacklisted'] == 1)
                {
                    $blanklist = 'blanklist';
                }
                if($contact['risk'] == 1)
                {
                    $risk = 'risk';
                }
                
                $prospects_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b '.$blanklist." ".$risk.'"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['company'].'</b> Score: ';
                            
                if($contact['overall_rating'] == 1)
                {
                    $prospects_block .= '<i class="fa fa-star yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    
                }else if($contact['overall_rating'] == 2){
                    $prospects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 3){
                    $prospects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 4){
                    $prospects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 5){
                    $prospects_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>';
                }else{
                    $prospects_block .= '
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }

                $prospects_block .= ' </h5> Website :<a href="website"><b class="f-w-700">'.$contact['website'].'</b></a><p>Supplier Type: <strong>'.$contact['supplier_type'].'</strong></p><p>Conditions Offered: <strong>'.$contact['conditions_offered'].'</strong></p><p>Express Options:';
                $option = json_encode($contact['express_options']);
                $temp = json_decode($contact['express_options']);
                $res = (array)$temp;

                foreach($res as $dd)
                {
                    $prospects_block .= $dd.'...';
                    break;
                }

                $prospects_block .= '| Express Order Cut off Time:';

                if(strlen($contact['cut_off_time']) > 10)
                {
                    $prospects_block .= substr($contact['cut_off_time'],0, 10)."..."; 
                }else{
                    $prospects_block .= $contact['cut_off_time'];
                }

                $prospects_block .= ' </p><p>Payment Terms: '.$contact['payment_terms'].' | Supplier Status: '.$contact['contact_status'].' </p><p> Email: ';
                $email = '';
                $mobile = '';
                foreach($supplier_main_contacts as $main_contact)
                {
                    if($main_contact['supplier_id'] == $contact['id'])
                    {
                        $email = $main_contact['email'];
                        $mobile = $main_contact['mobile'];
                    }
                }
                $prospects_block .= '<a href="mailto:'.$email.'" style="color:coral !important;">'.$email.'</a> | Number: '.$mobile.'</p><p> Enquiry"s Sent N/A (Active) | Quoted N/A | Supplier Orders : N/A (Active)</p></div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_'.$contact['id'].'"><a role="menuitem" tabindex="-1" href="'.base_url("admin/suppliers/edit_supplier/".$contact["id"]).'."><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archive</li></a><a href="'.base_url('admin/suppliers/tech_sources/'.$contact['id']).'" class="tech-sources" id="'.$contact['id'].'" role="menuitem" tabindex="-1"><li role="presentation">Tech Sources</li></a></ul></div>';
            }

            if($contact['status'] == 4)
            {
                foreach($countries as $country)
                {
                    if($country['id'] == $contact['contact_country'])
                    {
                        $flag = $country['flag'];
                    }
                }
                $blanklist = '';
                $risk = '';

                if($contact['blacklisted'] == 1)
                {
                    $blanklist = 'blanklist';
                }
                if($contact['risk'] == 1)
                {
                    $risk = 'risk';
                }
                
                $key_contact_block .= '<div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="'.$contact['id'].'"><div class="col-md-12 c-b '.$blanklist." ".$risk.'"><h5 class="f-w-400"><img style="max-width: 32px;padding: 1px; " src="'.base_url().'uploads/flags/'.$flag.'" />Name  : <b class="f-w-700">'.$contact['company'].'</b> Score: ';
                            
                if($contact['overall_rating'] == 1)
                {
                    $key_contact_block .= '<i class="fa fa-star yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    
                }else if($contact['overall_rating'] == 2){
                    $key_contact_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 3){
                    $key_contact_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 4){
                    $key_contact_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star"></i>';
                }else if($contact['overall_rating'] == 5){
                    $key_contact_block .= '
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>
                    <i class="fa fa-star yellow"></i>';
                }else{
                    $key_contact_block .= '
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>';
                }

                $key_contact_block .= ' </h5> Website :<a href="website"><b class="f-w-700">'.$contact['website'].'</b></a><p>Supplier Type: <strong>'.$contact['supplier_type'].'</strong></p><p>Conditions Offered: <strong>'.$contact['conditions_offered'].'</strong></p><p>Express Options:';
                $option = json_encode($contact['express_options']);
                $temp = json_decode($contact['express_options']);
                $res = (array)$temp;

                foreach($res as $dd)
                {
                    $key_contact_block .= $dd.'...';
                    break;
                }

                $key_contact_block .= '| Express Order Cut off Time:';

                if(strlen($contact['cut_off_time']) > 10)
                {
                    $key_contact_block .= substr($contact['cut_off_time'],0, 10)."..."; 
                }else{
                    $key_contact_block .= $contact['cut_off_time'];
                }

                $key_contact_block .= ' </p><p>Payment Terms: '.$contact['payment_terms'].' | Supplier Status: '.$contact['contact_status'].' </p><p> Email: ';
                $email = '';
                $mobile = '';
                foreach($supplier_main_contacts as $main_contact)
                {
                    if($main_contact['supplier_id'] == $contact['id'])
                    {
                        $email = $main_contact['email'];
                        $mobile = $main_contact['mobile'];
                    }
                }
                $key_contact_block .= '<a href="mailto:'.$email.'" style="color:coral !important;">'.$email.'</a> | Number: '.$mobile.'</p><p> Enquiry"s Sent N/A (Active) | Quoted N/A | Supplier Orders : N/A (Active)</p></div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_'.$contact['id'].'"><a role="menuitem" tabindex="-1" href="'.base_url("admin/suppliers/edit_supplier/".$contact["id"]).'."><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archive</li></a><a href="'.base_url('admin/suppliers/premier_partners/'.$contact['id']).'" class="premier_partners" id="'.$contact['id'].'" role="menuitem" tabindex="-1"><li role="presentation">Premier Partnerss</li></a></ul></div>';
            }
        }

        $html = $lead_block."|-|".$suspects_block."|-|".$prospects_block.'|-|'.$key_contact_block;
        echo $html;
    }

     //Contact Blanklist
    public function blanklist_supplier()
    {
        $id = $this->input->post('id');

        $blanklist_resoan = $this->input->post('blanklist_resoan');

        $data = array(
            'blacklisted_reason' => $blanklist_resoan,
            'blacklisted' => 1,
            'risk_reason' => null,
            'risk' => 0
        );

        //Update Reason
        $update = $this->Suppliers_Model->updateContact($data, $id);

        $this->session->set_flashdata('msg', 'Supplier Contact Blacklisted Successfully');
        redirect('admin/suppliers');        
    }

    //Contact Risk
    public function risk_supplier()
    {
        $id = $this->input->post('id');

        $risk_resoan = $this->input->post('risk_resoan');

        $data = array(
            'risk_reason' => $risk_resoan,
            'risk' => 1,
            'blacklisted_reason' => null,
            'blacklisted' => 0,
        );

        //Update Reason
        $update = $this->Suppliers_Model->updateContact($data, $id);

        $this->session->set_flashdata('msg', 'Supplier Contact move on Risk Successfully');
        redirect('admin/suppliers');        
    }

    //Contact Tech Sources
    public function tech_sources()
    {
        $id = $this->uri->segment(4);

        $data = array(
            'tech_sources' => 1
        );

        //Update Reason
        $update = $this->Suppliers_Model->updateContact($data, $id);

        $this->session->set_flashdata('msg', 'Supplier Contact Tech Sources Successfully');
        redirect('admin/suppliers');        
    }

    //Contact Premier Partners
    public function premier_partners()
    {
        $id = $this->uri->segment(4);

        $data = array(
            'premier_partners' => 1
        );

        //Update Reason
        $update = $this->Suppliers_Model->updateContact($data, $id);

        $this->session->set_flashdata('msg', 'Supplier Contact Premier Partners Successfully');
        redirect('admin/suppliers');        
    }

    // Check Supplier Profile Information by AJAX
    public function checkInformation()
    {
        $id = $_GET['id'];
        $status = $_GET['drop_status'];

        //Get user details
        $data = $this->Suppliers_Model->getAllSupplierContacts(null, $id);

        if($status == 1)
        {
            echo 1;
        }else if($status == 2)
        {
            if($data->risk == 1 || $data->blacklisted == 1)
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 3)
        {
            if($data->risk == 1 || $data->blacklisted == 1)
            {
                echo 0;
            }else{
                echo 3;
            }
        }else if($status == 4)
        {
            if($data->risk == 1 || $data->blacklisted == 1)
            {
                echo 0;
            }else{
                
                echo 1;
            }
        }
    }

        // Update Supplier Status by AJAX
    public function updateSupplierStatus()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
       
        //Get user details
        $update = $this->Suppliers_Model->updateStatus($id, $status);

        if($status < 3)
        {
            //Update status
            $data = array(
                'tech_sources' => 0
            );

            //Change Contact Prospect Status
            $this->common_model->update($data, $id,'suppliers');
        }

        if($status < 4)
        {
            //Update status
            $data = array(
                'premier_partners' => 0
            );

            //Change Contact Prospect Status
            $this->common_model->update($data, $id,'suppliers');
        }
        echo $status;
    }
    // Archived
    public function archived(){

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        $status = 0;

        // get All supplier
        $data['archived_contacts'] = $archived_contacts = $this->Suppliers_Model->getAllSupplierContacts($status);

        // Get all Menufecturer
        $data['menufecturer'] = $menufecturer = $this->common_model->select('manufacturer');

        $data['supplier_main_contacts'] = $supplier_main_contacts = $this->Suppliers_Model->getSupplierMainContact();

        // Get all supplier
        $data['sales_address'] = $sales_address = $this->Suppliers_Model->getAllSalesAddress();

        $data['page_title'] = 'Archived Suppliers';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/supplier/archived', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    //Archive
    public function archive()
    {
        $id = $this->input->post('id');

        $archieved_resoan = $this->input->post('archieved_resoan');

        $data = array(
            'archieved_resoan' => $archieved_resoan
        );

        //Update Reason
        $update = $this->Suppliers_Model->updateContact($data, $id);

        //Update Status
        $data = $this->Suppliers_Model->updateStatus($id, 0);

        $this->session->set_flashdata('msg', 'Supplier contact Archived successfully');
        redirect('admin/suppliers');        
    }

    // Back To Supplier Lead
    public function backToLeads()
    {
        $id = $this->uri->segment(4);

        //Update Status
        $data = $this->Suppliers_Model->updateStatus($id, 1);
        $this->session->set_flashdata('msg', 'Supplier contact back on lead successfully.');
        redirect(base_url('admin/suppliers'));        
    }


    // Delete Suppliers
    public function deleteContact()
    {
        $id = $this->uri->segment(4);

        //Update Status
        $this->common_model->delete($id,'suppliers'); 
        $this->session->set_flashdata('msg', 'Supplier permanently deleted successfully.');
        redirect(base_url('admin/suppliers'));        
    }
}