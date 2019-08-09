<?php
class Common_model extends CI_Model {

    //-- insert function
    public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    //-- edit function 
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return true;
    } 

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }
    
     function getcompanyname($id){
        $this->db->select("company_name,session_id");
        $this->db->from('customer_records');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }
     function getCompanyInfo($id){
        $this->db->select("company_name");
        $this->db->from('companies');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getCountryInfo($country_id){
        $this->db->select("*");
        $this->db->from('country');
        $this->db->where('id', $country_id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getcompanynamee($id){
        $this->db->select("company_name,id");
        $this->db->from('customer_records');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }
    
    function updatecustrecord($action, $id, $table){
        $this->db->where('session_id',$id);
        $this->db->update($table,$action);
        return;
    }

    function updatesuprecord($action, $id, $table){
        $this->db->where('session_id',$id);
        $this->db->update($table,$action);
        return;
    }

    function getAllCompanies(){
        $this->db->select("id,company_name");
        $this->db->from('customer_records');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query; 
    }

    function getAllSalesCompanies(){
        $this->db->select("id,company_name");
        $this->db->from('companies');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query; 
    }

    function getCompanyById($id){
        $this->db->select("id,industry_sector");
        $this->db->from('customer_records');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getCompanyIndustry($id){
        $this->db->select("ind.industry as industry_name, ind.id");
        $this->db->from('companies comp');
        $this->db->join('industry ind','ind.id = comp.industry','LEFT');
        $this->db->where('comp.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getContactById($id){
        $this->db->select("id,fname,lname");
        $this->db->from('customer_contact');
        $this->db->where('company_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query; 
    }

    function getSalesContactBYCompany($id){
        $this->db->select("id,fname,lname");
        $this->db->from('sales_contacts');
        $this->db->where('company',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query; 
    }

    function getContactInfoById($id){
        $this->db->select("email,mobile");
        $this->db->from('customer_contact');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getSalesContactInfoById($id){
        $this->db->select("email,mobile");
        $this->db->from('sales_contacts');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }
   
    function getcompanyAddress($id){
        $this->db->select();
        $this->db->from('customer_address');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query; 
    }
    

    function getindustryname($id){
        $this->db->select("industry");
        $this->db->from('industry');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getcontactname($id){
        $this->db->select("fname,lname");
        $this->db->from('customer_contact');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getEnquiryById($id){
        $this->db->select();
        $this->db->from('enquiry');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query; 
    }

    function getEnquiryInfoById($id){
        $this->db->select();
        $this->db->from('enquiry_qty');
        $this->db->where('enquiry_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query; 
    }

    function getLastRefNo(){
        $data = $this->db->order_by('ref_number',"desc")
            ->limit(1)
            ->get('enquiry')
            ->row();
        return $data; 
    }
    function getInvoiceNo()
    {
        $this->db->select('id');
        $this->db->from('invoice');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        $query = $query->row();
        if($query)
           return $query->id + 1;
        return 1;    
    }
    function getInvoiceDetail($id)
    {
        $this->db->select('*');
        $this->db->from('invoice');
        
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    function getInvoiceInquiry($id)
    {
        $this->db->select('*');
        $this->db->from('invoice');
        
        $this->db->where('enquiry_id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getOrder($invoice_id,$inquiry_quentity_id)
    {
        $this->db->select('*');
        $this->db->from('invoice_items');
        $this->db->where('invoice_id',$invoice_id);
        $this->db->where('inqu_quentity_id',$inquiry_quentity_id);
        $query = $this->db->get();
        return  $query->result_array();  
    }
    function getInvoiceOrderDetail($id)
    {
        $this->db->select('*');
        $this->db->from('invoice_items');
        $this->db->where('invoice_id',$id);
        $query = $this->db->get();
        return  $query->result_array();
    }
    function getInquiry($id)
    {
        $this->db->select('*');
        $this->db->from('enquiry');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return  $query->row();
    }
    function getProductInfoByPart($part){
        $this->db->select();
        $this->db->from('product');
        $this->db->where('part_number',$part);
        $query = $this->db->get();
        $query = $query->row();
        return $query; 
    }

    function getProductInfoByID($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();
        return $query; 
    }

    function getProductByPartAndManu($part, $manufacturer){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where(['part_number' => $part, 'manufacturer_name' => $manufacturer]);
        $query = $this->db->get();
        $query = $query->row();
        return $query; 
    }
    
    
    function getProductInfoByPartSupplier($part){
        $this->db->select();
        $this->db->from('supplier_stock');
        $this->db->where('part_number',$part);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query; 
    }
    function getSupplierName($id){
        $this->db->select();
        $this->db->from('supplier_stock');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();
        return $query->supplier_name; 
    }
    
    function get_where($id,$table)
    {
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from($table);
        $query = $this->db->get();
        $query = $query->row(); 
        return $query;
    }
    function get_where_array($id,$table)
    {
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from($table);
        $query = $this->db->get();
        $query = $query->result_array(); 
        return $query;
    }
    
    
    public function get_table_condition($table,$condition,$id){
        $query = $this->db->get_where($table, array($condition => $id));
        return $query->row_array();
    }

    # Update Feature 
    function updateFeature($id, $status){
        $this->db->where('id', $id);
        $this->db->update('manufacturer', ['featured' => $status]);
        return true;
    }
    
    function get_single_customeraddress($id){
        $this->db->select();
        $this->db->from('customer_address');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_supplier_address($id){
        $this->db->select();
        $this->db->from('supplier_address');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    
    function get_single_customerrecord($id){
        $this->db->select();
        $this->db->from('customer_records');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_supplierrecord($id){
        $this->db->select();
        $this->db->from('supplier_records');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

     function get_customercontact($id=""){
         $this->db->select();
        $this->db->from('customer_contact');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_suppliercontact($id=""){
         $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function updatecustaddress($action, $id, $table){
        $this->db->where('session_id',$id);
        $this->db->update($table,$action);
        return;
    }

    function updatesupaddress($action, $id, $table){
        $this->db->where('session_id',$id);
        $this->db->update($table,$action);
        return;
    }

    function updateone($action, $id, $table){
        $this->db->where('session_id ',$id);
        $this->db->update($table,$action);
        return;
    } 
     
    //-- delete function
    function delete($id,$table){
        return $this->db->delete($table, array('id' => $id));
    }
    //delete multipul recorde by passing $ids=array();
    function whereNotInDelete($ids,$table,$where='')
    {
       if($where!='')
       $this->db->where($where); 
       $this->db->where_not_in('id', $ids);
       $this->db->delete($table);    
    }
    
    
    function delete_mul_stock($ids)
    {
        $this->db->where_in('id', $ids);
        $this->db->delete("supplier_stock");
        

    }
    function delete_mul_prod($ids){
      $this->db->where_in('id', $ids);
      $this->db->delete("product");   
    } 

    //-- user role delete function
    function delete_user_role($id,$table){
        $this->db->delete($table, array('user_id' => $id));
        return;
    }


    //-- select function
    function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- check user role power
    function check_power($type){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id', $this->session->userdata('id'));
        $this->db->where('ur.action', $type);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    //-- check user role power
    function check_invoice($id){
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();
        if($query)
        return true;
        return false;
    }
    public function check_email($email){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }


    public function suspect(){
// $this->db->where('suspus', 0);
// $query = $this->db->get("customer_records");
// $query = $query->num_rows();
// return $query;

        $this->db->select('COUNT(suspus) as count');
        $this->db->from('customer_records');
        $this->db->where('suspus','0'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }


    public function order(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('enquiry');
        $this->db->where('suspus','0'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    public function quoted(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('enquiry');
        $this->db->where('suspus','1'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    public function partnere(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('enquiry');
        $this->db->where('suspus','2'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }


    public function prospect(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('customer_records');
        $this->db->where('suspus','1'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    
    

    public function suspectsup(){
// $this->db->where('suspus', 0);
// $query = $this->db->get("customer_records");
// $query = $query->num_rows();
// return $query;

        $this->db->select('COUNT(suspus) as count');
        $this->db->from('supplier_records');
        $this->db->where('suspus','0'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    public function prospectsup(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('supplier_records');
        $this->db->where('suspus','1'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    public function partnersup(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('supplier_records');
        $this->db->where('suspus','2'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

     public function partner(){
        $this->db->select('COUNT(suspus) as count');
        $this->db->from('customer_records');
        $this->db->where('suspus','2'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
          {
            $row = $query->row();
            return $row->count;
          }
          return 0;
    }

    public function check_exist_power($id){
        $this->db->select('*');
        $this->db->from('user_power');
        $this->db->where('power_id', $id); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }


    //-- get all power
    function get_all_power($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('power_id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all users with type 2
    function get_all_manufacturer(){
         $this->db->select();
        $this->db->from('manufacturer');
        $this->db->order_by('id','manufacturer');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_categories(){
         $this->db->select();
        $this->db->from('categories');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_subcategories(){
         $this->db->select();
        $this->db->from('subcategories');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_subcategories_by_id($cat_id){
         $this->db->select();
        $this->db->from('subcategories');
        $this->db->where('categories_name', $cat_id);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function get_contact(){
         $this->db->select();
        $this->db->from('contact');
        $this->db->where('id', 1);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_about(){
         $this->db->select();
        $this->db->from('about');
        $this->db->where('id', 1);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_slider(){
         $this->db->select();
        $this->db->from('slider');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_country(){
         $this->db->select();
        $this->db->from('country');
        $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_productcondition(){
         $this->db->select();
        $this->db->from('productcondition');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     function get_all_customer_records(){
         $this->db->select();
        $this->db->from('customer_records');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_customer_contact(){
         $this->db->select();
        $this->db->from('customer_contact');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    

    function get_all_customer_onlycontact(){

        if(isset($_SESSION['session_id'])){

            $sessionid = $_SESSION['session_id'];
            $this->db->select();
            $this->db->from('customer_contact');
            $this->db->where('session_id ',$sessionid);
            $query = $this->db->get();
            $query = $query->result_array();  
            return $query;
        }
    }


    function get_all_supplier_onlycontact(){
    $sessionid = $_SESSION['session_id'];
        $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->where('session_id ',$sessionid);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }



    function get_all_supplier_records(){
         $this->db->select();
        $this->db->from('supplier_records');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function get_all_supplier_contact(){
         $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function get_single_supplier_contact_info($id){
        $this->db->select();
        $this->db->from('supplier_records u');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_supplier_contact_infoone($id){
        $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    function get_totalsupplier_contact($id){
        $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->where('session_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_contact_recordinfo($sessionid){
        $this->db->select();
        $this->db->from('customer_records');
        $this->db->where('session_id',$sessionid);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_contact_recordinfosupplier($sessionid){
        $this->db->select();
        $this->db->from('supplier_records');
        $this->db->where('session_id',$sessionid);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


      function get_all_industry(){
         $this->db->select();
        $this->db->from('industry');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_supplier_industry(){
         $this->db->select();
        $this->db->from('supplier_industry');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     function get_all_product(){
         $this->db->select();
        $this->db->from('product');
        $this->db->order_by('id','DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function get_all_stock(){
         $this->db->select();
        $this->db->from('product');
        $this->db->order_by('id','DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // Sort by enquiry
    public function sort_by_enquiry($sort_by, $country_by)
    {
        $this->db->select('*');
        $this->db->from('enquiry');

        if($sort_by == 1){

            $this->db->order_by('id', 'DESC');
        }

        if($sort_by == 2){

            $this->db->order_by('id', 'ASC');
        }

        if($sort_by == 3){

            $this->db->order_by('company_name_front', 'ASC');
        }
        
        if($sort_by == 4){

            $this->db->order_by('company_name_front', 'DESC');
        }
        
        if($sort_by == 5){

            $this->db->order_by('industry_name', 'ASC');
        }
        
        if($sort_by == 6){

            $this->db->order_by('industry_name', 'DESC');
        }

        // if county is selected
        if( !empty( $country_by ) ){

            $this->db->where('country_id', $country_by);
        }

        //$this->db->where('status',$status);

        // if($status=='waiting')
        // $this->db->or_where('status','draft');

        // if($status=='draft')
        // $this->db->or_where('status','waiting');
    
        $query = $this->db->get();
        $query = $query->result_array();  

        // echo $this->db->last_query();
        // exit;
        return $query;
    }

    public function get_all_inquery_unquilified($table,$column,$sort,$status)
    {
        $this->db->select();
        $this->db->from($table);

        if(!empty($sort) && !empty($column)){

            $this->db->order_by($column,$sort);
        }

        $this->db->where('status',$status);

        if($status=='waiting')
        $this->db->or_where('status','draft');

        if($status=='draft')
        $this->db->or_where('status','waiting');
    
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function getAllEnquiryOFCompany($company_id)
    {
        $this->db->select('*');
        $this->db->from('enquiry');
        //$this->db->where('status', 'waiting'); 
        $this->db->or_where('company_id', $company_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return  $query;  
    }

    function getAllEnquiryCountOFCompanies()
    {
        $this->db->select('company_id, COUNT(company_id) as total_enquiry');
        $this->db->group_by('company_id'); 
        $this->db->order_by('total_enquiry', 'desc'); 
        $this->db->from('enquiry');
        
        //$this->db->where('status', 'waiting'); 
        //$this->db->or_where('company_id', $company_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return  $query;  
    }

    function getLastEnquiryOFCompanies()
    {
        $this->db->select('company_id');
        $this->db->group_by('company_id'); 
        $this->db->order_by('id', 'desc'); 
        $this->db->from('enquiry');
        
        //$this->db->where('status', 'waiting'); 
        //$this->db->or_where('company_id', $company_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return  $query;  
    }

    function unqailifidInquiry()
    {
        $this->db->select();
        $this->db->from('enquiry');
        $this->db->where('status', 'waiting'); 
        $this->db->or_where('status', 'draft');
        $query = $this->db->get();
        $query = $query->result_array();
        return  count($query);  
    }
    function updateInquery($id,$status)
    {
        $this->db->where('id', $id);
        $this->db->update('enquiry',['status'=>$status]);
        return true;
    }
    function quotedInquiry()
    {
        $this->db->select();
        $this->db->from('enquiry');
        $this->db->where('status', 'confirm'); 
        $query = $this->db->get();
        $query = $query->result_array();
        return  count($query);  
    }
    function get_all_records_sorte($table,$column,$sort){
        $this->db->select();
        $this->db->from($table);
        if(!empty($sort) && !empty($column)){
            $this->db->order_by($column,$sort);
        }
        
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_records_sort($table,$column,$sort,$search,$value,$country=''){
        $this->db->select();
        $this->db->from($table);
        if(!empty($sort) && !empty($column)){
            $this->db->order_by($column,$sort);
        }
        if($search!=''){
        $this->db->where($search, $value);    
        }
        if($country!='')
        $this->db->where('country', $country);    
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function get_all_product_load_more($page,$table){ 
        $offset = $page; 
        $limit = 10; 
        
        $sql = "select * from $table limit $offset ,$limit"; 
        // echo $sql; 
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function get_all_product_by_manufacture($name){
        $this->db->select();
       $this->db->from('product');
       $this->db->where('manufacturer_name',$name);
       $this->db->order_by('id','DESC');
       $this->db->limit('10');
       $query = $this->db->get();
       $query = $query->result_array();  
       return $query;
   }

    public function get_all_product_by_manufacture_load_more($page,$q){ 
        $offset = $page; 
        $limit = 10; 
        
        $sql = "select * from product where manufacturer_name='$q' limit $offset ,$limit"; 
        $result = $this->db->query($sql)->result();
        return $result;
    }

   

    function get_all_users($table='',$column='',$sort='',$department='',$country=''){
        $this->db->select();
        if($table!='')
        $this->db->from($table);
        else    
        $this->db->from('user');
        if($column!='')
        $this->db->order_by($column, $sort);
        else    
        $this->db->order_by('id','DESC');
        if($department!=''&&$department!='all')
        $this->db->where('department', $department);  
        if($country!='')
        $this->db->where('country', $country);    
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_all_records($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_single_product_info($id){
        $this->db->select();
        $this->db->from('product');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_subcategories_info($id){
        $this->db->select();
        $this->db->from('subcategories');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_partnumber($id){
        $this->db->select();
        $this->db->from('product');
        $this->db->like('part_number',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_single_product_infoone($id){
        $this->db->select();
        $this->db->from('product');
        $this->db->where('part_number',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_employee_info($id){
        $this->db->select();
        $this->db->from('user');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    

    function get_single_industry_info($id){
        $this->db->select();
        $this->db->from('industry');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function get_single_supplier_industry_info($id){
        $this->db->select();
        $this->db->from('supplier_industry');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function getcustomer_contact($id){
        $this->db->select();
        $this->db->from('customer_contact');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    function getsupplier_contact($id){
        $this->db->select();
        $this->db->from('supplier_contact');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function get_all_role_permission()
    {
        $this->db->select();
        $this->db->from('employee_role');
        $this->db->order_by('id','DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }
     function get_permission_against_role($id)
    {
        $this->db->select();
        $this->db->from('employee_role');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->row()->permission;
        return $query;
    }



    function getcustomer_record($id){
        $this->db->select();
        $this->db->from('customer_records');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


     function getsupplier_record($id){
        $this->db->select();
        $this->db->from('supplier_records');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

     function get_single_manufacturer_info($id){
        $this->db->select();
        $this->db->from('manufacturer u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_categories_info($id){
        $this->db->select();
        $this->db->from('categories u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


     function get_single_slider_info($id){
        $this->db->select();
        $this->db->from('slider u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_country_info($id){
        $this->db->select();
        $this->db->from('country u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_contact(){
        $this->db->select();
        $this->db->from('contact');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    function get_single_home($id){
        $this->db->select('*');
        $this->db->from('home');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_single_homee(){
        $this->db->select('*');
        $this->db->from('home');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }    

    function get_single_social($id){
        $this->db->select('*');
        $this->db->from('social');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_single_sociall(){
        $this->db->select('*');
        $this->db->from('social');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

  

    function get_single_about($id){
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function get_single_home_front($id){
        $this->db->select('*');
        $this->db->from('home_front');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function get_single_home_frontt(){
        $this->db->select('*');
        $this->db->from('home_front');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     function get_return_policy(){
        $this->db->select();
        $this->db->from('return_policy');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_privacy_policy(){
        $this->db->select();
        $this->db->from('privacy_policy');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_terms_and_conditions(){
        $this->db->select();
        $this->db->from('terms_and_conditions');
        $this->db->where('id',1);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    function get_single_customer_contact_info($id){
        $this->db->select();
        $this->db->from('customer_contact u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_supplier_contact_info1($id){
        $this->db->select();
        $this->db->from('supplier_contact u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

   
    //-- get logged user info
    function get_user_info(){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get single user info
    function get_single_user_info($id){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }




    //-- get single user info
    function get_user_role($id){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all users with type 2
    function get_all_user(){
        $this->db->select('u.*');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- count active, inactive and total user
    function get_user_total(){
        $this->db->select('*');
        $this->db->select('count(*) as total');
        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 1)
                            )
                            AS active_user',TRUE);

        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 0)
                            )
                            AS inactive_user',TRUE);

        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.role = "admin")
                            )
                            AS admin',TRUE);

        $this->db->from('user');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    //-- image upload function with resize option
    function upload_image($max_size){
            
            //-- set upload path
            $config['upload_path']  = "./assets/images/";
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("photo")) {

                
                $data = $this->upload->data();

                //-- set upload path
                $source             = "./assets/images/".$data['file_name'] ;
                $destination_thumb  = "./assets/images/thumbnail/" ;
                $destination_medium = "./assets/images/medium/" ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;

                /* Resizing Processing */
                // Configuration Of Image Manipulation :: Static
                $this->load->library('image_lib') ;
                $img['image_library'] = 'GD2';
                $img['create_thumb']  = TRUE;
                $img['maintain_ratio']= TRUE;

                /// Limit Width Resize
                $limit_medium   = $max_size ;
                $limit_thumb    = 200 ;

                // Size Image Limit was using (LIMIT TOP)
                $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;

                // Percentase Resize
                if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
                    $percent_medium = $limit_medium/$limit_use ;
                    $percent_thumb  = $limit_thumb/$limit_use ;
                }

                //// Making THUMBNAIL ///////
                $img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
                $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_thumb-'.floor($img['width']).'x'.floor($img['height']) ;
                $img['quality']      = ' 100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_thumb ;

                $thumb_nail = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                ////// Making MEDIUM /////////////
                $img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
                $img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_medium-'.floor($img['width']).'x'.floor($img['height']) ;
                $img['quality']      = '100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_medium ;

                $mid = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                //-- set upload path
                $images = 'assets/images/medium/'.$mid;
                $thumb  = 'assets/images/thumbnail/'.$thumb_nail;
                unlink($source) ;

                return array(
                    'images' => $images,
                    'thumb' => $thumb
                );
            }
            else {
                echo "Failed! to upload image" ;
            }
            
    }

} 