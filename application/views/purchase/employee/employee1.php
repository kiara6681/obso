<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Employee Database</b> &nbsp > &nbsp Employee List</h3>
          </div>
        </div>
      </div>
      <!-- end row -->


      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/all_employee_list"){ ?>
              <a class="nav-link suspect" data-toggle="tab" href="<?php echo base_url(); ?>admin/employee/all_employee_list" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/employee/all_employee_list">
            <?php } ?>

                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">All Employee (<?//php  echo $suspest; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/prospects"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">New Employee(<?//php  echo $prospect; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/partner"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Top Employee(<?//php  echo $partner; ?>)</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/chat_history"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>

              
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Leaderboards</span>    
              </a>
            </li>
          </ul>
        </div>
      </div>



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
                
              </div>      
            </div>
          </div>
        </div>
      </div> 


     <hr style="margin-bottom: 15px !important;">

      
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div id="myList">
          <?//php foreach ($data as $customer_records){
            ?>
          <div class="card p-0">    
          <div class="card-body srchdv">
              <div class="row p-9">
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  
                  <div class="col-md-12 m-l-30">
                    <p> 
                      Name : <strong style="font-size: 20px;"> <?//php echo $customer_records['product_name'] ?></strong><br>
                      Designation :  <strong><?//php echo $customer_records['part_no'] ?></strong><br>
                      Permission Access :  <strong><?//php echo $customer_records['total_quantity'] ?></strong><br>
                      Id Proof : <strong><?//php echo $customer_records['product_condition'] ?></strong>
                    </p>
                    <p>
                      Employee Id : <strong><?//php echo $customer_records['product_condition'] ?></strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-xl-12">
                          <p>
                            Number : <strong><?//php echo $customer_records['manufacturer_name'] ?></strong><br>
                           Email: <strong> <?//php echo $customer_records['supplier_name'] ?></strong><br>
                           Address :  <strong><?//php echo $customer_records['supplier_contact'] ?></strong><br>
                          
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_product_edit(<?//php echo $customer_records['id']; ?>)">Edit</a></li>
                        <li role="presentation"><a href="<?//php echo base_url('admin/product/delete/'.$customer_records['id']) ?>" onClick="return doconfirm();" role="menuitem" tabindex="-1">Delete</a></li>
                      </ul>
                    </div>
                    </div>
                   <!--  <div class="col-md-12 text-right top33">
                      <a href="">
                      <i class="fas fa-info-circle fa-3x"></i></a>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
          <?//php } ?> 
        </div>
        </div>

   <div class="col-lg-4">
        <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <h6>Search Filter</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="form-group text-center">
                      <div class="button-items">
                     
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">New Employee</button>

                    </div>
                     
                    </div>

                    <div class="form-group">
                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                        <option value="">Only Show</option>
                        <option value="allcustomer">All Customers</option>
                        <option value="singleordercustomer">Single Order customers</option>
                        <option value="repeatcustomer">Repeat customers 2-9</option>
                        <option value="ordercustomer">10-99 Order Customers</option>
                        <option value="hundredordercustomer">100+ Order Customers</option> 
                        <option value="accountcustomer">Account Customers</option>
                        <option value="advancepaymentstatus">Advance pyment Status</option>
                        <option value="neverenquired">Never Enquired</option>
                        <option value="singleenquiryrecords">Single Enquiry Records</option>
                        <option value="repeatenquiryrecords">Repeat Enquiry Records 2-9</option>
                        <option value="enquiryrecords">10-99 Enquiry Records</option>
                        <option value="hundredenquiryrecords">100+ Enquiry Records</option>
                        <option value="singlecontactrecords">Single Contact Records</option>
                        <option value="twoninecontact">Records with 2-9 Contacts</option>
                        <option value="tencontact">Records with 10+ Contacts</option>
                        <option value="overquotetoorder">Companies over 50% Quote to Order</option>
                        <option value="underquotetoorder">Companies under 50% Quote to Order</option>
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                        <option value="">Region/Country Select</option>
                        <option value="AE">All</option>
                        <option value="AE">America (incl.Canada)</option>
                        <option value="AE">LATAM</option>
                        <option value="AE">Europe</option>
                        <option value="AE">Middle East</option>
                        <option value="AE">Asia (incl. Australasia)</option>
                        <option value="AE">USA</option>
                        <option value="AE">Canada</option>
                        <option value="AE">Mexico</option>
                        <option value="AE">Latam (Excl.MEX)</option>
                        <option value="AE">England</option>
                        <option value="AE">Scotland</option>
                        <option value="AE">Ireland</option>
                        <option value="AE">Wales</option>
                        <option value="AE">Germany</option>
                        <option value="AE">Spain & Portugal</option>
                        <option value="AE">France (incl. BENELUX)</option>
                        <option value="AE">Sweden</option>
                        <option value="AE">Denmark</option>
                        <option value="AE">Norway</option>
                        <option value="AE">Etc Etc</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                        <option value="">Sort by</option>
                        <option value="AE">Company Name A-Z</option>
                        <option value="AE">Company Name Z-A</option>
                        <option value="AE">No. of Enquries High to Low</option>
                        <option value="AE">No. of Enquries Low to High</option>
                        <option value="AE">Last Enquiry (earliest to latest)</option>
                        <option value="AE">Last Enquiry( latest to earliest)</option>
                        <option value="AE">No. of Orders High to Low</option>
                        <option value="AE">No. of Orders Low to High</option>
                        <option value="AE">Last Order (earliest to latest)</option>
                        <option value="AE">Last Order( latest to earliest)</option>
                        <option value="AE">GP High to Low</option>
                        <option value="AE">GP Low to High</option>
                        <option value="AE">Account Status Longest First</option>
                        <option value="AE">Account Status Shortest First</option>
                        <option value="AE">County/State A-Z</option>
                        <option value="AE">County/State Z-A</option>
                        <option value="AE">Country A-Z</option>
                        <option value="AE">Country Z-A</option>
                        <option value="AE">Industry A-Z</option>
                        <option value="AE">Industry Z-A</option>
                        <option value="AE">Trader A-Z</option>
                        <option value="AE">Trader Z-A</option>
                        <option value="AE">Number of Contacts High to Low</option>
                        <option value="AE">Number of Contacts Low to High</option>
                        <option value="AE">Last Sales Note (earliest to latest)</option>
                        <option value="AE">Last Sales Note ( latest to earliest)</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

            <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="button-items ">
                      <a href="#" class="btn btn-primary btn-lg btn-block waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="mdi mdi-cellphone-text"></i>Add New Employee</a>

                    </div>
                  </div>
                  </div>
              </div>
    </form>
  </div> 
</div>
</div>
</div>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">ADD NEW EMPLOYEE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                 <?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/employee/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                     <div class="row">
                      <div class="col-md-4">
                        <label>First Name:</label>
                        <input type="text" name="first_name"  class="form-control" placeholder="First Name" required/>
                      </div>

                      <div class="col-md-4">
                        <label>Last Name:</label>
                        <input type="text" name="last_name"  class="form-control" placeholder="Last Name" required/>
                      </div>

                      <div class="col-md-4">
                         <label>Gender:</label>
                        <select name="gender" class="form-control" required>
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
                        <select name="gender" class="form-control" required>
                          <option value="1">Designation 1</option>
                          <option value="2">Designation 2</option>
                          <option value="3">Designation 3</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label>Phone Number:</label>
                        <input type="number" name="phone" class="form-control"  data-parsley-maxlength="15" placeholder="Phone Number" required/>
                      </div>

                      <div class="col-md-4">
                        <label>Contact Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Contact Email" required/>
                      </div>

                      </div> 

                         <br>
                     
                     
                    <div class="row">

                    <div class="col-md-8">
                        <label>Address:</label>
                        <textarea type="text" name="product_details" class="form-control"  placeholder="Product Deatils" style="height: 100px;" required></textarea>
                      </div>
                    <div class="col-md-4">
                         <label>Select Country:</label>
                        <select name="country" class="form-control" required>
                          <option value="1">India</option>
                          <option value="2">USA</option>
                          <option value="3">UK</option>
                        </select>
                      </div>
                    </div>

                    <br>

                 
                
                    
                    <div class="row">
                      <div class="col-md-6">
                        <label>Sales Target:</label>
                        <input type="email" name="email" class="form-control" placeholder="Contact Email" required/>
                      </div>

                      <div class="col-md-6">
                        <label>Permission Access:</label>
                        <select name="product_condition" class="form-control" required>
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
                        <input type="file" name="idproof" id="fileToUpload">
                      </div>

                      <div class="col-md-6">
                        <label>Employee Image:(<small>Please Upload Recent Photo)</small>)</label><br>
                        <input type="file" name="emp_image" id="fileToUpload">
                      </div>
                    </div>
                    <br>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-4"></div>
                       
                        <div class="col-md-4">
                            
                        <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Save</button>
                          
                        </div>
                        <div class="col-md-4"></div>
                        
                    </div>
                  <?php echo form_close();?>
                </div>
             

        </div>
    </div><!-- /.modal-content -->
</div>
</div><!-- /.modal-dialog -->


<div class="modal fade bs-example-modal-lgedit" tabindex="-1" id="editform" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


</div><!-- /.modal-dialog -->

<style type="text/css">

  .top33{
        margin-top: 33px;
  }
  .modal .form-control {
    font-size: 14px;
    color: #ffffff !important;
    background: #1c1f23 !important
    border-color: rgb(34, 40, 49) !important;
    border-radius: 10px !important;
}

</style>