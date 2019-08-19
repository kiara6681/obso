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
    .col-sm-4{
        padding-bottom: 10px;
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
    input[type="radio"] {
      -webkit-appearance: checkbox; /* Chrome, Safari, Opera */
      -moz-appearance: checkbox;    /* Firefox */
      -ms-appearance: checkbox;     /* not currently supported */
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
    .c-active{
        height: calc(0.5em + 0.75rem + 0px);
        width: 14%;
    }
    .c-gray{
        color:gray;
    }
    .c-l-active{
        font-weight: 700;
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
                            <li class="breadcrumb-item active"><a href="<?= base_url();?>admin/suppliers">Suppliers</a></li>
                            <li class="breadcrumb-item "><a html="javascript:;">Edit Suppliers</a></li>
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

                                <form action="<?= base_url('admin/suppliers/edit_supplier'); ?>" method="post"> 
    
                                    <div class="row">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                        <input type="hidden" value="<?= $supplier->id; ?>" name="id">

                                        <div class="col-sm-6">
                                            <select class="form-control" style="height: 50px;" name="contact_database_status" required>
                                                <option value="">Contacts Database Status</option>
                                                <option value="1" <?= ($supplier->status == 1) ? "selected":''; ?>>Supplier Lead</option>
                                                <option value="2" <?= ($supplier->status == 2) ? "selected":''; ?>>Unverified Suppliers</option>
                                                <option value="3" <?= ($supplier->status == 3) ? "selected":''; ?>>Trusted Suppliers</option>
                                                <option value="4" <?= ($supplier->status == 4) ? "selected":''; ?>>Partner Suppliers</option>     
                                            </select>
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
                                                    <input class="form-control" type="text" name="company" placeholder="Enter Company Name" value="<?= $supplier->company; ?>" required="required">
                                                </div>    

                                                <div class="col-sm-12">
                                                    <label>Website</label>
                                                    <input class="form-control" type="url" name="website" placeholder="http://website.com" value="<?= $supplier->website; ?>">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label>Supplier Relationship Manager</label>
                                                    <select class="form-control" name="trader">
                                                        <option value="admin" selected>Unassigned</option>
                                                    </select>
                                                </div> 
                                                <div class="col-sm-6">
                                                    <label>*Country</label>
                                                    <select name="contact_country" class="form-control"  required>
                                                        <option value="">Select Country</option>
                                                        <?php
                                                        foreach ($countries as $key => $country) {
                                                            ?>
                                                            <option value="<?= $country['id']; ?>" <?= ($supplier->contact_country == $country['id']) ? "selected":''; ?>><?= $country['name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div> 
                                                <div class="col-sm-6">
                                                    <label>*Supplier Type</label>
                                                    <select name="supplier_type" class="form-control"  required>
                                                        <option value="">Select Supplier Type</option>
                                                        <option value="OEM Manufacturer" <?= ($supplier->supplier_type == 'OEM') ? "selected":''; ?>>OEM Manufacturer</option>
                                                        <option value="Direct Official Distributor" <?= ($supplier->supplier_type == 'Direct Official Distributor') ? "selected":''; ?>>Direct Official Distributor</option>
                                                        <option value="Indirect Official Distributor" <?= ($supplier->supplier_type == 'Indirect Official Distributor') ? "selected":''; ?>>Indirect Official Distributor</option>
                                                        <option value="Repair with Stock & Supply (independent)" <?= ($supplier->supplier_type == 'Repair with Stock & Supply (independent)') ? "selected":''; ?>>Repair with Stock & Supply (independent)</option>
                                                        <option value="Independent 3rd Party Stockist & Supplier" <?= ($supplier->supplier_type == 'Independent 3rd Party Stockist & Supplier') ? "selected":''; ?>>Independent 3rd Party Stockist & Supplier</option>     
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
                                                    <textarea class="form-control" name="information_notes" cols="30" placeholder="Generic Supplier Information Notes" rows="5"><?= $supplier->information_notes; ?></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Other Names Supplier known as</label>
                                                    <textarea class="form-control" name="supplier_other_names" cols="30" placeholder="Other Names Supplier known as" rows="5"><?= $supplier->supplier_other_names; ?></textarea>
                                                </div> 
                                            </div> 
                                        </div> 

                                        <div class="col-sm-5">
                                            <label>Next Day cut off delivery cut off Time</label>
                                            <select name="cut_off_time" class="form-control" >
                                                <option value="UK 2:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 2:00pm Latest Order') ? "selected":''; ?>>UK 2:00pm Latest Order</option>
                                                <option value="UK 2:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 2:30pm Latest Order') ? "selected":''; ?>>UK 2:30pm Latest Order</option>
                                                <option value="UK 3:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 3:00pm Latest Order') ? "selected":''; ?>>UK 3:00pm Latest Order</option>
                                                <option value="UK 3:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 3:30pm Latest Order') ? "selected":''; ?>>UK 3:30pm Latest Order</option>
                                                <option value="UK 4:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 4:00pm Latest Order') ? "selected":''; ?>>UK 4:00pm Latest Order</option>
                                                <option value="UK 4:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 4:30pm Latest Order') ? "selected":''; ?>>UK 4:30pm Latest Order</option>
                                                <option value="UK 5:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 5:00pm Latest Order') ? "selected":''; ?>>UK 5:00pm Latest Order</option>
                                                <option value="UK 5:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 5:30pm Latest Order') ? "selected":''; ?>>UK 5:30pm Latest Order</option>
                                                <option value="UK 6:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 6:00pm Latest Order') ? "selected":''; ?>>UK 6:00pm Latest Order</option>
                                                <option value="UK 6:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 6:30pm Latest Order') ? "selected":''; ?>>UK 6:30pm Latest Order</option>
                                                <option value="UK 7:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 7:00pm Latest Order') ? "selected":''; ?>>UK 7:00pm Latest Order</option>
                                                <option value="UK 7:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 7:30pm Latest Order') ? "selected":''; ?>>UK 7:30pm Latest Order</option>
                                                <option value="UK 8:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 8:00pm Latest Order') ? "selected":''; ?>>UK 8:00pm Latest Order</option>
                                                <option value="UK 8:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 8:30pm Latest Order') ? "selected":''; ?>>UK 8:30pm Latest Order</option>
                                                <option value="UK 9:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 9:00pm Latest Order') ? "selected":''; ?>>UK 9:00pm Latest Order</option>
                                                <option value="UK 9:30pm Latest Order" <?= ($supplier->cut_off_time == 'UK 9:50pm Latest Order') ? "selected":''; ?>>UK 9:30pm Latest Order</option>
                                                <option value="UK 10:00pm Latest Order" <?= ($supplier->cut_off_time == 'UK 10:00pm Latest Order') ? "selected":''; ?>>UK 10:00pm Latest Order</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Express Options Available
                                                </label>
                                                <div class="card-body">
                                                   <div class="btn-group  btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                    <?php
                                                    $temp = json_decode($supplier->express_options);
                                                    $result = (array)$temp;
                                                    ?>
                                                        <label class="btn btn-primary btn-sm <?= (in_array('Less then 1 year', $result))?"active":""; ?>">
                                                            <input type="checkbox" name="express_options[]" value="Less then 1 year" <?= (in_array('Less then 1 year', $result))?"checked":""; ?>> Same Day
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= (in_array('Daily', $result))?"active":""; ?>">
                                                            <input type="checkbox" name="express_options[]" value="Daily" <?= (in_array('Daily', $result))?"checked":""; ?>> Pre 9am
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= (in_array('Weekly', $result))?"active":""; ?>">
                                                            <input type="checkbox" name="express_options[]" value="Weekly" <?= (in_array('Weekly', $result))?"checked":""; ?>> Next Day
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= (in_array('Monthly', $result))?"active":""; ?>">
                                                            <input type="checkbox" name="express_options[]" value="Monthly" <?= (in_array('Monthly', $result))?"checked":""; ?>> 2 days 
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label>*Conditions Offered</label>
                                            <select name="conditions_offered" class="form-control"  required>
                                                <option value="">Choose</option>
                                                <option value="Brand New supply only" <?= ($supplier->conditions_offered == 'Brand New supply only')?"selected":""; ?>>Brand New supply only</option>
                                                <option value="All supply conditions check quote" <?= ($supplier->conditions_offered == 'All supply conditions check quote')?"selected":""; ?>>All supply conditions check quote</option>
                                                <option value="All supply conditions & Repair" <?= ($supplier->conditions_offered == 'All supply conditions & Repair')?"selected":""; ?>>All supply conditions & Repair</option>  
                                            </select>
                                        </div>
                                        <div class="col-sm-7">
                                            <label>*Standard Delivery Time</label>
                                            <select name="delivery_time" class="form-control"  required>
                                                <option value="">Choose</option>
                                                <option value="Next Day (by end of Day)" <?= ($supplier->delivery_time == 'Next Day (by end of Day)')?"selected":""; ?>>Next Day (by end of Day)</option>
                                                <option value="2 Working Days" <?= ($supplier->delivery_time == '2 Working Days')?"selected":""; ?>>2 Working Days</option>
                                                <option value="3 Working Days" <?= ($supplier->delivery_time == '3 Working Days')?"selected":""; ?>>3 Working Days</option>  
                                                <option value="4 Working Days" <?= ($supplier->delivery_time == '4 Working Days')?"selected":""; ?>>4 Working Days</option>  
                                                <option value="5 Working Days" <?= ($supplier->delivery_time == '5 Working Days')?"selected":""; ?>>5 Working Days</option>  
                                                <option value="(1 Week) 5 Working Days" <?= ($supplier->delivery_time == '(1 Week) 5 Working Days')?"selected":""; ?>>(1 Week) 5 Working Days</option>  
                                                <option value="(2 Week) 10 Working Days" <?= ($supplier->delivery_time == '(2 Week) 10 Working Days')?"selected":""; ?>>(2 Week) 10 Working Days</option>  
                                                <option value="(3 Weeks) 15 Working Days" <?= ($supplier->delivery_time == '(3 Weeks) 15 Working Days')?"selected":""; ?>>(3 Weeks) 15 Working Days</option>  
                                                <option value="(4 Weeks) 21 Working Days" <?= ($supplier->delivery_time == '(4 Weeks) 21 Working Days')?"selected":""; ?>>(4 Weeks) 21 Working Days</option>  
                                                <option value="(4 Weeks +) 21+ Working Days" <?= ($supplier->delivery_time == '(4 Weeks +) 21+ Working Days')?"selected":""; ?>>(4 Weeks +) 21+ Working Days</option> 
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
                                                    <span class="ratingSelector"><input type="radio" name="quality_rating" id="Quality-1-5" value="1" class="radio" <?= ($supplier->quality_rating == '1')?"checked":""; ?>/> <label class="full" for="Quality-1-5"></label><input type="radio" name="quality_rating" id="Quality-2-5" value="2" class="radio" <?= ($supplier->quality_rating == '2')?"checked":""; ?>/><label class="full" for="Quality-2-5"></label><input type="radio" name="quality_rating" id="Quality-3-5" value="3" class="radio" <?= ($supplier->quality_rating == '3')?"checked":""; ?>/><label class="full" for="Quality-3-5"></label><input type="radio" name="quality_rating" id="Quality-4-5" value="4" class="radio" <?= ($supplier->quality_rating == '4')?"checked":""; ?>/><label class="full" for="Quality-4-5"></label><input type="radio" name="quality_rating" id="Quality-5-5" value="5" class="radio" <?= ($supplier->quality_rating == '5')?"checked":""; ?>/><label class="full" for="Quality-5-5"></label></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" placeholder="Enter brief Info on Quality" class="form-control" name="brief_info_quality" value="<?= $supplier->brief_info_quality; ?>">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Pricing</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                            <li> 
                                                <span class="ratingSelector">
                                                    <input type="radio" name="pricing_rating" id="Pricing-1-5" value="1" class="radio" <?= ($supplier->pricing_rating == '1')?"checked":""; ?>/><label class="full" for="Pricing-1-5"></label><input type="radio" name="pricing_rating" id="Pricing-2-5" value="2" class="radio" <?= ($supplier->pricing_rating == '2')?"checked":""; ?>/><label class="full" for="Pricing-2-5"></label><input type="radio" name="pricing_rating" id="Pricing-3-5" value="3" class="radio" <?= ($supplier->pricing_rating == '3')?"checked":""; ?>/><label class="full" for="Pricing-3-5"></label><input type="radio" name="pricing_rating" id="Pricing-4-5" value="4" class="radio" <?= ($supplier->pricing_rating == '4')?"checked":""; ?>/><label class="full" for="Pricing-4-5"></label><input type="radio" name="pricing_rating" id="Pricing-5-5" value="5" class="radio" <?= ($supplier->pricing_rating == '5')?"checked":""; ?>/><label class="full" for="Pricing-5-5"></label>
                                                </span>
                                            </li>
                                        </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="input" placeholder="Enter brief Info on Pricing" name="brief_info_pricing" value="<?= $supplier->brief_info_pricing; ?>" class="form-control">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Delivery Accuracy</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="accuracy_rating" id="Accuracy-1-5" value="1" class="radio" <?= ($supplier->accuracy_rating == '1')?"checked":""; ?>/><label class="full" for="Accuracy-1-5"></label><input type="radio" name="accuracy_rating" id="Accuracy-2-5" value="2" class="radio" <?= ($supplier->accuracy_rating == '2')?"checked":""; ?>/><label class="full" for="Accuracy-2-5"></label><input type="radio" name="accuracy_rating" id="Accuracy-3-5" value="3" class="radio" <?= ($supplier->accuracy_rating == '3')?"checked":""; ?>/><label class="full" for="Accuracy-3-5"></label><input type="radio" name="accuracy_rating" id="Accuracy-4-5" value="4" class="radio" <?= ($supplier->accuracy_rating == '4')?"checked":""; ?>/><label class="full" for="Accuracy-4-5"></label><input type="radio" name="accuracy_rating" id="Accuracy-5-5" value="5" class="radio" <?= ($supplier->accuracy_rating == '5')?"checked":""; ?>/><label class="full" for="Accuracy-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="input" placeholder="Enter brief Info on delivery" name="brief_info_delivery" value="<?= $supplier->brief_info_delivery; ?>" class="form-control">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Quote Responce Time</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="responce_time_rating" id="Responce-1-5" value="1" class="radio" <?= ($supplier->responce_time_rating == '1')?"checked":""; ?>/><label class="full" for="Responce-1-5"></label><input type="radio" name="responce_time_rating" id="Responce-2-5" value="2" class="radio" <?= ($supplier->responce_time_rating == '2')?"checked":""; ?>/><label class="full" for="Responce-2-5"></label><input type="radio" name="responce_time_rating" id="Responce-3-5" value="3" class="radio" <?= ($supplier->responce_time_rating == '3')?"checked":""; ?>/><label class="full" for="Responce-3-5"></label><input type="radio" name="responce_time_rating" id="Responce-4-5" value="4" class="radio" <?= ($supplier->responce_time_rating == '4')?"checked":""; ?>/><label class="full" for="Responce-4-5"></label><input type="radio" name="responce_time_rating" id="Responce-5-5" value="5" class="radio" <?= ($supplier->responce_time_rating == '5')?"checked":""; ?>/><label class="full" for="Responce-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="input" placeholder="Enter brief Info on responce time" name="brief_info_time" value="<?= $supplier->brief_info_time; ?>" class="form-control">

                                        </div>

                                        <div class="col-sm-4">
                                            <label>Communication</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelector">
                                                        <input type="radio" name="communication_rating" id="Communication-1-5" value="1" class="radio" <?= ($supplier->communication_rating == '1')?"checked":""; ?>/><label class="full" for="Communication-1-5"></label><input type="radio" name="communication_rating" id="Communication-2-5" value="2" class="radio" <?= ($supplier->communication_rating == '2')?"checked":""; ?>/><label class="full" for="Communication-2-5"></label><input type="radio" name="communication_rating" id="Communication-3-5" value="3" class="radio" <?= ($supplier->communication_rating == '3')?"checked":""; ?>/><label class="full" for="Communication-3-5"></label><input type="radio" name="communication_rating" id="Communication-4-5" value="4" class="radio" <?= ($supplier->communication_rating == '4')?"checked":""; ?>/><label class="full" for="Communication-4-5"></label><input type="radio" name="communication_rating" id="Communication-5-5" value="5" class="radio" <?= ($supplier->communication_rating == '5')?"checked":""; ?>/><label class="full" for="Communication-5-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="input" placeholder="Enter brief Info on Communication" name="brief_info_communication" value="<?= $supplier->brief_info_communication; ?>" class="form-control">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Overall</label>
                                        </div> 
                                        <div class="col-sm-4">
                                            <ul class="rating">
                                                <li> 
                                                    <span class="ratingSelectorOverall"><input type="radio" name="overall_rating" id="Overall-1-5" value="1" class="radio" <?= ($supplier->overall_rating == 1)?"checked":""; ?>/><label class="full" for="Overall-1-5" id="over-1"></label><input type="radio" name="overall_rating" id="Overall-2-5" value="2" class="radio" <?= ($supplier->overall_rating == 2)?"checked":""; ?>/><label class="full" for="Overall-2-5" id="over-2"></label><input type="radio" name="overall_rating" id="Overall-3-5" value="3" class="radio" <?= ($supplier->overall_rating == 3)?"checked":""; ?>/><label class="full" for="Overall-3-5" id="over-3"></label><input type="radio" name="overall_rating" id="Overall-4-5" value="4" class="radio" <?= ($supplier->overall_rating == 4)?"checked":""; ?> /><label class="full" for="Overall-4-5" id="over-4"></label><input type="radio" name="overall_rating" id="Overall-5-5" value="5" class="radio" <?= ($supplier->overall_rating == 5)?"checked":""; ?>/><label class="full" for="Overall-5-5" id="over-5"></label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="input" placeholder="Enter brief Overall info" name="brief_info_coverall" value="<?= $supplier->brief_info_coverall; ?>" class="form-control">
                                        </div>
                                                                     
                                    </div>
                                    <br>
                                    <h4 class="mt-0 header-title">Supply Information</h4>
                                    <hr>
                                    <br>
                                    <div class="row" id="append_new_manu" style="display: <?= (count($supplier_manufacturers) > 0)?'':'none'; ?>;">
                                        <div class="col-sm-2 text-center">
                                            <label><strong>Menufecturers</strong></label>
                                        </div>    
                                        <div class="col-sm-3 text-center">
                                            <label><strong>Current Line / Obsolete</strong></label>
                                        </div>    
                                        <div class="col-sm-3 text-center">
                                            <label><strong>Condition information</strong></label>
                                        </div>    
                                        <div class="col-sm-3 text-center">
                                            <label><strong>Pricing & Discount information</strong></label>
                                        </div>    
                                        <div class="col-sm-1 text-center">
                                            <label><strong>Remove</strong></label>
                                        </div>
                                        <?php
                                        foreach ($supplier_manufacturers as $mnfr_key => $supplier_manufacturer) 
                                        {
                                            ?>
                                            <div class="col-sm-12" style="padding-bottom:0px;margin-bottom:10px;">
                                                <div class="row">
                                                    <div class="col-sm-2 text-center" style="padding-bottom:0px;padding-top:10px;">
                                                        <input class="c-active" style="float:right;margin-top:8px;" type="checkbox" name="featured_mnfr[<?= $mnfr_key; ?>]" value="<?= $supplier_manufacturer['featured']; ?>" <?= ($supplier_manufacturer['featured'] != null)?'checked':''; ?>>
                                                        <label style="width:80%;float:left;" class="btn btn-block <?= ($supplier_manufacturer['featured'] != null)?'btn-success':'btn-primary'; ?>">
                                                        <?php
                                                            foreach ($menufecturers as $key => $manu) 
                                                            {
                                                                if($manu['id'] == $supplier_manufacturer['manufacturer'])
                                                                {
                                                                    echo $manu['manufacturer'];
                                                                }
                                                            }
                                                            if($supplier_manufacturer['manufacturer'] == 'All supply conditions check quote')
                                                            {
                                                                echo 'All supply conditions check quote';
                                                            }

                                                            if($supplier_manufacturer['manufacturer'] == 'All supply conditions & Repair')
                                                            {
                                                                echo 'All supply conditions & Repair';
                                                            }  
                                                        ?> 
                                                        </label>
                                                        <input type="hidden" value="<?= $supplier_manufacturer['manufacturer']; ?>" name="manufacturer[<?= $mnfr_key; ?>]" > 
                                                    </div>
                                                    <div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"> &nbsp;
                                                        <input value="Current Line"  class="c-active" type="checkbox" name="current[<?= $mnfr_key; ?>]" <?= ($supplier_manufacturer['current'] == 'Current Line')?'checked':''; ?>>&nbsp;
                                                        <b class="<?= ($supplier_manufacturer['current'] == 'Current Line')?'c-l-active':'c-gray'; ?>">Current Line </b>&nbsp;&nbsp;
                                                        <input value="Obsolete" type="checkbox" class="c-active" name="obsolate[<?= $mnfr_key; ?>]" <?= ($supplier_manufacturer['obsolate'] == 'Obsolete')?'checked':''; ?>>&nbsp; 
                                                        <b class="<?= ($supplier_manufacturer['obsolate'] == 'Obsolete')?'c-l-active':'c-gray'; ?>">Obsolete</b> 
                                                    </div>
                                                    <div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;">
                                                        <input class="form-control" type="text" name="condition_information[<?= $mnfr_key; ?>]" value="<?= $supplier_manufacturer['condition_information']; ?>"> 
                                                    </div>
                                                    <div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;">
                                                        <input value="<?= $supplier_manufacturer['pricing_discount']; ?>" type="text" class="form-control" name="pricing_discount[<?= $mnfr_key; ?>]"> 
                                                    </div>
                                                    <div class="col-sm-1 text-center" style="padding-bottom:0px;padding-top:10px;">
                                                        <label class="btn btn-danger delete_menufecture"> X </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?> 
                                    </div>

                                    <div class="col-sm-12 text-right" style="margin-top: 10px;">
                                        <button type="button" id="add_manufacturer" class="btn btn-primary waves-effect btn-md waves-light" data-toggle="modal" data-target="#addManufacturerModal"> Add Manufacturer </button>  
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <p>Alternate supplier conditions explaniation:</p>
                                        <textarea class="form-control" name="alternate_supplier_conditions" placeholder="Alternate supplier conditions explaniation" rows="6"><?= $supplier->alternate_supplier_conditions; ?></textarea>
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
                                    <h4 class="mt-0 header-title">Supplier Financial information</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Payment Terms</label>  
                                                    <select name="payment_terms" class="form-control">
                                                        <option value="">Select Payment Tearms</option>
                                                        <option value="Advance" <?= ($supplier->payment_terms == 'Advance')?"selected":""; ?>>Advance</option>
                                                        <option value="50/50 Advance" <?= ($supplier->payment_terms == '50/50 Advance')?"selected":""; ?>>50/50 Advance</option>
                                                        <option value="75/25 Advance" <?= ($supplier->payment_terms == '75/25 Advance')?"selected":""; ?>>75/25 Advance</option>
                                                        <option value="Pay To Ship" <?= ($supplier->payment_terms == 'Pay To Ship')?"selected":""; ?>>Pay To Ship</option>
                                                        <option value="Pay On Delivery" <?= ($supplier->payment_terms == 'Pay On Delivery')?"selected":""; ?>>Pay On Delivery</option>
                                                        <option value="7 Days DOI" <?= ($supplier->payment_terms == '7 Days DOI')?"selected":""; ?>>7 Days DOI</option>
                                                        <option value="14 Days DOI" <?= ($supplier->payment_terms == '14 Days DOI')?"selected":""; ?>>14 Days DOI</option>
                                                        <option value="30 Days DOI" <?= ($supplier->payment_terms == '30 Days DOI')?"selected":""; ?>>30 Days DOI</option>
                                                        <option value="60 Days DOI" <?= ($supplier->payment_terms == '60 Days DOI')?"selected":""; ?>>60 Days DOI</option>
                                                        <option value="90 Days DOI" <?= ($supplier->payment_terms == '90 Days DOI')?"selected":""; ?>>90 Days DOI</option>
                                                        <option value="EOM" <?= ($supplier->payment_terms == 'EOM')?"selected":""; ?>>EOM</option>
                                                        <option value="30 EOM" <?= ($supplier->payment_terms == '30 EOM')?"selected":""; ?>>30 EOM</option>
                                                        <option value="60 EOM" <?= ($supplier->payment_terms == '60 EOM')?"selected":""; ?>>60 EOM</option>
                                                        <option value="90 EOM" <?= ($supplier->payment_terms == '90 EOM')?"selected":""; ?>>90 EOM</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Ordering Status</label>   
                                                    <select name="ordering_status" class="form-control">
                                                        <option value="">Select Ordering Status</option>
                                                        <option value="Free to order" <?= ($supplier->ordering_status == 'Free to order')?"selected":""; ?>> Free to order</option>
                                                        <option value="Awaiting Payment" <?= ($supplier->ordering_status == 'Awaiting Payment')?"selected":""; ?>>Awaiting Payment</option>
                                                        <option value="On Hold" <?= ($supplier->ordering_status == 'On Hold')?"selected":""; ?>>On Hold</option>
                                                        <option value="Blacklist" <?= ($supplier->ordering_status == 'Blacklist')?"selected":""; ?>>Blacklist</option>                 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <label>Obso's unique supplier record Number</label>   
                                            <input type="text" class="form-control"  name="unique_number" value="<?= $supplier->unique_number; ?>">
                                        </div>
                                    </div>
                                    <br />
                                    <h4 class="mt-0 header-title">Supplier Contact  information</h4>
                                    <hr>
                                    <br />

                                    <div class="row">
                                        <?php
                                        foreach ($supplier_contacts as $key => $contact) 
                                        {
                                            ?>
                                            <div class="col-sm-2">
                                                <label>Name</label>
                                                <input type="radio" name="as_manager" value="1" <?= ($contact['as_manager'] != null)?'checked':''; ?> style="height: calc(0.5em + 0.75rem + 0px);width: 12%;float: left;margin-top: 38px;margin-left: 5px;">
                                                <input type="text" name="contact_name[0]" class="form-control" style="width: 80%;float: right;" value="<?= $contact['fname']; ?>" placeholder="Name" />
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Surname</label>
                                                <input type="text" name="contact_surname[0]" class="form-control" value="<?= $contact['lname']; ?>" placeholder="Surname" />
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Phone Number</label>
                                                <input type="number" name="contact_phone[0]" class="form-control" value="<?= $contact['mobile']; ?>" placeholder="Phone Number">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Email Address</label>
                                                <input type="text" name="contact_email[0]" class="form-control" value="<?= $contact['email']; ?>" placeholder="Email Address" />
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Main Language</label>
                                                <select name="main_language[0]" id="main_language" class="form-control">
                                                    <option value="">Please Choose</option>
                                                    <option value="English" <?= ($contact['main_language'] == 'English')?'selected':''; ?>>English</option>
                                                    <option value="Armenian" <?= ($contact['main_language'] == 'Armenian')?'selected':''; ?>>Armenian</option>
                                                    <option value="Danish" <?= ($contact['main_language'] == 'Danish')?'selected':''; ?>>Danish</option>
                                                    <option value="Dutch" <?= ($contact['main_language'] == 'Dutch')?'selected':''; ?>>Dutch</option>
                                                    <option value="French">French</option>
                                                    <option value="German" <?= ($contact['main_language'] == 'German')?'selected':''; ?>>German</option>
                                                    <option value="Greek" <?= ($contact['main_language'] == 'Greek')?'selected':''; ?>>Greek</option>
                                                    <option value="Hindi" <?= ($contact['main_language'] == 'Hindi')?'selected':''; ?>>Hindi</option>
                                                    <option value="Italian" <?= ($contact['main_language'] == 'Italian')?'selected':''; ?>>Italian</option>
                                                    <option value="Japanese" <?= ($contact['main_language'] == 'Japanese')?'selected':''; ?>>Japanese</option>
                                                    <option value="Urdu" <?= ($contact['main_language'] == 'Urdu')?'selected':''; ?>>Urdu</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>English</label>
                                                <select name="english[0]" id="english" class="form-control">
                                                    <option value="">Please Choose</option>
                                                    <option value="Yes Native" <?= ($contact['english'] == 'Yes Native')?'selected':''; ?>>Yes Native</option>
                                                    <option value="Yes Fluent written & verbal" <?= ($contact['english'] == 'Yes Fluent written & verbal')?'selected':''; ?>>Yes Fluent written & verbal</option>
                                                    <option value="Yes Fluent verbal" <?= ($contact['english'] == 'Yes Fluent verbal')?'selected':''; ?>>Yes Fluent verbal</option>
                                                    <option value="Yes Broken written & verbal" <?= ($contact['english'] == 'Yes Broken written & verbal')?'selected':''; ?>>Yes Broken written & verbal</option>
                                                    <option value="Yes Broken verbal" <?= ($contact['english'] == 'Yes Broken verbal')?'selected':''; ?>>Yes Broken verbal</option>
                                                    <option value="No" <?= ($contact['english'] == 'No')?'selected':''; ?>>No</option>
                                                </select><br />
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                    </div>
                                    <div class="row supplier_wrap">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 offset-md-9">
                                            <button type="button" style="margin-top: 28px;" class="btn btn-primary waves-effect btn-md btn-block waves-light" id="add_supplier" data-toggle="modal" data-target=".bs-example-modal-center">Add New Supplier Contact</button>
                                        </div>
                                    </div>

                                    <br />
                                    <h4 class="mt-0 header-title">Asscoiated Address information</h4>
                                    <hr>
                                    <br />                                    
                                    <div class="row service_wrap">
                                        <?php 
                                        if(count($contact_address) > 0)
                                        {
                                            $j = 1;
                                            foreach($contact_address as $key => $address)
                                            {                                            ?>
                                                <div class="col-sm-3">
                                                    <label>Location Number/ Name</label>
                                                    <input type="text" name="location[0]" class="form-control" value="<?= $address['location']; ?>" placeholder="Location Number/ Name" />
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Street Address</label>
                                                    <input type="text" name="street_address[0]" class="form-control" value="<?= $address['street']; ?>" placeholder="Street Address" />
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Town / City</label>
                                                    <input type="text" name="city[0]" class="form-control" value="<?= $address['town']; ?>" placeholder="Town / City">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>State</label>
                                                    <input type="text" name="state[0]" class="form-control" value="<?= $address['state']; ?>" placeholder="State" />
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Postal / Zip Code</label>
                                                    <input type="text" name="zip[0]" class="form-control" value="<?= $address['zip_code']; ?>" placeholder="Postal / Zip Code" />
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Country</label>
                                                    <select class="form-control" name="country[0]">
                                                        <option value="">Select Country</option>
                                                        <?php
                                                        foreach ($countries as $key => $country) {
                                                            ?>
                                                            <option value="<?= $country['id']; ?>" <?= ($country['id'] == $address['country'])?'selected':'';?>><?= $country['name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <?php 
                                                $j++;
                                            }
                                        }else{
                                        ?>
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
                                        <?php
                                        }
                                        ?>

                                        
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
                                                    <label class="btn btn-default btn-lg <?= ($supplier->communication == 'email')?'active':''; ?>">
                                                        <input type="radio" name="communication" value="email" <?= ($supplier->communication == 'email')?'checked':''; ?>> Email
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($supplier->communication == 'active')?'checked':''; ?>">
                                                        <input type="radio" name="communication" value="sms" <?= ($supplier->communication == 'sms')?'checked':''; ?>> SMS
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($supplier->communication == 'both')?'active':''; ?>">
                                                        <input type="radio" name="communication" value="both" <?= ($supplier->communication == 'both')?'checked':''; ?>> WhatsApp
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
                                                    <label class="btn btn-default btn-lg <?= ($supplier->contact_status == 'active')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="active" <?= ($supplier->contact_status == 'active')?'checked':''; ?>> Activley Market
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($supplier->contact_status == 'do_not_contact')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="do_not_contact" <?= ($supplier->contact_status == 'do_not_contact')?'checked':''; ?>> Do Not Contact
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($supplier->contact_status == 'in_active')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="in_active" <?= ($supplier->contact_status == 'in_active')?'checked':''; ?>> In-Active Contact
                                                    </label> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                            <input type="submit" name="add_company" value="Update Supplier Contact" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
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
                                        foreach ($menufecturers as $key => $manu) {
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
                                    <input type="checkbox" style="height: calc(0.5em + 0.75rem + 0px); width: 10%;margin-top: 10px;" name="current_line" class="current_line" value="Current Line"> <span> Current Line</span>
                                    <input type="checkbox" style="height: calc(0.5em + 0.75rem + 0px); width: 10%;margin-top: 10px;" name="line_obsolete" class="line_obsolete" value="Obsolete"> <span> Obsolete</span>
                                </div>
                                <div class="col-sm-6">
                                    <label>Condition information</label>
                                    <input type="text" name="condition_information" id="condition_information" class="form-control" placeholder="Condition Information" required="required">
                                </div>
                                <div class="col-sm-6">
                                    <label>Pricing & Discount information</label>
                                    <input type="text" name="pricing_discount_information" id="pricing_discount_information" class="form-control" placeholder="Enter Pricing & Discount information" required="required">
                                </div>
                                <div class="col-sm-6">
                                    <input type="checkbox" style="height: calc(0.5em + 0.75rem + 0px); width: 10%;" name="featured[]" id="featured" class="">
                                    <label>Featured</label>
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
<?php
if($supplier->overall_rating)
{
    ?>
    <script type="text/javascript">
        var result = '<?= $supplier->overall_rating; ?>';
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
    </script>
    <?php
}
?>
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

        var i = '<?= $mnfr_key; ?>';

        $(add_manufacturer).click(function(e){ //on add input button click
            e.preventDefault();

            var all_manu_data = $('#create_manu_form').serialize();

            var sup_info_manu = $("#sup_info_manu option:selected").text();
            var manu_value = $("#sup_info_manu").val();
            var current_line = $(".current_line").val();
            var line_obsolete = $(".line_obsolete").val();
            var condition_information = $("#condition_information").val();
            var pricing_discount_information = $("#pricing_discount_information").val();

            var current = '';
            var obsolete = '';
            var a = 0;
            var b = 0;
            var cls2 = '';
            var cls = 'c-gray';
            var featured = '';
            var green = 'btn-primary';
            var featured_check = '';

            if($("#featured").prop("checked") == true)
            {
                green = 'btn-success';
                featured = 1;
                featured_check = 'checked';
            }

            if($(".current_line").prop("checked") == true)
            {
                current = 'checked';
                cls = 'c-l-active';
                a=1;
            }

            if($(".line_obsolete").prop("checked") == true){
                cls2 = 'c-l-active';
                obsolete = 'checked';
                b=1;
            }

            var html = '<div class="col-md-12" style="padding-bottom:0px;margin-bottom:10px;"><div class="row"><div class="col-sm-2 text-center" style="padding-bottom:0px;padding-top:10px;"><input class="c-active" style="float:right;margin-top:8px;" type="checkbox" name="featured_mnfr['+i+']" value="'+featured+'" '+featured_check+'><label style="width:80%;float:left;" class="btn '+green+' btn-block"> '+sup_info_manu+' </label><input type="hidden" value="'+manu_value+'" name="manufacturer['+i+']" > </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"> &nbsp;<input value="Current Line"  class="c-active"type="checkbox" name="current['+i+']" '+ current+'>&nbsp;<b class="'+cls+'"> '+current_line+'</b>   &nbsp;&nbsp;<input value="Obsolete" type="checkbox" class="c-active" name="obsolate['+i+']" '+ obsolete+' >&nbsp; <b class="'+cls2+'">'+line_obsolete+'</b> </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"><input class="form-control" type="text" name="condition_information['+i+']" value="'+condition_information+'"> </div><div class="col-sm-3 text-center" style="padding-bottom:0px;padding-top:10px;"><input value="'+pricing_discount_information+'" type="text" class="form-control" name="pricing_discount['+i+']"> </div><div class="col-sm-1 text-center" style="padding-bottom:0px;padding-top:10px;"><label class="btn btn-danger delete_menufecture"> X </label></div></div></div>';

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

        //Add New Suplier
        var add_supplier = $('#add_supplier');
        var supplier_wrap = $('.supplier_wrap');

        var k = 1;
        var m = 2;

        $(add_supplier).click(function(e){ //on add input button click
            e.preventDefault();

            var html = '<div class="col-md-12"><div class="row"><div class="col-sm-2"> <label>Name</label><input type="radio" name="as_manager"  style="height: calc(0.5em + 0.75rem + 0px);width: 12%;float: left;margin-top: 38px;margin-left: 5px;"> <input type="text" name="contact_name['+k+']" class="form-control" style="width: 80%;float: right;" value="" placeholder="Name"/> </div><div class="col-sm-2"> <label>Surname</label> <input type="text" name="contact_surname['+k+']" class="form-control" value="" placeholder="Surname"/> </div><div class="col-sm-2"> <label>Phone Number</label> <input type="number" name="contact_phone['+k+']" class="form-control" value="" placeholder="Phone Number"> </div><div class="col-sm-2"> <label>Email Address</label> <input type="text" name="contact_email['+k+']" class="form-control" value="" placeholder="Email Address"/> </div><div class="col-sm-2"> <label>Main Language</label> <select name="main_language['+k+']" id="main_language" class="form-control"> <option value="">Please Choose</option> <option value="English">English</option> <option value="Armenian">Armenian</option> <option value="Danish">Danish</option> <option value="Dutch">Dutch</option> <option value="French">French</option> <option value="German">German</option> <option value="Greek">Greek</option> <option value="Hindi">Hindi</option> <option value="Italian">Italian</option> <option value="Japanese">Japanese</option> <option value="Urdu">Urdu</option> </select> </div><div class="col-sm-2"> <label>English</label> <select name="english['+k+']" id="english" class="form-control" style="width:80%;float:left;"> <option value="">Please Choose</option> <option value="Yes Native">Yes Native</option> <option value="Yes Fluent written & verbal">Yes Fluent written & verbal</option> <option value="Yes Fluent verbal">Yes Fluent verbal</option> <option value="Yes Broken written & verbal">Yes Broken written & verbal</option> <option value="Yes Broken verbal">Yes Broken verbal</option> <option value="No">No</option> </select><a class="delete_suplier" style="float:left;width20%;padding:10px;"><i class="fa fa-times"></i></a> </div></div></div>';

            $(supplier_wrap).append(html);
            k++;
            m++;
        });

        $(supplier_wrap).on("click",".delete_suplier", function(e){ //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            k--;
            m--;
        });


        //Add new Address
        //var max_fields = 10; //maximum input boxes allowed
        var service_wrap = $(".service_wrap"); //Fields wrapper
        var add_button   = $(".add_new_address"); //Add button ID

        var j = '<?= $j; ?>';
        var countries = <?php echo json_encode($countries) ?>;

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            //if(x < max_fields){ //max input box allowed
                var data = '<div class="col-md-12"><div class="row"><div class="col-sm-3"><label>Location</label><input type="text" name="location['+j+']" class="form-control" value="" placeholder="Location Number/ Name" /></div><div class="col-sm-3"><label>Street Address</label><input type="text" name="street_address['+j+']" class="form-control" value="" placeholder="Street Address" /></div><div class="col-sm-3"><label>Town / City</label><input type="text" name="city['+j+']" class="form-control" value="" placeholder="Town / city"></div><div class="col-sm-3"><label>State</label><input type="text" name="state['+j+']" class="form-control" value="" placeholder="State" /></div><div class="col-sm-3"><label>Postal / Zip Code</label><input type="text" name="zip['+j+']" class="form-control" value="" placeholder="Postal / Zip code" /></div><div class="col-sm-3"><label>Country</label><select class="form-control" name="country['+j+']"><option value="">Select Country</option>';

                    $.each(countries, function (key, value) {
                        data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                data += '</select></div><div class="col-sm-3 text-right"><button style="margin-top: 30px;" class="btn btn-danger waves-effect btn-md btn-block waves-light delete_address">&nbsp; &nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp; </button></div></div></div>'; //add input box

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