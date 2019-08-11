<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    check_login_user();
    $this->load->model('common_model');
    $this->load->model('login_model');
  }
  
  public function home($id=null){

    $data = array();
    $data['page_title'] = 'Home';
    $this->load->view('admin/layout/header', $data);
    $data['home']=$this->common_model->get_single_home($id);
    $this->load->view('admin/cms/home', $data);
    $this->load->view('admin/layout/footer', $data);

  }

  public function update_home($id=""){
    if ($_POST) {
        $manfid = $_POST['id'];
        if(isset($_FILES['image']['name'])&& !empty($_FILES['image']['name']))
        {    
        $image = $_FILES['image']['name'];
         move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
         $data ['image'] = $image;
        }
        if(isset($_FILES['favicon']['name'])&&!empty($_FILES['favicon']['name']))
        {
        $fav = $_FILES['favicon']['name'];
        move_uploaded_file($_FILES['favicon']['tmp_name'], 'uploads/' . $fav);
        $data['favicon'] = $fav;
        }   
        $data['website_title'] = $_POST['website_title'];
        $data['meta_tag'] = $_POST['meta_tag'];
        $data['website_keyword'] = $_POST['website_keyword'];
        $data['website_description'] = $_POST['website_description'];
        $data['admin_email'] = $_POST['admin_email'];
              
        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'home');
        $this->session->set_flashdata('msg', 'home updated Successfully');
        }
        redirect(base_url('admin/cms/home/'.$manfid));
        
    }
}


  public function contact(){
    $data = array();
    $data['page_title'] = 'contact';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_single_contact();
    $this->load->view('admin/cms/contact', $data);
    $this->load->view('admin/layout/footer', $data);
  }

  public function edit_contact(){
    
    if ($_POST) {
        $data = array(
               'heading' => $_POST['heading'],
               'description' => $_POST['description'],
               'address' => $_POST['address'],
               'phone' => $_POST['phone'],
               'email' => $_POST['email'],
              
            );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, 1,'contact');

    }


    $data = array();
    $data['page_title'] = 'contact';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_single_contact();
    $this->load->view('admin/cms/contact', $data);
    $this->load->view('admin/layout/footer', $data);
  }

  public function social($id=null){
    $data = array();
    $data['page_title'] = 'social';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_single_social($id);
    $this->load->view('admin/cms/social', $data);
    $this->load->view('admin/layout/footer', $data);
  }

   public function edit_social($id=""){
    
    if ($_POST) {
        $manfid = $_POST['id'];
        $data['facebbok_url'] = $_POST['facebook'];
        $data['instagram_url'] = $_POST['instagram'];
        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'social');
        $this->session->set_flashdata('msg', 'home updated Successfully');
        }
        redirect(base_url('admin/cms/social/'.$manfid));

    }

}

public function about($id=null){
    $data = array();
    $data['page_title'] = 'about';
    $this->load->view('admin/layout/header', $data);
    $data['about']=$this->common_model->get_single_about($id);
    $this->load->view('admin/cms/about', $data);
    $this->load->view('admin/layout/footer', $data);
  }


