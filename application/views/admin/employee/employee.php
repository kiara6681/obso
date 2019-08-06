
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
<?php
  $order=''; 
  $department='';
  $countryid='';
  if(isset($_GET['column'])){
     $order =$_GET['column'];
  }
  if(isset($_GET['sort'])){
     $order .='_'.$_GET['sort'];
  }
  if(isset($_GET['dep']))
  {
    $department=$_GET['dep'];
  }
  if(isset($_GET['country']))
  {
    $countryid=$_GET['country'];
  }  

?>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Employee Database</b> &nbsp > &nbsp Employee List
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
              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/all_employee_list"){ ?>
              <a class="nav-link suspect" data-toggle="tab" href="<?php echo base_url(); ?>admin/employee/all_employee_list" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/employee/all_employee_list">
            <?php } ?>

                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">All Employee (<?//php  echo $suspest; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

              <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/prospects"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                <span class="d-none d-sm-block">New Employee(<?//php  echo $prospect; ?>)</span> 
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">

               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/partner"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>


             
                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                <span class="d-none d-sm-block">Top Employee(<?//php  echo $partner; ?>)</span>   
              </a>
            </li>
            <li class="nav-item waves-effect waves-light border-rgt">
               <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/employee/chat_history"){ ?>
              <a class="nav-link" data-toggle="tab" href="#" role="tab" style="background: rgb(57, 54, 223);">
                <?php }else{ ?>
                  <a class="nav-link" href="#">
            <?php } ?>

              
                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Leaderboards</span>    
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
                <!-- <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">ADD NEW EMPLOYEE</button>
                  </div>
                </div> -->
              </div>      
            </div>
          </div>
        </div>
      </div> 

      <hr style="margin-bottom: 15px !important;">

      
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div id="myList">
           
          <?php foreach ($data as $employee_records){ ?>
             <?php  if (!($employee_records['role']=='admin')) { ?>
          <div class="card p-0">    
          <div class="card-body srchdv">
              <div class="row p-9">

                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                  <div class="row">
                  <div class="col-xl-2 text-center">              
                  <?php if ($employee_records['gender']=="male") {
                      echo "M";
                  }elseif ($employee_records['gender']=="female") {
                      echo "F";
                  } ?>
                </div>
                  <div class="col-xl-10">
                    <p> 
                      Name : <strong style="font-size: 20px;"> <?php echo $employee_records['first_name']; ?>  <?php echo $employee_records['last_name']; ?></strong><br>
                      Department :  <strong><?php echo $employee_records['department'] ?></strong><br>
                      Permission Access :  <strong><?php echo $employee_records['role'] ?></strong><br>
                      Id Proof : <strong><a href="" style="color: #2196f3 !important;"><?php echo $employee_records['idproof'] ?></a></strong>
                    </p>
                    <p>
                      Employee Id : <strong>OBSO-<?php echo $employee_records['empid'] ?></strong>
                    </p>
                  </div>
                  </div>
                </div>

                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                  <div class="row">
                    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                      <div class="row">

                        <div class="col-xl-12">
                          <p>
                            Number : <strong><?php echo $employee_records['phone'] ?></strong><br>
                           Email: <strong> <?php echo $employee_records['email'] ?></strong><br>
                           Address :  <strong><?php echo $employee_records['address'] ?></strong><br>
                          
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2">
                      <div class="test" id="menu1" data-toggle="dropdown"></div>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_employee_edit(<?php echo $employee_records['id']; ?>)">Edit</a></li>
                        <li role="presentation"><a href="<?php echo base_url('admin/employee/delete/'.$employee_records['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">Delete</a></li>
                      </ul>
                    </div>
                    </div>
                   <!--  <div class="col-md-12 text-right top33">
                      <a href="">
                      <i class="fas fa-info-circle fa-3x"></i></a>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
          <?php } }?> 
        </div>
        </div>
        
     

            <div class="col-md-4 col-sm-6">
             <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <h6>Search Filter</h6>
                  </div>

                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
                    <div class="form-group text-center">
                      <div class="button-items">
                     
                      <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">New Employee</button>

                    </div>
                     
                    </div>

                    <div class="form-group">
                      <select id="only_order" name="ddlCreditCardType" class="form-control  adv-common-filter">
                        <option value="">Only Show</option>
                        <option value="<?= '&dep=all' ?>"  <?= ($department=='all')?'selected':'' ?>>All Departments</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','Sales Employees') ?>"   <?= ($department==str_replace(' ', '_','Sales Employees'))?'selected':'' ?>>Sales Employees</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','>Operations Employees') ?>"  <?= ($department==str_replace(' ', '_','Operations Employees'))?'selected':'' ?>>Operations Employees</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','Marketing Employees') ?>"  <?= ($department==str_replace(' ', '_','Marketing Employees'))?'selected':'' ?>>Marketing Employees</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','Development Employees') ?>"  <?= ($department==str_replace(' ', '_','Development Employees'))?'selected':'' ?> >Development Employees</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','Warehouse Employees') ?>"  <?= ($department==str_replace(' ', '_','Sales Employees'))?'selected':'' ?>>Warehouse Employees</option>
                        <option value="<?= '&dep='.str_replace(' ', '_','HR, Legal & Finance Employees') ?>" <?= ($department==str_replace(' ', '_','HR, Legal & Finance Employees'))?'selected':'' ?>>HR, Legal & Finance Employees</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select id="sord_by" name="ddlCreditCardType" class="form-control  adv-common-filter">
                        <option value="">Sort by</option>
                        <option value="&column=name&sort=ASC" <?= ($order='name_ASC')?'selected':'' ?>>Name A-Z</option>
                        <option value="&column=name&sort=DESC" <?= ($order='name_DESC')?'selected':'' ?>>Name Z-A</option>
                        <option value="&column=joining_date&sort=ASC"  <?= ($order='joining_date_ASC')?'selected':'' ?>>Start Date (Earliest to Latest)</option>
                        <option value="&column=joining_date&sort=DESC" <?= ($order='joining_date_DESC')?'selected':'' ?>>Start Date (Latest to Earliest)</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <?php $countries = $this->common_model->select('country'); ?>
                        <select id="country_name" name="ddlCreditCardType" class="form-control adv-common-filter">
                          <option value="">Region/Country Select</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="&country=<?= str_replace(' ', '_',$country['name']) ?>" <?= ($countryid== str_replace(' ', '_',$country['name']))?'selected':'' ?>><?= $country['name'] ?></option>
                          <?php endforeach; ?>
                        </select>

                      </div>

                    
                  </div>
                </div>
              </div>

      



              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    
                      <button type="button" class="btn btn-primary btn-lg waves-effect waves-light btn-radius" data-toggle="modal" data-target=".bs-example-modal-lg" style="width: 100%;">ADD NEW EMPLOYEE</button>

                    



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

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">ADD NEW EMPLOYEE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                 <?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/employee/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                     <div class="row">
                      <div class="col-md-4">
                        <label>First Name:</label>
                        <input type="text" name="first_name"  class="form-control" placeholder="First Name" required/>
                      </div>

                      <div class="col-md-4">
                        <label>Last Name:</label>
                        <input type="text" name="last_name"  class="form-control" placeholder="Last Name" required/>
                      </div>

                      <div class="col-md-4">
                         <label>Gender:</label>
                        <select name="gender" class="form-control" required>
                          <option value="">Select Gender</option>  
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>

                    </div>
                      <br>

                    <div class="row">
                       <div class="col-md-4">
                        <label>Department:</label>
                        <select name="role" class="form-control">
                            <option value="">Select Role</option>
                            <?php foreach($roles as $r => $role): ?>
                            <option value="<?= $role['name'] ?>"><?= $role['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                      <div class="col-md-4">
                        <label>Phone Number:</label>
                        <input type="number" name="phone" class="form-control"  data-parsley-maxlength="15" placeholder="Phone Number" required/>
                      </div>

                      <div class="col-md-4">
                        <label>Contact Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Contact Email" required/>
                      </div>

                      </div> 

                         <br>
                     
                     
                    <div class="row">
                    
                    
                    <div class="col-md-4">
                      <?php $countries = $this->common_model->select('country');
                      
                      ?>
                         <label>Select Country:</label>
                        <select name="country" class="form-control">
                          <option value="#">Select Country</option>
                          <?php foreach($countries as $c => $country): ?>
                            <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label>Joining Date:</label>
                         <input type="date" name="joining_date" class="form-control datepicker"  placeholder="" >
                      </div>

                      <div class="col-md-4">
                        <label>Leaving Date:</label>
                        <input type="date" name="leaving_date" class="form-control datepicker"  placeholder="" >
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label>Address:</label>
                          <textarea type="text" name="address" class="form-control"  placeholder="Enter Address" style="height: 100px;"></textarea>
                      </div>
                    </div>

                    <br>

                 
                
                    
                    <div class="row">
                      <div class="col-md-3">
                        <label>Sales Target:</label>
                        <input type="number" name="sales_target" class="form-control" placeholder="Sales Target"/>
                       </div>

                      <div class="col-md-4">
                         <label>Sales Target Yearly/Monthly:</label>

                        <select class="form-control">
                          <option name="sales_target1" value="yearly">Yearly</option>
                          <option name="sales_target1" value="monthly">Monthly</option>
                        </select>
                        
                        </div>
                      <!-- <div class="col-md-6">
                        <label>Permission Access:</label>
                        <select name="permission_access[]" class="form-control" multiple>
                          <option value="#">Select Permission</option>
                          <?php
                            $menus = unserialize (SIDE_MENUS);
                            foreach($menus as $m => $menu):
                          ?>
                          <option value="<?= $m ?>"><?= $menu ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> -->
                    </div>
                    <br>  

                    <div class="row">
                      <div class="col-md-6">
                        <label>Id Proof.:(<small>Please Upload Passport or Driving License or NID)</small>)</label><br>
                        <input type="file" name="idproof" id="idproof">
                      </div>

                      <div class="col-md-6">
                        <label>Employee Image:(<small>Please Upload Recent Photo)</small>)</label><br>
                        <input type="file" name="emp_image" id="emp_image">
                      </div>
                    </div>
                    <br>
                    <br>
                    
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-center">
                    <button data-dismiss="modal" type="button" class="btn btn-secondary btn-sm waves-effect waves-light waves-light savebtn clr">Cancel</button>
                    </div>
                        <div class="col-md-3 text-center">
                        <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save</button>
                          
                        </div>
                        <div class="col-md-3"></div>
                        
                        
                    </div>
                  <?php echo form_close();?>
                </div>
             

        </div>
    </div><!-- /.modal-content -->
