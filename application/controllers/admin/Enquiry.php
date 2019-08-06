<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      check_login_user();
      $this->load->model('common_model');
      $this->load->model('login_model');
   }
   
   public function index(){
      $data = array();
      $data['page_title'] = 'enquiry';
      $this->load->view('admin/layout/header', $data);
      $data['main_content'] = $this->load->view('admin/enquiry/add', $data, TRUE);
      $this->load->view('admin/enquiry/add', $data);
      $this->load->view('admin/layout/footer', $data);
   }
   
   
   public function add()
   {  
     
      if ($_POST) {

         
        $_POST['enquiry']['created_at'] = date('Y-m-d H:i:s');

        if(isset($_POST['page']) && $_POST['page'] == "frontend"){
            $_POST['enquiry']['is_frontend'] = 1;
        }

        $reference_number = 'REQ-'.date('ymd')."-";
        
        $ref_number = $this->common_model->getLastRefNo();

        if(!empty($ref_number->ref_number))
        {
            $temp = explode("-",$ref_number->ref_number);
            $date = date('ymd');
            if($date == $temp[1])
            {
                $reference_number = $reference_number.(++$temp[2]);
            }else{
                $reference_number = $reference_number.'1';
            }

        }else{
          $reference_number = $reference_number.'1';
        }

        $_POST['enquiry']['ref_number'] = $reference_number;

        $save=$_POST['enquiry']; 
        
        $save['company_name_front']=$this->common_model->getcompanyname($id = $_POST['enquiry']['company_id'])->company_name;
       
        $save['industry_name']=$this->common_model->getindustryname($id = $_POST['enquiry']['industry_id'])->industry;
       
        // $data['enquiry'] = $_POST['enquiry'];
         
        $enq_id = $this->common_model->insert($save, 'enquiry');
         
        if(!empty($enq_id)){
            
            $qty = $_POST['qty'];

            foreach ($qty as $q => $qt) {
               $qt['enquiry_id'] = $enq_id;
               $qt['created_at'] = current_datetime();
               $data['qty'] = $qt;
               $this->common_model->insert($data['qty'], 'enquiry_qty');
            }

            $this->session->set_flashdata('msg', 'Enquiry Added Successfully');
            if(isset($_POST['page']) && $_POST['page'] == "frontend"){
               redirect(base_url('home'));       
            }else{

               redirect(base_url('admin/enquiry/all_enquiry_list'));       
            }
            exit;

         }
      }
      
      // $data['reg_status']=$this->Admin_model->get_table_condition('enquiry','email',$_POST['email']);
      
   }


    // sort by enquiry
    public function sort_by_enquiry(){

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
   

   public function save()
   {  
      if ($_POST) {

         $_POST['enquiry']['created_at'] = current_datetime();
         if(isset($_POST['page']) && $_POST['page'] == "frontend"){
               $_POST['enquiry']['is_frontend'] = 1;
          }
         $data['enquiry'] = $_POST['enquiry'];
         
         $enq_id = $this->common_model->insert($data['enquiry'], 'enquiry');

         if(!empty($enq_id)){
            
            $qty = $_POST['qty'];

            foreach ($qty as $q => $qt) {
               $qt['enquiry_id'] = $enq_id;
               $qt['created_at'] = current_datetime();
               $data['qty'] = $qt;
               $this->common_model->insert($data['qty'], 'enquiry_qty');
            }

            $this->session->set_flashdata('msg', 'Enquiry Added Successfully');

            if(isset($_POST['page']) && $_POST['page'] == "frontend"){
               redirect($_SERVER['HTTP_REFERER']);       
            }else{
               redirect(base_url('admin/enquiry/all_enquiry_list'));       
            }
            exit;

         }
      }
      
      // $data['reg_status']=$this->Admin_model->get_table_condition('enquiry','email',$_POST['email']);
      
   }
   
   public function ajax_get_supplier_details($id="")
   {   
      $id=$id;
      $resdata = $result['data']=$this->common_model->get_totalsupplier_contact($id);
      foreach ($resdata as $row) {
         echo '<option value="' . $row['fname'] . '">' . $row['fname'] . '</option>';
      }
      
   }
   
   
   public function update()
   {
      if ($_POST) {
         $id = $_POST['enquiry']['id'];
         $data['enquiry'] = $_POST['enquiry'];

         $this->common_model->update($data['enquiry'], $id,'enquiry');

         // echo "<pre>";
         // print_r($_POST);exit;
         if(!empty($id)){
            
            $qty = $_POST['qty'];

            foreach ($qty as $q => $qt) {

               if(isset($qt['id']) && !empty($qt['id'])){
                  $data['qty'] = $qt;
                  $enq_id = $this->common_model->update($data['qty'], $qt['id'], 'enquiry_qty');
               }else{
                  $qt['enquiry_id'] = $id;
                  $qt['created_at'] = current_datetime();
                  $data['qty'] = $qt;
                  $this->common_model->insert($data['qty'], 'enquiry_qty');
               }
               
            }

            $this->session->set_flashdata('msg', 'Employee Added Successfully');
            redirect(base_url('admin/enquiry/all_enquiry_list'));       
            exit;

         }
      }
      
   }

   public function edit($id = ""){

      $result['data'] = $this->common_model->getEnquiryById($id);
      echo  $this->load->view('admin/enquiry/edit', $result,true);

   }

    public function prospectstatus($id)
    {
    $data = array(
                 'suspus' => 1,
            );

         $this->common_model->update($data, $id,'enquiry');
        redirect(base_url('admin/enquiry/all_enquiry_list'));
    }

    public function suspectstatus($id)
    {
    $data = array(
                 'suspus' => 0,
            );

         $this->common_model->update($data, $id,'enquiry');
        redirect(base_url('admin/enquiry/prospects'));
    }

     public function partnerstatus($id)
    {
    $data = array(
                 'suspus' => 2,
            );

         $this->common_model->update($data, $id,'enquiry');
        redirect(base_url('admin/enquiry/all_enquiry_list'));
    }

     public function all_enquiry_list()
   {   
      $data = array();

      $table = "enquiry";
      $sort = "DESC";
      $column = "id";
      $status='waiting';

      if(isset($_GET['table'])){
         $table = $_GET['table'];
      }
      if(isset($_GET['table'])){
         $sort = $_GET['sort'];
      }
      if(isset($_GET['table'])){
         $column = $_GET['column'];
      }
      if(isset($_GET['status'])){
         $column = $_GET['status'];
      }

      $data['data']=$this->common_model->get_all_inquery_unquilified($table,$column,$sort,$status);

      $data['customer_records']=$this->common_model->get_all_records('enquiry');
      
      $data['unqailifid'] = $this->common_model->unqailifidInquiry();
      $data['quoted'] = $this->common_model->quotedInquiry();
      $data['partnere'] = $this->common_model->partnere();

      $data['count'] = count($data['data']);

      
      $this->load->view('admin/layout/header');
      $this->load->view('admin/enquiry/enquiry', $data);
      $this->load->view('admin/layout/footer');

   }


     public function prospects(){
        $data = array();
        $table = "enquiry";
        $sort = "DESC";
        $column = "id";
        $status='confirm';
        if(isset($_GET['table'])){
           $table = $_GET['table'];
        }
        if(isset($_GET['table'])){
           $sort = $_GET['sort'];
        }
        if(isset($_GET['table'])){
           $column = $_GET['column'];
        }
        if(isset($_GET['status'])){
           $column = $_GET['status'];
        }
        $data['data']=$this->common_model->get_all_inquery_unquilified($table,$column,$sort,$status);
        $data['customer_records']=$this->common_model->get_all_records('enquiry');
        $data['unqailifid'] = $this->common_model->unqailifidInquiry();
        $data['quoted'] = $this->common_model->quotedInquiry();
        $data['customer_records']=$this->common_model->get_all_records('enquiry');
        $data['partnere'] = $this->common_model->partnere();
        $data['page_title'] = 'Prospects';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/enquiry/prospects', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function partner(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_records('enquiry');
        $data['suspest'] = $this->common_model->order();
        $data['prospect'] = $this->common_model->quoted();
        $data['partnere'] = $this->common_model->partnere();
        $data['data']=$this->common_model->get_all_records('enquiry');
        $data['page_title'] = 'partner';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/enquiry/partner', $data);
        $this->load->view('admin/layout/footer', $data);

    }
   
   
   public function delete($id)
   {
      $this->common_model->delete($id,'enquiry'); 
      $this->session->set_flashdata('msg', 'enquiry deleted Successfully');
       redirect(base_url('admin/enquiry/all_enquiry_list'));
   }

   public function getIndustry(){

      $id = $_GET['id'];   
      $Companyhtml = "";
      $Contacthtml = "";
      $response = array();

      if(isset($_GET['type']) && $_GET['type'] == "contact"){

         $contactInfo = $this->common_model->getContactInfoById($id);

         $response['email'] = $contactInfo->email;
         $response['number'] = $contactInfo->mobile;

      }elseif(isset($_GET['type']) && $_GET['type'] == "company"){

         $company = $this->common_model->getCompanyById($id);
         $contacts = $this->common_model->getContactById($id);   

         $Companyhtml .= "<option value=''>Select Manufacturer</option>";
         $Companyhtml .= "<option value='".$company->id."' selected>".$company->industry_sector." </option>";
         $Contacthtml .= "<option value=''>Select Contact</option>";

         foreach ($contacts as $key => $contact) {
            $Contacthtml .= "<option value='".$contact['id']."'>".$contact['fname']. " " .$contact['fname']." </option>";
         }

         $response['company'] = $Companyhtml;
         $response['contact'] = $Contacthtml;
      }
      
      echo json_encode($response);
      exit;

   }


   public function quoted(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_records('enquiry');
        $data['order'] = $this->common_model->order();
        $data['quoted'] = $this->common_model->quoted();
        $data['page_title'] = 'Quoted';
         $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/enquiry/quoted', $data);
        $this->load->view('admin/layout/footer', $data);
    }

    public function order(){
        $data = array();
        $data['customer_records']=$this->common_model->get_all_records('enquiry');
        $data['order'] = $this->common_model->order();
        $data['quoted'] = $this->common_model->quoted();
        $data['page_title'] = 'Order';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/enquiry/order', $data);
        $this->load->view('admin/layout/footer', $data);

    }
   
}