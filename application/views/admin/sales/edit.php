<style>
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .col-sm-4{
        padding-bottom: 5px;
    }
    .col-sm-3{
        padding-bottom: 5px;
    }
    .col-sm-6{
        padding-bottom: 5px;
    }
    .col-sm-12{
        padding-bottom: 5px;
    }
    .marbtmm {
        margin-bottom: 0px;
    }
    .btn-group-toggle .active{
        background: rgb(255, 105, 97) !important;
        border: 1px rgb(255, 105, 97) !important;
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Sales</a></li>
                            <li class="breadcrumb-item active">Edit Sales</li>
                        </ol>
                    </div>
                    <div class="col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <!-- <button class="btn btn-primary waves-effect waves-light" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                                Add New Company
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="mt-0 header-title">Edit Sales</h3><br/>
                            <!-- sales company form -->
                            <div id="sales_company_form">

                                <form action="<?= base_url('admin/sales/create'); ?>" method="post"> 

                                    <div class="row">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                        <div class="col-sm-6">
                                            <select class="form-control" name="company" required="required">
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
                                            <input class="form-control" type="text" name="trader" value="admin" readonly placeholder="Trader Name">
                                        </div> 
                                    </div>
                                    <h4 class="mt-0 header-title">Genaral Information</h4>
                                    <hr><br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" name="first_name" value="<?= $sales_contact->fname; ?>" placeholder="Sales First Name" required="required">
                                                </div>    

                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" name="last_name" value="<?= $sales_contact->lname; ?>" placeholder="Sales Last Name" required="required">
                                                </div>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="gender">
                                                        <option value="" >Gender</option>
                                                        <option value="Male" <?= ($sales_contact->gender == 'Male') ?'selected' : ''; ?>>Male</option>
                                                        <option value="Female" <?= ($sales_contact->gender == 'Female') ?'selected' : ''; ?>>Female</option>
                                                        <option value="Other" <?= ($sales_contact->gender == 'Other')?'selected':''; ?>>Other</option>
                                                    </select>
                                                </div> 
                                            </div> 
                                        </div>  
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="personal_info" cols="30" placeholder="Personal Information" rows="3"><?= $sales_contact->personal_info; ?></textarea>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                    
                                    <hr />
                                    <h4 class="mt-0 header-title">Official Information</h4>
                                    <hr><br>
                                    <div class="row">
                                    
                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?= $sales_contact->branch; ?>" type="text" name="branch" placeholder="Branch">
                                        </div>               
                                    
                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?= $sales_contact->department; ?>" type="text" name="department" placeholder="Department">
                                        </div>              
                                    
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="job_title" value="<?= $sales_contact->job_title; ?>" placeholder="Job Title">
                                        </div>              
                                    
                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?= $sales_contact->email; ?>" type="text" name="email" placeholder="Email Address">
                                        </div>                                

                                        <div class="col-sm-4">
                                            <input class="form-control" value="<?= $sales_contact->mobile; ?>" type="number" name="phone" placeholder="Mobile Number">
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="direct_dial" value="<?= $sales_contact->direct_dial; ?>" placeholder="Direct Dial">
                                        </div>    
                                    </div>
                                    <h4 class="mt-0 header-title">Business Information</h4>
                                    <hr>
                                    <br>
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <select name="payment_terms" class="form-control">
                                                <option value="">Select Payment Tearms</option>
                                                <option value="Advance" <?= ($sales_contact->payment_terms == 'Advance') ?'selected' : ''; ?>>Advance</option>
                                                <option value="5050 Advance" <?= ($sales_contact->payment_terms == '5050 Advance') ?'selected' : ''; ?>>50/50 Advance</option>
                                                <option value="7525 Advance" <?= ($sales_contact->payment_terms == '7525 Advance') ?'selected' : ''; ?>>75/25 Advance</option>
                                                <option value="Pay To Ship" <?= ($sales_contact->payment_terms == 'Pay To Ship') ?'selected' : ''; ?>>Pay to ship</option>
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
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="invoice_ref_no" placeholder="Invoice Reference Number">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="pls_info" placeholder="PLS Information">
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card marbtmm"  style="background: #222831 !important;">
                                                <div class="card-body">
                                                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label>
                                                            Estimated Requirement : 
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'lessthenoneyear')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="lessthenoneyear" <?= ($sales_contact->estimate_required == 'lessthenoneyear') ?'checked' : ''; ?>> Less then 1 year
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'daily')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="daily" <?= ($sales_contact->estimate_required == 'daily') ?'checked' : ''; ?>> Daily
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'weekly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="weekly" <?= ($sales_contact->estimate_required == 'weekly') ?'checked' : ''; ?>> Weekly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'monthly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="monthly" <?= ($sales_contact->estimate_required == 'monthly') ?'checked' : ''; ?>> Monthly
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_required == 'yearly')? 'active' : ''; ?>">
                                                            <input type="radio" name="estimated_frequency" value="yearly" <?= ($sales_contact->estimate_required == 'yearly') ?'checked' : ''; ?>> Yearly
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card marbtmm"  style="background: #222831 !important;">
                                                <div class="card-body">
                                                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label>
                                                            Estimated Spend : 
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == 'lessthen50k') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="lessthen50k" <?= ($sales_contact->estimate_spend == 'lessthen50k') ?'checked' : ''; ?>> Less then 50k
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == 'daily') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="daily" <?= ($sales_contact->estimate_spend == 'daily') ?'checked' : ''; ?>> 50k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '100kplus') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="100kplus" <?= ($sales_contact->estimate_spend == '100kplus') ?'checked' : ''; ?>> 100k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '500kplus') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="500kplus" <?= ($sales_contact->estimate_spend == '500kplus') ?'checked' : ''; ?>> 500k+
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <label class="btn btn-primary btn-sm <?= ($sales_contact->estimate_spend == '1mplus') ?'active' : ''; ?>">
                                                            <input type="radio" name="estimated_spend" value="1mplus" <?= ($sales_contact->estimate_spend == '1mplus') ?'checked' : ''; ?>> 1m+
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="card marbtmm"  style="background: #222831 !important;">
                                                <div class="card-body">
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: inline-block;">
                                                        <label>
                                                            Manufectures : 
                                                        </label> &nbsp;&nbsp;&nbsp;
                                                        <?php
                                                        foreach ($menufecturer as $key => $mnfr) {
                                                            ?>
                                                                <label class="btn btn-primary btn-sm" style="">
                                                                    <input type="checkbox" name="menufecturer[]" value="<?= $mnfr['manufacturer']; ?>"  <?php
                                                                    $temp = json_decode($sales_contact->menufecturers);
                                        if(in_array($mnfr["id"], $temp))
                                        {
                                            echo 'checked'; 
                                        }else{
                                            echo "";
                                        }?>><?= $mnfr['manufacturer']; ?> 

                                                                </label>&nbsp;&nbsp;&nbsp;
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mt-0 header-title">Address</h4>
                                    <hr>
                                    <br />
                                    <div class="row service_wrap">
                                        <div class="col-sm-3">
                                            <input type="text" name="location[0]" class="form-control" value="" placeholder="Location Number/ Name" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="street_address[0]" class="form-control" value="" placeholder="Street Address" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="city[0]" class="form-control" value="" placeholder="Town / city">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="state[0]" class="form-control" value="" placeholder="State" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="zip[0]" class="form-control" value="" placeholder="Postal / Zip code" />
                                        </div>
                                        <div class="col-sm-3">
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
                                            <select name="address_type[0]" id="address_type" class="form-control">
                                                <option value="">Address Type</option>
                                                <option value="invoice_address">Invoice Address</option>
                                                <option value="delivery_address">Delivery Address</option>
                                                <option value="head_office_address">Head Office Location</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3" id="add_address">
                                            <button type="button" class="btn btn-secondary btn-sm form-control add_new_address waves-effect btn-block waves-light" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Add New Address</button>
                                        </div>                                      
                                    </div>
                                    <br />
                                    <h4 class="mt-0 header-title">Communication</h4>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <select class="form-control" name="communication">
                                                <option value="Email">Email</option>
                                                <option value="SMS">SMS</option>
                                                <option value="Both">Both</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="submit" name="add_company" value="Add Company" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
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

        //Show Add Button on change
        /*$('#address_type').on('change', function(){
            var data = $(this).val();
            if(data == 'invoice_address' || data == 'delivery_address')
            {
                $('#add_address').show();
            }else{                
                $('#add_address').hide();
            }
        });*/

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
                var data = '<div class="col-md-12"><div class="row"><div class="col-sm-3"><input type="text" name="location['+j+']" class="form-control" value="" placeholder="Location Number/ Name" /></div><div class="col-sm-3"><input type="text" name="street_address['+j+']" class="form-control" value="" placeholder="Street Address" /></div><div class="col-sm-3"><input type="text" name="city['+j+']" class="form-control" value="" placeholder="Town / city"></div><div class="col-sm-3"><input type="text" name="state['+j+']" class="form-control" value="" placeholder="State" /></div><div class="col-sm-3"><input type="text" name="zip['+j+']" class="form-control" value="" placeholder="Postal / Zip code" /></div><div class="col-sm-3"><select class="form-control" name="country['+j+']"><option value="">Select Country</option>';

                    $.each(countries, function (key, value) {
                        data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                data += '</select></div><div class="col-sm-3"><select name="address_type['+j+']" id="address_type" class="form-control"><option value="">Address Type</option><option value="invoice_address">Invoice Address</option><option value="delivery_address">Delivery Address</option></select></div><div class="col-sm-3 text-right"><button class="btn-danger waves-effect btn-sm delete_address waves-light">&nbsp; &nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp; </button></div></div></div>'; //add input box

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
        })
    });
</script>