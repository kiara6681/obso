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
      $this->load->view('admin/layout/header', $data);
      $this->load->view('admin/layout/footer', $data);
      $data['main_content'] = $this->load->view('admin/employee/add', $data, TRUE);
      $this->load->view('admin/employee/add', $data);
      
   }
   
   public function role()
   {
      $result['user_role']=$this->common_model->get_all_role_permission();
      $this->load->view('admin/layout/header');
      $this->load->view('admin/layout/footer');
      $this->load->view('admin/role/add',$result);
   }
   public function roleDelete($id)
   {
      $return = $this->common_model->delete($id, 'employee_role');
      if($return){

         $this->session->set_flashdata('msg', 'Employee User Role Delete Successfully');
         redirect(base_url('admin/employee/role'));       
      }else{
         $this->session->set_flashdata('msg', 'Something Went wrong. Try again letter');
         redirect(base_url('admin/employee/role'));       
      }
      exit;
   }
   public function roleEdit($id)
   {
      $result['data'] = $this->common_model->get_where($id, 'employee_role');
      $this->load->view('admin/layout/header');
      $this->load->view('admin/layout/footer');
      $this->load->view('admin/role/edit',$result);
   }
   public function storeRole()
   {
      if ($_POST) {
         
         $this->load->helper('string'); 
       
         $permissions = implode(",",$_POST['permission_access']);

         $data = array(
            'permission' => $permissions,
            'department'=> $_POST['department'],
            'name' => $_POST['role']
         );
         
         $data = $this->security->xss_clean($data);
         $return = $this->common_model->insert($data, 'employee_role');
           if($return){

               $this->session->set_flashdata('msg', 'Employee User Role Added Successfully');
               redirect(base_url('admin/employee/role'));       
            }else{
               $this->session->set_flashdata('msg', 'Something Went wrong. Try again letter');
               redirect(base_url('admin/employee/role'));       
            }
            exit;

      }
      
     
   }
   public function updateRole()
   {
      if ($_POST) {
         
         $this->load->helper('string'); 
       
         $permissions = implode(",",$_POST['permission_access']);

         $data = array(
            'permission' => $permissions,
            'department'=> $_POST['department'],
            'name' => $_POST['role']
         );
         $id=$_POST['id'];
         $data = $this->security->xss_clean($data);
         $return = $this->common_model->update($data,$id,'employee_role');
           if($return){

               $this->session->set_flashdata('msg', 'Employee User Role Update Successfully');
               redirect(base_url('admin/employee/role'));       
            }else{
               $this->session->set_flashdata('msg', 'Something Went wrong. Try again letter');
               redirect(base_url('admin/employee/role'));       
            }
            exit;

      }
      
     
   }
   public function add()
   {  
      if ($_POST) {
         
         $this->load->helper('string'); 

         $empid = random_string('numeric',5);
         $idproof = $_FILES['idproof']['name'];
         $emp_image = $_FILES['emp_image']['name'];
         $password = random_string('numeric',10);
         $e_password = md5($password);
         $time = time();
         $verify_string = md5($time);
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
            'joining_date' => $_POST['joining_date'],
            'leaving_date' => $_POST['leaving_date'],
            'country' => $_POST['country'],
            'sales_target' => $_POST['sales_target'],
            'permission_access' => $this->common_model->get_permission_against_role($_POST['role']),
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
               redirect(base_url('admin/employee/all_employee_list'));       
            }else{
               $this->session->set_flashdata('msg', 'Something Went wrong. Try again letter');
               redirect(base_url('admin/employee/all_employee_list'));       
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
         
        
         
         $manfid = $_POST['maineditid'];
      
         if(isset($_FILES['emp_image']['name'])){
            $emp_image = $_FILES['emp_image']['name'];
            move_uploaded_file($_FILES['emp_image']['tmp_name'], 'uploads/' . $emp_image);
            $data['emp_image'] = $emp_image;
        }
        if(isset($_FILES['idproof']['name'])){
           $idproof = $_FILES['idproof']['name'];
           move_uploaded_file($_FILES['idproof']['tmp_name'], 'uploads/' . $idproof);
           $data['idproof'] = $idproof;
        }
            
            $data['first_name']= $_POST['first_name'];
            $data['last_name'] = $_POST['last_name'];
            $data['gender'] = $_POST['gender'];
            $data['designation'] = $_POST['designation'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];
            $data['country'] = $_POST['country'];
            $data['sales_target'] = $_POST['sales_target'];
            $data['status'] = 0;
            $data['permission_access'] = $this->common_model->get_permission_against_role($_POST['role']);
            $data['role']=$_POST['role'];
            $data = $this->security->xss_clean($data);
            $this->common_model->update($data, $manfid, 'user');
            redirect(base_url('admin/employee/all_employee_list')); 
            
      }
      
      $edtdata = $data['employee'] = $this->common_model->get_single_employee_info($id);
      echo '
      <div class="modal-header">
      <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Employee</h5>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
      
      <div class="modal-body">'; ?>
      <?php $this->load->helper('form'); ?>
      
      <?php echo form_open(base_url() . 'admin/employee/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
      
      <input type="hidden" name="maineditid" class="form-control" placeholder="Part No." value="<?php echo $edtdata->id; ?>"/>
      
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
      <option value="#">Select Gender</option>'; ?>

      <?php 
         $male = ($edtdata->gender == 'male') ? 'selected' : '';
         $female = ($edtdata->gender == 'female') ? 'selected' : '';
         $other = ($edtdata->gender == 'other') ? 'selected' : '';
      echo '<option value="male" '.$male.'>Male</option>'; ?>
      <?php echo  '<option value="female" '.$female.'>Female</option>'; ?>
      <?php echo '<option value="other" '.$other.'>Other</option>'; ?>

      <?php echo '</select>
      </div>
      
      </div>
      <br>
      
      <div class="row">
      <div class="col-md-4">
         <label>department:</label>
         <select name="role" class="form-control">
             <option value="">Select Role</option>';
        $rolesString='';     
      $roles=$this->common_model->get_all_role_permission();
     
      foreach($roles as  $role): 
         if($edtdata->role == $role['id']){
            $rolesString .= '<option value="'.$role["id"].'" selected>'.$role["name"].'</option>';
         }else{
            $rolesString .= '<option value="'.$role['id'].'" >'.$role["name"].'</option>';
         }
         
      endforeach;

      echo $rolesString;
      $countries = $this->common_model->select('country');
      echo '</select>
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
      
      <div class="col-md-4">
      <label>Select Country:</label>
      <select name="country" class="form-control" required>
      <option value="#">Select Country</option>';
      
      foreach($countries as $c => $country): 

         if($edtdata->country == $country["id"]){
            $countrySelect .= '<option value="'.$country["id"].'" selected>'.$country["name"].'</option>';   
         }else{
            $countrySelect .= '<option value="'.$country["id"].'">'.$country["name"].'</option>';
         }

      endforeach;

      echo $countrySelect;
      echo '</select>
      </div>

       <div class="col-md-4">
        <label>Joining Date:</label>
         <input type="date" name="joining_date" value="'.$edtdata->joining_date.'" class="form-control datepicker"  placeholder="" >
      </div>

      <div class="col-md-4">
        <label>Leaving Date:</label>
        <input type="date" name="leaving_date" value="'.$edtdata->leaving_date.'" class="form-control datepicker"  placeholder="" >
      </div>


      </div>
      
      <br>
      

      <div class="row">
      <div class="col-md-12">
      <label>Address:</label>
      <textarea type="text" name="address" class="form-control"  placeholder="Enter Address" style="height: 100px;" required>'.$edtdata->address.'</textarea>
      </div>
      </div>

       <br>
      
      
      <div class="row">
        <div class="col-md-3">
          <label>Sales Target:</label>
          <input type="number" name="sales_target" value="'.$edtdata->sales_target.'" class="form-control" placeholder="Sales Target"/>
         </div>

        <div class="col-md-4">
           <label>Sales Target Yearly/Monthly:</label>

          <select name="sales_target1" class="form-control" required>'; ?>

      <?php 
         $yearly = ($edtdata->sales_target1 == 'yearly') ? 'selected' : '';
         $monthly = ($edtdata->sales_target1 == 'monthly') ? 'selected' : '';

      echo '<option value="yearly" '.$yearly.'>Yearly</option>'; ?>
      <?php echo  '<option value="monthly" '.$monthly.'>Monthly</option>'; ?>
      

      <?php echo '</select>
          
          </div>


      ';
      
    //   <div class="col-md-6">
    //   <label>Permission Access:</label>
    //   <select name="permission_access" multiple class="form-control" required>
    //   <option value="#">Select Permission</option>';
      
    //   $menus = unserialize (SIDE_MENUS);
    //   $userMenus = explode(',',$edtdata->permission_access);
    //   $menuSide = "";   
    //   foreach($menus as $m => $menu):
    //      foreach($userMenus as $um => $userMenu){
    //         if($userMenu == $m){
    //           $menuSide .='<option value="'.$m.'" selected>'.$menu.'</option>';
    //           break;
    //         }
    //      }
    //      $menuSide .='<option value="'.$m.'">'.$menu.'</option>';
    //   endforeach;

    //   echo $menuSide;
    //   echo '</select>
    //   </div>
    echo '</div>
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
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-center">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary btn-sm waves-effect waves-light waves-light savebtn clr">Cancel</button>
                    </div>
                        <div class="col-md-3 text-center">
                        <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save</button>
                          
                        </div>
                        <div class="col-md-3"></div>
                        
                        
                    </div>'?>
      <?php echo form_close();?>
      <?php echo '</div>
      </div>';
      
      
   }
   
   public function all_employee_list()
   {   
      $table = "user";
      $sort = "DESC";
      $column = "id";
      $department='';
      $country='';
      if(isset($_GET['sort'])){
         $sort = $_GET['sort'];
      }
      if(isset($_GET['column'])){
         if($_GET['column']=='name')
         $column='first_name'; 
         else 
         $column = $_GET['column'];
      }
      if(isset($_GET['dep'])){
         $department = str_replace('_', ' ', $_GET['dep']) ;
      }
      if(isset($_GET['country'])){
         $country = str_replace('_', ' ', $_GET['country']) ;
      }
      $result['data']=$this->common_model->get_all_users($table,$column,$sort,$department,$country);
      $result['roles']=$this->common_model->get_all_role_permission();
      $this->load->view('admin/layout/header');
      $this->load->view('admin/layout/footer');
      $this->load->view('admin/employee/employee', $result);
   }
   
   
   public function delete($id)
   {
      $this->common_model->delete($id,'user'); 
      $this->session->set_flashdata('msg', 'employee deleted Successfully');
      redirect(base_url('admin/employee/all_employee_list'));
   }
   
}