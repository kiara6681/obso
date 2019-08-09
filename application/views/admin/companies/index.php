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
                    <div class="col-sm-9">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="<?= base_url(); ?>admin/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item"> <b>Companies</b> </li>
                        </ol>
                    </div>
                    <div class="col-sm-3">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/companies/create" class="btn btn-primary waves-effect waves-light">
                                Add Company
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">

                    <?php
                    if($this->session->flashdata('message')){
                        ?>
                        <div class="alert alert-info">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="card">
                        <div class="card-body">
                            <form role="search">                                
                                <input type="text" class="form-control" id="search_companies" placeholder="Search..">
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">                                
                            <div id="show_searched_results">                                
                                <?php
                                // show sales companies
                                foreach ($sales_companies as $key => $company) {

                                    // Get company contact
                                    $company_contacts = $this->Companies_Model->getCompanyContacts($company['id']);

                                    // Get total enquiry of this company
                                    $enquiries = $this->common_model->getAllEnquiryOFCompany($company['id']);

                                    $quoted_enqiries = 0;
                                    foreach ($enquiries as $key => $enquiry) {
                                        if($enquiry['suspus'] == 1){

                                            $quoted_enqiries++;
                                        }
                                    }
                                    ?>
                                    <div class="card search_result sales_companies_only">
                                        <div class="card-body">
                                            <div class="row p-9">
                                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                                    <img src="http://localhost/obsoadmin/trunk/obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                                    <div class="col-md-12 m-l-30">
                                                        <p> 
                                                            Company  : <?= $company['company_name']; ?> 
                                                            <br>
                                                            Industry : <?= $company['industry_name']; ?> 
                                                            <br>
                                                            Website : <?= $company['website']; ?>
                                                            <br>
                                                            Dial : <?= $company['dial_number']; ?>
                                                            <br>
                                                            Information : <?= $company['information']; ?>
                                                            <br>
                                                            Competitor : <?= $company['competitor']; ?>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                                                    <div class="row">
                                                        <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                                            <div class="row">
                                                                <a href="javascript:;"></a>
                                                                <div class="col-xl-12">
                                                                    <p>
                                                                        Contacts : 
                                                                        <span style="color: #00fb00;">
                                                                            <?= (count($company_contacts) > 0) ? count($company_contacts) : '0'; ?>
                                                                        </span>
                                                                            <br>

                                                                        Total Enquiry : 
                                                                            <span style="color: red;">
                                                                            <?= count($enquiries) - $quoted_enqiries; ?>
                                                                            </span> 
                                                                            / 
                                                                            <?= count($enquiries); ?>
                                                                            <br>

                                                                        Quoted : 
                                                                        <span style="color: #00fb00;"><?= $quoted_enqiries; ?>
                                                                        </span>
                                                                        <br>

                                                                        Ordered : <br>
                                                                        Total Spent : <br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-2">
                                                            <div class="test" id="menu1" data-toggle="dropdown"></div>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="background-color: #dedede;color: #000;">
                                                                <a role="menuitem" tabindex="-1" href="<?= base_url('admin/companies/edit_company/'.$company['id']) ?>" style="color: #000 !important;">
                                                                  <li role="presentation">Edit</li>
                                                                </a>
                                                                <a href="<?= base_url('admin/companies/archieve/'.$company['id']) ?>" onclick="return confirm('Are you sure you want to remove the company?')" role="menuitem" tabindex="-1" style="color: #000 !important;">
                                                                    <li role="presentation">Archieve</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }

                                // show supplier companies
                                foreach ($supplier_companies as $key => $company) {

                                    // Get company contact
                                    $company_contacts = $this->Companies_Model->getCompanyContacts($company['id']);

                                    // Get total enquiry of this company
                                    $enquiries = $this->common_model->getAllEnquiryOFCompany($company['id']);

                                    $quoted_enqiries = 0;
                                    foreach ($enquiries as $key => $enquiry) {
                                        if($enquiry['suspus'] == 1){

                                            $quoted_enqiries++;
                                        }
                                    }
                                    ?>
                                    <div class="card search_result supplier_companies_only" style="background-color: #dedede !important; color: #000;">
                                        <div class="card-body">
                                            <div class="row p-9">
                                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                                    <img src="http://localhost/obsoadmin/trunk/obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                                    <div class="col-md-12 m-l-30">
                                                        <p> 
                                                            Company  : <?= $company['company_name']; ?> 
                                                            <br>
                                                            Industry : <?= $company['industry_name']; ?> 
                                                            <br>
                                                            Website : <?= $company['website']; ?>
                                                            <br>
                                                            Dial : <?= $company['dial_number']; ?>
                                                            <br>
                                                            Information : <?= $company['information']; ?>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                                                    <div class="row">
                                                        <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                                            <div class="row">
                                                                <a href="javascript:;"></a>
                                                                <div class="col-xl-12">
                                                                    <p>
                                                                        Contacts : 
                                                                        <span style="color: #0cad0c;">
                                                                            <?= (count($company_contacts) > 0) ? count($company_contacts) : '0'; ?>
                                                                        </span>
                                                                            <br>

                                                                        Stock Products : 
                                                                            <span style="color: red;">
                                                                            
                                                                            </span> 
                                                                            
                                                                            <br>

                                                                        Order : 
                                                                        <span style="color: #0cad0c;">

                                                                        </span>
                                                                        <br>

                                                                        Total Order : <br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-2">
                                                            <div class="test" id="menu1" data-toggle="dropdown"></div>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                                <a role="menuitem" tabindex="-1" href="<?= base_url('admin/companies/edit_company/'.$company['id']) ?>">
                                                                  <li role="presentation">Edit</li>
                                                                </a>
                                                                <a href="<?= base_url('admin/companies/archieve/'.$company['id']) ?>" onclick="return confirm('Are you sure you want to remove the company?')" role="menuitem" tabindex="-1">
                                                                    <li role="presentation">Archieve</li>
                                                                </a>
                                                            </ul>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
    
                        <div class="col-md-4">                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0"><h6>Search Filter</h6></div>

                                    <div class="col-xl-12 col-md-4 col-sm-6 p-0">
                                    
                                        <!-- show only -->
                                        <div class="form-group">
                                            <select id="show_only_companies" name="show_only_companies" class="form-control">
                                                <option value="">Only Show</option>
                                                <option value="1">All Company</option>
                                                <option value="2">Sales Company</option>
                                                <option value="3">Supplier Company</option>
                                                <option value="4">Number of contact 10-99</option>
                                                <option value="5">Number of contact 100+</option>
                                                <option value="6">10-99 Enquiry Record</option>
                                                <option value="7">100+ Enquiry Record</option>
                                                <option value="8">10-99 Order Record</option>
                                                <option value="9">100+ Order Record</option>
                                            </select>
                                        </div>
                                        
                                        <!-- sort by country -->
                                        <div class="form-group"> 
                                            <select name="country" id="sort_by_country" class="form-control adv-common-filter">
                                                <option value="">Region/Country Select</option>
                                                <?php 
                                                foreach($countries as $c => $country): 
                                                    ?>
                                                    <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                                                    <?php 
                                                endforeach; 
                                                ?>
                                            </select>
                                        </div>
    
                                        <!-- sort by others -->
                                        <div class="form-group">
                                            <select name="sort_by" id="sort_by" class="form-control">
                                                <option value="">Sort by</option>
                                                <option value="1">Company Name A-Z</option>
                                                <option value="2">Company Name Z-A</option>
                                                <option value="3">No. of Enquries High to Low</option>
                                                <option value="4">No. of Enquries Low to High</option>
                                                <option value="5">Last Enquiry (earliest to latest)</option>
                                                <option value="6">Last Enquiry( latest to earliest)</option>
                                                <option value="7">No. of Orders High to Low</option>
                                                <option value="8">No. of Orders Low to High</option>
                                                <option value="9">Last Order (earliest to latest)</option>
                                                <option value="10">Last Order( latest to earliest)</option>
                                                <option value="11">GP High to Low</option>
                                                <option value="12">GP Low to High</option>
                                                <option value="13">Account Status Longest Terms First</option>
                                                <option value="14">Account Status Shortest Terms First</option>
                                                <option value="15">Industry A-Z</option>
                                                <option value="16">Industry Z-A</option>
                                                <option value="17">Hottest to Coldest Data</option>
                                                <option value="18">Coldest to Hottest Data</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div><!-- content -->
</div>

<script>
    $(document).ready(function(){

        // search companies
        $("#search_companies").on("keyup", function() {

            var value = $(this).val().toLowerCase();

            console.log(value);

            $("#show_searched_results .search_result").filter(function() {

                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // Show only fucntion
        $(document).on('change', '#show_only_companies', function(){

            var show_only = $(this).val();
            var country_by = $('#sort_by_country').val();
            var sort_by = $('#sort_by').val();

            sort_by_companies(sort_by, country_by, show_only);
        });

        // Sort companies by country
        $(document).on('change', '#sort_by_country', function(){

            var show_only = $('#show_only_companies').val();
            var country_by = $(this).val();
            var sort_by = $('#sort_by').val();

            sort_by_companies(sort_by, country_by, show_only);
        });

        // Sort by others
        $(document).on('change','#sort_by' ,function(){
            
            var show_only = $('#show_only_companies').val();
            var country_by = $('#sort_by_country').val();
            var sort_by = $(this).val();

            sort_by_companies(sort_by, country_by, show_only);
        });
    });

    // Sorting function
    function sort_by_companies(sort_by, country_by, show_only){

        $.ajax({
            url : "<?= base_url() ?>admin/companies/sort_by_companies",
            type : 'get',
            data : {'sort_by' : sort_by, 'country_by' : country_by, 'show_only' : show_only},
            success : function(data){
                
                console.log(data);
                // alert(data);
                $('#show_searched_results').html(data);
            }
        });
    }
</script>