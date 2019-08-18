<style>
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
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
                            <li class="breadcrumb-item ">
                                <a href="<?= base_url(); ?>admin/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item ">
                                <a href="<?= base_url(); ?>admin/companies">Companies</a>
                            </li>
                            <li class="breadcrumb-item"><b>Add New Company</b></li>
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

                            <!-- <input type="radio" name="comp_type" class="company_type" value="1" checked="checked"> &nbsp; 
                            Sales Company &nbsp;&nbsp;
                            <input type="radio" name="comp_type" class="company_type" value="2"> &nbsp; 
                            Supplier Company -->

                            <br />
                            <br />

                            <!-- sales company form -->
                            <div id="sales_company_form">

                                <form action="<?= base_url('admin/companies/create'); ?>" method="post"> 

                                    <div class="row">

                                        <input type="hidden" name="company_type" value="1">
            
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                       
                                        <div class="col-sm-4">                                    
                                            <label for="example-text-input" class="col-form-label">Company Name</label>
                                            <input class="form-control" type="text" name="company_name" placeholder="Company Name" required="required">
                                        </div>                                
                                        
                                        <div class="col-sm-4">
                                            <label class="col-form-label">Industry</label>
                                            <select class="form-control" name="industry" required="required">
                                                <option value="">Select Industry</option>
                                                <?php
                                                foreach ($sales_industries as $key => $industry) {
                                                    ?>
                                                    <option value="<?= $industry['id']; ?>"><?= $industry['industry']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>                                
                                    
                                        <div class="col-sm-4">
                                            <label for="example-url-input" class="col-form-label">Website</label>
                                            <input class="form-control" type="url" name="website" placeholder="https://obso.com">
                                        </div>                                
                                        
                                        <div class="col-sm-4">
                                            <label for="example-tel-input" class="col-form-label">Dial Number</label>
                                            <input class="form-control" type="number" name="dial_number" placeholder="9876543210">
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="example-password-input" class="col-form-label">Competitor</label>
                                            <input class="form-control" type="text" name="competitor" placeholder="Competitor">
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="col-form-label">Free to trade</label>
                                            <select class="form-control" name="free_to_trade">
                                                <option>Select Trade</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Record Source</label>
                                                    <select class="form-control" name="record_source" required="required">
                                                        <option value="">Select Record Source</option>
                                                        <option value="E-mail">E-mail</option>
                                                        <option value="Self Generated / Outbound Call">Self Generated / Outbound Call</option>
                                                        <option value="Google Search">Google Search</option>
                                                        <option value="Bing Search">Bing Search</option>
                                                        <option value="Other Search Engine">Other Search Engine</option>
                                                        <option value="Google Ads">Google Ads</option>
                                                        <option value="Bing Ads">Bing Ads</option>
                                                        <option value="Incoming Call">Incoming Call</option>
                                                        <option value="Chat Facility">Chat Facility</option>
                                                        <option value="Lead Forensics">Lead Forensics</option>
                                                        <option value="Linkedin">E-Linkedin</option>
                                                        <option value="Facebook Lead">Facebook Lead</option>
                                                        <option value="Twitter Lead">Twitter Lead</option>
                                                        <option value="Instagram Lead">Instagram Lead</option>
                                                        <option value="Obso ecommerce Refer">Obso ecommerce Refer</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Country</label>
                                                    <select class="form-control" name="country">
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
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <label for="example-number-input" class="col-form-label">Information</label>
                                            <textarea class="form-control" name="information" cols="30" rows="4"></textarea>
                                        </div>

                                        <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                            <input type="submit" name="add_company" value="Add Company" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
                                        </div>
                                    </div>
                                </form>
                            </div> 

                            <!-- supplier company form -->
                            <div id="supplier_company_form" style="display: none;">

                                <form action="<?= base_url('admin/companies/create'); ?>" method="post"> 

                                    <div class="row">

                                        <input type="hidden" name="company_type" value="2">
            
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                        <div class="col-sm-8">             
                                            <div class="row">                                   
                                                <div class="col-sm-6">             
                                                    <label for="example-text-input" class="col-form-label">Company Name</label>
                                                    <input class="form-control" type="text" name="company_name" placeholder="Company Name" required="required">
                                                </div>                                
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Industry</label>
                                                    <select class="form-control" name="industry" required="required">
                                                        <option value="">Select Industry</option>
                                                        <?php
                                                        foreach ($supplier_industries as $key => $industry) {
                                                            ?>
                                                            <option value="<?= $industry['id']; ?>"><?= $industry['industry']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>                                
                                            
                                                <div class="col-sm-6">
                                                    <label for="example-url-input" class="col-form-label">Website</label>
                                                    <input class="form-control" type="url" name="website" placeholder="https://obso.com">
                                                </div>                                
                                                
                                                <div class="col-sm-6">
                                                    <label for="example-tel-input" class="col-form-label">Dial Number</label>
                                                    <input class="form-control" type="number" name="dial_number" placeholder="9876543210">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Record Source</label>
                                                    <select class="form-control" name="record_source" required="required">
                                                        <option value="">Select Record Source</option>
                                                        <option value="E-mail">E-mail</option>
                                                        <option value="Self Generated / Outbound Call">Self Generated / Outbound Call</option>
                                                        <option value="Google Search">Google Search</option>
                                                        <option value="Bing Search">Bing Search</option>
                                                        <option value="Other Search Engine">Other Search Engine</option>
                                                        <option value="Google Ads">Google Ads</option>
                                                        <option value="Bing Ads">Bing Ads</option>
                                                        <option value="Incoming Call">Incoming Call</option>
                                                        <option value="Chat Facility">Chat Facility</option>
                                                        <option value="Lead Forensics">Lead Forensics</option>
                                                        <option value="Linkedin">E-Linkedin</option>
                                                        <option value="Facebook Lead">Facebook Lead</option>
                                                        <option value="Twitter Lead">Twitter Lead</option>
                                                        <option value="Instagram Lead">Instagram Lead</option>
                                                        <option value="Obso ecommerce Refer">Obso ecommerce Refer</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Country</label>
                                                    <select class="form-control" name="country">
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
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="example-number-input" class="col-form-label">Information</label>
                                            <textarea class="form-control" name="information" cols="30" rows="8"></textarea>
                                        </div>

                                        <div class="col-sm-12 text-center">
                                            <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                                <input type="submit" name="add_company" value="Add Company" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
                                            </div>
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

        $(document).on('change', '.company_type', function(){

            if($(this).val() == 1){

                $('#supplier_company_form').hide();
                $('#sales_company_form').show();
            }else{

                $('#supplier_company_form').show();
                $('#sales_company_form').hide();
            }
            
        });
    });
</script>