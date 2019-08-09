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
        background: #e6b8af;
        color:#737871;
        padding: 10px;
        margin: 5px;
    }
    .p-d-5 .h5-y{
        background: #fffd77;
        color:#737871;
        padding: 10px;
        margin: 5px;
    }
    .p-d-5 .h5-grn{
        background: #b7d7a8;
        color:#737871;
        padding: 10px;
        margin: 5px;
    }
    .p-d-5 .h5-r{
        background: #d9d2e9;
        color:#737871;
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
    .color-g{
        background-color: #e6b8af !important;
    }
    .color-y{
        background-color: #fffd77 !important;
    }
    .color-grn{
        background-color: #b7d7a8 !important;
    }
    .color-r{
        background-color: #d9d2e9 !important;
    }
    .f-w-400{
        font-weight: 400;
    }
    .f-w-700{
        font-weight: 700;
    }
    .dropdown-menu.show {
        background-color: gray;
    }
    .p-0{
        padding: 0px;
    }
    .dropdown-menu.show {
        padding: 5px !important;
    }
    .f-c-b{
        color: #737871;
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
                            <li class="breadcrumb-item active"><a href="javascript:;">All Sales Contact</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/sales/create" class="btn btn-primary waves-effect btn-block btn-md waves-light">
                                Add New Contact
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <a href="javascript:;" class="import_csv btn btn-primary waves-effect btn-block btn-md waves-light">
                                Import Contacts
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">                    
                        <div class="float-right d-none d-md-block">
                            <a href="<?= base_url(); ?>admin/sales/archieved" class="btn btn-primary waves-effect btn-block btn-md waves-light">
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
                                        <select class="form-control" name="only_show" id="only_show">
                                            <option value="">Only Show</option>
                                            <option value="All Contacts">All Contacts</option>
                                            <option value="Single Order Contacts">Single Order Contacts</option>
                                            <option value="Repeat customer contacts 2-9">Repeat customer contacts 2-9</option>
                                            <option value="10-99 Order contacts">10-99 Order contacts</option>
                                            <option value="100+ Order contacts">100+ Order contacts</option>
                                            <option value="Account customer contacts">Account customer contacts</option>
                                            <option value="Advance payment Contacts">Advance payment Contacts</option>
                                            <option value="Never Enquired">Never Enquired</option>
                                            <option value="Single Enquiry Records">Single Enquiry Records</option>
                                            <option value="Repeat Enquiry Records 2-9">Repeat Enquiry Records 2-9</option>
                                            <option value="10-99 Enquiry Records">10-99 Enquiry Records</option>
                                            <option value="100+ Enquiry Records">100+ Enquiry Records</option>
                                            <option value="Single Contact Records">Single Contact Records</option>
                                            <option value="Companies over 50% Quote to Order">Companies over 50% Quote to Order</option>
                                            <option value="Companies under 50% Quote to Order">Companies under 50% Quote to Order</option>
                                            <option value="Contacts require Siemens">Contacts require Siemens</option>
                                            <option value="Contacts require Allen Bradley">Contacts require Allen Bradley</option>
                                            <option value="Contacts require Mitsubishi">Contacts require Mitsubishi</option>
                                            <option value="Contacts require Nidec (Control Tehniques/Leroy Somer)">Contacts require Nidec (Control Tehniques/Leroy Somer)</option>
                                            <option value="Contacts require Lenze">Contacts require Lenze</option>
                                            <option value="Contacts require Bosch Rexroth / Bosch Indramat">Contacts require Bosch Rexroth / Bosch Indramat</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <form role="search">
                                        <select class="form-control" id="sort_by" name="sort_by">
                                            <option value="">Sort By</option>
                                            <option value="Contact Name A-Z">Contact Name A-Z</option>
                                            <option value="Contact Name Z-A">Contact Name Z-A</option>
                                            <option value="No. of Enquries High to Low">No. of Enquries High to Low</option>
                                            <option value="No. of Enquries Low to High">No. of Enquries Low to High</option>
                                            <option value="Last Enquiry (earliest to latest)">Last Enquiry (earliest to latest)</option>
                                            <option value="Last Enquiry( latest to earliest)">Last Enquiry( latest to earliest)</option>
                                            <option value="No. of Orders High to Low">No. of Orders High to Low</option>
                                            <option value="No. of Orders Low to High">No. of Orders Low to High</option>
                                            <option value="Last Order (earliest to latest)">Last Order (earliest to latest)</option>
                                            <option value="Last Order( latest to earliest)">Last Order( latest to earliest)</option>
                                            <option value="GP High to Low">GP High to Low</option>
                                            <option value="GP Low to High">GP Low to High</option>
                                            <option value="Account Status Longest Terms First">Account Status Longest Terms First</option>
                                            <option value="Account Status Shortest Terms First">Account Status Shortest Terms First</option>
                                            <option value="Industry A-Z">Industry A-Z</option>
                                            <option value="Industry Z-A">Industry Z-A</option>
                                            <option value="Hottest to Coldest Data">Hottest to Coldest Data</option>
                                            <option value="Coldest to Hottest Data">Coldest to Hottest Data</option>
                                            <option value="Last Sales Note (earliest to latest)">Last Sales Note (earliest to latest)</option>
                                            <option value="Last Sales Note ( latest to earliest)">Last Sales Note ( latest to earliest)</option>
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
                                                <h5 class="text-center h5-g p-0" >Lead </h5>
                                                <strong class="f-c-b">& Qualified Leads</strong>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="lead_block" data-id="1">
                                                <?php
                                                $flag = 'us.png';
                                                // show sales companies
                                                foreach ($sales_lead_block as $key => $contact)
                                                {
                                                    foreach($sales_address as $address)
                                                    {
                                                        if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                        {
                                                            $flag = $address['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="1" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b><br/>Company : <b class="f-w-700"><?=  $contact['company_name']; ?></b> 
                                                            </h5>
                                                            <p>Position: <strong><?=  $contact['job_title']; ?></strong></p>
                                                            <p>Department: <strong><?=  $contact['department']; ?></strong></p>
                                                            <p>Location:
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
                                                            <p>Trader: <?=  $contact['trader']; ?> | Spend: <?=  0; ?> </p><p> Enquiry: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                        </div>
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
                                                <h5 class="text-center h5-y p-0" >Suspects</h5>
                                                <strong class="f-c-b">& Suspects Awaiting</strong>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="suspects_block" data-id="2">
                                                <?php
                                                $flag = 'us.png';

                                                // show sales companies
                                                foreach ($sales_suspects_block as $key => $contact) 
                                                {
                                                    foreach($sales_address as $address)
                                                    {
                                                        if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                        {
                                                            $flag = $address['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="2" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" /> 
                                                                Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b><br/>Company : <b class="f-w-700"><?=  $contact['company_name']; ?></b> 
                                                            </h5>
                                                            <p>Position: <strong><?=  $contact['job_title']; ?></strong></p>
                                                            <p>Department: <strong><?=  $contact['department']; ?></strong></p>
                                                             <p>Location:
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
                                                            <p>Trader: <?=  $contact['trader']; ?> | Spend: <?=  0; ?> </p><p> Enquiry: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                        </div>
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
                                                 <h5 class="text-center h5-grn p-0" >Prospects</h5>
                                                 <strong class="f-c-b">& Qualified Prospects & Closable Prospects</strong>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="prospects_block" data-id="3">
                                                <?php
                                                $flag = 'us.png';
                                                // show sales companies
                                                foreach ($sales_prospects_block as $key => $contact) 
                                                {
                                                    foreach($sales_address as $address)
                                                    {
                                                        if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                        {
                                                            $flag = $address['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="3" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" />  
                                                                Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b><br/>Company : <b class="f-w-700"><?=  $contact['company_name']; ?></b> 
                                                            </h5>
                                                            <p>Position: <strong><?=  $contact['job_title']; ?></strong></p>
                                                            <p>Department: <strong><?=  $contact['department']; ?></strong></p>
                                                             <p>Location:
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
                                                            <p>Trader: <?=  $contact['trader']; ?> | Spend: <?=  0; ?> </p><p> Enquiry: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                        </div>
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
                                                <h5 class="text-center p-0 h5-r
                                                color:#000;" >Account Contacts</h5>
                                                <strong class="f-c-b">& Key Account Contacts</strong>
                                            </div>
                                            <div class="connectedSortable col-md-12 p-0" id="key_contact_block" data-id="4">
                                                <?php
                                                $flag = 'us.png';
                                                // show sales companies
                                                foreach ($sales_key_contact_block as $key => $contact) 
                                                {
                                                    foreach($sales_address as $address)
                                                    {
                                                        if($address['address_type'] == 'head_office_address' && $address['sales_contact_id'] == $contact['id'])
                                                        {
                                                            $flag = $address['flag'];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-md-12 m-b-3 move ui-state-default" data-id="4" id="<?= $contact['id']; ?>">
                                                        <div class="col-md-12 c-b">
                                                            <h5 class="f-w-400">
                                                                <img style="max-width: 32px;padding: 1px; " src="<?= base_url(); ?>uploads/flags/<?= $flag; ?>" />  
                                                                Name  : <b class="f-w-700"><?= $contact['fname'].' '.$contact['lname']; ?> </b><br/>Company : <b class="f-w-700"><?=  $contact['company_name']; ?></b> 
                                                            </h5>
                                                            <p>Position: <strong><?=  $contact['job_title']; ?></strong></p>
                                                            <p>Department: <strong><?=  $contact['department']; ?></strong></p>
                                                             <p>Location:
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
                                                            <p>Trader: <?=  $contact['trader']; ?> | Spend: <?=  0; ?> </p><p> Enquiry: <?=  0; ?> | Quoted: <?=  0; ?> | Order: <?=  0; ?></p>
                                                        </div>
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
                <h5 class="modal-title mt-0">Import Sales Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('admin/sales/archieve'); ?>" method="post">
                <div class="card">
                    <div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
                        <div class="button-items">
                        <?php $this->load->helper('form'); ?>
                        <?php echo form_open(base_url() . 'admin/product/importdata' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
                            <div class="form-group">
                                <input type="file" name="file"  class="form-control" style="background: none;padding: 0;margin-top: 15px;">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius">Import CSV</button>
                            <?php echo form_close();?>
                            <div class="download-sample text-center">
                                <a download class="btn btn-link" href="<?= base_url() ?>uploads/sample/samplesalescontact.csv">Download Sample CSV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Archived Modal -->
<div class="modal fade bs-example-modal-center" id="archieved_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Are you sure ? you want to archieve this contact !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('admin/sales/archieve'); ?>" method="post">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" class="contact_id" name="id">
                <div class="modal-body">
                    <label>Resoan</label>
                    <textarea placeholder="Resoan" class="form-control" rows="4" name="archieved_resoan" required></textarea>
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

    $('.import_csv').on('click', function(){
        $('#import_contact').modal('show');
    });

    $('.archieve').on('click', function(){
        var id = $(this).attr('id');
        $('.contact_id').val(id);
        $('#archieved_modal').modal('show');
    });

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