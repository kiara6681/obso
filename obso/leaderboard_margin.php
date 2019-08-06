<?php include 'sidebar.php'; ?>

<style type="text/css">
  .button-wrap {
    position: relative;
    top: 0%;
    margin-bottom: 30px;
}
</style>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                  <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbspSales Dashboard</small>
                                    </h3>

                                </div>
                               
                               
                            </div>
                        </div>
                        <!-- end row -->

                       
                                <div class="cards">
                                    <div class="card-body">
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Margin Performance Leaderboard</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Output Leaderboard</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Effort Leaderboard</span>   
                                                </a>
                                            </li>

                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="modal" data-target=".bs-example-modal-center" href="#settings-1" role="tab" style="background: #8BC34A;">
                                                    <span class="d-block d-sm-none "><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block"><i class="mdi mdi-account-multiple-plus"></i>  Add Employer </span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                       <!--  <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                               
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                
                                            </div>
                                            <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                
                                            </div>
                                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                
                                            </div>
                                        </div> -->
        
                                    </div>
                                </div>
                         

                        <div class="card">
                            <div class="col-lg-4">
                                
                                     <h5>Margin Performance Leaderboard</h5>
                                     
                                   
                            </div>        
                          <div class="col-lg-8" style="position: absolute;margin-left: 328px;">     
                            <div class="row"> 
                                <div class="col-md-6">
                            <div class="form-group">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                          <option value="">All Traders</option>
                                          <option value="AE">ABC</option>
                                          <option value="VI">ABC</option>
                                          <option value="MC">ABC</option>
                                          <option value="DI">ABC</option>
                                     </select>
                                 </div>
                                 </div>
                                 <div class="col-md-6">
                                 <div class="form-group">
                                      <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                          <option value="">All Margen</option>
                                          <option value="AE">ABC</option>
                                          <option value="VI">ABC</option>
                                          <option value="MC">ABC</option>
                                          <option value="DI">ABC</option>
                                     </select>
                                 </div>
                                  </div>
                                 </div>
                       
                                 
                                
                            </div>
                                     
                        </div>    


                       <div class="row">
                             <div class="col-xl-4 col-md-6">
                              <div class="button-wrap">
                              <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked"/>
                              <label class="button-label" for="yes-button">
                                
                              <div class="card-body" style="height: 260px;text-align: center;padding: 20px;">
                                  <div class="mb-4">
                                      <h3>Todays Leader</h3>
                                      <small>John Wigg - UK Team</small>
                                      <h2>$44,987.<small style="font-size: 18px;">86</small></h2>
                                      <p style="color: #d2d2d2;">$430 Spend @50% Average Margin %<br>($2,100 AMV) 206 Orders</p>
                                     
                                      
                                  </div>
                                  
                              </div>
                               
                              </label>
                             

                              </div>
                              
                            </div>
                            <div class="col-xl-4 col-md-6">
                              <div class="button-wrap">
                                  <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button" checked="checked"/>
                                  <label class="button-label" for="van-button">
                                     <div class="card-body" style="height: 260px;text-align: center;padding: 20px;">
                                  <div class="mb-4">
                                      <h3>Todays Leader</h3>
                                      <small>John Wigg - UK Team</small>
                                      <h2>$44,987.<small style="font-size: 18px;">86</small></h2>
                                      <p style="color: #d2d2d2;">$430 Spend @50% Average Margin %<br>($2,100 AMV) 206 Orders</p>
                                     
                                      
                                  </div>
                                  
                              </div>
                                  </label>
                                  

                                  </div>
                               
                            </div>
                             <div class="col-xl-4 col-md-6">
                              <div class="button-wrap">
                                <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2" checked="checked"/>
                                <label class="button-label" for="van-button2">
                                  <div class="card-body" style="height: 260px;text-align: center;padding: 20px;">
                                  <div class="mb-4">
                                      <h3>Todays Leader</h3>
                                      <small>John Wigg - UK Team</small>
                                      <h2>$44,987.<small style="font-size: 18px;">86</small></h2>
                                      <p style="color: #d2d2d2;">$430 Spend @50% Average Margin %<br>($2,100 AMV) 206 Orders</p>
                                     
                                      
                                  </div>
                                  
                              </div>
                                </label>
                               

                                </div>
                               
                            </div>
                           
                        </div>
                   
                       

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="cardh">
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Trader</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Orders(Today)</th>
                                                    <th scope="col">Order(Week)</th>
                                                    <th scope="col">Order(Month)</th>
                                                    <th scope="col">Total Orders</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody >
                                                  <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                     <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>

                                                   <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                     <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>
                                                   <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                     <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>
                                                   <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>
                                                   <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>
                                                   <tr>
                                                    <th>John Wing</th>
                                                    <td>
                                                        <div>
                                                            <img src="assets/images/flags/germany_flag.jpg" alt="" height="12" class="thumb-md rounded-circle mr-2" data-toggle="tooltip" title="USA!">
                                                        </div>
                                                    </td>
                                                     <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>$1270.00</th>
                                                    <th>9999</th>
                                                    
                                                    
                                                  </tr>

                                                 
                                                 
                                                </tbody>

                                                <thead>
                                                  <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"><a href=""><i class="mdi mdi-reload"></i> Load More</a></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    
                                                  </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->



  


                </div>
                <!-- content -->
<style type="text/css">
  .modal .modal-content {
    background: #36394c;
    border-color: #36394c;
}
.form-control {
    font-size: 14px;
    color: #dee2e6 !important;
    background: #36394c;
    border-color: rgba(255, 255, 255, 0.07);
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
                        <h5>Add new Product</h5>
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
<script type="text/javascript">
  <script type="text/javascript">
   
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

</script>

<?php include 'footer.php'; ?>