</div>
</div>


<div class="modal fade bs-example-modal-lgedit" tabindex="-1" id="editform" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="ajax-content-load">
    </div>
  </div>

</div><!-- /.modal-dialog -->

<script>
function showData() {
   document.getElementById("myhideone").style.display="block";
}

function hideData() {
   document.getElementById("myhideone").style.display="none";
}

</script>

<script type="text/javascript">

  function get_supplier_val(class_id) {

      $.ajax({
            url: '<?php echo base_url();?>admin/employee/ajax_get_supplier_details/' + class_id ,
            success: function(response)
            {
                jQuery('#supplier_contact').html(response);
            }
        });

    }




 function get_employee_edit(id) {
      $.ajax({
            url: '<?php echo base_url();?>admin/employee/update/' + id ,
            success: function(response)
            {
                jQuery('#ajax-content-load').html(response);
                //alert(response);
            }
        });
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(document).on('change','.adv-common-filter' ,function(){
        var url="<?php echo base_url('admin/employee/all_employee_list')?>?table=employee";
        if($('#only_order').val())
         url+=$('#only_order').val();

        if($('#sord_by').val())
        url+=$('#sord_by').val();

        if($('#country_name').val())
        url+=$('#country_name').val();
        window.location.href = url;
  });
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .sellerlistbgclr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  
    <script>
        $('.form-group').on('input','.prc',function(){
            var totalSum = 0;
            $('.form-group .prc').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalSum += parseFloat(inputVal);
                    
                }
            });
            $('#result').val(totalSum);


            
        });

</script>

<script type="text/javascript">
  $(function(){
    
    $('#result').on('input', function() {
      calculate();
    });
    $('#profit').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#result').val()); 
        var pEarned = parseInt($('#profit').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/100) * pPos).toFixed(3);

           finalperc = +pPos + +perc;
           }
        
        $('#sell_cost').val(finalperc);
    }

});
</script>
<script>
function showData() {
   document.getElementById("myhideone").style.display="block";
}

function hideData() {
   document.getElementById("myhideone").style.display="none";
}


</script>

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



