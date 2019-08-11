<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
        $this->load->model('Sales_Model');
        $this->load->model('Companies_Model');
        $this->load->model('Enquiry_model');
        $this->load->helper('url');
        $this->load->library('session');

    }

    /* Prem created functions */
    // show all sales
    public function index()
    {
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
        $this->load->view('admin/sales/index', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // show all Archieved
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

    // Add new sales
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
            /*$gender            = $this->input->post('gender');            */
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
            /*$payment_terms     = $this->input->post('payment_terms');*/
            /*$invoice_ref_no    = $this->input->post('invoice_ref_no');*/
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
                /*'gender'                   => $gender,*/
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
                /*'payment_terms'            => $payment_terms,*/
                'estimate_required'          => $estimated_frequency,
                'estimate_spend'             => $estimated_spend,
                'manufacturers'              => json_encode($manufacturers),
                /*'invoice_reference_number' => $invoice_ref_no,*/
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
        $data['page_title'] = 'Add New Sales';

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

        // Get all countries
        $data['countries'] = $countries = $this->common_model->select('country');

        // Get all Menufecturer
        $data['menufecturer'] = $menufecturer = $this->common_model->select('manufacturer');
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/create', $data);
        $this->load->view('admin/layout/footer', $data);
    }
    
    // Add new sales
    public function edit_sales()
    {
        if($this->input->post())
        {
            $id                  = $this->input->post('id');
            $company             = $this->input->post('company');
            $trader              = $this->input->post('trader');
            $fname               = $this->input->post('first_name');
            $lname               = $this->input->post('last_name');
            /*$gender              = $this->input->post('gender');*/
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
            /*$payment_terms       = $this->input->post('payment_terms');
            $invoice_ref_no      = $this->input->post('invoice_ref_no');*/
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
                /*'gender'                   => $gender,*/
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
                /*'payment_terms'            => $payment_terms,*/
                'estimate_required'        => $estimated_frequency,
                'estimate_spend'           => $estimated_spend,
                'manufacturers'            => json_encode($manufacturer),
                /*'invoice_reference_number' => $invoice_ref_no,*/
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

    // Check Sales Profile Information by AJAX
    public function checkInformation()
    {
        $id = $_GET['id'];
        $status = $_GET['drop_status'];

        //Get user details
        $data = $this->Sales_Model->getAllSalesContacts(null, $id);

        //Get Company Id 
        $company_details = $this->Sales_Model->getCompanyByID($data->company);

        //Get Enquiry 
        $enquires = $this->Sales_Model->getSalesEnqury($data->id);

        if($status == 1)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname))
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 2)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname))
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 3)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry) || count($enquires) == 0 || empty($data->manufacturers))
            {
                echo 0;
            }else{
                if(!empty($data->email) || !empty($data->mobile))
                {
                    echo 3;
                }else{
                    echo 0;
                }
            }
        }else if($status == 4)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry) || count($enquires) == 0 || empty($data->manufacturers))
            {
                echo 0;
            }else{
                if(!empty($data->email) || !empty($data->mobile))
                {
                    echo 1;
                }else{
                    echo 0;
                }
            }
        }
    }

    // Archieve Sales
    public function archieve()
    {
        $id = $this->input->post('id');

        $archieved_resoan = $this->input->post('archieved_resoan');

        $data = array(
            'archieved_resoan' => $archieved_resoan
        );

        //Update Reason
        $update = $this->Sales_Model->updateContact($data, $id);

        //Update Status
        $data = $this->Sales_Model->updateStatus($id, 0);

        $this->session->set_flashdata('msg', 'Sales contact archieved successfully');
        redirect('admin/sales');        
    }

    // Archieve Sales
    public function deleteContact()
    {
        $id = $this->uri->segment(4);

        //Update Status
        $this->common_model->delete($id,'sales_contacts'); 
        $this->session->set_flashdata('msg', 'Sales contact permanently deleted successfully.');
        redirect(base_url('admin/sales'));        
    }

    // Archieve Sales
    public function backToLeads()
    {
        $id = $this->uri->segment(4);

        //Update Status
        $data = $this->Sales_Model->updateStatus($id, 1);
        $this->session->set_flashdata('msg', 'Sales contact back on lead successfully.');
        redirect(base_url('admin/sales'));        
    }

    // Update Sales Status by AJAX
    public function updateSalesStatus()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
       
        //Get user details
        $update = $this->Sales_Model->updateStatus($id, $status);

        if($status < 3)
        {
            //Update status
            $data = array(
                'contact_prospect_status' => 0,
                'closable_prospect_status' => 0
            );

            //Change Contact Prospect Status
            $this->common_model->update($data, $id,'sales_contacts');
        }

        echo $status;
    }
	 
    /*Start Customer List*/ 
    public function customer_list(){
        
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();

        $data['page_title'] = 'Customer List';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/customer_list', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function delete_customer_list($id)
    {
        $this->common_model->delete($id,'customer_records'); 
        $this->session->set_flashdata('msg', 'Customer Data Deleted Successfully');
        redirect(base_url('admin/sales/customer_list'));
    }

    public function prospects(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();
        $data['page_title'] = 'Prospects';
         $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/prospects', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function account(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();
        $data['page_title'] = 'Account';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/account', $data);
        $this->load->view('admin/layout/footer', $data);

    }

    public function uploadCSV()
    {
        if(isset($_POST["import"]))
        {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $i = 0;
            $j = 0;
            $all_is_well = 0;
            $all_data = array();

            $department = ['Purchasing','Workshop / Factory / Production / Engineering','Stores','Finance','Sales / Customer Service','Reception','Unknown'];

            $estimated_requirement = ['Less then 1 year','Daily','Weekly','Monthly','Yearly'];
            $estimated_spend = ['Less then 50k','50k+','100k+','500k+','1m+'];
            $communication = ['Email','SMS','Both'];
            $contact_status = ['Active','Do not Contact','In-Active'];
            $payment_tearms = ['Advance','50/50 Advance','75/25 Advance','Pay to ship','Pay on Delivery','7 Days DOI','14 Days DOI','30 Days DOI','60 Days DOI','90 Days DOI','EOM','30 EOM','60 EOM','90 '];

            //Get Companies
            $sales_companies = $this->Companies_Model->getAllSalesCompanies();

            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
            {
                if($j > 0)
                {
                    if(!empty($filesop[0]))
                    {
                        $check_company = 0;
                        foreach ($sales_companies as $k => $company) {
                            if($company['company_name'] == $filesop[0])
                            {
                                $check_company = 1;
                            }
                            
                        }
                        if($check_company == 1)
                        {
                            if(!empty($filesop[1]))
                            {
                                if(!empty($filesop[2]))
                                {
                                    if(in_array($filesop[6], $department))
                                    {
                                        if(preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $filesop[8]))
                                        {
                                            if(in_array($filesop[11], $estimated_requirement))
                                            {
                                                if(in_array($filesop[12], $estimated_spend))
                                                {
                                                    if(in_array($filesop[13], $payment_tearms))
                                                    {
                                                        if(in_array($filesop[22], $communication))
                                                        {
                                                            if(in_array($filesop[23], $contact_status))
                                                            {
                                                                $all_data[$j] = $filesop;
                                                                $all_is_well = 1; 

                                                            }else{
                                                                $all_is_well = 0; 
                                                                $msg = 'Contact Status is wrong in row number '.$j.'';
                                                                break;
                                                            }
                                                        }else{
                                                            $all_is_well = 0; 
                                                            $msg = 'Communication Detail is wrong in row number '.$j.'';
                                                            break;
                                                        }
                                                    }else{
                                                        $all_is_well = 0; 
                                                        $msg = 'Payment Tearms is wrong in row number '.$j.'';
                                                        break;
                                                    }

                                                }else{
                                                    $all_is_well = 0; 
                                                    $msg = 'Estimated Spend is wrong in row number '.$j.'';
                                                    break;
                                                }
                                            }else{
                                                $all_is_well = 0; 
                                                $msg = 'Estimated Requirement name is wrong in row number '.$j.'';
                                                break;

                                            }
                                        }else{
                                            $all_is_well = 0; 
                                            $msg = 'email is not valid email in row number '.$j.'';
                                            break;
                                        }
                                    }else{
                                        $all_is_well = 0; 
                                        $msg = 'Department name is wrong in row number '.$j.'';
                                        break;

                                    }
                                }else{
                                    $all_is_well = 0; 
                                    $msg = 'please fill last name in row number '.$j.'';
                                    break;
                                }

                            }else{
                                $all_is_well = 0; 
                                $msg = 'please fill first name in row number '.$j.'';
                                break;
                            } 
                        }else{
                             $all_is_well = 0; 
                            $msg = 'please fill correct company name in row number '.$j.'';
                            break;
                        }
                    }else{
                        $all_is_well = 0; 
                        $msg = 'please fill company name in row number '.$j.'';
                        break;
                    }
                }
                $j++;
            }

            if($all_is_well == 1)
            {
                //Get All Country
                $countries = $this->common_model->select('country');
                $date      = date('Y-m-d H:i:s');

                foreach($all_data as $key => $value)
                {
                    $company_id = '';
                    foreach ($sales_companies as $k => $company) {
                        if($company['company_name'] == $value[0])
                        {
                            $company_id = $company['id'];
                        }
                    }

                    $data = array(
                        'company'                  => (!empty($company_id)) ? $company_id : "",
                        'trader'                   => 'admin',
                        'fname'                    => (!empty($value[1])) ? $value[1] : "",
                        'lname'                    => (!empty($value[2])) ? $value[2] : "",
                        'gender'                   => (!empty($value[3])) ? $value[3] : "",
                        'personal_info'            => (!empty($value[4])) ? $value[4] : "",
                        'branch'                   => (!empty($value[5])) ? $value[5] : "",
                        'department'               => (!empty($value[6])) ? $value[6] : "",
                        'job_title'                => (!empty($value[7])) ? $value[7] : "",
                        'email'                    => (!empty($value[8])) ? $value[8] : "",
                        'mobile'                   => (!empty($value[9])) ? $value[9] : "",
                        'direct_dial'              => (!empty($value[10])) ? $value[10] : "",
                        'estimate_required'        => (!empty($value[11])) ? $value[11] : "",
                        'estimate_spend'           => (!empty($value[12])) ? $value[12] : "",
                        'payment_terms'            => (!empty($value[13])) ? $value[13] : "",
                        'pls_information'          => (!empty($value[14])) ? $value[14] : "",
                        'invoice_reference_number' => (!empty($value[15])) ? $value[15] : "",
                        'communication'            => (!empty($value[22])) ? $value[22] : "",
                        'contact_status'           => (!empty($value[23])) ? $value[23] : "",
                        'status'                   => 1,
                        'created_at'               => $date,
                        'updated_at'               => $date
                    );

                     //Insert Sales Data
                    $insert_id = $this->Sales_Model->insert($data, 'sales_contacts');
                    $country_name = '';

                    foreach ($countries as $key => $country) {
                        if($value[21] == $country['name'])
                        {
                            $country_id = $country['id'];
                        }
                    }

                    //Insert Address
                    $data = array(
                        'sales_contact_id' => $insert_id,
                        'address_type'     => 'head_office_address',
                        'location'         => (!empty($value[16])) ? $value[16] : "",
                        'street'           => (!empty($value[17])) ? $value[17] : "",
                        'town'             => (!empty($value[18])) ? $value[18] : "",
                        'state'            => (!empty($value[19])) ? $value[19] : "",
                        'zip_code'         => (!empty($value[20])) ? $value[20] : "",
                        'country'          => (!empty($country_id)) ? $country_id : "",
                        'status'           => 1,
                        'created_at'       => $date,
                        'updated_at'       => $date
                    );

                    $insert = $this->Sales_Model->insert($data, 'sales_contact_addresses');
                }
                $this->session->set_flashdata('msg', 'Sales contact imported successfully.');
                redirect(base_url('admin/sales'));
            }
            else
            {

                $this->session->set_flashdata('msg', $msg);
                redirect('admin/sales');
            }
        }
        redirect(base_url('admin/sales'));
    }

    // Sales Filter
    public function sales_filter(){

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
        $all_sales_contacts = $this->Sales_Model->sortBySalesContacts($sort_by, $show_only);

        // check if number of contact are between 10 to 99
        if($show_only == 7 || $show_only == 8 || $show_only == 9 || $show_only == 10 || $show_only == 11)
        {
            foreach ($all_sales_contacts as $key => $sale_contact)
            {
                // Get number of sales contact
                $contact_enquiry = $this->Sales_Model->getSalesEnqury($sale_contact['id']);
                
                if($show_only == 7){
                    // if number of contacts are less than 100
                    if(count($contact_enquiry) > 0){

                        unset($all_sales_contacts[$key]);
                    }
                } 

                if($show_only == 8){

                    // if number of contacts are less than 1
                    if(count($contact_enquiry) != 1){

                        unset($all_sales_contacts[$key]);
                    }
                } 

                if($show_only == 9){

                    // if number of contacts are less than 100
                    if(count($contact_enquiry) < 2 || count($contact_enquiry) > 9){

                        unset($all_sales_contacts[$key]);
                    }
                }  

                if($show_only == 10){

                    // if number of contacts are not between 10 to 99
                    if(count($contact_enquiry) < 10 || count($contact_enquiry) > 99){

                        unset($all_sales_contacts[$key]);
                    }
                }

                if($show_only == 11){

                    // if number of contacts are less than 100
                    if(count($contact_enquiry) <= 100){

                        unset($all_sales_contacts[$key]);
                    }
                    echo 11;
                }                
            }
        }
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
                $lead_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
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
                $suspects_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
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
                $prospects_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
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
                $key_contact_block .= '<a class="badge badge-success badge-pill" href="'.base_url('admin/sales/edit_sales/'.$contact["id"].'">'.$add_count.'</a></p><br /><p>Email: <a href="mailto:'.$contact["email"].'" style="color:coral !important;">'. $contact["email"].'</a> | Mobile : '. $contact["mobile"].'</p><p>Trader: '. $contact["trader"].' | Spend: 0 </p><p> Enquiry: 0 | Quoted: 0 | Order: 0</p>
                </div><div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><a role="menuitem" tabindex="-1" href="'.base_url()."admin/sales/edit_sales/".$contact["id"]).'"><li role="presentation">Edit</li></a><a href="javascript:;" id="'.$contact["id"].'" class="archieve" role="menuitem" tabindex="-1"><li role="presentation">Archieve</li></a></ul></div>';
            }
        }

        $html = $lead_block."|-|".$suspects_block."|-|".$prospects_block.'|-|'.$key_contact_block;
        echo $html;
    }

    //Contact Qualified Prospect
    public function contactQualifiedProspect()
    {
        $id = $this->uri->segment(4);

        //Get user details
        $data = $this->Sales_Model->getAllSalesContacts(null, $id);

        if(!empty($data->estimate_required) && !empty($data->estimate_spend) && !empty($data->manufacturers) && !empty($data->pls_information))
        {
             $data = array(
                'contact_prospect_status' => 1
            );

            //Change Contact Prospect Status
            $this->common_model->update($data, $id,'sales_contacts');

            $this->session->set_flashdata('msg', 'Prospect Qualified Successfully.');
        }else{
            $this->session->set_flashdata('msg', 'Please complete contact prospect information.');

        }

        redirect('admin/sales');
    }

    //Contact Qualified Prospect
    public function contactClosableProspect()
    {
        $id = $this->uri->segment(4);

        //Get user details
        $data = $this->Sales_Model->getAllSalesContacts(null, $id);

        //Get Enquiry 
        $enquires = $this->Sales_Model->getSalesEnqury($id);

        if(!empty($data->estimate_required) && !empty($data->estimate_spend) && !empty($data->manufacturers) && !empty($data->pls_information) && count($enquires) <> 0)
        {
            $data = array(
                'closable_prospect_status' => 1
            );

            //Change Contact Prospect Status
            $this->common_model->update($data, $id,'sales_contacts');

            $this->session->set_flashdata('msg', 'Prospect Closable Successfully.');
        }else{
            $this->session->set_flashdata('msg', 'Please complete contact prospect information.');

        }

        redirect('admin/sales');
    }




    


    /*End Customer List*/ 

    /*start customer records*/

    public function customer_records(){

        $data = array();

        $data['page_title'] = 'Sales';
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();

        	unset($_SESSION['session_id']);
	        unset($_SESSION['company_name']);
	        unset($_SESSION['trader_name']);
	        unset($_SESSION['about']);
	        unset($_SESSION['industry_sector']);
	        unset($_SESSION['sector_free_tax']);
	        unset($_SESSION['url']);
	        unset($_SESSION['company_record']);
	        unset($_SESSION['main_switchboard_number']);
	        unset($_SESSION['estimated_frequency']);
	        unset($_SESSION['estimated_spend']);
	        unset($_SESSION['payment_terms']);
	        unset($_SESSION['free_trade']);
	        unset($_SESSION['payment_ref']);
	        unset($_SESSION['manufacturer_use']);
	        unset($_SESSION['other_manufacturer_used']);
	        unset($_SESSION['psl_information']);
	        unset($_SESSION['competitor_info']);
	        unset($_SESSION['discount_pricing_info']);
	        unset($_SESSION['creation_date']);
			unset($_SESSION['location']);
	        unset($_SESSION['street_address']);
	        unset($_SESSION['city']);
	        unset($_SESSION['state']);
	        unset($_SESSION['zip']);
	        unset($_SESSION['country']);
	        unset($_SESSION['address_type']);

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/customer_records', $data);
        $this->load->view('admin/layout/footer', $data);
    }

     public function add_customer_records()
    {   

        if ($_POST) {

            $programming = $_POST['programming']; 
            if($programming !=""){
            $allppg = implode(',', array_values($programming));
            }else{
              $allppg = "";  
            }

                        
            $data = array(
                'session_id' =>  $_POST['session_id'],
                'company_name' => $_POST['company_name'],
                'trader_name' => $_POST['trader_name'],
                'about' => $_POST['about'],
                'industry_sector' => $_POST['industry_sector'],
                'sector_free_tax' => $_POST['sector_free_tax'],
                'url' => $_POST['url'],
                'company_record' => $_POST['company_record'],
                'main_switchboard_number' => $_POST['main_switchboard_number'],
                'estimated_frequency' => $_POST['estimated_frequency'],
                'estimated_spend' => $_POST['estimated_spend'],
                'payment_terms' => $_POST['payment_terms'],
                'free_trade' => $_POST['free_trade'],
                'payment_ref' => $_POST['payment_ref'],
                'manufacturer_use' => $allppg,
                'other_manufacturer_used' => $_POST['other_manufacturer_used'],
                'psl_information' => $_POST['psl_information'],
                'competitor_info' => $_POST['competitor_info'],
                'discount_pricing_info' => $_POST['discount_pricing_info'],
                'creation_date' => current_datetime()
            );

            

             $datasds = array(
                'session_id' => $_POST['session_id'],
                'location' => $_POST['location'],
                'street_address' => $_POST['street_address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'country' => $_POST['country'],
                'address_type' => $_POST['address_type'],
                'creation_date' => current_datetime()
            );

             $this->session->set_userdata($data);
             $this->session->set_userdata($datasds);

            $data = $this->security->xss_clean($data);
            $datasds = $this->security->xss_clean($datasds);
           //  if(!empty($_SESSION['session_id'])){

           //       $this->common_model->updateone($data, $_SESSION['session_id'],'customer_records');
           //       $this->common_model->updateone($datasds, $_SESSION['session_id'],'customer_address');
           //       $this->load->view('admin/sales/customer_records', $this->session->all_userdata());
           //  $this->load->view('admin/sales/edit_customer_records', $data);
           // redirect(base_url('admin/sales/customer_contact')); 

           //  }else{
            $this->common_model->insert($data, 'customer_records');
            $this->common_model->insert($datasds, 'customer_address');
            $this->load->view('admin/sales/customer_records', $this->session->all_userdata());
            $this->load->view('admin/sales/edit_customer_records', $data);
           redirect(base_url('admin/sales/customer_contact')); 
                // }
        }
    }

    public function edit_customer_records($id="")
    {
        if ($_POST) {

            $sessionid = $_POST['sessionid'];

            $programming = $_POST['programming']; 
            if($programming !=""){
            $allppg = implode(',', array_values($programming));
            }else{
              $allppg = "";  
            }

            

            $data = array(
                'company_name' => $_POST['company_name'],
                'trader_name' => $_POST['trader_name'],
                'about' => $_POST['about'],
                'industry_sector' => $_POST['industry_sector'],
                'sector_free_tax' => $_POST['sector_free_tax'],
                'url' => $_POST['url'],
                'company_record' => $_POST['company_record'],
                'main_switchboard_number' => $_POST['main_switchboard_number'],
                'estimated_frequency' => $_POST['estimated_frequency'],
                'estimated_spend' => $_POST['estimated_spend'],
                'payment_terms' => $_POST['payment_terms'],
                'free_trade' => $_POST['free_trade'],
                'payment_ref' => $_POST['payment_ref'],
                'manufacturer_use' => $allppg,
                'other_manufacturer_used' => $_POST['other_manufacturer_used'],
                'psl_information' => $_POST['psl_information'],
                'competitor_info' => $_POST['competitor_info'],
                'discount_pricing_info' => $_POST['discount_pricing_info'],
            );

            

             $datasds = array(
                'location' => $_POST['location'],
                'street_address' => $_POST['street_address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'country' => $_POST['country'],
                'address_type' => $_POST['address_type'],
            );
        $data = $this->security->xss_clean($data);
        $datasds = $this->security->xss_clean($datasds);

        $this->common_model->updatecustrecord($data, $sessionid,'customer_records');
         $this->common_model->updatecustaddress($datasds, $sessionid,'customer_address');
        $this->session->set_flashdata('msg', 'Customer records Updated Successfully');
        redirect(base_url('admin/sales/customer_list'));
        }


        $data = array();
        $data['customer_record'] = $this->common_model->get_single_customerrecord($id);
        $data['customer_address'] = $this->common_model->get_single_customeraddress($id);

        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();
       
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_records', $data); 
        $this->load->view('admin/layout/footer', $data);
    }







public function edit_customer_recordsone($id="")
    {
        if ($_POST) {

            $sessionid = $_POST['sessionid'];

            $programming = $_POST['programming']; 
            if($programming !=""){
            $allppg = implode(',', array_values($programming));
            }else{
              $allppg = "";  
            }

            
            $data = array(
                'company_name' => $_POST['company_name'],
                'trader_name' => $_POST['trader_name'],
                'about' => $_POST['about'],
                'industry_sector' => $_POST['industry_sector'],
                'sector_free_tax' => $_POST['sector_free_tax'],
                'url' => $_POST['url'],
                'company_record' => $_POST['company_record'],
                'main_switchboard_number' => $_POST['main_switchboard_number'],
                'estimated_frequency' => $_POST['estimated_frequency'],
                'estimated_spend' => $_POST['estimated_spend'],
                'payment_terms' => $_POST['payment_terms'],
                'free_trade' => $_POST['free_trade'],
                'payment_ref' => $_POST['payment_ref'],
                'manufacturer_use' => $allppg,
                'other_manufacturer_used' => $_POST['other_manufacturer_used'],
                'psl_information' => $_POST['psl_information'],
                'competitor_info' => $_POST['competitor_info'],
                'discount_pricing_info' => $_POST['discount_pricing_info'],
            );

            

             $datasds = array(
                'location' => $_POST['location'],
                'street_address' => $_POST['street_address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'country' => $_POST['country'],
                'address_type' => $_POST['address_type'],
            );
        $data = $this->security->xss_clean($data);
        $datasds = $this->security->xss_clean($datasds);

        $this->common_model->updatecustrecord($data, $sessionid,'customer_records');
         $this->common_model->updatecustaddress($datasds, $sessionid,'customer_address');
        $this->session->set_flashdata('msg', 'Customer records Updated Successfully');
        redirect(base_url('admin/sales/edit_customer_recordsone/'.$sessionid));
        }


        $data = array();
        $data['customer_record'] = $this->common_model->get_single_customerrecord($id);
        $data['customer_address'] = $this->common_model->get_single_customeraddress($id);

        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();
       
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_recordsone', $data); 
        $this->load->view('admin/layout/footer', $data);
    }












    public function edit_customer_contacts($id="")
    {        
        if ($_POST) {

            $customer_contact_id = $_POST['customer_contact_id'];

            for($x = 0; $x < sizeof($customer_contact_id); $x++){

            $data = array(
                'fname' => $_POST['fname'][$x],
                'lname' => $_POST['lname'][$x],
                 'gender' => $_POST['gender'][$x],
                'department' => $_POST['department'][$x],
                'job_title' => $_POST['job_title'][$x],
                'branch' => $_POST['branch'][$x],
                'email' => $_POST['email'][$x],
                'mobile' => $_POST['mobile'][$x],
                'direct_dial' => $_POST['direct_dial'][$x],
                'key_personal_info' => $_POST['key_personal_info'][$x],
                'mkt_preferance' => $_POST['mkt_preferance'][$x],
                'contact_status' => $_POST['contact_status'][$x],
            );



        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $customer_contact_id[$x],'customer_contact');
}
        $this->session->set_flashdata('msg', 'Customer Contact Updated Successfully');
        redirect(base_url('admin/sales/customer_list'));
        }


        $data = array();
        $data['customer_record'] = $this->common_model->get_single_customerrecord($id);
        $data['datas'] = $this->common_model->get_customercontact($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_contacts', $data); 
        $this->load->view('admin/layout/footer', $data);
    }


     /*End customer records*/

    /*Start Customer Contact*/
    public function customer_contact(){

        

        $data = array();
        $data['page_title'] = 'Sales';
        //$result['data']=$this->common_model->get_all_customer_contact();

        $result['data']=$this->common_model->get_all_customer_onlycontact();

        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/sales/sales_header', $data);

        $this->load->view('admin/sales/customer_contact', $result);
        $this->load->view('admin/layout/footer', $result);
    }

    public function add_customer_contact()
    {   
         
        if ($_POST) {

        	$sessionid = $_SESSION['session_id'];

        	$result=$this->common_model->get_contact_recordinfo($sessionid);

        	$iiiiid = $result->id;
        	

            $data = array(
                'company_id' => $iiiiid,
                'session_id' => $sessionid,
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'gender' => $_POST['gender'],
                'department' => $_POST['department'],
                'job_title' => $_POST['job_title'],
                'branch' => $_POST['branch'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'direct_dial' => $_POST['direct_dial'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'mark_status' => $_POST['markstatus'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'customer_contact');
            $this->session->set_flashdata('msg', 'User added Successfully');
            
            //$this->session->unset_userdata('session_id');

           redirect(base_url('admin/sales/customer_contact')); 
        }
    }

    public function update_customer_contact($id="")
    {

        if ($_POST) {

            $customer_contact_id = $_POST['customer_contact_id'];

            $data = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'gender' => $_POST['gender'],
                'department' => $_POST['department'],
                'job_title' => $_POST['job_title'],
                'branch' => $_POST['branch'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'direct_dial' => $_POST['direct_dial'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'contact_status' => $_POST['contact_status'],
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $customer_contact_id,'customer_contact');
        $this->session->set_flashdata('msg', 'Customer Contact Updated Successfully');
        redirect(base_url('admin/sales/customer_contact'));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_contact', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function update_customer_contactss($id="")
    {

        if ($_POST) {

            $customer_contact_id = $_POST['customer_contact_id'];
            $sessionid = $_POST['session_id'];

            $data = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'gender' => $_POST['gender'],
                'department' => $_POST['department'],
                'job_title' => $_POST['job_title'],
                'branch' => $_POST['branch'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'direct_dial' => $_POST['direct_dial'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'contact_status' => $_POST['contact_status'],
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $customer_contact_id,'customer_contact');
        $this->session->set_flashdata('msg', 'Customer Contact Updated Successfully');
        redirect(base_url('admin/sales/edit_customer_contacts/'.$sessionid));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_contact', $data);
        $this->load->view('admin/layout/footer', $data);
    }











    public function update_customer_contacts($id="")
    {

        if ($_POST) {

            $customer_contact_id = $_POST['customer_contact_id'];

            $data = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'gender' => $_POST['gender'],
                'department' => $_POST['department'],
                'job_title' => $_POST['job_title'],
                'branch' => $_POST['branch'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'direct_dial' => $_POST['direct_dial'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'contact_status' => $_POST['contact_status'],
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $customer_contact_id,'customer_contact');
        $this->session->set_flashdata('msg', 'Customer Contact Updated Successfully');
        redirect(base_url('admin/sales/edit_customer_contacts/'));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/sales_header', $data);
        $this->load->view('admin/sales/edit_customer_contactss', $data);
        $this->load->view('admin/layout/footer', $data);
    }

   
    public function delete($id)
    {
        $this->common_model->delete($id,'customer_contact'); 
        $this->session->set_flashdata('msg', 'Manufacturer deleted Successfully');
        redirect(base_url('admin/sales/customer_contact'));
    }

    public function markstatus($id)
    {
       $iid = $this->common_model->getcustomer_contact($id,'customer_contact'); 
       $markstatus = $iid->mark_status;

       if($markstatus == "0"){
            $mstatus = 1;
       }else{
            $mstatus = 0;
       }
    $data = array(
                 'mark_status' => $mstatus,
            );

         $this->common_model->update($data, $id,'customer_contact');
        redirect(base_url('admin/sales/customer_contact'));
    }

     public function markstatusone($id)
    {
       $iiiid = $this->common_model->getcustomer_record($id,'customer_records'); 
       $markstatusone = $iiiid->mark_status;

       if($markstatusone == "0"){
            $mstatuson = 1;
       }else{
            $mstatuson = 0;
       }
    $data = array(
                 'mark_status' => $mstatuson,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('admin/sales/customer_list'));
    }


     public function markstatustwo($id)
    {
       $iiiid = $this->common_model->getcustomer_record($id,'customer_records'); 
       $markstatusone = $iiiid->mark_status;

       if($markstatusone == "0"){
            $mstatuson = 1;
       }else{
            $mstatuson = 0;
       }
    $data = array(
                 'mark_status' => $mstatuson,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('admin/sales/prospects'));
    }


    public function partnerstatus($id)
    {
    $data = array(
                 'suspus' => 2,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('admin/sales/customer_list'));
    }



    public function prospectstatus($id)
    {
    $data = array(
                 'suspus' => 1,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('admin/sales/customer_list'));
    }

    public function suspectstatus($id)
    {
    $data = array(
                 'suspus' => 0,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('admin/sales/prospects'));
    }



    /*End Customer Contact*/

    public function sales_header(){
        $data = array();
        $data['page_title'] = 'Sales';
        $this->load->view('admin/sales/sales_header', $data);
    }


// By Tapan 15-6-2019

    public function edit_add_customer_contact($id="")
    {   
          $session_id = $_POST['session_id'];
        if ($_POST) {

            $sessionid = $_POST['session_id'];

            $result=$this->common_model->get_contact_recordinfo($sessionid);

            $iiiiid = $result->id;
            

            $data = array(
                'company_id' => $iiiiid,
                'session_id' => $sessionid,
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'gender' => $_POST['gender'],
                'department' => $_POST['department'],
                'job_title' => $_POST['job_title'],
                'branch' => $_POST['branch'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'direct_dial' => $_POST['direct_dial'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'mark_status' => $_POST['markstatus'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'customer_contact');
            $this->session->set_flashdata('msg', 'User added Successfully');
            
            //$this->session->unset_userdata('session_id');

           redirect(base_url('admin/sales/edit_customer_contacts/'.$session_id)); 
        }
    }
  




}