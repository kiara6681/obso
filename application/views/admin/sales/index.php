<style>
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .c-b{
        border: 1px solid #2a3142;
        background-color: #2a3142 !important;
        color: #fff;
        padding: 0px 4px;
    }
    .p-d-5{
        padding: 0px 10px;
    }
    .p-d-5 h5{
        background: gray;
        padding: 10px;
        margin: 5px;
    }
    .m-b-3{
        margin-bottom: 5px;
    }
    .c-card{
        padding: 0px 5px
    }
    .main_card{
        padding:5px;
    }
    .action_button{
        position: absolute;
        z-index: 1;
        right: 33px;
        top: 0;
    }
    .c-card{
        background-color: gray !important;
    }
    .f-w-400{
        font-weight: 400;
    }
    .f-w-700{
        font-weight: 700;
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
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="javascript:;">All Sales Contact</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-3">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/sales/create" class="btn btn-primary waves-effect waves-light">
                                Add New Contact
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
                        <div class="col-md-3 main_card">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card">
                                    <div class="card-body">
                                        <div class="row connectedSortable" id="lead_block" data-id="1">
                                            <div class="col-md-12 p-d-5"> 
                                                <h5 class="text-center" >Lead</h5>
                                            </div>
                                            <?php
                                            // show sales companies
                                            foreach ($sales_lead_block as $key => $contact) {
                                                ?>
                                                <div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="<?= $contact['id']; ?>">
                                                    <div class="col-md-12 c-b">
                                                        <h5 class="f-w-400"> Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b><br/>Company : <b class="f-w-700"><?= $contact['company']; ?></b> 
                                                        </h5>
                                                    </div>
                                                    <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                        <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                            <li role="presentation">Edit</li>
                                                        </a>
                                                       <a href="<?= base_url('admin/sales/archieve/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact?')" role="menuitem" tabindex="-1">
                                                            <li role="presentation">Archieve</li>
                                                       </a>
                                                   </ul>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 main_card">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card">
                                    <div class="card-body">
                                        <div class="row connectedSortable" id="suspects_block" data-id="2">
                                            <div class="col-md-12 p-d-5"> 
                                                <h5 class="text-center">Suspects</h5>
                                            </div>
                                            <?php
                                            // show sales companies
                                            foreach ($sales_suspects_block as $key => $contact) 
                                            {
                                                ?>
                                                <div class="col-md-12 m-b-3 move ui-state-default" data-id="2" id="<?= $contact['id']; ?>">
                                                    <div class="col-md-12 c-b">
                                                        <p> 
                                                            Name  : <?= $contact['fname'].' '.$contact['lname']; ?> 
                                                            <br>
                                                            Company : <?= $contact['company']; ?> 
                                                        </p>
                                                    </div>
                                                    <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                        <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                            <li role="presentation">Edit</li>
                                                        </a>
                                                       <a href="<?= base_url('admin/sales/archieve/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact?')" role="menuitem" tabindex="-1">
                                                            <li role="presentation">Archieve</li>
                                                       </a>
                                                   </ul>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 main_card">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card">
                                    <div class="card-body">
                                        <div class="row connectedSortable" data-id="3" id="prospects_block">
                                            <div class="col-md-12 p-d-5"> <h5 class="text-center">Prospects</h5></div>
                                            <?php
                                            // show sales companies
                                            foreach ($sales_prospects_block as $key => $contact) {
                                                ?>
                                                <div class="col-md-12 m-b-3 move ui-state-default" data-id="3" id="<?= $contact['id']; ?>">
                                                    <div class="col-md-12 c-b">
                                                        <p> 
                                                            Name  : <?= $contact['fname'].' '.$contact['lname']; ?> 
                                                            <br>
                                                            Company : <?= $contact['company']; ?> 
                                                        </p>
                                                    </div>
                                                    <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                        <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                            <li role="presentation">Edit</li>
                                                        </a>
                                                       <a href="<?= base_url('admin/sales/archieve/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact?')" role="menuitem" tabindex="-1">
                                                            <li role="presentation">Archieve</li>
                                                       </a>
                                                   </ul>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 main_card">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card">
                                    <div class="card-body">
                                        <div class="row connectedSortable" data-id="4" id="key_contact_block">
                                            <div class="col-md-12 p-d-5"> <h5 class="text-center">Key Contacts</h5></div>
                                            <?php
                                            // show sales companies
                                            foreach ($sales_key_contact_block as $key => $contact) 
                                            {
                                                ?>
                                                <div class="col-md-12 m-b-3 move ui-state-default" data-id="4" id="<?= $contact['id']; ?>">
                                                    <div class="col-md-12 c-b">
                                                        <p> 
                                                            Name  : <?= $contact['fname'].' '.$contact['lname']; ?> 
                                                            <br>
                                                            Company : <?= $contact['company']; ?> 
                                                        </p>
                                                    </div>
                                                    <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                        <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                            <li role="presentation">Edit</li>
                                                        </a>
                                                       <a href="<?= base_url('admin/sales/archieve/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact?')" role="menuitem" tabindex="-1">
                                                            <li role="presentation">Archieve</li>
                                                       </a>
                                                   </ul>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6  p-0">
                                                   <div class="row">
                                                       <div class="col-xl-2">
                                                           <div class="test" id="menu1" data-toggle="dropdown"></div>
                                                           <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                               <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                                 <li role="presentation">Edit</li>
                                                               </a>
                                                               <a href="<?= base_url('admin/sales/archieve/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact?')" role="menuitem" tabindex="-1">
                                                                   <li role="presentation">Archieve</li>
                                                               </a>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div> -->

                        <!-- <div class="col-md-4">                            
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
                        </div> -->

                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div><!-- content -->
</div>

<script>
$(document).ready(function(){
  $( function() {
        $( "#lead_block, #suspects_block, #prospects_block, #key_contact_block" ).sortable({
            connectWith: ".connectedSortable",

            /*stop: function(e, ui){

                var item = ui.item[0].innerHTML;
                var from = ui.sender?"not the same sortable":"same sortable";
                alert("dragged:" + item + " from: " + from);

            },*/
            connectWith: 'div',
            beforeStop: function(ev, ui) {
                var id = $(ui.item[0]).attr("id");
                var status = $(ui.item[0]).attr("data-id");
                var check = 0;
                var drop_status = $('#'+id).parent().attr('data-id');

                $.ajax({
                    url : '<?= base_url(); ?>admin/sales/checkInformation',
                    type : 'get',
                    csrf_test_name: '<?= $this->security->get_csrf_hash();?>',
                    data : {"id" : id, "status" : drop_status},
                    async:false,
                    success: function(data){
                        check = data;
                    },
                });

                if(check == 0)
                {
                    alert('not dropable');
                    $(this).sortable('cancel');
                }
                else
                {
                    $.ajax({
                        url : '<?= base_url(); ?>admin/sales/updateSalesStatus',
                        type : 'get',
                        csrf_test_name: '<?= $this->security->get_csrf_hash();?>',
                        data : {"id" : id, "status" : drop_status},
                        async:false,
                        success: function(data){
                            console.log(data);
                        },
                    }); 
                }
            }

        }).disableSelection();    

    });
});
$(document).ready(function(){

    // search sales contact
    $("#search_companies").on("keyup", function() {

        var value = $(this).val().toLowerCase();

        $("#show_searched_results").filter(function() {

            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // sort sales by country
    $(document).on('change', '#sort_by_country', function(){

        var country_by = $(this).val();
        var sort_by = $('#sort_by').val();

        sort_by_companies(sort_by, country_by);
        //sort_by_companies(country_by);
    });

    // sort by sales
    $(document).on('change','#sort_by' ,function(){
                            
        var sort_by = $(this).val();
        var country_by = $('#sort_by_country').val();

        sort_by_companies(sort_by, country_by);
    });

});

// sort function
function sort_by_companies(sort_by, country_by){

    $.ajax({
        url : "<?= base_url() ?>admin/sales/sort_by_companies",
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