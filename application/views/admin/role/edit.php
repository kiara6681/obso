
 <div class="content-page">
                 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Other</a></li>
                                        <li class="breadcrumb-item active">Edit User Role</li>
                                        
                                    </ol>
                                </div>
                             
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="" action="<?php echo base_url('admin/employee/updateRole'); ?>" method="POST" enctype="multipart/multipart/form-data">
                                            <input type="hidden" name="id" value="<?= isset($data)?$data->id:'' ?>">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Role </label>
                                                <div class="col-sm-10">
                                                <input type="text" name="role" class="form-control" required placeholder="Type role name..."  value="<?= isset($data)?$data->name:'' ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Department</label>
                                                <div class="col-sm-10">
                                                    <select name="department" class="form-control" required>
                                                      <option>---Select---</option>
                                                      <option value="<?= SALES ?>" <?= ($data->department==SALES)?'selected':'' ?>><?= SALES ?></option>
                                                      <option value="<?= PURCHASE ?>" <?= ($data->department==PURCHASE)?'selected':'' ?>><?= PURCHASE ?></option>
                                                      <option value="<?= WAREHOUSE ?>" <?= ($data->department==WAREHOUSE)?'selected':'' ?>><?= WAREHOUSE ?></option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <?php
                                               $permission=explode(',',$data->permission );
                                            ?>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Permission Access:</label>
                                            <div class="col-sm-10">
                                                 <select name="permission_access[]" class="form-control" multiple>
                                                  <option value="#">Select Permission</option>
                                                  <?php
                                                    $menus = unserialize (SIDE_MENUS);
                                                    foreach($menus as $m => $menu):
                                                  ?>
                                                  <option value="<?= $m ?>" <?= (in_array($m, $permission))?'selected':'' ?>><?= $menu ?></option>
                                                  <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                                
                                            <div class="form-group mb-0 text-center">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                                    <div class="form-group">
                                                        <div>
                                                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Update
                                                    </button>
                                                    <a href="<?php echo base_url();?>admin/employee/role" class="btn btn-secondary waves-effect">
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