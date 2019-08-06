<style type="text/css">
.text-primary {
    color: #FFC107 !important;
}
.record {
    width: 50% !important;
    margin-top: 4px;
}
  .pay{
    background: #222831;
    border-radius: 1px solid red !important;
    border: 1px solid #393e46;
    padding: 4px;
    border-radius: 10px;
  }
  .marbtm{
    margin-bottom: 5px;
  }
  .marbtmm{
    margin-bottom: 0px;
  }
  .btn-secondary {
    color: #fff;
    background-color: #393e46;
    border-color: #393e46;
    margin: 4px;
    cursor: pointer;
    border-radius: 20px;
    background: #393e46 !important;
}
.address {
    background: #393e46 !important;
    border-color: #393e46 !important;
    padding: 14px;
}
.card {
    border: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    background: #393e46 !important;
    padding: 0px;
    margin-bottom: 20px;
}
.addnewcompny{
  border-radius: 0px !important;
  font-size: 22px !important;
  text-align: center;
  background: #393e46 !important;
  border-color: rgb(34, 40, 49) !important;

}
.trad{
  border-radius: 0px !important;
 
  background: #393e46 !important;
  border-color: rgb(34, 40, 49) !important;
}

</style>


<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
<div class="page-title-box">
<div class="row align-items-center">

<div class="col-sm-6">
<h3 class="page-title"><b>Supplier Database</b> &nbsp>&nbsp Supplier Company

</h3>
</div>
</div>
</div>
<!-- end row -->
<form action="<?php echo base_url('admin/supplier/add_supplier_records'); ?>" method="POST" enctype="multipart/multipart/form-data">
<div class="row">
<div class="col-xl-12 col-md-12 col-sm-12">
<div class="card">
<div class="card-body">
<div class="row line_height_25">
<div class="col-xl-3 col-md-3 col-sm-3 border-rgt">
<i class="ion ion-md-globe earth earth-position"></i>
<div class="col-xl-12 col-md-12 col-sm-12" style="margin: 16px;"> 
<div class="row">
<div class="col-xl-12">
<h3><input type="text" name="company_name" class="form-control addnewcompny" placeholder="Add New Supplier" value="<?php if(isset($_SESSION['company_name'])){ echo $_SESSION['company_name']; }?>" required></h3>
</div>
</div>
</div>  
</div>

<div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
<div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
  <input type="hidden" name="session_id" value="<?php if(empty($_SESSION['session_id'])) { echo rand(1000,9999); }else{ echo $_SESSION['session_id']; } ?>">

<strong>Supplier Manager: <select name="trader_name" class="form-control record trad">
<option value="<?php echo $_SESSION['name']; ?>" <?php if(!empty($_SESSION['name'])){ ?> selected='selected' <?php }?>><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; }?></option>
</select>
</strong><br>
<strong>Date : <?php if(isset($_SESSION['creation_date'])){ echo date('d/m/Y', strtotime($_SESSION['creation_date'])); }?></strong><br>
                  <strong>   Linked Companies : 0 link companies</strong>
<strong>Linked Suppliers: 0 link companies</strong>
</div>  
</div>

<div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
<div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
<strong> Total spend : <i class="fas fa-pound-sign"></i> 00.0</strong><br>
<strong>Gross Profit : <i class="fas fa-pound-sign"></i> 00.0</strong><br>
<strong>Invoiced : <i class="fas fa-pound-sign"></i> 00.0</strong>
</div>
</div>

