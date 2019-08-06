<?php
class Companies_Model extends CI_Model {

    //-- insert function
    public function insert($data,$table){

        $this->db->insert($table,$data);    

        return $this->db->insert_id();
    }

    // show all sales companies
    public function getAllSalesCompanies(){

        $this->db->select('comp.*, indus.industry as industry_name');
        $this->db->from('companies comp');
        $this->db->join('industry indus','indus.id = comp.industry');
        $this->db->where('comp.company_type', 1);
        $this->db->where('comp.status', 1);
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

    // DELETE COMPANY
    public function archieve($id)
    {
        $this->db->where('id', $id);
        $this->db->update('companies', ['status' => 0]);
        return true;
    }

} 