public function update_about($id=""){
    if ($_POST) {
        $manfid = $_POST['id']; 

        if(isset($_FILES['image']['name'])&& !empty($_FILES['image']['name']))
        {    
        $image = $_FILES['image']['name'];
         move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
         $data ['image'] = $image;
        }
        if(isset($_FILES['2_image']['name'])&& !empty($_FILES['2_image']['name']))
        {    
        $image_2 = $_FILES['2_image']['name'];
         move_uploaded_file($_FILES['2_image']['tmp_name'], 'uploads/' . $image_2);
         $data ['2_image'] = $image_2;
        }

        if(isset($_FILES['image1']['name'])&& !empty($_FILES['image1']['name']))
        {    
        $image1 = $_FILES['image1']['name'];
         move_uploaded_file($_FILES['image1']['tmp_name'], 'uploads/' . $image1);
         $data ['image1'] = $image1;
        }

        if(isset($_FILES['image2']['name'])&& !empty($_FILES['image2']['name']))
        {    
        $image2 = $_FILES['image2']['name'];
         move_uploaded_file($_FILES['image2']['tmp_name'], 'uploads/' . $image2);
         $data ['image2'] = $image2;
        }

        if(isset($_FILES['image3']['name'])&& !empty($_FILES['image3']['name']))
        {    
        $image3 = $_FILES['image3']['name'];
         move_uploaded_file($_FILES['image3']['tmp_name'], 'uploads/' . $image3);
         $data ['image3'] = $image3;
        }

        if(isset($_FILES['image4']['name'])&& !empty($_FILES['image4']['name']))
        {    
        $image4 = $_FILES['image4']['name'];
         move_uploaded_file($_FILES['image4']['tmp_name'], 'uploads/' . $image4);
         $data ['image4'] = $image4;
        }

        if(isset($_FILES['image5']['name'])&& !empty($_FILES['image5']['name']))
        {    
        $image5 = $_FILES['image5']['name'];
         move_uploaded_file($_FILES['image5']['tmp_name'], 'uploads/' . $image5);
         $data ['image5'] = $image5;
        }

         if(isset($_FILES['image6']['name'])&& !empty($_FILES['image6']['name']))
        {    
        $image6 = $_FILES['image6']['name'];
         move_uploaded_file($_FILES['image6']['tmp_name'], 'uploads/' . $image6);
         $data ['image6'] = $image6;
        }

         if(isset($_FILES['image7']['name'])&& !empty($_FILES['image7']['name']))
        {    
        $image7 = $_FILES['image7']['name'];
         move_uploaded_file($_FILES['image7']['tmp_name'], 'uploads/' . $image7);
         $data ['image7'] = $image7;
        }

       

                $data['header_title'] = $_POST['header_title'];
                $data['header_description'] = $_POST['header_description'];
                $data['middle_title'] = $_POST['middle_title'];
                $data['middle_description'] = $_POST['middle_description'];
                $data['middle_title_1'] = $_POST['middle_title_1'];
                $data['middle_description_1'] = $_POST['middle_description_1'];
                $data['middle_title_2'] = $_POST['middle_title_2'];
                $data['middle_description_2'] = $_POST['middle_description_2'];
                $data['middle_title_3'] = $_POST['middle_title_3'];
                $data['middle_description_3'] = $_POST['middle_description_3'];
                $data['middle_title_4'] = $_POST['middle_title_4'];
                $data['middle_description_4'] = $_POST['middle_description_4'];
                $data['middle_title_5'] = $_POST['middle_title_5'];
                $data['middle_description_5'] = $_POST['middle_description_5'];
                $data['footer_title'] = $_POST['footer_title'];
                $data['footer_description'] = $_POST['footer_description'];
                    
          
       
        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'about');
        $this->session->set_flashdata('msg', 'about updated Successfully');
        }
        redirect(base_url('admin/cms/about/'.$manfid));
    }
}


public function home_front($id=""){
    $data = array();
    $data['page_title'] = 'home_front';
    $this->load->view('admin/layout/header', $data);
    $data['home_front']=$this->common_model->get_single_home_front($id);
    $this->load->view('admin/cms/home_front', $data);
    $this->load->view('admin/layout/footer', $data);
  }


