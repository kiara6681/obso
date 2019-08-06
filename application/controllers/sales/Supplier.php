<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supplier extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
        
    }

    

    public function delete_supplier_list($id)
    {
        $this->common_model->delete($id,'supplier_records'); 
        $this->session->set_flashdata('msg', 'supplier Data Deleted Successfully');
        redirect(base_url('sales/supplier/supplier_list'));
    }

    public function prospects(){
        $data = array();
        $data['supplier_records']=$this->common_model->get_all_supplier_records();
        $data['suspest'] = $this->common_model->suspectsup();
        $data['prospect'] = $this->common_model->prospectsup();
        $data['partner'] = $this->common_model->partnersup();
        $data['page_title'] = 'Prospects';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/prospects', $data);
        $this->load->view('sales/layout/footer', $data);
    }

    public function partner(){
        $data = array();
        $data['supplier_records']=$this->common_model->get_all_supplier_records();
        $data['suspest'] = $this->common_model->suspectsup();
        $data['prospect'] = $this->common_model->prospectsup();
        $data['partner'] = $this->common_model->partnersup();
        $data['page_title'] = 'Partner Supplier';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/partner', $data);
        $this->load->view('sales/layout/footer', $data);

    }
    


    /*End supplier List*/ 

    /*start supplier records*/

    public function supplier_records(){


        $data = array();
        $data['page_title'] = 'Supplier';
        $data['supplier_records']=$this->common_model->get_all_supplier_records();
        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();

            unset($_SESSION['session_id']);
            unset($_SESSION['company_name']);
            unset($_SESSION['trader_name']);
            unset($_SESSION['about']);
            unset($_SESSION['industry_sector']);
            unset($_SESSION['sector_free_tax']);
            unset($_SESSION['url']);
            unset($_SESSION['generic_number']);
            unset($_SESSION['estimated_frequency']);
            unset($_SESSION['standard_delivery']);
            unset($_SESSION['product_condition']);
            unset($_SESSION['ordercutoff']);
            unset($_SESSION['timezone']);
            unset($_SESSION['other_manufacturer']);
            unset($_SESSION['ordercutoffdeliveryinfo']);
            unset($_SESSION['payment_terms']);
            unset($_SESSION['payment_ref']);
            unset($_SESSION['discount_pricing']);
            unset($_SESSION['manufacturer_use']);
            unset($_SESSION['location']);
            unset($_SESSION['street_address']);
            unset($_SESSION['city']);
            unset($_SESSION['state']);
            unset($_SESSION['zip']);
            unset($_SESSION['country']);
            unset($_SESSION['address_type']);




        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/supplier_records', $data);
        $this->load->view('sales/layout/footer', $data);
    }

     public function add_supplier_records()
    {       
        // echo "<pre>";
        // print_r($_POST);exit;

        if ($_POST) {

            $programming = $_POST['programming']; 

            $allppg = implode(' ,', array_values($programming));
            
            $data = array(
                'session_id' => $_POST['session_id'],
                'company_name' => $_POST['company_name'],
                'trader_name' => $_POST['trader_name'],
                'about' => $_POST['about'],
                'industry_sector' => $_POST['industry_sector'],
                'sector_free_tax' => $_POST['sector_free_tax'],
                'url' => $_POST['url'],
                'generic_number' => $_POST['generic_number'],
                'estimated_frequency' => $_POST['estimated_frequency'],
                'standard_delivery' => $_POST['standard_delivery'],
                'product_condition' => $_POST['product_condition'],
                'ordercutoff' => $_POST['ordercutoff'],
                'timezone' => $_POST['timezone'],
                'other_manufacturer' => $_POST['other_manufacturer'],
                
                'ordercutoffdeliveryinfo' => $_POST['ordercutoffdeliveryinfo'],
                'payment_terms' => $_POST['payment_terms'],
                'payment_ref' => $_POST['payment_ref'],
                'discount_pricing' => $_POST['discount_pricing'],
                'manufacturer_use' => $allppg,
                
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


             $this->common_model->insert($data, 'supplier_records');
            $this->common_model->insert($datasds, 'supplier_address');
            $this->load->view('sales/supplier/supplier_records', $this->session->all_userdata());
            $this->load->view('sales/supplier/edit_supplier_records', $data);
           redirect(base_url('sales/supplier/supplier_contact')); 
        }
    }


     public function supplier_list(){

        $data = array();
        $data['supplier_records']=$this->common_model->get_all_supplier_records();
        $data['suspest'] = $this->common_model->suspectsup();
        $data['prospect'] = $this->common_model->prospectsup();
        $data['partner'] = $this->common_model->partnersup();

        $data['page_title'] = 'Supplier List';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_list', $data);
        $this->load->view('sales/layout/footer', $data);
    }

  


     public function update_supplier_records($id="")
    {

        if ($_POST) {

            $supplier_records_id = $_POST['supplier_records_id'];

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
                'manufacturer_use' => $allppg,
                'other_manufacturer_used' => $_POST['other_manufacturer_used'],
                'psl_information' => $_POST['psl_information'],
                'competitor_info' => $_POST['competitor_info'],
                'discount_pricing_info' => $_POST['discount_pricing_info'],
                'location' => $_POST['location'],
                'street_address' => $_POST['street_address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'country' => $_POST['country'],
                'address_type' => $_POST['address_type']
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $supplier_records_id,'supplier_records');
        $this->session->set_flashdata('msg', 'supplier Records Updated Successfully');
        redirect(base_url('sales/supplier/supplier_list'));
        }
        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();
        $data['data'] = $this->common_model->get_single_supplier_records_info($id);
        $data['page_title'] = 'Edit supplier Records';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_records', $data);
        $this->load->view('sales/layout/footer', $data);
    }

    public function edit_supplier_records($id="")
    {
        if ($_POST) {

            $sessionid = $_POST['sessionid'];

            $programming = $_POST['programming']; 

            $allppg = implode(' ,', array_values($programming));

            $data = array(
                'company_name' => $_POST['company_name'],
                'trader_name' => $_POST['trader_name'],
                'about' => $_POST['about'],
                'industry_sector' => $_POST['industry_sector'],
                'sector_free_tax' => $_POST['sector_free_tax'],
                'url' => $_POST['url'],
                'generic_number' => $_POST['generic_number'],
                'estimated_frequency' => $_POST['estimated_frequency'],
                'ordercutoff'=>$_POST['ordercutoff'],
                'timezone'=>$_POST['timezone'],
                'ordercutoffdeliveryinfo'=>$_POST['ordercutoffdeliveryinfo'],
                'estimated_spend'=>$_POST['estimated_frequency'],
                'payment_terms'=>$_POST['payment_terms'],
                'payment_ref'=>$_POST['payment_ref'],
                'discount_pricing'=>$_POST['discount_pricing'],
                'standard_delivery'=>$_POST['standard_delivery'],
                'product_condition'=>$_POST['product_condition'],
                'programming'=>$allppg,
                'other_manufacturer'=>$_POST['other_manufacturer'],
            );

             $datasds = array(
                
                'location' => $_POST['location'],
                'street_address' => $_POST['street_address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'country' => $_POST['country'],
                'address_type' => $_POST['address_type'],
                'creation_date' => current_datetime()
            );

        $data = $this->security->xss_clean($data);
        $datasds = $this->security->xss_clean($datasds);
        if (!empty($data)) {
        $this->common_model->updatesuprecord($data, $sessionid,'supplier_records');
        $this->common_model->updatesupaddress($datasds, $sessionid,'supplier_address');
        $this->session->set_flashdata('msg', 'Supplier Records Updated Successfully');
        }
        redirect(base_url('sales/supplier/supplier_list'));
        }

        
        
        
        $data = array();
        $data['supplier_records']=$this->common_model->get_single_supplier_contact_info($id);
        $data['supplier_address']=$this->common_model->get_single_supplier_address($id);

        $data['industry']=$this->common_model->get_all_industry();
        $data['manufacturer']=$this->common_model->get_all_manufacturer();
       // $data['page_title']='Edit supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/layout/footer', $data);
        $this->load->view('sales/supplier/edit_supplier_records', $data); 
        
    }

    

    public function update_supplier_contactss($id="")
    {

        if ($_POST) {

            $supplier_contact_id = $_POST['supplier_contact_id'];
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
        $this->common_model->update($data, $supplier_contact_id,'supplier_contact');
        $this->session->set_flashdata('msg', 'supplier Contact Updated Successfully');
        redirect(base_url('sales/supplier/edit_supplier_contacts/'.$sessionid));
        }


        //$data['data']=$this->common_model->get_all_supplier_contact();
        $data['data'] = $this->common_model->get_single_supplier_contact_info1($id);
        $data['page_title'] = 'Edit supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_contact', $data);
        $this->load->view('sales/layout/footer', $data);
    }


     public function update_supplier_contacts($id="")
    {

        if ($_POST) {

            $supplier_contact_id = $_POST['supplier_contact_id'];
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
                'phone' => $_POST['phone'],
                'key_personal_info' => $_POST['key_personal_info'],
                'mkt_preferance' => $_POST['mkt_preferance'],
                'contact_status' => $_POST['contact_status'],
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $supplier_contact_id,'supplier_contact');
        $this->session->set_flashdata('msg', 'supplier Contact Updated Successfully');
        redirect(base_url('sales/supplier/edit_supplier_contacts/'.$sessionid));
        }


        //$data['data']=$this->common_model->get_all_customer_contact();
        $data['data'] = $this->common_model->get_single_supplier_contact_info1($id);
        $data['page_title'] = 'Edit Supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_contactss', $data);
        $this->load->view('sales/layout/footer', $data);
    }


    public function edit_supplier_contacts($id="")
    {
        if ($_POST) {

            $supplier_contact_id = $_POST['supplier_contact_id'];

            for($x = 0; $x < sizeof($supplier_contact_id); $x++){

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
        $this->common_model->update($data, $supplier_contact_id[$x],'supplier_contact');
        }
        $this->session->set_flashdata('msg', 'supplier Contact Updated Successfully');
        redirect(base_url('sales/supplier/supplier_list'));
        }


        $data = array();
        $data['supplier_record'] = $this->common_model->get_single_supplierrecord($id);
        $data['datas'] = $this->common_model->get_suppliercontact($id);
        $data['page_title'] = 'Edit Supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_contacts', $data); 
        $this->load->view('sales/layout/footer', $data);
    }

     /*End supplier records*/

    /*Start supplier Contact*/

     public function supplier_contact(){

        $data = array();
        $data['page_title'] = 'Supplier Contct';
        //$result['data']=$this->common_model->get_all_customer_contact();

        $result['data']=$this->common_model->get_all_supplier_onlycontact();

        $this->load->view('sales/layout/header', $result);
        $this->load->view('sales/supplier/supplier_header', $data);

        $this->load->view('sales/supplier/supplier_contact', $result);
        $this->load->view('sales/layout/footer', $result);
    }

   

    public function add_supplier_contact()
    {   
         
         if ($_POST) {

            $sessionid = $_SESSION['session_id'];

            $result=$this->common_model->get_contact_recordinfosupplier($sessionid);

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
            $this->common_model->insert($data, 'supplier_contact');
            $this->session->set_flashdata('msg', 'User added Successfully');
            
            //$this->session->unset_userdata('session_id');

           redirect(base_url('sales/supplier/supplier_contact')); 
        }
    }

    public function update_supplier_contact($id="")
    {

        if ($_POST) {

            $supplier_contact_id = $_POST['supplier_contact_id'];

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
        $this->common_model->update($data, $supplier_contact_id,'supplier_contact');
        $this->session->set_flashdata('msg', 'supplier Contact Updated Successfully');
        redirect(base_url('sales/supplier/supplier_contact'));
        }


        //$data['data']=$this->common_model->get_all_supplier_contact();
        $data['data'] = $this->common_model->get_single_supplier_contact_infoone($id);
        $data['page_title'] = 'Edit supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_contact', $data);
        $this->load->view('sales/layout/footer', $data);
    }




    public function update_supplier_contactone($id="")
    {

        if ($_POST) {

            $supplier_contact_id = $_POST['supplier_contact_id'];

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
        $this->common_model->update($data, $supplier_contact_id,'supplier_contact');
        $this->session->set_flashdata('msg', 'supplier Contact Updated Successfully');
        redirect(base_url('sales/supplier/supplier_contact'));
        }


        //$data['data']=$this->common_model->get_all_supplier_contact();
        $data['data'] = $this->common_model->get_single_supplier_contact_info($id);
        $data['page_title'] = 'Edit supplier Contact';
        $this->load->view('sales/layout/header', $data);
        $this->load->view('sales/supplier/supplier_header', $data);
        $this->load->view('sales/supplier/edit_supplier_contactone', $data);
        $this->load->view('sales/layout/footer', $data);
    }

    public function delete($id)
    {
        $this->common_model->delete($id,'supplier_contact'); 
        $this->session->set_flashdata('msg', 'Manufacturer deleted Successfully');
        redirect(base_url('sales/supplier/supplier_contact'));
    }

    

    public function partnerstatus($id)
    {
    $data = array(
                 'suspus' => 2,
            );

         $this->common_model->update($data, $id,'supplier_records');
        redirect(base_url('sales/supplier/prospects'));
    }

    public function prospectstatus($id)
    {
    $data = array(
                 'suspus' => 1,
            );

         $this->common_model->update($data, $id,'supplier_records');
        redirect(base_url('sales/supplier/supplier_list'));
    }

    public function suspectstatus($id)
    {
    $data = array(
                 'suspus' => 0,
            );

         $this->common_model->update($data, $id,'supplier_records');
        redirect(base_url('sales/supplier/prospects'));
    }


      public function markstatus($id)
    {
       $iid = $this->common_model->getsupplier_contact($id,'supplier_contact'); 
       $markstatus = $iid->mark_status;

       if($markstatus == "0"){
            $mstatus = 1;
       }else{
            $mstatus = 0;
       }
    $data = array(
                 'mark_status' => $mstatus,
            );

         $this->common_model->update($data, $id,'supplier_contact');
        redirect(base_url('sales/supplier/supplier_contact'));
    }

     public function markstatusone($id)
    {
       $iiiid = $this->common_model->getsupplier_record($id,'supplier_records'); 
       $markstatusone = $iiiid->mark_status;

       if($markstatusone == "0"){
            $mstatuson = 1;
       }else{
            $mstatuson = 0;
       }
    $data = array(
                 'mark_status' => $mstatuson,
            );

         $this->common_model->update($data, $id,'supplier_records');
        redirect(base_url('sales/supplier/supplier_list'));
    }


     public function markstatustwo($id)
    {
       $iiiid = $this->common_model->getsupplier_record($id,'supplier_records'); 
       $markstatusone = $iiiid->mark_status;

       if($markstatusone == "0"){
            $mstatuson = 1;
       }else{
            $mstatuson = 0;
       }
    $data = array(
                 'mark_status' => $mstatuson,
            );

         $this->common_model->update($data, $id,'supplier_records');
        redirect(base_url('sales/supplier/prospects'));
    }



    /*End supplier Contact*/

    public function supplier_header(){
        $data = array();
        $data['page_title'] = 'supplier';
        $this->load->view('sales/supplier/supplier_header', $data);
    }

  




}