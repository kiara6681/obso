<?php
  $order=''; 
  $manufacturerby='';
  $countryid='';
  if(isset($_GET['table'])){
     $order = $_GET['table'];
  }
  if(isset($_GET['column'])){
     $order .='_'.$_GET['column'];
  }
  if(isset($_GET['sort'])){
     $order .='_'.$_GET['sort'];
  }
  if(isset($_GET['manufacturerby']))
  {
    $manufacturerby=$_GET['manufacturerby'];
  }
  if(isset($_GET['country']))
  {
    $countryid=$_GET['country'];
  } 

?>
<style>
  .dropdown-menu li:hover {
      color: #fff !important;
  }
.checkmark {
  position: absolute;
  top: 10px;
  left: 10px;
  height: 20px;
  width: 20px;
  background-color: #eee;
}

.checkbox_parent input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.checkbox_parent input:checked ~ .checkmark:after {
  display: block;
}

.checkbox_parent .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.delete_checkbox{
    position: relative;
    top: 10px;
    left: 10px;
}
.all_delete_checkbox{
    position: relative;
    top: 10px;
    left: 10px;
}
</style>


<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">

        <?php
        if($this->session->flashdata('product_add_error')){
          ?>
          <div class="alert alert-info"><?= $this->session->flashdata('product_add_error'); ?></div>
          <!-- <script>
            $(document).ready(function(){
          
              $('#addProductModal').modal('show');
              $('#show_error_message').html('<?= $this->session->flashdata('product_add_error'); ?>');
              $('#show_error_message').show();
              
            });
          </script> -->
          <?php
        }

        if($this->session->flashdata('product_edit_error')){

          ?>
          <div class="alert alert-info"><?= $this->session->flashdata('product_edit_error'); ?></div>
          <!-- <script>
            $(document).ready(function(){
          
              //alert('<?= $p_e_e; ?>');
          
              // window.onload = function() {
              //     get_product_edit('<?= $p_e_e; ?>');
              // };
          
              $('#editform').modal('show');
              $('#edit_show_error_message').html('<?= $this->session->flashdata('product_edit_error'); ?>');
              $('#edit_show_error_message').show();
              
            });
          </script> -->
          <?php
        }
        ?>

        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Product Database</b> &nbsp > &nbsp Product List
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-8 col-md-4 col-sm-6">
                  <h3>
                    <input type="text" id="myInput" class="form-control ipt-rds" placeholder="Search..">
                  </h3>
                </div>


                 <div class="col-xl-4 col-md-4 col-sm-6">
                  <h3>
                   Total Product (<?php echo $count; ?>)
                  </h3>
                </div>
                
              </div>      
            </div>
          </div>
        </div>
      </div> 


      <hr style="margin-bottom: 15px !important;">
        
        <div class="row">
            <div class="col-md-4">            
                <label class="checkbox_parent">
                    <input type="checkbox" class="all_delete_checkbox" value="all" id="delete_all_products" style="left:15px;">
                    <span class="checkmark" style="left: 25px;"></span>
                </label>            
            </div>

            <div class="col-md-4 text-right">
                <button style="margin-bottom: 10px" name="delete_all" id="delete_all" class="btn btn-danger text-right">    
                    Delete All Selected
                </button>
            </div>
        </div>
        
      
      <div class="row">
        <div class="col-md-8 col-sm-6">
        
          <div id="myList" class="product-add">
          <?php foreach ($data as $customer_records){
            ?>
                <div class="card p-0 pageB single_product">    
                    <div class="card-body srchdv">

                        <!-- <input type="checkbox" class="delete_checkbox" value="<?php echo $customer_records['id']; ?>"> -->

                        <label class="checkbox_parent">
                            <input type="checkbox" class="delete_checkbox" value="<?php echo $customer_records['id']; ?>">
                            <span class="checkmark"></span>
                        </label>

                        <div class="row p-9">
                            <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">                              
                                <div class="col-md-12 m-l-10">
                                    <p> 
                                        Part Number: <strong><?php echo $customer_records['part_number']; ?></strong><br>
                                        Manufacturer: <strong><?php echo $customer_records['manufacturer_name']; ?></strong><br>
                                        Lifecycle Status: <strong><?php echo $customer_records['licycle_status']; ?></strong><br>
                                        Lead Time:  <strong><?php echo $customer_records['lead_time']; ?></strong><br>
                                        Country of Origin: <strong><?php echo $customer_records['country']; ?></strong><br>
                                        Description: <strong> <?php echo $customer_records['description']; ?></strong><br>
                                 
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                              <div class="row">
                                <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                  <div class="row">

                                    <div class="col-xl-12">
                                      <p>
                                         Website Stock Qty Brand New: <strong><?php echo $customer_records['qty_brand_new']; ?></strong><br>
                                  Website Stock Qty New Surplus: <strong><?php echo $customer_records['qty_new_surplus']; ?></strong><br>
                                        
                                      Website Stock Qty Pre-owned:<strong><?php echo $customer_records['qty_pre_owned']; ?></strong><br>
                                      Total Qty:  <strong><?php echo $customer_records['total_qty']; ?></strong><br>
                                       
                                       BRAND NEW RRP.: <strong><?php echo $customer_records['brand_new_rrp']; ?></strong><br>
                                       Web Price: <strong><i class="fas fa-pound-sign"></i> <?php echo $customer_records['web_price']; ?></strong><br>
                                       
                      
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-xl-2">
                                  <div class="test" id="menu1" data-toggle="dropdown"></div>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_product_edit(<?php echo $customer_records['id']; ?>)">
                                      <li role="presentation">Edit</li>
                                    </a>
                                    <a href="<?php echo base_url('admin/product/delete/'.$customer_records['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">
                                      <li role="presentation">Delete</li>
                                    </a>
                                  </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

          <?php } ?> 

          <input type="hidden" id="next_content" value="11">
        </div>
        <div class="text-center mt-2">
          <button type="button" id="load" class="btn btn-secondary"><i class="mdi mdi-reload"></i> Load More</button>
        </div>
          <div class="row" style="text-align: right;">

           <div class="paginate wrapper text-center"><!-- The "wrapper" is just a comestic addition. You don't need this for the pagination to work. -->
          <!-- <ul class="pagination" id="pagination" ></ul> -->
        </div> 

        </div>


        </div>

        
        
     

            <div class="col-md-4 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <h6>Search Filter</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="form-group">
                    <select id="adv_sort_by" name="" class="form-control adv-common-filter">
                    <option value="">Sort By</option>
                    <option value="&column=part_number&sort=ASC" <?= ($order=='product_part_number_ASC')?'selected':''?> >Part number A-Z</option>
                    <option value="&column=part_number&sort=DESC" <?= ($order=='product_part_number_DESC')?'selected':''?>>Part number Z-A</option>
                    <option value="&column=manufacturer_name&sort=ASC" <?= ($order=='product_manufacturer_name_ASC')?'selected':''?>>Manufacturer A-Z</option>
                    <option value="&column=manufacturer_name&sort=DESC" <?= ($order=='product_manufacturer_name_DESC')?'selected':''?>>Manufacturer Z-A</option>
                    <option value="&column=brand_new_rrp&sort=ASC" <?= ($order=='product_brand_new_rrp_ASC')?'selected':''?>>RRP (Lowest to Highest)</option>
                    <option value="&column=brand_new_rrp&sort=DESC" <?= ($order=='product_brand_new_rrp_DESC')?'selected':''?>>RRP (Highest to Lowest)</option>
                    <option value="&column=web_price&sort=ASC" <?= ($order=='product_web_price_ASC')?'selected':''?>>Web Price (Lowest to Highest)</option>
                    <option value="&column=web_price&sort=DESC" <?= ($order=='product_web_price_DESC')?'selected':''?>>Web Price (Highest to Lowest)</option>
                    <option value="&column=total_qty&sort=ASC" <?= ($order=='product_total_qty_ASC')?'selected':''?>>Part Quantity (Lowest to Highest)</option>
                    <option value="&column=total_qty&sort=DESC" <?= ($order=='product_total_qty_DESC')?'selected':''?>>Part Quantity (Highest to Lowest)</option>
                  </select>
                </div>


                  <?php /*  <div class="form-group">
                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                        <option value="">Parts Condition </option>
                        <option value="new">New</option>
                       <option value="old">Old</option>
                        <option value="Factory Sealed">Factory Sealed</option>
                        <option value="Open Box">Open Box</option>
                        <option value="Used Box">Used Box</option>
                        <option value="Exchange">Exchange</option>
                        <option value="Repair">Repair</option>

                      </select>
                    </div>

                    <div class="form-group">
                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                        <option>Select Supplier</option>
                        <?php foreach($supplier as $dataa){?> 
                          
                         <option value="<?php echo base_url('admin/product/all_product_list')?>?table=product&column=total_qty&sort=ASC"><?php echo $dataa['company_name']; ?></option>

                       <?php } ?>

                   
                        
                      </select>
                    </div> */ ?>

                    <div class="form-group">
                   
                           <select name="manufacturer_name" class="form-control adv-common-filter" id="manufacturer_name">
                            <option value="">Select Manufacturer</option>
                            <?php foreach ($manufacturer as $manufacturer){ ?>
                            <option value="&manufacturerby=<?php echo str_replace(' ', '_',$manufacturer['manufacturer']); ?>" <?= ($manufacturerby==str_replace(' ', '_',$manufacturer['manufacturer']))?'selected':'' ?>><?php echo $manufacturer['manufacturer']; ?></option>
                            <?php } ?>
                          </select>
                    </div>      
                     <div class="form-group">
                      <?php $countries = $this->common_model->select('country'); ?>
                        <select id="country_name" name="ddlCreditCardType" class="form-control adv-common-filter">
                          <option value="">Region/Country Select</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="&country=<?= str_replace(' ', '_',$country['name']) ?>" <?= ($countryid== str_replace(' ', '_',$country['name']))?'selected':'' ?>><?= $country['name'] ?></option>
                          <?php endforeach; ?>
                        </select>

                      </div>
                    

                  </div>
                </div>
              </div>

              
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <div class="button-items">
                    
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Product</button>

                    </div>
                    
                  </div>
                </div>
              </div>

               <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <div class="button-items">
                    <?php $this->load->helper('form'); ?>
                    <?php echo form_open(base_url() . 'admin/product/importdata' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
                    <div class="form-group">
                      <input type="file" name="file"  class="form-control" style="background: none;padding: 0;margin-top: 15px;">
                    </div>
                      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius">Import CSV</button>
                    <?php echo form_close();?>
                    <div class="download-sample text-center">
                      <a download class="btn btn-link" href="<?= base_url() ?>uploads/sample/sampleproduct.csv">Download Sample CSV</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>



          </div> 

        
       
      </div>
    </div>


  </div>
</div>
</div>

<div class="modal fade bs-example-modal-lg" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">ADD NEW PRODUCT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                  <!-- <div class="alert alert-info" style="display: none;" id="show_error_message"></div> -->

                 <?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/product/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                    <div class="row">
                        <div class="col-md-6">
                          
                            <label>Upload Image:</label><br>
                            <input type="file" name="product_image" id="fileToUpload">
                         
                        </div>
                        <div class="col-md-6">
                          <label>Part Number:</label>
                          <input type="text" name="part_number" class="form-control" placeholder="" required />
                        </div>

                      </div><br>

                      <div class="row">
                        <div class="col-md-4">
                           <?php $manufacturer=$this->common_model->get_all_manufacturer(); ?>
                          <label>Manufacturer:</label>
                           <select name="manufacturer_name" class="form-control" required>
                            <option value="">Select Manufacturer</option>
                            <?php foreach ($manufacturer as $manufacturer){ ?>
                            <option value="<?php echo $manufacturer['manufacturer']; ?>"><?php echo $manufacturer['manufacturer']; ?></option>
                            <?php } ?>
                          </select>
                        </div>

                        <div class="col-md-4">
                          <label>Product Type:</label>
                          <div class="form-group">
                              <select name="type" class="form-control">
                                <option value="">Select Product Type</option>
                                <option value="Type TBC">Type TBC</option>
                                <option value="HMI Operator Displays">HMI's & Operator Displays</option>
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
                          <input type="text" name="range"  class="form-control" placeholder="" />
                        </div>

                      </div><br>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Further Tech Info:</label>
                        <textarea type="text" name="tech_info" class="form-control"  placeholder="" style="height: 100px;" ></textarea>

                        </div>

                        <div class="col-md-4">
                          <label>Description:</label>
                        <textarea type="text" name="description" class="form-control"  placeholder="" style="height: 100px;" required></textarea>

                        </div>

                         <div class="col-md-4">
                          <label>Internal Part Notes:</label>
                        <textarea type="text" name="internal_part_notes" class="form-control"  placeholder="" style="height: 100px;" ></textarea>

                        </div>

                      </div><br> 

                      <div class="row">
                       

                         <div class="col-md-4">
                          <label>Lifecycle Status:</label>
                        <div class="form-group">
                              <select name="licycle_status" class="form-control">
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
                        <input type="text" name="lifecycle_date" class="form-control datepicker"  placeholder="" >

                        </div>
                      </div><br>    

                      <label>Dimmension(Length:width:Height)</label>
                      <div class="row">
                        
                        <div class="col-md-4">
                          <input type="text" name="length" class="form-control" placeholder="length (MM)">
                        </div>  
                        <div class="col-md-4">
                         <input type="text" name="width" class="form-control" placeholder="width (MM)">
                       </div>
                       <div class="col-md-4">
                         <input type="text" name="height" class="form-control" placeholder="height (MM)">
                       </div>
                        </div><br>

                        <div class="row">
                        <div class="col-md-4">
                          <label>Weight Kg</label>
                         <input type="text" class="form-control" name="weight_kg">

                        </div>

                        <div class="col-md-4">
                          <label>Weight lb</label>
                         <input type="text" class="form-control" name="weight_lb">
                       </div>

                         <div class="col-md-4">
                         <?php $countries = $this->common_model->select('country'); ?>
                          <label>Country of Origin</label>
                          <select name="country" class="form-control" required>
                          <option value="#">Select Country</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="<?= $country['name'] ?>"><?= $country['name'] ?></option>
                          <?php endforeach; ?>
                        </select>

                        </div>

                        </div> 
                     <br>

                      <div class="row">
                        <div class="col-md-3">
                          <label>Stock Qty Brand New</label>
                         <input type="text" class="form-control track-one" name="qty_brand_new">

                        </div>

                        <div class="col-md-3">
                          <label>Stock Qty New Surplus</label>
                         <input type="text" class="form-control track-one" name="qty_new_surplus">

                        </div>

                        <div class="col-md-3">
                          <label>Stock Qty Pre-owned</label>
                         <input type="text" class="form-control track-one" name="qty_pre_owned">

                        </div>
                        <div class="col-md-3">
                          <label>Total Qty</label>
                         <input type="text" class="form-control track-total" name="total_qty">

                        </div>
                      </div><br> 

                      <div class="row">
                        

                        <div class="col-md-4">
                          <label>Lead Time</label>
                          <div class="form-group">
                              <select name="lead_time" class="form-control">
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
                         <input type="text" class="form-control" name="export_comm_code">

                        </div>

                        <div class="col-md-4">
                          <label>BRAND NEW RRP.</label>
                         <input type="text" class="form-control" name="brand_new_rrp">

                        </div>

                        
                      </div><br>


                      <div class="row">
                        

                        

                        <div class="col-md-4">
                          <label>Web Price</label>
                         <input type="text" class="form-control" name="web_price">

                        </div>

                         <div class="col-md-4">
                          <label>Data Sheet/Info</label>
                         <input type="file" name="date_sheet_info" id="fileToUpload">

                        </div>
                      </div><br>

                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Cancel</button>
                            
                           
                        </div>
                        <div class="col-md-3">
                            
                            <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Save</button>
                          
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>
                  <?php echo form_close();?>
                </div>
             

        </div>
    </div><!-- /.modal-content -->
</div>
</div><!-- /.modal-dialog -->


<div class="modal fade bs-example-modal-lgedit" tabindex="-1" id="editform" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      
<div class="modal-dialog modal-lg">
  <div class="modal-content" id="product-edit">
  </div>
</div>

</div><!-- /.modal-dialog -->

<script>
  function showData() {
     document.getElementById("myhideone").style.display="block";
  }

  function hideData() {
     document.getElementById("myhideone").style.display="none";
  }

</script>

<script type="text/javascript">

  function get_supplier_val(class_id) {

    $.ajax({
          url: '<?php echo base_url();?>admin/product/ajax_get_supplier_details/' + class_id ,
          success: function(response)
          {
              jQuery('#supplier_contact').html(response);
          }
    });
  }

  function get_product_edit(id) {
    $.ajax({
        url: '<?php echo base_url();?>admin/product/update/' + id ,
        success: function(response)
        {
            jQuery('#product-edit').html(response);
            //alert(response);
        }
    });
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('body').on('change','.adv-common-filter' ,function(){
          var url="<?php echo base_url('admin/product/all_product_list')?>?table=product";
          if($('#adv_sort_by').val())
           url+=$('#adv_sort_by').val();
          if($('#manufacturer_name').val())
          url+=$('#manufacturer_name').val();
          if($('#manufacturer_name').val())
          url+=$('#manufacturer_name').val();
          if($('#country_name').val())
           url+=$('#country_name').val();
          window.location.href = url;
      }); 
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myList .sellerlistbgclr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<script>
    $('.form-group').on('input','.prc',function(){
        var totalSum = 0;
        $('.form-group .prc').each(function(){
            var inputVal = $(this).val();
            if($.isNumeric(inputVal)){
                totalSum += parseFloat(inputVal);
                
            }
        });
        $('#result').val(totalSum);
       
    });

    $(document).on('blur','.track-one',function(){
        var totalSum = 0;
        $('.track-one').each(function(){
            var inputVal = $(this).val();
            if($.isNumeric(inputVal)){
                totalSum += parseFloat(inputVal);
                
            }
        });
        $('.track-total').val(totalSum);
    });
</script>

<script type="text/javascript">
  $(function(){
    
    $('#result').on('input', function() {
      calculate();
    });
    $('#profit').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#result').val()); 
        var pEarned = parseInt($('#profit').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/100) * pPos).toFixed(3);

           finalperc = +pPos + +perc;
           }        
        $('#sell_cost').val(finalperc);
    }
});
</script>
<script>
  function showData() {
     document.getElementById("myhideone").style.display="block";
  }

  function hideData() {
     document.getElementById("myhideone").style.display="none";
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .srchdv").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script type="text/javascript" src="https://montrosetownsend.co.uk/assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="https://montrosetownsend.co.uk/assets/js/jquery.simplePagination.js"></script>

<script>
    jQuery(function ($) {

        var items = $(".pageB");
        var numItems = items.length;
        var perPage = 8;
        //   $("#total_result").html(numItems);
        // only show the first 2 (or "first per_page") items initially
        items.slice(perPage).hide();

        // now setup pagination
        $(".pagination").pagination({

            items: numItems,
            itemsOnPage: perPage,
            cssStyle: "light-theme",

            onPageClick: function (pageNumber) { // this is where the magic happens

                // someone changed page, lets hide/show trs appropriately
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;

                items.hide() // first hide everything, then show for the new page
                        .slice(showFrom, showTo).show();
            }

        });

    });

</script>

<script type="text/javascript">

  $(document).ready(function(){

    $("#load").click(function(){
      load_more();
    });
  });

  function load_more()  {
    var val = $("#next_content").val();
    
      $.ajax({
      type: 'get',
      url: "<?php echo base_url(); ?>admin/product/loadMoreProduct",
      data: {
        page:val
      },
      success: function (response) {
        var content = $(".product-add").append(response);
        $("#next_content").val(Number(val)+10);
      }
      });
  }
</script>
<style type="text/css">
  .pagination_container
  {
    margin-bottom: 50px;
  }

  .pagination_container .pagination
  {
    font-size: 13px;
    font-weight: bold;
    float: right;
  }  

  .pagination>li>a:hover
  {
    z-index: 2;
    color: #fff !important;
    background-color: #222831 !important;
    border-color: #ddd;
  } 
  .pagination>li>a
  {
    color: #000 !important;
  }
  .pagination>li>a, .pagination>li>span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #ffffff;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd;
  }
  .tAl {
  text-align: left !important;
  }

  .pagination>.active>span {
      background-color: #222831 !important;
      border-color: #393e46 !important;
  }

  .clr {
      background: #222831 !important;
      border-color: #222831 !important;
  }
  .modal .form-control {
      font-size: 14px;
      color: #ffffff;
      background: #111418;
      border-color: rgb(17, 20, 24);
      border-radius: 10px !important;
  }

      /* start modal*/
  .modal .modal-content .modal-header, .modal .modal-content .modal-footer {
      border-color: #222831;
  }

  .modal .modal-content {
      background: #393e46;
      border-color: #393e46;
  }
  .modal-content {
      border-radius: .0rem;
  }

  /*end modal*/
    img {
    border-radius: 50%;
  }
    h1 {
      margin: 10px 0;
      font-family: "Open sans";
      font-weight: normal;
  }
    .infoicon{
         margin-left: 636px;
      color: #9E9E9E;
      position: absolute;
      margin-top: -32px;
    }
    .dropdown-menu li:hover {
      background: #2f89fc;
      color: #2f89fc;
  }
    .button-label {
      display: inline-block;
      padding: 0.3em 1em;
      margin: 0.1em;
      cursor: pointer;
      color: #ffff;
      background: #222832;
      transition: 0.3s;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }
  .btn-primary:hover{
      background: #2f89fc !important;
      color: #fff !important;
      border: 1px solid #2f89fc !important;
  }
  .button-label:hover {
      background: #2f89fc !important;
      color: #fff;
  }

  .btn-primary {
      background-color: #222831 !important;
      border: 1px solid #222831 !important;
  }
  .btn-primary:hover{
      background: #2f89fc !important;
      color: #fff !important;
      border: 1px solid #2f89fc !important;
  }
  .btn-primary.focus, .btn-primary:focus, .btn-outline-primary.focus, .btn-outline-primary:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 2px rgba(98, 110, 212, 0.3);
      box-shadow: 0 0 0 2px rgb(47, 137, 252);
      background: rgb(47, 137, 252) !important;
  }
  .btn-secondary:hover {
      color: #fff;
      background-color: #f58b54 !important;
      border-color: #f58b54 !important;
  }
  .btn {
      border-radius: 3px;
      font-size: 14px;
      padding: 0px;
      padding: 10px;
  }
  .m-l-10{
    margin-left: 10px;
  }


  .removeRow{
    background-color: #FF0000;
    color: #ffffff;
  }


</style>


<script type="text/javascript">
    $(document).ready(function(){

        // check all products at a time
        $('#delete_all_products').click(function(){

            if($(this).prop("checked") == true){
                
                $(".delete_checkbox[type='checkbox']").prop('checked', true);
            }else{

                $(".delete_checkbox[type='checkbox']").prop('checked', false);
            }

        });


        $('#delete_all').click(function(){

            if(confirm("Are you sure you want to delete?")){

                var favorite = [];

                $.each($(".delete_checkbox:checked"), function(){            
                    favorite.push($(this).val());
                });

                //console.log(favorite);
                
                $.ajax({
                    url : "<?= base_url(); ?>admin/product/delete_all",
                    method : "POST",
                    data : { 'checkbox_value' : favorite, '<?= $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' },
                    success : function(data)
                    {
                        $(favorite).each(function(i, l){

                            $(".delete_checkbox[value='"+l+"']").closest('.single_product').remove();
                            
                        });      
                    }
                });

            }
            else{
                return false;
            }
             
        });
    });
</script>