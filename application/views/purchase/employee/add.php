<!-- DataTables -->
        <link href="<?php echo base_url(); ?>obso/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>obso/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Other</a></li>
                                        <li class="breadcrumb-item active">Add employee1</li>
                                        
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
                                        <form class="" action="<?php echo base_url('admin/employee/add'); ?>" method="POST" enctype="multipart/multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">employee</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="employee" class="form-control" required placeholder="Type something"/>
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status" required="required">
                                                    <option>Select</option>
                                                    <option value="0">Active</option>
                                                    <option value="1">In-active</option>
                                                </select>
                                            </div>
                                        </div>
                                                
                                            <div class="form-group mb-0 text-center">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                                    <div class="form-group">
                                                        <div>
                                                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <a href="<?php echo base_url();?>admin/employee/all_employee_list" class="btn btn-secondary waves-effect">
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