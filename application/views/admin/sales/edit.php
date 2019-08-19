<style>
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .col-sm-4{
        padding-bottom: 20px;
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
    .label label{
        font-size: 16px;
        padding: 0px 20px;
    }
    .ctm-label label{
        margin-bottom: 15px !important;
        width: 120px;
    }
    .ctm-label-m label{
        margin-bottom: 15px !important;
        width: 120px;
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
                            <li class="breadcrumb-item active"> <a href="<?= base_url();?>/admin/sales">All Sales Contacts</a></li>
                            <li class="breadcrumb-item "><a html="javascript:;">Edit Sales</a></li>
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

                                <form action="<?= base_url('admin/sales/edit_sales'); ?>" method="post"> 

                                    <div class="row">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                        <input type="hidden" name="id" value="<?= $sales_contact->id; ?>">
                                        <input class="form-control" type="hidden" name="trader" value="<?= $sales_contact->trader; ?>" readonly placeholder="Trader Name">

                                        <div class="col-sm-6">
                                            <select class="form-control companies" style="height: 50px;" name="company" required="required">
                                                <option value="">Company</option>
                                                <?php
                                                foreach ($sales_companies as $key => $sales_company) {
                                                    ?>
                                                    <option value="<?= $sales_company['id']; ?>" <?= ($sales_contact->company == $sales_company['id']) ? 'selected':''; ?>><?= $sales_company['company_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="col-sm-6">

                                            <select class="form-control" style="height: 50px;" name="contact_database_status" required>
                                                <option value="">Contacts Database Status</option>
                                                <option value="1" <?= ($sales_contact->status == 1)? 'selected': ''; ?> >Lead</option>
                                                <option value="2" <?= ($sales_contact->status == 2)? 'selected': ''; ?> >Suspects</option>
                                                <option value="3" <?= ($sales_contact->status == 3)? 'selected': ''; ?> >Prospects</option>
                                                <option value="4" <?= ($sales_contact->status == 4)? 'selected': ''; ?> >Account Contacts</option>     
                                            </select>

                                            <!-- <input class="form-control" type="hidden" name="trader" value="admin" readonly placeholder="Trader Name"> -->
                                        </div> 
                                    </div>
                                    <br>
                                    <h4 class="mt-0 header-title">Basic Personal Information</h4>
                                    <hr><br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>*First Name</label>
                                                    <input class="form-control" type="text" name="first_name" value="<?= $sales_contact->fname; ?>" placeholder="First Name" required="required">
                                                </div>    

                                                <div class="col-sm-6">
                                                    <label>*Last Name</label>
                                                    <input class="form-control" type="text" name="last_name" value="<?= $sales_contact->lname; ?>" placeholder="Last Name" required="required">
                                                </div>
                                                <div class="col-sm-6">
                                                     <label>Gender</label>
                                                     <select class="form-control" name="gender">
                                                         <option value="">Gender</option>
                                                         <option value="Male" <?= ($sales_contact->gender == 'Male') ?'selected' : ''; ?>>Male</option>
                                                         <option value="Female" <?= ($sales_contact->gender == 'Female') ?'selected' : ''; ?>>Female</option>
                                                         <option value="Other" <?= ($sales_contact->gender == 'Other')?'selected':''; ?>>Other</option>
                                                     </select>
                                                 </div>
                                                <div class="col-sm-6">
                                                    <label>Contact Location</label>
                                                    <input type="text" name="contact_location" class="form-control" value="<?= $sales_contact->contact_location; ?>" placeholder="Enter Contact Location">
                                                </div> 
                                                <div class="col-sm-12">
                                                    <label>Trader</label>
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
                                                            <option value="<?= $country['id']; ?>" <?= ($country['id'] == $sales_contact->contact_country)?'selected':'';?>><?= $country['name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <label>*Industry</label>
                                                    <select class="form-control cmp_industry" name="industry">
                                                        <option value="">Select Industry</option>
                                                        <?php
                                                        foreach ($sales_companies as $key => $sales_company) {
                                                            if($sales_company['industry_id'] == $sales_contact->industry )
                                                            {
                                                                ?>
                                                                <option value="<?= $sales_company['industry_id']; ?>" <?= ($sales_contact->industry == $sales_company['industry_id']) ? 'selected':''; ?>><?= $sales_company['industry_name']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>Personal Information</label>
                                                    <textarea class="form-control" name="personal_info" cols="30" placeholder="Personal Information" rows="13"><?= $sales_contact->personal_info; ?></textarea>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                    <h4 class="mt-0 header-title">Contact Information</h4>
                                    <hr><br>
                                    <div class="row">
                                    
                                        <!-- <div class="col-sm-4">
                                                          <label>Branch Name</label>
                                                          <input class="form-control" value="<?= $sales_contact->branch; ?>" type="text" name="branch" placeholder="Branch">
                                                      </div>  -->              
                                    
                                        <div class="col-sm-4">
                                            <label>Department</label>

                                            <select class="form-control" name="department">
                                                <option value="">Department</option>

                                                <option <?= ($sales_contact->department == 'Purchasing') ? 'selected' : ''; ?> value="Purchasing">Purchasing</option>

                                                <option <?= ($sales_contact->department == 'Workshop / Factory /Production / Engineering') ? 'selected' : ''; ?> value="Workshop / Factory /Production / Engineering">Workshop / Factory /Production / Engineering</option>

                                                <option <?= ($sales_contact->department == 'Stores') ? 'selected' : ''; ?> value="Stores">Stores</option>

                                                <option <?= ($sales_contact->department == 'Finance') ? 'selected' : ''; ?> value="Finance">Finance</option>

                                                <option <?= ($sales_contact->department == 'Sales / Customer Service') ? 'selected' : ''; ?> value="Sales / Customer Service">Sales / Customer Service</option>

                                                <option <?= ($sales_contact->department == 'Reception') ? 'selected' : ''; ?> value="Reception">Reception</option>

                                                <option <?= ($sales_contact->department == 'Unknown') ? 'selected' : ''; ?> value="Unknown">Unknown</option>

                                            </select>

                                        </div>              
                                    
                                        <div class="col-sm-8">
                                            <label>Job Title</label>
                                            <input class="form-control" value="<?= $sales_contact->job_title; ?>" type="text" name="job_title" placeholder="Job Title">
                                        </div>              
                                    
                                        <div class="col-sm-3">
                                            <label>Mobile Number</label>
                                            <input class="form-control" value="<?= $sales_contact->mobile; ?>" type="number" name="phone" placeholder="Mobile Number">
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <label>Direct Dial</label>
                                            <input class="form-control" value="<?= $sales_contact->direct_dial; ?>" type="number" name="direct_dial" placeholder="Direct Dial">
                                        </div> 

                                        <div class="col-sm-6">
                                            <label>Email Address</label>
                                            <input class="form-control" value="<?= $sales_contact->email; ?>" type="text" name="email" placeholder="example@company.com">
                                        </div> 

                                        <div class="col-sm-3">
                                            <label>LinkedIn</label>
                                            <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn" value="<?= $sales_contact->linkedin; ?>">
                                        </div>             
                                    
                                        <div class="col-sm-3">
                                            <label>Whatsapp</label>
                                            <input class="form-control" type="text" name="whatsapp" placeholder="Whatsapp" value="<?= $sales_contact->whatsapp; ?>">
                                        </div> 

                                        <div class="col-sm-6">
                                            <label>Alternate Email Address</label>
                                            <input class="form-control" type="text" name="alternate_email" placeholder="example@company.com" value="<?= $sales_contact->alternate_email; ?>">
                                        </div>                           

                                           
                                    </div>
                                    <br>
                                    <h4 class="mt-0 header-title">Key Sales Information</h4>
                                    <hr>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Estimated Requirement : 
                                                </label>
                                                <div class="card-body">
                                                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'Less then 1 year')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="Less then 1 year" <?= ($sales_contact->estimate_required == 'Less then 1 year') ?'checked' : ''; ?>> Less then 1 year
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'Daily')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="Daily" <?= ($sales_contact->estimate_required == 'Daily') ?'checked' : ''; ?>> Daily
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'Weekly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="Weekly" <?= ($sales_contact->estimate_required == 'Weekly') ?'checked' : ''; ?>> Weekly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'Monthly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="Monthly" <?= ($sales_contact->estimate_required == 'Monthly') ?'checked' : ''; ?>> Monthly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'Yearly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="Yearly" <?= ($sales_contact->estimate_required == 'Yearly') ?'checked' : ''; ?>> Yearly
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Estimated Spend : 
                                                </label>
                                                <div class="card-body">
                                                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == 'Less then 50k') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="Less then 50k" <?= ($sales_contact->estimate_spend == 'Less then 50k') ?'checked' : ''; ?>> Less then 50k
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '50k+') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="50k+" <?= ($sales_contact->estimate_spend == '50k+') ?'checked' : ''; ?>> 50k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '100k+') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="100k+" <?= ($sales_contact->estimate_spend == '100k+') ?'checked' : ''; ?>> 100k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '500k+') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="500k+" <?= ($sales_contact->estimate_spend == '500k+') ?'checked' : ''; ?>> 500k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '1m+') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="1m+" <?= ($sales_contact->estimate_spend == '1m+') ?'checked' : ''; ?>> 1m+
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Manufectures : 
                                                </label>
                                                <div class="card-body">
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                        <?php
                                                        foreach ($menufecturer as $key => $mnfr)
                                                        {
                                                            $temp = json_decode($sales_contact->manufacturers);
                                                            $arr = (array)$temp;
                                                            ?>
                                                                <label class="btn btn-primary btn-sm <?php
                                                                    if(in_array($mnfr['id'], $arr))
                                                                    {
                                                                        echo "active";
                                                                    }
                                                                    ?>" style="margin-bottom: 15px;">
                                                                    <input type="checkbox" name="menufecturer[<?= $key ;?>]" value="<?= $mnfr['id']; ?>"
                                                                    <?php
                                                                    if(in_array($mnfr['id'], $arr))
                                                                    {
                                                                        echo "checked";
                                                                    }
                                                                    ?>> <?= $mnfr['manufacturer']; ?> 
                                                                </label>&nbsp;&nbsp;&nbsp;
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Payment Tearms</label>
                                            <select name="payment_terms" class="form-control">
                                                <option value="">Select Payment Tearms</option>
                                                <option value="Advance" <?= ($sales_contact->payment_terms == 'Advance') ?'selected' : ''; ?>>Advance</option>
                                                <option value="50/50 Advance" <?= ($sales_contact->payment_terms == '50/50 Advance') ?'selected' : ''; ?>>50/50 Advance</option>
                                                <option value="75/25 Advance" <?= ($sales_contact->payment_terms == '75/25 Advance') ?'selected' : ''; ?>>75/25 Advance</option>
                                                <option value="Pay To Ship" <?= ($sales_contact->payment_terms == 'Pay To Ship') ?'selected' : ''; ?>>Pay To ship</option>
                                                <option value="Pay On Delivery" <?= ($sales_contact->payment_terms == 'Pay On Delivery') ?'selected' : ''; ?>>Pay on Delivery</option>
                                                <option value="7 Days DOI" <?= ($sales_contact->payment_terms == '7 Days DOI') ?'selected' : ''; ?>>7 Days DOI</option>
                                                <option value="14 Days DOI" <?= ($sales_contact->payment_terms == '14 Days DOI') ?'selected' : ''; ?>>14 Days DOI</option>
                                                <option value="30 Days DOI" <?= ($sales_contact->payment_terms == '30 Days DOI') ?'selected' : ''; ?>>30 Days DOI</option>
                                                <option value="60 Days DOI" <?= ($sales_contact->payment_terms == '60 Days DOI') ?'selected' : ''; ?>>60 Days DOI</option>
                                                <option value="90 Days DOI" <?= ($sales_contact->payment_terms == '90 Days DOI') ?'selected' : ''; ?>>90 Days DOI</option>
                                                <option value="EOM" <?= ($sales_contact->payment_terms == 'EOM') ?'selected' : ''; ?>>EOM</option>
                                                <option value="30 EOM" <?= ($sales_contact->payment_terms == '30 EOM') ?'selected' : ''; ?>>30 EOM</option>
                                                <option value="60 EOM" <?= ($sales_contact->payment_terms == '60 EOM') ?'selected' : ''; ?>>60 EOM</option>
                                                <option value="90 EOM" <?= ($sales_contact->payment_terms == '90 EOM') ?'selected' : ''; ?>>90 EOM</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-7">
                                            <label>Invoice Reference Number</label>
                                            <input class="form-control" type="text" name="invoice_ref_no" value="<?= $sales_contact->invoice_reference_number; ?>" placeholder="Invoice Reference Number"><br />
                                        </div>
                                        <div class="col-sm-5">
                                            <label>PSL & Portal Login Information</label>
                                            <textarea class="form-control" name="pls_info" placeholder="PSL & Portal Login Information" rows="5"><?= $sales_contact->pls_information; ?></textarea>
                                            
                                        </div>
                                        <div class="col-sm-7">
                                            <label>Competitor & Pricing/Discount Information</label>
                                            <textarea class="form-control" name="competitor" placeholder="Competitor & Pricing/Discount Information" rows="5"><?= $sales_contact->competitor; ?></textarea>
                                        </div>
                                    </div>
                                     <br />
                                    <h4 class="mt-0 header-title">Enquiry, Quote & Order History</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-md-3">                         
                                                    <a class="btn btn-info btn-block">Enquiry (<?= count($enquires); ?>)</a>
                                                </div>
                                                <div class="col-md-3">                         
                                                    <a class="btn btn-info btn-block">Quotated (0)</a>
                                                </div>
                                                <div class="col-md-3">                         
                                                    <a class="btn btn-info btn-block">Ordered (0)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <br />
                                    <h4 class="mt-0 header-title">Contact Notes & Attachments</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="<?= base_url(); ?>uploads/coming-soon.jpg" style="width:100%;">
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
                                            $check = 0; 
                                            foreach($contact_address as $key => $address)
                                            {
                                                if($address['address_type'] == 'head_office_address')
                                                {
                                                    ?>
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
                                                    <div class="col-sm-3">
                                                        <label>Address Type</label>
                                                        <select name="address_type[0]" id="address_type" class="form-control">
                                                            <option value="">Address Type</option>
                                                            <option value="head_office_address" selected="">Head Office Location</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3" id="add_address">
                                                        <button type="button" style="margin-top: 28px;" class="btn btn-primary waves-effect btn-md btn-block waves-light add_new_address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Add New Address</button>
                                                    </div> 
                                                    <?php 
                                                    $check++;
                                                }
                                            }
                                            if($check == 0)
                                            {
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
                                                <?php
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
                                            <?php
                                        }
                                        $j = 1;
                                        foreach($contact_address as $key => $address)
                                        {
                                            if($address['address_type'] != 'head_office_address')
                                            {
                                                ?>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label>Location</label><input type="text" name="location[<?= $j ?>]" value="<?= $address["location"] ?>" class="form-control" placeholder="Location Number/ Name" />
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Street Address</label>
                                                            <input type="text" name="street_address[<?= $j; ?>]" class="form-control" value="<?= $address["street"] ?>" placeholder="Street Address" />
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Town / City</label>
                                                            <input type="text" name="city[<?= $j; ?>]" class="form-control" value="<?= $address["town"] ?>" placeholder="Town / city">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>State</label>
                                                            <input type="text" name="state[<?= $j; ?>]" class="form-control" value="<?= $address["location"] ?>" placeholder="State" />
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Postal / Zip Code</label>
                                                            <input type="text" name="zip[<?= $j; ?>]" class="form-control" value="<?= $address["zip_code"] ?>" placeholder="Postal / Zip code" />
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Country</label>
                                                            <select class="form-control" name="country[<?= $j; ?>]">
                                                                <option value="">Select Country</option>

                                                                <?php
                                                                foreach ($countries as $key => $country) {
                                                                   
                                                                    ?>
                                                                    <option value="<?= $country['id']; ?>" <?= ($country['id'] == $address['country']) ? 'selected':'';?> > <?= $country['name']; ?></option>
                                                                    <?php
                                                                }?>

                                                            </select>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label>Address Type</label>
                                                            <select name="address_type[<?= $j; ?>]" id="address_type" class="form-control">
                                                                <option value="">Address Type</option>
                                                                <option value="invoice_address" <?= ($address['address_type'] == 'invoice_address')?'selected':'';?>>Invoice Address</option>
                                                                <option value="delivery_address" <?= ($address['address_type'] == 'delivery_address')?'selected':'';?>>Delivery Address</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <button style="margin-top: 30px;" class="btn btn-danger waves-effect btn-md btn-block waves-light delete_address">&nbsp; &nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp; </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $j++;
                                            }
                                        }
                                        ?>                                     
                                    </div>
                                    <br />
                                    <h4 class="mt-0 header-title">Marketing Prefrences</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <div class="card marbtmm" >
                                                <label>
                                                    Communication Methods 
                                                </label>
                                               <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->communication == 'email')?'active':''; ?>">
                                                        <input type="radio" name="communication" value="email" <?= ($sales_contact->communication == 'email')?'checked':''; ?>> Email
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->communication == 'active')?'checked':''; ?>">
                                                        <input type="radio" name="communication" value="sms" <?= ($sales_contact->communication == 'sms')?'checked':''; ?>> SMS
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->communication == 'both')?'active':''; ?>">
                                                        <input type="radio" name="communication" value="both" <?= ($sales_contact->communication == 'both')?'checked':''; ?>> WhatsApp
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
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->contact_status == 'active')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="active" <?= ($sales_contact->contact_status == 'active')?'checked':''; ?>> Activley Market
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->contact_status == 'do_not_contact')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="do_not_contact" <?= ($sales_contact->contact_status == 'do_not_contact')?'checked':''; ?>> Do Not Contact
                                                    </label> &nbsp;&nbsp;&nbsp;
                                                    <label class="btn btn-default btn-lg <?= ($sales_contact->contact_status == 'in_active')?'active':''; ?>">
                                                        <input type="radio" name="contact_status" value="in_active" <?= ($sales_contact->contact_status == 'in_active')?'checked':''; ?>> In-Active Contact
                                                    </label> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                            <input type="submit" name="add_company" value="Update Contact" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
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

