<style>
  .dropdown-menu li:hover {
      color: #fff !important;
  }
</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Dashboard</b> &nbsp > &nbsp Supplier Company List
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      <!--Tabs start -->
      <div class="cards">
        <div class="card-body">

          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light border-rgt">
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/enquiry/all_enquiry_list"){ ?>
              <a class="nav-link" data-toggle="tab" href="<?php echo base_url(); ?>admin/enquiry/all_enquiry_list" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/enquiry/all_enquiry_list">
            <?php } ?>

                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">Unqualified Enquiry (<?php  echo $suspest; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/enquiry/prospects"){ ?>
              <a class="nav-link" data-toggle="tab" href="<?php echo base_url(); ?>admin/enquiry/prospects" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/enquiry/prospects">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">Quoted (<?php  echo $prospect; ?>)<br></span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/enquiry/partner"){ ?>
              <a class="nav-link suspect" data-toggle="tab" href="<?php echo base_url(); ?>admin/enquiry/partner" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/enquiry/partner">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Ready to Order/Ordered (<?php  echo $partnere; ?>)<br></span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/chat_history"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>

              
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block">Delivaries in transit()<br></span>    
              </a>
            </li>

             <li class="nav-item waves-effect waves-light border-rgt">
               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/chat_history"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>

              
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block">Deliveries call()<br></span>    
              </a>
            </li>

          </ul>
        </div>
      </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-8 col-md-4 col-sm-6">
                  <h3>
                    <input type="text" id="myInput" class="form-control ipt-rds" placeholder="Search..">
                  </h3>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="col-sm-12 text-center">
                        <h4>Ready to order(<?php  echo $partnere; ?>)</h4>
                  </div>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div> 

      <hr style="margin-bottom: 15px !important;">

      
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div id="myList">
           
          <?php $i = "1"; foreach ($data as $enq){ if($enq['suspus'] == 2){
            ?>
            
          <?php  
          $address = array(); 
         $companyname = $this->common_model->getcompanyname($id = $enq['company_id']);
         if(isset($companyname->session_id) && !empty($companyname->session_id)){
          $address = $this->common_model->getcompanyAddress($companyname->session_id); 
         }
         
         $industryname = $this->common_model->getindustryname($id = $enq['industry_id']);
         $contactname = $this->common_model->getcontactname($id = $enq['contact_id']);
         $qty = $this->common_model->getEnquiryInfoById($id =$enq['id']);

        
         $country_info = $this->common_model->getCountryInfo($enq['country_id']); 
         

          ?>
          <div class="card p-0">    
          <div class="card-body srchdv">
            <div class="row p-9" style="background: #5f5f5f;margin: 0px;" >

                
                 
                  <div class="col-xl-6">
                   <div class="row">
                    <div class="col-xl-12"> 
                      Company Name:
                      <strong style="font-size: 18px;">
                        &nbsp <?php echo (!empty($companyname->company_name)) ? $companyname->company_name : $enq['company_name_front']; ?>
                          
                        </strong>
                      </div>
                    </div>
                  </div>
                    <div class="col-xl-1" style="background: grey;">
                        <?php 
                        if(!empty($country_info->flag)){
                          ?>
                          <img src="<?= base_url(); ?>uploads/flags/<?= $country_info->flag; ?>" alt="flag" style="width:40px;height:40px;margin-top: 4px;"> 
                          <?php
                        }
                        ?>
                    </div>

                <div class="col-xl-4"> 
                
                   <?php
                  // if(count($address) > 0):
                  // foreach ($address as $addresss) : ?>
                  <div class="col-xl-12" style="padding: 5px;">
                    <div class="row">
                      Based In : &nbsp;<p>
                        <?php 
                        if(!empty($country_info)){
                          echo $country_info->name;
                        }
                        ?></p>
                    </div>  
                  </div>
                  <?php 
                  // endforeach;
                  //   endif;
                  ?>  

                </div>
                 <div class="col-xl-1">              
                    <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_enq_edit(<?php echo $enq['id']; ?>)">
                          <li role="presentation">Edit</li>
                        </a>
                        <a href="<?php echo base_url('admin/enquiry/delete/'.$enq['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">
                          <li role="presentation">Delete</li>
                        </a>
                        <!-- <li role="presentation"><a href="<?//php echo base_url('admin/enquiry/prospectstatus/'.$enq['id']) ?>">Quoted</a></li>

                        <li role="presentation"><a href="<?//php echo base_url('admin/enquiry/partnerstatus/'.$enq['id']) ?>">Ready to Order</a></li> -->
                      </ul>
                </div>
                  
                </div>
              
               
              

              <div class="row p-9" style="margin: 0px;">

                <div class="col-xl-8 col-md-4 col-sm-6">
                  <div class="row">
                 
                  <div class="col-xl-12">

                    <div class="row">
                        <div class="col-md-6">
                            <strong><?php  echo "Industry :"; ?>&nbsp<?php echo (!empty($industryname->industry)) ? $industryname->industry : ""; ?></strong>
                        </div>
                        <div class="col-md-6 text-right" style="color: #22ff22;">
                            Reference No. : <?= $enq['ref_number']; ?>
                        </div>                           
                    </div>     

                    <p> 

                      <?php 
                      $fullName = "";
                      
                        if(!empty($contactname)){
                         
                          $fullName = $contactname->fname. " ". $contactname->lname;
                        }
                       ?>
                       <br>
                      Contact Person :  <strong><?php echo (!empty($fullName)) ? $fullName : $enq['full_name'] ; ?> </strong><br>
                      Activity :  <strong>Activity</strong><br>

                      <?php
                      foreach ($qty as $qt => $quanty) {

                       echo "Qty : ";echo $quanty['qty']; echo "&nbsp&nbsp#";echo $quanty['part'];echo "<br>";

                      } ?>

                      Time :  <?= $enq['created_at']; ?> 
                      <!-- Qty : <strong>12 123 456-132 <a href="" style="color: #2196f3 !important;">Supplier Stock<?//php echo $enq['idproof'] ?></a></strong> -->
                    </p>
                   
                  </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-12">
                        <div class="col-xl-12 p-0">
                          <textarea class="form-control" placeholder="Note" style="width: 100%;height: 175px;"><?php echo $enq['lead2']; ?></textarea>
                         
                        </div>
                      
                    </div>

                    
                    </div>
                   <!--  <div class="col-md-12 text-right top33">
                      <a href="">
                      <i class="fas fa-info-circle fa-3x"></i></a>
                    </div> -->
                </div>
              </div>


               <div class="row p-9" style="height: 30px;margin: 0px;" >
                
                 
                  <div class="col-xl-8">
                  <div class="col-xl-12">
                             
                   <div class="row">Trader Name : &nbsp<p> <?php echo $_SESSION['name'];?></p></div>
                </div>
                  </div>
                 <div class="col-xl-4" style="padding: 3px;">
                 
                    <div class="col-xl-12" style="background: red;">
                        <p>Status Unqualified</p>
                      
                    </div>

                    
                   
                   <!--  <div class="col-md-12 text-right top33">
                      <a href="">
                      <i class="fas fa-info-circle fa-3x"></i></a>
                    </div> -->
                </div>
                  
               
              </div>

            </div>
          </div>
           <?php $i++; } } ?>
        </div>
        </div>


          <!-- <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_employee_edit(<?php echo $enq['id']; ?>)">Edit</a></li>
                        <li role="presentation"><a href="<?php echo base_url('admin/employee/delete/'.$enq['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">Delete</a></li>
                        <li role="presentation"><a href="#" role="menuitem" tabindex="-1">Quoted</a></li>
                        <li role="presentation"><a href="#" role="menuitem" tabindex="-1">Ready to Order</a></li>
                      </ul>
                    </div> -->
     

            <div class="col-md-4 col-sm-6">
             <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <h6>Search Filter 1</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="form-group text-center">
                      <div class="button-items">
                     
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light" style="color: #0cff0c;">Enquiry Todays (<?php  echo $suspest; ?>)</button>

                    </div>
                     
                    </div>

                    <div class="form-group text-center">
                      <div class="button-items">
                     
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light" style="color: red;">Outstanding (<?php  echo $suspest; ?>)</button>

                    </div>
                     
                    </div>

                    

                    <div class="form-group">
                       <?php $countries = $this->common_model->select('country'); ?>
                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                          <option value="">Region/Country Select</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                      <select id="" name="" class="form-control">
                        <option value="">Sort by</option>
                        <option value="AE">Company Name A-Z</option>
                        <option value="AE">Company Name Z-A</option>
                        <option value="AE">No. of Enquries High to Low</option>
                        <option value="AE">No. of Enquries Low to High</option>
                        <option value="AE">Last Enquiry (earliest to latest)</option>
                        <option value="AE">Last Enquiry( latest to earliest)</option>
                        <option value="AE">No. of Orders High to Low</option>
                        <option value="AE">No. of Orders Low to High</option>
                        <option value="AE">Last Order (earliest to latest)</option>
                        <option value="AE">Last Order( latest to earliest)</option>
                        <option value="AE">GP High to Low</option>
                        <option value="AE">GP Low to High</option>
                        <option value="AE">Account Status Longest First</option>
                        <option value="AE">Account Status Shortest First</option>
                        <option value="AE">County/State A-Z</option>
                        <option value="AE">County/State Z-A</option>
                        <option value="AE">Country A-Z</option>
                        <option value="AE">Country Z-A</option>
                        <option value="AE">Industry A-Z</option>
                        <option value="AE">Industry Z-A</option>
                        <option value="AE">Trader A-Z</option>
                        <option value="AE">Trader Z-A</option>
                        <option value="AE">Number of Contacts High to Low</option>
                        <option value="AE">Number of Contacts Low to High</option>
                        <option value="AE">Last Sales Note (earliest to latest)</option>
                        <option value="AE">Last Sales Note ( latest to earliest)</option>
                      </select>
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

<script>

function get_enq_edit(id) {
      $.ajax({
            url: '<?php echo base_url();?>admin/enquiry/edit/' + id ,
            success: function(response)
            {
                jQuery('#edit-modal-body').html(response);
                $('#edit-enquiry').modal('show');
                //alert(response);
            }
        });
    }

    function deleteQty(id) {
      $.ajax({
            url: '<?php echo base_url();?>admin/enquiry/delete/' + id ,
            success: function(response)
            {
                
            }
        });
    }

</script>




<style type="text/css">
.clr {
    background: #222831 !important;
    border-color: #222831 !important;
}
.modal .form-control {
    font-size: 14px;
    color: #ffffff;
    background: #111418;
    border-color: rgb(17, 20, 24);
    border-radius: 10px !important;
}

    /* start modal*/
.modal .modal-content .modal-header, .modal .modal-content .modal-footer {
    border-color: #222831;
}

.modal .modal-content {
    background: #393e46;
    border-color: #393e46;
}
.modal-content {
    border-radius: .0rem;
}

/*end modal*/
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .srchdv").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>