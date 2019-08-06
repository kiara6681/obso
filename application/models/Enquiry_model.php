<?php
class Enquiry_model extends CI_Model {

    //-- insert function
    public function insert_enwuiry($enquiry_data){

    //     $data = array(
    //         'company_id' => ,
    //         'ref_number' => ,
    //         'company_name' => ,
    //         'industry_id' => ,
    //         'company_id' => ,
    //         'company_id' => ,
    //         'company_id' => ,
    //         'company_id' => ,
    //         'company_id' => ,
    //         'company_id' => ,

    //     );
    //     $this->db->insert($table,$data);        
    //     return $this->db->insert_id();
    // }

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


} 