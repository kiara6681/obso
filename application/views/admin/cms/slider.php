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
                                        <li class="breadcrumb-item active">All Slider List</li>
                                        
                                    </ol>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">ADD NEW SLIDER</button>

                                    
                              </div>
                              
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>


                                            <tbody>

                                            <?php $i = "1"; foreach ($data as $slider){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $slider['title']; ?></td>
                                                <td><?//php echo $slider['name']; ?></td>
                                                
                                                <td><?php if($slider['status'] == "0") { ?>Active<?php }else{ ?>Inactive <?php } ?></td>

                                                <td><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_product_edit(<?php echo $slider['id']; ?>)"><i class="fas fa-edit"></i></a> | 
                                                    </td>
                                               
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                      


                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

              
            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">ADD NEW COUNTRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                 <?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/country/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" required placeholder="Type something"/>
                        </div>
                    </div>

                   <!--  <div class="form-group row">
                    	<label>Image</label>
                    	<input type="file" class="filestyle" name="slider">
                    </div> -->

                     <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="status" required="required">
                            <option value="0">Active</option>
                            <option value="1">In-active</option>
                        </select>
                    </div>
                                        </div>
                                        <br>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            <button data-dismiss="modal" type="button" class="form-control">Cancel</button>
                            
                        </div>
                        <div class="col-md-3">
                           
                            <button type="submit" name="submit" class="form-control" >Submit</button>
                            
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>
                  <?php echo form_close();?>
                </div>
             

        </div>
    </div><!-- /.modal-content -->
</div>
</div><!-- /.modal-dialog -->

<div class="modal fade bs-example-modal-lgedit" tabindex="-1" id="editform" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content" id="ajax-content-load">
    </div>
  </div>
</div>
      
        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>obso/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>obso/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
       

        <!-- Datatable init js -->
        <script src="<?php echo base_url(); ?>obso/assets/pages/datatables.init.js"></script>        

        <!-- App js -->
        <script src="<?php echo base_url(); ?>obso/assets/js/app.js"></script>

        <script type="text/javascript">
            function get_product_edit(id) {
            $.ajax({
            url: '<?php echo base_url();?>admin/slider/update/' + id ,
            success: function(response)
            {
                jQuery('#ajax-content-load').html(response);
                //alert(response);
            }
        });
    }

        </script>
<style type="text/css">
    .btn-primary {
    background-color: #393e46 !important;
    border: 1px solid #393e46 !important;
}
</style>