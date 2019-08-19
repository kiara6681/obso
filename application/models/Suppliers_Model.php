<?php
class Suppliers_Model extends CI_Model {

    //-- insert function
    public function insert($data,$table){

        $this->db->insert($table,$data);    

        return $this->db->insert_id();
    }

    // show all sales companies
    public function getAllSupplierContacts($status = null, $id = null){

        $this->db->select('*');
        $this->db->from('suppliers');
        if(!is_null($status))
        {
            $this->db->where('status', $status);
        }

        if(!is_null($id))
        {
            $this->db->where('id', $id);
            $this->db->group_by('id');
            $query = $this->db->order_by('id desc')->get();
            $query = $query->row();  

        }else{
            $this->db->group_by('id');
            $query = $this->db->order_by('id desc')->get();
            $query = $query->result_array();  
        }
        return $query;
    }

    // get sales related companies
    public function getAllSupplierManufacturer(){

        $this->db->select('*');
        $this->db->from('supplier_manufacturers');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // Show All Contact Address
    public function getAllSalesAddress(){

        $this->db->select('address.*, cntry.name as country_name, cntry.flag');
        $this->db->from('sales_contact_addresses address');
        $this->db->join('country cntry','cntry.id = address.country');
         $this->db->group_by('address.id');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // show all supplier companies
    public function getAllSupplierCompanies(){

        $this->db->select('comp.*, indus.industry as industry_name');
        $this->db->from('companies comp');
        $this->db->join('supplier_industry indus','indus.id = comp.industry');
        $this->db->where('comp.company_type', 2);
        $this->db->where('comp.status', 1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function updateStatus($id, $status){

        $this->db->where('id', $id);
        $this->db->update('suppliers', array('status' => $status));
        return true;
    }
    
    public function deleteAddress($id, $table){
        return $this->db->delete($table, array('session_id' => $id));
    }
    
    public function deleteSupplierData($id, $table){
        return $this->db->delete($table, array('supplier_id' => $id));
    }

    // get Supplier Main Contacts
    public function getSupplierMainContact(){
        $this->db->select('*');
        $this->db->from('suppliers_contacts');
        $this->db->where('as_manager', 1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // get Supplier Address
    public function getContactsAddress($id){
        $this->db->select('*');
        $this->db->from('supplier_address');
        $this->db->where('session_id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // get Supplier Contacts
    public function getSupplierContact($id){
        $this->db->select('*');
        $this->db->from('suppliers_contacts');
        $this->db->where('supplier_id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // get Supplier Menufacturer
    public function getSupplierManufacturers($id){
        $this->db->select('*');
        $this->db->from('supplier_manufacturers');
        $this->db->where('supplier_id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // get Enqury by Supplier Contact ID
    public function getSupplierEnqury($contact_id){
        $this->db->select('*');
        $this->db->from('enquiry');
        $this->db->where('contact_id', $contact_id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // get single company information
    function getCompanyByID($id){
        $this->db->select('*');
        $this->db->from('companies');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    // Edit company
    public function edit_company($data, $id){

        $this->db->where('id', $id);
        $this->db->update('companies', $data);
        return;
    }

    // Edit Contact
    public function updateContact($data, $id){

        $this->db->where('id', $id);
        $this->db->update('suppliers', $data);
        return;
    }

    // DELETE COMPANY
    public function archieve($id)
    {
        $this->db->where('id', $id);
        $this->db->update('companies', ['status' => 0]);
        return true;
    }

    // sort by country
    public function sort_by_companies($sort_by, $country_by)
    {
        $this->db->select('comp.*, indus.industry as industry_name');
        $this->db->from('companies comp');
        $this->db->join('industry indus','indus.id = comp.industry');

        if($sort_by == 1){

            $this->db->order_by('comp.id', 'DESC');
        }

        if($sort_by == 2){

            $this->db->order_by('comp.id', 'ASC');
        }

        if($sort_by == 3){

            $this->db->order_by('comp.company_name', 'ASC');
        }
        
        if($sort_by == 4){

            $this->db->order_by('comp.company_name', 'DESC');
        }
        
        if($sort_by == 5){

            $this->db->order_by('indus.industry', 'ASC');
        }
        
        if($sort_by == 6){

            $this->db->order_by('indus.industry', 'DESC');
        }

        // if county is selected
        if( !empty( $country_by ) ){

            $this->db->where('comp.country', $country_by);
        }
    
        $query = $this->db->get();
        $query = $query->result_array();  

        return $query;
    }

    // Sort By sales companies
    public function sortBySupplierContacts($sort_by = null, $show_only = null)
    {

        $this->db->select('contacts.*, indus.industry as industry_name, company.company_name');
        $this->db->from('sales_contacts contacts');
        $this->db->join('companies company','company.id = contacts.company','left');
        $this->db->join('industry indus','indus.id = company.industry');
        $this->db->where('contacts.status !=', 0);

        if(!is_null($sort_by)){
            if($sort_by == 1){
                $this->db->order_by('contacts.fname', 'asc');
            }
            if($sort_by == 2){
                $this->db->order_by('contacts.fname', 'desc');
            }
            if($sort_by == 13){
                $this->db->order_by('contacts.created_at', 'asc');
            }
            if($sort_by == 14){
                $this->db->order_by('contacts.created_at', 'desc');
            }if($sort_by == 15){
                $this->db->order_by('indus.industry', 'asc');
            }
            if($sort_by == 16){
                $this->db->order_by('indus.industry', 'desc');
            }
        }

        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // sort and show only suppliers
    public function sortBySuppliers($sort_by = null, $show_only = null)
    {
        $this->db->select('sups.*');
        $this->db->from('suppliers sups');

        if($show_only == 15 || $show_only == 16 || $show_only == 17 || $show_only == 18 || $show_only == 19 || $show_only == 20){ 

            $manufacturer = 0;
            if($show_only == 15){ $manufacturer = 21; }
            if($show_only == 16){ $manufacturer = 2; }
            if($show_only == 17){ $manufacturer = 14; }
            if($show_only == 18){ $manufacturer = 15; }
            if($show_only == 19){ $manufacturer = 13; }
            if($show_only == 20){ $manufacturer = 4; }

            $this->db->join('supplier_manufacturers sup_man','sup_man.supplier_id = sups.id', 'LEFT');
            //$this->db->join('manufacturer man','man.id = sup_man.manufacturer', 'LEFT');
            $this->db->where('sup_man.manufacturer', $manufacturer);
        }

        $this->db->where('sups.status !=', 0);

        if(!is_null($sort_by)){
            if($sort_by == 1){
                $this->db->order_by('sups.company', 'asc');
            }
            if($sort_by == 2){
                $this->db->order_by('sups.company', 'desc');
            }
            if($sort_by == 13){
                $this->db->order_by('sups.created_at', 'asc');
            }
            if($sort_by == 14){
                $this->db->order_by('sups.created_at', 'desc');
            }
        }

        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    // Get contact records of this supplier
    public function getContactRecords($supplier_id){
        $this->db->select('*');
        $this->db->from('suppliers_contacts');
        $this->db->where('supplier_id', $supplier_id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
} 