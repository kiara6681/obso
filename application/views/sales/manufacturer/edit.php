
 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Other</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Manufacturer</a></li>
                                        <li class="breadcrumb-item active">Edit Manufacturer</li>
                                    </ol>

                                  

                                </div>
                             
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        

                                        <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                                    <?php if (isset($error_msg)): ?>
                                        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>
                                    <?php endif ?>
                                        <form class="" action="<?php echo base_url('sales/manufacturer/update'); ?>" method="POST" enctype="multipart/multipart/form-data">
                                            <div class="form-group">
                                                <label>Edit Manufaturer</label>
                                                <input type="text" name="manufacturer" class="form-control" required placeholder="Type something" value="<?php echo $manufacturer->manufacturer; ?>" />
                                            </div>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status">
                                                    <option value="<?php echo $manufacturer->status ?>" <?php if($manufacturer->status ==0) { ?> selected="selected" <?php } ?>>Active</option>
                                                    <option value="<?php echo $manufacturer->status ?>" <?php if($manufacturer->status ==1) { ?> selected="selected" <?php } ?>>In-active</option>
                                                </select>
                                                <input type="hidden" name="manfid" value="<?php echo $manufacturer->id; ?>">
                                            </div>
                                        </div>
                                              
                                            <div class="form-group mb-0">
                                                 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            <div class="form-group">
                            <div>
                                                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <a href="<?php echo base_url();?>sales/manufacturer/all_manufacturer_list" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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