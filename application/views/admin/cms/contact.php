<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <h3 class="page-title"><b>Contact</b><hr>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      
  

   

    <div class="row">
    
      <!-- First form End-->
      
      <div class="col-lg-7">
        
       	<form action="<?php echo base_url('admin/cms/edit_contact'); ?>" method="POST" enctype="multipart/multipart/form-data">
       
          <div class="form-group">
            <div class="row">
              <h1>Header Text</h1>
              <div class="col-md-12">
                <label>Heading:</label>
                <input type="text" name="heading" class="form-control" value="<?php echo $data->heading; ?>" placeholder="" />
              </div>  

               <div class="col-md-12">
                <label>Description:</label>
                <textarea type="text" name="description" class="form-control" placeholder="" /><?php echo $data->description; ?></textarea>
              </div>  

           </div>   

           <br>

          <hr><br>
          <div class="form-group">
          	<div class="row">
              <div class="col-md-12">
              	<label>Address:</label>
                <input type="text" name="address" class="form-control" value="<?php echo $data->address; ?>" placeholder="" />
              </div>
             
              <div class="col-md-12">
              	<label>Phone:</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $data->phone; ?>" placeholder="" />
              </div>
             
               <div class="col-md-12">
              	<label>Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $data->email; ?>" placeholder="" />
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
    
  </div>

 


