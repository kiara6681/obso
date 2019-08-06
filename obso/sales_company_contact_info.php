<?php include 'sidebar.php'; ?>

<style type="text/css">
/*Virendra*/
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
  background: #242b3d !important;
}
.btn-secondary:hover {
    color: #fff;
    background-color: #626ed4 !important;
    border-color: #626ed4 !important;
}
.form-control {
    font-size: 14px;
    color: #dee2e6 !important;
    background: #252735;
    border-color: rgba(255, 255, 255, 0.07);
    border-radius: 11px;
}
.clr{
  background: #36394c !important;
  border-color: rgb(42, 49, 66);
}
.m-l-35{
      padding-left: 35px;
}
.savebtn{
  width: 80%;
   
    height: 40px;
    border-radius: 20px;
     margin-left: 30px;
}

.btn-secondary {
    color: #fff;
    background-color: #1c202b;
    border-color: #1c202b;
}
.boxsec{
  background: #1c202b;
}
.text-primary {
    color: #FFC107 !important;
}
.rating-symbol-background, .rating-symbol-foreground {
    font-size: 13px;
}
.border-rgt{
      border-right: 1px solid #252736;
}
.blue{
  color: #6271f2;
}
.card {
    border: none;
    -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    background: #36394c;
    padding: 0px !important;
}
.sup-bg{
  background: #084961;
}
.row-width{
  width: 109%;
}
.earth-position{
      position: absolute;
           background: #000;
    padding: 10px;
}

.f-size{
  font-size: 40px;
  position: absolute;
    margin-left: 117px;
    margin-top: 12px;
}


/*Virendra */


button:hover{
background: #03a9f4;
}
.button-wrap {
    position: relative;
    top: 0%;
    font-size: 10px;
}

.modal .modal-content {
background: #36394c;
border-color: #36394c;
}

a {
color: #fff !important;
text-decoration: none;
}
button:hover{
background: #03a9f4;
}


.btnside {
border-radius: 14px;
font-size: 10px;
padding: 5px;
margin: 7px;
width: 100%;
}

.btnenq {
background: #36394c;
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
background: #36394c !important;
margin-left: 13px;
}

.estbox:hover{
cursor: pointer;
background: #007bff !important;

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
background: #007bff !important;
}
.estbox p{
margin-top: 7px;
}
.estbox1:hover{
cursor: pointer;
background: #007bff !important;
}
.estbox1{
height: 38px;
font-size: 10px;
text-align: center;
background: #36394c !important;
margin-left: 12px;
}
.testc:after {
    content: '\2807';
    font-size: 25px;
    position: absolute;
    margin-left: 4px;
    cursor: pointer;
}

</style>

