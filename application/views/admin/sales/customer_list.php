
<style type="text/css">
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
    /*color: #2f89fc;*/
    color: #fff;
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
#yes-button:checked + .button-label {
    background: #c;
    color: #fff;
}
#yes-button:checked + .button-label:hover {
    background: #2f89fc !important;
    color: #fff !important;
}
#no-button:checked + .button-label {
    background: #2f89fc !important;
    color: #fff;
}
#no-button:checked + .button-label:hover {
    background: #2f89fc !important;
    color: #fff;
}
#maybe-button:checked + .button-label {
    background: #2f89fc !important;
    color: #fff;
}
#maybe-button:checked + .button-label:hover {
    background: #2f89fc !important;
    color: #fff;
}
#van-button:checked + .button-label {
   background: #2f89fc !important;
    color: #fff;
}
#van-button:checked + .button-label:hover {
    background: #2f89fc !important;
    color: #fff;
}
#van-button2:checked + .button-label {
   background: #2f89fc !important;
    color: #fff;
}
#van-button2:checked + .button-label:hover {
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

</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Sales Database &nbsp > &nbsp Customer List</b> &nbsp > &nbsp Suspects
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->


      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/customer_list"){ ?>
              <a class="nav-link suspect" data-toggle="tab" href="<?php echo base_url(); ?>admin/sales/customer_list" role="tab">
                 <?php }else{ ?>
            <a class="nav-link" href="<?php echo base_url(); ?>admin/sales/customer_list">
            <?php } ?>
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">
                Suspects(<?php  echo $suspest; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/prospects"){ ?>
              <a class="nav-link prospect" data-toggle="tab" href="<?php echo base_url(); ?>admin/sales/prospects" role="tab">
                 <?php }else{ ?>
              <a class="nav-link" href="<?php echo base_url(); ?>admin/sales/prospects">
            <?php } ?>
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">Prospects(<?php  echo $prospect; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/account"){ ?>
              <a class="nav-link account" data-toggle="tab" href="<?php echo base_url(); ?>admin/sales/account" role="tab">
                 <?php }else{ ?>
              <a class="nav-link" href="<?php echo base_url(); ?>admin/sales/account">
            <?php } ?>
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Account(<?php  echo $partner; ?>)</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active chathistry" data-toggle="tab" href="#settings-1" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i>&nbspChat History</span>    
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
                <div class="col-xl-4 col-md-4 col-sm-6">
                  <h4>All Suspects(908,777)</h4>
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

           <?php $i = "1"; foreach ($customer_records as $customer_records){
            if($customer_records['suspus'] == 0){
            ?>

          <div class="card p-0">

              <?php if($customer_records['mark_status'] ==0){ ?>
       <div class="card-body srchdv">
      <?php } ?>
      <?php if($customer_records['mark_status'] ==1){ ?>
         <div class="card-body srchdv" style="border-style: solid; border-color: #ff0000">
      <?php } ?>
              <div class="row p-9" >
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <img src="<?php echo base_url();?>obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                  <div class="col-md-12 m-l-30">
                    <p> 
                      Company  : <strong style="font-size: 20px;"><a href="<?php echo base_url('admin/sales/edit_customer_records/'.$customer_records['session_id']) ?>"><?php echo $customer_records['company_name']; ?></strong><br>
                      Industry : <strong><?php echo $customer_records['industry_sector']; ?></strong><br>
                      Location :  <strong>Derbyshire</strong><br>
                      Total Spend :  <strong><i class="fas fa-pound-sign"></i> 0 (0% anum)</strong><br>
                      Payment Terms :  <strong><?php echo $customer_records['payment_terms']; ?></strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-xl-12">
                          <p>
                            Manufacturer : <strong><?php $myarr = $customer_records['manufacturer_use'];
                             $showarr = explode(",",$myarr); if(isset($showarr[0])){ echo $showarr[0].','; } ?> <?php if(isset($showarr[1])){ echo $showarr[1].','; } ?> <?php if(isset($showarr[2])){ echo $showarr[2].','; } ?><a href="javascript:void(0)" id="myshow" onclick="showData()"> <span style="color: #166de4;">more</span></a>
                              <span id="myhideone" style="display: none;">
                              <?php if(isset($showarr[3])){ echo $showarr[3].','; } ?> <?php if(isset($showarr[4])){ echo $showarr[4].','; } ?> <?php if(isset($showarr[5])){ echo $showarr[5].','; } ?><a href="javascript:void(0)" id="myhide"> <span style="color: #166de4;" onclick="hideData()">Less</span></a>
                            </span>


                           </strong><br>
                            Requirement : <strong><?php echo $customer_records['estimated_frequency']; ?></strong><br>
                            Pricing : <strong>Yes</strong><br>
                            Spend :  <strong><?php echo $customer_records['estimated_spend']; ?></strong><br>
                            Vendor Information : <strong><?php echo $customer_records['main_switchboard_number']; ?></strong><br>
                            <span style="color: green;">Enquiry Active</span> (0) 0 Days ago <span style="color:#ff6961">Order Doormant</span> (0) 0 months ago<br>
                            <!-- <i class="fas fa-info-circle fa-3x infoicon"></i> -->
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <a role="menuitem" tabindex="-1" href="<?php echo base_url('admin/sales/edit_customer_records/'.$customer_records['session_id']) ?>">
                          <li role="presentation">Edit</li>
                        </a>
                        <a href="<?php echo base_url('admin/sales/prospectstatus/'.$customer_records['id']) ?>">
                          <li role="presentation">Prospect</li>
                        </a>
                        <a href="<?php echo base_url('admin/sales/partnerstatus/'.$customer_records['id']) ?>">
                          <li role="presentation">Account</li>
                        </a>
                        <a href="<?php echo base_url('admin/sales/markstatusone/'.$customer_records['id']) ?>">
                          <li role="presentation">
                            <?php if($customer_records['mark_status'] ==0){ ?>Mark Inactive <?php }else{ ?> Mark Active<?php } ?>
                          </li>
                        </a>
                        <a href="<?php echo base_url('admin/sales/delete_customer_list/'.$customer_records['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">
                          <li role="presentation">Delete</li>
                        </a>
                      </ul>
                    </div>

                   
                  </div>
                </div>
              </div>      
            </div>
          </div>

          <?php $i++; } } ?>
          
            </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <h6>Search Filter</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6 p-0">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" style="background: #36394c"><i class="ti-email"></i> 
                        New Companies</button>
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
                      <?php $countries = $this->common_model->select('country'); ?>
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Region/Country Select</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                          <?php endforeach; ?>
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
                    <h6>Search Filter 2</h6>
                  </div>

                 
        <div class="button-wrap">
          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button"/>
          <label class="button-label" for="yes-button" style="width: 100%;">
            <h1>Enquiry Active 76% 196</h1>
          </label>
          </div>
          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
          <label class="button-label" for="no-button" style="width: 100%;">
            <h1>Order Active 76% 196</h1>
          </label>
          </div>
         
          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
          <label class="button-label" for="van-button" style="width: 100%;">
            <h1>Current Year Spend <i class="fas fa-pound-sign"></i> 500,00</h1>
          </label>
          </div>

          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
          <label class="button-label" for="van-button" style="width: 100%;">
            <h1>Enquiry Doormant 24% 61</h1>
          </label>
          </div>

          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
          <label class="button-label" for="van-button" style="width: 100%;">
            <h1>Order Doormant 24% 61</h1>
          </label>
          </div>

          <div class="form-group text-center">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
          <label class="button-label" for="van-button" style="width: 100%;">
            <h1>Marketed in last month 24% 61</h1>
          </label>
          </div>
         
        
      </div>


                
                </div>
              </div>



              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="button-items">
                      <a href="<?php echo base_url(); ?>admin/sales/customer_records" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius"><i class="mdi mdi-cellphone-text"></i>Add New Company Records</a>

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
