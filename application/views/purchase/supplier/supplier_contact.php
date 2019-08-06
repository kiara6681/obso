<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Supplier Database</b> &nbsp>&nbsp Supplier Contact 
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12">
              <div class="card">
                  <div class="card-body">

                      <div class="row">
                          <div class="col-xl-3 col-md-3 col-sm-3 border-rgt">
                            <i class="ion ion-md-globe earth earth-position"></i>
                            
                              <div class="col-xl-12 col-md-12 col-sm-12" style="margin: 16px;"> 
                                <div class="row">
                                  <div class="col-xl-12">
                                    <h3><input type="text" name="companies" class="form-control addnewcompny" placeholder="Add New Company" style="font-size: 20px;text-align: center;" value="<?php if(isset($_SESSION['company_name'])){ echo $_SESSION['company_name']; }?>"></h3>
                                  </div>
                                  </div>
                                   
                              </div>  
                          </div>

                          <div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
                            <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                  
                            <strong>Supplier Manager: <select name="trader_name" class="form-control record trad">
                                <option value="">Select Supplier</option>
                                <option value="<?php echo $_SESSION['name']; ?>" <?php if(!empty($_SESSION['name'])){ ?> selected='selected' <?php }?>><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; }?></option>
                              </select>
                              </strong><br>
                              
                               <strong>Last Contact date: <?php if(isset($_SESSION['creation_date'])){ echo date('d/m/Y', strtotime($_SESSION['creation_date'])); }?></strong><br>
                               <strong>Linked Suppliers: 0 link companies</strong>
                               
                     </div>  
                          </div>
                          <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                            <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                              <strong> Total spend : <i class="fas fa-pound-sign"></i> 00.0</strong><br>
                              <strong>Gross Profit : <i class="fas fa-pound-sign"></i> 00.0</strong><br>
                              <strong>Invoiced : <i class="fas fa-pound-sign"></i> 00.0</strong>
                            
                          </div>
                      </div>
                          <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                              <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                              <strong>RFQ’s Sent: 00</strong><br>
                              <strong>RFQ’s Received: 00</strong><br>
                             <strong>Supplied Orders: 00</strong>
                            
                        </div>
                          </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 p-10">
                              <div class="row">
                                  <div class="col-xl-9">
                                    <h6>Supplier Score</h6>
                                  </div>
                                  <div class="col-xl-3">
                                    <i class="mdi mdi-shield-check-outline f-size"></i>
                                  </div>
                                  <div class="col-xl-12 col-md-4 col-sm-6" >
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2"/><br>
                                  <span class="blue">100 Reviews</span></div>
                              </div>
                                  

                                 
                          </div>
                        </div>
                  </div>
              </div>
          </div>
       </div>  


       

<div class="cards">
  <div class="card-body">
    <ul class="nav nav-pills nav-justified" role="tablist">
      <li class="nav-item waves-effect waves-light border-rgt">

        <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/supplier_records"){ ?>
            <a class="nav-link " href="#">
            <?php }else{ ?>
            <a class="nav-link" href="#">
            <?php } ?>

        
          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
          <span class="d-none d-sm-block">Record Information</span> 
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
          
          <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/supplier_contact"){ ?>
            <a class="nav-link active" href="<?php echo base_url(); ?>admin/supplier/supplier_contact">
            <?php }else{ ?>
              <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/supplier_contact">
            <?php } ?>
          
          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
          <span class="d-none d-sm-block">Contact Information</span> 
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
          <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
          <span class="d-none d-sm-block">Order History</span>   
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
          <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
          <span class="d-none d-sm-block">Customer Summery</span>   
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
          <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
          <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Chat History</span>    
        </a>
      </li>
    </ul>
  </div>
</div>



