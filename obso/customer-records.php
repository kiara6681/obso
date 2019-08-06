<?php include 'sidebar.php'; ?>

<style type="text/css">
/*create sales company*/
.selwidth{
      width: 100%;
    
    padding: 10px;
    font-size: 11px;
    height: 45px;
  
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background: #007bff !important;
  }


.btn-primary.focus, .btn-primary:focus, .btn-outline-primary.focus, .btn-outline-primary:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
    -webkit-box-shadow: 0 0 0 2px rgb(47, 137, 252);
    box-shadow: 0 0 0 2px rgb(47, 137, 252);
    background: rgb(47, 137, 252) !important;
}

.btn-primary {
    background-color: #393e46 !important;
    border: 1px solid #393e46 !important;
}
.button-label {
    display: inline-block;
    padding: 2.0em 3.7em !important;
    /* margin: 0.1em; */
    cursor: pointer;
    color: #ffff;
    background: #393e46;
    transition: 0.3s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.button-label:hover {
    background: rgb(245, 139, 84);
    color: #fff;
}
#yes-button:checked + .button-label {
    background: #2f89fc !important;
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
.form-control {
    font-size: 12px;
    color: #dee2e6 !important;
    background: #222831 !important;
    border-color: rgba(255, 255, 255, 0.07);
}



.btn-secondary:hover {
    color: #fff;
    background-color: #2f89fc !important;
    border-color: #2f89fc !important;
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


  .btnwdt{
    width: 82px;
    text-align: center;
    padding: 10px;
  }
  .button-label h1 {
    font-size: 11px;
}



.bgclr{
      background: #36394c;
}



.m-l-35{
      padding-left: 35px;
}




.rating-symbol-background, .rating-symbol-foreground {
    font-size: 13px;
}

.blue{
  color: #6271f2;
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


button:hover{
background: #03a9f4;
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



/*create sales comapany*/








</style>

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                     <h3 class="page-title">Sale Database &nbsp>&nbsp Customer Records
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
                                  
                            <strong>   Trader Name : <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control record">
                                <option value="">John</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                              </select>
                              </strong><br>
                              
                               <strong>  Contact Date : 20/march/2019</strong><br>
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
              <li class="nav-item waves-effect waves-light" style="background: #007bff !important;">
                <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                  <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                  <span class="d-none d-sm-block">
                  Record Information</span> 
                </a>
              </li>
              <li class="nav-item waves-effect waves-light">
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
                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
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
                            <div class="col-lg-5">
                              <h4 class="mt-0 header-title">About Information</h4>
                              <hr><br>
                              <form class="" action="#">
                                <div class="form-group">
                                  <textarea class="form-control" required placeholder="write some information on customer" style="height: 100px;border-radius: 7px;">
                                  </textarea>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                                        <option value="">Industry sector</option>
                                        <option value="AE">ABC</option>
                                        <option value="VI">ABC</option>
                                        <option value="MC">ABC</option>
                                        <option value="DI">ABC</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="password" class="form-control" required data-parsley-equalto="#pass2"
                                      placeholder="Secrtor free Text" style="border-radius: 5px;"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" id="pass2" class="form-control" required
                                      placeholder="Website Address pf main company site" style="border-radius: 5px;"/>
                                    </div>
                                    <div class="col-md-6">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                                        <option value="">Company Record Source</option>
                                        <option value="AE">ABC</option>
                                        <option value="VI">ABC</option>
                                        <option value="MC">ABC</option>
                                        <option value="DI">ABC</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <input type="text" id="pass2" class="form-control" required
                                      placeholder="Main Switchboard Number" style="border-radius: 5px;"/>
                                    </div>
                                    
                                  </div>
                                </div>

                                <br>
                              

                                <h4 class="mt-0 header-title">Payment Information</h4>
                                <hr>
                                <br>
<p class="mt-0 header-title">Estimated Requirement Frequency::</p>

    <div class="row">
      <div class="col-xl-12 col-sm-6 col-md-12">
        <div class="card" style="background: #222831 !important;">
          <div class="card-body">

            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Less then 1 year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Daily</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Weekly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Monthly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Yearly</button>

            </div>
          </div>
        </div>
      </div>
    </div>


                


    <!-- <div class="row">
      <div class="col-xl-12 col-md-12 col-sm-6">
           <div class="row">
          <div class="col-xl-2 col-md-2 col-sm-6 p-0" style="margin-right: 10px;">
            <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button"/>
            <label class="button-label btnwdt" for="yes-button" style="">
              <h1>Less Than 1 year</h1>
            </label>
          </div>
          <div class="col-xl-2 col-md-2 col-sm-6 p-0" style="margin-right: 10px;">
            <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
            <label class="button-label btnwdt" for="no-button" >
              <h1>Daily</h1>
            </label>
          </div>
          <div class="col-xl-2 col-md-2 col-sm-6 p-0" style="margin-right: 10px;">
            <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button"/>
            <label class="button-label btnwdt" for="maybe-button" >
              <h1>Weekly</h1>
            </label>
          </div>
          <div class="col-xl-2 col-md-2 col-sm-6 p-0" style="margin-right: 10px;">
            <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
            <label class="button-label btnwdt" for="van-button" >
              <h1>Monthly</h1>
               </label>
          </div>
           <div class="col-xl-2 col-md-2 col-sm-6 p-0">
             <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2"/>
    <label class="button-label btnwdt" for="van-button2" >
      <h1>Yearly</h1>
       </label>
           </div>
        </div>
      </div>
    </div> -->



     <!-- <div class="button-wrap"> 
    <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button"/>
    <label class="button-label btnwdt" for="yes-button" style="">
      <h1>Less Than 1 year</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
    <label class="button-label btnwdt" for="no-button" >
      <h1>Daily</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button"/>
    <label class="button-label btnwdt" for="maybe-button" >
      <h1>Weekly</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
    <label class="button-label btnwdt" for="van-button" >
      <h1>Monthly</h1>
       </label>

       <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2"/>
    <label class="button-label btnwdt" for="van-button2" >
      <h1>Yearly</h1>
       </label>

    </div> -->
  


    <div class="form-group">
      <p class="mt-0 header-title">Estimated Spend:</p>
     <div class="row">
      <div class="col-xl-12 col-sm-6 col-md-12">
        <div class="card" style="background: #222831 !important;">
          <div class="card-body">

            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Less then 1 year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Daily</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Weekly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Monthly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Yearly</button>

            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- <div class="row mt-0" style="margin: 0px;">
        <div class="button-wrap">
      <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button1" checked="checked"/>
      <label class="button-label btnwdt" for="yes-button1" >
        <h1>Less Than 50k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button1"/>
      <label class="button-label btnwdt" for="no-button1" >
        <h1>50k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button1"/>
      <label class="button-label btnwdt" for="maybe-button1" >
        <h1>100k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button1"/>
      <label class="button-label btnwdt" for="van-button1" >
        <h1>500k</h1>
         </label>

         <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button3"/>
      <label class="button-label btnwdt" for="van-button3" >
        <h1>1Mk</h1>
         </label>

      </div>
      </div> -->
      
    </div>

                              

                                <div class="form-group">
                                  <div class="row">
                                    
                                      <div class="col-md-6">
                                    <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                                      <option value="">Payment Terms | Advance</option>
                                      <option value="AE">ABC</option>
                                      <option value="VI">ABC</option>
                                      <option value="MC">ABC</option>
                                      <option value="DI">ABC</option>
                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                                      
                                      <option value="AE">Free to trade</option>
                                      <option value="VI">ABC</option>
                                      <option value="MC">ABC</option>
                                      <option value="DI">ABC</option>
                                    </select>
                                    </div>
                                    <br><br>
                                    

                                    <div class="col-md-12" style="border-radius: 5px;">
                                      
                                      
                                      <input type="text" name=""class="form-control" required placeholder="Payment Reference | " style="border-radius: 5px;">
                                      
                                        
                                    </div>
                                    </div>
                                    
                                  
                                </div>


                               
                                    
   
  
         <div class="form-group">
         <div class="row">
          <div class="col-md-12">
          <label>Manufectures used:</label> 
        </div>
          
          </div>

               <div class="row">                   
          <div class="col-lg-12 name_text  midea_mt30 btn-checkbox">
              
          
   <div class="row">
      <div class="col-xl-12 col-md-6 col-sm-6">
        <div class="row">
      <div class="col-xl-12 col-sm-6 col-md-12">
        <div class="card" style="background: #222831 !important;">
          <div class="card-body">

            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Less then 1 year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Daily</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Weekly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Monthly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Yearly</button>

            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
  
</div>
            <!-- <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="5" >Dannfors</button>
          </div>
          </div> -->

           <div class="row">
      <div class="col-xl-12 col-md-6 col-sm-6">
        <div class="row">
      <div class="col-xl-12 col-sm-6 col-md-12">
        <div class="card" style="background: #222831 !important;">
          <div class="card-body">

            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Less then 1 year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Daily</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Weekly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Monthly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Yearly</button>

            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
  
</div>

         <!--  <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="5" >Dannfors</button>
          </div>
          </div> -->

           <div class="row">
      <div class="col-xl-12 col-md-6 col-sm-6">
        <div class="row">
      <div class="col-xl-12 col-sm-6 col-md-12">
        <div class="card" style="background: #222831 !important;">
          <div class="card-body">

            <div class="button-items">
              
              <button type="button" class="btn btn-primary waves-effect waves-light">Less then 1 year</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Daily</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Weekly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Monthly</button>

              
              <button type="button" class="btn btn-primary waves-effect waves-light">Yearly</button>

            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
  
</div>

          <!-- <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn bgclr btnwdt" data-id="5" >Dannfors</button>
          </div>
          </div> -->

      </div>
      </div>
      </div>



      <div class="form-group">
         <div class="row">
          <div class="col-md-12">
          <label>Other Manufectures used:</label> 
        </div>


          <div class="col-md-12">
          <textarea class="form-control" type="text" name="enquiry" placeholder="01" style="height: 100px;"></textarea>
          </div>
          </div>
      
       </div>



      <div class="form-group">
      <div class="row">
        
          
      
         <div class="col-md-12">
          <label>PSL Information:</label> 
        </div>


          <div class="col-md-12">
          <textarea class="form-control" type="text" name="enquiry" placeholder="PSL Information" style="height: 100px;"></textarea>
          </div>

       </div>   
        </div>



      <div class="form-group">
       <div class="row">
          <div class="col-md-12">
          <label>Competitor Information:</label> 
        </div>


          <div class="col-md-12">
          <textarea class="form-control" type="text" name="enquiry" placeholder="Competitor Information" style="height: 100px;"></textarea>
          </div>
       </div>
        </div>



      <div class="form-group">
       <div class="row">


          <div class="col-md-12">
          <label>Discount & Pricing Information:</label> 
        </div>


          <div class="col-md-12">
          <textarea class="form-control" type="text" name="enquiry" placeholder="Discount & Pricing Information:" style="height: 100px;"></textarea>
          </div>

          </div>   
      </div>
      



      
   



                              </form>
                            </div> 
                            <!-- First form End-->

                            <div class="col-lg-7">
                              <h4 class="mt-0 header-title">Adderss</h4>
                              <hr>  <br>  
                              <form action="#">

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" placeholder="Location Number/ Name" style="border-radius: 10px;" />
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" placeholder="Street Address" style="border-radius: 10px;"/>
                                    </div>
                                  </div>
                                  <br>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Town / city"/>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="State"/>
                                    </div>
                                  </div>
                                  <br>


                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Postal / Zip code"/>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required
                                      data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Country"/>
                                    </div>
                                  </div>


                                  <br>



                                  <div class="row">
                                    <div class="col-md-6">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                                        <option value="">Type of address</option>
                                        <option value="AE">ABC</option>
                                        <option value="VI">ABC</option>
                                        <option value="MC">ABC</option>
                                        <option value="DI">ABC</option>
                                      </select>
                                    </div>
                                   </div> 
                                   <br>
                                   <div class="row">
                                    <div class="col-md-12">
                                  

                                  <p>If this company has more than one address , please click the button below to<br> add new address.</p>
                                  </div>
                                </div>
                                <br>
                                  <div class="row">
                                    <div class="col-md-4">
                                   <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" data-toggle="modal" data-target=".bs-example-modal-center" style="background: #393e46 !important;border-color: #393e46 !important;"><i class="fa fa-map-marker"></i>&nbsp&nbsp Add new Address</button><br>
                                 </div>
                               </div>
                                 
                                  <br>
                                    <div class="col-md-12" style="padding: 0px;">
                                      <div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe></div><br />



                                      
                                    </div>
                                  
                                </form>
                              </div> 
                            </div>

                            <!-- content -->
                            </form></div></div>


                                <div class="card" style="margin-top: 135px;padding:10px !important">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-3 col-md-6 col-sm-6">
                          
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                          <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                          <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save & Continue</button>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                         
                        </div>
                      </div>
                    </div>
                  </div>


                          


                            </div></div>
                            </div>

                            <style type="text/css">
  .modal .modal-content {
    background: #36394c;
    border-color: #36394c;
}

a {
    color: #fff !important;
    text-decoration: none;
}
</style>
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
                                    <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="First Name"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Last Name"/>
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
                                    <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Phone Number"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Contact E-mail"/>
                                </div>
                           </div>
                            <br>
                           <div class="row">
                               <div class="col-md-8">
                                  <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Address"/> 
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
                                   <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder=""/>
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
                                  <p><strong>Id Prof.: </strong>(please upload passport or driving licence or NID)</p>
                                  <button type="button" class="form-control">Upload</button> 
                               </div>
                               <div class="col-md-6">
                                   <p><strong>Employee Image :</strong>(please upload recent photo)</p>
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


  <style type="text/css">
  
   button:hover{
      background: #03a9f4;
    }
  
  </style>

<?php include 'footer.php'; ?>


 <script type="text/javascript">
  function registerForm()
  {   
    var first_name= $("#first_name").val(); 
    var last_name= $("#last_name").val();
    var password= $("#password").val();
    var confirm_pass = $("#repeat-password").val();
      // var radio_female = $("#radio_female").val();
      // var radio_male = $("#radio_male").val();
      var gender = $("input[name='gender']:checked").val();
      var bday= $("#bday").val();
      var mobile= $("#mobile").val();
      var email= $("#email").val();

      var isChecked = $('#radio_female').prop('checked');
      var isChecked = $('#radio_male').prop('checked');
      var sources = [];
      $("input[name = 'hearFrom']:checked").each(function(){
        sources.push($(this).val());
        // alert($(this).val());
      });
    if(first_name=="")
    {
     $("#errorfirst_name").show();

     setTimeout(function(){ $("#errorfirst_name").hide(); }, 3000);

   }else if(last_name=="")
   {
     $("#Errorlast_name").show();

     setTimeout(function(){ $("#Errorlast_name").hide(); }, 3000);

   }else if(password=="")
   {
     $("#errorpassword").show();
     setTimeout(function(){ $("#errorpassword").hide(); }, 3000);

   }else if(confirm_pass == "")
   {
      $("#repeatpassword_error").show();
     setTimeout(function(){ $("#repeatpassword_error").hide(); }, 3000);
   
   }else if(password != confirm_pass ){
        $("#ErrorSamePassword").show();
     setTimeout(function(){ $("#ErrorSamePassword").hide(); }, 3000);
    
   }else if(gender == undefined || gender == ""){
        $("#ErrorGender").show();
     setTimeout(function(){ $("#ErrorGender").hide(); }, 3000);
    
   }else   if(bday=="")
   {
     $("#errorbday").show();

     setTimeout(function(){ $("#errorbday").hide(); }, 3000);

   }else if(mobile == ""){
   $("#mobileError").show();

     setTimeout(function(){ $("#mobileError").hide(); }, 3000);
   }else if(email=="")
   {
     $("#erroremail").show();

     setTimeout(function(){ $("#erroremail").hide(); }, 3000);

   }

   else
   {
   $.ajax({

      url:"#",
      type:'POST',
      data: {email :email},
        //cache:false,
        success:function(result)
        {
          var res = JSON.parse(result);
          if(res.status == 1){
            $.ajax({

        url:"#",
        type:'POST',
        data: {first_name:first_name,last_name:last_name,password:password,gender:gender,bday:bday,mobile:mobile,email:email,hearabout:sources},
          //cache:false,
          success:function(result)
          {
            var res = JSON.parse(result);
            if(res.status == 1){
              alert("Your Account Has Been Created An Activation Link Sent To Your Email");
               window.location='#';
            }else{
              alert(res.msg);
            }
          }
        });
          }else{
            $("#erroremailexists").show();

     setTimeout(function(){ $("#erroremailexists").hide(); }, 3000);
          }
        }
      });
  
  }
  }



</script>







