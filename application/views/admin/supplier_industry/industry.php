 <link href="<?php echo base_url(); ?>obso/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>obso/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">All Industry Lists</h4>
                                    
                                </div>
                                <div class="col-sm-6 text-right">

                                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">ADD NEW INDUSTRY</button>
                                    
                                   
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
                                                <th>Industry</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>


                                            <tbody>

                                            <?php $i = "1"; foreach ($data as $manufacturer){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $manufacturer['industry']; ?></td>
                                                <td><?php if($manufacturer['status'] == "0") { ?>Active<?php }else{ ?>Inactive <?php } ?></td>
                                                <td><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_product_edit(<?php echo $manufacturer['id']; ?>)"><i class="fas fa-edit"></i></a> | 
                                                    <a href="<?php echo base_url('admin/supplier_industry/delete/'.$manufacturer['id']) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" data-toggle="tooltip" data-original-title="Delete" class="far fa-trash-alt"></a></td>
                                               
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                      

                    </div>
                </div>
            </div>

               



        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">ADD NEW INDUSTRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                 <?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/supplier_industry/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Industry</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="industry" class="form-control" required placeholder="Type something"/>
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status" required="required">
                                                   
                                                    <option value="0">Active</option>
                                                    <option value="1">In-active</option>
                                                </select>
                                            </div>
                                        </div>

                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="col-md-12">
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            <button data-dismiss="modal" type="button" class="form-control" >Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <button type="submit" name="submit" class="form-control" >Submit</button>
                            </div>
                        </div>
                        
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

<!-- <div class="modal fade bs-example-modal-lgedit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT INDUSTRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">

                 <?//php $this->load->helper('form'); ?>

                    <?//php echo form_open(base_url() . 'admin/industry/add' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Industry1</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="industry" class="form-control" required placeholder="Type something"/>
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

                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="col-md-12">
                              <input type="hidden" name="<?//=$this->security->get_csrf_token_name();?>" value="<?//=$this->security->get_csrf_hash();?>" />
                            <button type="button" class="form-control" >Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <button type="submit" name="submit" class="form-control" >Submit</button>
                            </div>
                        </div>
                        
                    </div>
                  <?//php echo form_close();?>
                </div>
             

        </div>
    </div>
</div>
</div> -->

      
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
            url: '<?php echo base_url();?>admin/supplier_industry/update/' + id ,
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