<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_industry extends CI_Controller {

public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

    public function index(){
       $data = array();
        $data['page_title'] = 'Supplier_industry';
         $this->load->view('admin/layout/header', $data);
         
        $data['main_content'] = $this->load->view('admin/supplier_industry/add', $data, TRUE);
        $this->load->view('admin/supplier_industry/add', $data);
        $this->load->view('admin/layout/footer', $data);

    }


 public function add()
    {   
        if ($_POST) {

            $data = array(
                'industry' => $_POST['industry'],
                'status' => $_POST['status'],
                'creation_date' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            $this->common_model->insert($data, 'supplier_industry');
            $this->session->set_flashdata('msg', 'Industry added Successfully');
            redirect(base_url('admin/supplier_industry/all_industry_list')); 
        }
    }


    
    public function update($id="")
    {
       
        if ($_POST) {

            $manfid = $_POST['maineditid'];

            $data = array(
                'industry' => $_POST['industry'],
                'status' => $_POST['status']
            );

        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $manfid,'supplier_industry');
        redirect(base_url('admin/supplier_industry/all_industry_list')); 
            
        }

        $edtdata =$data['industry'] = $this->common_model->get_single_supplier_industry_info($id);
        // $data['page_title'] = 'Edit Industry';
        // $this->load->view('admin/layout/header', $data);
        // $this->load->view('admin/layout/footer', $data);
        // $this->load->view('admin/industry/edit', $data);        


        echo '
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">EDIT INDUSTRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            
                <div class="modal-body">'; ?>
<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'admin/supplier_industry/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                                           <?php  echo '<input type="hidden" name="maineditid" class="form-control" required data-parsley-maxlength="6" placeholder="Part No." value="'.$edtdata->id.'"/><div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Industry</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="industry" class="form-control" required placeholder="Type something" value="'.$edtdata->industry.'" />
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



     public function all_industry_list()
    {   

        $result['data']=$this->common_model->get_all_supplier_industry();
        $this->load->view('admin/layout/header', $result);
        $this->load->view('admin/supplier_industry/industry', $result);
        $this->load->view('admin/layout/footer', $result);
    }


     public function delete($id)
    {
        $this->common_model->delete($id,'supplier_industry'); 
        $this->session->set_flashdata('msg', 'Industry deleted Successfully');
        redirect(base_url('admin/supplier_industry/all_industry_list'));
    }



}