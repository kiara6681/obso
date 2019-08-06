<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
        $this->load->helper('url');
        $this->load->library('session');

    }
	 
    /*Start Customer List*/ 
    public function customer_list(){
        
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();

        $data['page_title'] = 'Customer List';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/customer_list', $data);
        $this->load->view('sales/layout/footer', $data);
    }

    public function delete_customer_list($id)
    {
        $this->common_model->delete($id,'customer_records'); 
        $this->session->set_flashdata('msg', 'Customer Data Deleted Successfully');
        redirect(base_url('sales/sales/customer_list'));
    }

  

    public function prospects(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();
        $data['page_title'] = 'Prospects';
         $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/prospects', $data);
        $this->load->view('sales/layout/footer', $data);
    }

    public function account(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_customer_records();
        $data['suspest'] = $this->common_model->suspect();
        $data['prospect'] = $this->common_model->prospect();
        $data['partner'] = $this->common_model->partner();
        $data['page_title'] = 'Account';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/account', $data);
        $this->load->view('sales/layout/footer', $data);

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

        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/customer_records', $data);
        $this->load->view('sales/layout/footer', $data);
    }

     public function add_customer_records()
    {   

        if ($_POST) {

            $programming = $_POST['programming']; 

            $allppg = implode(' ,', array_values($programming));

                        
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
           //       $this->load->view('sales/sales/customer_records', $this->session->all_userdata());
           //  $this->load->view('sales/sales/edit_customer_records', $data);
           // redirect(base_url('sales/sales/customer_contact')); 

           //  }else{
            $this->common_model->insert($data, 'customer_records');
            $this->common_model->insert($datasds, 'customer_address');
            $this->load->view('sales/sales/customer_records', $this->session->all_userdata());
            $this->load->view('sales/sales/edit_customer_records', $data);
           redirect(base_url('sales/sales/customer_contact')); 
                // }
        }
    }

    public function edit_customer_records($id="")
    {
        if ($_POST) {

            $sessionid = $_POST['sessionid'];

             $programming = $_POST['programming']; 

            $allppg = implode(',', array_values($programming));

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
        $data = $this->security->xss_clean($datasds);

        $this->common_model->updatecustrecord($data, $sessionid,'customer_records');
         $this->common_model->updatecustaddress($datasds, $sessionid,'customer_address');
        $this->session->set_flashdata('msg', 'Customer records Updated Successfully');
        redirect(base_url('sales/sales/customer_list'));
        }


        $data = array();
        $data['customer_record'] = $this->common_model->get_single_customerrecord($id);
        $data['customer_address'] = $this->common_model->get_single_customeraddress($id);

        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();
       
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/edit_customer_records', $data); 
        $this->load->view('sales/layout/footer', $data);
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
        redirect(base_url('sales/sales/customer_list'));
        }


        $data = array();
        $data['customer_record'] = $this->common_model->get_single_customerrecord($id);
        $data['datas'] = $this->common_model->get_customercontact($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/edit_customer_contacts', $data); 
        $this->load->view('sales/layout/footer', $data);
    }


     /*End customer records*/

    /*Start Customer Contact*/
    public function customer_contact(){

        

        $data = array();
        $data['page_title'] = 'Sales';
        //$result['data']=$this->common_model->get_all_customer_contact();

        $result['data']=$this->common_model->get_all_customer_onlycontact();

        $this->load->view('sales/layout/header', $result);
        $this->load->view('sales/sales/sales_header', $data);

        $this->load->view('sales/sales/customer_contact', $result);
        $this->load->view('sales/layout/footer', $result);
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

           redirect(base_url('sales/sales/customer_contact')); 
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
        redirect(base_url('sales/sales/customer_contact'));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/edit_customer_contact', $data);
        $this->load->view('sales/layout/footer', $data);
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
        redirect(base_url('sales/sales/edit_customer_contacts/'.$sessionid));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/edit_customer_contact', $data);
        $this->load->view('sales/layout/footer', $data);
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
        redirect(base_url('sales/sales/edit_customer_contacts/'));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_customer_contact_info($id);
        $data['page_title'] = 'Edit Customer Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/sales/sales_header', $data);
        $this->load->view('sales/sales/edit_customer_contactss', $data);
        $this->load->view('sales/layout/footer', $data);
    }

   
    public function delete($id)
    {
        $this->common_model->delete($id,'customer_contact'); 
        $this->session->set_flashdata('msg', 'Manufacturer deleted Successfully');
        redirect(base_url('sales/sales/customer_contact'));
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
        redirect(base_url('sales/sales/customer_contact'));
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
        redirect(base_url('sales/sales/customer_list'));
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
        redirect(base_url('sales/sales/prospects'));
    }


    public function partnerstatus($id)
    {
    $data = array(
                 'suspus' => 2,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('sales/sales/customer_list'));
    }



    public function prospectstatus($id)
    {
    $data = array(
                 'suspus' => 1,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('sales/sales/customer_list'));
    }

    public function suspectstatus($id)
    {
    $data = array(
                 'suspus' => 0,
            );

         $this->common_model->update($data, $id,'customer_records');
        redirect(base_url('sales/sales/prospects'));
    }



    /*End Customer Contact*/

    public function sales_header(){
        $data = array();
        $data['page_title'] = 'Sales';
        $this->load->view('sales/sales/sales_header', $data);
    }

  




}