<script>
    $(document).ready(function(){

        //Add new Address
        //var max_fields      = 10; //maximum input boxes allowed
        var service_wrap         = $(".service_wrap"); //Fields wrapper
        var add_button      = $(".add_new_address"); //Add button ID

        var n = 2;    //Service number
        var c = 1; //initlal text box count
        var j = '<?= ++$j; ?>';
        var countries = <?php echo json_encode($countries) ?>;

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            //if(x < max_fields){ //max input box allowed
                c++; //text box increment
                var data = '<div class="col-md-12"><div class="row"><div class="col-sm-3"><label>Location</label><input type="text" name="location['+j+']" class="form-control" value="" placeholder="Location Number/ Name" /></div><div class="col-sm-3"><label>Street Address</label><input type="text" name="street_address['+j+']" class="form-control" value="" placeholder="Street Address" /></div><div class="col-sm-3"><label>Town / City</label><input type="text" name="city['+j+']" class="form-control" value="" placeholder="Town / city"></div><div class="col-sm-3"><label>State</label><input type="text" name="state['+j+']" class="form-control" value="" placeholder="State" /></div><div class="col-sm-3"><label>Postal / Zip Code</label><input type="text" name="zip['+j+']" class="form-control" value="" placeholder="Postal / Zip code" /></div><div class="col-sm-3"><label>Country</label><select class="form-control" name="country['+j+']"><option value="">Select Country</option>';

                    $.each(countries, function (key, value) {
                        data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                data += '</select></div><div class="col-sm-3"><label>Address Type</label><select name="address_type['+j+']" id="address_type" class="form-control"><option value="">Address Type</option><option value="invoice_address">Invoice Address</option><option value="delivery_address">Delivery Address</option></select></div><div class="col-sm-3 text-right"><button style="margin-top: 30px;" class="btn btn-danger waves-effect btn-md btn-block waves-light delete_address">&nbsp; &nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp; </button></div></div></div>'; //add input box

                $(service_wrap).append(data); //add input box
            //}
            j++; //index increment
            n++;
        });

        $(service_wrap).on("click",".delete_address", function(e){ //user click on remove text
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
            //$(".parent_div").remove();
            c--;
            n--;
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