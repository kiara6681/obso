<?php

class Manufacturer extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
       $data = array();
        $data['page_title'] = 'Manufacturer';
         $this->load->view('warehouse/layout/header', $data);
         $this->load->view('warehouse/layout/footer', $data);
        $data['main_content'] = $this->load->view('warehouse/manufacturer/add', $data, TRUE);
        $this->load->view('warehouse/manufacturer/add', $data);

    }

    //-- add new manufacturer by admin

     public function add()
    {   
        if ($_POST) {

            $data = array(
                'manufacturer' => $_POST['manufacturer'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'manufacturer');
            $this->session->set_flashdata('msg', 'User added Successfully');
           redirect(base_url('warehouse/manufacturer/all_manufacturer_list')); 
        }
    }


    
    public function update($id="")
    {
        if ($_POST) {

            $manfid = $_POST['maineditid'];

            $data = array(
                'manufacturer' => $_POST['manufacturer'],
                'status' => $_POST['status']
            );

        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'manufacturer');
        $this->session->set_flashdata('msg', 'Manufacturer updated Successfully');
        }
        redirect(base_url('warehouse/manufacturer/all_manufacturer_list'));
        }

        $edtdata =$data['manufacturer'] = $this->common_model->get_single_manufacturer_info($id);
       
        
    echo '<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT MANUFACTURER</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">'; ?>
<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'warehouse/manufacturer/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                                           <?php  echo '<input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->id.'"/><div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Manufacturer</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="manufacturer" class="form-control" required placeholder="Type something" value="'.$edtdata->manufacturer.'" />
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
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
                            
                 
                <button type="button" class="form-control" href="<?php echo base_url();?>warehouse/manufacturer/all_manufacturer_list">Cancel</button>
                            
                        </div>
                        <div class="col-md-3">
                           
                            <button type="submit" name="submit" class="form-control" >Submit</button>
                            
                        </div>
                        <div class="col-md-3"></div>
                        
                    </div>'; ?>
                  <?php echo form_close();?>
               <?php echo'</div>
             

        </div>
    </div>
</div>';
    }


    


     public function all_manufacturer_list()
    {   

        $result['data']=$this->common_model->get_all_manufacturer();
        $this->load->view('warehouse/layout/header', $result);
        $this->load->view('warehouse/layout/footer', $result);
        $this->load->view('warehouse/manufacturer/manufacturers', $result);

    }


     public function delete($id)
    {
        $this->common_model->delete($id,'manufacturer'); 
        $this->session->set_flashdata('msg', 'Manufacturer deleted Successfully');
        redirect(base_url('warehouse/manufacturer/all_manufacturer_list'));
    }



}