<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
       $data = array();
        $data['page_title'] = 'stock';
         $this->load->view('admin/layout/header', $data);
         $this->load->view('admin/layout/footer', $data);
        $data['main_content'] = $this->load->view('admin/stock/add', $data, TRUE);
        $this->load->view('admin/stock/add', $data);

    }


 public function add()
    {   
               

        if ($_POST) {

            $stockimg = rand(1000, 99999).$_FILES['stock_image']['name'];

                

                

         $data = array(
                'manufacturer_name' => $_POST['manufacturer_name'],
                'supplier_name' => $_POST['supplier_name'],
                'supplier_contact' => $_POST['supplier_contact'],
                'stock_name' => $_POST['stock_name'],
                'part_no' => $_POST['part_no'],
                'total_quantity' => $_POST['total_quantity'],
                'stock_details' => $_POST['stock_details'],
                'stock_info' => $_POST['stock_info'],
                'stock_condition' => $_POST['stock_condition'],
                'stock_cost' => $_POST['stock_cost'],
                'packaging_cost' => $_POST['packaging_cost'],
                'shipment_cost' => $_POST['shipment_cost'],
                'total' => $_POST['total'],
                'profit' => $_POST['profit'],
                'sell_cost' => $_POST['sell_cost'],
                'stock_image' => $stockimg,
                'status' => 0,
                'creation_date' => current_datetime()
            );

            move_uploaded_file($_FILES['stock_image']['tmp_name'], 'uploads/' . $stockimg);

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'stock');
            $this->session->set_flashdata('msg', 'stock added Successfully');
            redirect(base_url('admin/stock/all_stock_list')); 
                    
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

            $stockimg = rand(1000, 99999).$_FILES['stock_image']['name'];

            $manfid = $_POST['maineditid'];

            if($_FILES['stock_image']['name'] !=""){

           $data = array(
                'manufacturer_name' => $_POST['manufacturer_name'],
                'supplier_name' => $_POST['supplier_name'],
                'supplier_contact' => $_POST['supplier_contact'],
                'stock_name' => $_POST['stock_name'],
                'part_no' => $_POST['part_no'],
                'total_quantity' => $_POST['total_quantity'],
                'stock_details' => $_POST['stock_details'],
                'stock_info' => $_POST['stock_info'],
                'stock_condition' => $_POST['stock_condition'],
                'stock_cost' => $_POST['stock_cost'],
                'packaging_cost' => $_POST['packaging_cost'],
                'shipment_cost' => $_POST['shipment_cost'],
                'total' => $_POST['total'],
                'profit' => $_POST['profit'],
                'sell_cost' => $_POST['sell_cost'],
                'stock_image' => $stockimg,
            );

            move_uploaded_file($_FILES['stock_image']['tmp_name'], 'uploads/' . $stockimg);

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $manfid,'stock');
        redirect(base_url('admin/stock/all_stock_list')); 
            
            }else{

                $data = array(
                'manufacturer_name' => $_POST['manufacturer_name'],
                'supplier_name' => $_POST['supplier_name'],
                'supplier_contact' => $_POST['supplier_contact'],
                'stock_name' => $_POST['stock_name'],
                'part_no' => $_POST['part_no'],
                'total_quantity' => $_POST['total_quantity'],
                'stock_details' => $_POST['stock_details'],
                'stock_info' => $_POST['stock_info'],
                'stock_condition' => $_POST['stock_condition'],
                'stock_cost' => $_POST['stock_cost'],
                'packaging_cost' => $_POST['packaging_cost'],
                'shipment_cost' => $_POST['shipment_cost'],
                'total' => $_POST['total'],
                'profit' => $_POST['profit'],
                'sell_cost' => $_POST['sell_cost'],
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $manfid,'stock');
        redirect(base_url('admin/stock/all_stock_list')); 

            }
        }

        $edtdata = $data['stock'] = $this->common_model->get_single_stock_info($id);
        echo '<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit stock</h5>
             <button type="button" data-dismiss="modal" class="close" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">'; ?>
<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/stock/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

