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
            <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/customer_records"){ ?>
            <a class="nav-link active" href="<?php echo base_url(); ?>admin/sales/customer_records">
            <?php }else{ ?>
            <a class="nav-link" href="#">
            <?php } ?>

              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">
              Record Information </span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/customer_contact"){ ?>
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
  <div class="col-xl-7 col-md-6 col-sm-6">
<h5>Edit Contact Information</h5>
    <div class="row">
      <div class="col-lg-12">
        <form action="<?php echo base_url('admin/sales/update_customer_contact'); ?>" method="POST" enctype="multipart/multipart/form-data">
          <input type="hidden" name="customer_contact_id" value="<?php echo $data->id; ?>">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="fname" value="<?php echo $data->fname; ?>" class="form-control" placeholder="First Name" />
              </div>
              <div class="col-md-6">
                <input type="text" name="lname" value="<?php echo $data->lname; ?>" class="form-control" placeholder="Last Name" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                 <select name="gender" class="form-control" >
                  <option value="male" <?php if($data->gender == "male") { ?> selected="selected" <?php } ?>>Male</option>
                  <option value="female" <?php if($data->gender == "female") { ?> selected="selected" <?php } ?>>Female</option>
                  
                </select>
            </div>

              <div class="col-md-6">
                <input type="text" name="department" value="<?php echo $data->lname; ?>" class="form-control" placeholder="Department" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="job_title" value="<?php echo $data->job_title; ?>" class="form-control" placeholder="Job Title" required/>
              </div>
              <div class="col-md-6">
                <input type="text" name="branch" value="<?php echo $data->branch; ?>" class="form-control" placeholder="Branch" required/>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-md-6">
                <input type="email" name="email" value="<?php echo $data->email; ?>" class="form-control" placeholder="Email" required/>
              </div>
              <div class="col-md-6">
                <input type="number" name="mobile" value="<?php echo $data->mobile; ?>" class="form-control" placeholder="Mobile" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="number" name="direct_dial" value="<?php echo $data->direct_dial; ?>" class="form-control" placeholder="Direct Dial" required/>
              </div>
              <!-- <div class="col-md-6">
                <input type="number" name="phone" class="form-control" value="<?//php echo $data->phone; ?>" placeholder="Phone Number" required/>
              </div> -->
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <textarea type="text" name="key_personal_info" class="form-control" placeholder="Key Personal Information" style="height: 150px;" required><?php echo $data->key_personal_info; ?></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 text-center">
                 <h5>Marketing Preferences</h5>

                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <?php if($data->mkt_preferance == "use_email") { ?>
                      <label class="btn btn-primary ma active">
                          <input type="radio" name="mkt_preferance" value="use_email"> Use Email
                      </label>
                  <?php }else{ ?>
                    <label class="btn btn-primary ma ">
                          <input type="radio" name="mkt_preferance" value="use_email"> Use Email
                      </label>
                  <?php } ?>

                  <?php if($data->mkt_preferance == "use_sms") { ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="mkt_preferance" value="use_sms"> Use SMS
                      </label>
                  <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="mkt_preferance" value="use_sms"> Use SMS
                      </label>
                  <?php } ?>
                     
                  </div>

              </div>
              <div class="col-md-6 text-center">
                <h5>Contact Status</h5>

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <?php if($data->mark_status  == "0") { ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="contact_status" value="0"> Active
                      </label>
                  <?php }else{ ?>
                      <label class="btn btn-primary ma">
                          <input type="radio" name="contact_status" value="0"> Active
                      </label>
                  <?php } ?>

                  <?php if($data->mark_status == "2") { ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="contact_status" value="2"> Do Not Contact
                      </label>
                    <?php }else{ ?>
                        <label class="btn btn-primary">
                          <input type="radio" name="contact_status" value="2"> Do Not Contact
                      </label>
                    <?php } ?>

                    <?php if($data->mark_status == "1") { ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="contact_status" value="1"> In-active
                      </label>
                    <?php } else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="contact_status" value="1"> In-active
                      </label>
                    <?php } ?>
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
  <script>
    function myCopy() {
     /* Get the text field */
  var copyText = document.getElementsByClassName("myvpy");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

   alert("Copied the text: " + copyText.value);

    }
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