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
                                        <li class="breadcrumb-item active">Add User Role</li>
                                        
                                    </ol>
                                </div>
                             
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                                    <?php if (isset($error_msg)): ?>
                                        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>
                                    <?php endif ?>
                                        <form class="" action="<?php echo base_url('admin/employee/storeRole'); ?>" method="POST" enctype="multipart/multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Employee Role </label>
                                                <div class="col-sm-10">
                                                <input type="text" name="role" class="form-control" required placeholder="Type role name..."/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Department</label>
                                                <div class="col-sm-10">
                                                    <select name="department" class="form-control" required>
                                                      <option>---Select---</option>
                                                     
                                                      <option value="<?= SALES ?>"><?= SALES ?></option>
                                                      <option value="<?= PURCHASE ?>"><?= PURCHASE ?></option>
                                                      <option value="<?= WAREHOUSE ?>"><?= WAREHOUSE ?></option>
                                                    </select> 
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Permission Access:</label>
                                            <div class="col-sm-10">
                                                 <select name="permission_access[]" class="form-control" multiple>
                                                  <option value="#">Select Permission</option>
                                                  <?php
                                                    $menus = unserialize (SIDE_MENUS);
                                                    foreach($menus as $m => $menu):
                                                  ?>
                                                  <option value="<?= $m ?>"><?= $menu ?></option>
                                                  <?php endforeach; ?>
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
                         <div class="row">
                            <div class="col-lg-12">
                                <?php if (isset($user_role)&&!empty($user_role)): ?>
                                    <?php foreach ($user_role as $key => $value): ?>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card p-0 pageB">    
                                              <div class="card-body srchdv">
                                                  <div class="row p-9">
                                                    <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
                                                      
                                                      <div class="col-md-12 m-l-10">
                                                        <p> 
                                                          Role Name: <strong><?= isset($value['name'])?$value['name']:'' ?></strong><br>
                                                        </p>
                                                      </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-4 col-sm-6 p-0">
                                                      <div class="row">
                                                        <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
                                                          <div class="row">

                                                            <div class="col-xl-12">
                                                              <p>
                                                                <?php 
                                                                $permission=explode(',', $value['permission']) 
                                                                ?>
                                                                <?php if (isset($permission)&&!empty($permission)): ?>
                                                                <?php foreach ($permission as $kpermiss): ?>
                                                                <?= $menus[$kpermiss] ?>: <strong></strong><br>         
                                                                <?php endforeach ?>    
                                                                <?php endif ?>
                                                              </p>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-xl-2">
                                                          <div class="test" id="menu1" data-toggle="dropdown" aria-expanded="false"></div>
                                                          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(15px, 0px, 0px);">
                                                            <li role="presentation"><a href="<?= base_url('/admin/employee/roleEdit/').$value['id']; ?>" >Edit</a></li>
                                                            <li role="presentation"><a href="<?= base_url('/admin/employee/roleDelete/').$value['id']; ?>" onclick="return confirm('Are you sure you want to remove from role  list?')" role="menuitem" tabindex="-1">Delete</a></li>
                                                          </ul>
                                                        </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>  
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                                
                            </div> <!-- end col -->
        
                           
                        </div> <!-- end row -->     
   

                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->


            </div>