<div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
<div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
<strong>RFQ’s Sent: 00</strong><br>
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
      <li class="nav-item waves-effect waves-light border-rgt">

        <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/supplier_records"){ ?>
            <a class="nav-link active" href="<?php echo base_url(); ?>admin/supplier/supplier_records">

            <?php }else{ ?>
            <a class="nav-link" href="<?php echo base_url(); ?>admin/supplier/supplier_records">
            <?php } ?>

        
          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
          <span class="d-none d-sm-block">Record Information</span> 
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
          
          <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/supplier/supplier_contact"){ ?>
            <a class="nav-link active" href="#">
            <?php }else{ ?>
              <a class="nav-link" href="#">
            <?php } ?>
          
          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
          <span class="d-none d-sm-block">Contact Information</span> 
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
          <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
          <span class="d-none d-sm-block">Order History</span>   
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" >
          <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
          <span class="d-none d-sm-block">Customer Summery</span>   
        </a>
      </li>
      <li class="nav-item waves-effect waves-light border-rgt">
        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
          <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
          <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Chat History</span>    
        </a>
      </li>
    </ul>
  </div>
</div>


 <div class="row">
      <div class="col-lg-5">
        <h4 class="mt-0 header-title marbtm">About Information</h4>
        <hr><br>
       
          <div class="form-group">
            <textarea class="form-control" name="about"  placeholder="write some information on the supplier" style="height: 100px;" ><?php if(isset($_SESSION['about'])){ echo $_SESSION['about']; }?></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <select name="industry_sector" class="form-control" required>
                  <option value="">Industry Selector</option>
                   <?php $i = "1"; foreach ($industry as $industry){ ?>
                  <option value="<?php echo $industry['industry']; ?>" <?php if(isset($_SESSION['industry_sector']) && $_SESSION['industry_sector'] == $industry['industry']){ ?> selected="selected" <?php }?>><?php echo $industry['industry']; ?></option>
                  <?php $i++; } ?>
                 
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" name="sector_free_tax" class="form-control" placeholder="Secrtor free Text" value="<?php if(isset($_SESSION['sector_free_tax'])){ echo $_SESSION['sector_free_tax']; }?>" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control" name="url" type="url" placeholder="Website Address of companies main site"  value="<?php if(isset($_SESSION['url'])){ echo $_SESSION['url']; }?>" >
              </div>
              </div>
          </div>

          <div class="form-group">
            <div class="row">
               <div class="col-sm-12">
                <input class="form-control" name="generic_number" type="text" placeholder="Generic Phone Number" value="<?php if(isset($_SESSION['generic_number'])){ echo $_SESSION['generic_number']; }?>" >
              </div>
              
             
            </div>
          </div>

          <br>
          <h4 class="mt-0 header-title marbtm">Delivery Information</h4>
          <hr>
          <br>
          <p class="mt-0 header-title marbtmm">Express Delivery Lead Time(option available):</p>
          <div class="row">
            <div class="col-xl-12 col-sm-6 col-md-12">
              <div class="card" style="background: #222831 !important;">
                <div class="card-body">

                   <div class="btn-group btn-group-toggle" data-toggle="buttons">

                     <?php if(isset($_SESSION['estimated_frequency']) && $_SESSION['estimated_frequency'] == "sameday"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="sameday" > Same Day
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="sameday" > Same Day
                      </label>
                    <?php } ?>

                    <?php if(isset($_SESSION['estimated_frequency']) && $_SESSION['estimated_frequency'] == "pre9am"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="pre9am" > Pre 9am
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="pre9am" > Pre 9am
                      </label>
                    <?php } ?>

                    <?php if(isset($_SESSION['estimated_frequency']) && $_SESSION['estimated_frequency'] == "nextday"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="nextday" > Next Day
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="nextday" > Next Day
                      </label>
                    <?php } ?>

                    <?php if(isset($_SESSION['estimated_frequency']) && $_SESSION['estimated_frequency'] == "2days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="2days" > 2 days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="2days" > 2 days
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['estimated_frequency']) && $_SESSION['estimated_frequency'] == "longer"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="longer" > Longer
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="longer" > Longer
                      </label>
                    <?php } ?>

                
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <p class="mt-0 header-title marbtmm">Standard Delivery Lead Time(option available):</p>
            <div class="row">
              <div class="col-xl-12 col-sm-6 col-md-12">
                <div class="card" style="background: #222831 !important;">
                  <div class="card-body">

                     <div class="btn-group btn-group-toggle" data-toggle="buttons">

                       <?php if(isset($_SESSION['standard_delivery']) && $_SESSION['standard_delivery'] == "lessthenaday"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="lessthenaday" > Less then a day
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="lessthenaday" > Less then a day
                      </label>
                    <?php } ?>

                    <?php if(isset($_SESSION['standard_delivery']) && $_SESSION['standard_delivery'] == "2days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="2days" >  2 Days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="2days" >  2 Days
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['standard_delivery']) && $_SESSION['standard_delivery'] == "35days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="35days" >  3-5 Days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="35days" >  3-5 Days
                      </label>
                    <?php } ?>


                     <?php if(isset($_SESSION['standard_delivery']) && $_SESSION['standard_delivery'] == "57days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="57days" >  5-7 days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="57days" >  5-7 days
                      </label>
                    <?php } ?>


                     <?php if(isset($_SESSION['standard_delivery']) && $_SESSION['standard_delivery'] == "longer"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="longer" >  Longer
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="longer" >  Longer
                      </label>
                    <?php } ?>

                  </div>
                </div>
              </div>
             

          <div class="form-group">
                    <div class="row">
                      <div class="col-md-6" >
                        <input type="text" name="ordercutoff" class="form-control"  placeholder="Order Cutoff for next Day" value="<?php if(isset($_SESSION['ordercutoff'])){ echo $_SESSION['ordercutoff']; }?>" >
                      </div>
                  

                   <div class="col-md-6">
                    <!-- <select name="timezone" class="form-control" >
                      <option value="">Choose Time Zone:</option>
                      <option <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "trade1"){ ?> selected="selected" <?php }?>>Trade 1</option>
                      <option <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "trade2"){ ?> selected="selected" <?php }?>>Trade 2</option>
                      <option <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "trade3"){ ?> selected="selected" <?php }?>>Trade 3</option>
                    </select> -->
                    <select name="timezone" class="form-control" >

  <option <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT-12:00) International Date Line West</option>
  <option <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "midway_island"){ ?> selected="selected" <?php }?>>(GMT-11:00) Midway Island, Samoa</option>
  <option value="-10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "hawaii"){ ?> selected="selected" <?php }?>>(GMT-10:00) Hawaii</option>
  <option  value="-9" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "alaska"){ ?> selected="selected" <?php }?>>(GMT-09:00) Alaska</option>
  <option  value="-8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "usandcanada"){ ?> selected="selected" <?php }?>>(GMT-08:00) Pacific Time (US & Canada)</option>
  <option  value="-8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "baja"){ ?> selected="selected" <?php }?>>(GMT-08:00) Tijuana, Baja California</option>
  <option  value="-7" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "arizona"){ ?> selected="selected" <?php }?>>(GMT-07:00) Arizona</option>
  <option  value="-7" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "mazatlan"){ ?> selected="selected" <?php }?>>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
  <option  value="-7" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "mauntaintimeusandcanada"){ ?> selected="selected" <?php }?>>(GMT-07:00) Mountain Time (US & Canada)</option>
  <option  value="-6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "centralamerica"){ ?> selected="selected" <?php }?>>(GMT-06:00) Central America</option>
  <option  value="-6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "centraltime"){ ?> selected="selected" <?php }?>>(GMT-06:00) Central Time (US & Canada)</option>
  <option  value="-6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "monterrey"){ ?> selected="selected" <?php }?>>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
  <option  value="-6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "saskatchewan"){ ?> selected="selected" <?php }?>>(GMT-06:00) Saskatchewan</option>
  <option  value="-5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "bogota"){ ?> selected="selected" <?php }?>>(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
  <option  value="-5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "easterntime"){ ?> selected="selected" <?php }?>>(GMT-05:00) Eastern Time (US & Canada)</option>
  <option  value="-5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "indiana"){ ?> selected="selected" <?php }?>>(GMT-05:00) Indiana (East)</option>
  <option  value="-4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "atlanticatime"){ ?> selected="selected" <?php }?>>(GMT-04:00) Atlantic Time (Canada)</option>
  <option  value="-4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "caracas"){ ?> selected="selected" <?php }?>>(GMT-04:00) Caracas, La Paz</option>
  <option  value="-4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "manaus"){ ?> selected="selected" <?php }?>>(GMT-04:00) Manaus</option>
  <option  value="-4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "santiago"){ ?> selected="selected" <?php }?>>(GMT-04:00) Santiago</option>
  <option  value="-3.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "newfoundland"){ ?> selected="selected" <?php }?>>(GMT-03:30) Newfoundland</option>
  <option  value="-3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "brasilia"){ ?> selected="selected" <?php }?>>(GMT-03:00) Brasilia</option>
  <option  value="-3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "buenosaires"){ ?> selected="selected" <?php }?>>(GMT-03:00) Buenos Aires, Georgetown</option>
  <option  value="-3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "greenland"){ ?> selected="selected" <?php }?>>(GMT-03:00) Greenland</option>
  <option  value="-3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "montevideo"){ ?> selected="selected" <?php }?>>(GMT-03:00) Montevideo</option>
  <option  value="-2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "midatlantic"){ ?> selected="selected" <?php }?>>(GMT-02:00) Mid-Atlantic</option>
  <option  value="-1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "capeverde"){ ?> selected="selected" <?php }?>>(GMT-01:00) Cape Verde Is.</option>
  <option  value="-1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "azores"){ ?> selected="selected" <?php }?>>(GMT-01:00) Azores</option>
  <option  value="0" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "casablanca"){ ?> selected="selected" <?php }?>>(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
  <option  value="0" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "greenwich"){ ?> selected="selected" <?php }?>>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
  <option  value="1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "amsterdam"){ ?> selected="selected" <?php }?>>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
  <option  value="1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "belgrade"){ ?> selected="selected" <?php }?>>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
  <option  value="1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "brussels"){ ?> selected="selected" <?php }?>>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
  <option  value="1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "sarajevo"){ ?> selected="selected" <?php }?>>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
  <option  value="1" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "westcentral"){ ?> selected="selected" <?php }?>>(GMT+01:00) West Central Africa</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "amman"){ ?> selected="selected" <?php }?>>(GMT+02:00) Amman</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "istanbul"){ ?> selected="selected" <?php }?>>(GMT+02:00) Athens, Bucharest, Istanbul</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "beirut"){ ?> selected="selected" <?php }?>>(GMT+02:00) Beirut</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "cairo"){ ?> selected="selected" <?php }?>>(GMT+02:00) Cairo</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "harare"){ ?> selected="selected" <?php }?>>(GMT+02:00) Harare, Pretoria</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "helsinki"){ ?> selected="selected" <?php }?>>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "jerusalem"){ ?> selected="selected" <?php }?>>(GMT+02:00) Jerusalem</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "minsk"){ ?> selected="selected" <?php }?>>(GMT+02:00) Minsk</option>
  <option  value="2" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "windhoek"){ ?> selected="selected" <?php }?>>(GMT+02:00) Windhoek</option>
  <option  value="3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "kuwait"){ ?> selected="selected" <?php }?>>(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
  <option  value="3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "moscow"){ ?> selected="selected" <?php }?>>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
  <option  value="3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "nairobi"){ ?> selected="selected" <?php }?>>(GMT+03:00) Nairobi</option>
  <option  value="3" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "tbilisi"){ ?> selected="selected" <?php }?>>(GMT+03:00) Tbilisi</option>
  <option  value="3.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "tehran"){ ?> selected="selected" <?php }?>>(GMT+03:30) Tehran</option>
  <option  value="4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "dhabi"){ ?> selected="selected" <?php }?>>(GMT+04:00) Abu Dhabi, Muscat</option>
  <option  value="4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "baku"){ ?> selected="selected" <?php }?>>(GMT+04:00) Baku</option>
  <option  value="4" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+04:00) Yerevan</option>
  <option  value="4.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+04:30) Kabul</option>
  <option  value="5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:00) Yekaterinburg</option>
  <option  value="5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:00) Islamabad, Karachi, Tashkent</option>
  <option  value="5.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:30) Sri Jayawardenapura</option>
  <option  value="5.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
  <option  value="5.75" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:45) Kathmandu</option>
  <option  value="6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:00) Almaty, Novosibirsk</option>
  <option  value="6" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:00) Astana, Dhaka</option>
  <option  value="6.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:30) Yangon (Rangoon)</option>
  <option  value="7" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
  <option  value="7" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+07:00) Krasnoyarsk</option>
  <option  value="8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
  <option  value="8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Kuala Lumpur, Singapore</option>
  <option  value="8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Irkutsk, Ulaan Bataar</option>
  <option  value="8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Perth</option>
  <option  value="8" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Taipei</option>
  <option  value="9" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Osaka, Sapporo, Tokyo</option>
  <option  value="9" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Seoul</option>
  <option  value="9" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Yakutsk</option>
  <option  value="9.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:30) Adelaide</option>
  <option  value="9.5" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:30) Darwin</option>
  <option  value="10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Brisbane</option>
  <option  value="10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Canberra, Melbourne, Sydney</option>
  <option  value="10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Hobart</option>
  <option  value="10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Guam, Port Moresby</option>
  <option  value="10" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Vladivostok</option>
  <option  value="11" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
  <option  value="12" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+12:00) Auckland, Wellington</option>
  <option  value="12" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
  <option  value="13" <?php if(isset($_SESSION['timezone']) && $_SESSION['timezone'] == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+13:00) Nuku'alofa</option>