public function update_home_front($id=""){
    if ($_POST) {
        $manfid = $_POST['id']; 
       
        if(isset($_FILES['image']['name'])&& !empty($_FILES['image']['name']))
        {    
        $image = $_FILES['image']['name'];
         move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
         $data ['image'] = $image;
        }

         if(isset($_FILES['image_1']['name'])&& !empty($_FILES['image_1']['name']))
        {    
        $image_1 = $_FILES['image_1']['name'];
         move_uploaded_file($_FILES['image_1']['tmp_name'], 'uploads/' . $image_1);
         $data ['image_1'] = $image_1;
        }

         if(isset($_FILES['image_2']['name'])&& !empty($_FILES['image_2']['name']))
        {    
        $image_2 = $_FILES['image_2']['name'];
         move_uploaded_file($_FILES['image_2']['tmp_name'], 'uploads/' . $image_2);
         $data ['image_2'] = $image_2;
        }

        $data['main_title'] = $_POST['main_title'];
        $data['main_description'] = $_POST['main_description'];
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['url_one'] = $_POST['url_one'];
        $data['title_1'] = $_POST['title_1'];
        $data['description_1'] = $_POST['description_1'];
        $data['url_two'] = $_POST['url_two'];
        $data['title_2'] = $_POST['title_2'];
        $data['description_2'] = $_POST['description_2'];
        $data['url_three'] = $_POST['url_three'];
        $data['category_title'] = $_POST['category_title'];
        $data['category_description'] = $_POST['category_description'];

        $data['part_title'] = $_POST['part_title'];
        $data['part_description'] = $_POST['part_description'];


        $data['part_cat_title'] = $_POST['part_cat_title'];
        $data['part_cat_description'] = $_POST['part_cat_description'];
        $data['part_cat_heading'] = $_POST['part_cat_heading'];
                
        $data = $this->security->xss_clean($data);
        if (!empty($data)) {
        $this->common_model->update($data, $manfid,'home_front');
        $this->session->set_flashdata('msg', 'home_front updated Successfully');
        }
        redirect(base_url('admin/cms/home_front/'.$manfid));
    }
}



public function slider(){
    $data = array();
    $data['page_title'] = 'slider';
    $this->load->view('admin/layout/header', $data);
    $this->load->view('admin/cms/slider', $data);
    $this->load->view('admin/layout/footer', $data);
  }

  public function terms_and_conditions(){
    $data = array();
    $data['page_title'] = 'terms_and_conditions';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_terms_and_conditions();
    $this->load->view('admin/cms/terms_and_conditions', $data);
    $this->load->view('admin/layout/footer', $data);
  }

   public function edit_terms_and_conditions(){
    
    if ($_POST) {
        $data = array(
               'description' => $_POST['description'],
            );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, 1,'terms_and_conditions');

    }

    $data = array();
    $data['page_title'] = 'edit_terms_and_conditions';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_terms_and_conditions();
    $this->load->view('admin/cms/terms_and_conditions', $data);
    $this->load->view('admin/layout/footer', $data);


}
  

  public function return_policy(){
    $data = array();
    $data['page_title'] = 'return_policy';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_return_policy();
    $this->load->view('admin/cms/return_policy', $data);
    $this->load->view('admin/layout/footer', $data);
  }

   public function edit_return_policy(){
    
    if ($_POST) {
        $data = array(
               'description' => $_POST['description'],
            );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, 1,'return_policy');

    }

    $data = array();
    $data['page_title'] = 'edit_return_policy';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_return_policy();
    $this->load->view('admin/cms/return_policy', $data);
    $this->load->view('admin/layout/footer', $data);


}

public function privacy_policy(){
    $data = array();
    $data['page_title'] = 'privacy_policy';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_privacy_policy();
    $this->load->view('admin/cms/privacy_policy', $data);
    $this->load->view('admin/layout/footer', $data);
  }

   public function edit_privacy_policy(){
    
    if ($_POST) {
        $data = array(
               'description' => $_POST['description'],
            );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, 1,'privacy_policy');

    }

    $data = array();
    $data['page_title'] = 'edit_privacy_policy';
    $this->load->view('admin/layout/header', $data);
    $data['data']=$this->common_model->get_privacy_policy();
    $this->load->view('admin/cms/privacy_policy', $data);
    $this->load->view('admin/layout/footer', $data);


}

}