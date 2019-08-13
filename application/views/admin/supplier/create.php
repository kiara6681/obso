<style>
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .col-sm-3{
        padding-bottom: 20px;
    }
    .col-sm-6{
        padding-bottom: 20px;
    }
    .col-sm-12{
        padding-bottom: 20px;
    }
    .marbtmm {
        margin-bottom: 0px;
    }
    .btn-group-toggle .active{
        background: rgb(255, 105, 97) !important;
        border: 1px rgb(255, 105, 97) !important;
    }
    .btn-default{
        background-color: #323a4e;
        color: #fff;
    }
    .ctm-label label{
        margin-bottom: 15px !important;
        width: 120px;
    }
    .ctm-label-m label{
        margin-bottom: 15px !important;
        width: 120px;
    }
    .rating {
      direction: rtl;
      text-align: left;
      margin: 0px !important;
    }
    .rating input {
      display: none;
    }
    .rating label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        display: inline-block;
        content: "\f005";
    }
    li {
      list-style: none;
    }
    .rating label {
      color: #ddd;
      margin-bottom: 0px;
    }
    /***** CSS to Highlight Stars on Hover *****/

    .ratingSelector input:checked ~ label,
    /* show gold star when clicked */

    .ratingSelector label:hover,
    /* hover current star */

    .ratingSelector label:hover ~ label {
      color: #FFD700;
    }
    /* hover previous stars in list */

    .ratingSelector input:checked + label:hover,
    /* hover current star when changing rating */

    .ratingSelector input:checked ~ label:hover,
    .ratingSelector label:hover ~ input:checked ~ label,
    /* lighten current selection */

    .ratingSelector input:checked ~ label:hover ~ label {
      color: #FFED85;
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">                    
                    <div class="col-sm-10">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Home</li>
                            <li class="breadcrumb-item active"><a href="<?= base_url();?>admin/sales">Sales</a></li>
                            <li class="breadcrumb-item "><a html="javascript:;">Add New Sales</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="sales_company_form">

                                <form action="<?= base_url('admin/sales/create'); ?>" method="post"> 

                                    <div class="row">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                        <div class="col-sm-6">
                                            <select class="form-control companies" style="height: 50px;" name="company" required="required">
                                                <option value="">Company</option>
                                                <?php
                                                foreach ($suppliers_companies as $key => $sup_company) {
                                                    ?>
                                                    <option value="<?= $sup_company['id']; ?>"><?= $sup_company['company_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="col-sm-6">

                                            <select class="form-control" style="height: 50px;" name="contact_database_status" required>
                                                <option value="">Contacts Database Status</option>
                                                <option value="1">Lead</option>
                                                <option value="2">Suspects</option>
                                                <option value="3">Prospects</option>
                                                <option value="4">Account Contacts</option>     
                                            </select>

                                            <!-- <input class="form-control" type="hidden" name="trader" value="admin" readonly placeholder="Trader Name"> -->
                                        </div> 
                                    </div>
                                    <br>
                                    <h4 class="mt-0 header-title">Supplier Information</h4>
                                    <hr><br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>*Supplier Name</label>
                                                    <input class="form-control" type="text" name="first_name" placeholder="Enter Company Name" required="required">
                                                </div>    

                                                <div class="col-sm-12">
                                                    <label>*Website</label>
                                                    <input class="form-control" type="url" name="website" placeholder="http://website.com" required="required">
                                                </div>

                                                <!-- <div class="col-sm-6">
                                                    <label>Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option value="">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div> -->

                                                <!-- <div class="col-sm-6">
                                                    <label>Contact Location</label>
                                                    <input type="text" name="contact_location" class="form-control" placeholder="Enter Contact Location">
                                                </div>  -->

                                                <div class="col-sm-12">
                                                    <label>Supplier Relationship Manager</label>
                                                    <select class="form-control" name="trader">
                                                        <option value="admin">Unassigned</option>
                                                    </select>
                                                </div> 
                                                <div class="col-sm-6">
                                                    <label>*Country</label>
                                                    <select name="contact_country" class="form-control"  required>
                                                        <option value="">Select Country</option>
                                                        <?php
                                                        foreach ($countries as $key => $country) {
                                                            ?>
                                                            <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div> 
                                                <div class="col-sm-6">
                                                    <label>*Supplier Type</label>
                                                    <select name="supplier_type" class="form-control"  required>
                                                        <option value="">Select Supplier Type</option>
                                                        <option value="OEM Manufacturer">OEM Manufacturer</option>
                                                        <option value="Direct Official Distributor">Direct Official Distributor</option>
                                                        <option value="Indirect Official Distributor">Indirect Official Distributor</option>
                                                        <option value="Repair with Stock & Supply (independent)">Repair with Stock & Supply (independent)</option>
                                                        <option value="Independent 3rd Party Stockist & Supplier">Independent 3rd Party Stockist & Supplier</option>     
                                                    </select>
                                                </div>
                                                <!-- <div class="col-sm-6">
                                                    <label>*Industry</label>
                                                    <select class="form-control cmp_industry" name="industry"></select>
                                                </div>  -->
                                            </div> 
                                        </div>  
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>Generic Supplier Information Notes</label>
                                                    <textarea class="form-control" name="generic_supplier_info" cols="30" placeholder="Generic Supplier Information Notes" rows="5"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Other Names Supplier known as</label>
                                                    <textarea class="form-control" name="other_supplier_known" cols="30" placeholder="Other Names Supplier known as" rows="5"></textarea>
                                                </div> 
                                            </div> 
                                        </div> 

                                        <div class="col-sm-5">
                                            <label>*Next Day cut off delivery cut off Time</label>
                                            <select name="delivery_cut_off_time" class="form-control"  required>
                                                <option>(GMT-12:00) International Date Line West</option>
                                                <option>(GMT-11:00) Midway Island, Samoa</option>
                                                <option value="-10">(GMT-10:00) Hawaii</option>
                                                <option value="-9">(GMT-09:00) Alaska</option>
                                                <option value="-8">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                <option value="-7">(GMT-07:00) Arizona</option>
                                                <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                <option value="-7">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="-6">(GMT-06:00) Central America</option>
                                                <option value="-6">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                <option value="-5">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                <option value="-4">(GMT-04:00) Manaus</option>
                                                <option value="-4">(GMT-04:00) Santiago</option>
                                                <option value="-3.5">(GMT-03:30) Newfoundland</option>
                                                <option value="-3">(GMT-03:00) Brasilia</option>
                                                <option value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                                                <option value="-3">(GMT-03:00) Greenland</option>
                                                <option value="-3">(GMT-03:00) Montevideo</option>
                                                <option value="-2">(GMT-02:00) Mid-Atlantic</option>
                                                <option value="-1">(GMT-01:00) Cape Verde Is.</option>
                                                <option value="-1">(GMT-01:00) Azores</option>
                                                <option value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                                <option value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                <option value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                <option value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                <option value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                <option value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                <option value="1">(GMT+01:00) West Central Africa</option>
                                                <option value="2">(GMT+02:00) Amman</option>
                                                <option value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                                <option value="2">(GMT+02:00) Beirut</option>
                                                <option value="2">(GMT+02:00) Cairo</option>
                                                <option value="2">(GMT+02:00) Harare, Pretoria</option>
                                                <option value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                <option value="2">(GMT+02:00) Jerusalem</option>
                                                <option value="2">(GMT+02:00) Minsk</option>
                                                <option value="2">(GMT+02:00) Windhoek</option>
                                                <option value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                                <option value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                <option value="3">(GMT+03:00) Nairobi</option>
                                                <option value="3">(GMT+03:00) Tbilisi</option>
                                                <option value="3.5">(GMT+03:30) Tehran</option>
                                                <option value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                <option value="4">(GMT+04:00) Baku</option>
                                                <option value="4">(GMT+04:00) Yerevan</option>
                                                <option value="4.5">(GMT+04:30) Kabul</option>
                                                <option value="5">(GMT+05:00) Yekaterinburg</option>
                                                <option value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                                <option value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                                                <option value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                <option value="5.75">(GMT+05:45) Kathmandu</option>
                                                <option value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                                                <option value="6">(GMT+06:00) Astana, Dhaka</option>
                                                <option value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                                                <option value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                <option value="7">(GMT+07:00) Krasnoyarsk</option>
                                                <option value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                <option value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                <option value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                <option value="8">(GMT+08:00) Perth</option>
                                                <option value="8">(GMT+08:00) Taipei</option>
                                                <option value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                <option value="9">(GMT+09:00) Seoul</option>
                                                <option value="9">(GMT+09:00) Yakutsk</option>
                                                <option value="9.5">(GMT+09:30) Adelaide</option>
                                                <option value="9.5">(GMT+09:30) Darwin</option>
                                                <option value="10">(GMT+10:00) Brisbane</option>
                                                <option value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                <option value="10">(GMT+10:00) Hobart</option>
                                                <option value="10">(GMT+10:00) Guam, Port Moresby</option>
                                                <option value="10">(GMT+10:00) Vladivostok</option>
                                                <option value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                                <option value="12">(GMT+12:00) Auckland, Wellington</option>
                                                <option value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                <option value="13">(GMT+13:00) Nuku'alofa</option>    
                                            </select>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Express Options Available
                                                </label>
                                                <div class="card-body">
                                                   <div class="btn-group  btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="same_day" value="Less then 1 year"> Same Day
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="pre_9am" value="Daily"> Pre 9am
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="next_day" value="Weekly"> Next Day
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="2_days" value="Monthly"> 2 days 
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label>*Conditions Offered</label>
                                            <select name="conditions_offered" class="form-control"  required>
                                                <option value="">Choose</option>
                                                <option value="Brand New supply only">Brand New supply only</option>
                                                <option value="All supply conditions check quote">All supply conditions check quote</option>
                                                <option value="All supply conditions & Repair">All supply conditions & Repair</option>  
                                            </select>
                                        </div>
                                        <div class="col-sm-7">
                                            <label>*Standard Delivery Time</label>
                                            <select name="standard_delivery_time" class="form-control"  required>
                                                <option value="">Choose</option>
                                                <option value="Next Day (by end of Day)">Next Day (by end of Day)</option>
                                                <option value="2 Working Days">2 Working Days</option>
                                                <option value="3 Working Days">3 Working Days</option>  
                                                <option value="4 Working Days">4 Working Days</option>  
                                            </select>
                                        </div>
                                    </div>

                                    <br><br>
        
                                    <h4 class="header-title">Supplier Rating</h4>
                                    <hr><hr><br>
                                    <div class="row">
                                     
                                        <div class="col-sm-4">
                                            <label>Quality</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="quality[]" id="Quality-1-5" value="1" class="radio"/>
                                                        <label class="full" for="Quality-1-5"></label>
                                                        <input type="radio" name="quality[]" id="Quality-2-5" value="2" class="radio"/>
                                                        <label class="full" for="Quality-2-5"></label>
                                                        <input type="radio" name="quality[]" id="Quality-3-5" value="3" class="radio"/>
                                                        <label class="full" for="Quality-3-5"></label>
                                                        <input type="radio" name="quality[]" id="Quality-4-5" value="4" class="radio"/>
                                                        <label class="full" for="Quality-4-5"></label>
                                                        <input type="radio" name="quality[]" id="Quality-5-5" value="5" class="radio"/>
                                                        <label class="full" for="Quality-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Info on Quality</label>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Pricing</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                            <li> 
                                                <span class="ratingSelector">
                                                    <input type="radio" name="pricing[]" id="Pricing-1-5" value="1" class="radio"/>
                                                    <label class="full" for="Pricing-1-5"></label>
                                                    <input type="radio" name="pricing[]" id="Pricing-2-5" value="2" class="radio"/>
                                                    <label class="full" for="Pricing-2-5"></label>
                                                    <input type="radio" name="pricing[]" id="Pricing-3-5" value="3" class="radio"/>
                                                    <label class="full" for="Pricing-3-5"></label>
                                                    <input type="radio" name="pricing[]" id="Pricing-4-5" value="4" class="radio"/>
                                                    <label class="full" for="Pricing-4-5"></label>
                                                    <input type="radio" name="pricing[]" id="Pricing-5-5" value="5" class="radio"/>
                                                    <label class="full" for="Pricing-5-5"></label>
                                                </span>
                                            </li>
                                        </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Info on Pricing</label>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Delivery Accuracy</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="accuracy[]" id="Accuracy-1-5" value="1" class="radio"/>
                                                    <label class="full" for="Accuracy-1-5"></label>
                                                        <input type="radio" name="accuracy[]" id="Accuracy-2-5" value="2" class="radio"/>
                                                    <label class="full" for="Accuracy-2-5"></label>
                                                        <input type="radio" name="accuracy[]" id="Accuracy-3-5" value="3" class="radio"/>
                                                    <label class="full" for="Accuracy-3-5"></label>
                                                        <input type="radio" name="accuracy[]" id="Accuracy-4-5" value="4" class="radio"/>
                                                    <label class="full" for="Accuracy-4-5"></label>
                                                        <input type="radio" name="accuracy[]" id="Accuracy-5-5" value="5" class="radio"/>
                                                    <label class="full" for="Accuracy-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Info on delivery</label>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Quote Responce Time</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="responce[]" id="Responce-1-5" value="1" class="radio"/>
                                                    <label class="full" for="Responce-1-5"></label>
                                                        <input type="radio" name="responce[]" id="Responce-2-5" value="2" class="radio"/>
                                                    <label class="full" for="Responce-2-5"></label>
                                                        <input type="radio" name="responce[]" id="Responce-3-5" value="3" class="radio"/>
                                                    <label class="full" for="Responce-3-5"></label>
                                                        <input type="radio" name="responce[]" id="Responce-4-5" value="4" class="radio"/>
                                                    <label class="full" for="Responce-4-5"></label>
                                                        <input type="radio" name="responce[]" id="Responce-5-5" value="5" class="radio"/>
                                                    <label class="full" for="Responce-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Info on responce timey</label>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Communication</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="communication[]" id="Communication-1-5" value="1" class="radio"/>
                                                    <label class="full" for="Communication-1-5"></label>
                                                        <input type="radio" name="communication[]" id="Communication-2-5" value="2" class="radio"/>
                                                    <label class="full" for="Communication-2-5"></label>
                                                        <input type="radio" name="communication[]" id="Communication-3-5" value="3" class="radio"/>
                                                    <label class="full" for="Communication-3-5"></label>
                                                        <input type="radio" name="communication[]" id="Communication-4-5" value="4" class="radio"/>
                                                    <label class="full" for="Communication-4-5"></label>
                                                        <input type="radio" name="communication[]" id="Communication-5-5" value="5" class="radio"/>
                                                    <label class="full" for="Communication-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Info on Communication</label>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Overall</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelectorOverall">
                                                        <input type="radio" name="overall[]" id="Overall-1-5" value="1" class="radio"/>
                                                        <label class="full" for="Overall-1-5" id="over-1"></label>
                                                        <input type="radio" name="overall[]" id="Overall-2-5" value="2" class="radio"/>
                                                        <label class="full" for="Overall-2-5" id="over-2"></label>
                                                        <input type="radio" name="overall[]" id="Overall-3-5" value="3" class="radio"/>
                                                        <label class="full" for="Overall-3-5" id="over-3"></label>
                                                        <input type="radio" name="overall[]" id="Overall-4-5" value="4" class="radio"/>
                                                        <label class="full" for="Overall-4-5" id="over-4"></label>
                                                        <input type="radio" name="overall[]" id="Overall-5-5" value="5" class="radio"/>
                                                        <label class="full" for="Overall-5-5" id="over-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Enter brief Overall info</label>
                                        </div>
                                                                     
                                    </div>
                                    <br>
                                    <h4 class="mt-0 header-title">Supply Information</h4>
                                    <hr>
                                    <br>
                                    <div class="row" id="append_new_manu" style="display: none;">
                                        <div class="col-md-2 text-center">
                                            <label><strong>Menufecturers</strong></label>
                                        </div>    
                                        <div class="col-md-3 text-center">
                                            <label><strong>Current Line / Obsolete</strong></label>
                                        </div>    
                                        <div class="col-md-3 text-center">
                                            <label><strong>Condition information</strong></label>
                                        </div>    
                                        <div class="col-md-3 text-center">
                                            <label><strong>Pricing & Discount information</strong></label>
                                        </div>    
                                        <div class="col-md-1 text-center">
                                            <label><strong>Remove</strong></label>
                                        </div>    
                                    </div>

                                    <div class="col-sm-12 text-right">
                                        <button type="button" id="add_manufacturer" class="btn btn-primary waves-effect btn-md waves-light add_new_address" data-toggle="modal" data-target="#addManufacturerModal"> Add Manufacturer </button>  
                                    </div>
                                    
                                    <br />

                                    <h4 class="mt-0 header-title">Supplier communication Notes & Attachments </h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="<?= base_url(); ?>uploads/coming-soon.jpg" style="width:100%;">
                                        </div>
                                    </div>
                                    <br />
                                    <h4 class="mt-0 header-title">Supplier Contact  information</h4>
                                    <hr>
                                    <br />

                                    <div class="row service_wrap">
                                        <div class="col-sm-2">
                                            <label>Name</label>
                                            <input type="text" name="contact_name[0]" class="form-control" value="" placeholder="Name" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Surname</label>
                                            <input type="text" name="contact_surname[0]" class="form-control" value="" placeholder="Surname" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Phone Number</label>
                                            <input type="number" name="contact_phone[0]" class="form-control" value="" placeholder="Phone Number">
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Email Address</label>
                                            <input type="text" name="contact_email[0]" class="form-control" value="" placeholder="Email Address" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Main Language</label>
                                            <select name="address_type[0]" id="address_type" class="form-control">
                                                <option value="">Address Type</option>
                                                <option value="head_office_address">Head Office Location</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <label>English</label>
                                            <select name="address_type[0]" id="address_type" class="form-control">
                                                <option value="">Address Type</option>
                                                <option value="head_office_address">Head Office Location</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3" id="add_address">
                                            <button type="button" style="margin-top: 28px;" class="btn btn-primary waves-effect btn-md btn-block waves-light add_new_address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Add New Supplier Contact</button>
                                        </div>                                      
                                    </div>

                                    <br />
                                    <h4 class="mt-0 header-title">Asscoiated Address information</h4>
                                    <hr>
                                    <br />                                    
                                    <div class="row service_wrap">
                                        <div class="col-sm-3">
                                            <label>Location Number/ Name</label>
                                            <input type="text" name="location[0]" class="form-control" value="" placeholder="Location Number/ Name" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Street Address</label>
                                            <input type="text" name="street_address[0]" class="form-control" value="" placeholder="Street Address" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Town / City</label>
                                            <input type="text" name="city[0]" class="form-control" value="" placeholder="Town / City">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>State</label>
                                            <input type="text" name="state[0]" class="form-control" value="" placeholder="State" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Postal / Zip Code</label>
                                            <input type="text" name="zip[0]" class="form-control" value="" placeholder="Postal / Zip Code" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Country</label>
                                            <select class="form-control" name="country[0]">
                                                <option value="">Select Country</option>
                                                <?php
                                                foreach ($countries as $key => $country) {
                                                    ?>
                                                    <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Address Type</label>
                                            <select name="address_type[0]" id="address_type" class="form-control">
                                                <option value="">Address Type</option>
                                                <option value="head_office_address">Head Office Location</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3" id="add_address">
                                            <button type="button" style="margin-top: 28px;" class="btn btn-primary waves-effect btn-md btn-block waves-light add_new_address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Add Other Address</button>
                                        </div>                                      
                                    </div>
                                    <br />
                                    <h4 class="mt-0 header-title">Supplier Marketing Prefrences</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Communication Methods 
                                                </label>
                                               <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-default btn-lg">
                                                        <input type="radio" name="communication" value="email"> Email
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg">
                                                        <input type="radio" name="communication" value="sms"> SMS
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg">
                                                        <input type="radio" name="communication" value="both"> WhatsApp
                                                    </label> 
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-sm-6">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Contact Status
                                                </label>
                                               <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-default btn-lg active">
                                                        <input type="radio" name="contact_status" value="active" checked> Activley Market
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg">
                                                        <input type="radio" name="contact_status" value="do_not_contact"> Do not Contact
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg">
                                                        <input type="radio" name="contact_status" value="in_active"> In-Active Contact
                                                    </label> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                            <input type="submit" name="add_company" value="Add Contact" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
                                        </div>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
</div>

<div id="addManufacturerModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add Manufacturer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="card">
                <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <div class="button-items">
                        <form action="" id="create_manu_form" class="form-horizontal form-groups-bordered validate" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>*Manufacturers</label>
                                    <select name="sup_info_manu" id="sup_info_manu" class="form-control"  required>
                                        <option value="">Choose</option>
                                        <?php
                                        foreach ($menufecturer as $key => $manu) {
                                            ?>
                                            <option value="<?= $manu['id']; ?>"><?= $manu['manufacturer']; ?></option>
                                            <?php
                                        }
                                        ?>
                                        <option value="All supply conditions check quote">All supply conditions check quote</option>
                                        <option value="All supply conditions & Repair">All supply conditions & Repair</option>  
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label>Select</label>
                                    <br />
                                    <input type="checkbox" name="current_line" class="current_line" value="current_line">  Current Line
                                    <input type="checkbox" name="line_obsolete" class="line_obsolete" value="obsolete">  Obsolete
                                </div>
                                <div class="col-sm-6">
                                    <label>Condition information</label>
                                    <input type="text" name="condition_information" id="condition_information" class="form-control" placeholder="Condition Information" required="required">
                                </div>
                                <div class="col-sm-6">
                                    <label>Pricing & Discount information</label>
                                    <input type="text" name="pricing_discount_information" id="pricing_discount_information" class="form-control" placeholder="Enter Pricing & Discount information" required="required">
                                </div>
                            </div>

                            <button type="button" name="create_manu" id="create_manu" class="btn btn-primary btn-block waves-effect waves-light">Submit</button>
                        </form> 

                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function(){

        var objGroup = document.getElementsByClassName('ratingSelector');
        for (var i = 0; i < objGroup.length; i++) {
            var objRadio = [].slice.call(objGroup[i].getElementsByClassName('full')); // Create an array of items
            for (var j = objRadio.length; j--;) { // Loop through the array backwards
            var checkbox = document.getElementById(objRadio[j].getAttribute('for'));
                objGroup[i].appendChild(checkbox);
                objGroup[i].appendChild(objRadio[j]);
            }
        }

        $(document).on('change', '.ratingSelector', function(){
            var overall = [];
            var sum = 0;
            var temp = 0;
            $.each($(".ratingSelector input:checked"), function(){            
                overall.push($(this).val());
                sum = sum + parseInt($(this).val());
                temp++;
            });
            
            var result = sum / temp;
            if(result <= 1.4)
            {
                $('#Overall-1-5').attr('checked', true);
                $('#over-1').css('color', '#ddd');
                $('#over-2').css('color', '#ddd');
                $('#over-3').css('color', '#ddd');
                $('#over-4').css('color', '#ddd');
                $('#over-5').css('color', '#FFD700');
            }
            else if(result >= 1.5 && result <= 2.4)
            {
                $('#Overall-1-5').attr('checked', true);
                $('#Overall-2-5').attr('checked', true);
                $('#over-1').css('color', '#ddd');
                $('#over-2').css('color', '#ddd');
                $('#over-3').css('color', '#ddd');
                $('#over-4').css('color', '#FFD700');
                $('#over-5').css('color', '#FFD700');
            }
            else if(result >= 2.5 && result <= 3.4)
            {
                $('#Overall-1-5').attr('checked', true);
                $('#Overall-2-5').attr('checked', true);
                $('#Overall-3-5').attr('checked', true);
                $('#over-1').css('color', '#ddd');
                $('#over-2').css('color', '#ddd');
                $('#over-3').css('color', '#FFD700');
                $('#over-4').css('color', '#FFD700');
                $('#over-5').css('color', '#FFD700');
            }
            else if(result >= 3.5 && result <= 4.4)
            {
                $('#Overall-1-5').attr('checked', true);
                $('#Overall-2-5').attr('checked', true);
                $('#Overall-3-5').attr('checked', true);
                $('#Overall-4-5').attr('checked', true);
                $('#over-1').css('color', '#ddd');
                $('#over-2').css('color', '#FFD700');
                $('#over-3').css('color', '#FFD700');
                $('#over-4').css('color', '#FFD700');
                $('#over-5').css('color', '#FFD700');
            }
            else if(result >= 4.5 && result <= 5)
            {
                $('#Overall-1-5').attr('checked', true);
                $('#Overall-2-5').attr('checked', true);
                $('#Overall-3-5').attr('checked', true);
                $('#Overall-4-5').attr('checked', true);
                $('#Overall-5-5').attr('checked', true);
                $('#over-1').css('color', '#FFD700');
                $('#over-2').css('color', '#FFD700');
                $('#over-3').css('color', '#FFD700');
                $('#over-4').css('color', '#FFD700');
                $('#over-5').css('color', '#FFD700');
            }
            else{
                $('#Overall-1-5').attr('checked', false);
                $('#Overall-2-5').attr('checked', false);
                $('#Overall-3-5').attr('checked', false);
                $('#Overall-4-5').attr('checked', false);
                $('#Overall-5-5').attr('checked', false);
                $('#over-1').css('color', '#ddd');
                $('#over-2').css('color', '#ddd');
                $('#over-3').css('color', '#ddd');
                $('#over-4').css('color', '#ddd');
                $('#over-5').css('color', '#ddd');
            }


        });

        // Create new manufacturer

        var menufacturer_wrap         = $("#append_new_manu"); //Fields wrapper
        var add_manufacturer      = $("#create_manu"); //Add button ID

        var i = 1;

        $(add_manufacturer).click(function(e){ //on add input button click
            e.preventDefault();

            var all_manu_data = $('#create_manu_form').serialize();

            var sup_info_manu = $("#sup_info_manu option:selected").text();
            var manu_value = $("#sup_info_manu").val();
            var current_line = $(".current_line").val();
            var line_obsolete = $(".line_obsolete").val();
            var condition_information = $("#condition_information").val();
            var pricing_discount_information = $("#pricing_discount_information").val();

            var html = '<div class="col-md-12" style="background-color:gray;padding-bottom:0px;margin-bottom:10px;"><div class="row"><div class="col-sm-2 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-primary"> '+sup_info_manu+' </label><input type="hidden" name="manufacturer['+i+']" > </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-primary"> '+current_line+' / '+line_obsolete+' </label><input type="hidden" name="current_obsolate['+i+']" > </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-primary"> '+condition_information+' </label><input type="hidden" name="condition['+i+']" > </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-primary"> '+pricing_discount_information+' </label><input type="hidden" name="pricing_discount['+i+']"> </div><div class="col-sm-1 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-danger delete_menufecture"> X </label></div></div></div>';

            $(menufacturer_wrap).show('');
            $(menufacturer_wrap).append(html);
            $("#create_manu_form").trigger('reset');
            i++;
        });

        $(menufacturer_wrap).on("click",".delete_menufecture", function(e){ //user click on remove text
            e.preventDefault();
            if(i == 2)
            {
                $(menufacturer_wrap).hide('');
                $(this).parent('div').parent('div').parent('div').remove();
            }else{
                $(this).parent('div').parent('div').parent('div').remove();
            }
            i--;
        });

        //Add new Address
        //var max_fields      = 10; //maximum input boxes allowed
        var service_wrap         = $(".service_wrap"); //Fields wrapper
        var add_button      = $(".add_new_address"); //Add button ID

        var j = 1;
        var countries = <?php echo json_encode($countries) ?>;

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            //if(x < max_fields){ //max input box allowed
                var data = '<div class="col-md-12"><div class="row"><div class="col-sm-3"><label>Location</label><input type="text" name="location['+j+']" class="form-control" value="" placeholder="Location Number/ Name" /></div><div class="col-sm-3"><label>Street Address</label><input type="text" name="street_address['+j+']" class="form-control" value="" placeholder="Street Address" /></div><div class="col-sm-3"><label>Town / City</label><input type="text" name="city['+j+']" class="form-control" value="" placeholder="Town / city"></div><div class="col-sm-3"><label>State</label><input type="text" name="state['+j+']" class="form-control" value="" placeholder="State" /></div><div class="col-sm-3"><label>Postal / Zip Code</label><input type="text" name="zip['+j+']" class="form-control" value="" placeholder="Postal / Zip code" /></div><div class="col-sm-3"><label>Country</label><select class="form-control" name="country['+j+']"><option value="">Select Country</option>';

                    $.each(countries, function (key, value) {
                        data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                data += '</select></div><div class="col-sm-3"><label>Address Type</label><select name="address_type['+j+']" id="address_type" class="form-control"><option value="">Address Type</option><option value="invoice_address">Invoice Address</option><option value="delivery_address">Delivery Address</option></select></div><div class="col-sm-3 text-right"><button style="margin-top: 30px;" class="btn btn-danger waves-effect btn-md btn-block waves-light delete_address">&nbsp; &nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp; </button></div></div></div>'; //add input box

                $(service_wrap).append(data); //add input box
            //}
            j++; //index increment
        });

        $(service_wrap).on("click",".delete_address", function(e){ //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            j--;
        });


        //Get Invtors using Company id
        $(document).on('change','.companies',function(){
            var id = $(this).val();

            var ajaxType = 'company';

            $.ajax({
                type: 'get',
                url: "<?= base_url() ?>admin/enquiry/getIndustry",
                data: { "id" : id, "type" : ajaxType},
                success: function(result){
                    if(result != ""){
                        var obj = JSON.parse(result);
                        console.log(result);
                        if(obj.company){
                            $(".cmp_industry").html(obj.company);
                        }
                    }
                }
            });
        });
    });
</script>