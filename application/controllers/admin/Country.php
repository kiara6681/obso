<?php

class Country extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
       $data = array();
        $data['page_title'] = 'Country';
         $this->load->view('admin/layout/header', $data);
         $this->load->view('admin/layout/footer', $data);
        $data['main_content'] = $this->load->view('admin/country/add', $data, TRUE);
        $this->load->view('admin/country/add', $data);

    }

    //-- add new manufacturer by admin

     public function add()
    {   
        if ($_POST) {

            $data = array(
                'name' => $_POST['name'],
                'status' => $_POST['status']
            );

            $flag = '';

            // upload flag
            if(!empty($_FILES['flag']['name']))
            {
                $path = './uploads/flags/';

                // create a directory for this employee
                $structure = $path;

                if(!file_exists($structure))
                {
                    mkdir($structure, 0777, true);
                }

                $config['upload_path']          = $structure;
                $config['allowed_types']        = 'bmp|jpg|png|jpeg|gif';
                $config['max_size']             = 1024;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('flag'))
                {
                    $upload_error = array('error' => $this->upload->display_errors());

                    $_SESSION['upload_error'] = $upload_error['error'];
                    $this->session->mark_as_flash('upload_error');
                }
                else
                {
                    $success = $this->upload->data();
                    $employee['image'] = $success['file_name'];
                    $flag = $success['file_name'];
                }
            }

            $data['flag'] = $flag;

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'country');
            $this->session->set_flashdata('msg', 'Country added Successfully');
           redirect(base_url('admin/country/all_country_list')); 
        }
    }
    
    public function update($id="")
    {
        if ($_POST) {

            $manfid = $_POST['maineditid'];

            $data = array(
                'name' => $_POST['name'],
                'status' => $_POST['status']
            );

            // get country infor
            $country_info = $this->common_model->getCountryInfo($manfid);

            $flag = $country_info->flag;
            
            // upload flag
            if(!empty($_FILES['flag']['name']))
            {
                $path = './uploads/flags/';

                // create a directory for this employee
                $structure = $path;

                if(!file_exists($structure))
                {
                    mkdir($structure, 0777, true);
                }

                $config['upload_path']          = $structure;
                $config['allowed_types']        = 'bmp|jpg|png|jpeg|gif';
                $config['max_size']             = 1024;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('flag'))
                {
                    $upload_error = array('error' => $this->upload->display_errors());

                    $_SESSION['upload_error'] = $upload_error['error'];
                    $this->session->mark_as_flash('upload_error');
                }
                else
                {
                    $success = $this->upload->data();
                    $employee['image'] = $success['file_name'];
                    $flag = $success['file_name'];
                }
            }

            $data['flag'] = $flag;

        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'country');
        $this->session->set_flashdata('msg', 'Country updated Successfully');
        }
        redirect(base_url('admin/country/all_country_list'));
        }

        $edtdata =$data['country'] = $this->common_model->get_single_country_info($id);
       
        
    echo '
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT COUNTRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">            
            <div class="modal-body">'; ?>
            <?php $this->load->helper('form'); ?>
                <?php echo form_open(base_url() . 'admin/country/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <?php  echo '<input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->id.'"/>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country Name</label>
                        <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" required placeholder="Type something" value="'.$edtdata->name.'" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country Flag</label>
                        <div class="col-sm-9">
                            <input type="file" name="flag" class="form-control" />
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


    


     public function all_country_list()
    {   
        $result['data']=$this->common_model->get_all_country();
        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/layout/footer', $result);
        $this->load->view('admin/country/country', $result);

    }


     public function delete($id)
    {
        $this->common_model->delete($id,'country'); 
        $this->session->set_flashdata('msg', 'Country deleted Successfully');
        redirect(base_url('admin/country/all_country_list'));
    }



}