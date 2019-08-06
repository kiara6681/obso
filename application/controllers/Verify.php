<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
    }
    
    public function index(){
        if(isset($_GET['q']) && !empty($_GET['q'])){
            $user = $this->common_model->get_table_condition('user','verify_string',$_GET['q']);
            
            if(!empty($user)){
                $data = array(
                    'status' => 1,
                    'verify_string' => NULL
                );

                if($this->common_model->edit_option($data, $user['id'], 'user')){
                    $user = $this->common_model->get_table_condition('user','verify_string',$_GET['q']);
                    redirect(base_url('/login'));
                }
            }else{
                echo "No User Found!";exit;    
            }
        }else{
            echo "Something Went Wrong!";exit;
        }
        exit;
    }   
    
}