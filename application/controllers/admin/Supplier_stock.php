<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_stock extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    check_login_user();
    $this->load->model('common_model');
    $this->load->model('login_model');
  }
  
  public function index(){
    $data = array();
    $data['page_title'] = 'product';
    $this->load->view('admin/layout/header', $data);
    $data['main_content'] = $this->load->view('admin/supplier_stock/add', $data, TRUE);

    $this->load->view('admin/supplier_stock/add', $data);
    $this->load->view('admin/layout/footer', $data);
  }

 
  
  
  public function add()
  {   
    if (isset($_POST)) {
      
      $productimg = $_FILES['product_image']['name'];
      $date_sheet_info = $_FILES['date_sheet_info']['name'];
      
      $data = array(
        'product_image' => $_POST['product_image'], 
        'local_stock_number' => $_POST['local_stock_number'], 
        'part_number' => $_POST['part_number'], 
        'manufacturer_name' => $_POST['manufacturer_name'], 
        'type' => $_POST['type'], 
        'range' => $_POST['range'], 
        'tech_info' => $_POST['tech_info'], 
        'description' => $_POST['description'],
        'internal_part_notes' => $_POST['internal_part_notes'], 
        'product_condition' => $_POST['product_condition'], 
        'licycle_status' => $_POST['licycle_status'], 
        'lifecycle_date' => $_POST['lifecycle_date'], 
        'length' => $_POST['length'], 
        'width' => $_POST['width'], 
        'height' => $_POST['height'],
        'weight_kg' => $_POST['weight_kg'], 
        'weight_lb' => $_POST['weight_lb'], 
        'country' => $_POST['country'], 
        'lead_time' => $_POST['lead_time'], 
        'export_comm_code' => $_POST['export_comm_code'], 
        'brand_new_rrp' => $_POST['brand_new_rrp'], 
        'cost_to_buy' => $_POST['cost_to_buy'], 
        'min_obso_cost' => $_POST['min_obso_cost'], 
        'bn_exchange_price' => $_POST['bn_exchange_price'], 
        'brand_new_quantity' => $_POST['brand_new_quantity'], 
        'web_price' => $_POST['web_price'], 
        'location' => $_POST['location'], 
        'date_sheet_info' => $_POST['date_sheet_info'],
        'supplier_name' => $_POST['supplier_name'],
        'product_image' => $productimg,
        'date_sheet_info' => $date_sheet_info,
        'status' => 0,
        'creation_date' => current_datetime()
      );
      
      move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/' . $productimg);
      move_uploaded_file($_FILES['date_sheet_info']['tmp_name'], 'uploads/' . $date_sheet_info);
      
      $data = $this->security->xss_clean($data);
      $this->common_model->insert($data, 'supplier_stock');
      $this->session->set_flashdata('msg', 'product added Successfully');
      redirect(base_url('admin/supplier_stock/all_product_list')); 
      
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
  
  
  public function loadMoreProduct(){
    $page =  $_GET['page'];

    if(isset($_GET['q']) && !empty($_GET['q'])){
       $newName = str_replace("_", " ", $_GET['q']);
       $data['product'] = $this->common_model->get_all_product_by_manufacture_load_more($page,$newName);
    }else{
      $data['product'] = $this->common_model->get_all_product_load_more($page,'product');
    }
    
    $content = "";

    $content = $this->load->view('admin/supplier_stock/ajax-product',$data, TRUE);
    
    if(empty($content)){
       $content = "No More Records";
       echo $content;exit;
    }else{
      echo $content;exit;
    }
    
    exit;
 }
  
  
  public function update($id="")
  {
    if ($_POST) {
      
      $productimg = $_FILES['product_image']['name'];
      $date_sheet_info = $_FILES['date_sheet_info']['name'];
      
      $manfid = $_POST['maineditid'];
      
      if($_FILES['product_image']['name'] !=""){
        
        $data = array(
        'local_stock_number' => $_POST['local_stock_number'], 
        'part_number' => $_POST['part_number'], 
        'manufacturer_name' => $_POST['manufacturer_name'], 
        'type' => $_POST['type'], 
        'range' => $_POST['range'], 
        'tech_info' => $_POST['tech_info'], 
        'description' => $_POST['description'], 
        'internal_part_notes' => $_POST['internal_part_notes'], 
        'product_condition' => $_POST['product_condition'], 
        'licycle_status' => $_POST['licycle_status'], 
        'lifecycle_date' => $_POST['lifecycle_date'], 
        'length' => $_POST['length'], 
        'width' => $_POST['width'], 
        'height' => $_POST['height'], 
        'weight_kg' => $_POST['weight_kg'], 
        'weight_lb' => $_POST['weight_lb'], 
        'country' => $_POST['country'], 
        'lead_time' => $_POST['lead_time'], 
        'export_comm_code' => $_POST['export_comm_code'], 
        'brand_new_rrp' => $_POST['brand_new_rrp'], 
        'cost_to_buy' => $_POST['cost_to_buy'], 
        'min_obso_cost' => $_POST['min_obso_cost'], 
        'bn_exchange_price' => $_POST['bn_exchange_price'], 
        'brand_new_quantity' => $_POST['brand_new_quantity'],
        'web_price' => $_POST['web_price'], 
        'location' => $_POST['location'], 
        'date_sheet_info' => $_POST['date_sheet_info'],
        'supplier_name' => $_POST['supplier_name'],
        'product_image' => $productimg,
        'date_sheet_info' => $date_sheet_info,
          
        );
        
        move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/' . $productimg);
        move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/' . $product_image);
        
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $manfid,'supplier_stock');
        redirect(base_url('admin/supplier_stock/all_product_list')); 
        
      }else{
        
        $data = array(
          'local_stock_number' => $_POST['local_stock_number'], 
          'part_number' => $_POST['part_number'], 
          'manufacturer_name' => $_POST['manufacturer_name'], 
          'type' => $_POST['type'], 
          'range' => $_POST['range'], 
          'tech_info' => $_POST['tech_info'], 
          'description' => $_POST['description'], 
          'internal_part_notes' => $_POST['internal_part_notes'], 
          'product_condition' => $_POST['product_condition'], 
          'licycle_status' => $_POST['licycle_status'], 
          'lifecycle_date' => $_POST['lifecycle_date'], 
          'length' => $_POST['length'], 
          'width' => $_POST['width'], 
          'height' => $_POST['height'], 
          'weight_kg' => $_POST['weight_kg'], 
          'weight_lb' => $_POST['weight_lb'], 
          'country' => $_POST['country'], 
          'lead_time' => $_POST['lead_time'], 
          'export_comm_code' => $_POST['export_comm_code'], 
          'brand_new_rrp' => $_POST['brand_new_rrp'], 
          'cost_to_buy' => $_POST['cost_to_buy'], 
          'min_obso_cost' => $_POST['min_obso_cost'], 
          'bn_exchange_price' => $_POST['bn_exchange_price'], 
          'brand_new_quantity' => $_POST['brand_new_quantity'], 
          'web_price' => $_POST['web_price'], 
          'location' => $_POST['location'], 
          'date_sheet_info' => $_POST['date_sheet_info'],
          'supplier_name' => $_POST['supplier_name'],
          'product_image' => $productimg,
        'date_sheet_info' => $date_sheet_info,
        );
        
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $manfid,'supplier_stock');
        redirect(base_url('admin/supplier_stock/all_product_list')); 

            }
        }

        $edtdata = $data['product'] = $this->common_model->get_single_product_info($id);
    echo '<div class="modal-header">
    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit PRODUCT</h5>
    <button type="button" data-dismiss="modal" class="close" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
    
    <div class="modal-body">'; ?>
    <?php $this->load->helper('form'); ?>
    
    <?php echo form_open(base_url() . 'admin/supplier_stock/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
    
    <input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="<?php echo $edtdata->id; ?>"/>
    
    <?php echo '<div class="row">
    <div class="col-md-3">
    
    <label>Upload Image:</label><br>
    <input type="file" name="product_image" id="fileToUpload">
    <img src="'.base_url().'uploads/'.$edtdata->product_image.'" height="30" width="50" />
    
    </div>

    <div class="col-md-3">
      <label>Supplier Name:</label>
      <input type="text" name="supplier_name" class="form-control" value="'.$edtdata->supplier_name.'"  placeholder="" required />
    </div>

    <div class="col-md-3">
      <label>Local Stock Number:</label>
      <input type="text" name="local_stock_number" class="form-control" value="'.$edtdata->local_stock_number.'"  placeholder="" required />
    </div>


    <div class="col-md-3">
    <label>Part Number:</label>
    <input type="text" name="part_number" class="form-control" value="'.$edtdata->part_number.'" placeholder="" required />
    </div>
    
    </div><br>
    
    <div class="row">
    <div class="col-md-4">
    <label>Manufacturer:</label>
    <select name="manufacturer_name" class="form-control" required>';
    ?>
    <?php 
    $manufacter1=$this->common_model->get_all_manufacturer();
    foreach ($manufacter1 as $manufacturer){ ?>
      <option value="<?php echo $manufacturer['manufacturer']; ?>" <?php if($edtdata->manufacturer_name == $manufacturer['manufacturer']) {?> selected="selected" <?php } ?>><?php echo $manufacturer['manufacturer']; ?></option>
      <?php } ?>
      <?php 
      echo '
      </select>
      </div>
      
      <div class="col-md-4">
      <label>Product Type:</label>
      
      <div class="form-group">
          <select name="type" class="form-control" value="'.$edtdata->type.'" selected="selected">
            <option value="">Select Product Type</option>
            <option value="Type TBC">Type TBC</option>
            <option value="HMI Operator Displays">HMI & Operator Displays</option>
            <option value="Teach Pendants & Smartpad Controls">Teach Pendants & Smartpad Controls</option>
            <option value="PLC Equipment">PLC Equipment</option>
            <option value="Drive Technology (AC | DC | Stepper & Servo)">Drive Technology (AC | DC | Stepper & Servo)</option>
            <option value="Motors (AC | DC | Stepper & Servo) & Encoders">Motors (AC | DC | Stepper & Servo) & Encoders</option>
            <option value="CNC Equipment">CNC Equipment</option>
            <option value="Generic Electronic Components (incl. Push buttons | Sensors | Contactors | Relays | Thermostats)">Generic Electronic Components (incl. Push buttons | Sensors | Contactors | Relays | Thermostats)</option>
            <option value="Safety Automation">Safety Automation</option>
           
          </select>
        </div>
      
      </div>
      
      <div class="col-md-4">
      <label>Range:</label>
      <input type="text" name="range" value="'.$edtdata->range.'" class="form-control" placeholder="" />
      </div>
      
      </div><br>
      
      <div class="row">
      <div class="col-md-4">
      <label>Further Tech Info:</label>
      <textarea type="text" name="tech_info" class="form-control"  placeholder="" style="height: 100px;" >'.$edtdata->tech_info.'</textarea>
      
      </div>
      
      <div class="col-md-4">
      <label>Description:</label>
      <textarea type="text" name="description" class="form-control"  placeholder="" style="height: 100px;" required>'.$edtdata->description.'</textarea>
      
      </div>
      
      <div class="col-md-4">
      <label>Internal Part Notes:</label>
      <textarea type="text" name="internal_part_notes" class="form-control"  placeholder="" style="height: 100px;" >'.$edtdata->internal_part_notes.'</textarea>
      
      </div>
      
      </div><br> 
      
      <div class="row">

      <div class="col-md-4">
          <label>Condition:</label>
        <div class="form-group">
              <select name="product_condition" value="'.$edtdata->product_condition.'" class="form-control">
                <option value="">Select Condition</option>
                <option value="Brand New">Brand New</option>
                <option value="New Spare">New Spare</option>
                <option value="Preowned">Preowned</option>
              </select>
            </div>

        </div>

      
      <div class="col-md-4">
      <label>Lifecycle Status:</label>
      
      <div class="form-group">
          <select name="licycle_status" value="'.$edtdata->licycle_status.'" class="form-control">
            <option value="">Select Lifecycle Status</option>
            <option value="Unknown">Unknown</option>
            <option value="Current Line">Current Line</option>
            <option value="Phase out">Phase out</option>
            <option value="Obsolete">Obsolete</option>
           
          </select>
        </div>
        
      
      </div>

      
      
      <div class="col-md-4">
      <label>Lifecycle Status Date:</label>
      <input type="text" name="lifecycle_date" class="form-control" value="'.$edtdata->lifecycle_date.'" placeholder="" >
      
      </div>
      </div><br>    
      
      <label>Dimmension(Length:width:Height)</label>
      <div class="row">
      
      <div class="col-md-4">
      <input type="text" name="length" class="form-control" placeholder="length" value="'.$edtdata->length.'">
      </div>  
      <div class="col-md-4">
      <input type="text" name="width" class="form-control" placeholder="width" value="'.$edtdata->width.'">
      </div>
      <div class="col-md-4">
      <input type="text" name="height" class="form-control" placeholder="height" value="'.$edtdata->height.'">
      </div>
      </div><br>
      
      <div class="row">
      <div class="col-md-4">
      <label>Weight Kg</label>
      <input type="text" class="form-control" name="weight_kg" value="'.$edtdata->weight_kg.'">
      
      </div>
      
      <div class="col-md-4">
      <label>Weight lb</label>
      <input type="text" class="form-control" name="weight_lb" value="'.$edtdata->weight_lb.'">
      </div>
      
      <div class="col-md-4">
      <label>Country of Origin</label>
      <input type="text" value="'.$edtdata->country.'" class="form-control" name="country">
      
      </div>
      
      </div> 
      <br>
      
            
      <div class="row">
     
      
      <div class="col-md-4">
      <label>Lead Time</label>
       <div class="form-group">
          <select name="lead_time" value="'.$edtdata->lead_time.'" class="form-control">
            <option value="">Select Lead Time</option>
            <option value="Same Day">Same Day</option>
            <option value="Next Day">Next Day</option>
            <option value="2 Days">2 Days</option>
            <option value="Express Available please Enquire">Express Available please Enquire</option>
            </select>
        </div>
      
      </div>
      
      <div class="col-md-4">
      <label>Export Commodity Code</label>
      <input type="text" class="form-control" name="export_comm_code" value="'.$edtdata->export_comm_code.'">
      
      </div>
      
      <div class="col-md-4">
      <label>BRAND NEW RRP.</label>
      <input type="text" class="form-control" name="brand_new_rrp" value="'.$edtdata->brand_new_rrp.'">
      
      </div>
      
      
      </div><br>

       <div class="row">
          <div class="col-md-3">
            <label>Cost To Buy</label>
           <input type="text" class="form-control" name="cost_to_buy" value="'.$edtdata->cost_to_buy.'">

          </div>

          <div class="col-md-3">
            <label>Min Obso Cost</label>
           <input type="text" class="form-control" name="min_obso_cost" value="'.$edtdata->min_obso_cost.'">

          </div>

          <div class="col-md-3">
            <label>BN Exchange Price</label>
           <input type="text" class="form-control" name="bn_exchange_price" value="'.$edtdata->bn_exchange_price.'">

          </div>

          <div class="col-md-3">
            <label>Brand New Quantity</label>
           <input type="number" class="form-control" name="brand_new_quantity" value="'.$edtdata->brand_new_quantity.'">

          </div>
         
        </div><br> 

      
      
      <div class="row">
      
      
      
      
      <div class="col-md-4">
      <label>Supplier Part List Price</label>
      <input type="text" class="form-control" name="web_price" value="'.$edtdata->web_price.'">
      
      </div>
      
      <div class="col-md-4">
        <label>Location</label>
       <input type="text" class="form-control" name="location" value="'.$edtdata->location.'">

      </div>
     
        <div class="col-md-4">
        
        <label>Data Sheet/Info</label><br>
        <input type="file" name="date_sheet_info" id="fileToUpload">
        </div>
        
        <div class="col-md-4">
        <label></label><br>
        <img src="'.base_url().'uploads/'.$edtdata->date_sheet_info.'" height="30" width="50" />
        </div>
      
      
      </div><br>
      
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-3">
      
      <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
      
      <button data-dismiss="modal" type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Cancel</button>
      
      
      </div>
      <div class="col-md-3">
      
      <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Update</button>
      
      </div>
      <div class="col-md-3"></div>
      
      </div>'?>
      <?php echo form_close();?>
      <?php echo '</div>
      </div>';
      
      
    }
    
    
    
    
    
    public function all_product_list()
    {  


      $data = array();

      $table = "supplier_stock";
      $sort = "DESC";
      $column = "id";
      $value='';
      $search='';
      $country='';
      if(isset($_GET['table'])){
         $table = $_GET['table'];
      }
      if(isset($_GET['sort'])){
         $sort = $_GET['sort'];
      }
      if(isset($_GET['column'])){
         $column = $_GET['column'];
      }
      if(isset($_GET['manufacturerby'])){
         $search='manufacturer_name';
         $value = str_replace('_', ' ', $_GET['manufacturerby']) ;
      }
      if(isset($_GET['country']))
      {
        $country=str_replace('_', ' ',$_GET['country']);
      }  
      $result['data']=$this->common_model->get_all_records_sort($table,$column,$sort,$search,$value,$country);
      $result['supplier']=$this->common_model->get_all_supplier_records();
      $result['count'] = count($result['data']);
     $result['manufacturer']=$this->common_model->get_all_manufacturer();
      $result['supplierrecord']=$this->common_model->get_all_supplier_records();
      $result['suppliercontact']=$this->common_model->get_all_supplier_contact();
      $this->load->view('admin/layout/header', $result);
      $this->load->view('admin/supplier_stock/product', $result);
      $this->load->view('admin/layout/footer', $result);
      
    }
    
    
    public function delete($id)
    {
      $this->common_model->delete($id,'supplier_stock'); 
      $this->session->set_flashdata('msg', 'product deleted Successfully');
      redirect(base_url('admin/supplier_stock/all_product_list'));
    }
    
    public function importdata()
    { 

      if(isset($_POST["submit"]))
      {
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
          $data = array(
            'product_image' => (!empty($filesop[0])) ? $filesop[0] : "",
            'local_stock_number' => (!empty($filesop[1])) ? $filesop[1] : "",
            'part_number' => (!empty($filesop[2])) ? $filesop[2] : "",
            'manufacturer_name' => (!empty($filesop[3])) ? $filesop[3] : "",
            'type' => (!empty($filesop[4])) ? $filesop[4] : "",
            'range' => (!empty($filesop[5])) ? $filesop[5] : "",
            'tech_info' => (!empty($filesop[6])) ? $filesop[6] : "",
            'description' => (!empty($filesop[7])) ? $filesop[7] : "",
            'internal_part_notes' => (!empty($filesop[8])) ? $filesop[8] : "",
            'product_condition' => (!empty($filesop[9])) ? $filesop[9] : "",
            'licycle_status' => (!empty($filesop[9])) ? $filesop[9] : "",
            'lifecycle_date' => (!empty($filesop[10])) ? $filesop[10] : "",
            'length' => (!empty($filesop[11])) ? $filesop[11] : "",
            'width' => (!empty($filesop[12])) ? $filesop[12] : "",
            'height' => (!empty($filesop[13])) ? $filesop[13] : "",
            'weight_kg' => (!empty($filesop[14])) ? $filesop[14] : "",
            'weight_lb' => (!empty($filesop[15])) ? $filesop[15] : "",
            'country' => (!empty($filesop[16])) ? $filesop[16] : "",
            'lead_time' => (!empty($filesop[17])) ? $filesop[17] : "",
            'export_comm_code' => (!empty($filesop[18])) ? $filesop[18] : "",
            'brand_new_rrp' => (!empty($filesop[19])) ? $filesop[19] : "",
            'cost_to_buy' => (!empty($filesop[20])) ? $filesop[20] : "",
            'min_obso_cost' => (!empty($filesop[21])) ? $filesop[21] : "",
            'bn_exchange_price' => (!empty($filesop[22])) ? $filesop[22] : "",
            'brand_new_quantity' => (!empty($filesop[23])) ? $filesop[23] : "",
            'web_price' => (!empty($filesop[24])) ? $filesop[24] : "",
            'location' => (!empty($filesop[25])) ? $filesop[25] : "",
            'date_sheet_info' => (!empty($filesop[26])) ? $filesop[26] : "",
            'supplier_name' => (!empty($filesop[27])) ? $filesop[27] : "",
            'status' => 0,
            'creation_date' => current_datetime()
          );
          
          if($c<>0){          //SKIP THE FIRST ROW
            $this->common_model->insert($data, 'supplier_stock');
          }
          $c = $c + 1;
        }
        redirect(base_url('admin/supplier_stock/all_product_list'));
      }
    } 
  }