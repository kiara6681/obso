<?php include 'sidebar.php'; ?>
<style type="text/css">
  img {
  border-radius: 50%;
}
  h1 {
    margin: 10px 0;
    font-family: "Open sans";
    font-weight: normal;
}
  .infoicon{
       margin-left: 636px;
    color: #9E9E9E;
    position: absolute;
    margin-top: -32px;
  }
  .dropdown-menu li:hover {
    background: #2f89fc;
    color: #2f89fc;
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
.btn-primary:hover{
    background: #2f89fc !important;
    color: #fff !important;
    border: 1px solid #2f89fc !important;
}
.button-label:hover {
    background: #2f89fc !important;
    color: #fff;
}
#yes-button:checked + .button-label {
    background: #c;
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
.btn-primary {
    background-color: #222831 !important;
    border: 1px solid #222831 !important;
}
.btn-primary:hover{
    background: #2f89fc !important;
    color: #fff !important;
    border: 1px solid #2f89fc !important;
}
.btn-primary.focus, .btn-primary:focus, .btn-outline-primary.focus, .btn-outline-primary:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
    -webkit-box-shadow: 0 0 0 2px rgba(98, 110, 212, 0.3);
    box-shadow: 0 0 0 2px rgb(47, 137, 252);
    background: rgb(47, 137, 252) !important;
}
.btn-secondary:hover {
    color: #fff;
    background-color: #f58b54 !important;
    border-color: #f58b54 !important;
}
.btn {
    border-radius: 3px;
    font-size: 14px;
    padding: 0px;
    padding: 10px;
}

