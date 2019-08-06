<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <h3 class="page-title"><b>Home Front</b><hr>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row">
        <?php foreach ($home_front as $home_front) { ?>
        <!-- First form End-->
        <form action="<?php echo base_url(); ?>admin/cms/update_home_front" method="POST" enctype="multipart/form-data">
          <div class="col-lg-12">
            <input type="hidden" name="id" value="<?= $home_front['id'] ?>">
            <div class="form-group">
              <h4>Header Section</h4><hr>
              <div class="row">
                <div class="col-md-12">
                  <label>Main Title:</label>
                  <input type="text" name="main_title" class="form-control" value="<?php echo $home_front['main_title']; ?>" />
                </div>
                
                
              </div> 
            </div> 
            <br>
            <div class="form-group">
              <h4>Middle Section</h4><hr>
              <div class="row">
                <div class="col-md-12">
                  <label>Title 1:</label>
                  <input type="text" name="title" class="form-control" value="<?php echo $home_front['title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description 1:</label>
                  <textarea type="text" name="description" class="form-control" placeholder="" /><?php echo $home_front['description']; ?></textarea>
                </div>
                 <?php if (isset($home_front['image'])&& !empty($home_front['image'])): ?>
                <div class="col-md-12">
                  <label>Image 1:</label>
                  <small style="color: green;">(Size: 99 x 99 Pixal)</small>
                  <br>
                  <input type="file" name="image" id="fileToUpload">
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $home_front['image']; ?>" height="50" width="50" />
                  
                </div>
                 <?php endif ?>

              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title 2:</label>
                  <input type="text" name="title_1" class="form-control" value="<?php echo $home_front['title_1']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description 2:</label>
                  <textarea type="text" name="description_1" class="form-control" placeholder="" /><?php echo $home_front['description_1']; ?></textarea>
                </div>
                 <?php if (isset($home_front['image_1'])&& !empty($home_front['image_1'])): ?>
                <div class="col-md-12">
                  <label>Image 2:</label>
                  <small style="color: green">(Size: 99 x 99 Pixal)</small>
                  <br>
                 
                    <input type="file" name="image_1" id="fileToUpload">
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $home_front['image_1']; ?>" height="50" width="50" />
                  


                </div>
                 <?php endif ?>
              </div> <br>

               <div class="row">
                <div class="col-md-12">
                  <label>Title 3:</label>
                  <input type="text" name="title_2" class="form-control" value="<?php echo $home_front['title_2']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description 3:</label>
                  <textarea type="text" name="description_2" class="form-control" placeholder="" /><?php echo $home_front['description_2']; ?></textarea>
                </div>
                <?php if (isset($home_front['image_2'])&& !empty($home_front['image_2'])): ?>
                <div class="col-md-12">
                  <label>Image 3:</label>
                   <small style="color: green">(Size: 99 x 99 Pixal)</small>
                  <br>
                 
                    <input type="file" name="image_2" id="fileToUpload">
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $home_front['image_2']; ?>" height="50" width="50" />



                </div>
                <?php endif ?>
              </div> <br>

              <div class="row">
                <div class="col-md-12">
                  <label>Category Title:</label>
                  <input type="text" name="category_title" class="form-control" value="<?php echo $home_front['category_title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Category Description 3:</label>
                  <textarea type="text" name="category_description" class="form-control" placeholder="" /><?php echo $home_front['category_description']; ?></textarea>
                </div>
               
              </div><br>  <h4>Middle Section 1 </h4><hr><br>

               <div class="row">
                <div class="col-md-12">
                  <label>Part Title:</label>
                  <input type="text" name="part_title" class="form-control" value="<?php echo $home_front['part_title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Part Description :</label>
                  <textarea type="text" name="part_description" class="form-control" placeholder="" /><?php echo $home_front['part_description']; ?></textarea>
                </div>
               
              </div> <br>
               <h4>Middle Section 2</h4><hr>

              <br>

               <div class="row">
                <div class="col-md-12">
                  <label>Part Category Name:</label>
                  <input type="text" name="part_cat_title" class="form-control" value="<?php echo $home_front['part_cat_title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Part Category Description :</label>
                  <textarea type="text" name="part_cat_description" class="form-control" placeholder="" /><?php echo $home_front['part_cat_description']; ?></textarea>
                </div>

                <div class="col-md-12">
                  <label>Part Category Title:</label>
                  <input type="text" name="part_cat_heading" class="form-control" value="<?php echo $home_front['part_cat_heading']; ?>" placeholder="" />
                </div>
               
              </div> <br>
             


            <div class="card" style="margin-top: 100px;padding:10px !important">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12"></div>
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

         
        </form>
        <!-- content -->
      <?php } ?>
      </div>
    </div>
  </div>
</div>




