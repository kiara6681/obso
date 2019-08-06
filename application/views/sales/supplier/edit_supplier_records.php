<style type="text/css">
.text-primary {
    color: #FFC107 !important;
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


</style>


<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
<div class="page-title-box">
<div class="row align-items-center">

<div class="col-sm-6">
<h3 class="page-title"><b>Supplier Database</b> &nbsp;>&nbsp; Supplier Company

</h3>
</div>
</div>
</div>
<!-- end row -->
<form action="<?php echo base_url('sales/supplier/edit_supplier_records'); ?>" method="POST" enctype="multipart/multipart/form-data">
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
<h3><input type="text" name="company_name" class="form-control addnewcompny" placeholder="Add New Company" required value="<?php echo $supplier_records->company_name; ?>"></h3>
</div>
</div>
</div>  
</div>

<div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
<div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
  <input type="hidden" name="session_id" value="<?php echo $supplier_records->session_id; ?>">

<strong>Supplier Manager: <select name="trader_name" class="form-control record trad">
<option value="<?php echo $supplier_records->trader_name; ?>"><?php echo $supplier_records->trader_name; ?></option>
</select>
</strong><br>
<strong>Date : <?php  echo date('d/m/Y', strtotime($supplier_records->creation_date)); ?></strong><br>
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
            <a class="nav-link active" href="<?php echo base_url(); ?>sales/sales/supplier_records/<?php  echo $supplier_records->session_id; ?>">
           

              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block active">
              Record Information </span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" href="<?php echo base_url(); ?>sales/supplier/edit_supplier_contacts/<?php  echo $supplier_records->session_id; ?>">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">Contact Information</span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" data-toggle="tab" href="#orderhostory" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block">Order History</span>   
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" data-toggle="tab" href="#customersummery" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block">Customer Summery</span>   
            </a>
          </li>
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#chathistory" role="tab">
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
            <textarea class="form-control" name="about"  placeholder="write some information on the supplier" style="height: 100px;" required><?php  echo $supplier_records->about; ?></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" value="<?php echo $supplier_records->session_id; ?>" name="sessionid">
                <select name="industry_sector" class="form-control" required>
                  <option value="">Industry Selector</option>
                   <?php $i = "1"; foreach ($industry as $industry){ ?>
                  <option value="<?php echo $industry['industry']; ?>" <?php if($supplier_records->industry_sector == $industry['industry']) { ?> selected="selected" <?php } ?>><?php echo $industry['industry']; ?></option>
                  <?php $i++; } ?> 
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" name="sector_free_tax" class="form-control" placeholder="Secrtor free Text" value="<?php echo $supplier_records->sector_free_tax; ?>" required/>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control" name="url" type="url" placeholder="Website Address of companies main site"  value="<?php echo $supplier_records->url; ?>" required>
              </div>
              </div>
          </div>

          <div class="form-group">
            <div class="row">
               <div class="col-sm-12">
                <input class="form-control" name="generic_number" type="text" placeholder="Generic Phone Number" value="<?php echo $supplier_records->generic_number; ?>" required>
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

                     <?php if($supplier_records->estimated_frequency == "sameday"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="sameday" required> Same Day
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="sameday" required> Same Day
                      </label>
                    <?php } ?>

                    <?php if($supplier_records->estimated_frequency == "pre9am"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="pre9am" required> Pre 9am
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="pre9am" required> Pre 9am
                      </label>
                    <?php } ?>

                    <?php if($supplier_records->estimated_frequency == "nextday"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="nextday" required> Next Day
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="nextday" required> Next Day
                      </label>
                    <?php } ?>

                    <?php if($supplier_records->estimated_frequency == "2days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="2days" required> 2 days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="2days" required> 2 days
                      </label>
                    <?php } ?>


                    <?php if($supplier_records->estimated_frequency == "longer"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="longer" required> Longer
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="longer" required> Longer
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

                       <?php if($supplier_records->standard_delivery == "lessthen50k"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="lessthen50k" required> less then 50k
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="lessthen50k" required> less then 50k
                      </label>
                    <?php } ?>

                    <?php if($supplier_records->standard_delivery == "2days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="2days" required>  2 Days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="2days" required>  2 Days
                      </label>
                    <?php } ?>


                    <?php if($supplier_records->standard_delivery == "35days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="35days" required>  3-5 Days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="35days" required>  3-5 Days
                      </label>
                    <?php } ?>


                     <?php if($supplier_records->standard_delivery == "57days"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="57days" required>  5 7 days
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="57days" required>  5 7 days
                      </label>
                    <?php } ?>


                     <?php if($supplier_records->standard_delivery == "longer"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="standard_delivery" value="longer" required>  Longer
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="standard_delivery" value="longer" required>  Longer
                      </label>
                    <?php } ?>

                  </div>
                </div>
              </div>
             

          <div class="form-group">
                    <div class="row">
                      <div class="col-md-6" >
                        <input type="text" name="ordercutoff" class="form-control"  placeholder="Order Cutoff for next Day" value="<?php echo $supplier_records->ordercutoff; ?>" required>
                      </div>
                  

                   <div class="col-md-6">
                    <select name="timezone" class="form-control" required>

  <option <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT-12:00) International Date Line West</option>
  <option <?php if($supplier_records->timezone == "midway_island"){ ?> selected="selected" <?php }?>>(GMT-11:00) Midway Island, Samoa</option>
  <option value="-10" <?php if($supplier_records->timezone == "hawaii"){ ?> selected="selected" <?php }?>>(GMT-10:00) Hawaii</option>
  <option  value="-9" <?php if($supplier_records->timezone == "alaska"){ ?> selected="selected" <?php }?>>(GMT-09:00) Alaska</option>
  <option  value="-8" <?php if($supplier_records->timezone == "usandcanada"){ ?> selected="selected" <?php }?>>(GMT-08:00) Pacific Time (US & Canada)</option>
  <option  value="-8" <?php if($supplier_records->timezone == "baja"){ ?> selected="selected" <?php }?>>(GMT-08:00) Tijuana, Baja California</option>
  <option  value="-7" <?php if($supplier_records->timezone == "arizona"){ ?> selected="selected" <?php }?>>(GMT-07:00) Arizona</option>
  <option  value="-7" <?php if($supplier_records->timezone == "mazatlan"){ ?> selected="selected" <?php }?>>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
  <option  value="-7" <?php if($supplier_records->timezone == "mauntaintimeusandcanada"){ ?> selected="selected" <?php }?>>(GMT-07:00) Mountain Time (US & Canada)</option>
  <option  value="-6" <?php if($supplier_records->timezone == "centralamerica"){ ?> selected="selected" <?php }?>>(GMT-06:00) Central America</option>
  <option  value="-6" <?php if($supplier_records->timezone == "centraltime"){ ?> selected="selected" <?php }?>>(GMT-06:00) Central Time (US & Canada)</option>
  <option  value="-6" <?php if($supplier_records->timezone == "monterrey"){ ?> selected="selected" <?php }?>>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
  <option  value="-6" <?php if($supplier_records->timezone == "saskatchewan"){ ?> selected="selected" <?php }?>>(GMT-06:00) Saskatchewan</option>
  <option  value="-5" <?php if($supplier_records->timezone == "bogota"){ ?> selected="selected" <?php }?>>(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
  <option  value="-5" <?php if($supplier_records->timezone == "easterntime"){ ?> selected="selected" <?php }?>>(GMT-05:00) Eastern Time (US & Canada)</option>
  <option  value="-5" <?php if($supplier_records->timezone == "indiana"){ ?> selected="selected" <?php }?>>(GMT-05:00) Indiana (East)</option>
  <option  value="-4" <?php if($supplier_records->timezone == "atlanticatime"){ ?> selected="selected" <?php }?>>(GMT-04:00) Atlantic Time (Canada)</option>
  <option  value="-4" <?php if($supplier_records->timezone == "caracas"){ ?> selected="selected" <?php }?>>(GMT-04:00) Caracas, La Paz</option>
  <option  value="-4" <?php if($supplier_records->timezone == "manaus"){ ?> selected="selected" <?php }?>>(GMT-04:00) Manaus</option>
  <option  value="-4" <?php if($supplier_records->timezone == "santiago"){ ?> selected="selected" <?php }?>>(GMT-04:00) Santiago</option>
  <option  value="-3.5" <?php if($supplier_records->timezone == "newfoundland"){ ?> selected="selected" <?php }?>>(GMT-03:30) Newfoundland</option>
  <option  value="-3" <?php if($supplier_records->timezone == "brasilia"){ ?> selected="selected" <?php }?>>(GMT-03:00) Brasilia</option>
  <option  value="-3" <?php if($supplier_records->timezone == "buenosaires"){ ?> selected="selected" <?php }?>>(GMT-03:00) Buenos Aires, Georgetown</option>
  <option  value="-3" <?php if($supplier_records->timezone == "greenland"){ ?> selected="selected" <?php }?>>(GMT-03:00) Greenland</option>
  <option  value="-3" <?php if($supplier_records->timezone == "montevideo"){ ?> selected="selected" <?php }?>>(GMT-03:00) Montevideo</option>
  <option  value="-2" <?php if($supplier_records->timezone == "midatlantic"){ ?> selected="selected" <?php }?>>(GMT-02:00) Mid-Atlantic</option>
  <option  value="-1" <?php if($supplier_records->timezone == "capeverde"){ ?> selected="selected" <?php }?>>(GMT-01:00) Cape Verde Is.</option>
  <option  value="-1" <?php if($supplier_records->timezone == "azores"){ ?> selected="selected" <?php }?>>(GMT-01:00) Azores</option>
  <option  value="0" <?php if($supplier_records->timezone == "casablanca"){ ?> selected="selected" <?php }?>>(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
  <option  value="0" <?php if($supplier_records->timezone == "greenwich"){ ?> selected="selected" <?php }?>>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
  <option  value="1" <?php if($supplier_records->timezone == "amsterdam"){ ?> selected="selected" <?php }?>>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
  <option  value="1" <?php if($supplier_records->timezone == "belgrade"){ ?> selected="selected" <?php }?>>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
  <option  value="1" <?php if($supplier_records->timezone == "brussels"){ ?> selected="selected" <?php }?>>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
  <option  value="1" <?php if($supplier_records->timezone == "sarajevo"){ ?> selected="selected" <?php }?>>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
  <option  value="1" <?php if($supplier_records->timezone == "westcentral"){ ?> selected="selected" <?php }?>>(GMT+01:00) West Central Africa</option>
  <option  value="2" <?php if($supplier_records->timezone == "amman"){ ?> selected="selected" <?php }?>>(GMT+02:00) Amman</option>
  <option  value="2" <?php if($supplier_records->timezone == "istanbul"){ ?> selected="selected" <?php }?>>(GMT+02:00) Athens, Bucharest, Istanbul</option>
  <option  value="2" <?php if($supplier_records->timezone == "beirut"){ ?> selected="selected" <?php }?>>(GMT+02:00) Beirut</option>
  <option  value="2" <?php if($supplier_records->timezone == "cairo"){ ?> selected="selected" <?php }?>>(GMT+02:00) Cairo</option>
  <option  value="2" <?php if($supplier_records->timezone == "harare"){ ?> selected="selected" <?php }?>>(GMT+02:00) Harare, Pretoria</option>
  <option  value="2" <?php if($supplier_records->timezone == "helsinki"){ ?> selected="selected" <?php }?>>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
  <option  value="2" <?php if($supplier_records->timezone == "jerusalem"){ ?> selected="selected" <?php }?>>(GMT+02:00) Jerusalem</option>
  <option  value="2" <?php if($supplier_records->timezone == "minsk"){ ?> selected="selected" <?php }?>>(GMT+02:00) Minsk</option>
  <option  value="2" <?php if($supplier_records->timezone == "windhoek"){ ?> selected="selected" <?php }?>>(GMT+02:00) Windhoek</option>
  <option  value="3" <?php if($supplier_records->timezone == "kuwait"){ ?> selected="selected" <?php }?>>(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
  <option  value="3" <?php if($supplier_records->timezone == "moscow"){ ?> selected="selected" <?php }?>>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
  <option  value="3" <?php if($supplier_records->timezone == "nairobi"){ ?> selected="selected" <?php }?>>(GMT+03:00) Nairobi</option>
  <option  value="3" <?php if($supplier_records->timezone == "tbilisi"){ ?> selected="selected" <?php }?>>(GMT+03:00) Tbilisi</option>
  <option  value="3.5" <?php if($supplier_records->timezone == "tehran"){ ?> selected="selected" <?php }?>>(GMT+03:30) Tehran</option>
  <option  value="4" <?php if($supplier_records->timezone == "dhabi"){ ?> selected="selected" <?php }?>>(GMT+04:00) Abu Dhabi, Muscat</option>
  <option  value="4" <?php if($supplier_records->timezone == "baku"){ ?> selected="selected" <?php }?>>(GMT+04:00) Baku</option>
  <option  value="4" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+04:00) Yerevan</option>
  <option  value="4.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+04:30) Kabul</option>
  <option  value="5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:00) Yekaterinburg</option>
  <option  value="5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:00) Islamabad, Karachi, Tashkent</option>
  <option  value="5.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:30) Sri Jayawardenapura</option>
  <option  value="5.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
  <option  value="5.75" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+05:45) Kathmandu</option>
  <option  value="6" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:00) Almaty, Novosibirsk</option>
  <option  value="6" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:00) Astana, Dhaka</option>
  <option  value="6.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+06:30) Yangon (Rangoon)</option>
  <option  value="7" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
  <option  value="7" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+07:00) Krasnoyarsk</option>
  <option  value="8" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
  <option  value="8" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Kuala Lumpur, Singapore</option>
  <option  value="8" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Irkutsk, Ulaan Bataar</option>
  <option  value="8" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Perth</option>
  <option  value="8" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+08:00) Taipei</option>
  <option  value="9" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Osaka, Sapporo, Tokyo</option>
  <option  value="9" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Seoul</option>
  <option  value="9" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:00) Yakutsk</option>
  <option  value="9.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:30) Adelaide</option>
  <option  value="9.5" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+09:30) Darwin</option>
  <option  value="10" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Brisbane</option>
  <option  value="10" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Canberra, Melbourne, Sydney</option>
  <option  value="10" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Hobart</option>
  <option  value="10" <?php if($supplier_records->timezone == "internationaldatelinewest"){ ?> selected="selected" <?php }?>>(GMT+10:00) Guam, Port Moresby</option>
  <option  value="10" <?php if($supplier_records->timezone == "10"){ ?> selected="selected" <?php }?>>(GMT+10:00) Vladivostok</option>
  <option  value="11" <?php if($supplier_records->timezone == "11"){ ?> selected="selected" <?php }?>>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
  <option  value="12" <?php if($supplier_records->timezone == "12"){ ?> selected="selected" <?php }?>>(GMT+12:00) Auckland, Wellington</option>
  <option  value="12" <?php if($supplier_records->timezone == "12"){ ?> selected="selected" <?php }?>>(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
  <option  value="13" <?php if($supplier_records->timezone == "13"){ ?> selected="selected" <?php }?>>(GMT+13:00) Nuku'alofa</option>
</select>

                  </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12" >
                <input type="text" name="ordercutoffdeliveryinfo" class="form-control"  placeholder="Order Cutoff & Delivery Information" value="<?php echo $supplier_records->ordercutoffdeliveryinfo; ?>" required>
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
                <select name="payment_terms" class="form-control" required>
                 
                  <option value="advance" <?php if($supplier_records->payment_terms == "advance"){ ?> selected="selected" <?php }?>>Advance</option>

                  <option value="5050_advance" <?php if($supplier_records->payment_terms == "5050_advance"){ ?> selected="selected" <?php }?>>50/50 Advance</option>

                  <option value="7525_advance" <?php if($supplier_records->payment_terms == "7525_advance"){ ?> selected="selected" <?php }?>>75/25 Advance</option>

                  <option value="pay_to_ship" <?php if($supplier_records->payment_terms == "pay_to_ship"){ ?> selected="selected" <?php }?>>Pay to ship</option>

                  <option value="pay_on_delivery" <?php if($supplier_records->payment_terms == "pay_on_delivery"){ ?> selected="selected" <?php }?>>Pay on Delivery</option>

                  <option value="7days_doi" <?php if($supplier_records->payment_terms == "7days_doi"){ ?> selected="selected" <?php }?>>7 Days DOI</option>

                  <option value="14days_doi" <?php if($supplier_records->payment_terms == "14days_doi"){ ?> selected="selected" <?php }?>>14 Days DOI</option>

                  <option value="30days_doi" <?php if($supplier_records->payment_terms == "30days_doi"){ ?> selected="selected" <?php }?>>30 Days DOI</option>

                  <option value="60days_doi" <?php if($supplier_records->payment_terms == "60days_doi"){ ?> selected="selected" <?php }?>>60 Days DOI</option>

                  <option value="90days_doi" <?php if($supplier_records->payment_terms == "90days_doi"){ ?> selected="selected" <?php }?>>90 Days DOI</option>

                  <option value="eom" <?php if($supplier_records->payment_terms == "eom"){ ?> selected="selected" <?php }?>>EOM</option>

                  <option value="30_eom" <?php if($supplier_records->payment_terms == "30_eom"){ ?> selected="selected" <?php }?>>30 EOM</option>

                  <option value="60_eom" <?php if($supplier_records->payment_terms == "60_eom"){ ?> selected="selected" <?php }?>>60 EOM</option>

                  <option value="90_eom" <?php if($supplier_records->payment_terms == "90_eom"){ ?> selected="selected" <?php }?>>90 EOM</option>
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
                <input type="text" name="payment_ref" class="form-control"  placeholder="" value="<?php echo $supplier_records->payment_ref; ?>" required>
                </div>

              </div>
            </div>
          </div>

          <div class="form-group">
            
              <div class="col-md-12" >
                <div class="row">
                  <div class="col-md-6 p-0">Discount & Pricing Information:</div>
                  <div class="col-md-6 p-0">
                <input type="text" name="discount_pricing" class="form-control"  placeholder="Discount & Pricing Information" value="<?php echo $supplier_records->discount_pricing; ?>" required>
              </div>
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
            <div class="row">
              <div class="col-md-12" >
                <input type="text" name="other_manufacturer" class="form-control"  placeholder="Other Manufacturers Supplied" value="<?php echo $supplier_records->other_manufacturer; ?>" required>
              </div>
            </div>
          </div>





            <div class="row">
              <div class="col-md-12">
                <label>Product Condition:</label> 
              </div>
            </div>
             <div class="btn-group btn-group-toggle" data-toggle="buttons">

              <?php if($supplier_records->product_condition == "factorysealed"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="product_condition" value="factorysealed" required> Factory Sealed
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="product_condition" value="factorysealed" required> Factory Sealed
                      </label>
                    <?php } ?>


                    <?php if($supplier_records->product_condition == "openbox"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="product_condition" value="openbox" required> Open Box
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="product_condition" value="openbox" required> Open Box
                      </label>
                    <?php } ?>


                    <?php if($supplier_records->product_condition == "used"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="product_condition" value="used" required> used Box
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="product_condition" value="used" required> used Box
                      </label>
                    <?php } ?>


                     <?php if($supplier_records->product_condition == "exchange"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="product_condition" value="exchange" required> Exchange
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="product_condition" value="exchange" required> Exchange
                      </label>
                    <?php } ?>


                    <?php if($supplier_records->product_condition == "repair"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="product_condition" value="repair" required> Repair
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="product_condition" value="repair" required> Repair
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
                <input type="text" name="location" class="form-control" placeholder="Location Number/ Name" value="<?php echo $supplier_address->location; ?>" required/>
              </div>
              <div class="col-md-6">
                <input type="text" name="street_address" class="form-control" placeholder="Street Address" value="<?php echo $supplier_address->street_address; ?>" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="city" class="form-control" placeholder="Town / city" value="<?php echo $supplier_address->city; ?>" required/>
              </div>
              <div class="col-md-6">
                <input type="text" name="state" class="form-control" placeholder="State" value="<?php echo $supplier_address->state; ?>" required/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="zip" class="form-control" placeholder="Postal / Zip code" value="<?php echo $supplier_address->zip; ?>" required/>
              </div>
              <div class="col-md-6">
                <select name="country" class="form-control" required>
                  <option value="">Country</option>
                  <option value="india" <?php if($supplier_address->country == "india"){ ?> selected="selected" <?php }?>>India</option>
                  <option value="usa" <?php if($supplier_address->country == "usa"){ ?> selected="selected" <?php }?>>USA</option>
                  <option value="uk" <?php if($supplier_address->country == "uk"){ ?> selected="selected" <?php }?>>UK</option>
                </select>
              </div>
              
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <select name="address_type" class="form-control" required>
                  <option value="">Address Type</option>
                  <option value="AE" <?php if($supplier_address->address_type == "AE"){ ?> selected="selected" <?php }?>>Invoice Address</option>
                  <option value="VI" <?php if($supplier_address->address_type == "VI"){ ?> selected="selected" <?php }?>>Delivery Address</option>
                  <option value="MC" <?php if($supplier_address->address_type == "MC"){ ?> selected="selected" <?php }?>>Head Office Location</option>
                </select>
              </div>
            </div> 
           <!--  <br>
            <div class="row">
              <div class="col-md-12">
                <p>If this company has more than one address , please click the button below to<br> add new address.</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light savebtn clr address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp&nbsp Add new Address</button><br>
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
            <div class="col-xl-3 col-md-6 col-sm-6">
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="button" name="cancel" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save & Continue</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
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

  .addnewcompny {
    border-radius: 0px !important;
    font-size: 22px !important;
    text-align: center;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}

.trad {
    border-radius: 0px !important;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}
.marbtmm {
    margin-bottom: 0px;
}
</style>