<input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="<?php echo $edtdata->id; ?>"/>

                    <?php echo '<div class="row">
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
                          echo '</select>
                      </div>

                       <div class="col-md-4">
                        <label>Supplier:</label>

                        <select name="supplier_name" class="form-control" data-validate="required" id="supplier_name" onchange="return get_supplier_val(this.value)">';
                          ?>
                          <?php 
                          $allsupplier=$this->common_model->get_all_supplier_records();
                             foreach ($allsupplier as $allsupplier){ ?>
                            <option value="<?php echo $allsupplier['session_id']; ?>" <?php if($edtdata->supplier_name == $allsupplier['session_id']) {?> selected="selected" <?php } ?>><?php echo $allsupplier['company_name']; ?></option>
                            <?php } ?>
                            <?php 
                          echo '</select>
                      </div>

                       <div class="col-md-4">
                        <label>Supplier Contact:</label>
                        <select name="supplier_contact" id="supplier_contact" class="form-control" required="required">
                         
                            <option value="'.$edtdata->id.'">'.$edtdata->supplier_contact.'</option>
                            
                        </select>
                      </div>
                     </div>

                        <br>
                     <div class="row">
                      <div class="col-md-4">
                        <label>stock Name:</label>
                        <input type="text" name="stock_name" value="'.$edtdata->stock_name.'"  class="form-control" data-parsley-maxlength="6" placeholder="stock Name"/>
                      </div>

                      <div class="col-md-4">
                        <label>Part No.:</label>
                        <input type="text" name="part_no" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->part_no.'"/>
                      </div>

                      <div class="col-md-4">
                        <label>Total Quantity:</label>
                        <input type="text" name="total_quantity" class="form-control" required data-parsley-maxlength="6" placeholder="Total Quantity" value="'.$edtdata->total_quantity.'"/>
                      </div>

                      </div> 

                         <br>
                     
                     
                    <div class="row">

                    <div class="col-md-6">
                        <label>stock Deatils:</label>
                        <textarea type="text" name="stock_details" class="form-control" required placeholder="stock Deatils" style="height: 100px;">'.$edtdata->stock_details.'</textarea>
                      </div>
                    <div class="col-md-6">
                        <label>Part Info:</label>
                        <textarea type="text" name="stock_info" class="form-control" required placeholder="Part Info" style="height: 100px;">'.$edtdata->stock_info.'</textarea>
                      </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                        <label>stock Condition:</label>
                        <select name="stock_condition" class="form-control">'; ?>
                          <option value="AE" <?php if($edtdata->stock_condition == "AE") {?> selected="selected" <?php } ?>>Condition1</option>
                          <option value="VI" <?php if($edtdata->stock_condition == "VI") {?> selected="selected" <?php } ?>>Condition2</option>
                          <option value="OT" <?php if($edtdata->stock_condition == "OT") {?> selected="selected" <?php } ?>>Condition3</option>
                          <?php 
                        echo '</select>
                      </div>
    
                      <div class="col-md-6">
                        <label>Upload Image:</label><br>
                        <input type="file" name="stock_image" id="fileToUpload">;
                        <img src="'.base_url().'uploads/'.$edtdata->stock_image.'" height="30" width="50" />
                      </div>
                    </div>

                    <br>


                     <div class="row">
                        
    
                      <div class="col-md-6">
                        <div class="form-group">
                        <div class="row">
                          
                         <div class="col-md-6">
                        <label>stock Cost:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="number" name="stock_cost" class="form-control prc" placeholder="stock Cost" value="'.$edtdata->stock_cost.'" required/>
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <div class="row">
                        
                      <div class="col-md-6">
                        <label>Profit (%):</label>
                      </div>
                      <div class="col-md-6">
            <input type="number" name="profit" id="profit" class="form-control percentage" placeholder="Profit Percentage" value="'.$edtdata->profit.'" required/>
                      </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                        <div class="row">
                          
                         <div class="col-md-6">
                        <label>Packaging Cost:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="number" name="packaging_cost" class="form-control prc" placeholder="Packaging Cost" value="'.$edtdata->packaging_cost.'" required/>
                      </div>
                    </div>
                  </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <div class="row">
                        
                      <div class="col-md-6">
                        <label>Sell Price:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="number" name="sell_cost" id="sell_cost" class="form-control" value="'.$edtdata->sell_cost.'" placeholder="Sell Price"/>
                      </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <div class="row">
                          
                         <div class="col-md-6">
                        <label>Shipment Cost:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="number" name="shipment_cost" class="form-control prc" placeholder="Shipment Cost" value="'.$edtdata->shipment_cost.'" required />
                      </div>
                    </div>
                  </div>
                    </div>
                    <div class="col-md-6">
                        
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                        <div class="row">
                          
                         <div class="col-md-6">
                        <label>Total:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="number" name="total" value="'.$edtdata->total.'" id="result" class="form-control" placeholder="Total Cost"/>
                      </div>
                    </div>
                  </div>
                    </div>
                    <div class="col-md-6">
                        
                      </div>
                    </div>
                    <br>
                   <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            

                            <button data-dismiss="modal" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Cancel</button>
                           
                            
                        </div>
                        <div class="col-md-3">
                             
                             <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Submit</button>
                            
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>'?>
                  <?php echo form_close();?>
                <?php echo '</div>
        </div>
    </div>
</div>';
        

    }


    


     public function all_stock_list()
    {   

      $data = array();

      $table = "supplier_stock";
      $sort = "DESC";
      $column = "id";
      $value='';
      $search='';
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
      $result['data']=$this->common_model->get_all_records_sort($table,$column,$sort,$search,$value);
     
      $result['supplier']=$this->common_model->get_all_supplier_records();
      //$result['data']=$this->common_model->get_all_stock();
      $result['manufacturer']=$this->common_model->get_all_manufacturer();
      $result['supplierrecord']=$this->common_model->get_all_supplier_records();
      $result['suppliercontact']=$this->common_model->get_all_supplier_contact();
      $this->load->view('admin/layout/header',$result);
      $this->load->view('admin/stock/stock',$result);
      $this->load->view('admin/layout/footer',$result);
    }


     public function delete($id)
    {
        $this->common_model->delete($id,'stock'); 
        $this->session->set_flashdata('msg', 'stock deleted Successfully');
        redirect(base_url('admin/stock/all_stock_list'));
    }


     public function delete_all()
    {

     if ($this->input->post('checkbox_value')) 
     {
       $id = $this->input->post('checkbox_value');
       $ids=explode(',', $id);
        $this->common_model->delete_mul_prod($ids);
       
     }
    }



}