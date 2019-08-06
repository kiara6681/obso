
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Supplier Database</b> &nbsp > &nbsp Supplier List</h3>
          </div>
        </div>
      </div>
      <!-- end row -->


      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/supplier_list"){ ?>
              <a class="nav-link suspect" data-toggle="tab" href="<?php echo base_url(); ?>admin/supplier/supplier_list" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/supplier_list">
            <?php } ?>

                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">Potentials Supplier(<?php  echo $suspest; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/prospects"){ ?>
              <a class="nav-link" data-toggle="tab" href="<?php echo base_url(); ?>admin/supplier/prospects" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/prospects">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">Supplier(<?php  echo $prospect; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/partner"){ ?>
              <a class="nav-link" data-toggle="tab" href="<?php echo base_url(); ?>admin/supplier/partner" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/partner">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Partner Supplier(<?php  echo $partner; ?>)</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/chat_history"){ ?>
              <a class="nav-link" data-toggle="tab" href="<?php echo base_url(); ?>admin/supplier/chat_history" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/chat_history">
            <?php } ?>

              
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Chat History</span>    
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
                  <h4>Potentials Supplier 908,777</h4>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div> 


        <div class="row">
          <div class="col-xl-8 col-md-8 col-sm-6">
            <div id="myList">
             <?php $i = "1"; foreach ($supplier_records as $supplier_records){
            if($supplier_records['suspus'] == 0){
            ?>

            <div class="card p-0 supbgg">

              <?php if($supplier_records['mark_status'] ==1){ ?>
       <div class="card-body srchdv" style="border-style: solid; border-color: #ff0000">
      <?php } ?>
      <?php if($supplier_records['mark_status'] ==0){ ?>
         <div class="card-body srchdv">
      <?php } ?>

            <div class="card-body">
              <div class="row p-9">
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <img src="<?php echo base_url();?>obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                  <div class="col-md-12 m-l-30">
                     <p> 
                      Company  : <strong style="font-size: 20px;"><a style="color: #000 !important;" href="<?php echo base_url('admin/supplier/edit_supplier_records/'.$supplier_records['session_id']) ?>"><?php echo $supplier_records['company_name']; ?></a></strong><br>
                      Industry : <strong><?php echo $supplier_records['industry_sector']; ?></strong><br>
                      Location :  <strong>Derbyshire</strong><br>
                      Total Spend :  <strong>$0 (0% anum)</strong><br>
                      Payment Terms :  <strong><?php echo $supplier_records['payment_terms']; ?></strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-8 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-xl-12">
                          <p>
                            Manufacturer : <strong><?php echo $supplier_records['manufacturer_use']; ?><a href=""> <span style="color: #166de4;">more</span></a></strong><br>
                            Requirement : <strong><?php echo $supplier_records['estimated_frequency']; ?></strong><br>
                            Pricing : <strong>Yes</strong><br>
                            Spend :  <strong><?php echo $supplier_records['estimated_spend']; ?></strong><br>
                            Vendor Information : <strong><?//php echo $supplier_records['main_switchboard_number']; ?></strong><br>
                            <span style="color: green;">Enquiry Active</span> (0) 0 Days ago <span style="color:#ff6961">Order Doormant</span> (0) 0 months ago<br>
                            <!-- <i class="fas fa-info-circle fa-3x infoicon"></i> -->
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-2 p-top12">
                          <div id="circle" class="circle-clr" style="background: rgb(123, 183, 86) !important;color: #000 !important;">4.8</div>
                          
                        </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('admin/supplier/edit_supplier_records/'.$supplier_records['session_id']) ?>">Edit</a></li>
                        <!-- <li role="presentation"><a href="#">Copy</a></li> -->
                        <li role="presentation"><a href="<?php echo base_url('admin/supplier/prospectstatus/'.$supplier_records['id']) ?>">Supplier</a></li>
                        <li role="presentation"><a href="<?php echo base_url('admin/supplier/partnerstatus/'.$supplier_records['id']) ?>">Partner Supplier</a></li>
                        <li role="presentation"><a href="<?php echo base_url('admin/supplier/markstatusone/'.$supplier_records['id']) ?>"><?php if($supplier_records['mark_status'] ==0){ ?>Mark In Active <?php }else{ ?> Mark Active<?php } ?></a></li>
                        <li role="presentation"><a href="<?php echo base_url('admin/supplier/delete_supplier_list/'.$supplier_records['id']) ?>" onClick="return doconfirm();" role="menuitem" tabindex="-1">Delete</a></li>
                      </ul>
                    </div>

                     <div class="col-md-12 text-right">
                      <a href="<?php echo base_url('admin/supplier/edit_supplier_records/'.$supplier_records['session_id']) ?>">
                      <i class="fas fa-info-circle fa-3x infoicon"></i></a>
                    </div>
                   
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
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
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
            <h1>Current Year Spend $500,00</h1>
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
                    <div class="button-items ">
                      <a href="<?php echo base_url();?>admin/supplier/supplier_records" class="btn btn-primary btn-lg btn-block waves-effect waves-light"><i class="mdi mdi-cellphone-text"></i>Add New Supplier Record</a>

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
<script type="text/javascript">

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(95,50,40,0,2*Math.PI);
ctx.stroke();

</script>



<style type="text/css">
/*Virendra New*/
    h1 {
    margin: 10px 0;
    font-family: "Open sans";
    font-weight: normal;
}
  .infoicon{
     background: rgb(170, 170, 170) !important;
    color: #393e46 !important;
    position: absolute;
    margin-top: -47px;
    margin-left: -63px;
  }
  .supbgg{
    background: #aaaaaa !important;
    color: #000;
  }
 #circle {
      width: 40px;
      height: 40px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 25px;
      background: #ff6961;
    }
    .circle-clr{
      text-align: center;
      padding: 8px;
      color: black;
      font-weight: bold;
    }

.btn-primary:hover{
      background-color: #007bff !important;
    border: 1px solid #007bff !important;
}
.button-label:hover {
    background: #007bff;
    color: #ffff;
}
dropdown-menu li a {
    color: #000 !important;
    text-decoration: none;
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

#yes-button:checked + .button-label {
    background: #3936df;
    color: #efefef;
}
#no-button:checked + .button-label:hover {
    background: #3936df;
    color: #e2e2e2;
}
.ipt-rds{
      border-radius: 15px !important;
}
.cntry-flag{
  border-radius: 50%;
  width: 25px;
  position: absolute;
      margin: 5px;
}

.border-rgt{
      border-right: 1px solid #252736;
}
p strong{
  font-size: 16px;
  font-weight: bold;
}
p small strong{
  font-size: 12px;
  font-weight: bold;
}
.test:after {
    content: '\2807';
    font-size: 25px;
    position: absolute;
    margin-left: 6px;
    cursor: pointer;
}
.dropdown-menu.show {
    display: block;
    position: absolute;
    will-change: transform;
    top: 25px !important;
    padding: 10px !important;
    left: -134px !important;
    transform: translate3d(0px, 0px, 0px);
}
.p-l-30{
      padding-left: 30px;
}
.m-l-30 {
    margin-left: 30px;
}
.mr-20{
      margin-top: 20px;
}
.p-top12{
      padding-top: 12px;
}

/*End Virendra*/

.dropdown-menu li:hover {
    background: #3936df;
}
  .btn-secondary:hover {
    color: #fff;
    background-color: #084961;
    border-color: #084961;
}
.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #084961;
    border-color: #084961;
}

.dropdown-menu {
    padding: 4px 0;
    font-size: 14px;
    -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    background-color: #a9a9a9;
    border-color: #232932;
    color: #000 !important;
    margin: 0;
}


.btn-primary {
    background-color: #222832 !important;
    border: 1px solid #222832 !important;
}

.text-center form-control{
      color: #f5f5f5 !important;
    background: #084961;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background: #007bff;
}

</style>
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