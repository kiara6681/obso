<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
   
   public function __construct(){
      parent::__construct();
      check_login_user();
      $this->load->model('common_model');
      $this->load->model('login_model');
   }
   
   public function index(){
      $data = array();
      $data['page_title'] = 'employee';
      $this->load->view('sales/layout/header', $data);
      $this->load->view('sales/layout/footer', $data);
      $data['main_content'] = $this->load->view('sales/employee/add', $data, TRUE);
      $this->load->view('sales/employee/add', $data);
      
   }
   
   
   public function add()
   {  
      if ($_POST) {
         
         $this->load->helper('string'); 

         $empid = random_string('numeric',5);
         $idproof = rand(1000, 99999).$_FILES['idproof']['name'];
         $emp_image = rand(1000, 99999).$_FILES['emp_image']['name'];
         $password = random_string('numeric',10);
         $e_password = md5($password);
         $time = time();
         $verify_string = md5($time);

         $permissions = implode(",",$_POST['permission_access']);

         $data = array(
            'empid' => $empid,
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'gender' => $_POST['gender'],
            'designation' => $_POST['designation'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'phone' => $_POST['phone'],
            'password' => $e_password,
            'country' => $_POST['country'],
            'sales_target' => $_POST['sales_target'],
            'permission_access' => $permissions,
            'idproof' => $idproof,
            'emp_image' =>$emp_image,
            'verify_string' => $verify_string,
            'status' => 0,
            'reg_status' => 1,
            'role' => $_POST['role'],
            'created_at' => current_datetime()
         );
         
         move_uploaded_file($_FILES['idproof']['tmp_name'], 'uploads/' . $idproof);
         move_uploaded_file($_FILES['emp_image']['tmp_name'], 'uploads/' . $emp_image);
         
         $data = $this->security->xss_clean($data);
         $return = $this->common_model->insert($data, 'user');

         if(!empty($return)){

            $this->load->library('email');

            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.achieversaim.com';
            $config['smtp_user'] = 'sunil@achieversaim.com';
            $config['smtp_pass'] = '691026vinod@';
            $config['smtp_port'] = 26;
            $this->email->initialize($config);

            $this->email->set_newline("\r\n");

            $this->email->from('sunil@achieversaim.com', 'Identification');
            $this->email->to($data['email']);
            $this->email->subject('Activate your account');
            

            $message = "Hello ".$data['email']." <br> Here is your password ".$password." for login into <a href='".base_url()."login'> ".base_url()."login </a> <br> Click on the link below to Verify Account<br> <a href='".base_url()."/verify?q=".$data['verify_string']."'> Click Here </a>" ;

            $this->email->message($message);
            $this->email->set_mailtype("html");

            if($this->email->send()){
               $this->session->set_flashdata('msg', 'Employee Added Successfully');
               redirect(base_url('sales/employee/all_employee_list'));       
            }else{
               $this->session->set_flashdata('msg', 'Something Went wrong. Try again letter');
               redirect(base_url('sales/employee/all_employee_list'));       
            }
            exit;

         }
      }
      
      $data['reg_status']=$this->Admin_model->get_table_condition('employee','email',$_POST['email']);
      
      
      if(!empty($data['reg_status']))
      {
         echo 0;
      }         
      else 
      {
         
         $this->load->library('email');
         $config_email['protocol'] = 'mail';
         $config_email['mailtype'] = 'html';
         $this->email->initialize($config_email);
         
         $this->email->from('virendrameshram60@gmail.com', 'VEE-DEV Software');
         $this->email->to($_POST['email']);
         $this->email->subject('We welcome you');
         $this->email->message("Thanks for registration");
         
         if ($this->email->send()) {
            $data['reg_status'] = "Welcome, you logged in.";  
         } else {
            $data['reg_status'] = "SOrry registration fail";  
         }
         
         //$this->load->view('login', $data);
      }
      
   }
   
   
   
   
   public function ajax_get_supplier_details($id="")
   {   
      $id=$id;
      $resdata = $result['data']=$this->common_model->get_totalsupplier_contact($id);
      foreach ($resdata as $row) {
         echo '<option value="' . $row['fname'] . '">' . $row['fname'] . '</option>';
      }
      
   }
   
   
   
   
   
   public function update($id="")
   {
      if ($_POST) {
         
         //$idproof = rand(1000, 99999).$_FILES['idproof']['name'];
         //$emp_image = rand(1000, 99999).$_FILES['emp_image']['name'];
         
         $manfid = $_POST['maineditid'];
         
         if($_FILES['employee_image']['name'] !=""){
            
            $data = array(
               'first_name' => $_POST['first_name'],
               'last_name' => $_POST['last_name'],
               'gender' => $_POST['gender'],
               'designation' => $_POST['designation'],
               'phone' => $_POST['phone'],
               'email' => $_POST['email'],
               'address' => $_POST['address'],
               'country' => $_POST['country'],
               'sales_target' => $_POST['sales_target'],
               'permission_access' => $_POST['permission_access'],
               'idproof' => $idproof,
               'emp_image' =>$emp_image,
               'empid' => $empid,
               'status' => 0,
            );
            
            
            //move_uploaded_file($_FILES['idproof']['tmp_name'], 'uploads/' . $idproof);
            //move_uploaded_file($_FILES['emp_image']['tmp_name'], 'uploads/' . $emp_image);
            
            $data = $this->security->xss_clean($data);
            $this->common_model->update($data, $manfid,'employee');
            redirect(base_url('sales/employee/all_employee_list')); 
            
         }else{
            
            $data = array(
               'first_name' => $_POST['first_name'],
               'last_name' => $_POST['last_name'],
               'gender' => $_POST['gender'],
               'designation' => $_POST['designation'],
               'phone' => $_POST['phone'],
               'email' => $_POST['email'],
               'address' => $_POST['address'],
               'country' => $_POST['country'],
               'sales_target' => $_POST['sales_target'],
               'permission_access' => $_POST['permission_access'],
               'status' => 0,
            );
            
            $data = $this->security->xss_clean($data);
            $this->common_model->update($data, $manfid,'employee');
            redirect(base_url('sales/employee/all_employee_list')); 
            
         }
      }
      
      $edtdata = $data['employee'] = $this->common_model->get_single_employee_info($id);
      echo '<div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Employee</h5>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
      
      <div class="modal-body">'; ?>
      <?php $this->load->helper('form'); ?>
      
      <?php echo form_open(base_url() . 'sales/employee/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
      
      <input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="<?php echo $edtdata->id; ?>"/>
      
      <?php echo '<div class="row">
      <div class="col-md-4">
      <label>First Name:</label>
      <input type="text" name="first_name" value="'.$edtdata->first_name.'"  class="form-control" placeholder="First Name" required/>
      </div>
      
      <div class="col-md-4">
      <label>Last Name:</label>
      <input type="text" name="last_name" value="'.$edtdata->last_name.'"  class="form-control" placeholder="Last Name" required/>
      </div>
      
      <div class="col-md-4">
      <label>Gender:</label>
      <select name="gender" class="form-control" required>
      <option value="#">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
      </select>
      </div>
      
      </div>
      <br>
      
      <div class="row">
      <div class="col-md-4">
      <label>Designation:</label>
      <select name="designation" class="form-control" required>
      <option value="#">Select Designation</option>
      <option value="1">Designation 1</option>
      <option value="2">Designation 2</option>
      <option value="3">Designation 3</option>
      </select>
      </div>
      
      <div class="col-md-4">
      <label>Phone Number:</label>
      <input type="number" name="phone" value="'.$edtdata->phone.'" class="form-control"  data-parsley-maxlength="15" placeholder="Phone Number" required/>
      </div>
      
      <div class="col-md-4">
      <label>Contact Email:</label>
      <input type="email" name="email" value="'.$edtdata->email.'" class="form-control" placeholder="Contact Email" required/>
      </div>
      
      </div> 
      
      <br>
      
      
      <div class="row">
      
      <div class="col-md-8">
      <label>Address:</label>
      <textarea type="text" name="address" class="form-control"  placeholder="Enter Address" style="height: 100px;" required>'.$edtdata->address.'</textarea>
      </div>
      <div class="col-md-4">
      <label>Select Country:</label>
      <select name="country" class="form-control" required>
      <option value="#">Select Country</option>
      <option value="india">India</option>
      <option value="usa">USA</option>
      <option value="uk">UK</option>
      </select>
      </div>
      </div>
      
      <br>
      
      
      
      
      <div class="row">
      <div class="col-md-6">
      <label>Sales Target:</label>
      <input type="text" name="sales_target" value="'.$edtdata->sales_target.'" class="form-control" placeholder="Sales Target" required/>
      </div>
      
      <div class="col-md-6">
      <label>Permission Access:</label>
      <select name="permission_access" class="form-control" required>
      <option value="#">Select Permission</option>  
      <option value="1">Permission 1</option>
      <option value="2">Permission 2</option>
      <option value="3">Permission 3</option>
      <option value="4">Permission 4</option>
      </select>
      </div>
      </div>
      <br>  
      
      <div class="row">
      <div class="col-md-6">
      <label>Id Proof.:(<small>Please Upload Passport or Driving License or NID)</small>)</label><br>
      <input type="file" name="idproof" id="idproof">
      </div>
      
      <div class="col-md-6">
      <label>Employee Image:(<small>Please Upload Recent Photo)</small>)</label><br>
      <input type="file" name="emp_image" id="emp_image">
      </div>
      </div>
      <br>
      <br>
      
      <div class="row">
      <div class="col-md-4"></div>
      
      <div class="col-md-4">
      
      <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Update</button>
      
      </div>
      <div class="col-md-4"></div>
      
      </div>'?>
      <?php echo form_close();?>
      <?php echo '</div>
      </div>
      </div>
      </div>';
      
      
   }
   
   public function all_employee_list()
   {   
      $result['data']=$this->common_model->get_all_users();
      $this->load->view('sales/layout/header');
      $this->load->view('sales/layout/footer');
      $this->load->view('sales/employee/employee', $result);
   }
   
   
   public function delete($id)
   {
      $this->common_model->delete($id,'employee'); 
      $this->session->set_flashdata('msg', 'employee deleted Successfully');
      redirect(base_url('sales/employee/all_employee_list'));
   }
   
}