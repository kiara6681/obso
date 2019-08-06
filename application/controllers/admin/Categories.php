<?php

class Categories extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
		$data = array();
        $data['page_title'] = 'categories';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/footer', $data);
        $data['main_content'] = $this->load->view('admin/categories/add', $data, TRUE);
        $this->load->view('admin/categories/add', $data);

    }

    //-- add new categories by admin

     public function add()
    {   
        if ($_POST) {

            $data = array(
                'categories' => $_POST['categories'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'categories');
            $this->session->set_flashdata('msg', 'User added Successfully');
           redirect(base_url('admin/categories/all_categories_list')); 
        }
    }


    
    public function update($id="")
    {
        if ($_POST) {

            $manfid = $_POST['maineditid'];

            $data = array(
                'categories' => $_POST['categories'],
                'status' => $_POST['status']
            );

        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'categories');
        $this->session->set_flashdata('msg', 'categories updated Successfully');
        }
        redirect(base_url('admin/categories/all_categories_list'));
        }

        $edtdata =$data['categories'] = $this->common_model->get_single_categories_info($id);
       
        
    echo '
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT categories</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">'; ?>
<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/categories/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                                           <?php  echo '<input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->id.'"/><div class="form-group row">
                                                <label class="col-sm-3 col-form-label">categories</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="categories" class="form-control" required placeholder="Type something" value="'.$edtdata->categories.'" />
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
                           
                            <button type="submit" name="submit" class="form-control" >Submit</button>
                            
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>'; ?>
                  <?php echo form_close();?>
               <?php echo'</div>
             

        </div>';
    }


    


     public function all_categories_list()
    {   

        $result['data']=$this->common_model->get_all_categories();
        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/categories/categories', $result);
        $this->load->view('admin/layout/footer', $result);
    }


     public function delete($id)
    {
        $this->common_model->delete($id,'categories'); 
        $this->session->set_flashdata('msg', 'categories deleted Successfully');
        redirect(base_url('admin/categories/all_categories_list'));
    }



}