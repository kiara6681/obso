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
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="<?= base_url(); ?>admin/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item ">
                                <a href="<?= base_url(); ?>admin/companies">Companies</a>
                            </li>
                            <li class="breadcrumb-item"> <b>Edit Company</b></li>
                        </ol> 
                    </div>
                    <div class="col-sm-6">                    
                        <div class="float-right d-none d-md-block">
                            <button class="btn btn-primary" type="button"> Contacts : <?= count($company_contacts); ?></button>
                            <button class="btn btn-primary" type="button"> Enquiry : <?= count($enquiries); ?></button>
                            <button class="btn btn-primary" type="button"> Quote : <?= $quoted_enqiries; ?></button>
                            <button class="btn btn-primary" type="button"> Orders : <?= $orders; ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                                <?php
                                // sales company update
                                if($company->company_type == 1){
                                    ?>
                                    <!-- sales company form -->
                                    <form action="<?= base_url('admin/companies/edit_company/'.$company->id); ?>" method="post">
                                        <div class="row"> 

                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                            <input type="hidden" name="company_id" value="<?= $company->id; ?>" />
                                            <input type="hidden" name="company_type" value="<?= $company->company_type; ?>" />

                                            <div class="col-sm-4">                                    
                                                <label for="example-text-input" class="col-form-label">Company Name</label>
                                                <input class="form-control" type="text" id="company_name" name="company_name" placeholder="Company Name" required="required" value="<?= $company->company_name; ?>">
                                            </div>                                
                                            
                                            <div class="col-sm-4">
                                                <label class="col-form-label">Industry</label>
                                                <select class="form-control" name="industry" id="industry" required="required">
                                                    <option value="">Select Industry</option>
                                                    <?php
                                                    foreach ($sales_industries as $key => $industry) {
                                                        ?>
                                                        <option <?= ($company->industry == $industry['id']) ? 'selected' : ''?> value="<?= $industry['id']; ?>"><?= $industry['industry']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>                                
                                        
                                            <div class="col-sm-4">
                                                <label for="example-url-input" class="col-form-label">Website</label>
                                                <input class="form-control" type="url" id="website" name="website" placeholder="https://obso.com" value="<?= $company->website; ?>">
                                            </div>                                
                                            
                                            <div class="col-sm-4">
                                                <label for="example-tel-input" class="col-form-label">Dial Number</label>
                                                <input class="form-control" type="number" id="dial_number" name="dial_number" placeholder="9876543210" value="<?= $company->dial_number; ?>">
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="example-password-input" class="col-form-label">Competitor</label>
                                                <input class="form-control" type="text" id="competitor" name="competitor" placeholder="Competitor" value="<?= $company->competitor; ?>">
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="col-form-label">Free to trade</label>
                                                <select class="form-control" name="free_to_trade" id="free_to_trade">
                                                    <option value="">Select Trade</option>

                                                    <option <?= ($company->free_to_trade == 'Large selectl') ? 'selected' : ''?> value="Large select">Large select</option>

                                                    <option <?= ($company->free_to_trade == 'Small select') ? 'selected' : ''?> value="Small select">Small select</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Record Source</label>
                                                        <select class="form-control" name="record_source" required="required">
                                                            <option value="">Select Record Source</option>

                                                            <option <?= ($company->record_source == 'E-mail') ? 'selected' : ''?> value="E-mail">E-mail</option>

                                                            <option <?= ($company->record_source == 'Self Generated / Outbound Call') ? 'selected' : ''?> value="Self Generated / Outbound Call">Self Generated / Outbound Call</option>

                                                            <option <?= ($company->record_source == 'Google Search') ? 'selected' : ''?> value="Google Search">Google Search</option>

                                                            <option <?= ($company->record_source == 'Bing Search') ? 'selected' : ''?> value="Bing Search">Bing Search</option>

                                                            <option <?= ($company->record_source == 'Other Search Engine') ? 'selected' : ''?> value="Other Search Engine">Other Search Engine</option>

                                                            <option <?= ($company->record_source == 'Google Ads') ? 'selected' : ''?> value="Google Ads">Google Ads</option>

                                                            <option <?= ($company->record_source == 'Bing Ads') ? 'selected' : ''?> value="Bing Ads">Bing Ads</option>

                                                            <option <?= ($company->record_source == 'Incoming Call') ? 'selected' : ''?> value="Incoming Call">Incoming Call</option>

                                                            <option <?= ($company->record_source == 'Chat Facility') ? 'selected' : ''?> value="Chat Facility">Chat Facility</option>

                                                            <option <?= ($company->record_source == 'Lead Forensics') ? 'selected' : ''?> value="Lead Forensics">Lead Forensics</option>

                                                            <option <?= ($company->record_source == 'Linkedin') ? 'selected' : ''?> value="Linkedin">E-Linkedin</option>

                                                            <option <?= ($company->record_source == 'Facebook Lead') ? 'selected' : ''?> value="Facebook Lead">Facebook Lead</option>

                                                            <option <?= ($company->record_source == 'Twitter Lead') ? 'selected' : ''?> value="Twitter Lead">Twitter Lead</option>

                                                            <option <?= ($company->record_source == 'Instagram Lead') ? 'selected' : ''?> value="Instagram Lead">Instagram Lead</option>

                                                            <option <?= ($company->record_source == 'Obso ecommerce Refer') ? 'selected' : ''?> value="Obso ecommerce Refer">Obso ecommerce Refer</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Country</label>
                                                        <select class="form-control" name="country">
                                                            <option value="">Select Country</option>
                                                            <?php
                                                            foreach ($countries as $key => $country) {
                                                                ?>
                                                                <option <?= ($company->country == $country['id']) ? 'selected' : ''?> value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <label for="example-number-input" class="col-form-label">Information</label>
                                                <textarea class="form-control" name="information" id="information" rows="4"><?= $company->information; ?></textarea>
                                            </div>

                                            <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                                <input type="submit" name="edit_company" value="Edit Company" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                }

                                // supplier company update
                                if($company->company_type == 2){
                                    ?>
                                    <!-- supplier company form -->
                                    <form action="<?= base_url('admin/companies/edit_company/'.$company->id); ?>" method="post">
                                        <div class="row"> 

                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                            <input type="hidden" name="company_id" value="<?= $company->id; ?>" />
                                            <input type="hidden" name="company_type" value="<?= $company->company_type; ?>" />
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-6">                                    
                                                        <label for="example-text-input" class="col-form-label">Company Name</label>
                                                        <input class="form-control" type="text" id="company_name" name="company_name" placeholder="Company Name" required="required" value="<?= $company->company_name; ?>">
                                                    </div>                                
                                                    
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Industry</label>
                                                        <select class="form-control" name="industry" id="industry" required="required">
                                                            <option value="">Select Industry</option>
                                                            <?php
                                                            foreach ($supplier_industries as $key => $industry) {
                                                                ?>
                                                                <option <?= ($company->industry == $industry['id']) ? 'selected' : ''?> value="<?= $industry['id']; ?>"><?= $industry['industry']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>                                
                                                
                                                    <div class="col-sm-6">
                                                        <label for="example-url-input" class="col-form-label">Website</label>
                                                        <input class="form-control" type="url" id="website" name="website" placeholder="https://obso.com" value="<?= $company->website; ?>">
                                                    </div>                                
                                                    
                                                    <div class="col-sm-6">
                                                        <label for="example-tel-input" class="col-form-label">Dial Number</label>
                                                        <input class="form-control" type="number" id="dial_number" name="dial_number" placeholder="9876543210" value="<?= $company->dial_number; ?>">
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Record Source</label>
                                                        <select class="form-control" name="record_source" required="required">
                                                            <option value="">Select Record Source</option>

                                                            <option <?= ($company->record_source == 'E-mail') ? 'selected' : ''?> value="E-mail">E-mail</option>

                                                            <option <?= ($company->record_source == 'Self Generated / Outbound Call') ? 'selected' : ''?> value="Self Generated / Outbound Call">Self Generated / Outbound Call</option>

                                                            <option <?= ($company->record_source == 'Google Search') ? 'selected' : ''?> value="Google Search">Google Search</option>

                                                            <option <?= ($company->record_source == 'Bing Search') ? 'selected' : ''?> value="Bing Search">Bing Search</option>

                                                            <option <?= ($company->record_source == 'Other Search Engine') ? 'selected' : ''?> value="Other Search Engine">Other Search Engine</option>

                                                            <option <?= ($company->record_source == 'Google Ads') ? 'selected' : ''?> value="Google Ads">Google Ads</option>

                                                            <option <?= ($company->record_source == 'Bing Ads') ? 'selected' : ''?> value="Bing Ads">Bing Ads</option>

                                                            <option <?= ($company->record_source == 'Incoming Call') ? 'selected' : ''?> value="Incoming Call">Incoming Call</option>

                                                            <option <?= ($company->record_source == 'Chat Facility') ? 'selected' : ''?> value="Chat Facility">Chat Facility</option>

                                                            <option <?= ($company->record_source == 'Lead Forensics') ? 'selected' : ''?> value="Lead Forensics">Lead Forensics</option>

                                                            <option <?= ($company->record_source == 'Linkedin') ? 'selected' : ''?> value="Linkedin">E-Linkedin</option>

                                                            <option <?= ($company->record_source == 'Facebook Lead') ? 'selected' : ''?> value="Facebook Lead">Facebook Lead</option>

                                                            <option <?= ($company->record_source == 'Twitter Lead') ? 'selected' : ''?> value="Twitter Lead">Twitter Lead</option>

                                                            <option <?= ($company->record_source == 'Instagram Lead') ? 'selected' : ''?> value="Instagram Lead">Instagram Lead</option>

                                                            <option <?= ($company->record_source == 'Obso ecommerce Refer') ? 'selected' : ''?> value="Obso ecommerce Refer">Obso ecommerce Refer</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Country</label>
                                                        <select class="form-control" name="country">
                                                            <option value="">Select Country</option>
                                                            <?php
                                                            foreach ($countries as $key => $country) {
                                                                ?>
                                                                <option <?= ($company->country == $country['id']) ? 'selected' : ''?> value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="example-number-input" class="col-form-label">Information</label>
                                                <textarea class="form-control" name="information" id="information" rows="8"><?= $company->information; ?></textarea>
                                            </div>

                                            <div class="col-sm-12 text-center">
                                                <div class="offset-sm-5 col-sm-2" style="padding:10px 0px; ">
                                                    <input type="submit" name="edit_company" value="Edit Company" class="btn btn-primary waves-effect btn-md btn-block waves-light" style="margin-top: 35px;">
                                                </div>
                                            </div>

                                            </div>
                                        </form>
                                    <?php
                                }
                                ?>
                                
                            </form>
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


<!-- <div class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
        
                <form action="">                        

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Custom Select</label>
                        <div class="col-sm-10">
                            <select class="custom-select">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </form>

            </div>
        </div>/.modal-content
    </div>/.modal-dialog
</div> -->
