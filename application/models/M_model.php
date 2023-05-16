<?php
 class M_model extends CI_model
 {
     public function tampildata($table)
     {
         return $this->db->get($table);
     }
     public function simpandata($table,$data){
         $this->db->insert($table,$data);
     }
     public function hapusdata($where,$table){
         $this->db->where($where);
         $this->db->delete($table);
     }
     public function editdata($where,$table){		
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 }

?>