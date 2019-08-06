<?php include 'sidebar.php'; ?>

<!-- Bootstrap rating css -->
        
        <!-- Bootstrap rating css -->
        <link href="assets/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
/*Virendra*/
.mdi {
    color: #222831;
}
.btn-primary:hover {
    color: #fff;
    background-color: rgb(233,101,90) !important;
    border-color: rgb(233,101,90) !important;
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


.editt{
  margin-top: 105px;
  position: absolute;
  font-size: 24px;
  background: #aaaaaa;
  margin-left: -8px;
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
.earth-position{
      position: absolute;
      background: #393e46;
    padding: 10px;
}

.f-size{
     font-size: 25px;
   
    
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
.test:after {
    content: '\2807';
    font-size: 25px;
    position: absolute;
    margin-left: 4px;
    cursor: pointer;
}

.ipt{
      background: #222831;
    border-color: rgb(255, 255, 255);
}

</style>

<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Supplier Database &nbsp>&nbsp Supplier Contact 
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
                                    <h3><input type="text" name="companies" class="form-control" placeholder="Add New Company" style="font-size: 20px;text-align: center;"></h3>
                                  </div>
                                  </div>
                                   
                              </div>  
                          </div>

                          <div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
                            <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                                  
                            <strong>Supplier Manager: <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control record">
                                <option value="">John</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                              </select>
                              </strong><br>
                              
                               <strong>Last Contact date: 20/march/2019</strong><br>
                               <strong>Linked Suppliers: 12 link companies</strong>
                               
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
                              <strong>RFQ’s Sent: 01</strong><br>
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
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                  <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                  <span class="d-none d-sm-block">
                  Record Information</span> 
                </a>
              </li>
              <li class="nav-item waves-effect waves-light" style="background: rgb(233,101,90) !important;">
                <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                  <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                  <span class="d-none d-sm-block">Contact Information</span> 
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
                  <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                  <span class="d-none d-sm-block">Order History</span>   
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
                  <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                  <span class="d-none d-sm-block">Customer Summery</span>   
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
                <a class="nav-link active" data-toggle="tab" href="#settings-1" role="tab">
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

                          <div class="col-xl-5 col-md-4 col-sm-6 text-right">
                           <button class="btn btn-primary" type="button" aria-haspopup="true" aria-expanded="false">Add New</button>
                          </div>
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



                          <div class="form-control listbg">
                    <div class="row" style="color: black !important;">

                      <div class="col-md-1">
                        <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                       <!--  <img src="assets/images/flags/french_flag.jpg" style="border-radius: 50%;width: 23px;;position: absolute;margin-top: 5px;height: 20px;"> -->
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="test" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span class="editt"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>



                  <div class="form-control listbg">
                    <div class="row" style="color: black !important;">

                      <div class="col-md-1">
                       <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="test" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span class="editt"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>


                  <div class="form-control listbg">
                    <div class="row" style="color: black !important;">

                      <div class="col-md-1">
                       <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="test" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span class="editt"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>


                   <div class="form-control listbg">
                    <div class="row" style="color: black !important;">

                      <div class="col-md-1">
                        <i class="mdi mdi-gender-male" style="font-size: 20px;"></i>
                      </div>

                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-12 col-xl-12 col-sm-6">John Lidman | Maintenance Manager | Maintenance</div>
                          
                        </div>
                        <strong>DD: +44 8888 555 555</strong><br>
                        <strong>Chicago Packaging Plant</strong><br>
                        <strong>amanda/lidman@cocacola.com</strong><br>
                        <strong>Last Contact: <span style="color: #f44336;">Doormant (763) 6 Months ago</span></strong><br>
                        <strong>17 Enquries 17 Quotes 15 Orders</strong>
                      </div>

                      <div class="col-md-1">
                        <div class="test" id="menu1" data-toggle="dropdown"></div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        </ul>
                        <span class="editt"><i class="mdi mdi-square-edit-outline"></i></span>
                      </div>
                      <br>
                    </div>
                  </div>
                 </div>
            </div>


            <div class="col-xl-7 col-md-6 col-sm-6">
              <h5>Add Contact Information</h5>
              <div class="row">
                <div class="col-lg-12">
                  <form action="#">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="First Name"/>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Last Name"/>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Gender"/>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Department"/>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Job Title"/>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Branch"/>
                        </div>
                      </div>
                      <br> 
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Email"/>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Mobile"/>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Direct Dial"/>
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Phone Number"/>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea type="text" class="form-control ipt" required
                          data-parsley-maxlength="6" placeholder="Key Personal Information" style="height: 150px;"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6" style="border-right: 1px solid #2a3142;text-align: center;">
                          <p>Marketing Preferences: </p>
                          <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">User Email</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Use SMS</button>

             

              
              

            </div>
                          <!-- <div class="button-wrap">
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked"/>
                            <label class="button-label" for="yes-button">
                              <h1>User Email</h1>
                            </label>
                            <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
                            <label class="button-label" for="no-button">
                              <h1>Use SMS</h1>
                            </label>
                          </div> -->
                        </div>
                        <div class="col-md-6 text-center">
                          <p>Contact Status: </p>
                         
                            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Active year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Do Not Contact</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">In-active</button>

              
              

            </div>
                            <!-- 
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
                          </div> -->
                        </div>
                      </div>     
                       

                    </form>
                  </div> 
                  <div class="card" style="margin-top: 90px;padding:10px !important">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6 text-center">
                          <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-6 text-center">
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


<!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- Bootstrap rating js -->
        <script src="assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="assets/pages/rating-init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

<?php include 'footer.php'; ?>