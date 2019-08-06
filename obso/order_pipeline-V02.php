<?php include 'sidebar.php'; ?>
<style type="text/css">
  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background: #261f48;
}
.app-search .form-control, .app-search .form-control:focus {
    border: 1px solid #160f38;
    font-size: 13px;
    height: 34px;
    padding-left: 18px;
    padding-right: 40px;
    margin-right: 14px;
    background: #261f48;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 30px;
    width: 200px;
}
  .test:after {
    content: '\2807';
    font-size: 25px;
    position: absolute;
    margin-left: 0px;
    cursor: pointer;
}
.dropdown-menu.show {
    display: block;
    position: absolute;
    will-change: transform;
    top: 0px !important;
    padding: 5px !important;
    left: 0px !important;
    transform: translate3d(0px, 0px, 0px);
}
.dropdown-menu li {
    background: #160f38;
}
.dropdown-menu li:hover {
    background: #160f38;
}
.dropdown-menu {
    padding: 4px 0;
    font-size: 14px;
    -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    box-shadow: 0px 0px 13px 0px rgb(22, 15, 56);
    background-color: #160f38;
    border-color: #2a3142;
    margin: 0;
}

</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbspSales Company List</small>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->

      <!--Tabs start -->
      <div class="cards" style="background: #160f38">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
               <span class="d-none d-sm-block">
                Ready to order/ Ordered(33)<br>
              $12345612</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                 <span class="d-none d-sm-block">Supplier Order/Inbound Pipeline(33)<br>$123456123</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" style="background: #261f48;">
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Customer Deliveries(214)<br>$123456123</span> 
              </a>
            </li>
           
          </ul>
        </div>
      </div>

     
        <div class="row" style="margin: 0px;background: #160f38;">
          <div class="col-sm-8">
            <form role="search" class="app-search">
              <div class="form-group mb-0">
                <input type="text" class="form-control" placeholder="Search.." style="width: 660px;">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-sm-4" style="text-align: right;margin-top: 20px;">
            <h4>Customer Deliveries(214)</h4> 
          </div>

        </div>
        <hr>


        <div class="row" style="margin-top: 20px;">
          <div class="col-md-8">
            <div class="card" style="background: #1c1936;padding: 0px;margin-bottom: 10px;">
             
                <div class="row m-0">
                  <div class="col-md-6 p-0">
                      <div class="row m-0">
                        <div class="col-md-1 p-2" style="background: #160f38">
                          <i class="ion ion-md-globe" style="font-size: 20px;"></i>
                       
                      </div>
                      
                      <div class="col-md-11 p-0" style="background: #261f48;">
                        <h6><strong>Company Name:</strong> Cocacola</h6>
                     
                      </div> 
                    </div>

                  </div>
                   <div class="col-md-6"> 
                    <div class="row">
                        <div class="col-md-2 p-0" style="background: #160f38">
                      <img src="assets/images/flags/french_flag.jpg" style="border-radius: 50%;width: 24px;;position: absolute;margin-top: 5px;height: 21px;    margin-left: 10px;">
                      </div>
                      
                      <div class="col-md-9 p-0" style="background: #261f48;">
                        <h6> <strong>Based in :</strong>Florida USA</h6>
                     
                      </div> 
                     
                        <div class="col-md-1 test p-0"  style="background: #160f38;" id="menu1" data-toggle="dropdown"></div>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Inbound Shipments(parts ordered)</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hold on Shelf,Add note & Notify</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Progress to Outbound Shipments</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Delivered</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Complete</a></li>
                            <hr>

                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight as Urgent</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Remove Urgent Status</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Add Note</a></li>
                            <hr>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Trader alert & Add Note</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Assign Purchase Co-Ordinator</a></li>
                            <hr>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Archive EQO</a></li>
                          </ul>

                    </div>
                    </div>
                 
        </div>

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-9 p-0">
                    <div class="row">
                      <div class="col-md-8" style="padding: 10px;border-right: 1px solid #fff;background: #261f48;">
                        <p>
                      Order ID: 234566<br>
                      Parts Ordered: 152 view list<br>
                      Price: $25,256.65<br>
                      Shipment: 986664 | Dispatched: 1 of 1 | ETA: 11.7.19<br>
                      Delivery: DHL Express | Tracking: NZ08236021562
                      </p>
                      </div>
                      <div class="col-md-4" style="background: #261f48;padding: 10px;">
                         <p>
                           Delivering To:<br>
                            1416 American Road<br>
                            Chicago, IL 600
                         </p> 
                      </div>
                    </div>  
                    
                  </div>
                  <div class="col-md-3" style="background: #261f48;border-left: 1px solid #fff;">
                    <p>Note: </p>
                  </div>
                </div> 
              </div> 

            </div>
         </div>

        </div>   

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12 p-0">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 m-0 p-0">
                <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;width: 65%">
                      <option value="">St. John Wigg(UK team)</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
              </div>


              </div> 

               <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <p>PC: Leroy Spence</p>
              </div>
            </div>
         </div>
        </div>  

    </div>


     <div class="card" style="background: #1c1936;padding: 0px;margin-bottom: 10px;">
             
                <div class="row m-0">
                  <div class="col-md-6 p-0">
                      <div class="row m-0">
                        <div class="col-md-1 p-2" style="background: #160f38">
                          <i class="ion ion-md-globe" style="font-size: 20px;"></i>
                       
                      </div>
                      
                      <div class="col-md-11 p-0" style="background: #261f48;">
                        <h6><strong>Company Name:</strong> Cocacola</h6>
                     
                      </div> 
                    </div>

                  </div>
                   <div class="col-md-6"> 
                    <div class="row">
                        <div class="col-md-2 p-0" style="background: #160f38">
                      <img src="assets/images/flags/french_flag.jpg" style="border-radius: 50%;width: 24px;;position: absolute;margin-top: 5px;height: 21px;    margin-left: 10px;">
                      </div>
                      
                      <div class="col-md-9 p-0" style="background: #261f48;">
                        <h6> <strong>Based in :</strong>Florida USA</h6>
                     
                      </div> 
                     
                        <div class="col-md-1 test p-0"  style="background: #160f38;" id="menu1" data-toggle="dropdown"></div>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Inbound Shipments(parts ordered)</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hold on Shelf,Add note & Notify</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Progress to Outbound Shipments</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Delivered</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Complete</a></li>
                            <hr>

                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight as Urgent</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Remove Urgent Status</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Add Note</a></li>
                            <hr>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Trader alert & Add Note</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Assign Purchase Co-Ordinator</a></li>
                            <hr>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Archive EQO</a></li>
                          </ul>

                    </div>
                    </div>
                 
        </div>

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-9 p-0">
                    <div class="row">
                      <div class="col-md-8" style="padding: 10px;border-right: 1px solid #fff;background: #261f48;">
                        <p>
                      Order ID: 234566<br>
                      Parts Ordered: 152 view list<br>
                      Price: $25,256.65<br>
                      Shipment: 986664 | Dispatched: 1 of 1 | ETA: 11.7.19<br>
                      Delivery: DHL Express | Tracking: NZ08236021562
                      </p>
                      </div>
                      <div class="col-md-4" style="background: #261f48;padding: 10px;">
                         <p>
                           Delivering To:<br>
                            1416 American Road<br>
                            Chicago, IL 600
                         </p> 
                      </div>
                    </div>  
                    
                  </div>
                  <div class="col-md-3" style="background: #261f48;border-left: 1px solid #fff;">
                    <p>Note: </p>
                  </div>
                </div> 
              </div> 

            </div>
         </div>

        </div>   

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12 p-0">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 m-0 p-0">
                <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;width: 65%">
                      <option value="">St. John Wigg(UK team)</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
              </div>


              </div> 

               <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <p>PC: Leroy Spence</p>
              </div>
            </div>
         </div>
        </div>  

    </div>


     <div class="card" style="background: #1c1936;padding: 0px;margin-bottom: 10px;">
             
                <div class="row m-0">
                  <div class="col-md-6 p-0">
                      <div class="row m-0">
                        <div class="col-md-1 p-2" style="background: #160f38">
                          <i class="ion ion-md-globe" style="font-size: 20px;"></i>
                       
                      </div>
                      
                      <div class="col-md-11 p-0" style="background: #261f48;">
                        <h6><strong>Company Name:</strong> Cocacola</h6>
                     
                      </div> 
                    </div>

                  </div>
                   <div class="col-md-6"> 
                    <div class="row">
                        <div class="col-md-2 p-0" style="background: #160f38">
                      <img src="assets/images/flags/french_flag.jpg" style="border-radius: 50%;width: 24px;;position: absolute;margin-top: 5px;height: 21px;    margin-left: 10px;">
                      </div>
                      
                      <div class="col-md-9 p-0" style="background: #261f48;">
                        <h6> <strong>Based in :</strong>Florida USA</h6>
                     
                      </div> 
                     
                        <div class="col-md-1 test p-0"  style="background: #160f38;" id="menu1" data-toggle="dropdown"></div>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Move to Inbound Shipments(parts ordered)</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hold on Shelf,Add note & Notify</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Progress to Outbound Shipments</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Delivered</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Marks as Complete</a></li>
                            <hr>

                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Highlight as Urgent</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Remove Urgent Status</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Add Note</a></li>
                            <hr>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Trader alert & Add Note</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Assign Purchase Co-Ordinator</a></li>
                            <hr>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Archive EQO</a></li>
                          </ul>

                    </div>
                    </div>
                 
        </div>

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-9 p-0">
                    <div class="row">
                      <div class="col-md-8" style="padding: 10px;border-right: 1px solid #fff;background: #261f48;">
                        <p>
                      Order ID: 234566<br>
                      Parts Ordered: 152 view list<br>
                      Price: $25,256.65<br>
                      Shipment: 986664 | Dispatched: 1 of 1 | ETA: 11.7.19<br>
                      Delivery: DHL Express | Tracking: NZ08236021562
                      </p>
                      </div>
                      <div class="col-md-4" style="background: #261f48;padding: 10px;">
                         <p>
                           Delivering To:<br>
                            1416 American Road<br>
                            Chicago, IL 600
                         </p> 
                      </div>
                    </div>  
                    
                  </div>
                  <div class="col-md-3" style="background: #261f48;border-left: 1px solid #fff;">
                    <p>Note: </p>
                  </div>
                </div> 
              </div> 

            </div>
         </div>

        </div>   

        <div class="row" style="margin-top: 5px;">
            <div class="col-md-12 p-0">
            <div class="row m-0">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 m-0 p-0">
                <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;width: 65%">
                      <option value="">St. John Wigg(UK team)</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
              </div>


              </div> 

               <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <p>PC: Leroy Spence</p>
              </div>
            </div>
         </div>
        </div>  

    </div>



   


    



  </div>

   <div class="col-md-4">
        <form action="#">
            <div class="card" style="background: #160f38;">
                <div class="card-body" style="margin: 5px;">
                    <p>Search Filter 1</p>

                    <div class="form-group text-center">
                   <div class="form-control" style="color: #673ab7 !important;background: #160f38;">Boxes Out Today: 77</div>
                </div>

                <div class="form-group text-center">
                   <div class="form-control" style="color: #ff9800 !important;background: #160f38;">Boxes Due Out Today: 177</div>
                </div>

                <div class="form-group text-center">
                   <div class="form-control" style="color: #673ab7 !important;background: #160f38;">Deliveries Complete Today: 107</div>
                </div>

                <div class="form-group text-center">
                   <div class="form-control" style="color: #ff9800 !important;background: #160f38;">Deliveries Due Today: 107</div>
                </div>

              <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;">
                      <option value="">Choose Team/Employee</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
              </div>
                    
              <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;">
                      <option value="">Sort by</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
             </div>

              <div class="form-group">
                  <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #160f38;">
                      <option value="">Sort by</option>
                      <option value="AE">ABC</option>
                      <option value="VI">ABC</option>
                      <option value="MC">ABC</option>
                      <option value="DI">ABC</option>
                 </select>
             </div>

             

            
          </div>


      </div>


    </form>
  </div> 

         
       
    </div>
  

</div>
</div>
</div>

<?php include 'footer.php'; ?>