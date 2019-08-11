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
                                                foreach ($sales_companies as $key => $sales_company) {
                                                    ?>
                                                    <option value="<?= $sales_company['id']; ?>"><?= $sales_company['company_name']; ?></option>
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
                                    <h4 class="mt-0 header-title">Basic Personal Information</h4>
                                    <hr><br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>*First Name</label>
                                                    <input class="form-control" type="text" name="first_name" placeholder="First Name" required="required">
                                                </div>    

                                                <div class="col-sm-6">
                                                    <label>*Last Name</label>
                                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name" required="required">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label>Contact Location</label>
                                                    <input type="text" name="contact_location" class="form-control" placeholder="Enter Contact Location">
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
                                                            <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>*Industry</label>
                                                    <select class="form-control cmp_industry" name="industry"></select>
                                                </div> 

                                                <!-- <div class="col-sm-6">
                                                    <label>Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option value="">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>  -->
                                            </div> 
                                        </div>  
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>Personal Information</label>
                                                    <textarea class="form-control" name="personal_info" cols="30" placeholder="Personal Information" rows="13"></textarea>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                    <h4 class="mt-0 header-title">Contact Information</h4>
                                    <hr><br>
                                    <div class="row">
                                    
                                        <!-- <div class="col-sm-4">
                                                          <label>Branch Name</label>
                                                          <input class="form-control" type="text" name="branch" placeholder="Branch">
                                                      </div>  -->              
                                    
                                        <div class="col-sm-4">
                                            <label>Department</label>
                                            <select class="form-control" name="department">
                                                <option value="">Department</option>
                                                <option value="Purchasing">Purchasing</option>
                                                <option value="Workshop / Factory /Production / Engineering">Workshop / Factory /Production / Engineering</option>
                                                <option value="Stores">Stores</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Sales / Customer Service">Sales / Customer Service</option>
                                                <option value="Reception">Reception</option>
                                                <option value="Unknown">Unknown</option>
                                            </select>
                                        </div>              
                                    
                                        <div class="col-sm-8">
                                            <label>Job Title</label>
                                            <input class="form-control" type="text" name="job_title" placeholder="Job Title">
                                        </div>

                                         <div class="col-sm-3">
                                            <label>Mobile</label>
                                            <input class="form-control" type="number" name="phone" placeholder="Mobile Number">
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <label>Direct Dial</label>
                                            <input class="form-control" type="number" name="direct_dial" placeholder="Direct Dial">
                                        </div>               
                                    
                                        <div class="col-sm-6">
                                            <label>Email Address</label>
                                            <input class="form-control" type="text" name="email" placeholder="example@company.com">
                                        </div>              
                                    
                                        <div class="col-sm-3">
                                            <label>LinkedIn</label>
                                            <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn">
                                        </div>             
                                    
                                        <div class="col-sm-3">
                                            <label>Whatsapp</label>
                                            <input class="form-control" type="text" name="whatsapp" placeholder="Whatsapp">
                                        </div> 
                                        <div class="col-sm-6">
                                            <label>Alternate Email Address</label>
                                            <input class="form-control" type="text" name="alternate_email" placeholder="example@company.com">
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
                                                   <div class="btn-group  btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_frequency" value="Less then 1 year"> Less then 1 year
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_frequency" value="Daily"> Daily
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_frequency" value="Weekly"> Weekly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_frequency" value="Monthly"> Monthly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_frequency" value="Yearly"> Yearly
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
                                                   <div class="btn-group  btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_spend" value="Less then 50k"> Less then 50k
                                                        </label>&nbsp;&nbsp;&nbsp; 
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_spend" value="50k+"> 50k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_spend" value="100k+"> 100k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_spend" value="500k+"> 500k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm">
                                                            <input type="radio" name="estimated_spend" value="1m+"> 1m+
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
                                                        foreach ($menufecturer as $key => $mnfr) {
                                                            ?>
                                                                <label class="btn btn-primary btn-sm" style="margin-bottom: 15px;">
                                                                    <input type="checkbox" name="menufecturer[<?= $mnfr['id']; ?>]" value="<?= $mnfr['id']; ?>"> <?= $mnfr['manufacturer']; ?> 
                                                                </label>&nbsp;&nbsp;&nbsp;
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <div class="col-sm-12">
                                                <label>Payment Tearms</label>
                                                <select name="payment_terms" class="form-control">
                                                    <option value="">Select Payment Tearms</option>
                                                    <option value="Advance">Advance</option>
                                                    <option value="50/50 Advance">50/50 Advance</option>
                                                    <option value="75/25 Advance">75/25 Advance</option>
                                                    <option value="Pay To Ship">Pay To Ship</option>
                                                    <option value="Pay On Delivery">Pay On Delivery</option>
                                                    <option value="7 Days DOI">7 Days DOI</option>
                                                    <option value="14 Days DOI">14 Days DOI</option>
                                                    <option value="30 Days DOI">30 Days DOI</option>
                                                    <option value="60 Days DOI">60 Days DOI</option>
                                                    <option value="90 Days DOI">90 Days DOI</option>
                                                    <option value="EOM">EOM</option>
                                                    <option value="30 EOM">30 EOM</option>
                                                    <option value="60 EOM">60 EOM</option>
                                                    <option value="90 EOM">90 EOM</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Invoice Reference Number</label>
                                                <input class="form-control" type="text" name="invoice_ref_no" placeholder="Invoice Reference Number">
                                            </div>
                                        </div> -->
                                        <div class="col-sm-5">
                                            <label>PSL & Portal Login Information</label>
                                            <textarea class="form-control" name="pls_info" placeholder="PSL & Portal Login Information" rows="5"></textarea>
                                        </div>
                                        <div class="col-sm-7">
                                            <label>Competitor & Pricing/Discount Information</label>
                                            <textarea class="form-control" name="competitor" placeholder="Competitor & Pricing/Discount Information" rows="5"></textarea>
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

<script>
    $(document).ready(function(){

        //Add new Address
        //var max_fields      = 10; //maximum input boxes allowed
        var service_wrap         = $(".service_wrap"); //Fields wrapper
        var add_button      = $(".add_new_address"); //Add button ID

        var n = 2;    //Service number
        var c = 1; //initlal text box count
        var j = 1;
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