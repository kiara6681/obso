<style>
    a:hover{
        background: none!important;
    }
    a.badge:hover{
            background-color: rgb(2, 164, 153) !important;
    }
    .btn-primary {
        background-color: #626ed4 !important;
        border: 1px solid #626ed4 !important;
    }
    .c-b{
        border: 1px solid #2a3142;
        background-color: #2a3142 !important;
        color: #fff;
        padding: 0px 4px;
        min-height: 300px;
    }
    .c-b p{
        font-size: 13px;
        margin-bottom: 0rem;
    }
    .c-b strong{
        font-size: 13px;
    }
    .p-d-5{
        padding: 0px 10px;
    }
    .p-d-5 .h5-g{
        background: #2a3142;
        color:#fff;
        padding: 15px;
        margin: 5px;
    }
    .p-d-5 .h5-y{
        background: #2a3142;
        color:#999999;
        padding: 15px;
        margin: 5px;
    }
    .p-d-5 .h5-grn{
        background: #2a3142;
        color:#f0c338;
        padding: 15px;
        margin: 5px;
    }
    .p-d-5 .h5-r{
        background-color:#2a3142; 
        color:#000;
        padding: 15px;
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
        top: 5px;
        padding: 5px;
        right: 20px;
    }
    .color-g{
        background-color: #323a4e !important;
    }
    .color-y{
        background-color: #323a4e !important;
    }
    .color-grn{
        background-color: #323a4e !important;
    }
    .color-r{
        background-color: #323a4e !important;
    }
    .f-w-400{
        font-weight: 400;
    }
    .f-w-700{
        font-weight: 700;
    }
    .connectedSortable{
        min-height: 10px;
    }
    .dropdown-menu.show {
        background-color: gray;
        top: -25px !important;
        padding: 5px !important;
        left: -160px !important;
    }
    .p-0{
        padding: 0px;
    }
    .f-c-b{
        color: #737871;
    }
    .qualified
    {
        border: 4px solid red;
    }
    .closable
    {
        border: 4px solid blue;
    }