</select>

                  </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12" >
                <input type="text" name="ordercutoffdeliveryinfo" class="form-control"  placeholder="Order Cutoff & Delivery Information" value="<?php if(isset($_SESSION['ordercutoffdeliveryinfo'])){ echo $_SESSION['ordercutoffdeliveryinfo']; }?>" >
              </div>
            </div>
          </div>          

               
          

        <br>

          <div class="form-group">
            <p class="mt-0 header-title marbtm">Payment Information:</p>
             <hr>
          </div>

            <div class="form-group">
          
              <div class=" col-md-12">
                <div class="row">
                <div class="col-md-3 p-0">Payment Terms:</div>
                <div class="col-md-9 p-0">
                <select name="payment_terms" class="form-control" >
                 
                  <option value="Advance" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "Advance"){ ?> selected="selected" <?php }?>>Advance</option>

                  <option value="5050 Advance" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "5050 Advance"){ ?> selected="selected" <?php }?>>50/50 Advance</option>

                  <option value="7525 Advance" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "7525 Advance"){ ?> selected="selected" <?php }?>>75/25 Advance</option>

                  <option value="Pay To Ship" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "Pay To Ship"){ ?> selected="selected" <?php }?>>Pay to ship</option>

                  <option value="Pay On Delivery" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "Pay On Delivery"){ ?> selected="selected" <?php }?>>Pay on Delivery</option>

                  <option value="7 Days Doi" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "7 Days Doi"){ ?> selected="selected" <?php }?>>7 Days DOI</option>

                  <option value="14 Days DOI" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "14 Days DOI"){ ?> selected="selected" <?php }?>>14 Days DOI</option>

                  <option value="30 Days DOI" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "30 Days DOI"){ ?> selected="selected" <?php }?>>30 Days DOI</option>

                  <option value="60 Days DOI" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "60 Days DOI"){ ?> selected="selected" <?php }?>>60 Days DOI</option>

                  <option value="90 Days DOI" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "90 Days DOI"){ ?> selected="selected" <?php }?>>90 Days DOI</option>

                  <option value="EOM" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "EOM"){ ?> selected="selected" <?php }?>>EOM</option>

                  <option value="30 EOM" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "30 EOM"){ ?> selected="selected" <?php }?>>30 EOM</option>

                  <option value="60 EOM" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "60 EOM"){ ?> selected="selected" <?php }?>>60 EOM</option>

                  <option value="90 EOM" <?php if(isset($_SESSION['payment_terms']) && $_SESSION['payment_terms'] == "90 EOM"){ ?> selected="selected" <?php }?>>90 EOM</option>
                </select>
                </div>
                </div>
              </div>
            </div>
           
          

          <div class="form-group">
            
              <div class="col-md-12" >
                <div class="row">
                <div class="col-md-4 p-0">Payment Reference:</div>
                <div class="col-md-8 p-0">
                <input type="text" name="payment_ref" class="form-control"  placeholder="" value="<?php if(isset($_SESSION['payment_ref'])){ echo $_SESSION['payment_ref']; }?>" >
                </div>

              </div>
            </div>
          </div>

          <div class="form-group">
            
              <div class="col-md-12" >
                <div class="row">
                  <div class="col-md-6 p-0">Discount & Pricing Information:</div>
                  <div class="col-md-6 p-0"><input type="text" name="discount_pricing" class="form-control"  placeholder="" value="<?php if(isset($_SESSION['discount_pricing'])){ echo $_SESSION['discount_pricing']; }?>" ></div>
                
                
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-12">
                <label>Manufectures Supplier:</label> 
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
                              
                              <?php $i = "1"; foreach ($manufacturer as $manufacturer){ ?>
                                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary">
                                    <input type="checkbox" name="programming[]" value="<?php echo $manufacturer['manufacturer']; ?>"> <?php echo $manufacturer['manufacturer']; ?>
                                </label>
                                </div>
                                 <?php $i++;$i==5;continue; } ?>

                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="form-group">
            
              <div class="col-md-12 p-0" >
                <div class="row">
                  <div class="col-md-6">Other Manufacturers Supplied:</div>
                  <div class="col-md-6"><input type="text" name="other_manufacturer" class="form-control"  value="<?php if(isset($_SESSION['other_manufacturer'])){ echo $_SESSION['other_manufacturer']; }?>" ></div>
                
              </div>
            </div>
          </div>





            <div class="row">
              <div class="col-md-12">
                <label>Product Condition:</label> 
              </div>
            </div>
             <div class="btn-group btn-group-toggle" data-toggle="buttons">

              <?php if(isset($_SESSION['product_condition']) && $_SESSION['product_condition'] == "factorysealed"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="product_condition[]" value="factorysealed" > Factory Sealed
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="product_condition[]" value="factorysealed" > Factory Sealed
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['product_condition']) && $_SESSION['product_condition'] == "openbox"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="product_condition[]" value="openbox" > Open Box
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="product_condition[]" value="openbox" > Open Box
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['product_condition']) && $_SESSION['product_condition'] == "used"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="product_condition[]" value="used" > used Box
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="product_condition[]" value="used" > used Box
                      </label>
                    <?php } ?>


                     <?php if(isset($_SESSION['product_condition']) && $_SESSION['product_condition'] == "exchange"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="product_condition[]" value="exchange" > Exchange
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="product_condition[]" value="exchange" > Exchange
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['product_condition']) && $_SESSION['product_condition'] == "repair"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="product_condition[]" value="repair" > Repair
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="product_condition[]" value="repair" > Repair
                      </label>
                    <?php } ?>


                     
                  </div>


                  <div class="row">
              <div class="col-md-12">
                <label>Lifecycle Status:</label> 
              </div>
            </div>
             <div class="btn-group btn-group-toggle" data-toggle="buttons">

              <?php if(isset($_SESSION['lifecycle_status']) && $_SESSION['lifecycle_status'] == "currentline"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="lifecycle_status[]" value="currentline" > Current Line
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="lifecycle_status[]" value="currentline" > Current Line
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['lifecycle_status']) && $_SESSION['lifecycle_status'] == "phaseout"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="lifecycle_status[]" value="phaseout" > Phase Out
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="lifecycle_status[]" value="phaseout" > Phase Out
                      </label>
                    <?php } ?>


                    <?php if(isset($_SESSION['lifecycle_status']) && $_SESSION['lifecycle_status'] == "obsolete"){ ?>
                      <label class="btn btn-primary active">
                          <input type="checkbox" name="lifecycle_status[]" value="obsolete" > Obsolete 
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="checkbox" name="lifecycle_status[]" value="obsolete" > Obsolete 
                      </label>
                    <?php } ?>


                    </div>
            </div>

         </div>
        </div>
          
      </div> 
      <!-- First form End-->
      
     <div class="col-lg-7">
        <h4 class="mt-0 header-title marbtm">Adderss</h4>
        <hr><br>  
       
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="location" class="form-control" value="<?php if(isset($_SESSION['location'])){ echo $_SESSION['location']; }?>" placeholder="Location Number/ Name" />
              </div>
              <div class="col-md-6">
                <input type="text" name="street_address" class="form-control" value="<?php if(isset($_SESSION['street_address'])){ echo $_SESSION['street_address']; }?>" placeholder="Street Address" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="city" class="form-control" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; }?>" placeholder="Town / city" />
              </div>
              <div class="col-md-6">
                <input type="text" name="state" class="form-control" value="<?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; }?>" placeholder="State" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="zip" class="form-control" value="<?php if(isset($_SESSION['zip'])){ echo $_SESSION['zip']; }?>" placeholder="Postal / Zip code" />
              </div>
              <div class="col-md-6">
                <select name="country" class="form-control" >
                  <option value="">Country</option>
                  <option value="india" <?php if(isset($_SESSION['country']) && $_SESSION['country'] == "india"){ ?> selected="selected" <?php }?>>India</option>
                  <option value="usa" <?php if(isset($_SESSION['country']) && $_SESSION['country'] == "usa"){ ?> selected="selected" <?php }?>>USA</option>
                  <option value="uk" <?php if(isset($_SESSION['country']) && $_SESSION['country'] == "uk"){ ?> selected="selected" <?php }?>>UK</option>
                </select>
              </div>
              
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <select name="address_type" class="form-control" >
                  <option value="">Address Type</option>
                  <option value="AE" <?php if(isset($_SESSION['address_type']) && $_SESSION['address_type'] == "AE"){ ?> selected="selected" <?php }?>>Invoice Address</option>
                  <option value="VI" <?php if(isset($_SESSION['address_type']) && $_SESSION['address_type'] == "VI"){ ?> selected="selected" <?php }?>>Delivery Address</option>
                  <option value="MC" <?php if(isset($_SESSION['address_type']) && $_SESSION['address_type'] == "MC"){ ?> selected="selected" <?php }?>>Head Office Location</option>
                </select>
              </div>
            </div> 
            <br>
            <!-- <div class="row">
              <div class="col-md-12">
                <p>If this company has more than one address , please click the button below to<br> add new address.</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4">
                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp&nbsp Add new Address</button><br>
              </div>
            </div> -->
            <br>
            <div class="col-md-12" style="padding: 0px;">
              <div style="width: 100%">
                <iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe>
              </div><br />
            </div>
         
        </div> 
      </div>
      </div>
      <!-- content -->
    
  </div>

  <div class="card" style="margin-top: 135px;padding:10px !important">
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            <div class="col-xl-4 col-md-6 col-sm-6">
            </div>
           
            <div class="col-xl-4 col-md-6 col-sm-6">
              <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save & Continue</button>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-6">
            </div>
          </div>
        </div>
      </div>
        </form>

     





<style type="text/css">
  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background: #e9655a !important;
}
.rating-symbol-background, .rating-symbol-foreground {
    font-size: 20px;
}
</style>