<div class="row">
  <div class="col-xl-5 col-md-6 col-sm-6" >
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-6">
            <div class="row">
              <div class="col-xl-7 col-md-4 col-sm-6 m-l-35">
                <h5>Supplier Contact List</h5>
              </div>

              <!-- <div class="col-xl-5 col-md-4 col-sm-6 text-right">
                <button class="btn btn-primary" type="button" aria-haspopup="true" aria-expanded="false">Add New</button>
              </div> -->
            </div>
          </div>
        </div>      
      </div>
      <hr>
      <div class="row p-2">
        <div class="col-xl-12 col-md-4 col-sm-6 ">
          <h3>
            <input type="text" class="form-control" placeholder="Search..">
          </h3>
        </div>
      </div> 

      <div class="row p-2">
        <div class="col-xl-12 col-md-4 col-sm-6">
          <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
            <option value="">Sort By: Newest First</option>
            <option value="AE">ABC</option>
            <option value="VI">ABC</option>
            <option value="MC">ABC</option>
            <option value="DI">ABC</option>
          </select>
        </div>
      </div> 

     <?php $i = "1"; foreach ($data as $supplier_contact){ ?>
        <?php if($supplier_contact['mark_status'] ==1){ ?>
      <div class="form-control sellerlistbgclr" style="border-style: solid; border-color: #ff0000 !important">
      <?php } ?>
      <?php if($supplier_contact['mark_status'] ==0){ ?>
      <div class="form-control sellerlistbgclr">
      <?php } ?>
        <div class="row" class="cpycls">
          <div class="col-md-1">
              
            <?php if ($supplier_contact['gender']=="male") {
                echo "M";
            }elseif ($supplier_contact['gender']=="female") {
                echo "F";
            } ?>  
           </div> 

          <div class="col-md-10 p-0">
            <div class="row">
              <div class="col-md-12 col-xl-12 col-sm-6"><?php echo $supplier_contact['fname']; ?> <?php echo $supplier_contact['lname']; ?> | <?php echo $supplier_contact['department']; ?> | <?php echo $supplier_contact['branch']; ?></div>
          </div><br>
            <strong>DD: <?php echo $supplier_contact['direct_dial']; ?></strong><br>
            <strong><?php echo $supplier_contact['mobile']; ?></strong><br>
            <strong><?php echo $supplier_contact['job_title']; ?></strong><br>
            <strong><?php echo $supplier_contact['email']; ?></strong><br>
            <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
            <strong>17 Enquries 17 Quotes 15 Orders</strong>
          </div>
        
          <div class="col-md-1">
            <div class="test" id="menu1" data-toggle="dropdown"></div>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
              
              <li role="presentation"><a href="javascript:void(0)" onclick="myCopy()">Copy</a></li>

              <li role="presentation"><a href="<?php echo base_url('admin/supplier/markstatus/'.$supplier_contact['id']) ?>"><?php if($supplier_contact['mark_status'] ==0){ ?>Mark In Active <?php }else{ ?> Mark Active<?php } ?></a></li>
              <li role="presentation"><a href="<?php echo base_url('admin/supplier/delete/'.$supplier_contact['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete">Delete</a></li>
            </ul>
            <span class="editt"><a href="<?php echo base_url('admin/supplier/update_supplier_contact/'.$supplier_contact['id']) ?>" data-toggle="tooltip"><i class="mdi mdi-square-edit-outline"></i></a></span>
          </div>
          <br>
        </div>
      </div>
  
 <?php $i++; } ?>