</style>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">                    
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="javascript:;">All Supplier Contact</a></li>
                        </ol>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/suppliers/create" class="btn btn-primary waves-effect btn-md waves-light">
                                Add New Supplier
                            </a>
                            <!-- <a href="javascript:;" class="import_csv btn btn-primary waves-effect btn-md waves-light">
                                Import Contacts
                            </a> -->
                            <a href="<?= base_url(); ?>admin/suppliers/archieved" class="btn btn-danger waves-effect btn-md waves-light">
                                Archieved Contacts
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
                    if($this->session->flashdata('msg')){
                        ?>
                        <div class="alert alert-info">
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <form role="search">
                                        <input type="text" class="form-control" id="search_contact" placeholder="Search..">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <form role="search">
                                        <select class="form-control" id="show_only">
                                            <option value="">Only Show</option>
                                            <option value="">All Contacts</option>
                                            <option value="1">Single Order Contacts</option>
                                            <option value="2">Repeat customer contacts 2-9</option>
                                            <option value="3">10-99 Order contacts</option>
                                            <option value="4">100+ Order contacts</option>
                                            <option value="5">Account customer contacts</option>
                                            <option value="6">Advance payment Contacts</option>
                                            <option value="12">Single Contact Records</option>
                                            <option value="13">Companies over 50% Quote to Order</option>
                                            <option value="14">Companies under 50% Quote to Order</option>
                                            <option value="15">Contacts require Siemens</option>
                                            <option value="16">Contacts require Allen Bradley</option>
                                            <option value="17">Contacts require Mitsubishi</option>
                                            <option value="18">Contacts require Nidec (Control Tehniques/Leroy Somer)</option>
                                            <option value="19">Contacts require Lenze</option>
                                            <option value="20">Contacts require Bosch Rexroth / Bosch Indramat</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <form role="search">
                                        <select class="form-control" id="sort_by" >
                                            <option value="">Sort By</option>
                                            <option value="1">Contact Name A-Z</option>
                                            <option value="2">Contact Name Z-A</option> 
                                            <option value="7">No. of Orders High to Low</option>
                                            <option value="8">No. of Orders Low to High</option>
                                            <option value="9">Last Order (earliest to latest)</option>
                                            <option value="10">Last Order( latest to earliest)</option>
                                            <option value="11">GP High to Low</option>
                                            <option value="12">GP Low to High</option>
                                            <option value="13">Account Status Longest Terms First</option>
                                            <option value="14">Account Status Shortest Terms First</option>
                                            <option value="17">Hottest to Coldest Data</option>
                                            <option value="18">Coldest to Hottest Data</option>
                                            <option value="19">Last Sales Note (earliest to latest)</option>
                                            <option value="20">Last Sales Note ( latest to earliest)</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 main_card p-0">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card color-g">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 p-d-5 text-center"> 
                                                <h5 class="text-center h5-g" >Supplier Lead </h5>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="lead_block" data-id="1">
                                                <?php
                                                $flag = 'flag.png';
                                                // show sales companies
                                                foreach ($sales_lead_block as $key => $contact)
                                                {
                                                    foreach($countries as $country)
                                                    {
                                                        if($country['id'] == $contact['contact_country'])
                                                        {
                                                            $flag = $country['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['company']; ?> </b> 
                                                            </h5>
                                                            Website :
                                                                <a href="website"> 
                                                                    <b class="f-w-700"><?=  $contact['website']; ?></b>

                                                                </a>
                                                            <p>Supplier Type: <strong><?=  $contact['supplier_type']; ?></strong></p>
                                                            <p>Conditions Offered: <strong><?=  $contact['conditions_offered']; ?></strong></p>
                                                            <p>Express Options Available:
                                                                <?php
                                                                $option = json_encode($contact['express_options']);
                                                                $temp = json_decode($contact['express_options']);
                                                                $res = (array)$temp;

                                                                foreach($res as $dd)
                                                                {
                                                                    echo $dd.', ';
                                                                }
                                                                ?>
                                                            </p>
                                                            <br />
                                                            <p>Express Order Cut off Time: | Payment Terms : </p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <a href="mailto:" style="color:coral !important;">--</a> | Main Number: <?=  0; ?></p>
                                                            <p> Enquiry's Sent 0 (Active) | Quoted 0 |Supplier Orders : 0 (Active))</p>
                                                        </div>
                                                        <div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_<?= $contact['id']; ?>">
                                                            <a role="menuitem" tabindex="-1" href="<?= base_url('admin/suppliers/edit_supplier/'.$contact['id']) ?>">
                                                                <li role="presentation">Edit</li>
                                                            </a>
                                                           <a href="javascript:;" id="<?= $contact['id']; ?>" class="archieve" role="menuitem" tabindex="-1">
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
                        </div>
                        <div class="col-md-3 main_card p-0">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card color-y">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 p-d-5 text-center"> 
                                                <h5 class="text-center h5-y" >Unverified Suppliers</h5>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="suspects_block" data-id="2">
                                                <?php
                                                $flag = 'flag.png';

                                                // show sales companies
                                                foreach ($sales_suspects_block as $key => $contact) 
                                                {
                                                    foreach($countries as $country)
                                                    {
                                                        if($country['id'] == $contact['contact_country'])
                                                        {
                                                            $flag = $country['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="2" id="<?= $contact['id']; ?>">
                                                         <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['company']; ?> </b> 
                                                            </h5>
                                                            Website :
                                                                <a href="website"> 
                                                                    <b class="f-w-700"><?=  $contact['website']; ?></b>

                                                                </a>
                                                            <p>Supplier Type: <strong><?=  $contact['supplier_type']; ?></strong></p>
                                                            <p>Conditions Offered: <strong><?=  $contact['conditions_offered']; ?></strong></p>
                                                            <p>Express Options Available:
                                                                <?php
                                                                $option = json_encode($contact['express_options']);
                                                                $temp = json_decode($contact['express_options']);
                                                                $res = (array)$temp;

                                                                foreach($res as $dd)
                                                                {
                                                                    echo $dd.', ';
                                                                }
                                                                ?>
                                                            </p>
                                                            <br />
                                                            <p>Express Order Cut off Time: | Payment Terms : </p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <a href="mailto:" style="color:coral !important;">--</a> | Main Number: <?=  0; ?></p>
                                                            <p> Enquiry's Sent 0 (Active) | Quoted 0 |Supplier Orders : 0 (Active))</p>
                                                        </div>
                                                        <div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_<?= $contact['id']; ?>">
                                                            <a role="menuitem" tabindex="-1" href="<?= base_url('admin/suppliers/edit_supplier/'.$contact['id']) ?>">
                                                                <li role="presentation">Edit</li>
                                                            </a>
                                                           <a href="javascript:;" id="<?= $contact['id']; ?>" class="archieve" role="menuitem" tabindex="-1">
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
                        </div>
                        <div class="col-md-3 main_card p-0">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card color-grn">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 p-d-5 text-center"> 
                                                 <h5 class="text-center h5-grn" >Trusted Suppliers</h5>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="prospects_block" data-id="3">
                                                <?php
                                                $flag = 'flag.png';
                                                // show sales companies
                                                foreach ($sales_prospects_block as $key => $contact) 
                                                {
                                                    foreach($countries as $country)
                                                    {
                                                        if($country['id'] == $contact['contact_country'])
                                                        {
                                                            $flag = $country['flag'];
                                                        }
                                                    }
                                                    $qualified = '';
                                                   /* if($contact['contact_prospect_status'] == 1)
                                                    {
                                                        $qualified = '';
                                                        $qualified = 'qualified';
                                                    }

                                                    if($contact['closable_prospect_status'] == 1)
                                                    {
                                                        $qualified = 'closable';
                                                    }*/
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="3" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b <?= $qualified; ?>" id='color_id_<?= $contact['id']; ?>'>
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['company']; ?> </b> 
                                                            </h5>
                                                            Website :
                                                                <a href="website"> 
                                                                    <b class="f-w-700"><?=  $contact['website']; ?></b>

                                                                </a>
                                                            <p>Supplier Type: <strong><?=  $contact['supplier_type']; ?></strong></p>
                                                            <p>Conditions Offered: <strong><?=  $contact['conditions_offered']; ?></strong></p>
                                                            <p>Express Options Available:
                                                                <?php
                                                                $option = json_encode($contact['express_options']);
                                                                $temp = json_decode($contact['express_options']);
                                                                $res = (array)$temp;

                                                                foreach($res as $dd)
                                                                {
                                                                    echo $dd.', ';
                                                                }
                                                                ?>
                                                            </p>
                                                            <br />
                                                            <p>Express Order Cut off Time: | Payment Terms : </p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <a href="mailto:" style="color:coral !important;">--</a> | Main Number: <?=  0; ?></p>
                                                            <p> Enquiry's Sent 0 (Active) | Quoted 0 |Supplier Orders : 0 (Active))</p>
                                                        </div>
                                                        <div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_<?= $contact['id']; ?>">
                                                            <a role="menuitem" tabindex="-1" href="<?= base_url('admin/suppliers/edit_supplier/'.$contact['id']) ?>">
                                                                <li role="presentation">Edit</li>
                                                            </a>
                                                           <a href="javascript:;" id="<?= $contact['id']; ?>" class="archieve" role="menuitem" tabindex="-1">
                                                                <li role="presentation">Archieve</li>
                                                           </a>
                                                           <a href="<?= base_url(); ?>admin/suppliers/contactQualifiedProspect/<?= $contact["id"]; ?>" class="qualified_prospect" role="menuitem" tabindex="-1">
                                                                <li role="presentation">Qualified Prospect</li>
                                                            </a>
                                                            <?php
                                                            if($contact['contact_prospect_status'] == 1)
                                                            {
                                                                ?>
                                                                <a href="<?= base_url(); ?>admin/suppliers/contactClosableProspect/<?= $contact["id"]; ?>" role="menuitem" tabindex="-1" id="closable_id_<?= $contact['id'] ; ?>">
                                                                    <li role="presentation">Closable Prospect</li>
                                                                </a>

                                                                <?php
                                                            }
                                                            ?>
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
                        </div>
                        <div class="col-md-3 main_card p-0">                                
                            <div id="show_searched_results">                                
                                <div class="card c-card color-r">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 p-d-5 text-center"> 
                                                <h5 class="text-center h5-r
                                                color:#000;" >Partner Suppliers</h5>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="key_contact_block" data-id="4">
                                                <?php
                                                $flag = 'flag.png';
                                                // show sales companies
                                                foreach ($sales_key_contact_block as $key => $contact) 
                                                {
                                                    foreach($countries as $country)
                                                    {
                                                        if($country['id'] == $contact['contact_country'])
                                                        {
                                                            $flag = $country['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="4" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['company']; ?> </b> 
                                                            </h5>
                                                            Website :
                                                                <a href="website"> 
                                                                    <b class="f-w-700"><?=  $contact['website']; ?></b>

                                                                </a>
                                                            <p>Supplier Type: <strong><?=  $contact['supplier_type']; ?></strong></p>
                                                            <p>Conditions Offered: <strong><?=  $contact['conditions_offered']; ?></strong></p>
                                                            <p>Express Options Available:
                                                                <?php
                                                                $option = json_encode($contact['express_options']);
                                                                $temp = json_decode($contact['express_options']);
                                                                $res = (array)$temp;

                                                                foreach($res as $dd)
                                                                {
                                                                    echo $dd.', ';
                                                                }
                                                                ?>
                                                            </p>
                                                            <br />
                                                            <p>Express Order Cut off Time: | Payment Terms : </p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                            <p>Payment Terms:  | Supplier Status: <?=  $contact['contact_status']; ?> </p><p> Main Email: <a href="mailto:" style="color:coral !important;">--</a> | Main Number: <?=  0; ?></p>
                                                            <p> Enquiry's Sent 0 (Active) | Quoted 0 |Supplier Orders : 0 (Active))</p>
                                                        </div>
                                                        <div class="action_button" id="menu1" data-toggle="dropdown"><i class="fa fa-ellipsis-v "></i> </div>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="sub_menu_<?= $contact['id']; ?>">
                                                            <a role="menuitem" tabindex="-1" href="<?= base_url('admin/suppliers/edit_supplier/'.$contact['id']) ?>">
                                                                <li role="presentation">Edit</li>
                                                            </a>
                                                           <a href="javascript:;" id="<?= $contact['id']; ?>" class="archieve" role="menuitem" tabindex="-1">
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
                        </div>

                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div><!-- content -->
</div>

<!-- Import Contact Modal -->
<div class="modal fade bs-example-modal-center" id="import_contact" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Import Suppliers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="card">
                <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                    <div class="button-items">
                    <?php $this->load->helper('form'); ?>
                    <?php echo form_open(base_url() . 'admin/suppliers/uploadCSV' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
                        <div class="form-group">
                            <input type="file" name="file"  class="form-control" style="background: none;padding: 0;margin-top: 15px;" required>
                        </div>
                        <button type="submit" name="import" class="btn btn-primary btn-block waves-effect waves-light">Import CSV</button>
                        <?php echo form_close();?>
                        <div class="download-sample text-center">
                            <a download class="btn btn-link" href="<?= base_url() ?>uploads/sample/samplesupplierscontact.csv">Download Sample CSV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Archived Modal -->
<div class="modal fade bs-example-modal-center" id="archieved_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title mt-0">Are you sure ?  you want to archieve this contact !</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('admin/suppliers/archieve'); ?>" method="post">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" class="contact_id" name="id">
                <div class="modal-body">
                    <label>Resoan</label>
                    <select class="form-control" name="archieved_resoan" required>
                        <option value="">Select Archieve Reason</option>
                        <option value="Record not Available">Record not Available</option>
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

    /*-------  Filter Functions -----------*/
    $(document).on('change', '#show_only', function(){

        var show_only = $(this).val();
        var sort_by = $('#sort_by').val();
        sort_by_suppliers(sort_by, show_only);
    });

    // Sort companies by country
    $(document).on('change', '#sort_by', function(){

        var sort_by = $(this).val();
        var show_only = $('#show_only').val();
        sort_by_suppliers(sort_by, show_only);
    });

    $('.import_csv').on('click', function(){
        $('#import_contact').modal('show');
    });

    $('.archieve').on('click', function(){
        var id = $(this).attr('id');
        $('.contact_id').val(id);
        $('#archieved_modal').modal('show');
    });

    $( function() {
        $("#lead_block, #suspects_block, #prospects_block, #key_contact_block" ).sortable(
        {
            connectWith: ".connectedSortable",
            connectWith: 'div',
            beforeStop: function(ev, ui) {
                var id = $(ui.item[0]).attr("id");
                var status = $(ui.item[0]).attr("data-id");
                var check = 0;
                var drop_status = $('#'+id).parent().attr('data-id');

                $.ajax({
                    url : '<?= base_url(); ?>admin/suppliers/checkInformation',
                    type : 'get',
                    csrf_test_name: '<?= $this->security->get_csrf_hash();?>',
                    data : {"id" : id, "drop_status" : drop_status, 'status' : status},
                    async:false,
                    success: function(data){
                        console.log(data);
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
                    if(drop_status != status)
                    {
                        $.ajax({
                            url : '<?= base_url(); ?>admin/suppliers/updateSalesStatus',
                            type : 'get',
                            csrf_test_name: '<?= $this->security->get_csrf_hash();?>',
                            data : {"id" : id, "status" : drop_status},
                            async:false,
                            success: function(data){
                                console.log(data);
                                $(ui.item[0]).attr("data-id", drop_status);
                            },
                        }); 
                        
                        if(drop_status == 3)
                        {
                            var html = '<a href="<?= base_url(); ?>admin/suppliers/contactQualifiedProspect/'+id+'" class="qualified_prospect" role="menuitem" tabindex="-1"><li role="presentation">Qualified Prospect</li></a>';
                            $('#sub_menu_'+id).append(html);

                        }else{
                            $('#sub_menu_'+id+' .qualified_prospect').remove();
                            $('#color_id_'+id).removeClass('qualified');
                            $('#color_id_'+id).removeClass('closable');
                            $('#closable_id_'+id).remove();
                        }
                    }
                }
            }

        }).disableSelection();    

    });
});

// Sorting function
function sort_by_suppliers(sort_by, show_only){

    $.ajax({
        url : "<?= base_url() ?>admin/Suppliers/supplier_filter",
        type : 'get',
        data : {'sort_by' : sort_by, 'show_only' : show_only},
        success : function(data){                
            console.log(data);
            // var temp = data.split('|-|');
            // $('#lead_block').html(temp[0]);
            // $('#suspects_block').html(temp[1]);
            // $('#prospects_block').html(temp[2]);
            // $('#key_contact_block').html(temp[3]);
        }
    });
}

$(document).ready(function(){

    // search sales contact
    $("#search_companies").on("keyup", function() {

        var value = $(this).val().toLowerCase();

        $("#show_searched_results").filter(function() {

            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // sort sales by country
   /* $(document).on('change', '#sort_by_country', function(){

        var country_by = $(this).val();
        var sort_by = $('#sort_by').val();

        sort_by_companies(sort_by, country_by);
        //sort_by_companies(country_by);
    });*/

    // sort by sales
   /* $(document).on('change','#sort_by' ,function(){
                            
        var sort_by = $(this).val();
        var country_by = $('#sort_by_country').val();

        sort_by_companies(sort_by, country_by);
    });*/

    $("#search_contact").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lead_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        var value = $(this).val().toLowerCase();
        $("#suspects_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        var value = $(this).val().toLowerCase();
        $("#prospects_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        var value = $(this).val().toLowerCase();
        $("#key_contact_block .move").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

});

// sort function
/*function sort_by_companies(sort_by, country_by){

    $.ajax({
        url : "<?= base_url() ?>admin/suppliers/sort_by_companies",
        type : 'get',
        data : {'sort_by' : sort_by, 'country_by' : country_by},
        success : function(data){
            
            // console.log(data);
            // alert(data);
            $('#show_searched_results').html(data);
        }
    });
}*/
</script>