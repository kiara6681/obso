<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <h3 class="page-title"><b>Social</b><hr>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
    <div class="row">
     <?php foreach ($data as $data) { ?>
      <!-- First form End-->
      
      <div class="col-lg-7">
        
       	<form action="<?php echo base_url('admin/cms/edit_social'); ?>" method="POST" enctype="multipart/multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <div class="form-group">
          	<div class="row">
               <div class="col-md-12">
              	<label>Linkdin Link:</label>
                <input type="url" name="facebook" class="form-control" value="<?php echo $data['facebbok_url']; ?>" placeholder="" />
              </div>

               <div class="col-md-12">
              	<label>Twitter Link:</label>
                <input type="url" name="instagram" class="form-control" value="<?php echo $data['instagram_url']; ?>" placeholder="" />
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
    <?php } ?>
      </div>
  </form>
      <!-- content -->
    
  </div>

 


