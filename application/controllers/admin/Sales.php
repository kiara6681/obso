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

        $data['page_title'] = 'Sales Contact';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/index', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    // Add new sales
    public function create(){

        if($this->input->post()){

            $company             = $this->input->post('company');
            $trader              = $this->input->post('trader');
            $fname               = $this->input->post('first_name');
            $lname               = $this->input->post('last_name');
            $gender              = $this->input->post('gender');            
            $personal_info       = $this->input->post('personal_info');
            $branch              = $this->input->post('branch');
            $department          = $this->input->post('department');
            $job_title           = $this->input->post('job_title');
            $email               = $this->input->post('email');
            $mobile              = $this->input->post('phone');
            $direct_dial         = $this->input->post('direct_dial');
            $payment_terms       = $this->input->post('payment_terms');
            $invoice_ref_no      = $this->input->post('invoice_ref_no');
            $pls_info            = $this->input->post('pls_info');
            $estimated_frequency = $this->input->post('estimated_frequency');
            $estimated_spend     = $this->input->post('estimated_spend');
            $manufacturers       = $this->input->post('menufecturer');
            $communication       = $this->input->post('communication');
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
                'branch'                   => $branch,
                'department'               => $department,
                'job_title'                => $job_title,
                'email'                    => $email,
                'mobile'                   => $mobile,
                'direct_dial'              => $direct_dial,
                'payment_terms'            => $payment_terms,
                'estimate_required'        => $estimated_frequency,
                'estimate_spend'           => $estimated_spend,
                'manufacturers'            => json_encode($manufacturers),
                'invoice_reference_number' => $invoice_ref_no,
                'pls_information'          => $pls_info,
                'communication'            => $communication,
                'status'                   => 1,
                'created_at'               => $date,
                'updated_at'               => $date
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

        // echo '<pre>';
        // print_r($countries);
        // exit;
        
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/sales/create', $data);
        $this->load->view('admin/layout/footer', $data);
    }
    
    // Add new sales
    public function edit_sales(){

        $id = $this->uri->segment(4);
        if($this->input->post()){

            $company             = $this->input->post('company');
            $trader              = $this->input->post('trader');
            $fname               = $this->input->post('first_name');
            $lname               = $this->input->post('last_name');
            $gender              = $this->input->post('gender');            
            $personal_info       = $this->input->post('personal_info');
            $branch              = $this->input->post('branch');
            $department          = $this->input->post('department');
            $job_title           = $this->input->post('job_title');
            $email               = $this->input->post('email');
            $mobile              = $this->input->post('phone');
            $direct_dial         = $this->input->post('direct_dial');
            $payment_terms       = $this->input->post('payment_terms');
            $invoice_ref_no      = $this->input->post('invoice_ref_no');
            $pls_info            = $this->input->post('pls_info');
            $estimated_frequency = $this->input->post('estimated_frequency');
            $estimated_spend     = $this->input->post('estimated_spend');
            $manufacturers       = $this->input->post('menufecturer');
            $communication       = $this->input->post('communication');
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
                'branch'                   => $branch,
                'department'               => $department,
                'job_title'                => $job_title,
                'email'                    => $email,
                'mobile'                   => $mobile,
                'direct_dial'              => $direct_dial,
                'payment_terms'            => $payment_terms,
                'estimate_required'        => $estimated_frequency,
                'estimate_spend'           => $estimated_spend,
                'manufacturers'            => json_encode($manufacturers),
                'invoice_reference_number' => $invoice_ref_no,
                'pls_information'          => $pls_info,
                'communication'            => $communication,
                'updated_at'               => $date
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
        $data['page_title'] = 'Edit Sales';

        // Get all sales companies
        $data['sales_contact'] = $contact = $this->Sales_Model->getAllSalesContacts(null, $id);

        // Get all sales companies
        $data['sales_companies'] = $sales_companies = $this->Companies_Model->getAllSalesCompanies();

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
        $status = $_GET['status'];

        //Get user details
        $data = $this->Sales_Model->getAllSalesContacts(null, $id);

        //Get Company Id 
        $company_details = $this->Sales_Model->getCompanyByID($data->company);

        //Get Enquiry 
        $enquires = $this->Enquiry_model->getEnquiryByContactId($data->id);

        if($status == 1)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry))
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 2)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry))
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 3)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry) || empty($enquires->enquiry) || empty($data->manufacturers))
            {
                echo 0;
            }else{
                echo 1;
            }
        }else if($status == 4)
        {
            if(empty($data->company) || empty($data->fname) || empty($data->lname) || empty($data->personal_info) || empty($company_details->industry) || empty($enquires->enquiry) || empty($data->manufacturers))
            {
                echo 0;
            }else{
                echo 1;
            }
        }
    }

    // Update Sales Status by AJAX
    public function updateSalesStatus()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
       
        //Get user details
        $data = $this->Sales_Model->updateStatus($id, $status);
        echo 1;
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