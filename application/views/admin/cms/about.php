<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <h3 class="page-title"><b>About</b><hr>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row">
        <?php foreach ($about as $about) { ?>
        <!-- First form End-->
        <form action="<?php echo base_url(); ?>admin/cms/update_about" method="POST" enctype="multipart/form-data">
          <div class="col-lg-12">
            <input type="hidden" name="id" value="<?= $about['id'] ?>">
            <div class="form-group">
              <h4>Header Section</h4><hr>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="header_title" class="form-control" value="<?php echo $about['header_title']; ?>" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="header_description" class="form-control" placeholder="" /><?php echo $about['header_description']; ?></textarea>
                </div>
                 <?php if (isset($about['image'])&& !empty($about['image'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 357 x 635 Pixal)</small>
                  <br>
                  <input type="file" name="image" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image']; ?>" height="50" width="50" />
                </div>
                <?php endif ?>
                <?php if (isset($about['2_image'])&& !empty($about['2_image'])): ?>
                <div class="col-md-12">
                  <label>Image 2: </label>
                  <small style="color: green">(Size: 357 x 635 Pixal)</small>
                  <br>
                  <input type="file" name="2_image" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['2_image']; ?>" height="50" width="50" />
                </div>
                <?php endif ?>
              </div> 
            </div> 
            <br>
            <div class="form-group">
              <h4>Middle Section</h4><hr>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title" class="form-control" value="<?php echo $about['middle_title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description" class="form-control" placeholder="" /><?php echo $about['middle_description']; ?></textarea>
                </div>
                <?php if (isset($about['image1'])&& !empty($about['image1'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>
                  <input type="file" name="image1" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image1']; ?>" height="50" width="50" />

                </div>
                <?php endif ?>
              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title_1" class="form-control" value="<?php echo $about['middle_title_1']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description_1" class="form-control" placeholder="" /><?php echo $about['middle_description_1']; ?></textarea>
                </div>
                <?php if (isset($about['image2'])&& !empty($about['image2'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>
                 
                    <input type="file" name="image2" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image2']; ?>" height="50" width="50" />


                </div>
                <?php endif ?>
              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title_2" class="form-control" value="<?php echo $about['middle_title_2']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description_2" class="form-control" placeholder="" /><?php echo $about['middle_description_2']; ?></textarea>
                </div>
                <?php if (isset($about['image3'])&& !empty($about['image3'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>
                  
                  <input type="file" name="image3" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image3']; ?>" height="50" width="50" />


                </div>
                <?php endif ?>
              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title_3" class="form-control" value="<?php echo $about['middle_title_3']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description_3" class="form-control" placeholder="" /><?php echo $about['middle_description_3']; ?></textarea>
                </div>
                <?php if (isset($about['image4'])&& !empty($about['image4'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>

                   <input type="file" name="image4" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image4']; ?>" height="50" width="50" />

                </div>
                <?php endif ?>
              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title_4" class="form-control" value="<?php echo $about['middle_title_4']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description_4" class="form-control" placeholder="" /><?php echo $about['middle_description_4']; ?></textarea>
                </div>
                <?php if (isset($about['image5'])&& !empty($about['image5'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>

                   <input type="file" name="image5" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image5']; ?>" height="50" width="50" />

                 
                </div>
                <?php endif ?>
              </div> <br>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="middle_title_5" class="form-control" value="<?php echo $about['middle_title_5']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="middle_description_5" class="form-control" placeholder="" /><?php echo $about['middle_description_5']; ?></textarea>
                </div>
                <?php if (isset($about['image6'])&& !empty($about['image6'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 58 x 49 Pixal)</small>
                  <br>

                   <input type="file" name="image6" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image6']; ?>" height="50" width="50" />

                 
                </div>
                <?php endif ?>
              </div> 
            </div>
        

            <br>
         
            <div class="form-group">
              <h4>Footer Section</h4><hr>
              <div class="row">
                <div class="col-md-12">
                  <label>Title:</label>
                  <input type="text" name="footer_title" class="form-control" value="<?php echo $about['footer_title']; ?>" placeholder="" />
                </div>
                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea type="text" name="footer_description" class="form-control" placeholder="" /><?php echo $about['footer_description']; ?></textarea>
                </div>
                <?php if (isset($about['image7'])&& !empty($about['image7'])): ?>
                <div class="col-md-12">
                  <label>Image:</label>
                  <small style="color: green">(Size: 360 x 540 Pixal)</small>
                  <br>

                   <input type="file" name="image7" id="fileToUpload" >
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image7']; ?>" height="50" width="50" />

                 
                </div>
                <?php endif ?>
              </div> 
            </div> 
         


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




