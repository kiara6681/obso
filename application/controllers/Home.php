<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      $this->load->model('common_model');
      //$this->load->model('login_model');
      $this->load->database();
   }
   
   public function index(){
      $data = array();
      $data['manufacturer']=$this->common_model->get_all_manufacturer();
       $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
       
      $data['page_title'] = 'Home';
      $this->load->view('home/header', $data);
      $this->load->view('home/index', $data);
      $this->load->view('home/footer', $data);
     
   }

   public function about(){
      $data = array();
      $data['manufacturer']=$this->common_model->get_all_manufacturer();
       $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
       $data['about']=$this->common_model->get_about();
      $data['page_title'] = 'About';
      $this->load->view('home/header', $data);
      $this->load->view('home/about', $data);
      $this->load->view('home/footer', $data);
      
   }

   public function contact(){
      $data = array();
      $data['manufacturer']=$this->common_model->get_all_manufacturer();
       $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
       $data['contact']=$this->common_model->get_contact();
      $data['page_title'] = 'Contact';
      $this->load->view('home/header', $data);
      $this->load->view('home/contact', $data);
      $this->load->view('home/footer', $data);
    
   }

   public function product($name = ""){
      
      $data = array();
      $data['manufacturer']=$this->common_model->get_all_manufacturer();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $data['manfecture'] = $name;
      if(!empty($name)){
         $newName = str_replace("_", " ", $name);
         // echo $newName;exit;
         $data['product']=$this->common_model->get_all_product_by_manufacture($newName);
      }else{
         $data['product']=$this->common_model->get_all_product();
      }

      // echo "<pre>";
      // print_r($data['product']);exit;
      
      $data['page_title'] = 'Contact';
      $this->load->view('home/header', $data);
      $this->load->view('home/product', $data);
      $this->load->view('home/footer', $data);
    
   }

   public function loadMoreProduct(){
      $page =  $_GET['page'];

      if(isset($_GET['q']) && !empty($_GET['q'])){
         $newName = str_replace("_", " ", $_GET['q']);
         $product = $this->common_model->get_all_product_by_manufacture_load_more($page,$newName);
      }else{
         $product = $this->common_model->get_all_product_load_more($page,'product');
      }
      
      // echo "<pre>";
      // print_r($product);exit;
      $content = "";
      foreach ($product as $products){
         
         $content .= '<div class="main_list_view_product" >';
         $content .= '<div class="product_contant">';
         $content .='<p>Produst Name : <strong>  '.$products->description.'</strong></p>';
         $content .='<p class="text-sm-sm">Part Number :<strong> '.$products->part_number.' </strong></p>';
         $content .='<p>Manufacturers :<strong>'. $products->manufacturer_name.'</strong></p>';
         $content .='<p class="text-sm-sm">Condition : <strong>USED</strong></p>';
         $content .='</div>';
         $content .=   '<div class="product_enquiry_abilitys">';
         $content .=      '<a href="#" class="pro_list_enquiry_button"> Enquiry </a>';
         $content .=      '<p>Abailablity :<span> In Stock</span></p>';
         $content .=   '</div>';
         $content .='</div>';

      }
      if(empty($content)){
         $content = "No More Records";
         echo $content;exit;
      }else{
         echo $content;exit;
      }
      
      exit;
   }

   public function productsearch($id=""){
      $data = array();
      $data['manufacturer']=$this->common_model->get_all_manufacturer();
       $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
       $data['product']=$this->common_model->get_single_product_info($id);
      $data['page_title'] = 'Contact';
      $this->load->view('home/header', $data);
      $this->load->view('home/product_search', $data);
      $this->load->view('home/footer', $data);
    
   }

   public function ajaxpartnumber($id=""){
      $id=$id;
    $resdata = $result['data'] = $this->common_model->get_partnumber($id);
    foreach ($resdata as $row) {
   ?>
      <a href="<?php echo base_url();?>home/manufacturer/<?php echo $row['part_number']; ?>/<?php echo $row['manufacturer_name']; ?>"> <span> <?php echo $row['part_number']; ?></a><span> (<?php echo $row['manufacturer_name']; ?>)</span><br/>
   <?php
    }
    
   }
   
   public function manufacturer($id="", $iid=""){
      $data = array();

      if($this->input->get('search_text'))
      {
        $data['part_number'] = $this->input->get('search_text');
      }else{
        $data['id']=$id;
        $data['iid']=$iid;
        $data['product']=$this->common_model->get_single_product_infoone($id);
      }

      $data['manufacturer']=$this->common_model->get_all_manufacturer();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $data['page_title'] = 'Contact';

      $this->load->view('home/header', $data);
      $this->load->view('home/manufacturer', $data);
      $this->load->view('home/footer', $data);
    
   }

  
  public function terms_and_conditions(){
      $data = array();
      $data['page_title'] = 'Terms and Conditions';
      $data['data']=$this->common_model->get_terms_and_conditions();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/terms_and_conditions', $data);
      $this->load->view('home/footer', $data);
    
   }

   public function privacy_policy(){
      $data = array();
      $data['page_title'] = 'Privacy Policy';
      $data['data']=$this->common_model->get_privacy_policy();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/privacy_policy', $data);
      $this->load->view('home/footer', $data);
    
   }

   public function return_policy(){
      $data = array();
      $data['page_title'] = 'Return Policy';
      $data['data']=$this->common_model->get_return_policy();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/return_policy', $data);
      $this->load->view('home/footer', $data);
    
   }  

   public function payment(){
      $data = array();
      $data['page_title'] = 'Return Policy';
      $data['data']=$this->common_model->get_return_policy();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/payment', $data);
      $this->load->view('home/footer', $data);
    
   }  

   public function shipping(){
      $data = array();
      $data['page_title'] = 'Return Policy';
      $data['data']=$this->common_model->get_return_policy();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/shipping', $data);
      $this->load->view('home/footer', $data);
    
   } 

   public function warranty(){
      $data = array();
      $data['page_title'] = 'Return Policy';
      $data['data']=$this->common_model->get_return_policy();
      $data['allmanufacturer']=$this->common_model->get_all_manufacturer();
      $this->load->view('home/header', $data);
      $this->load->view('home/warranty', $data);
      $this->load->view('home/footer', $data);
    
   }   
   public function save()
   {  
      if ($_POST) {

        //$_POST['enquiry']['created_at'] = current_datetime();
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

        $data['enquiry'] = $_POST['enquiry'];

        // get country information
        $country_info = $this->common_model->getCountryInfo($_POST['enquiry']['country_id']);

        // echo '<pre>';
        // print_r($country_info);
        // print_r($_POST['enquiry']);
        // print_r($_POST['qty']);
        // exit;

        $enq_id = $this->common_model->insert($data['enquiry'], 'enquiry');

        if(!empty($enq_id)){
            
            $qty = $_POST['qty'];

            foreach ($qty as $q => $qt) {
               $qt['enquiry_id'] = $enq_id;
               $qt['created_at'] = current_datetime();
               $data['qty'] = $qt;
               $this->common_model->insert($data['qty'], 'enquiry_qty');
            }

            $name = $_POST['enquiry']['full_name'];
            $email = $_POST['enquiry']['email'];
            $phone = $_POST['enquiry']['number'];
            $company = $_POST['enquiry']['company_name_front'];
            $part_number = $data['qty']['part'];

            //Send Mail
            $this->load->library('email');

            $msg = '<html>
                        <body>
                            <h3>Dear '.$name.'</h3>
                            <p>Thank you for your enquiry. We will get back you with your personal price and delivery time soon.<br>
                            <p>If we have any further questions we will call to discuss. Your Quote Request reference is: '.$reference_number.'.<br>
                            Thank You.</p>

                            <h4>OBSO Team</h4>
                        </body>
                    </html>';

            $this->email->from('info@obsoltd.com', 'OBSO Global Parts');
            $this->email->set_mailtype("html");
            $this->email->to($email);
            $this->email->subject('OBSO Enquiry ('.$reference_number.')');
            $this->email->message($msg);
            $this->email->send();


            //Get Admin email
            $data = $this->common_model->get_single_home(1);
            $admin_msg = '<html>
                        <body>
                            <h3>Dear Admin</h3>
                            <p>New Part Enquiry generated by '.$name.'<br>
                            <p>Part Number is '.$part_number.'.<br>
                            <p>Company Name is '.$company.'.<br>
                            <p>Contact Number is '.$phone.'.<br>
                            <p>Email is '.$email.'.<br>
                            Thank You.</p>
                            <h4>OBSO Admin</h4>
                        </body>
                    </html>';
            $this->email->from('info@obsoltd.com', 'OBSO Global Parts');
            $this->email->to($data[0]['admin_email']);
            $this->email->subject('OBSO Enquiry ('.$reference_number.')');
            $this->email->message($admin_msg);
            $this->email->send();

            if(isset($_POST['notification_under_button'])){

            	$this->session->set_flashdata('under_button', 'Thank you! Your enquiry has been successfully sent to us here at Obso. We will get back to you shortly, With your personal pricing and delivery options.');	
            }else{

            	$this->session->set_flashdata('msg', 'Thank you! Your enquiry has been successfully sent to us here at Obso. We will get back to you shortly, With your personal pricing and delivery options.');
            }

            if(isset($_POST['page']) && $_POST['page'] == "frontend"){
               redirect($_SERVER['HTTP_REFERER']);       
            }else{
               redirect(base_url('admin/enquiry/all_enquiry_list'));       
            }
            exit;

         }
      }
      
   	}

   	public function contact_us()
   	{
   		if ($_POST) {

			$full_name = $_POST['full_name'];
			$phone     = $_POST['phone'];
			$email     = $_POST['email'];
			$company   = $_POST['company'];
			$country   = $_POST['country'];

			//Send Mail
            $this->load->library('email');
            $data = $this->common_model->get_single_home(1);

            $msg = '<html>
                        <body>
                            <h3>Dear Admin</h3>
                            <p>New Contact Enquiry<br></p>
                            <p>Name : '.$name.'<br></p>
                            <p>Phone : '.$phone.'<br></p>
                            <p>Email : '.$email.'<br></p>
                            <p>Company : '.$company.'<br></p>
                            <p>Country : '.$country.'<br></p>
                            <p>Thank You.</p>
                            <h4>OBSO Team</h4>
                        </body>
                    </html>';

            $this->email->from('info@obsoltd.com', 'OBSO Global Parts');
            $this->email->set_mailtype("html");
            $this->email->to($data[0]['admin_email']);
            $this->email->subject('OBSO Contact Enquiry');
            $this->email->message($msg);
            $this->email->send();

			$this->session->set_flashdata('success', 'Thanks for contacting us here at Obso. We will review your request and get back to you soon.');

			redirect($_SERVER['HTTP_REFERER']);
   		}
   	}   
     
}