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
                            <li class="breadcrumb-item active"><a href="<?= base_url(); ?>admin/companies">Companies</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:;">Sales Contacts</a></li>
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
                            $flag = 'flag.png';
                            if(count($sales_contacts) > 0)
                            {
                                // show sales companies
                                foreach ($sales_contacts as $key => $contact)
                                {
                                    // Get all sales companies
                                    $sales_address = $this->Sales_Model->getAllSalesAddress($contact['id']);
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
                                                        <div class="col-md-11 c-b" style="padding-bottom: 10px;">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b> | Company : <b class="f-w-700"><?=  $contact['company_name']; ?></b> 
                                                            </h5>
                                                            <p>Position: <strong><?=  $contact['job_title']; ?></strong> | Department: <strong><?=  $contact['department']; ?></strong> | Location:
                                                                <?php
                                                                $add_count = 0;
                                                                foreach($sales_address as $address)
                                                                {
                                                                    if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                                    {
                                                                        echo  $address['location'].', '.$address['street'].', '.$address['town'].', '.$address['state'].', '.$address['country_name'].' '.$address['zip_code']; ?>
                                                                    

                                                                    <?php
                                                                    }else if($address['address_type'] != 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                                    {
                                                                        $add_count++;
                                                                    }
                                                                }
                                                                ?>
                                                                <a class="badge badge-success badge-pill" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>"><?= $add_count; ?></a>
                                                            </p>
                                                            <br />
                                                            <p>Email: <a href="javascript:;" style="color:coral !important;"><?=  $contact['email']; ?></a> | Mobile : <?=  $contact['mobile']; ?></p>
                                                            <p>Trader: <strong><?=  $contact['trader']; ?></strong> | Spend: <?=  0; ?> </p><p> Enquiry: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                        </div>

                                                        <div class="col-md-1 text-center c-b">
                                                            <div class="test action_button" id="menu1" data-toggle="dropdown"></div>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                                <a role="menuitem" tabindex="-1" href="<?= base_url('admin/sales/edit_sales/'.$contact['id']) ?>">
                                                                    <li role="presentation">Edit</li>
                                                                </a>
                                                               <a href="javascript:;" id="<?= $contact['id']; ?>" class="archieve" role="menuitem" tabindex="-1">
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

<!-- Archived Modal -->
<div class="modal fade bs-example-modal-center" id="archieved_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title mt-0">Are you sure ?  you want to archieve this contact !</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('admin/sales/archieve'); ?>" method="post">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" class="contact_id" name="id">
                <div class="modal-body">
                    <label>Resoan</label>
                    <select class="form-control" name="archieved_resoan" required>
                        <option value="">Select Archieve Reason</option>
                        <option value="Reason A">Reason A</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Archieve</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

$(document).ready(function(){

    $('.archieve').on('click', function(){
        var id = $(this).attr('id');
        $('.contact_id').val(id);
        $('#archieved_modal').modal('show');
    });

});

</script>