</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Sales Database &nbsp > &nbsp Customer List
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->


      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link suspect" data-toggle="tab" href="#home-1" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">
                Suspects(908,777)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link prospect" data-toggle="tab" href="#profile-1" role="tab">
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">Prospects(908)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link account" data-toggle="tab" href="#messages-1" role="tab">
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Account(112)</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active chathistry" data-toggle="tab" href="#settings-1" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i>&nbspChat History</span>    
              </a>
            </li>
          </ul>
        </div>
      </div>



      <div class="row">
        <div class="col-12">
          
              <div class="row">
                <div class="col-xl-8 col-md-4 col-sm-6">
                  <h3>
                    <input type="text" class="form-control ipt-rds" placeholder="Search..">
                  </h3>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                  <h4>All Suspects(908,777)</h4>
                </div>
              </div>      
            </div>
          <hr>
      </div> 

      <hr style="margin-bottom: 15px !important;">

      
      <div class="row">
        <div class="col-md-8 col-sm-6">


          <div class="card p-0">
            <div class="card-body">
              <div class="row p-9">
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <img src="assets/images/flags/french_flag.jpg" class="cntry-flag">
                  <div class="col-md-12 m-l-30">
                    <p> 
                      Company  : <strong style="font-size: 20px;"> Societic Magtec</strong><br>
                      Industry : <strong> Pharmaceutical</strong><br>
                      Location :  <strong>Derbyshire</strong><br>
                      Total Spend :  <strong>$28,987.50 (53% anum)</strong><br>
                      Payment Terms :  <strong>Advance</strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-xl-12">
                          <p>
                            Manufacturer : <strong>Simens, Allen Bradely, Omron <a href=""><span style="color: #166de4;">more</span></a></strong><br>
                            Requirement : <strong>Daily/Est.</strong><br>
                            Pricing : <strong>Yes</strong><br>
                            Spend :  <strong>$1M+</strong><br>
                            Vendor Information : <strong> 086086</strong><br>
                            <span style="color: green;">Enquiry Active</span> (35) 3 Days ago <span style="color:#ff6961">Order Doormant</span> (3) 8 months ago<br>
                            <i class="fas fa-info-circle fa-3x infoicon"></i>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Prospect</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                      </ul>
                    </div>

                   
                  </div>
                </div>
              </div>      
            </div>
          </div>



          <div class="card p-0">
            <div class="card-body">
              <div class="row p-9">
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <img src="assets/images/flags/french_flag.jpg" class="cntry-flag">
                  <div class="col-md-12 m-l-30">
                    <p> 
                      Company  : <strong style="font-size: 20px;"> Societic Magtec</strong><br>
                      Industry : <strong> Pharmaceutical</strong><br>
                      Location :  <strong>Derbyshire</strong><br>
                      Total Spend :  <strong>$28,987.50 (53% anum)</strong><br>
                      Payment Terms :  <strong>Advance</strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-md-12">
                          <p>
                            Manufacturer : <strong>Simens, Allen Bradely, Omron <a href=""><span style="color: #166de4;">more</span></a></strong><br>
                            Requirement : <strong>Daily/Est.</strong><br>
                            Pricing : <strong>Yes</strong><br>
                            Spend :  <strong>$1M+</strong><br>
                            Vendor Information : <strong> 086086</strong><br>
                            <span style="color: green;">Enquiry Active</span> (35) 3 Days ago <span style="color:#ff6961">Order Doormant</span> (3) 8 months ago<br>
                            <i class="fas fa-info-circle fa-3x infoicon"></i>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Prospect</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                      </ul>
                    </div>

                   
                  </div>
                </div>
              </div>      
            </div>
          </div>


           <div class="card p-0">
            <div class="card-body">
              <div class="row p-9">
                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <img src="assets/images/flags/french_flag.jpg" class="cntry-flag">
                  <div class="col-md-12 m-l-30">
                    <p> 
                      Company  : <strong style="font-size: 20px;"> Societic Magtec</strong><br>
                      Industry : <strong> Pharmaceutical</strong><br>
                      Location :  <strong>Derbyshire</strong><br>
                      Total Spend :  <strong>$28,987.50 (53% anum)</strong><br>
                      Payment Terms :  <strong>Advance</strong>
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-md-12">
                          <p>
                            Manufacturer : <strong>Simens, Allen Bradely, Omron <a href=""><span style="color: #166de4;">more</span></a></strong><br>
                            Requirement : <strong>Daily/Est.</strong><br>
                            Pricing : <strong>Yes</strong><br>
                            Spend :  <strong>$1M+</strong><br>
                            Vendor Information : <strong> 086086</strong><br>
                            <span style="color: green;">Enquiry Active</span> (35) 3 Days ago <span style="color:#ff6961">Order Doormant</span> (3) 8 months ago<br>
                            <i class="fas fa-info-circle fa-3x infoicon"></i>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Prospect</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mark Inactive</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                      </ul>
                    </div>

                   
                  </div>
                </div>
              </div>      
            </div>
          </div>
          
            </div>




            <div class="col-md-4 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <h6>Search Filter</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" style="background: #36394c"><i class="ti-email"></i> 
                        New Companies</button>
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
                        <option value="">Team/Trader Select</option>
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
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <h6>Search Filter 2</h6>
                  </div>

                 
        <div class="button-wrap">
          <div class="form-group text-center" style="margin-bottom: 5px !important;">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked"/>
          <label class="button-label" for="yes-button" style="width: 100%;">
            <h1>Enquiry Active 76% 196</h1>
          </label>
          </div>
          <div class="form-group text-center" style="margin-bottom: 5px !important;">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
          <label class="button-label" for="no-button" style="width: 100%;">
            <h1>Order Active 76% 196</h1>
          </label>
          </div>
          <div class="form-group text-center" style="margin-bottom: 5px !important;">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button"/>
          <label class="button-label" for="maybe-button" style="width: 100%;">
            <h1>Current Year Margin $255,777</h1>
          </label>
          </div>
          <div class="form-group text-center" style="margin-bottom: 5px !important;">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
          <label class="button-label" for="van-button" style="width: 100%;">
            <h1>Enquiry Dormant 24% 61</h1>
          </label>
          </div>
          <div class="form-group text-center" style="margin-bottom: 5px !important;">
          <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2"/>
          <label class="button-label" for="van-button2" style="width: 100%;">
            <h1>Marketed in last month 24% 6</h1>
          </label>
        </div>
        
      </div>


                
                </div>
              </div>



              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <div class="button-items">
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius"><i class="ti-email"></i> Add New Enquiry</button>
                      <br>
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius"><i class="mdi mdi-cellphone-text"></i> Add New Company Records</button>

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

<?php include 'footer.php'; ?>