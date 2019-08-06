<?php include 'sidebar.php'; ?>
<style type="text/css">
  .test:after {
    content: '\2807';
    font-size: 18px;
    position: relative;
    margin-left: 233px;
    cursor: pointer;
    /* margin-top: -8px; */
}
.dropdown-menu.show {
    display: block;
    position: absolute;
    will-change: transform;
    top: -10px !important;
    padding: 10px !important;
    left: 158px !important;
    transform: translate3d(0px, 0px, 0px);
}
.dropdown-menu li:hover {
    background: #626ed4;
}
</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbspEmployee List</small>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->

      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light" style="background: #242b3d;">
              <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">
                All Employee</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light" style="border-right: 2px solid #242b3d;">
              <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">New Employee</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Top Employee</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active" data-toggle="tab" href="#settings-1" role="tab" style="background: #626ed4;">
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Leaderboards</span>    
              </a>
            </li>
          </ul>
        </div>
      </div>

     
        <div class="row" style="margin: 10px;">
          <div class="col-sm-8">
            <form role="search" class="app-search">
              <div class="form-group mb-0">
                <input type="text" class="form-control" placeholder="Search.." style="width: 660px;">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-sm-4" style="text-align: right;margin-top: 8px;">
            <h4>Potentials Suppliers 908,777</h4> 
          </div>

        </div>
        <hr>

        <div class="row" style="margin-top: 20px;">
          <div class="col-sm-8">
            <div class="card p-0">
             
                <div class="row" style="margin-bottom: -6px;">
                  <div class="col-md-7" style="border-right: 2px solid #2a3142;">

                      <div class="col-md-12" style="padding: 25px;">
                          <i class="fa fa-venus fa-2x" aria-hidden="true" style="border-radius: 50%;width: 30px;;position: absolute;margin-top: 10px;height: 26px;"></i>
                   
                      <div style="margin-left: 50px;">
                      <p> Name: <strong style="font-size: 16px;font-weight: bold;"> John Wigg</strong><br>
                       Designation: <strong style="font-size: 16px;"> Sales Manager</strong><br>
                       Permission Access: <strong style="font-size: 16px;"> Sales</strong><br>
                       Id Proof: <strong style="font-size: 16px;color: #2196f3;"> Passport.jpeg</strong><br>
                      
                    </div>
                     <div style="margin-left: 50px;">
                     <small>Employee Id: <strong style="font-size: 12px;font-weight: bold;"> OBSO-S2569</strong><br></small>
                      
                    </div>
                  </div>
                      
                  </div>
                   <div class="col-md-5"> 
                    
                    <div class="col-md-12 test" id="menu1" data-toggle="dropdown" style="text-align: right;"></div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                         
                    </ul>
                  
                    <div class="col-md-12" style="padding-right: 0px;">
                      <p> Number: <strong style="font-size: 16px;"> +91 959 959 8888</strong><br>
                       Email: <strong style="font-size: 16px;"> example@gmail.com</strong><br>
                       Address: <strong style="font-size: 12px;font-weight: bold;"> 4684 Richards Avenue, Stockton, CA, California, 95204 </strong><br>
                      
                        
                      </div>
                     
                       <div class="col-md-12" style="padding-right: 0px;">
                         <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 77px;border-radius: 0px;margin-left: 174px;margin-top: 8px;">
                    More info</button>
                      </div>
                      
                  </div>
         
        </div>
    </div>

