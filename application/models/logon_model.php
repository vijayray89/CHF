<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logon_model extends CI_Model {
    // your model


    public function get_data(){

        $this->db->select('*')->from('tbl_schools');
        $query=$this->db->get();
        return $query->result('array');
    
     }

     public function get_scholl_data_ByID($id=""){

        $this->db->select('*')->from('tbl_schools');
        $this->db->where('school_id', $id);
        $query=$this->db->get();
        return $query->row_array();

     }


 }
?>
