<style>
    a:hover{
        background: none!important;
    }
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .c-b-gray {
        background-color: #2a3142 !important;
    }
   
    .f-w-400{
        font-weight: 400;
    }
    .f-w-700{
        font-weight: 700;
    }
    .dropdown-menu.show {
        background-color: #222831;
        top: 5px !important;
        left: -60px !important;
        padding: 12px !important; 
    }
    .p-0{
        padding: 0px;
    }
    .f-c-b{
        color: #737871;
    }
    .p-10{
        padding: 15px;
    }
    p{
        margin-bottom: 0px;
    }
    .red-box{
        background-color: red;
        color: #fff;
        padding: 10px;
        border-radius: 1px;
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
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="<?= base_url(); ?>admin/sales">All Sales Contact</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:;">All Archieved Contact</a></li>
                        </ol>
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
                    <div class="row">
                        <div class="col-md-12">                                
                            <?php
                            $flag = 'us.png';
                            if(count($archived_contacts) > 0)
                            {
                                // show sales companies
                                foreach ($archived_contacts as $key => $contact)
                                {
                                    foreach($sales_address as $address)
                                    {
                                        if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                        {
                                            $flag = $address['flag'];
                                        }
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12 p-10">
                                            <div class="row">
                                                <div class="col-md-12  c-b-gray">
                                                    <div class="row">
                                                        <div class="col-md-9 c-b" style="padding-bottom: 10px;">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['company']; ?> </b> | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score : 
                                                                <?php
                                                                    if($contact['overall_rating'] == 1)
                                                                    {
                                                                        ?>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <?php
                                                                    }else if($contact['overall_rating'] == 2){
                                                                        ?>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <?php
                                                                    }else if($contact['overall_rating'] == 3){
                                                                        ?>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <?php
                                                                    }else if($contact['overall_rating'] == 4){
                                                                        ?>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <?php
                                                                    }else if($contact['overall_rating'] == 5){
                                                                        ?>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <i class="fa fa-star yellow"></i>
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </h5>
                                                             Website :
                                                                <a href="website"> 
                                                                    <b class="f-w-700"><?=  $contact['website']; ?></b>

                                                                </a>
                                                            <p>Supplier Type: <strong><?=  $contact['supplier_type']; ?></strong></p>
                                                            <p>Conditions Offered: <strong><?=  $contact['conditions_offered']; ?></strong></p>     
                                                             </p>
                                                            <p>Payment Terms: <?=  $contact['payment_terms']; ?> | Supplier Status: <?=  $contact['contact_status']; ?> </p>      
                                                            <p> Email: 
                                                                <?php
                                                                $email = '';
                                                                $mobile = '';
                                                                foreach($supplier_main_contacts as $main_contact)
                                                                {
                                                                    if($main_contact['supplier_id'] == $contact['id'])
                                                                    {
                                                                        $email = $main_contact['email'];
                                                                        $mobile = $main_contact['mobile'];
                                                                    }
                                                                }
                                                                ?>
                                                                <a href="mailto:<?= $email; ?>" style="color:coral !important;"><?= $email; ?></a> | Number: <?=  $mobile; ?></p>
                                                            <p>Spend: N/A | Enquiry: N/A | Quoted: N/A | Order: N/A</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h6>Reason :</h6>
                                                            <div class="red-box">
                                                            <?php
                                                                echo $contact['archieved_resoan'];
                                                            ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 text-center c-b">
                                                            <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                                <a role="menuitem" tabindex="-1" href="<?= base_url('admin/suppliers/backToLeads/'.$contact['id']) ?>">
                                                                    <li role="presentation">Back to Lead</li>
                                                                </a>
                                                               <a href="<?= base_url('admin/suppliers/deleteContact/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to permanently delete this contact?')" role="menuitem" tabindex="-1">
                                                                    <li role="presentation">Permanently Delete</li>
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
                            }else{
                                echo "No Contacts Available!";
                            }
                            ?>
                        </div>

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
                    alert('Please provide all mendatory information.');
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

    $("#search_contact").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lead_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        var value = $(this).val().toLowerCase();
        $("#suspects_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        var value = $(this).val().toLowerCase();
        $("#prospects_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        var value = $(this).val().toLowerCase();
        $("#key_contact_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
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