<div class="card p-0">
             
                <div class="row" style="margin-bottom: -6px;">
                  <div class="col-md-7" style="border-right: 2px solid #2a3142;">

                      <div class="col-md-12" style="padding: 25px;">
                          <i class="fa fa-venus fa-2x" aria-hidden="true" style="border-radius: 50%;width: 30px;;position: absolute;margin-top: 10px;height: 26px;"></i>
                   
                      <div style="margin-left: 50px;">
                      <p> Name: <strong style="font-size: 16px;font-weight: bold;"> John Wigg</strong><br>
                       Designation: <strong style="font-size: 16px;"> Sales Manager</strong><br>
                       Permission Access: <strong style="font-size: 16px;"> Sales</strong><br>
                       Id Proof: <strong style="font-size: 16px;color: #2196f3;"> Passport.jpeg</strong><br>
                      
                    </div>
                     <div style="margin-left: 50px;">
                     <small>Employee Id: <strong style="font-size: 12px;font-weight: bold;"> OBSO-S2569</strong><br></small>
                      
                    </div>
                  </div>
                      
                  </div>
                   <div class="col-md-5"> 
                    
                    <div class="col-md-12 test" id="menu1" data-toggle="dropdown" style="text-align: right;"></div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                         
                    </ul>
                  
                    <div class="col-md-12" style="padding-right: 0px;">
                      <p> Number: <strong style="font-size: 16px;"> +91 959 959 8888</strong><br>
                       Email: <strong style="font-size: 16px;"> example@gmail.com</strong><br>
                       Address: <strong style="font-size: 12px;font-weight: bold;"> 4684 Richards Avenue, Stockton, CA, California, 95204 </strong><br>
                      
                        
                      </div>
                     
                       <div class="col-md-12" style="padding-right: 0px;">
                         <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 77px;border-radius: 0px;margin-left: 174px;margin-top: 8px;">
                    More info</button>
                      </div>
                      
                  </div>
         
        </div>
    </div>


    <div class="card p-0">
             
                <div class="row" style="margin-bottom: -6px;">
                  <div class="col-md-7" style="border-right: 2px solid #2a3142;">

                      <div class="col-md-12" style="padding: 25px;">
                          <i class="fa fa-venus fa-2x" aria-hidden="true" style="border-radius: 50%;width: 30px;;position: absolute;margin-top: 10px;height: 26px;"></i>
                   
                      <div style="margin-left: 50px;">
                      <p> Name: <strong style="font-size: 16px;font-weight: bold;"> John Wigg</strong><br>
                       Designation: <strong style="font-size: 16px;"> Sales Manager</strong><br>
                       Permission Access: <strong style="font-size: 16px;"> Sales</strong><br>
                       Id Proof: <strong style="font-size: 16px;color: #2196f3;"> Passport.jpeg</strong><br>
                      
                    </div>
                     <div style="margin-left: 50px;">
                     <small>Employee Id: <strong style="font-size: 12px;font-weight: bold;"> OBSO-S2569</strong><br></small>
                      
                    </div>
                  </div>
                      
                  </div>
                   <div class="col-md-5"> 
                    
                    <div class="col-md-12 test" id="menu1" data-toggle="dropdown" style="text-align: right;"></div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                         
                    </ul>
                  
                    <div class="col-md-12" style="padding-right: 0px;">
                      <p> Number: <strong style="font-size: 16px;"> +91 959 959 8888</strong><br>
                       Email: <strong style="font-size: 16px;"> example@gmail.com</strong><br>
                       Address: <strong style="font-size: 12px;font-weight: bold;"> 4684 Richards Avenue, Stockton, CA, California, 95204 </strong><br>
                      
                        
                      </div>
                     
                       <div class="col-md-12" style="padding-right: 0px;">
                         <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 77px;border-radius: 0px;margin-left: 174px;margin-top: 8px;">
                    More info</button>
                      </div>
                      
                  </div>
         
        </div>
    </div>



    <div class="card p-0">
             
                <div class="row" style="margin-bottom: -6px;">
                  <div class="col-md-7" style="border-right: 2px solid #2a3142;">

                      <div class="col-md-12" style="padding: 25px;">
                         <i class="fa fa-venus fa-2x" aria-hidden="true" style="border-radius: 50%;width: 30px;;position: absolute;margin-top: 10px;height: 26px;"></i>
                   
                      <div style="margin-left: 50px;">
                      <p> Name: <strong style="font-size: 16px;font-weight: bold;"> John Wigg</strong><br>
                       Designation: <strong style="font-size: 16px;"> Sales Manager</strong><br>
                       Permission Access: <strong style="font-size: 16px;"> Sales</strong><br>
                       Id Proof: <strong style="font-size: 16px;color: #2196f3;"> Passport.jpeg</strong><br>
                      
                    </div>
                     <div style="margin-left: 50px;">
                     <small>Employee Id: <strong style="font-size: 12px;font-weight: bold;"> OBSO-S2569</strong><br></small>
                      
                    </div>
                  </div>
                      
                  </div>
                   <div class="col-md-5"> 
                    
                    <div class="col-md-12 test" id="menu1" data-toggle="dropdown" style="text-align: right;"></div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                         
                    </ul>
                  
                    <div class="col-md-12" style="padding-right: 0px;">
                      <p> Number: <strong style="font-size: 16px;"> +91 959 959 8888</strong><br>
                       Email: <strong style="font-size: 16px;"> example@gmail.com</strong><br>
                       Address: <strong style="font-size: 12px;font-weight: bold;"> 4684 Richards Avenue, Stockton, CA, California, 95204 </strong><br>
                      
                        
                      </div>
                     
                       <div class="col-md-12" style="padding-right: 0px;">
                         <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 77px;border-radius: 0px;margin-left: 174px;margin-top: 8px;">
                    More info</button>
                      </div>
                      
                  </div>
         
        </div>
    </div>



    <div class="card p-0">
             
                <div class="row" style="margin-bottom: -6px;">
                  <div class="col-md-7" style="border-right: 2px solid #2a3142;">

                      <div class="col-md-12" style="padding: 25px;">
                        <i class="fa fa-venus fa-2x" aria-hidden="true" style="border-radius: 50%;width: 30px;;position: absolute;margin-top: 10px;height: 26px;"></i>
                   
                      <div style="margin-left: 50px;">
                      <p> Name: <strong style="font-size: 16px;font-weight: bold;"> John Wigg</strong><br>
                       Designation: <strong style="font-size: 16px;"> Sales Manager</strong><br>
                       Permission Access: <strong style="font-size: 16px;"> Sales</strong><br>
                       Id Proof: <strong style="font-size: 16px;color: #2196f3;"> Passport.jpeg</strong><br>
                      
                    </div>
                     <div style="margin-left: 50px;">
                     <small>Employee Id: <strong style="font-size: 12px;font-weight: bold;"> OBSO-S2569</strong><br></small>
                      
                    </div>
                  </div>
                      
                  </div>
                   <div class="col-md-5"> 
                    
                    <div class="col-md-12 test" id="menu1" data-toggle="dropdown" style="text-align: right;"></div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                         
                    </ul>
                  
                    <div class="col-md-12" style="padding-right: 0px;">
                      <p> Number: <strong style="font-size: 16px;"> +91 959 959 8888</strong><br>
                       Email: <strong style="font-size: 16px;"> example@gmail.com</strong><br>
                       Address: <strong style="font-size: 12px;font-weight: bold;"> 4684 Richards Avenue, Stockton, CA, California, 95204 </strong><br>
                      
                        
                      </div>
                     
                       <div class="col-md-12" style="padding-right: 0px;">
                         <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 77px;border-radius: 0px;margin-left: 174px;margin-top: 8px;">
                    More info</button>
                      </div>
                      
                  </div>
         
        </div>
    </div>


  </div>

   <div class="col-lg-4">
        <form action="#">
            <div class="card" style="background: #2a3142;">
                <div class="card-body" style="margin: 20px;">
                    <p>Search Filter 1</p>
             <div class="form-group text-center">
                  <input type="text" name="searchemp" class="form-control" placeholder="New Employee">
                  
                </div>

             <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                      <option value="">Only Show</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
              </div>

              <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                      <option value="">Region/Country Select</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
             </div>

               <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                      <option value="">Sort by</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
             </div>
          </div>


      </div>

            <div class="cardside" style="margin-top: 20px;margin-bottom: 20px;">
               
                <div>

                  <button type="button" class="btnside btn-secondary waves-effect waves-light btnenq" data-toggle="modal" data-target=".bs-example-modal-center"><i class="ti-email"></i>Add New Employee</button>

                   <!--  <button type="button" class="btnside btn-secondary btn-sm waves-effect btnenq"><i class="ti-email"></i> Add New Employee</button> -->

                </div>
               
            </div>
    </form>
  </div> 

         
       
    </div>
  

</div>
</div>
</div>

<?php include 'footer.php'; ?>