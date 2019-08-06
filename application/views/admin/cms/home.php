<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <h3 class="page-title"><b>Home</b><hr>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
    
      <div class="row">
   
      <!-- First form End-->
       <?php 
       foreach ($home as $value) {
         ?> 
      <div class="col-lg-7">
        
        <form action="<?php echo base_url(); ?>admin/cms/update_home" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $value['id'] ?>">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Website Title:</label>
                <input type="text" name="website_title" class="form-control" value="<?php echo $value['website_title']; ?>" placeholder="" />
              </div>
              <div class="col-md-12">
                <label>Meta Tag:</label>
                <input type="text" name="meta_tag" class="form-control" value="<?php echo $value['meta_tag']; ?>" placeholder="" />
              </div>
             
              <div class="col-md-12">
                <label>Website Keywords:</label>
                <input type="text" name="website_keyword" class="form-control" value="<?php echo $value['website_keyword']; ?>" placeholder="" />
              </div>
              
              
              <div class="col-md-12">
                <label>Website Description:</label>
                <textarea type="text" name="website_description" class="form-control" placeholder="" /><?php echo $value['website_description']; ?></textarea>
              </div>
              
               <div class="col-md-12">
                <label>Logo:</label>
                <small style="color: red">(Size: 63pxX137px)</small>
                <br>
                <input type="file" name="image" id="fileToUpload">
              </div>

                <br>
                <?php if (isset($value['image'])&&!empty($value['image'])): ?>
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $value['image']; ?>" height="50px" weight="50px"/>
                </div>
                <?php endif ?>

            

            
               <div class="col-md-12">
                <label>Favicon:</label>
                <small style="color: red">(Size: 16pxX16px)</small>
                <br>
                <input type="file" name="favicon" id="fileToUpload">
              </div>

                  <?php if (isset($value['favicon'])&& !empty($value['favicon'])): ?>
                  <div class="col-md-12">

                      <img src="<?php echo base_url(); ?>uploads/<?php echo $value['favicon']; ?>" height="50px" weight="50px"/>
                  </div>
                  <?php endif ?>
                  
              <div class="col-md-12">
                <label>Admin Email</label>
                <input type="text" name="admin_email" class="form-control" value="<?php echo $value['admin_email']; ?>" placeholder="Enter Admin Email" />
              </div>
              </div>

              
         </div>

            </div>
         
           
         </div> 

         <div class="card" style="margin-top: 100px;padding:10px !important">
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            <div class="col-xl-3 col-md-6 col-sm-6">
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="button" name="cancel" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Update</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
            </div>
          </div>
        </div>
      </div>
   
      </div>
  </form>
      <!-- content -->  
    <?php } ?>
    
  </div>

 


