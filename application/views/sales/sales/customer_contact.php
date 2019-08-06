<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Sale Database</b> &nbsp>&nbsp Customer Records

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
                        <h3><input type="text" name="companies" class="form-control addnewcompny" placeholder="Add New Company" value="<?php if(isset($_SESSION['company_name'])){ echo $_SESSION['company_name']; }?>"></h3>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
                  <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                    <strong>   Trader Name : <select name="trader_name" class="form-control record trad">
                      <option value="">Select Trader Name</option>
                      <option value="<?php echo $_SESSION['name']; ?>" <?php if(!empty($_SESSION['name'])){ ?> selected='selected' <?php }?>><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; }?></option>
                    </select>
                  </strong><br>
                  <strong>  Contact Date : <?php if(isset($_SESSION['creation_date'])){ echo date('d/m/Y', strtotime($_SESSION['creation_date'])); }?></strong><br>
                  <strong>   Linked Companies : 12 link companies</strong>
                </div>  
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                  <strong> Total spend : $00.0</strong><br>
                  <strong>Gross Profit : $00.0</strong><br>
                  <strong>Invoiced : $00.0</strong>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                  <strong>  Enquiries : 01</strong><br>
                  <strong>Quotes : 00</strong><br>
                  <strong> Orders : 00</strong>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 p-10">
                <div class="row">
                  <div class="col-xl-12 col-md-4 col-sm-6">
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Account</button>
                  </div>
                  <br>
                  <br>
                  <div class="col-xl-12 col-md-4 col-sm-6">
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Enquiry Active/Order Dormant</button>
                  </div>
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
            <?php if( $_SERVER['REQUEST_URI'] == "/obsosales/sales/sales/customer_records"){ ?>
            <a class="nav-link active" href="#">
            <?php }else{ ?>

              <?php if(!empty($_SESSION['session_id'])){ 
              ?>
            <a class="nav-link" href="#">
            <?php } } ?>

              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">
              Record Information </span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <?php if( $_SERVER['REQUEST_URI'] == "/obsosales/sales/sales/customer_contact"){ ?>
            <a class="nav-link active" href="#">
            <?php }else{ ?>
              <a class="nav-link" href="#">
            <?php } ?>
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">Contact Information</span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" data-toggle="tab" href="#orderhostory" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block">Order History</span>   
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" data-toggle="tab" href="#customersummery" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block">Customer Summery</span>   
            </a>
          </li>
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#chathistory" role="tab">
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
                <h5>Seller Contact List</h5>
              </div>
              <div class="col-xl-5 col-md-4 col-sm-6 text-right">
               <!--  <button class="btn btn-primary addnew" type="button" aria-haspopup="true" aria-expanded="false">Add New</button> -->
              </div>
            </div>
          </div>
        </div>      
      </div>
      <hr>
      <div class="row p-2">
        <div class="col-xl-12 col-md-4 col-sm-6 ">
          <h3>
            <input type="text" id="myInput" class="form-control ipt-rds" placeholder="Search..">
          </h3>
        </div>
      </div> 
      <div class="row p-2">
        <div class="col-xl-12 col-md-4 col-sm-6">
          <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control sortby">
            <option value="">Sort By: Newest First</option>
            <option value="AE">ABC</option>
            <option value="VI">ABC</option>
            <option value="MC">ABC</option>
            <option value="DI">ABC</option>
          </select>
        </div>
      </div> 
      <div id="myList">
      <?php $i = "1"; foreach ($data as $customer_contact){ ?>

          <?php if($customer_contact['mark_status'] ==1){ ?>
      <div class="form-control sellerlistbgclr" style="border-style: solid; border-color: #ff0000">
      <?php } ?>
      <?php if($customer_contact['mark_status'] ==0){ ?>
      <div class="form-control sellerlistbgclr">
      <?php } ?>
        <div class="row" class="cpycls">
         
          <div class="col-md-1">              
            <?php if ($customer_contact['gender']=="male") {
                echo "M";
            }elseif ($customer_contact['gender']=="female") {
                echo "F";
            } ?>
          </div>
          <div class="col-md-10" id="cpyid<?php echo $i; ?>">
            <div class="row">
              <div class="f-sz col-md-12 col-xl-12 col-sm-6 myvpy"><?php echo $customer_contact['fname']; ?> <?php echo $customer_contact['lname']; ?> | <?php echo $customer_contact['department']; ?> | <?php echo $customer_contact['branch']; ?></div>
            </div><br>
            <strong>DD: <?php echo $customer_contact['direct_dial']; ?></strong><br>
            <strong><?php echo $customer_contact['mobile']; ?></strong><br>
            <strong><?php echo $customer_contact['job_title']; ?></strong><br>
            <strong><?php echo $customer_contact['email']; ?></strong><br>
            <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
            <strong>17 Enquries 17 Quotes 15 Orders</strong>
          </div>
        
          <div class="col-md-1">
            <div class="test" id="menu1" data-toggle="dropdown"></div>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
              
              <li role="presentation"><a href="javascript:void(0)" onclick="copyToClipboard('#cpyid<?php echo $i; ?>')">Copy</a></li>

              <li role="presentation"><a href="<?php echo base_url('sales/sales/markstatus/'.$customer_contact['id']) ?>"><?php if($customer_contact['mark_status'] ==1){ ?>Mark Active <?php }else{ ?> Mark Inactive<?php } ?></a></li>
              <li role="presentation"><a href="<?php echo base_url('sales/sales/delete/'.$customer_contact['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete">Delete</a></li>
            </ul>
            <span class="editt"><a href="<?php echo base_url('sales/sales/update_customer_contact/'.$customer_contact['id']) ?>" data-toggle="tooltip"><i class="mdi mdi-square-edit-outline"></i></a></span>
          </div>
          <br>
        </div>
      </div>

          
    
      <?php $i++; } ?>

      
    </div>
  </div>
  </div>

  <div class="col-xl-7 col-md-6 col-sm-6">
    <h5>Add Contact Information</h5>
    <div class="row">
      <div class="col-lg-12">
        <form action="<?php echo base_url('sales/sales/add_customer_contact'); ?>" method="POST" enctype="multipart/multipart/form-data">
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
                      <label class="btn btn-primary ma">
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
                      <label class="btn btn-primary ma">
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
                <a href="<?php echo base_url();?>sales/sales/customer_records"><button type="button" name="cancel" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button></a>

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
              <input type="text"  class="form-control"  data-parsley-maxlength="6" placeholder="First Name"/>
            </div>
            <div class="col-md-4">
              <input type="text"  class="form-control"  data-parsley-maxlength="6" placeholder="Last Name"/>
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
              <input type="text"  class="form-control"  data-parsley-maxlength="6" placeholder="Phone Number"/>
            </div>
            <div class="col-md-4">
              <input type="text"   class="form-control"  data-parsley-maxlength="6" placeholder="Contact E-mail"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-8">
              <input type="text"  class="form-control"  data-parsley-maxlength="6" placeholder="Address"/> </div>
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
                <input type="text"  class="form-control"  data-parsley-maxlength="6" placeholder=""/>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  function copyToClipboard(element){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .sellerlistbgclr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style type="text/css">
  .addnewcompny {
    border-radius: 0px !important;
    font-size: 22px !important;
    text-align: center;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}

.trad {
    border-radius: 0px !important;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}
.marbtmm {
    margin-bottom: 0px;
}
</style>