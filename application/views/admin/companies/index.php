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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Companies</li>
                        </ol>
                    </div>
                    <div class="col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/companies/create" class="btn btn-primary waves-effect waves-light">
                                Add New Company
                            </a>
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
                            <h4 class="mt-0 header-title">Show all companies</h4>
                        </div>
                    </div>

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
                                    ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row p-9">
                                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                                    <img src="http://localhost/obsoadmin/trunk/obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                                    <div class="col-md-12 m-l-30">
                                                        <p> 
                                                            Company  : <?= $company['company_name']; ?> <br>
                                                            Industry : <?= $company['industry_name']; ?> <br>
                                                            Record Source : <?= $company['record_source']; ?>
                                                            Country : <?= $company['country']; ?>
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
                                                                        Website : <?= $company['website']; ?> <br>
                                                                        Dial Number : <?= $company['dial_number']; ?><br>
                                                                        Competitor : <?= $company['competitor']; ?><br>
                                                                        Free To Trade : <?= $company['free_to_trade']; ?><br>
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

                                // show supplier companies
                                foreach ($supplier_companies as $key => $company) {
                                    ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row p-9">
                                                <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                                    <img src="http://localhost/obsoadmin/trunk/obso/assets/images/flags/french_flag.jpg" class="cntry-flag">
                                                    <div class="col-md-12 m-l-30">
                                                        <p> 
                                                            Company  : <?= $company['company_name']; ?> <br>
                                                            Industry : <?= $company['industry_name']; ?> <br>
                                                            Record Source : <?= $company['record_source']; ?>
                                                            Country : <?= $company['country']; ?>
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
                                                                        Website : <?= $company['website']; ?> <br>
                                                                        Dial Number : <?= $company['dial_number']; ?><br>
                                                                        Competitor : <?= $company['competitor']; ?><br>
                                                                        Free To Trade : <?= $company['free_to_trade']; ?><br>
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
                                    
                                        <div class="form-group">
                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                                <option value="">Only Show</option>
                                            </select>
                                        </div>

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

                                        <div class="form-group">
                                            <select name="sort_by" id="sort_by" class="form-control">
                                                <option value="">Sort by</option>
                                                <option value="1">Latest First</option>
                                                <option value="2">Last  First</option>
                                                <option value="3">Country A-Z</option>
                                                <option value="4">Country Z-A</option>
                                                <option value="5">Industry A-Z</option>
                                                <option value="6">Industry Z-A</option>
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

        $("#show_searched_results").filter(function() {

            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    // Search companies by country
    $(document).on('change', '#sort_by_country', function(){

        var country_by = $(this).val();
        var sort_by = $('#sort_by').val();

        sort_by_companies(sort_by, country_by);
        //sort_by_companies(country_by);
    });

    $(document).on('change','#sort_by' ,function(){
                            
        var sort_by = $(this).val();
        var country_by = $('#sort_by_country').val();

        sort_by_companies(sort_by, country_by);
    });

});

function sort_by_companies(sort_by, country_by){

    $.ajax({
        url : "<?= base_url() ?>admin/companies/sort_by_companies",
        type : 'get',
        data : {'sort_by' : sort_by, 'country_by' : country_by},
        success : function(data){
            
            // console.log(data);
            // alert(data);
            $('#show_searched_results').html(data);
        }
    });
}

</script>