<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbsp Create Sales Company</small>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">

                      <div class="row">
                          <div class="col-xl-3 col-md-4 col-sm-6">
                            <i class="ion ion-md-globe earth earth-position"></i>
                            
                              <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                <div class="p-3 text-center">
                                  <h5 class="font-16 m-b-15"><input type="text" name="companies" class="form-control" placeholder="Add New Company"></h5>
                                 </div>
                              </div>  
                          </div>

                          <div class="col-xl-3 col-md-4 col-sm-6 boxsec">
                            <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                   <span>
                              Recorded by : <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="width: 60%;float: right;height: 29px;border-radius: 0px !important;background: #1c202b !important"">
                                <option value="">John</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                              </select></span>
                              
                               <span>
                                  Last contact date : 20/march/2019<br>
                                  Business link : 12 link companies
                                </span>
                     </div>  
                          </div>
                          <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                            <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                <p>Total spend : $00.0<br>
                              Gross Profit : $00.0<br>
                              Invoiced : $00.0
                            </p>
                          </div>
                      </div>
                          <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                              <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                <p>Enquiries : 01<br>
                              Quotes : 00<br>
                              Orders : 00
                            </p>
                        </div>
                          </div>
                           <div class="col-xl-2 col-md-4 col-sm-6">
                              <div class="row row-width" >
                                <div class="col-xl-12 col-md-4 col-sm-6">
                                  <button class="btn btn-secondary btn-sm waves-effect waves-light" type="button" aria-haspopup="true" aria-expanded="false" style="font-size: 8px;width: 120px;border-radius: 15px;">Account</button>
                            <br>
                            <button class="btn btn-secondary btn-sm waves-effect waves-light" type="button" aria-haspopup="true" aria-expanded="false" style="font-size: 8px;border-radius: 15px;">Enquiry Active/Order Dormant</button>
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
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                  <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                  <span class="d-none d-sm-block">
                  Record Information</span> 
                </a>
              </li>
              <li class="nav-item waves-effect waves-light" style="background: #242b3d !important;">
                <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                  <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                  <span class="d-none d-sm-block">Contact Information</span> 
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                  <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                  <span class="d-none d-sm-block">Order History</span>   
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" style="background: #626ed4;">
                  <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                  <span class="d-none d-sm-block">Customer Summery</span>   
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link active" data-toggle="tab" href="#settings-1" role="tab" style="background: #8BC34A;">
                  <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                  <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Chat History</span>    
                </a>
              </li>
            </ul>
          </div>
        </div>



         <div class="row">
          <div class="col-xl-6 col-md-6 col-sm-6" >
              <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-6">
                          <div class="row">
                          <div class="col-xl-7 col-md-4 col-sm-6 m-l-35">
                           <h4>Supplier Contact List</h4>
                          </div>

                          <div class="col-xl-5 col-md-4 col-sm-6">
                           <button class="btn btn-primary" type="button" aria-haspopup="true" aria-expanded="false" style="float: right;border-radius: 35px;width: 60%;">Add New</button>
                          </div>
                          </div>
                          </div>
                         
                            
                           
                      </div>      
                  </div>
                          <hr>
                          <div class="row p-2">
                            <div class="col-xl-12 col-md-4 col-sm-6 ">
                              <h3>
                                <input type="text" class="form-control ipt-rds" placeholder="Search.." style="border-radius: 25px;background: #36394c !important;">
                              </h3>
                            </div>
                           
                          </div> 


                          <div class="row p-2">
                            <div class="col-xl-12 col-md-4 col-sm-6">
                               <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 10px;background: #36394c !important;border-color: rgb(37, 39, 53);">
                          <option value="">Sort By: Newest First</option>
                          <option value="AE">ABC</option>
                          <option value="VI">ABC</option>
                          <option value="MC">ABC</option>
                          <option value="DI">ABC</option>
                        </select>
                            </div>
                           
                          </div> 



                          <div class="form-control" style="margin-top: 5px;height: 150px;margin-bottom: 5px;font-weight: bold;font-size: 12px;background: #242b3d !important;">
                    <div class="row">

                      <div class="col-md-1">
                        <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                       <!--  <img src="assets/images/flags/french_flag.jpg" style="border-radius: 50%;width: 23px;;position: absolute;margin-top: 5px;height: 20px;"> -->
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div><br>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="testc" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -268px;">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span style="margin-top: 105px;position: absolute;font-size: 24px;background: #36394c;"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>



                  <div class="form-control" style="margin-top: 5px;height: 150px;margin-bottom: 5px;font-weight: bold;font-size: 12px;background: #242b3d !important;">
                    <div class="row">

                      <div class="col-md-1">
                       <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div><br>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="testc" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -268px;">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span style="margin-top: 105px;position: absolute;font-size: 24px;background: #36394c;"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>


                  <div class="form-control" style="margin-top: 5px;height: 150px;margin-bottom: 5px;font-weight: bold;font-size: 12px;background: #242b3d !important;">
                    <div class="row">

                      <div class="col-md-1">
                       <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div><br>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="testc" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -268px;">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span style="margin-top: 105px;position: absolute;font-size: 24px;background: #36394c;"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>


                   <div class="form-control" style="margin-top: 5px;height: 150px;margin-bottom: 5px;font-weight: bold;font-size: 12px;background: #242b3d !important;">
                    <div class="row">

                      <div class="col-md-1">
                        <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div><br>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="testc" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="margin-left: -268px;">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span style="margin-top: 105px;position: absolute;font-size: 24px;background: #36394c;"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>
                         










                        </div>
                     

                 
            </div>


            <div class="col-xl-6 col-md-6 col-sm-6">
              <h4>Add Contact Information</h4>
              <div class="row">
                <div class="col-lg-12">
                  <form action="#">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="First Name"  />
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Last Name"  />
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Gender" />
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Department" />
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Job Title" />
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Branch" />
                        </div>
                      </div>
                      <br> 
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Email" />
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Mobile" />
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Direct Dial" />
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Phone Number" />
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea type="text" class="form-control" required
                          data-parsley-maxlength="6" placeholder="Key Personal Information" style="border-radius: 5px;height: 150px;"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6" style="border-right: 1px solid #2a3142;">
                          <p>Marketing Preferences: </p>
                          <div class="button-wrap">
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked"/>
                            <label class="button-label" for="yes-button">
                              <h1>User Email</h1>
                            </label>
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
                            <label class="button-label" for="no-button">
                              <h1>Use SMS</h1>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <p>Contact Status: </p>
                          <div class="button-wrap">
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2" checked="checked"/>
                            <label class="button-label" for="van-button2">
                              <h1>Active</h1>
                            </label>
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
                            <label class="button-label" for="van-button">
                              <h1>Do Not Contact</h1>
                            </label>
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button"/>
                            <label class="button-label" for="maybe-button">
                              <h1>In-active</h1>
                            </label>
                          </div>
                        </div>
                      </div>     
                    </form>
                  </div> 
                  <div class="card" style="margin-top: 135px;padding:10px !important">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6">
                          <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save Draft</button>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-6">
                          <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
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




<?php include 'footer.php'; ?>