</div>
</div>



  <div class="col-xl-7 col-md-6 col-sm-6">
    <h5>Add Contact Information</h5>
    <div class="row">
      <div class="col-lg-12">
        <form action="<?php echo base_url('admin/supplier/add_supplier_contact'); ?>" method="POST" enctype="multipart/multipart/form-data">
          <input type="hidden" name="session_id" value="<?php if(empty($_SESSION['session_id'])) { echo rand(1000,9999); }else{ echo $_SESSION['session_id']; } ?>">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="fname" class="form-control" placeholder="First Name" required/>
              </div>
              <div class="col-md-6">
                <input type="text" name="lname" class="form-control" placeholder="Last Name" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                 <select name="gender" class="form-control" >
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  
                </select>
            </div>

              <div class="col-md-6">
                <input type="text" name="department" class="form-control" placeholder="Department" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="job_title" class="form-control" placeholder="Job Title" required/>
              </div>
              <div class="col-md-6">
                <input type="text" name="branch" class="form-control" placeholder="Branch" required/>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required/>
              </div>
              <div class="col-md-6">
                <input type="number" name="mobile" class="form-control" placeholder="Mobile" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="number" name="direct_dial" class="form-control" placeholder="Direct Dial" required/>
              </div>
             <!--  <div class="col-md-6">
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required/>
              </div> -->
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <textarea type="text" name="key_personal_info" class="form-control" placeholder="Key Personal Information" style="height: 150px;" required></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 text-center">
                 <h5>Marketing Preferences</h5>

                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-primary">
                          <input type="radio" name="mkt_preferance" value="use_email"> Use Email
                      </label>
                      <label class="btn btn-primary">
                          <input type="radio" name="mkt_preferance" value="use_sms"> Use SMS
                      </label>
                     
                  </div>

              </div>
              <div class="col-md-6 text-center">
                <h5>Contact Status</h5>

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-primary">
                          <input type="radio" name="markstatus" value="0"> Active
                      </label>
                      <label class="btn btn-primary">
                          <input type="radio" name="markstatus" value="0"> Do Not Contact
                      </label>
                      <label class="btn btn-primary">
                          <input type="radio" name="markstatus" value="1"> In-active
                      </label>
                  </div>
              </div>
            </div>   
          </div> 
         
        <div class="card" style="margin-top: 90px;padding:10px !important">
          <div class="card-body">
            <div class="row">
               <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
              <div class="col-xl-6 col-md-6 col-sm-6 text-center">
                <a href="<?php echo base_url();?>admin/sales/customer_records"><button type="button" name="cancel" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button></a>

              </div>
              <div class="col-xl-6 col-md-6 col-sm-6 text-center">
                <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save</button>
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



        


          <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header" style="padding: 0.5rem 1rem !important;    background: #323a4e;">
                  <h5>Add New Enquiry</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text"  class="form-control" required data-parsley-maxlength="6" placeholder="First Name"/>
                      </div>
                      <div class="col-md-4">
                        <input type="text"  class="form-control" required data-parsley-maxlength="6" placeholder="Last Name"/>
                      </div>
                      <div class="col-md-4">
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Gender</option>
                          <option value="AE">Male</option>
                          <option value="VI">Female</option>
                          <option value="OT">Other</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Designation</option>
                          <option value="AE">abc</option>
                          <option value="VI">abc</option>
                          <option value="OT">abc</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <input type="text"  class="form-control" required data-parsley-maxlength="6" placeholder="Phone Number"/>
                      </div>
                      <div class="col-md-4">
                        <input type="text"   class="form-control" required data-parsley-maxlength="6" placeholder="Contact E-mail"/>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-8">
                        <input type="text"  class="form-control" required data-parsley-maxlength="6" placeholder="Address"/> 
                      </div>
                      <div class="col-md-4">
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Select Country</option>
                          <option value="AE">abc</option>
                          <option value="VI">abc</option>
                          <option value="OT">abc</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text"  class="form-control" required data-parsley-maxlength="6" placeholder=""/>
                      </div>
                      <div class="col-md-6">
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Permission access: Sale</option>
                          <option value="AE">abc</option>
                          <option value="VI">abc</option>
                          <option value="OT">abc</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <p><b>Id Prof.: </b>(please upload passport or driving licence or NID)</p>
                        <button type="button" class="form-control">Upload</button> 
                      </div>
                      <div class="col-md-6">
                        <p><b>Employee Image :</b>(please upload recent photo)</p>
                        <button type="button" class="form-control">Upload Image</button>
                      </div>
                    </div>
                    <br><br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <button type="button" class="form-control">Send</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->


<!-- jQuery  -->
        <!-- <script src="<?php echo base_url();?>obso/assets/js/jquery.min.js"></script> -->
        <script src="<?php echo base_url();?>obso/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/waves.min.js"></script>

        <!-- Bootstrap rating js -->
        <script src="<?php echo base_url();?>obso/assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/pages/rating-init.js"></script>

        <!-- App js -->
        <!-- <script src="<?php echo base_url();?>obso/assets/js/app.js"></script> -->



<!-- Bootstrap rating css -->
        
        <!-- Bootstrap rating css -->
        <link href="<?php echo base_url();?>obso/assets/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url();?>obso/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
/*Virendra*/
.mdi {
    color: #222831;
}
.btn-primary:hover {
    color: #fff;
    background-color: rgb(233,101,90) !important;
    border-color: rgb(233,101,90) !important;
    cursor: pointer;
}
  .form-control {
        font-size: 14px;
    color: #ffffff !important;
    background: #222831 !important;
    border-color: rgb(57, 62, 70) !important;
}
.btn-primary{
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}
.button-label {
    display: inline-block;
    padding: 0.3em 1em;
    margin: 0.1em;
    cursor: pointer;
    color: #ffff;
    background: #393e46 !important;
    transition: 0.3s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.button-label:hover {
    background: #e9655a !important;
    color: #ffff;
}
#yes-button:checked + .button-label:hover {
  background: #e9655a !important
    color: #e2e2e2;
}
#no-button:checked + .button-label {
    background: #3936df !important;
    color: #e2e2e2;
}
#maybe-button:checked + .button-label {
    background: #3936df;
    color: #e2e2e2;
}
#no-button:checked + .button-label:hover {
    background: #e9655a !important;
    color: #e2e2e2;
}
#no-button:checked + .button-label: {
    background: #3936df !important;
    color: #e2e2e2;
}
#van-button2:checked + .button-label:hover {
    background: #e9655a !important;
    color: #e2e2e2;
}
#van-button2:checked + .button-label {
    background: #3936df;
    color: #e2e2e2;
}
#van-button:checked + .button-label:hover {
    background: #e9655a !important;
    color: #e2e2e2;
}
#van-button:checked + .button-label {
    background: #3936df;
    color: #e2e2e2;
}
#maybe-button:checked + .button-label:hover {
    background: #e9655a !important;
    color: #e2e2e2;
}
#maybe-button:checked + .button-label: {
    background: #3936df !important;
    color: #e2e2e2;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background: #e9655a !important;
}


