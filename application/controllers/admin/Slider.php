<?php

class Slider extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
       $data = array();
        $data['page_title'] = 'Slider';
         $this->load->view('admin/layout/header', $data);
        $data['main_content'] = $this->load->view('admin/slider/add', $data, TRUE);
        $this->load->view('admin/slider/add', $data);
        $this->load->view('admin/layout/footer', $data);

    }

    //-- add new slider by admin

     public function add()
    {   
        if ($_POST) {

            $data = array(
                 'title' => $_POST['title'],
                 'description' => $_POST['description'],
                'image' => $_POST['image'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'slider');
            $this->session->set_flashdata('msg', 'User added Successfully');
           redirect(base_url('admin/slider/all_slider_list')); 
        }
    }


    
    public function update($id="")
    {
        if ($_POST) {

            $manfid = $_POST['maineditid'];

            if(isset($_FILES['image']['name'])&& !empty($_FILES['image']['name']))
                    {    
                    $image = $_FILES['image']['name'];
                     move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
                     $data ['image'] = $image;
                    }

            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['status'] = $_POST['status'];
            

            
        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'slider');
        $this->session->set_flashdata('msg', 'slider updated Successfully');
        }
        redirect(base_url('admin/slider/all_slider_list'));
        
    }

        $edtdata =$data['slider'] = $this->common_model->get_single_slider_info($id);
        
        
    echo '
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT MANUFACTURER</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">'; ?>
<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/slider/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                                           <?php  echo '<input type="hidden" name="maineditid" class="form-control"  data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->id.'"/>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Title</label>
    <div class="col-sm-9">
        <input type="text" name="title" class="form-control"  placeholder="Type something" value="'.$edtdata->title.'" />
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-3 col-form-label">Description</label>
    <div class="col-sm-9">
        <input type="text" name="description" class="form-control"  placeholder="Type something" value="'.$edtdata->description.'" />
    </div>
</div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Image</label>
       
        <div class="col-sm-9">
            <input type="file" name="image" class="form-control"  />
        </div>
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
         <p style="color:green;">(Size : 404 x 1400 pixal)</p>
         </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
            <img src="'.base_url().'uploads/'.$edtdata->image.'" height="50px" weight="50px"/>
        </div>

    </div>

   


        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <select name="status" class="form-control">'; ?>
                          <option value="0" <?php if($edtdata->status == "0") {?> selected="selected" <?php } ?>>Active</option>
                          <option value="1" <?php if($edtdata->status == "1") {?> selected="selected" <?php } ?>>Inactive</option>
                          <?php 
                        echo '</select>
                                            </div>
                                        </div>
                                        <br>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            
                 
                <button data-dismiss="modal" type="button" class="form-control" >Cancel</button>
                            
                        </div>
                        <div class="col-md-3">
                           
                            <button type="submit" name="submit" class="form-control" >Update</button>
                            
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>'; ?>
                  <?php echo form_close();?>
               <?php echo'</div>
             

        </div>';
    }


    


     public function all_slider_list()
    {   

        $result['data']=$this->common_model->get_all_slider();
        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/slider/slider', $result);
        $this->load->view('admin/layout/footer', $result);
        

    }


     public function delete($id)
    {
        $this->common_model->delete($id,'slider'); 
        $this->session->set_flashdata('msg', 'slider deleted Successfully');
        redirect(base_url('admin/slider/all_slider_list'));
    }



}