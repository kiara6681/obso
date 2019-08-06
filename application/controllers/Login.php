<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');


    }


    public function index(){
        $data = array();
        $data['page'] = 'Auth';
        $this->load->model('Common_model');
        $data['roles']=$this->Common_model->get_all_role_permission();
        $this->load->view('admin/login', $data);
    }



 /****************Function login**********************************
     * @type            : Function
     * @function name   : log
     * @description     : Authenticatte when uset try lo login. 
     *                    if autheticated redirected to logged in user dashboard.
     *                    Also set some session date for logged in user.   
     * @param           : null 
     * @return          : null 
     * ********************************************************** */
    public function log(){

        if($_POST){ 
            $query = $this->login_model->validate_user();
            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->first_name,
                        'email' =>$row->email,
                        'role' =>$row->role,
                        'permissions' =>$row->permission_access,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $url = base_url('admin/dashboard');
                }
                if($data['role']  != ADMIN)
                {
                  $department=$this->login_model->getDepartment($row->role);  
                }    
                  
                if($data['role'] == ADMIN){
                    redirect(base_url() . 'admin/dashboard', 'refresh');
                }elseif($department == SALES){
                    redirect(base_url() . SALES.'/dashboard', 'refresh');
                }elseif($department == PURCHASE){
                    redirect(base_url() . PURCHASE.'/dashboard', 'refresh');
                }elseif($department == WAREHOUSE){
                    redirect(base_url() . WAREHOUSE.'/dashboard', 'refresh');
                }
				
            }else{
               redirect(base_url() . 'login', 'refresh');
            }
            
        }else{
            $this->load->view('auth',$data);
        }
    }

 /*     * ***************Function logout**********************************
     * @type            : Function
     * @function name   : logout
     * @description     : Log Out the logged in user and redirected to Login page  
     * @param           : null 
     * @return          : null 
     * ********************************************************** */
    
    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $this->load->model('Common_model');
        $data['roles']=$this->Common_model->get_all_role_permission();
        $data['page'] = 'logout';
        $this->load->view('admin/login', $data);
    }

}