.listbg{
  margin-top: 5px;
  height: 150px;
  margin-bottom: 5px;
  font-weight: bold;
  font-size: 12px;
  background: #aaaaaa !important;
}

.editt {
    margin-top: 120px;
    position: absolute;
    font-size: 24px;
    background: #aaaaaa;
    margin-left: -9px;
}
.btn-secondary:hover {
    color: #fff;
    background-color: #e9655a !important;
    border-color: #e9655a !important;
}
.button-label h1 {
    font-size: 11px !important;
}
.button-label {
    display: inline-block;
    padding: 0.3em 1em;
    margin: 0.1em;
    cursor: pointer;
    color: #ffff;
    background: #17384b;
    transition: 0.3s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.button-label{
      padding: 0.3em 4em !important;
}


.clr {
    background: #393e46 !important;
    border-color: #222831 !important;
}
.m-l-35{
      padding-left: 35px;
}



.boxsec{
  background: #1c202b;
}
.text-primary {
    color: #FFC107 !important;
}
.rating-symbol-background, .rating-symbol-foreground {
    font-size: 20px;
}
.border-rgt {
    border-right: 1px solid #222831;
}
.blue{
  color: #6271f2;
}

.sup-bg{
  background: #e9655a;
}
.row-width{
  width: 109%;
}


.f-size{
     font-size: 25px;
   
    
}
.addnewcompny{
  border-radius: 0px !important;
  font-size: 22px !important;
  text-align: center;
  background: #393e46 !important;
  border-color: rgb(34, 40, 49) !important;

}
.trad{
  border-radius: 0px !important;
 
  background: #393e46 !important;
  border-color: rgb(34, 40, 49) !important;
}


/*Virendra */


button:hover{
background: #3936df;
}
.button-wrap {
    position: relative;
    top: 0%;
    font-size: 3px;
}

.modal .modal-content {
background: #17384b;
border-color: #17384b;
}

a {
color: #fff !important;
text-decoration: none;
}
button:hover{
background: #3936df;
}


.btnside {
border-radius: 14px;
font-size: 10px;
padding: 5px;
margin: 7px;
width: 100%;
}

.btnenq {
background: #17384b;
border-radius: 0px;
}
.btnside1 {
padding: 5px;
margin: 7px;
width: 200px;
height: 40px;
}
.btnsidep{
padding: 5px;
margin: 7px;
width: 185px;
height: 45px;
}


.estbox{
height: 50px;
padding: 3px;
font-size: 12px;
text-align: center;
background: #17384b !important;
margin-left: 13px;
}

.estbox:hover{
cursor: pointer;
background: #3936df !important;

}



/* Hide the browser's default checkbox */
.estbox input {
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
}

/* Create a custom checkbox */
.checkmark {
position: absolute;
top: 0;
left: 0;
height: 25px;
width: 25px;
text-align: center;
}

/* On mouse-over, add a grey background color */

/* When the checkbox is checked, add a blue background */
.estbox input:checked ~ .checkmark {
background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
content: "";
position: absolute;
display: none;
}
/* Show the checkmark when checked */
.estbox input:checked ~ .checkmark:after {
display: block;
}

/* Style the checkmark/indicator */
.estbox .checkmark:after {
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
.estbox:hover{
cursor: pointer;
background: #3936df !important;
}
.estbox p{
margin-top: 7px;
}
.estbox1:hover{
cursor: pointer;
background: #3936df !important;
}
.estbox1{
height: 38px;
font-size: 10px;
text-align: center;
background: #17384b !important;
margin-left: 12px;
}

.ipt{
      background: #222831;
    border-color: rgb(255, 255, 255);
}
.sellerlistbgclr {
    margin-top: 5px !important;
    height: 165px !important;
    margin-bottom: 5px !important;
    font-weight: bold !important;
    font-size: 12px !important;
    background: #aaaaaa !important;
}
.dropdown-menu {
    padding: 4px 0;
    font-size: 14px;
    -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    background-color: #aaaaaa;
    border-color: #aaaaaa;
    margin: 0;
}

</style>